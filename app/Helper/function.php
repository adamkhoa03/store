<?php
function showErrors($errors,$input){
    if($errors->has($input)){
        echo '<div class="alert alert-danger"><strong>'.$errors->first($input).'</strong></div>';
    }
}



function menuCategory($array,$parentID,$string){
   foreach($array as $item){
        if($item['parent'] == $parentID){
            echo '<option value="'.$item['id'].'">'.$string.$item->name.'</option>';
            menuCategory($array,$item->id,'---|'.$string);
        }
   }
}


function showCategory($category,$parentID,$string){
foreach($category as $item){
    if($item->parent == $parentID){
       $i = "";
       $i .= '<div class="item-menu"><span>'.$string.$item->name.'</span>';
       $i .= '<div class="category-fix">';
       $i .= '<a class="btn-category btn-primary" href="'.route('category.edit',['id'=>$item->id]).'"><i class="fa fa-edit"></i></a>';
       $i .= '<a onclick class="btn-category btn-danger" href="'.route('category.delete',['id'=>$item->id]).'"><i class="fas fa-times"></i></i></a>';
       $i .= '</div></div>';
       echo $i;
       showCategory($category,$item->id,'---|'.$string);
    }
}
}

function editCategory($category,$parentID,$string,$isParent){
    foreach($category as $item){
        if($item->parent == $parentID){
            if($item->id == $isParent){
                echo '<option selected value="'.$item['id'].'">'.$string.$item->name.'</option>';
            }
            else{
                echo '<option value="'.$item['id'].'">'.$string.$item->name.'</option>';
            }
            editCategory($category,$item->id,'--|'.$string,$isParent);
        }
    }
}


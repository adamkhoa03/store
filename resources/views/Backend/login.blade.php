<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <base href="backend/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/styles.css" rel="stylesheet">

	<style>
		.git {
		  background-color: #24292e;
		  color: white;
		}
		
		.twitter {
		  background-color: #55ACEE;
		  color: white;
		}
		
		.google {
		  background-color: #dd4b39;
		  color: white;
		}
		
		input[type=submit]:hover {
		  background-color: #45a049;
		}
		</style>
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Trang quản trị</div>
				<div class="panel-body">
					<form role="form" method="POST">
						@if (session('danger'))
							<div class="alert alert-danger">{{ session('danger') }}</div>
						@endif
						<fieldset>
							<div class="form-group">
								{{ showErrors($errors,'email') }}
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{ Old('email') }}">
							</div>
							<div class="form-group">
								{{ showErrors($errors,'password') }}
								<input class="form-control" placeholder="Password" name="password" type="password" value="{{ Old('password') }}">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Nhớ mật khẩu
								</label>
							</div>
							<input type="submit" name="sbm" value="Đăng nhập" class="btn btn-primary">
							@foreach ($errors as $item)
								{{ $item }}
							@endforeach
						</fieldset>
						<div style="font-size: 15px; margin-top: 15px;">Hoặc đăng nhập với...</div>
						{{-- Social --}}
						<div class="col" style="margin-top: 15px">
							<a href="{{ route('auth',['social'=>'github']) }}" class="git btn">
							  <i class="fa fa-github fa-fw"></i> Github
							</a>
							<a href="" class="twitter btn">
							  <i class="fa fa-twitter fa-fw"></i>Twitter
							</a>
							<a href="" class="google btn">
							  <i class="fa fa-google fa-fw"></i>Google+
							</a>
						  </div>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
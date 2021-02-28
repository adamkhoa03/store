
             (function() {
                var client = algoliasearch('NAAKGA48CA', '515297d8ff6fb5b33f2741e99d2d9f2e');
                var index = client.initIndex('Users_Index');
                var enterPressed = false;
                autocomplete('#aa-search-input', {
                    hint: false
                }, {
                    // cau hinh hien thi
                    source: autocomplete.sources.hits(index, {
                        hitsPerPage: 10
                    }),
                    displayKey: 'full',
                    templates: {
                        // hien thi de xuat
                        suggestion: function(suggestion) {
                            const markup = `
                        <div class="algolia-result">
                            <img style="width:30px;height:30px;border-radius:30px; margin-right:5px" src="${(suggestion.avatar)}">
                            <span>
                            ${suggestion._highlightResult.full.value}
                        </span>
                        </div>
                    `;

                            return markup;
                        },
                        empty: function(result) {
                            return 'Xin lỗi, chúng tôi không tìm thấy kết quả với từ khóa "' + result
                                .query + '"';
                        }
                    }
                }).on('autocomplete:selected', function(event, suggestion, dataset) {
                    window.location.href = window.location.origin +
                        '/store/admin/quan-tri-vien/sua-quan-tri/' + suggestion.objectID + '.html';
                    enterPressed = true;
                });
            })();

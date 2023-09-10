$(document).ready(function () {
    createSelect2($("#mainCategory"),null);
})

function addSubCategory(parent_id,element) {


    element.parent().find(".sub-category-container").remove();

    const subCategoryContainer = `  <div class="col-12 sub-category-container" >
            <div class="my-3">
                <label for="mainCategory" class="form-label">Sub Category of ${parent_id}</label>
                <select class="form-control" id="sub-category-${parent_id}">

                </select>


            </div>
        </div>`;


    element.parent().append(subCategoryContainer);

    createSelect2($(`#sub-category-${parent_id}`),parent_id);
}



function createSelect2(element,parent_id) {
    element.select2({
        ajax: {
            url: '/categories/get-select-category-options',
            dataType: 'json',
            placeholder: 'Select category',
            data: function (params) {
                var query = {
                    search: params.term,
                    page: params.page || 1,
                    parent_id: parent_id,
                }

                // Query parameters will be ?search=[term]&type=public
                return query;
            },
            processResults: function (data, params) {
                params.page = params.page || 1;


                return {
                    results: data.data.map((val) => {
                        return {
                            id: val.id,
                            text: val.name,
                        }
                    }),
                    pagination: {
                        more: params.page < data.last_page
                    }


                };
            }

        }
    });

    element.change(function () {
        addSubCategory($(this).val(),$(this))
    });
}

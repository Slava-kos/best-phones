function getData(obj_form){
    var hData = {};
    $('input, textarea, select', obj_form).each(function () {
        if(this.name && this.name !==''){
            hData[this.name] = this.value;
            console.log('hData[' + this.name + '] = ' + hData[this.name]);
        }
    });
    return hData;
};

function newCategory(){
    var postData = getData('#blockNewCategory');
    //console.log(postData);
    $.ajax({
        type: 'POST',
        async: false,
        url: "/admin/addnewcat/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            if (data['success'] ){
                $('#newCategoryName').val('');
            }
        }
    });
}


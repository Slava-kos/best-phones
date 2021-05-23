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

function updateCat(itemId){
    
    var parentId = $('#parentId_' + itemId).val();
    var newName = $('#itemName_' + itemId).val();
    var postData = {itemId: itemId, parentId: parentId, newName: newName};
    //console.log(postData);
    $.ajax({
        type: 'POST',
        async: false,
        url: "/admin/updatecategory/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
        }
    });
}

function addProduct(){
    var itemName = $('#newItemName').val();
    var itemPrice = $('#newItemPrice').val();
    var itemDesc = $('#newItemDesc').val();
    var itemCatId = $('#newItemCatId').val();
    
    var postData = {itemName: itemName, itemPrice: itemPrice,
                    itemDesc: itemDesc, itemCatId: itemCatId};
    $.ajax({
        type: 'POST',
        async: false,
        url: "/admin/addproduct/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            if (data['success'] ){
                $('#newItemName').val('');
                $('#newItemPrice').val('');
                $('#newItemDesc').val('');
                $('#newItemCatIds').val('');
            }
        }
    });
}


function updateProduct(itemId){
    var itemName = $('#itemName_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).val();
    var itemCatId = $('#itemCatId_' + itemId).val();
    var itemDesc = $('#itemDesc_' + itemId).val();
    var itemStatus = $('#itemStatus_' + itemId).prop('checked');
    if(! itemStatus){
        itemStatus = 1;
    } else {
      itemStatus = 0;  
    }
    
    var postData = {itemId: itemId, itemName: itemName, itemPrice: itemPrice,
                    itemCatId: itemCatId, itemDesc: itemDesc, itemStatus: itemStatus};
    console.log(postData);
    $.ajax({
        type: 'POST',
        async: false,
        url: "/admin/updateproduct/",
        data: postData,
        dataType: 'json',
        success: function(data){
            alert(data['message']);
            }
    });
}
function showProducts(id){
	var objName = "#purchasesForOrderId_" + id;
	if( $(objName).css('display') != 'table-row' ) {
		$(objName).show();
	} else {
		$(objName).hide();
	}
}


function updateOrderStatus(itemId){
    var status = $('#itemStatus_' + itemId).prop('checked');
    if(! status){
        status = 0;
    } else {
        status = 1;
    }
    var postData ={itemId: itemId, status: status};
    
    $.ajax({
        type: 'POST',
        async: false,
        url: "/admin/setorderstatus/",
        data: postData,
        dataType: 'json',
        success: function(data){
            if(! data['success']) 
                alert(data['message']);
        }
    });
}

function updateDatePayment(itemId){
    var datePayment = $('#datePayment_' + itemId).val();
    var postData = {itemId: itemId, datePayment: datePayment};
    
    $.ajax({
       type: 'POST',
       async: false,
       url: "/admin/setorderdatepayment/",
       data: postData,
       dataType: 'json',
       succes: function (data){
           if(! data['success']) 
               alert(data['message']);
       }
    });
}
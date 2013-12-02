$(function(){
    // Get the id for the user's Main Collection
    
    
    // Put the info in the panel
    
    
    /* Navigation */
    $('nav').on('click', '.collection-nav', function(e){
        e.preventDefault();
        var collectionID = $(this).attr('data-collection_id');
        var collectionName = $(this).html();
        $('#collectionName').html(collectionName);
        $.post('collection.php', { collectionID: collectionID }, function(data){
            //$('#collectionError').html(data).show();
            //return;
            var result = $.parseJSON(data);
            var errorClass = '';
            if ( result.success == 'true') {
                errorClass = 'alert-success';
                $('#collectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).hide();
                //$('#collectionName').html(result.collectionName);
                $('#collectionGrid').html(result.output);
            } else {
                errorClass = 'alert-warning';
                $('#collectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
            }
        });
        $('#collectionPane').show();
    });
    
    /* Bring up item info */
    $('.collection-grid').on('click', 'img.itemImageSmall', function(e){
        e.preventDefault();
        var itemID = $(this).closest('.collection-item').attr('data-id');
        //alert('Item ID = ' + itemID);
        $.post('itemInfo.php', { itemID: itemID }, function(data){
            var details = $.parseJSON(data);
            var modal = $('#itemInfo');
            modal.find('.itemImage').attr('src', details.imagePath + details.imageName);
            modal.find('#title').html(details.title);
            modal.find('#description').find('.details').html(details.description);
            modal.find('#mimeType').find('.details').html(details.imageType);
            modal.find('#fileSize').find('.details').html(details.imageSize);
            modal.modal();
        });
    });
});


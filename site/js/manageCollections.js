$(function(){
    /* create collection */
    $('#newCollectionForm').submit(function(e){
        e.preventDefault();
        var operationType = 'CREATE';
        var userID = $('input[name="user_id"]').val();
        var collectionName = $('input[name="collectionName"').val();
        $.post('manageCollection.php', { operationType: operationType, userID: userID, collectionName: collectionName }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                } else {
                    errorClass = 'alert-warning';
                }
                $('#newCollectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
            }
        });
    });
    
});
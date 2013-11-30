$(function(){
    /* create collection */
    $('#newCollectionForm').submit(function(e){
        e.preventDefault();
        var operationType = 'CREATE';
        var collectionName = $('input[name="collectionName"').val();
        $.post('manageCollection.php', { operationType: operationType, collectionName: collectionName }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                    $('input[name="collectionName"').val('');
                    getUserCollections();
                } else {
                    errorClass = 'alert-warning';
                }
                $('#newCollectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
                
            }
        });
    });
    
    /* Delete a collecion */
    $('#collectionList').on('click', '.btn-deleteCollection', function(e){
        e.preventDefault();
        var operationType = 'DELETE';
        var collectionID = $(this).closest('.collection-listing').attr('data-collection_id');
    });
    
    /* Edit a collecion */
    $('#collectionList').on('click', '.btn-editCollection', function(e){
        e.preventDefault();
        var operationType = 'EDIT';
    });
});

/* Get the user's collections and display them */
function getUserCollections() {
    var operationType = 'GET';
    $.post('manageCollection.php', { operationType: operationType }, function(data){
        $('#collectionList').html(data);
    });
}
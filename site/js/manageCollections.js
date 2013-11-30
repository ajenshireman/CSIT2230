$(function(){
    /* create collection */
    $('#newCollectionForm').submit(function(e){
        e.preventDefault();
        var operationType = 1;
        var collectionName = $('input[name="collectionName"').val();
        $.post('manageCollection.php', { operationType: operationType, collectionName: collectionName }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                } else {
                    errorClass = 'alert-warning';
                }
                $('#newCollectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
                $('input[name="collectionName"').val('');
                getUserCollections();
            }
        });
    });
    
    /* Delete a collecion */
    $('#collectionList').on('click', '.btn-deleteCollection', function(e){
        e.preventDefault();
        var operationType = 2;
    });
    
    /* Edit a collecion */
    $('#collectionList').on('click', '.btn-editCollection', function(e){
        e.preventDefault();
        var operationType = 3;
    });
});

/* Get the user's collections and display them */
function getUserCollections() {
    var operationType = 4;
    $.post('manageCollection.php', { operationType: operationType }, function(data){
        $('#collectionList').html(data);
    });
}
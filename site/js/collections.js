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
});


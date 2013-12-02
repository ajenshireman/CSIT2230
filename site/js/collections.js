$(function(){
    /* Navigation */
    $('nav').on('click', '.collection-nav', function(e){
        e.preventDefault();
        var collectionID = $(this).attr('data-collection_id');
        $.post('collection.php', { collectionID: collectionID }, function(data){
            alert(data);
            return;
            var result = $.parseJSON(data);
            var errorClass = '';
            if ( result.success == 'true') {
                errorClass = 'alert-success';
                $('#collectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).hide();
                $('#collectionName').html(result.collectionName);
                $('#collectionGrid').html(result.output);
            } else {
                errorClass = 'alert-warning';
                $('#collectionError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
            }
            
        });
    });
});


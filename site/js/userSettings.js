$(function(){
    updateUser();
    
    /* Update the user information */
    function updateUser () {
        var user = '<?php echo json_encode($user) ?>';
        $('.currentUsername').html(user.username);
        $('.currentEmail').html(user.email);
    }
    
    /* Navigation */
    $('.swap').click(function(e){
        e.preventDefault();
        $('.form-swap').hide().find('input').val('');
        $('.form-swap').find('.alert').hide().html('');
        var target = '#' + $(this).attr('data-target');
        $(target).show();
    });
    
    $('.btn-cancel').click(function(e){
       e.preventDefault();
       $(this).closest('form').find('input').val('');
    });
    
    /* Change e-mail */
    $('#emailForm').submit(function(e){
        e.preventDefault();
        var newEmail = $('input[name="newEmail"]').val();
        var emailPassword = $('input[name="emailPassword"]').val();
        $.post('changeEmail.php', { email: newEmail, password: emailPassword }, function(data){
            if ( data ) {
                $('#emailError').html(data).addClass('alert-warning').show();
                //updateUser();
            } else {
                alert ('There has been an error');
            }
            
        });
    });
    
    /* Change Password */
    $('#passwordForm').submit(function(e){
        e.preventDefault();
    });
});
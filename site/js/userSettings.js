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
       $('.form-swap').find('.alert').hide().html('');
    });
    
    /* Change e-mail */
    $('#emailForm').submit(function(e){
        e.preventDefault();
        var newEmail = $('input[name="newEmail"]').val();
        var emailPassword = $('input[name="emailPassword"]').val();
        $.post('changeEmail.php', { email: newEmail, password: emailPassword }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorLoc = $('#emailError');
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                } else {
                    errorClass = 'alert-warning';
                }
                errorLoc.html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
                //updateUser();
            } else {
                alert ('There has been an error');
            }
            
        });
    });
    
    /* Change Password */
    $('#passwordForm').submit(function(e){
        e.preventDefault();
        //var currentPassword = $('input[name="currentPassword"]').val;
        var currentPassword = $('input[name="currentPassword"]').val();
        var newPassword = $('input[name="newPassword"]').val();
        var confirmPassword = $('input[name="confirmPassword"]').val();
        $.post('changePassword.php', { currentPassword: currentPassword, newPassword: newPassword, confirmPassword: confirmPassword }, function(data){
            if ( data ) {
                $('#passwordError').html(data).addClass('alert-warning').show();
            }
        });
    });
});
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
        $('.form-swap').find('.error').hide().html('');
        var target = '#' + $(this).attr('data-target');
        if ( target == '#deleteAccount') {
            $('#deleteAccountForm').hide();
            $('#confirmDeleteAccount').show();
        }
        $(target).show();
    });
    
    $('.btn-cancel').click(function(e){
        e.preventDefault();
        $(this).closest('form').find('input').val('');
        $('.form-swap').find('.error').hide().html('');
        if ( $(this).attr('name') == 'btnCancelDelete') {
            $('#deleteAccountForm').hide();
            $('#confirmDeleteAccount').show();
        }
    });
    
    $('#btnConfirmDeleteAccount').click(function(){
        $('#deleteAccountForm').show();
        $('#confirmDeleteAccount').hide();
    });
    
    $('#btnCancelDeleteAccount').click(function(){
        $('.form-swap').hide();
        $('#details').show();
    });
    
    /* Change e-mail */
    $('#emailForm').submit(function(e){
        e.preventDefault();
        var newEmail = $('input[name="newEmail"]').val();
        var emailPassword = $('input[name="emailPassword"]').val();
        $.post('changeEmail.php', { email: newEmail, password: emailPassword }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                } else {
                    errorClass = 'alert-warning';
                }
                $('#emailError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
                //updateUser();
            } else {
                alert ('There has been an error');
            }
            
        });
    });
    
    /* Change Password */
    $('#passwordForm').submit(function(e){
        e.preventDefault();
        var currentPassword = $('input[name="currentPassword"]').val();
        var newPassword = $('input[name="newPassword"]').val();
        var confirmPassword = $('input[name="confirmPassword"]').val();
        $.post('changePassword.php', { currentPassword: currentPassword, newPassword: newPassword, confirmPassword: confirmPassword }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                } else {
                    errorClass = 'alert-warning';
                }
                $('#passwordError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
            }
        });
    });
    
    /* Delete Account */
    $('#deleteAccount').submit(function(e){
        e.preventDefault();
        var deletePassword = $('input[name="deletePassword"]').val();
        $.post('deleteAccount.php', { password: deletePassword }, function(data){
            if ( data ) {
                var result = $.parseJSON(data);
                var errorClass = '';
                if ( result.success == 'true') {
                    errorClass = 'alert-success';
                    window.location = 'index.php';
                } else {
                    errorClass = 'alert-warning';
                }
                $('#deleteAccountError').html(result.message).removeClass('alert-warning alert-success').addClass(errorClass).show();
            }
        });
    });
});
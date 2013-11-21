$(function(){
    /* Navigation */
    $('.swap').click(function(e){
        e.preventDefault();
        $('.form-swap').hide().find('input').val('');
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
    });
    
    /* Change Password */
    $('#passwordForm').submit(function(e){
        e.preventDefault();
    });
});
/* User Login */
$('document').ready(function(){
    $('#loginForm').submit(function(e){
        e.preventDefault();
        login();
    });
    
    $('#registerForm').submit(function(e){
        e.preventDefault();
        register();
    });
    
    $('.toggle-form').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        console.log('toggle forms');
        resetForms();
        $('.form-toggle').toggle();
    });
    
    $(document).click(function(){
        resetForms();
    });
    
    $('.pwToggle').click(function(e){
        if ( this.checked ) {
            $(this).closest('form').find('input[name*=Password]').attr('type', 'text');
        } else {
            $(this).closest('form').find('input[name*=Password]').attr('type', 'password');
        }
        
    });
    
    $('#logout').click(function(e){
        e.preventDefault();
        $.post('logout.php', {}, function(data){
            window.location = 'index.php';
        });
    });
});

function login () {
    var username = $('#loginUsername').val();
    var password = $('#loginPassword').val();
    $.post('login.php', { username: username, password: password }, function(data) {
        if ( data ) {
            $('#loginError').css({'display': 'block'}).html(data);
        } else {
            window.location = 'index.php';
        }
    });
}

function register () {
    var username = $('#registerUsername').val();
    var password = $('#registerPassword').val();
    var password_confirm = $('#registerConfirmPassword').val();
    var email = $('#registerEmail').val();
    
    $.post('register.php', { username: username, password: password, password_confirm: password_confirm, email: email }, function(data){
        if ( data ) {
            $('#registerError').css({'display': 'block'}).html(data);
        } else {
            window.location = 'index.php';
        }
    });
}

// Clears the login and registration forms
function resetForms () {
    $('.message.error').html('');
    $('.form-toggle').find('input').val('');
}

/* for prototype: add links to info demo page to all collection images */


$('document').ready(function(){
    setNavigation();
    initRating();
});

function setNavigation () {
    // only for demo, link to Item info page
    $('img.itemImageSmall').wrap('<a href="#"></a>');
    
    // for collection slider, show the info pane
    $('.collection-slider img.itemImageSmall').on('click', function(){
        // get the item id
        
        // open the pane and display the correct info
        var element = $('.itemInfo');
        element.toggle();
    });
    
    // for collection grid, show the modal info window
    //$('.collection-grid img.itemImageSmall').wrap('<a data-toggle="modal" href="#itemInfo"></a>');
    $('.collection-grid img.itemImageSmall').on('click', function(){
        // get the item id
        
        // open a modal window with the information
        $('#itemInfo').modal();
    });
    
    // link Collection titles in the main page to the grid page
    $('.collection .collection-header h1').wrapInner('<a href="#"></a>');
    $('.collection .collection-header h1').on('click', function(){
        window.location.href='collectionGrid.php';
    });
    
}

function initRating () {
    $('#rating5').on('mouseover', function(){
        this.style.color='red';
    });
    
    $('#rating5').on('mouseout', function(){
        this.style.color='black';
    });
}

/* Set the rating for the displayed movie */
function setRating ( newRating ) {
    
}

/* for prototype: add links to info demo page to all collection images */


$('document').ready(function(){
    setNavigation();
    initRating();
});

function setNavigation () {
    // only for demo, link to Item info page
    $('img.itemImageSmall').wrap('<a href="#"></a>');
    
    // for real, open the info pane
    $('img.itemImageSmall').on('click', function(){
        // get the item id
        
        // open the pane and display the correct info
        var element = $('.itemInfo');
        element.toggle();
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

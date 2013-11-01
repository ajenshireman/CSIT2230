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
        window.location.href='collectionGrid.html';
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

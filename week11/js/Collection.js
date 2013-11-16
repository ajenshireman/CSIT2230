var setupDone = false;
var mainCollection = new Array();
var comedy = new Array();
var comic = new Array();
var horror = new Array();

$(document).ready(function(){
    if (!setupDone) {
        setup();
    }
    
    //setSideNav();
});

function setup () {
    //alert('setup');
    // build the collections
    mainCollection = buildCollection();
    comedy = buildSubCollection('comedy', mainCollection);
    comic = buildSubCollection('comic', mainCollection);
    horror = buildSubCollection('horror', mainCollection);
    
    //setSideNav();
    
    setup = true;
}

function setSideNav () {
    // set navigation
    //alert('setSideNav');
    $('#collectionMain').on('click', setCollection('Main Collection', 'mainCollection'));
    $('#collectionComedy').on('click', setCollection('Comedy', 'comedy'));
    $('#collectionComic').on('click', setCollection('Comic Book Movies', 'comic'));
    $('#collectionHorror').on('click', setCollection('Horror', 'horror'));
    $('#collectionSciFi').on('click', setCollection('Sci-Fi', 'scifi'));
}

function setCollection ( collectionName, collectionID ) {
    $('#collectionTitle').html(collectionName);
    //alert('collectionName');
}

function CollectionItem ( title, cover, genre ) {
    this.title = title;
    this.cover = cover;
    this.genre = genre
    
    function getTitle () {
        return tite;
    }
    
    function getCover () {
        return cover;
    }
    
    function getGenre () {
        return Genre;
    }
}

function buildCollection () {
    var mainCollection = new Array();
    mainCollection.push(new CollectionItem('The Avengers', 'img/covers/avengers.jpg', 'comic'));
    mainCollection.push(new CollectionItem('The Bues Brothers', 'img/covers/bluesBrothers.jpg', 'comedy'));
    mainCollection.push(new CollectionItem('Captain America', 'img/covers/captainAmerica.jpg', 'comic'));
    mainCollection.push(new CollectionItem('Casablanca', 'img/covers/casablanca.jpg', 'drama'));
    mainCollection.push(new CollectionItem('The Conjuring', 'img/covers/conjuring.jpg', 'horror'));
    mainCollection.push(new CollectionItem('The Dark Knight', 'img/covers/darkKnight.jpg', 'comic'));
    mainCollection.push(new CollectionItem('District 9', 'img/covers/district9.jpg', 'scifi'));
    mainCollection.push(new CollectionItem('The Emperr\'s New Groove', 'img/covers/emperorsNewGroove.jpg', 'comedy'));
    mainCollection.push(new CollectionItem('The Empire Strikes Back', 'img/covers/empireStrikesBack.jpg', 'scifi'));
    mainCollection.push(new CollectionItem('The Exorcist', 'img/covers/exorcist.jpg', 'horror'));
    mainCollection.push(new CollectionItem('Fight Club', 'img/covers/fightClub.jpg', 'drama'));
    mainCollection.push(new CollectionItem('Insidious', 'img/covers/insidious.jpg', 'horror'));
    mainCollection.push(new CollectionItem('Iron Man 3', 'img/covers/ironMan3.jpg', 'comic'));
    mainCollection.push(new CollectionItem('Return of the Jedi', 'img/covers/returnOfTheJedi.jpg', 'scifi'));
    mainCollection.push(new CollectionItem('Rush Hour', 'img/covers/rushHour.jpg', 'comedy'));
    mainCollection.push(new CollectionItem('Sinister', 'img/covers/sinister.jpg', 'horror'));
    mainCollection.push(new CollectionItem('Spaceballs', 'img/covers/spaceballs.jpg', ''));
    mainCollection.push(new CollectionItem('Star Wars', 'img/covers/starWars.jpg', 'scifi'));
    mainCollection.push(new CollectionItem('Super Troopers', 'img/covers/superTroopers.jpg', 'comedy'));
    return mainCollection;
}

function buildSubCollection ( genre, collection ) {
    var subCollection = new Array();
    
    for ( var i = 0; i < collection.length; i++ ) {
        if ( collection[i].getGenre == genre ) {
            subCollection.push(collection[i]);
        }
    }
    
    return subCollection;
}
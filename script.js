/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("document").ready(function() {
    //the words in the () is being called
    //For the words on the "other" page
    $("#title").css("background-color", "black");
    $('h4:first').css({"color": "white"});
    $('h1:first').css({"text-align": "center"});
    $('h1:first').css({"color": "white"});
    $('p').css({"color": "black"});
    //The tags in the search bar and the search bar size
    $('#tags').css('width', '120px');
    $('#tags').css('height', '30px');
    $('#tags').css('padding-bottom', '5px');
    $('label').css('color', 'white');
    $('#tags').css('font-size', 'small');
    $('#tags').css('color', 'grey');
   //for  the names (lori,carl,rick) to change
    $(".names").bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
    //For thr pics of the characters to change
    $('#rick').css('width', '200');
    $('#rick').css('height', '100');
    $('#rick').css('position', 'left');
    $('#carl').css('width', '200');
    $('#carl').css('height', '100');
    $('#lori').css('width', '200');
    $('#lori').css('height', '100');
    //For the borders around the name
    $(".alive").css('border-color', 'black');
    $(".dead").css('border-color', 'black');
    //
    $('#accordion').css('color', 'black');
    $('button').css('width', '50px');
    //for the buttons
    $('button').css('heigth', '50px');
    $('button').css('font-size', '10px');
    $('button').css('color', 'black');
    //for the accordion
    $('#accordion').accordion({header: "h5"});

});
//for 
$("document").ready(function() {
    $(".img-responsive").css("position", "center");
    $('.alive').bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
});
//for the search bar; tags for search bar
$(function() {
    var availableTags = [
        "All About Me",
        "Bootstrap",
        "CSS",
        "HTML",
        "JavaScript",
        "Melon js",
        "Characters",
        "Season 1",
        "Season 2",
        "Season 3",
        "Season 4",
        "Season 5"
    ];
    $("#tags").autocomplete({
        source: availableTags

    });
});

 //for rick,carl,lori
  //when the mouse is over the name , the name will change to survivng or it will say dead
function mouseOverMe() {
    $(".alive").html("<h6>Surviving</h6>");
    $(".dead").html("<h6>Dead</h6>");
}
//the the mouse is off it will go back to the original name
function mouseOutMe() {
    $("#rickg").html("<h6>Rick Grimes</h6>");
    $("#carlg").html("<h6>Carl Grimes</h6>");
    $("#lorig").html("<h6>Lori Grimes</h6>");
}
//when the button is pressed, the image will explode
function hideTheImage() {
    $('#rick').hide('explode', {}, 2500);
    $('#carl').hide('explode', {}, 2500);
    $('#lori').hide('explode', {}, 2500);

}
//when the second button is pressed it will bring back the image in a sliding motio 
function showTheImage() {
    $('#rick').show('fold', {}, 2500);
    $('#carl').show('fold', {}, 2500);
    $('#lori').show('fold', {}, 2500);


}
//the code that makes the button do something or at least make it ...clickable
$("document").ready(function() {
    $('#hidePic').bind('click', hideTheImage);
    $('#showPic').bind('click', showTheImage);
});


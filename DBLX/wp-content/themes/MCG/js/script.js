jQuery(document).ready(function($) {


let $about = $('.about-page');
let $mission = $('.mission-page');
let $career = $('.careers-page');

let $navLinks = $('.nav-links');
let $aboutLink = $('.link-1');
let $missionLink = $('.link-2');
let $careerLink = $('.link-3');


$about.waypoint(function () {
  $navLinks.removeClass('active');
  $aboutLink.addClass('active');
  console.log('1');
}, { offset: '-90px'});

$mission.waypoint(function () {
  $navLinks.removeClass('active');
  $missionLink.addClass('active');
  console.log('2');
}, { offset: '0px'});

$career.waypoint(function () {
  $navLinks.removeClass('active');
  $careerLink.addClass('active');
  console.log('3');
}, { offset: '90px'});



$mission.waypoint(function () {
  $('#nav, #site-logo, .bottom-nav, #sidebar').toggleClass('dark-mode-scroll');
}, { offset: '80px'});

});

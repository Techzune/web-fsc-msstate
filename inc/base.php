<?php
// ti: provides "block"-template functionality
require_once 'lib/_ti.php';


// **********************************************
// GLOBAL FUNCTIONS

// Returns a navigation link for page $title linked to $url
function navlink($title, $url) {
  return '<a class="nav-item nav-link mr-2 ' . active($title) . '" href="' . $url . '">' . $title . '</a>';
}

// Returns "active" if $title equals $_PAGE["title"]
function active($title) {
  global $_PAGE;
  return (strcasecmp($_PAGE["title"], $title) == 0) ? "active" : "";
}

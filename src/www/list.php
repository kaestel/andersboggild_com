<?php
$access_item = array();
$access_default = "page,list";

$access_item = false;

if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["PAGE_PATH"]."/page.class.php");
$object = $page->addObject("www/item.class.php");

$nav_sindex = $page->expectRestParams(0);

Session::setValue("nav_sindex", $nav_sindex);

//getVar("tags") !== false ? Session::setValue("tags", getVar("tags")) : "";
//isset($_SERVER["PATH_INFO"]) !== false ? Session::setValue("nav_sindex", substr($_SERVER["PATH_INFO"], 1)) : "";
//		$sindex = isset($_SERVER["PATH_INFO"]) ?  : false;

// default view
if(!$page->getStatus()) {$page->setStatus($access_default);}

// header
if($page->getStatus("page")) {
	$page->header();

}

// views
// excluding each other
if($page->getStatus("list")) {

//	$page->setUrlMarker("list");
	$page->getObject($object)->getSearchItems();
	$page->getTemplate("item.view.php", $object);
}

// footer
if($page->getStatus("page")) {
	$page->footer();
//	print $page->codeError(true);
	exit();
}

// actions

?>

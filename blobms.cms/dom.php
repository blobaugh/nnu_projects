<?php

require_once("php/simple_html_dom.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/dBug.php');

$html = file_get_html("cms_layout.php");

//echo "<pre>"; print_r($html->find("ul[id=browser]")); echo "</pre>";

//new dBug($html->find("ul[id=browser]"));


































/*
 * START TREE MENU
 *
 * When this is complete the menu will be pulled out of the database
 */
$menu_array = array (
		array('id'=>'1', 'text'=>'Home'),
		array('id'=>'2', 'text'=>'Blog', 'children'=>array(
				array('id'=>'42', 'text'=>'Welcome'),
				array('id'=>'13', 'text'=>'Weekend Adventure')
			)),
		array('id'=>'5', 'text'=>'Projects'),
		array('id'=>'18', 'text'=>'Contact')
	);

function buildMenu($menu_array) {
	$str = '';
	foreach($menu_array AS $r) {
		$class = "file";
		$li = '';
		$children = false;
		// Figure out if there are any children under this menu item
		if(isset($r['children']) && is_array($r['children'])) { $class = "folder"; $children = true; $li = 'class="closed"';}
		
		$str .= "\n" . '<li ' . $li . '><span  class="clickable ' . $class . ' ' . $r['class'] . '" href="edit_page.php?id=' . $r['id'] .'">' . $r['text'] . '</span>';
	
		if($children) {
			$str .= "\n<ul>" . buildMenu($r['children']) . "</ul>";
		}
	
		$str .= '</li>';
	}
	return $str;
}
/*
 * END TREE MENU
 */
$str = buildMenu($menu_array);
$html->find("ul[id=browser]", 0)->innertext = $str;




echo $html;
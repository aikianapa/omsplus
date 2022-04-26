<?php
wbRouterAdd("/news",'/controller:form/form:news/mode:show/tpl:news_grid.php');
wbRouterAdd("/news/(:any)",'/controller:form/form:news/mode:show/tpl:news_item.php/item:$1');

function newsAfterItemRead($Item) {
	$Item=wbItemToArray($Item);
    	return $Item;
}
?>

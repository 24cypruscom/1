<? /*if(!empty($_SESSION["arrFilterarrCFV"][1]["LEFT"])) {
	$arResult["MIN_PRICE"] = $_SESSION["arrFilterarrCFV"][1]["LEFT"];
} else {
	$res = CIBlockElement::GetList(
		Array("CATALOG_PRICE_1"=>"ASC"),
		Array("IBLOCK_ID" => 1,"SECTION_ID"=>array(1,2,3)),
		false,
		array('nTopCount' => 1),
		Array("IBLOCK_ID","ID", "NAME","CATALOG_GROUP_1")
	);
	$ob = $res->Fetch();

	$min_price=explode('.',$ob['CATALOG_PRICE_1']);
	$arResult["MIN_PRICE"]=$min_price[0];
}

if(!empty($_SESSION["arrFilterarrCFV"][1]["RIGHT"])) {
	$arResult["MAX_PRICE"] = $_SESSION["arrFilterarrCFV"][1]["RIGHT"];
} else {
	$res = CIBlockElement::GetList(
		Array("CATALOG_PRICE_1"=>"DESC"),
		Array("IBLOCK_ID" => 1,"SECTION_ID"=>array(1,2,3)),
		false,
		array('nTopCount' => 1),
		Array("IBLOCK_ID","ID", "NAME","CATALOG_GROUP_1")
	);
	$ob = $res->Fetch();
	$max_price=explode('.',$ob['CATALOG_PRICE_1']);
	$arResult["MAX_PRICE"]=$max_price[0];
}*/
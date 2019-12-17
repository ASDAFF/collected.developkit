<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arComponentDescription = array(
	"NAME" => GetMessage("COLLECT_COM_NAME__SEND_EMAIL"),
	"DESCRIPTION" => GetMessage("COLLECT_COM_DESCR__SEND_EMAIL"),
	"ICON" => "",
	"PATH" => array(
		"ID" => "collect_com",
		"SORT" => 2000,
		"NAME" => GetMessage("COLLECT_COM_COMPONENTS__SEND_EMAIL"),
		"CHILD" => array(
			"ID" => "developkit",
			"NAME" => GetMessage("COLLECT_COM_DEV_COM__SEND_EMAIL"),
			"SORT" => 8000,
		),
	),
);
?>
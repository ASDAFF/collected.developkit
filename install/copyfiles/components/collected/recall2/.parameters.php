<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arShowFieldsList = array(
	"NONE" => GetMessage("NONE"),
	"RS_AUTHOR_NAME" => GetMessage("RS_AUTHOR_NAME"),
	"RS_COMPANY_NAME" => GetMessage("RS_COMPANY_NAME"),
	"RS_AUTHOR_EMAIL" => GetMessage("RS_AUTHOR_EMAIL"),
	"RS_AUTHOR_PHONE" => GetMessage("RS_AUTHOR_PHONE"),
	"RS_AUTHOR_COMMENT" => GetMessage("RS_AUTHOR_COMMENT"),
);

$arRequiresFieldsList = array(
	"NONE" => GetMessage("NONE"),
	"RS_AUTHOR_NAME" => GetMessage("RS_AUTHOR_NAME"),
	"RS_COMPANY_NAME" => GetMessage("RS_COMPANY_NAME"),
	"RS_AUTHOR_EMAIL" => GetMessage("RS_AUTHOR_EMAIL"),
	"RS_AUTHOR_PHONE" => GetMessage("RS_AUTHOR_PHONE"),
	"RS_AUTHOR_COMMENT" => GetMessage("RS_AUTHOR_COMMENT"),
);

$arComponentParameters = array(
	"PARAMETERS" => array(
		"COLLECT_EMAIL_TO" => array(
			"NAME" => GetMessage("COLLECT_MSG_EMAIL_TO"),
			"TYPE" => "STRING",
			"PARENT" => "BASE",
			"DEFAULT" => COption::GetOptionString("main", "email_from", ""),
		),
		"SHOW_FIELDS" => Array(
			"NAME" => GetMessage("COLLECT_MSG_SHOW_FIELDS"), 
			"TYPE" => "LIST", 
			"MULTIPLE" => "Y", 
			"VALUES" => $arShowFieldsList,
			"PARENT" => "BASE",
		),
		"REQUIRED_FIELDS" => Array(
			"NAME" => GetMessage("COLLECT_MSG_REQUIRED_FIELDS"), 
			"TYPE" => "LIST", 
			"MULTIPLE" => "Y", 
			"VALUES" => $arShowFieldsList, 
			"PARENT" => "BASE",
		),
		"COLLECT_USE_CAPTCHA" => array(
			"NAME" => GetMessage("COLLECT_MSG_USE_CAPTCHA"),
			"TYPE" => "CHECKBOX",
			"PARENT" => "BASE",
			"VALUE" => "Y",
		),
		"COLLECT_MESSAGE_AGREE" => array(
			"NAME" => GetMessage("COLLECT_MSG_MESSAGE_AGREE"),
			"TYPE" => "STRING",
			"PARENT" => "BASE",
			"DEFAULT" => GetMessage("COLLECT_MSG_MESSAGE_AGREE_DEFAULT"),
		),
		"CACHE_TIME"  =>  Array(
			"PARENT" => "CACHE_SETTINGS",
			"DEFAULT" => 3600
		),
		"AJAX_MODE" => array(),
	)
);

?>
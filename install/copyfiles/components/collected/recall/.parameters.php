<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arComponentParameters = array(
	"PARAMETERS" => array(
		"COLLECT_EMAIL_TO" => array(
			"NAME" => GetMessage("COLLECT_MSG_EMAIL_TO"),
			"TYPE" => "STRING",
			"PARENT" => "BASE",
			"DEFAULT" => COption::GetOptionString("main", "email_from", ""),
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
		"AJAX_MODE" => array(),
	)
);

?>
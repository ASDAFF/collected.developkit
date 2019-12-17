<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

$arComponentParameters = array(
	"GROUPS" => array(
		"COLLECT_GR_TEMPLATES" => array(
			"NAME" => GetMessage("COLLECT_MSG_GROUP_TEMPLATES"),
		),
		"COLLECT_GR_TEMPLATES_SOME" => array(
			"NAME" => GetMessage("COLLECT_MSG_GROUP_TEMPLATES_SOME"),
		),
		"COLLECT_GR_SORTINGS" => array(
			"NAME" => GetMessage("COLLECT_MSG_GROUP_SORTINGS"),
		),
		"COLLECT_GR_OUTPUT" => array(
			"NAME" => GetMessage("COLLECT_MSG_GROUP_OUTPUT"),
		),
	),
	"PARAMETERS" => array(
		"COLLECT_ACTION_PARAM_NAME" => array(
			"NAME" => GetMessage("COLLECT_MSG_ACTION_PARAM_NAME"),
			"TYPE" => "STRING",
			"PARENT" => "BASE",
			"DEFAULT" => "collectaction",
		),
		"COLLECT_ACTION_PARAM_VALUE" => array(
			"NAME" => GetMessage("COLLECT_MSG_ACTION_PARAM_VALUE"),
			"TYPE" => "STRING",
			"PARENT" => "BASE",
			"DEFAULT" => "collectvalue",
		),
		"COLLECT_CHOSE_TEMPLATES_SHOW" => array(
			"NAME" => GetMessage("COLLECT_MSG_CHOSE_TEMPLATES_SHOW"),
			"TYPE" => "CHECKBOX",
			"VALUE" => "Y",
			"PARENT" => 'COLLECT_GR_TEMPLATES',
			"REFRESH" => "Y",
		),
		"COLLECT_SORT_BY_SHOW" => array(
			"NAME" => GetMessage("COLLECT_MSG_SORT_BY_SHOW"),
			"TYPE" => "CHECKBOX",
			"VALUE" => "Y",
			"PARENT" => 'COLLECT_GR_SORTINGS',
			"REFRESH" => "Y",
		),
		"COLLECT_SHORT_SORTER" => array(
			"NAME" => GetMessage("COLLECT_MSG_SHORT_SORTER"),
			"TYPE" => "CHECKBOX",
			"VALUE" => "Y",
			"PARENT" => 'COLLECT_GR_SORTINGS',
			"REFRESH" => "N",
		),
		"COLLECT_OUTPUT_OF_SHOW" => array(
			"NAME" => GetMessage("COLLECT_MSG_OUTPUT_OF_SHOW"),
			"TYPE" => "CHECKBOX",
			"VALUE" => "Y",
			"PARENT" => 'COLLECT_GR_OUTPUT',
			"REFRESH" => "Y",
		),
	)
);

if($arCurrentValues["COLLECT_CHOSE_TEMPLATES_SHOW"]=="Y")
{
	$arComponentParameters["PARAMETERS"]["COLLECT_CNT_TEMPLATES"] = array(
		"PARENT" => "COLLECT_GR_TEMPLATES",
		"NAME" => GetMessage("COLLECT_MSG_CNT_TEMPLATES"),
		"TYPE" => "STRING",
		"REFRESH" => "Y",
	);
	for($i=0;$i<$arCurrentValues["COLLECT_CNT_TEMPLATES"];$i++)
	{
		$arComponentParameters["PARAMETERS"]["COLLECT_CNT_TEMPLATES_".$i] = array(
			"PARENT" => "COLLECT_GR_TEMPLATES_SOME",
			"NAME" => GetMessage("COLLECT_MSG_CNT_TEMPLATES_SOME_NAME_")." #".($i+1),
			"TYPE" => "STRING",
		);
		$arComponentParameters["PARAMETERS"]["COLLECT_CNT_TEMPLATES_NAME_".$i] = array(
			"PARENT" => "COLLECT_GR_TEMPLATES_SOME",
			"NAME" => GetMessage("COLLECT_MSG_CNT_TEMPLATES_SOME_TMPL_NAME_")." #".($i+1),
			"TYPE" => "STRING",
		);
	}
	$arComponentParameters["PARAMETERS"]["COLLECT_DEFAULT_TEMPLATE"] = array(
		"PARENT" => "COLLECT_GR_TEMPLATES",
		"NAME" => GetMessage("COLLECT_MSG_DEFAULT_TEMPLATE"),
		"TYPE" => "STRING",
		"REFRESH" => "N",
	);
}

if($arCurrentValues["COLLECT_SORT_BY_SHOW"]=="Y")
{
	$arComponentParameters["PARAMETERS"]["COLLECT_SORT_BY_NAME"] = array(
		"PARENT" => "COLLECT_GR_SORTINGS",
		"NAME" => GetMessage("COLLECT_MSG_SORT_BY"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"sort" => GetMessage("COLLECT_MSG_SORT_BY_DATE"),
			"name" => GetMessage("COLLECT_MSG_SORT_BY_NAME"),
			"catalog_price_1" => GetMessage("COLLECT_MSG_SORT_BY_PRICE"),
		),
		"VALUE" => "Y",
		"MULTIPLE" => "Y",
		"ADDITIONAL_VALUES" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["COLLECT_SORT_BY_DEFAULT"] = array(
		"PARENT" => "COLLECT_GR_SORTINGS",
		"NAME" => GetMessage("COLLECT_MSG_SORT_BY_DEFAULT"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"sort_asc" => GetMessage("COLLECT_MSG_SORT_BY_DATE1"),
			"sort_desc" => GetMessage("COLLECT_MSG_SORT_BY_DATE2"),
			"name_asc" => GetMessage("COLLECT_MSG_SORT_BY_NAME1"),
			"name_desc" => GetMessage("COLLECT_MSG_SORT_BY_NAME2"),
			"catalog_price_1_asc" => GetMessage("COLLECT_MSG_SORT_BY_PRICE1"),
			"catalog_price_1_desc" => GetMessage("COLLECT_MSG_SORT_BY_PRICE2"),
		),
		"VALUE" => "Y",
		"MULTIPLE" => "N",
	);
}

if($arCurrentValues["COLLECT_OUTPUT_OF_SHOW"]=="Y")
{
	$arComponentParameters["PARAMETERS"]["COLLECT_OUTPUT_OF"] = array(
		"PARENT" => "COLLECT_GR_OUTPUT",
		"NAME" => GetMessage("COLLECT_MSG_OUTPUT_OF"),
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"VALUES" => array(
			"5" => "5",
			"10" => "10",
			"15" => "15",
			"20" => "20",
			"25" => "25",
			"50" => "50",
			"75" => "75",
			"100" => "100",
		),
		"ADDITIONAL_VALUES" => "Y",
	);
	$arComponentParameters["PARAMETERS"]["COLLECT_OUTPUT_OF_DEFAULT"] = array(
		"PARENT" => "COLLECT_GR_OUTPUT",
		"NAME" => GetMessage("COLLECT_MSG_OUTPUT_OF_DEFAULT"),
		"TYPE" => "STRING",
	);
	$arComponentParameters["PARAMETERS"]["COLLECT_OUTPUT_OF_SHOW_ALL"] = array(
		"PARENT" => "COLLECT_GR_OUTPUT",
		"NAME" => GetMessage("COLLECT_MSG_OUTPUT_OF_SHOW_ALL"),
		"TYPE" => "CHECKBOX",
		"VALUE" => "Y",
	);
}


?>
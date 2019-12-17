<?php
/**
 * Copyright (c) 16/12/2019 Created By/Edited By ASDAFF asdaff.asad@yandex.ru
 */

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
    'NAME' => Loc::getMessage('RS_FORMS_TEMPLATE_NAME'),
    'DESCRIPTION' => Loc::getMessage('RS_FORMS_TEMPLATE_DESCRIPTION'),
    'PATH' => array(
		'ID' => 'collect_com',
    		'SORT' => 2000,
    		'NAME' => GetMessage('RS_FORMS_TEMPLATE_PATH_NAME_COLLECTED'),
  	),
);

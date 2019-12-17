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
    'NAME' => Loc::getMessage('RSDC_TEMPLATE_NAME'),
    'DESCRIPTION' => Loc::getMessage('RSDC_TEMPLATE_DESCRIPTION'),
    'PATH' => array(
        "ID" => "collect_com",
        "SORT" => 5000,
        "NAME" =>  Loc::getMessage('RSDC_TEMPLATE_COMPONENTS'),
        "CHILD" => array(
            "ID" => "developkit",
            "NAME" => Loc::getMessage('RSDC_DEV_COMPONENTS'),
            "SORT" => 10000
        )
    )
);

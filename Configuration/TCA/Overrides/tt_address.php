<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['tt_address']['feInterface']['fe_admin_fieldList'] .= ',hidden,gender,name,email,first_name,last_name,company';


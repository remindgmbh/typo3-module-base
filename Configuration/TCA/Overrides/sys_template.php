<?php

defined('TYPO3_MODE') || die;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'rmnd_basemodules',
    'Configuration/TypoScript',
    'rmnd_basemodules'
);

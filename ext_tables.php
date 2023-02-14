<?php

defined('TYPO3_MODE') || die;

use Remind\RmndBasemodules\Controller\MainController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

if (TYPO3_MODE === 'BE') {
    /**
     * Creates the REMIND top level entry.
     */
    ExtensionUtility::registerModule(
        'rmnd_basemodules',
        'remind',
        '',
        'after:web',
        [],
        [
            'access' => 'user,group',
            'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-remind.svg',
            'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_mainmodule.xlf'
        ]
    );

    /**
     * Creates the Information module inside the REMIND top level module.
     */
    ExtensionUtility::registerModule(
        'rmnd_basemodules',
        'remind',    // Make module a submodule of 'remind'
        'overview',  // Submodule key
        '',          // Position
        [
            MainController::class => 'overview'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
            'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_infomodule.xlf'
        ]
    );
}

<?php

defined('TYPO3_MODE') || die;

if (TYPO3_MODE === 'BE') {
    if (!isset($GLOBALS['TBE_MODULES']['remind'])) {
        $GLOBALS['TBE_MODULES']['remind'] = '';
    }

    $tbeModulesRemindTemp = $GLOBALS['TBE_MODULES']['remind'];

    /**
     * Creates the REMIND top level entry.
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Remind.rmnd_basemodules',
        'remind',
        '',
        'bottom',
        [],
        [
            'access' => 'user,group',
            'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-remind.svg',
            'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_mainmodule.xlf'
        ]
    );

    $orderedModules = [
        'web' => $GLOBALS['TBE_MODULES']['web'],
        'remind' => $GLOBALS['TBE_MODULES']['remind'] . ',' . $tbeModulesRemindTemp,
    ];

    $oldModuleTemp = $GLOBALS['TBE_MODULES'];
    unset($oldModuleTemp['web']);

    $GLOBALS['TBE_MODULES'] = $orderedModules + $oldModuleTemp;

    /**
     * Creates the Information module inside the REMIND top level module.
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Remind.rmnd_basemodules',
        'remind',    // Make module a submodule of 'remind'
        'overview',  // Submodule key
        '',          // Position
        [
            'Main' => 'overview'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
            'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_infomodule.xlf'
        ]
    );
}

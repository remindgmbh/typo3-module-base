<?php

use Remind\RmndBasemodules\Controller\MainController;

return [
    'remind_module' => [
        'parent' => 'remind',
        'position' => ['after' => 'web'],
        'access' => 'user,group',
        'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
        'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_mainmodule.xlf',
    ],
    'remind_rmndBasemodules' => [
        'parent' => 'remind',
        'position' => ['before' => '*'],
        'access' => 'user,group',
        'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
        'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_infomodule.xlf',
        'extensionName' => 'rmnd_basemodules',
        'controllerActions' => [
            MainController::class => [
                'overview'
            ],
        ],
    ],
];

<?php

declare(strict_types=1);

use Remind\RmndBasemodules\Controller\MainController;

return [
    'remind_module' => [
        'access' => 'user,group',
        'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
        'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_mainmodule.xlf',
        'parent' => 'remind',
        'position' => ['after' => 'web'],
    ],
    'remind_rmndBasemodules' => [
        'access' => 'user,group',
        'controllerActions' => [
            MainController::class => [
                'overview',
            ],
        ],
        'extensionName' => 'rmnd_basemodules',
        'icon' => 'EXT:rmnd_basemodules/Resources/Public/Icons/icon-info.svg',
        'labels' => 'LLL:EXT:rmnd_basemodules/Resources/Private/Language/locallang_infomodule.xlf',
        'parent' => 'remind',
        'position' => ['before' => '*'],
    ],
];

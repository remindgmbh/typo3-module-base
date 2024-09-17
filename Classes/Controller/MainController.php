<?php

declare(strict_types=1);

namespace Remind\RmndBasemodules\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Backend\Template\ModuleTemplate;

/**
 * MainController
 */
class MainController extends ActionController
{
    protected ModuleTemplateFactory $moduleTemplateFactory;

    public function __construct(
        ModuleTemplateFactory $moduleTemplateFactory,
    ) {
        $this->moduleTemplateFactory = $moduleTemplateFactory;
    }

    public function initializeView(): void
    {
        $view = $this->moduleTemplateFactory->create($this->request);

        if ($view instanceof ModuleTemplate) {
            $view->setFlashMessageQueue($this->getFlashMessageQueue());
        }
    }

    /**
     * base informationen
     */
    public function overviewAction(): void
    {
    }
}

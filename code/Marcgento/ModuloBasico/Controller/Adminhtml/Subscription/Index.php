<?php

namespace Marcgento\ModuloBasico\Controller\Adminhtml\Subscription;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Título personalizado para la Página Marcgento - Admin'));
        $resultPage->setActiveMenu('Marcgento_ModuloBasico::subscription');
        $resultPage->addBreadcrumb(__('Grid Subscription'), __('Grid Subscription'));
        $resultPage->addBreadcrumb(__('Manage Subscription'), __('Subscription'));

        return $resultPage;
    }

    public function _isAllowed(){
        return $this->_authorization->isAllowed('Marcgento_ModuloBasico::subscription');
    }
}
<?php

namespace Marcgento\ModuloBasico\Controller\Adminhtml\Index;

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
        $resultPage->getConfig()->getTitle()->set(__('Título personalizado para la Página de Marcgento - Admin'));

        return $resultPage;
    }

    public function _isAllowed(){
        return $this->_authorization->isAllowed('Marcgento_ModuloBasico::index');
    }
}
<?php

namespace Jacek\Checkout\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\View\LayoutInterface;

class ConfigProvider implements ConfigProviderInterface
{
    protected $_layout;

    public function __construct(LayoutInterface $layout)
    {
        $this->_layout = $layout;
    }

    public function getConfig()
    {
        return [
            'custom_text' => $this->_layout->createBlock('Magento\Framework\View\Element\Template')->setTemplate("Jacek_Checkout::custom_text.phtml")->toHtml()
        ];
    }
}

<?php

namespace GSS\SocialLinks\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper{

    protected $_storeManager;
    
    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager 
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getConfigValue($value = '') {
        return $this->scopeConfig
                ->getValue(
                        $value,
                        \Magento\Store\Model\ScopeInterface::SCOPE_STORE
                        );            
    }
}

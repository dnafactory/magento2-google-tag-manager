<?php

namespace DNAFactory\GoogleTagManager\Helper\Config;

use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;

class GoogleTagManagerConfiguration extends AbstractHelper implements \DNAFactory\GoogleTagManager\Api\GoogleTagManagerConfigurationInterface
{
    const XML_IS_GOOGLE_TAG_MANAGER_ACTIVE = 'google/tagmanager/active';
    const XML_GET_GOOGLE_TAG_MANAGER_ACCOUNT = 'google/tagmanager/account';

    protected $storeManager;
    protected $configWriter;

    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        WriterInterface $configWriter
    ) {
        $this->storeManager = $storeManager;
        $this->configWriter = $configWriter;
        parent::__construct($context);
    }

    public function isGoogleTagManagerActive($scopeConfig = \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $scopeCode = null)
    {
        return (bool)$this->scopeConfig->getValue(self::XML_IS_GOOGLE_TAG_MANAGER_ACTIVE, $scopeConfig, $scopeCode);
    }

    public function getGoogleTagManagerAccount($scopeConfig = \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $scopeCode = null)
    {
        return (string)$this->scopeConfig->getValue(self::XML_GET_GOOGLE_TAG_MANAGER_ACCOUNT, $scopeConfig, $scopeCode);
    }
}

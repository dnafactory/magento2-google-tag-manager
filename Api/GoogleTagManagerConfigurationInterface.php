<?php

namespace DNAFactory\GoogleTagManager\Api;

interface GoogleTagManagerConfigurationInterface
{
    public function isGoogleTagManagerActive($scopeConfig = \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $scopeCode = null);
    public function getGoogleTagManagerAccount($scopeConfig = \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $scopeCode = null);
}

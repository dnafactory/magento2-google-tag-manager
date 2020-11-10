<?php

namespace DNAFactory\GoogleTagManager\Block;

use DNAFactory\GoogleTagManager\Api\GoogleTagManagerConfigurationInterface;
use Magento\Framework\View\Element\Template;

class Gtm extends \Magento\Framework\View\Element\Template
{
    /**
     * @var GoogleTagManagerConfigurationInterface
     */
    protected $googleTagManagerConfiguration;

    public function __construct(
        GoogleTagManagerConfigurationInterface $googleTagManagerConfiguration,
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->googleTagManagerConfiguration = $googleTagManagerConfiguration;
    }

    public function isGoogleTagManagerActive()
    {
        return $this->googleTagManagerConfiguration->isGoogleTagManagerActive();
    }

    public function getGoogleTagManagerAccount()
    {
        return $this->googleTagManagerConfiguration->getGoogleTagManagerAccount();
    }
}

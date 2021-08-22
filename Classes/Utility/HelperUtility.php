<?php

namespace Blueways\BwIcons\Utility;

use Blueways\BwIcons\Provider\FileIconProvider;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\TypoScript\TypoScriptService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class HelperUtility
{

    public function getModalTabs(): array
    {
        $extensionSettings = $this->getSettings();
        $tabs = [];

        foreach ($extensionSettings as $key => $providerSettings) {
            $options = $providerSettings;
            unset($options['_typoScriptNodeValue']);
            $provider = GeneralUtility::makeInstance($providerSettings['_typoScriptNodeValue'], $options);

            $tab = [];
            $tab['id'] = $key;
            $tab['title'] = $providerSettings['title'];
            $tab['folders'] = $provider->getIcons();
            $tabs[] = $tab;
        }

        return $tabs;
    }

    protected function getSettings(): array
    {
        // @TODO
        $currentPageId = 1;
        $pageTsConfig = BackendUtility::getPagesTSconfig($currentPageId);
        /** @var TypoScriptService $typoscriptService */
        $typoscriptService = GeneralUtility::makeInstance(TypoScriptService::class);
        return $typoscriptService->convertTypoScriptArrayToPlainArray($pageTsConfig['mod.']['tx_bwicons.'] ?? []);
    }

    public function getTagName(string $providerId): string
    {
        return 'i';
    }

    public function isFileIconProvider(string $providerId): bool
    {
        $settings = $this->getSettings();
        return $settings[$providerId]['_typoScriptNodeValue'] === FileIconProvider::class;
    }
}

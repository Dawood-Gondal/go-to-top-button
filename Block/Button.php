<?php

declare(strict_types=1);

/**
 * @category    BugsBunny Enterprise
 * @package     BugsBunny_OrderComment
 * @copyright   Copyright (c) 2023 BugsBunny Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace BugsBunny\GoToTopButton\Block;

use BugsBunny\GoToTopButton\Helper\Data;

/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_OrderComment
 * @copyright   Copyright (c) 2025 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

declare(strict_types=1);

namespace M2Commerce\GoToTopButton\Block;

use M2Commerce\GoToTopButton\Helper\Data;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\View\Asset\Repository;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\StoreManagerInterface;

class Button extends Template
{
    /**
     * @var Data
     */
    protected Data $helper;
    /** @var DirectoryList */

    protected DirectoryList $directoryList;
    /** @var StoreManagerInterface */

    protected $_storeManager;
    /** @var Repository */

    protected Repository $_assetRepository;
    protected $helper;
    /**
     * @var DirectoryList
     */
    protected $directoryList;
    /**
     * @var StoreManagerInterface
     */
    protected $_storeManager;
    /**
     * @var Repository
     */
    protected $_assetRepository;


    /**
     * @param Context $context
     * @param Data $helper
     * @param DirectoryList $directoryList
     * @param array $data
     */
    public function __construct(Context $context, Data $helper, DirectoryList $directoryList, array $data = [])
    {
        $this->helper = $helper;
        $this->directoryList = $directoryList;
        $this->_storeManager = $context->getStoreManager();
        $this->_assetRepository = $context->getAssetRepository();
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     * @throws NoSuchEntityException
     */
    public function isActive(): bool
    {
        return ($this->getConfig('general/active') == "1");
    }

    /**
     * @param $key
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getConfig($key)
    {
        return $this->helper->getConfigValue($key, $this->_storeManager->getStore()->getId());
    }

    /**
     * @return false|string
     * @throws NoSuchEntityException
     */
    public function getConfigJson(): false|string
    {
    public function isActive()
    {
        return ($this->getConfig('general/active') == "1");
    }

    /**
     * @param $key
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getConfig($key)
    {
        return $this->helper->getConfigValue($key, $this->_storeManager->getStore()->getId());
    }

    /**
     * @return false|string
     * @throws NoSuchEntityException
     */
    public function getConfigJson()
    {

        $array = ['scrollTop' => $this->getConfig('general/offset')];
        return json_encode($array);
    }

    /**
     * @return string
     * @throws LocalizedException
     */
    public function getImageUrl(): string
    {
        $relativePath = $this->helper->getImageUrl(); // e.g. gototopbutton/yourimage.png

        if ($relativePath) {
            $mediaPath = $this->directoryList->getPath(\Magento\Framework\App\Filesystem\DirectoryList::MEDIA) . '/' . $relativePath;

            if (is_file($mediaPath) && getimagesize($mediaPath)) {
                return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) . $relativePath;
            }
        }
        return $this->_assetRepository->createAsset('BugsBunny_GoToTopButton::images/hehe.png', ['area' => 'frontend'])->getUrl();

        // fallback to default image in view/frontend/web/images
        return $this->_assetRepository->createAsset('M2Commerce_GoToTopButton::images/default.png', ['area' => 'frontend'])->getUrl();
    }
}

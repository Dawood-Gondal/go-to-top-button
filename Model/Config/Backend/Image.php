<?php
declare(strict_types=1);

/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_GoToTopButton
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\GoToTopButton\Model\Config\Backend;

use Magento\Framework\App\ObjectManager;

class Image extends \Magento\Config\Model\Config\Backend\Image
{
    /**
     * @param $uploadDir
     * @return string
     */
    protected function getUploadDirPath($uploadDir): string
    {
        $directoryList = ObjectManager::getInstance()->get('\Magento\Framework\Filesystem\DirectoryList');
        return rtrim($directoryList->getRoot(), '/') . '/' . ltrim($uploadDir, '/');
    }
}

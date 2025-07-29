<?php
declare(strict_types=1);

/**
 * @category    BugsBunny Enterprise
 * @package     BugsBunny_OrderComment
 * @copyright   Copyright (c) 2023 BugsBunny Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace BugsBunny\GoToTopButton\Model\Config\Backend;

/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_OrderComment
 * @copyright   Copyright (c) 2025 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

declare(strict_types=1);

namespace M2Commerce\GoToTopButton\Model\Config\Backend;

use Magento\Framework\App\ObjectManager;

class Image extends \Magento\Config\Model\Config\Backend\Image
{
    /**
     * @param $uploadDir
     * @return string
     */
    protected function getUploadDirPath($uploadDir): string
    protected function getUploadDirPath($uploadDir)
    {
        $directoryList = ObjectManager::getInstance()->get('\Magento\Framework\Filesystem\DirectoryList');
        return rtrim($directoryList->getRoot(), '/') . '/' . ltrim($uploadDir, '/');
    }
}

<?php
<<<<<<< HEAD
declare(strict_types=1);

/**
 * @category    BugsBunny Enterprise
 * @package     BugsBunny_OrderComment
 * @copyright   Copyright (c) 2023 BugsBunny Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace BugsBunny\GoToTopButton\Helper;
=======
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_OrderComment
 * @copyright   Copyright (c) 2025 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

declare(strict_types=1);

namespace M2Commerce\GoToTopButton\Helper;
>>>>>>> 8d28ea5 (Latest Button EXT)

/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_OrderComment
 * @copyright   Copyright (c) 2025 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

declare(strict_types=1);

namespace M2Commerce\GoToTopButton\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const UPLOAD_DIR = 'gototopbutton';

    /**
<<<<<<< HEAD
     * @return string|void
=======
>>>>>>> 8d28ea5 (Latest Button EXT)
     * @param $field
     * @param $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue('gototopbutton/' . $field, ScopeInterface::SCOPE_STORE, $storeId);
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        $fieldValue = $this->getConfigValue('general/image');
        if ($fieldValue) {
            return rtrim(self::UPLOAD_DIR, '/') . '/' . ltrim($fieldValue, '/');
        }
        return '';
<<<<<<< HEAD
    }

    /**
     * @param $field
     * @param $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue('gototopbutton/' . $field, ScopeInterface::SCOPE_STORE, $storeId);
=======
>>>>>>> 8d28ea5 (Latest Button EXT)
    }
}

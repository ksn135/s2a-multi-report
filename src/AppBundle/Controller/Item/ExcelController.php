<?php

namespace AppBundle\Controller\Item;

use Admingenerated\AppBundle\BaseItemController\ExcelController as BaseExcelController;

/**
 * ExcelController
 */
class ExcelController extends BaseExcelController
{
    /**
     * Format column code value
     *
     * @param mixed The value
     * @return mixed The formated value
     */
    protected function formatCode($value)
    {
        return ' ' . $value;
    }	
}

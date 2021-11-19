<?php
/**
 * Copyright © Copyright 2021 DHS Services BV All rights reserved.
 * See COPYING.txt for license details.
 */

namespace DHSServices\WeightUnitsExtend\Model\Config\Source;

/**
 * Options provider for weight units list
 *
 * @api
 * @since 100.0.2
 */
class WeightUnit extends \Magento\Directory\Model\Config\Source\WeightUnit
{
    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'lbs', 'label' => __('lbs')],
            ['value' => 'kgs', 'label' => __('kgs')],
            ['value' => 'gms', 'label' => __('grams')] /* Adds grams as a unit for weights in Magento2 */
        ];
    }
}

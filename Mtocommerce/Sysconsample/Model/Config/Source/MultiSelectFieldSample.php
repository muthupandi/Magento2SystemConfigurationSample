<?php

namespace Mtocommerce\Sysconsample\Model\Config\Source;

class MultiSelectFieldSample implements \Magento\Framework\Option\ArrayInterface
{
 public function toOptionArray()
 {
  return [
    ['value' => 'value1', 'label' => __('Option1')],
    ['value' => 'value1', 'label' => __('Option2')],
    ['value' => 'value3', 'label' => __('Option3')],
    ['value' => 'value4', 'label' => __('Option4')]
  ];
 }
}

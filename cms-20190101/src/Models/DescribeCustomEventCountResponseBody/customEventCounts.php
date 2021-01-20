<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventCountResponseBody\customEventCounts\customEventCount;
use AlibabaCloud\Tea\Model;

class customEventCounts extends Model
{
    /**
     * @var customEventCount[]
     */
    public $customEventCount;
    protected $_name = [
        'customEventCount' => 'CustomEventCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customEventCount) {
            $res['CustomEventCount'] = [];
            if (null !== $this->customEventCount && \is_array($this->customEventCount)) {
                $n = 0;
                foreach ($this->customEventCount as $item) {
                    $res['CustomEventCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEventCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomEventCount'])) {
            if (!empty($map['CustomEventCount'])) {
                $model->customEventCount = [];
                $n                       = 0;
                foreach ($map['CustomEventCount'] as $item) {
                    $model->customEventCount[$n++] = null !== $item ? customEventCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

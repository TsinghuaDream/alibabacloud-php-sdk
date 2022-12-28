<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemRuleAggregationTypesResponseBody\aggregationTypeList;
use AlibabaCloud\Tea\Model;

class ListSystemRuleAggregationTypesResponseBody extends Model
{
    /**
     * @var aggregationTypeList[]
     */
    public $aggregationTypeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregationTypeList' => 'AggregationTypeList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationTypeList) {
            $res['AggregationTypeList'] = [];
            if (null !== $this->aggregationTypeList && \is_array($this->aggregationTypeList)) {
                $n = 0;
                foreach ($this->aggregationTypeList as $item) {
                    $res['AggregationTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemRuleAggregationTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationTypeList'])) {
            if (!empty($map['AggregationTypeList'])) {
                $model->aggregationTypeList = [];
                $n                          = 0;
                foreach ($map['AggregationTypeList'] as $item) {
                    $model->aggregationTypeList[$n++] = null !== $item ? aggregationTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

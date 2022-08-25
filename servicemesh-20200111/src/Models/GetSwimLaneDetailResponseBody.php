<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetSwimLaneDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $labelSelectorKey;

    /**
     * @var string
     */
    public $labelSelectorValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int[][]
     */
    public $servicesList;
    protected $_name = [
        'labelSelectorKey'   => 'LabelSelectorKey',
        'labelSelectorValue' => 'LabelSelectorValue',
        'requestId'          => 'RequestId',
        'servicesList'       => 'ServicesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelSelectorKey) {
            $res['LabelSelectorKey'] = $this->labelSelectorKey;
        }
        if (null !== $this->labelSelectorValue) {
            $res['LabelSelectorValue'] = $this->labelSelectorValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwimLaneDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelSelectorKey'])) {
            $model->labelSelectorKey = $map['LabelSelectorKey'];
        }
        if (isset($map['LabelSelectorValue'])) {
            $model->labelSelectorValue = $map['LabelSelectorValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServicesList'])) {
            if (!empty($map['ServicesList'])) {
                $model->servicesList = $map['ServicesList'];
            }
        }

        return $model;
    }
}

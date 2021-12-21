<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceContainerLogResponseBody\logEntrys;
use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceContainerLogResponseBody extends Model
{
    /**
     * @var bool
     */
    public $logEnd;

    /**
     * @var logEntrys
     */
    public $logEntrys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logEnd'    => 'LogEnd',
        'logEntrys' => 'LogEntrys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEnd) {
            $res['LogEnd'] = $this->logEnd;
        }
        if (null !== $this->logEntrys) {
            $res['LogEntrys'] = null !== $this->logEntrys ? $this->logEntrys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowNodeInstanceContainerLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogEnd'])) {
            $model->logEnd = $map['LogEnd'];
        }
        if (isset($map['LogEntrys'])) {
            $model->logEntrys = logEntrys::fromMap($map['LogEntrys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

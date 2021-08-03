<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventOperations extends Model
{
    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var bool
     */
    public $userCanOperate;
    protected $_name = [
        'operationParams' => 'OperationParams',
        'operationCode'   => 'OperationCode',
        'userCanOperate'  => 'UserCanOperate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->userCanOperate) {
            $res['UserCanOperate'] = $this->userCanOperate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['UserCanOperate'])) {
            $model->userCanOperate = $map['UserCanOperate'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponse\domainConfigs;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponse\domainConfigs\domainConfig\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var functionArgs
     */
    public $functionArgs;
    protected $_name = [
        'functionName' => 'FunctionName',
        'configId'     => 'ConfigId',
        'status'       => 'Status',
        'functionArgs' => 'FunctionArgs',
    ];

    public function validate()
    {
        Model::validateRequired('functionName', $this->functionName, true);
        Model::validateRequired('configId', $this->configId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('functionArgs', $this->functionArgs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = null !== $this->functionArgs ? $this->functionArgs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = functionArgs::fromMap($map['FunctionArgs']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCheckFixDetailsRequest extends Model
{
    /**
     * @example 58
     *
     * @var string
     */
    public $checkIds;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 51
     *
     * @var int
     */
    public $riskId;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'lang'     => 'Lang',
        'riskId'   => 'RiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckFixDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            $model->checkIds = $map['CheckIds'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        return $model;
    }
}
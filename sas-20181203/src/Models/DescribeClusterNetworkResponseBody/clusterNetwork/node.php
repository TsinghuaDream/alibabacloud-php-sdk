<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterNetworkResponseBody\clusterNetwork;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $cnnfSwitch;

    /**
     * @example cfeb7a9f99ce740e98c5595d0fe37****
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $interceptionType;

    /**
     * @example testwww
     *
     * @var string
     */
    public $name;

    /**
     * @example ON
     *
     * @var string
     */
    public $netTopoSwitch;

    /**
     * @example 3
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example cluster
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cnnfSwitch'       => 'CnnfSwitch',
        'id'               => 'Id',
        'interceptionType' => 'InterceptionType',
        'name'             => 'Name',
        'netTopoSwitch'    => 'NetTopoSwitch',
        'riskLevel'        => 'RiskLevel',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnnfSwitch) {
            $res['CnnfSwitch'] = $this->cnnfSwitch;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interceptionType) {
            $res['InterceptionType'] = $this->interceptionType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netTopoSwitch) {
            $res['NetTopoSwitch'] = $this->netTopoSwitch;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnnfSwitch'])) {
            $model->cnnfSwitch = $map['CnnfSwitch'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InterceptionType'])) {
            $model->interceptionType = $map['InterceptionType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetTopoSwitch'])) {
            $model->netTopoSwitch = $map['NetTopoSwitch'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
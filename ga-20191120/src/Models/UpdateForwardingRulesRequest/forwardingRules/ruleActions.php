<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class ruleActions extends Model
{
    /**
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @var int
     */
    public $order;

    /**
     * @var string
     */
    public $ruleActionType;

    /**
     * @var string
     */
    public $ruleActionValue;
    protected $_name = [
        'forwardGroupConfig' => 'ForwardGroupConfig',
        'order'              => 'Order',
        'ruleActionType'     => 'RuleActionType',
        'ruleActionValue'    => 'RuleActionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->ruleActionType) {
            $res['RuleActionType'] = $this->ruleActionType;
        }
        if (null !== $this->ruleActionValue) {
            $res['RuleActionValue'] = $this->ruleActionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardGroupConfig'])) {
            $model->forwardGroupConfig = forwardGroupConfig::fromMap($map['ForwardGroupConfig']);
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['RuleActionType'])) {
            $model->ruleActionType = $map['RuleActionType'];
        }
        if (isset($map['RuleActionValue'])) {
            $model->ruleActionValue = $map['RuleActionValue'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\workflowConfig\workflowUnits;
use AlibabaCloud\Tea\Model;

class workflowConfig extends Model
{
    /**
     * @description Specifies whether to enable the workflow instance UI. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $argoServerEnabled;

    /**
     * @description The limit on the prices of containers in the workflow. This parameter takes effect only if the WorkflowScheduleMode parameter is set to cost-optimized.
     *
     * @example 0.08
     *
     * @var string
     */
    public $priceLimit;

    /**
     * @description The scheduling mode of the workflow. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   cost-optimized: cost-prioritized scheduling mode.
     *   stock-optimized: inventory-prioritized scheduling mode.
     *
     * @example cost-optimized
     *
     * @var string
     */
    public $workflowScheduleMode;

    /**
     * @description The Argo workflow regions  configuration.
     *
     * @var workflowUnits[]
     */
    public $workflowUnits;
    protected $_name = [
        'argoServerEnabled'    => 'ArgoServerEnabled',
        'priceLimit'           => 'PriceLimit',
        'workflowScheduleMode' => 'WorkflowScheduleMode',
        'workflowUnits'        => 'WorkflowUnits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argoServerEnabled) {
            $res['ArgoServerEnabled'] = $this->argoServerEnabled;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->workflowScheduleMode) {
            $res['WorkflowScheduleMode'] = $this->workflowScheduleMode;
        }
        if (null !== $this->workflowUnits) {
            $res['WorkflowUnits'] = [];
            if (null !== $this->workflowUnits && \is_array($this->workflowUnits)) {
                $n = 0;
                foreach ($this->workflowUnits as $item) {
                    $res['WorkflowUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgoServerEnabled'])) {
            $model->argoServerEnabled = $map['ArgoServerEnabled'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['WorkflowScheduleMode'])) {
            $model->workflowScheduleMode = $map['WorkflowScheduleMode'];
        }
        if (isset($map['WorkflowUnits'])) {
            if (!empty($map['WorkflowUnits'])) {
                $model->workflowUnits = [];
                $n                    = 0;
                foreach ($map['WorkflowUnits'] as $item) {
                    $model->workflowUnits[$n++] = null !== $item ? workflowUnits::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Tea\Model;

class configRuleEvaluationStatus extends Model
{
    /**
     * @description The timestamp when the rule was first triggered.
     *
     * @example 1624932221993
     *
     * @var int
     */
    public $firstActivatedTimestamp;

    /**
     * @description Indicates whether resources were evaluated based on the rule. Valid values:
     *
     *   true: Resources were evaluated based on the rule.
     *   false: Resources were not evaluated based on the rule.
     *
     * @example true
     *
     * @var bool
     */
    public $firstEvaluationStarted;

    /**
     * @description The error code returned for the last failed compliance evaluation.
     *
     * @example TimeOut
     *
     * @var string
     */
    public $lastErrorCode;

    /**
     * @description The error message returned for the last failed compliance evaluation.
     *
     * @example time out
     *
     * @var string
     */
    public $lastErrorMessage;

    /**
     * @description The timestamp when the last failed compliance evaluation of the rule ended. Unit: milliseconds.
     *
     * @example 1614687022000
     *
     * @var int
     */
    public $lastFailedEvaluationTimestamp;

    /**
     * @description The timestamp when the last failed compliance evaluation of the rule started. Unit: milliseconds.
     *
     * @example 1614687022000
     *
     * @var int
     */
    public $lastFailedInvocationTimestamp;

    /**
     * @description The timestamp when the last successful compliance evaluation of the rule ended. Unit: milliseconds.
     *
     * @example 1624932227486
     *
     * @var int
     */
    public $lastSuccessfulEvaluationTimestamp;

    /**
     * @description The timestamp when the last successful compliance evaluation of the rule started. Unit: milliseconds.
     *
     * @example 1624932227476
     *
     * @var int
     */
    public $lastSuccessfulInvocationTimestamp;
    protected $_name = [
        'firstActivatedTimestamp'           => 'FirstActivatedTimestamp',
        'firstEvaluationStarted'            => 'FirstEvaluationStarted',
        'lastErrorCode'                     => 'LastErrorCode',
        'lastErrorMessage'                  => 'LastErrorMessage',
        'lastFailedEvaluationTimestamp'     => 'LastFailedEvaluationTimestamp',
        'lastFailedInvocationTimestamp'     => 'LastFailedInvocationTimestamp',
        'lastSuccessfulEvaluationTimestamp' => 'LastSuccessfulEvaluationTimestamp',
        'lastSuccessfulInvocationTimestamp' => 'LastSuccessfulInvocationTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstActivatedTimestamp) {
            $res['FirstActivatedTimestamp'] = $this->firstActivatedTimestamp;
        }
        if (null !== $this->firstEvaluationStarted) {
            $res['FirstEvaluationStarted'] = $this->firstEvaluationStarted;
        }
        if (null !== $this->lastErrorCode) {
            $res['LastErrorCode'] = $this->lastErrorCode;
        }
        if (null !== $this->lastErrorMessage) {
            $res['LastErrorMessage'] = $this->lastErrorMessage;
        }
        if (null !== $this->lastFailedEvaluationTimestamp) {
            $res['LastFailedEvaluationTimestamp'] = $this->lastFailedEvaluationTimestamp;
        }
        if (null !== $this->lastFailedInvocationTimestamp) {
            $res['LastFailedInvocationTimestamp'] = $this->lastFailedInvocationTimestamp;
        }
        if (null !== $this->lastSuccessfulEvaluationTimestamp) {
            $res['LastSuccessfulEvaluationTimestamp'] = $this->lastSuccessfulEvaluationTimestamp;
        }
        if (null !== $this->lastSuccessfulInvocationTimestamp) {
            $res['LastSuccessfulInvocationTimestamp'] = $this->lastSuccessfulInvocationTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleEvaluationStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstActivatedTimestamp'])) {
            $model->firstActivatedTimestamp = $map['FirstActivatedTimestamp'];
        }
        if (isset($map['FirstEvaluationStarted'])) {
            $model->firstEvaluationStarted = $map['FirstEvaluationStarted'];
        }
        if (isset($map['LastErrorCode'])) {
            $model->lastErrorCode = $map['LastErrorCode'];
        }
        if (isset($map['LastErrorMessage'])) {
            $model->lastErrorMessage = $map['LastErrorMessage'];
        }
        if (isset($map['LastFailedEvaluationTimestamp'])) {
            $model->lastFailedEvaluationTimestamp = $map['LastFailedEvaluationTimestamp'];
        }
        if (isset($map['LastFailedInvocationTimestamp'])) {
            $model->lastFailedInvocationTimestamp = $map['LastFailedInvocationTimestamp'];
        }
        if (isset($map['LastSuccessfulEvaluationTimestamp'])) {
            $model->lastSuccessfulEvaluationTimestamp = $map['LastSuccessfulEvaluationTimestamp'];
        }
        if (isset($map['LastSuccessfulInvocationTimestamp'])) {
            $model->lastSuccessfulInvocationTimestamp = $map['LastSuccessfulInvocationTimestamp'];
        }

        return $model;
    }
}

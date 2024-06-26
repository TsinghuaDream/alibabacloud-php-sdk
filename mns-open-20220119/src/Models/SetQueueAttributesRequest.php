<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class SetQueueAttributesRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @example True
     *
     * @var bool
     */
    public $enableLogging;

    /**
     * @example 1024
     *
     * @var int
     */
    public $maximumMessageSize;

    /**
     * @example 120
     *
     * @var int
     */
    public $messageRetentionPeriod;

    /**
     * @example 0
     *
     * @var int
     */
    public $pollingWaitSeconds;

    /**
     * @description This parameter is required.
     *
     * @example testqueue
     *
     * @var string
     */
    public $queueName;

    /**
     * @example 60
     *
     * @var int
     */
    public $visibilityTimeout;
    protected $_name = [
        'delaySeconds'           => 'DelaySeconds',
        'enableLogging'          => 'EnableLogging',
        'maximumMessageSize'     => 'MaximumMessageSize',
        'messageRetentionPeriod' => 'MessageRetentionPeriod',
        'pollingWaitSeconds'     => 'PollingWaitSeconds',
        'queueName'              => 'QueueName',
        'visibilityTimeout'      => 'VisibilityTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->enableLogging) {
            $res['EnableLogging'] = $this->enableLogging;
        }
        if (null !== $this->maximumMessageSize) {
            $res['MaximumMessageSize'] = $this->maximumMessageSize;
        }
        if (null !== $this->messageRetentionPeriod) {
            $res['MessageRetentionPeriod'] = $this->messageRetentionPeriod;
        }
        if (null !== $this->pollingWaitSeconds) {
            $res['PollingWaitSeconds'] = $this->pollingWaitSeconds;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->visibilityTimeout) {
            $res['VisibilityTimeout'] = $this->visibilityTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetQueueAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['EnableLogging'])) {
            $model->enableLogging = $map['EnableLogging'];
        }
        if (isset($map['MaximumMessageSize'])) {
            $model->maximumMessageSize = $map['MaximumMessageSize'];
        }
        if (isset($map['MessageRetentionPeriod'])) {
            $model->messageRetentionPeriod = $map['MessageRetentionPeriod'];
        }
        if (isset($map['PollingWaitSeconds'])) {
            $model->pollingWaitSeconds = $map['PollingWaitSeconds'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['VisibilityTimeout'])) {
            $model->visibilityTimeout = $map['VisibilityTimeout'];
        }

        return $model;
    }
}

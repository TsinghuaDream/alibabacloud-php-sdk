<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TaskTemplateSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @example build&deploy.
     *
     * @var string
     */
    public $description;

    /**
     * @var Condition
     */
    public $executeCondition;

    /**
     * @var TaskWorker
     */
    public $worker;
    protected $_name = [
        'context'          => 'context',
        'description'      => 'description',
        'executeCondition' => 'executeCondition',
        'worker'           => 'worker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->executeCondition) {
            $res['executeCondition'] = null !== $this->executeCondition ? $this->executeCondition->toMap() : null;
        }
        if (null !== $this->worker) {
            $res['worker'] = null !== $this->worker ? $this->worker->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskTemplateSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['context'])) {
            $model->context = Context::fromMap($map['context']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['executeCondition'])) {
            $model->executeCondition = Condition::fromMap($map['executeCondition']);
        }
        if (isset($map['worker'])) {
            $model->worker = TaskWorker::fromMap($map['worker']);
        }

        return $model;
    }
}

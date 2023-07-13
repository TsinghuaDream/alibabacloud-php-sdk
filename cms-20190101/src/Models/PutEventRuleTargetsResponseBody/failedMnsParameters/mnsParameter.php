<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedMnsParameters;

use AlibabaCloud\Tea\Model;

class mnsParameter extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example testQueue
     *
     * @var string
     */
    public $queue;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'id'     => 'Id',
        'queue'  => 'Queue',
        'region' => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mnsParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}

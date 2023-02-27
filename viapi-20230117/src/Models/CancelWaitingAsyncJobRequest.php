<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117\Models;

use AlibabaCloud\Tea\Model;

class CancelWaitingAsyncJobRequest extends Model
{
    /**
     * @example E75FE679-0303-4DD1-8252-1143B4FA8A27
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'jobId' => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelWaitingAsyncJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}

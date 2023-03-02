<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetBaselineConfigRequest extends Model
{
    /**
     * @description The ID of the baseline. You can call the [GetNode](~~173977~~) operation to obtain the ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;
    protected $_name = [
        'baselineId' => 'BaselineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBaselineConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        return $model;
    }
}

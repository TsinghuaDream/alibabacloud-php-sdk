<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CommonApplyQueryRequest extends Model
{
    /**
     * @example 1003366164
     *
     * @var int
     */
    public $applyId;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $bizCategory;

    /**
     * @var string
     */
    public $businessInstanceId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'applyId'            => 'apply_id',
        'bizCategory'        => 'biz_category',
        'businessInstanceId' => 'business_instance_id',
        'userId'             => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->bizCategory) {
            $res['biz_category'] = $this->bizCategory;
        }
        if (null !== $this->businessInstanceId) {
            $res['business_instance_id'] = $this->businessInstanceId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CommonApplyQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['biz_category'])) {
            $model->bizCategory = $map['biz_category'];
        }
        if (isset($map['business_instance_id'])) {
            $model->businessInstanceId = $map['business_instance_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UmountDirectoryRequest extends Model
{
    /**
     * @description The HTTP status code returned. The value 200 indicates that the request was successful.
     *
     * @example album.339
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The ID of the request. You can use the ID to troubleshoot issues.
     *
     * @example META_ALBUM
     *
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'targetId'     => 'TargetId',
        'targetType'   => 'TargetType',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UmountDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}

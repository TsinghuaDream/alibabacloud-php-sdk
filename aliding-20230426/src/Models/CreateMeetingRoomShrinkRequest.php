<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateMeetingRoomShrinkRequest extends Model
{
    /**
     * @example 4644
     *
     * @var int
     */
    public $groupId;

    /**
     * @example xxxIsvRoomId
     *
     * @var string
     */
    public $isvRoomId;

    /**
     * @example 100
     *
     * @var int
     */
    public $roomCapacity;

    /**
     * @var string
     */
    public $roomLabelIdsShrink;

    /**
     * @var string
     */
    public $roomLocationShrink;

    /**
     * @var string
     */
    public $roomName;

    /**
     * @example https://static.dingtalk.com/media/lADPxxxxx.jpg
     *
     * @var string
     */
    public $roomPicture;

    /**
     * @example 1
     *
     * @var int
     */
    public $roomStatus;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'groupId'             => 'GroupId',
        'isvRoomId'           => 'IsvRoomId',
        'roomCapacity'        => 'RoomCapacity',
        'roomLabelIdsShrink'  => 'RoomLabelIds',
        'roomLocationShrink'  => 'RoomLocation',
        'roomName'            => 'RoomName',
        'roomPicture'         => 'RoomPicture',
        'roomStatus'          => 'RoomStatus',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isvRoomId) {
            $res['IsvRoomId'] = $this->isvRoomId;
        }
        if (null !== $this->roomCapacity) {
            $res['RoomCapacity'] = $this->roomCapacity;
        }
        if (null !== $this->roomLabelIdsShrink) {
            $res['RoomLabelIds'] = $this->roomLabelIdsShrink;
        }
        if (null !== $this->roomLocationShrink) {
            $res['RoomLocation'] = $this->roomLocationShrink;
        }
        if (null !== $this->roomName) {
            $res['RoomName'] = $this->roomName;
        }
        if (null !== $this->roomPicture) {
            $res['RoomPicture'] = $this->roomPicture;
        }
        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMeetingRoomShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsvRoomId'])) {
            $model->isvRoomId = $map['IsvRoomId'];
        }
        if (isset($map['RoomCapacity'])) {
            $model->roomCapacity = $map['RoomCapacity'];
        }
        if (isset($map['RoomLabelIds'])) {
            $model->roomLabelIdsShrink = $map['RoomLabelIds'];
        }
        if (isset($map['RoomLocation'])) {
            $model->roomLocationShrink = $map['RoomLocation'];
        }
        if (isset($map['RoomName'])) {
            $model->roomName = $map['RoomName'];
        }
        if (isset($map['RoomPicture'])) {
            $model->roomPicture = $map['RoomPicture'];
        }
        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}

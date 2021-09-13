<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\MakeCallResponseBody\data\callContext;

use AlibabaCloud\Tea\Model;

class channelContexts extends Model
{
    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $channelState;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $channelFlags;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var mixed[]
     */
    public $associatedData;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $originator;

    /**
     * @var string
     */
    public $userExtension;
    protected $_name = [
        'releaseInitiator' => 'ReleaseInitiator',
        'channelState'     => 'ChannelState',
        'destination'      => 'Destination',
        'userId'           => 'UserId',
        'channelFlags'     => 'ChannelFlags',
        'timestamp'        => 'Timestamp',
        'associatedData'   => 'AssociatedData',
        'releaseReason'    => 'ReleaseReason',
        'callType'         => 'CallType',
        'jobId'            => 'JobId',
        'channelId'        => 'ChannelId',
        'originator'       => 'Originator',
        'userExtension'    => 'UserExtension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }
        if (null !== $this->channelState) {
            $res['ChannelState'] = $this->channelState;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->channelFlags) {
            $res['ChannelFlags'] = $this->channelFlags;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->associatedData) {
            $res['AssociatedData'] = $this->associatedData;
        }
        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->originator) {
            $res['Originator'] = $this->originator;
        }
        if (null !== $this->userExtension) {
            $res['UserExtension'] = $this->userExtension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelContexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }
        if (isset($map['ChannelState'])) {
            $model->channelState = $map['ChannelState'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ChannelFlags'])) {
            $model->channelFlags = $map['ChannelFlags'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['AssociatedData'])) {
            $model->associatedData = $map['AssociatedData'];
        }
        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Originator'])) {
            $model->originator = $map['Originator'];
        }
        if (isset($map['UserExtension'])) {
            $model->userExtension = $map['UserExtension'];
        }

        return $model;
    }
}

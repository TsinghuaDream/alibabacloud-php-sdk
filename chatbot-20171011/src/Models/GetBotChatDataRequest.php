<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class GetBotChatDataRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $robotInstanceId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'robotInstanceId' => 'RobotInstanceId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->robotInstanceId) {
            $res['RobotInstanceId'] = $this->robotInstanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBotChatDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RobotInstanceId'])) {
            $model->robotInstanceId = $map['RobotInstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

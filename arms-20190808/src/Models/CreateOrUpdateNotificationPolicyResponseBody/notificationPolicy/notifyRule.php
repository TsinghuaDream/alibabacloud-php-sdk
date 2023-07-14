<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy\notifyRule\notifyObjects;
use AlibabaCloud\Tea\Model;

class notifyRule extends Model
{
    /**
     * @description The notification methods. Valid values:
     *
     * - `webhook`: webhook
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description The end time of the notification window.
     *
     * @example 23:59
     *
     * @var string
     */
    public $notifyEndTime;

    /**
     * @description An array of notification contact objects.
     *
     * @var notifyObjects[]
     */
    public $notifyObjects;

    /**
     * @description The start time of the notification window.
     *
     * @example 00:00
     *
     * @var string
     */
    public $notifyStartTime;
    protected $_name = [
        'notifyChannels'  => 'NotifyChannels',
        'notifyEndTime'   => 'NotifyEndTime',
        'notifyObjects'   => 'NotifyObjects',
        'notifyStartTime' => 'NotifyStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyChannels) {
            $res['NotifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->notifyEndTime) {
            $res['NotifyEndTime'] = $this->notifyEndTime;
        }
        if (null !== $this->notifyObjects) {
            $res['NotifyObjects'] = [];
            if (null !== $this->notifyObjects && \is_array($this->notifyObjects)) {
                $n = 0;
                foreach ($this->notifyObjects as $item) {
                    $res['NotifyObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notifyStartTime) {
            $res['NotifyStartTime'] = $this->notifyStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = $map['NotifyChannels'];
            }
        }
        if (isset($map['NotifyEndTime'])) {
            $model->notifyEndTime = $map['NotifyEndTime'];
        }
        if (isset($map['NotifyObjects'])) {
            if (!empty($map['NotifyObjects'])) {
                $model->notifyObjects = [];
                $n                    = 0;
                foreach ($map['NotifyObjects'] as $item) {
                    $model->notifyObjects[$n++] = null !== $item ? notifyObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotifyStartTime'])) {
            $model->notifyStartTime = $map['NotifyStartTime'];
        }

        return $model;
    }
}

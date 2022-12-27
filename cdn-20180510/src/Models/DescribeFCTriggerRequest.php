<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeFCTriggerRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The trigger that corresponds to the Function Compute service.
     *
     * @example acs:cdn:{RegionID}:{AccountID}:{Filter}
     *
     * @var string
     */
    public $triggerARN;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'triggerARN' => 'TriggerARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }

        return $model;
    }
}

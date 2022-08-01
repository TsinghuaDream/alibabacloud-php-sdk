<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Machine extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     */
    public $machineUniqueid;

    /**
     * @var string
     */
    public $userdefinedId;
    protected $_name = [
        'ip'                => 'ip',
        'lastHeartbeatTime' => 'lastHeartbeatTime',
        'machineUniqueid'   => 'machine-uniqueid',
        'userdefinedId'     => 'userdefined-id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['lastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->machineUniqueid) {
            $res['machine-uniqueid'] = $this->machineUniqueid;
        }
        if (null !== $this->userdefinedId) {
            $res['userdefined-id'] = $this->userdefinedId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Machine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['lastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['lastHeartbeatTime'];
        }
        if (isset($map['machine-uniqueid'])) {
            $model->machineUniqueid = $map['machine-uniqueid'];
        }
        if (isset($map['userdefined-id'])) {
            $model->userdefinedId = $map['userdefined-id'];
        }

        return $model;
    }
}

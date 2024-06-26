<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpTagsRequest extends Model
{
    /**
     * @description The IP address in the alert event.
     *
     * This parameter is required.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the alert event.
     *
     * This parameter is required.
     * @example 11
     *
     * @var string
     */
    public $securityEventId;
    protected $_name = [
        'ip'              => 'Ip',
        'securityEventId' => 'SecurityEventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class accessIpRecords extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 42.120.XX.XX
     *
     * @var string
     */
    public $accessIp;

    /**
     * @description The number of connections.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'accessIp' => 'AccessIp',
        'count'    => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessIpRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}

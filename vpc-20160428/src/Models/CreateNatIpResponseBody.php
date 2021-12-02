<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateNatIpResponseBody extends Model
{
    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natIp'     => 'NatIp',
        'natIpId'   => 'NatIpId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }
        if (null !== $this->natIpId) {
            $res['NatIpId'] = $this->natIpId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }
        if (isset($map['NatIpId'])) {
            $model->natIpId = $map['NatIpId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

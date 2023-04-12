<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateRemediationResponseBody extends Model
{
    /**
     * @description The ID of the remediation setting.
     *
     * @example crr-7c2ba2d0236700a3****
     *
     * @var string
     */
    public $remediationId;

    /**
     * @description The ID of the request.
     *
     * @example C7817373-78CB-4F9A-8AFA-E7A88E9D64A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remediationId' => 'RemediationId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRemediationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

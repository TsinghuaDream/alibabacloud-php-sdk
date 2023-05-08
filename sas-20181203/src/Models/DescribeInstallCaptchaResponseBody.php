<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstallCaptchaResponseBody extends Model
{
    /**
     * @description Queries the verification code for you to manually install the Security Center agent.
     *
     * @example M1HH**
     *
     * @var string
     */
    public $captchaCode;

    /**
     * @description The source IP address of the request.
     *
     * @example 2020-10-10 16:06:38
     *
     * @var string
     */
    public $deadline;

    /**
     * @description 192.168.XX.XX
     *
     * @example 4E5BFDCF-B9DD-430D-9DA4-151BCB581C9D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'captchaCode' => 'CaptchaCode',
        'deadline'    => 'Deadline',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->captchaCode) {
            $res['CaptchaCode'] = $this->captchaCode;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstallCaptchaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaptchaCode'])) {
            $model->captchaCode = $map['CaptchaCode'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

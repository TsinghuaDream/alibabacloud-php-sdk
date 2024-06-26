<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class BindMFADeviceRequest extends Model
{
    /**
     * @description The first authentication code.
     *
     * @example 11****
     *
     * @var string
     */
    public $authenticationCode1;

    /**
     * @description The second authentication code.
     *
     * @example 33****
     *
     * @var string
     */
    public $authenticationCode2;

    /**
     * @description The serial number of the MFA device.
     *
     * @example acs:ram::123456789012****:mfa/device002
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The name of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'authenticationCode1' => 'AuthenticationCode1',
        'authenticationCode2' => 'AuthenticationCode2',
        'serialNumber'        => 'SerialNumber',
        'userName'            => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationCode1) {
            $res['AuthenticationCode1'] = $this->authenticationCode1;
        }
        if (null !== $this->authenticationCode2) {
            $res['AuthenticationCode2'] = $this->authenticationCode2;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindMFADeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationCode1'])) {
            $model->authenticationCode1 = $map['AuthenticationCode1'];
        }
        if (isset($map['AuthenticationCode2'])) {
            $model->authenticationCode2 = $map['AuthenticationCode2'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

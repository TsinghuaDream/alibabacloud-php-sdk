<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateSshKeyResponseBody\sshKey;
use AlibabaCloud\Tea\Model;

class CreateSshKeyResponseBody extends Model
{
    /**
     * @description 请求id，每次请求都是唯一值，便于后续排查问题
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description true 接口调用成功，false 接口调用失败
     *
     * @var bool
     */
    public $success;

    /**
     * @description 企业公钥
     *
     * @var sshKey
     */
    public $sshKey;
    protected $_name = [
        'requestId'    => 'requestId',
        'errorMessage' => 'errorMessage',
        'errorCode'    => 'errorCode',
        'success'      => 'success',
        'sshKey'       => 'sshKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->sshKey) {
            $res['sshKey'] = null !== $this->sshKey ? $this->sshKey->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSshKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['sshKey'])) {
            $model->sshKey = sshKey::fromMap($map['sshKey']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetSubtaskItemResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example null
     *
     * @var string
     */
    public $details;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var SubtaskItemDetail
     */
    public $item;

    /**
     * @description This parameter is required.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 90ABA848-AD74-1F6E-84BC-4182A7F1F29E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'details'   => 'Details',
        'errorCode' => 'ErrorCode',
        'item'      => 'Item',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->item) {
            $res['Item'] = null !== $this->item ? $this->item->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubtaskItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Item'])) {
            $model->item = SubtaskItemDetail::fromMap($map['Item']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

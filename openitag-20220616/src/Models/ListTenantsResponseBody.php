<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListTenantsResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example -
     *
     * @var string
     */
    public $details;

    /**
     * @example -
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description This parameter is required.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

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

    /**
     * @var SimpleTenant[]
     */
    public $tenants;

    /**
     * @example 22
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'code'       => 'Code',
        'details'    => 'Details',
        'errorCode'  => 'ErrorCode',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'tenants'    => 'Tenants',
        'totalCount' => 'TotalCount',
        'totalPage'  => 'TotalPage',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tenants) {
            $res['Tenants'] = [];
            if (null !== $this->tenants && \is_array($this->tenants)) {
                $n = 0;
                foreach ($this->tenants as $item) {
                    $res['Tenants'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTenantsResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n              = 0;
                foreach ($map['Tenants'] as $item) {
                    $model->tenants[$n++] = null !== $item ? SimpleTenant::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}

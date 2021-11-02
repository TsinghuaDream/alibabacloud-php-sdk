<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryStatementsResponseBody\model;

use AlibabaCloud\Tea\Model;

class statementList extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $modifiedDate;

    /**
     * @var string
     */
    public $payeeAccountId;

    /**
     * @var string
     */
    public $payeeAccountName;

    /**
     * @var string
     */
    public $payeeAccountNo;

    /**
     * @var string
     */
    public $payeeId;

    /**
     * @var string
     */
    public $payeeName;

    /**
     * @var string
     */
    public $settleAmount;

    /**
     * @var string
     */
    public $settleNo;

    /**
     * @var string
     */
    public $settleStatus;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'attributes'       => 'Attributes',
        'createDate'       => 'CreateDate',
        'endTime'          => 'EndTime',
        'extInfo'          => 'ExtInfo',
        'modifiedDate'     => 'ModifiedDate',
        'payeeAccountId'   => 'PayeeAccountId',
        'payeeAccountName' => 'PayeeAccountName',
        'payeeAccountNo'   => 'PayeeAccountNo',
        'payeeId'          => 'PayeeId',
        'payeeName'        => 'PayeeName',
        'settleAmount'     => 'SettleAmount',
        'settleNo'         => 'SettleNo',
        'settleStatus'     => 'SettleStatus',
        'startTime'        => 'StartTime',
        'statusMessage'    => 'StatusMessage',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->modifiedDate) {
            $res['ModifiedDate'] = $this->modifiedDate;
        }
        if (null !== $this->payeeAccountId) {
            $res['PayeeAccountId'] = $this->payeeAccountId;
        }
        if (null !== $this->payeeAccountName) {
            $res['PayeeAccountName'] = $this->payeeAccountName;
        }
        if (null !== $this->payeeAccountNo) {
            $res['PayeeAccountNo'] = $this->payeeAccountNo;
        }
        if (null !== $this->payeeId) {
            $res['PayeeId'] = $this->payeeId;
        }
        if (null !== $this->payeeName) {
            $res['PayeeName'] = $this->payeeName;
        }
        if (null !== $this->settleAmount) {
            $res['SettleAmount'] = $this->settleAmount;
        }
        if (null !== $this->settleNo) {
            $res['SettleNo'] = $this->settleNo;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statementList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['ModifiedDate'])) {
            $model->modifiedDate = $map['ModifiedDate'];
        }
        if (isset($map['PayeeAccountId'])) {
            $model->payeeAccountId = $map['PayeeAccountId'];
        }
        if (isset($map['PayeeAccountName'])) {
            $model->payeeAccountName = $map['PayeeAccountName'];
        }
        if (isset($map['PayeeAccountNo'])) {
            $model->payeeAccountNo = $map['PayeeAccountNo'];
        }
        if (isset($map['PayeeId'])) {
            $model->payeeId = $map['PayeeId'];
        }
        if (isset($map['PayeeName'])) {
            $model->payeeName = $map['PayeeName'];
        }
        if (isset($map['SettleAmount'])) {
            $model->settleAmount = $map['SettleAmount'];
        }
        if (isset($map['SettleNo'])) {
            $model->settleNo = $map['SettleNo'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

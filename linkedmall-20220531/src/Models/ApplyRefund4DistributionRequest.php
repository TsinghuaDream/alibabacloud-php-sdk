<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ApplyRefund4DistributionRequest\leavePictureLists;
use AlibabaCloud\Tea\Model;

class ApplyRefund4DistributionRequest extends Model
{
    /**
     * @example 500325
     *
     * @var int
     */
    public $applyReasonTextId;

    /**
     * @example 1
     *
     * @var int
     */
    public $applyRefundCount;

    /**
     * @example 790
     *
     * @var int
     */
    public $applyRefundFee;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizClaimType;

    /**
     * @example 7662***125
     *
     * @var string
     */
    public $distributorId;

    /**
     * @example 1
     *
     * @var int
     */
    public $goodsStatus;

    /**
     * @var string
     */
    public $leaveMessage;

    /**
     * @var leavePictureLists[]
     */
    public $leavePictureLists;

    /**
     * @example DIS_343***445
     *
     * @var string
     */
    public $subDistributionOrderId;

    /**
     * @example 213**761
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'applyReasonTextId'      => 'ApplyReasonTextId',
        'applyRefundCount'       => 'ApplyRefundCount',
        'applyRefundFee'         => 'ApplyRefundFee',
        'bizClaimType'           => 'BizClaimType',
        'distributorId'          => 'DistributorId',
        'goodsStatus'            => 'GoodsStatus',
        'leaveMessage'           => 'LeaveMessage',
        'leavePictureLists'      => 'LeavePictureLists',
        'subDistributionOrderId' => 'SubDistributionOrderId',
        'tenantId'               => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyReasonTextId) {
            $res['ApplyReasonTextId'] = $this->applyReasonTextId;
        }
        if (null !== $this->applyRefundCount) {
            $res['ApplyRefundCount'] = $this->applyRefundCount;
        }
        if (null !== $this->applyRefundFee) {
            $res['ApplyRefundFee'] = $this->applyRefundFee;
        }
        if (null !== $this->bizClaimType) {
            $res['BizClaimType'] = $this->bizClaimType;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->goodsStatus) {
            $res['GoodsStatus'] = $this->goodsStatus;
        }
        if (null !== $this->leaveMessage) {
            $res['LeaveMessage'] = $this->leaveMessage;
        }
        if (null !== $this->leavePictureLists) {
            $res['LeavePictureLists'] = [];
            if (null !== $this->leavePictureLists && \is_array($this->leavePictureLists)) {
                $n = 0;
                foreach ($this->leavePictureLists as $item) {
                    $res['LeavePictureLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyRefund4DistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyReasonTextId'])) {
            $model->applyReasonTextId = $map['ApplyReasonTextId'];
        }
        if (isset($map['ApplyRefundCount'])) {
            $model->applyRefundCount = $map['ApplyRefundCount'];
        }
        if (isset($map['ApplyRefundFee'])) {
            $model->applyRefundFee = $map['ApplyRefundFee'];
        }
        if (isset($map['BizClaimType'])) {
            $model->bizClaimType = $map['BizClaimType'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['GoodsStatus'])) {
            $model->goodsStatus = $map['GoodsStatus'];
        }
        if (isset($map['LeaveMessage'])) {
            $model->leaveMessage = $map['LeaveMessage'];
        }
        if (isset($map['LeavePictureLists'])) {
            if (!empty($map['LeavePictureLists'])) {
                $model->leavePictureLists = [];
                $n                        = 0;
                foreach ($map['LeavePictureLists'] as $item) {
                    $model->leavePictureLists[$n++] = null !== $item ? leavePictureLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

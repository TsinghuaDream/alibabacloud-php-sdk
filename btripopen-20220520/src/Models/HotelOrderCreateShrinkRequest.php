<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelOrderCreateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123122
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @description This parameter is required.
     *
     * @example 2020-10-20
     *
     * @var string
     */
    public $checkIn;

    /**
     * @description This parameter is required.
     *
     * @example 2020-10-20
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example demo
     *
     * @var string
     */
    public $contractEmail;

    /**
     * @var string
     */
    public $contractName;

    /**
     * @description This parameter is required.
     *
     * @example 19281772123
     *
     * @var string
     */
    public $contractPhone;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $corpPayPrice;

    /**
     * @description This parameter is required.
     *
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $invoiceInfoShrink;

    /**
     * @description This parameter is required.
     *
     * @example 671570615157
     *
     * @var int
     */
    public $itemId;

    /**
     * @description This parameter is required.
     *
     * @example fb5e1abf33924b6c912bd6d80deec0eb-1
     *
     * @var string
     */
    public $itineraryNo;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $occupantInfoListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var int
     */
    public $personPayPrice;

    /**
     * @var string
     */
    public $promotionInfoShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1399417428510
     *
     * @var int
     */
    public $ratePlanId;

    /**
     * @description This parameter is required.
     *
     * @example 187211
     *
     * @var int
     */
    public $roomId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $roomNum;

    /**
     * @description This parameter is required.
     *
     * @example 2088441675613762
     *
     * @var int
     */
    public $sellerId;

    /**
     * @description This parameter is required.
     *
     * @example 2198781
     *
     * @var int
     */
    public $shid;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $totalOrderPrice;

    /**
     * @description This parameter is required.
     *
     * @example nonUltron_1673575241156_d91ea8ad16735752359161037bf6cf_c54d3768312a4b249b719f126377bf82
     *
     * @var string
     */
    public $validateResKey;
    protected $_name = [
        'btripUserId'            => 'btrip_user_id',
        'checkIn'                => 'check_in',
        'checkOut'               => 'check_out',
        'contractEmail'          => 'contract_email',
        'contractName'           => 'contract_name',
        'contractPhone'          => 'contract_phone',
        'corpPayPrice'           => 'corp_pay_price',
        'disOrderId'             => 'dis_order_id',
        'extra'                  => 'extra',
        'invoiceInfoShrink'      => 'invoice_info',
        'itemId'                 => 'item_id',
        'itineraryNo'            => 'itinerary_no',
        'occupantInfoListShrink' => 'occupant_info_list',
        'personPayPrice'         => 'person_pay_price',
        'promotionInfoShrink'    => 'promotion_info',
        'ratePlanId'             => 'rate_plan_id',
        'roomId'                 => 'room_id',
        'roomNum'                => 'room_num',
        'sellerId'               => 'seller_id',
        'shid'                   => 'shid',
        'totalOrderPrice'        => 'total_order_price',
        'validateResKey'         => 'validate_res_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }
        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }
        if (null !== $this->contractEmail) {
            $res['contract_email'] = $this->contractEmail;
        }
        if (null !== $this->contractName) {
            $res['contract_name'] = $this->contractName;
        }
        if (null !== $this->contractPhone) {
            $res['contract_phone'] = $this->contractPhone;
        }
        if (null !== $this->corpPayPrice) {
            $res['corp_pay_price'] = $this->corpPayPrice;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->invoiceInfoShrink) {
            $res['invoice_info'] = $this->invoiceInfoShrink;
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->itineraryNo) {
            $res['itinerary_no'] = $this->itineraryNo;
        }
        if (null !== $this->occupantInfoListShrink) {
            $res['occupant_info_list'] = $this->occupantInfoListShrink;
        }
        if (null !== $this->personPayPrice) {
            $res['person_pay_price'] = $this->personPayPrice;
        }
        if (null !== $this->promotionInfoShrink) {
            $res['promotion_info'] = $this->promotionInfoShrink;
        }
        if (null !== $this->ratePlanId) {
            $res['rate_plan_id'] = $this->ratePlanId;
        }
        if (null !== $this->roomId) {
            $res['room_id'] = $this->roomId;
        }
        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }
        if (null !== $this->sellerId) {
            $res['seller_id'] = $this->sellerId;
        }
        if (null !== $this->shid) {
            $res['shid'] = $this->shid;
        }
        if (null !== $this->totalOrderPrice) {
            $res['total_order_price'] = $this->totalOrderPrice;
        }
        if (null !== $this->validateResKey) {
            $res['validate_res_key'] = $this->validateResKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelOrderCreateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }
        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }
        if (isset($map['contract_email'])) {
            $model->contractEmail = $map['contract_email'];
        }
        if (isset($map['contract_name'])) {
            $model->contractName = $map['contract_name'];
        }
        if (isset($map['contract_phone'])) {
            $model->contractPhone = $map['contract_phone'];
        }
        if (isset($map['corp_pay_price'])) {
            $model->corpPayPrice = $map['corp_pay_price'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['invoice_info'])) {
            $model->invoiceInfoShrink = $map['invoice_info'];
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['itinerary_no'])) {
            $model->itineraryNo = $map['itinerary_no'];
        }
        if (isset($map['occupant_info_list'])) {
            $model->occupantInfoListShrink = $map['occupant_info_list'];
        }
        if (isset($map['person_pay_price'])) {
            $model->personPayPrice = $map['person_pay_price'];
        }
        if (isset($map['promotion_info'])) {
            $model->promotionInfoShrink = $map['promotion_info'];
        }
        if (isset($map['rate_plan_id'])) {
            $model->ratePlanId = $map['rate_plan_id'];
        }
        if (isset($map['room_id'])) {
            $model->roomId = $map['room_id'];
        }
        if (isset($map['room_num'])) {
            $model->roomNum = $map['room_num'];
        }
        if (isset($map['seller_id'])) {
            $model->sellerId = $map['seller_id'];
        }
        if (isset($map['shid'])) {
            $model->shid = $map['shid'];
        }
        if (isset($map['total_order_price'])) {
            $model->totalOrderPrice = $map['total_order_price'];
        }
        if (isset($map['validate_res_key'])) {
            $model->validateResKey = $map['validate_res_key'];
        }

        return $model;
    }
}

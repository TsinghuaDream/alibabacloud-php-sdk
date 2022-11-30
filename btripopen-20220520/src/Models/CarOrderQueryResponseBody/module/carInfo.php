<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class carInfo extends Model
{
    /**
     * @var string
     */
    public $businessCategory;

    /**
     * @var int
     */
    public $cancelTime;

    /**
     * @var string
     */
    public $carInfo;

    /**
     * @var int
     */
    public $carLevel;

    /**
     * @var int
     */
    public $driverConfirmTime;

    /**
     * @var int
     */
    public $estimatePrice;

    /**
     * @var string
     */
    public $fromAddress;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var bool
     */
    public $isSpecial;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var int
     */
    public $publishTime;

    /**
     * @var string
     */
    public $realFromAddress;

    /**
     * @var string
     */
    public $realFromCityName;

    /**
     * @var string
     */
    public $realToAddress;

    /**
     * @var string
     */
    public $realToCityName;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $specialTypes;

    /**
     * @var int
     */
    public $takenTime;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $toCityName;

    /**
     * @var string
     */
    public $travelDistance;
    protected $_name = [
        'businessCategory'  => 'business_category',
        'cancelTime'        => 'cancel_time',
        'carInfo'           => 'car_info',
        'carLevel'          => 'car_level',
        'driverConfirmTime' => 'driver_confirm_time',
        'estimatePrice'     => 'estimate_price',
        'fromAddress'       => 'from_address',
        'fromCityName'      => 'from_city_name',
        'isSpecial'         => 'is_special',
        'memo'              => 'memo',
        'payTime'           => 'pay_time',
        'publishTime'       => 'publish_time',
        'realFromAddress'   => 'real_from_address',
        'realFromCityName'  => 'real_from_city_name',
        'realToAddress'     => 'real_to_address',
        'realToCityName'    => 'real_to_city_name',
        'serviceType'       => 'service_type',
        'specialTypes'      => 'special_types',
        'takenTime'         => 'taken_time',
        'toAddress'         => 'to_address',
        'toCityName'        => 'to_city_name',
        'travelDistance'    => 'travel_distance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessCategory) {
            $res['business_category'] = $this->businessCategory;
        }
        if (null !== $this->cancelTime) {
            $res['cancel_time'] = $this->cancelTime;
        }
        if (null !== $this->carInfo) {
            $res['car_info'] = $this->carInfo;
        }
        if (null !== $this->carLevel) {
            $res['car_level'] = $this->carLevel;
        }
        if (null !== $this->driverConfirmTime) {
            $res['driver_confirm_time'] = $this->driverConfirmTime;
        }
        if (null !== $this->estimatePrice) {
            $res['estimate_price'] = $this->estimatePrice;
        }
        if (null !== $this->fromAddress) {
            $res['from_address'] = $this->fromAddress;
        }
        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }
        if (null !== $this->isSpecial) {
            $res['is_special'] = $this->isSpecial;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->publishTime) {
            $res['publish_time'] = $this->publishTime;
        }
        if (null !== $this->realFromAddress) {
            $res['real_from_address'] = $this->realFromAddress;
        }
        if (null !== $this->realFromCityName) {
            $res['real_from_city_name'] = $this->realFromCityName;
        }
        if (null !== $this->realToAddress) {
            $res['real_to_address'] = $this->realToAddress;
        }
        if (null !== $this->realToCityName) {
            $res['real_to_city_name'] = $this->realToCityName;
        }
        if (null !== $this->serviceType) {
            $res['service_type'] = $this->serviceType;
        }
        if (null !== $this->specialTypes) {
            $res['special_types'] = $this->specialTypes;
        }
        if (null !== $this->takenTime) {
            $res['taken_time'] = $this->takenTime;
        }
        if (null !== $this->toAddress) {
            $res['to_address'] = $this->toAddress;
        }
        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
        }
        if (null !== $this->travelDistance) {
            $res['travel_distance'] = $this->travelDistance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return carInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business_category'])) {
            $model->businessCategory = $map['business_category'];
        }
        if (isset($map['cancel_time'])) {
            $model->cancelTime = $map['cancel_time'];
        }
        if (isset($map['car_info'])) {
            $model->carInfo = $map['car_info'];
        }
        if (isset($map['car_level'])) {
            $model->carLevel = $map['car_level'];
        }
        if (isset($map['driver_confirm_time'])) {
            $model->driverConfirmTime = $map['driver_confirm_time'];
        }
        if (isset($map['estimate_price'])) {
            $model->estimatePrice = $map['estimate_price'];
        }
        if (isset($map['from_address'])) {
            $model->fromAddress = $map['from_address'];
        }
        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }
        if (isset($map['is_special'])) {
            $model->isSpecial = $map['is_special'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['publish_time'])) {
            $model->publishTime = $map['publish_time'];
        }
        if (isset($map['real_from_address'])) {
            $model->realFromAddress = $map['real_from_address'];
        }
        if (isset($map['real_from_city_name'])) {
            $model->realFromCityName = $map['real_from_city_name'];
        }
        if (isset($map['real_to_address'])) {
            $model->realToAddress = $map['real_to_address'];
        }
        if (isset($map['real_to_city_name'])) {
            $model->realToCityName = $map['real_to_city_name'];
        }
        if (isset($map['service_type'])) {
            $model->serviceType = $map['service_type'];
        }
        if (isset($map['special_types'])) {
            $model->specialTypes = $map['special_types'];
        }
        if (isset($map['taken_time'])) {
            $model->takenTime = $map['taken_time'];
        }
        if (isset($map['to_address'])) {
            $model->toAddress = $map['to_address'];
        }
        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }
        if (isset($map['travel_distance'])) {
            $model->travelDistance = $map['travel_distance'];
        }

        return $model;
    }
}
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The amount deducted by using credit refunds.
     *
     * @example 0
     *
     * @var float
     */
    public $adjustAmount;

    /**
     * @description The billing date. This parameter is returned only if the Granularity parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example 2020-03
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The billable item. This parameter is returned only if the IsBillingItem parameter is set to true.
     *
     * @example Other
     *
     * @var string
     */
    public $billingItem;

    /**
     * @description The billing type.
     *
     * @example Other
     *
     * @var string
     */
    public $billingType;

    /**
     * @description The amount paid in cash. The amount that was deducted by using credit refunds is not included.
     *
     * @example 0
     *
     * @var float
     */
    public $cashAmount;

    /**
     * @description The code of the commodity. The commodity code is the same as that displayed in User Center.
     *
     * @example rds
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The cost center.
     *
     * @example Not allocated
     *
     * @var string
     */
    public $costUnit;

    /**
     * @description The type of the currency. Valid values:
     *
     *   CNY
     *   USD
     *   JPY
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The amount deducted by using vouchers.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description The amount deducted by using coupons.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description The amount deducted by using prepaid cards.
     *
     * @example 0
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description The amount deducted by using resource plans.
     *
     * @example NULL
     *
     * @var string
     */
    public $deductedByResourcePackage;

    /**
     * @description The configurations of the instance.
     *
     * @example CPU:12
     *
     * @var string
     */
    public $instanceConfig;

    /**
     * @description The ID of the instance.
     *
     * @example i-kjhdskjgshfdlkjfdh
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.sn1ne.3xlarge
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The public IP address.
     *
     * @example 34.xx.x.x
     *
     * @var string
     */
    public $internetIP;

    /**
     * @description The private IP address.
     *
     * @example 192.xx.xx.xx
     *
     * @var string
     */
    public $intranetIP;

    /**
     * @description The discount amount.
     *
     * @example 0
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description The type of the bill.
     *
     *   SubscriptionOrder: subscription order
     *   PayAsYouGoBill: pay-as-you-go bill
     *   Refund: refund
     *   Adjustment: reconciliation
     *
     * @example PayAsYouGoBill
     *
     * @var string
     */
    public $item;

    /**
     * @description The unit price. This parameter is returned only if the isBillingItem parameter is set to true.
     *
     * @example 100
     *
     * @var string
     */
    public $listPrice;

    /**
     * @description The unit of the unit price. This parameter is returned only if the isBillingItem parameter is set to true.
     *
     * @example CNY
     *
     * @var string
     */
    public $listPriceUnit;

    /**
     * @description The name of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The unsettled amount.
     *
     * @example 0
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description The ID of the member account. This parameter is returned in a multi-account payment scenario.
     *
     * @example 169***013
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description The amount paid in cash.
     *
     * @example 0
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description The code of the service. The service code is the same as that displayed in User Center.
     *
     * @example rds
     *
     * @var string
     */
    public $pipCode;

    /**
     * @description The pretax amount.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description The pretax gross amount.
     *
     * @example 0
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The details of the service.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $productDetail;

    /**
     * @description The name of the service.
     *
     * @example ApsaraDB RDS
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $region;

    /**
     * @description The resource group.
     *
     * @example Default resource group
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description The validity period.
     *
     * @example 10
     *
     * @var string
     */
    public $servicePeriod;

    /**
     * @description The unit of the validity period.
     *
     * @example Seconds
     *
     * @var string
     */
    public $servicePeriodUnit;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: the subscription billing method
     *   PayAsYouGo: the pay-as-you-go billing method
     *
     **
     *
     ****This parameter is returned together with the ProductCode parameter.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description The tag.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The usage of the billable item. This parameter is returned only if the isBillingItem parameter is set to true.
     *
     * @example 100
     *
     * @var string
     */
    public $usage;

    /**
     * @description The unit of usage. This parameter is returned only if the isBillingItem parameter is set to true.
     *
     * @example GB
     *
     * @var string
     */
    public $usageUnit;

    /**
     * @description The ID of the zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'adjustAmount'              => 'AdjustAmount',
        'billingDate'               => 'BillingDate',
        'billingItem'               => 'BillingItem',
        'billingType'               => 'BillingType',
        'cashAmount'                => 'CashAmount',
        'commodityCode'             => 'CommodityCode',
        'costUnit'                  => 'CostUnit',
        'currency'                  => 'Currency',
        'deductedByCashCoupons'     => 'DeductedByCashCoupons',
        'deductedByCoupons'         => 'DeductedByCoupons',
        'deductedByPrepaidCard'     => 'DeductedByPrepaidCard',
        'deductedByResourcePackage' => 'DeductedByResourcePackage',
        'instanceConfig'            => 'InstanceConfig',
        'instanceID'                => 'InstanceID',
        'instanceSpec'              => 'InstanceSpec',
        'internetIP'                => 'InternetIP',
        'intranetIP'                => 'IntranetIP',
        'invoiceDiscount'           => 'InvoiceDiscount',
        'item'                      => 'Item',
        'listPrice'                 => 'ListPrice',
        'listPriceUnit'             => 'ListPriceUnit',
        'nickName'                  => 'NickName',
        'outstandingAmount'         => 'OutstandingAmount',
        'ownerID'                   => 'OwnerID',
        'paymentAmount'             => 'PaymentAmount',
        'pipCode'                   => 'PipCode',
        'pretaxAmount'              => 'PretaxAmount',
        'pretaxGrossAmount'         => 'PretaxGrossAmount',
        'productCode'               => 'ProductCode',
        'productDetail'             => 'ProductDetail',
        'productName'               => 'ProductName',
        'productType'               => 'ProductType',
        'region'                    => 'Region',
        'resourceGroup'             => 'ResourceGroup',
        'servicePeriod'             => 'ServicePeriod',
        'servicePeriodUnit'         => 'ServicePeriodUnit',
        'subscriptionType'          => 'SubscriptionType',
        'tag'                       => 'Tag',
        'usage'                     => 'Usage',
        'usageUnit'                 => 'UsageUnit',
        'zone'                      => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustAmount) {
            $res['AdjustAmount'] = $this->adjustAmount;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->billingItem) {
            $res['BillingItem'] = $this->billingItem;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->deductedByResourcePackage) {
            $res['DeductedByResourcePackage'] = $this->deductedByResourcePackage;
        }
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = $this->instanceConfig;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->internetIP) {
            $res['InternetIP'] = $this->internetIP;
        }
        if (null !== $this->intranetIP) {
            $res['IntranetIP'] = $this->intranetIP;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->listPriceUnit) {
            $res['ListPriceUnit'] = $this->listPriceUnit;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->servicePeriod) {
            $res['ServicePeriod'] = $this->servicePeriod;
        }
        if (null !== $this->servicePeriodUnit) {
            $res['ServicePeriodUnit'] = $this->servicePeriodUnit;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustAmount'])) {
            $model->adjustAmount = $map['AdjustAmount'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['BillingItem'])) {
            $model->billingItem = $map['BillingItem'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['DeductedByResourcePackage'])) {
            $model->deductedByResourcePackage = $map['DeductedByResourcePackage'];
        }
        if (isset($map['InstanceConfig'])) {
            $model->instanceConfig = $map['InstanceConfig'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['InternetIP'])) {
            $model->internetIP = $map['InternetIP'];
        }
        if (isset($map['IntranetIP'])) {
            $model->intranetIP = $map['IntranetIP'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['ListPriceUnit'])) {
            $model->listPriceUnit = $map['ListPriceUnit'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['ServicePeriod'])) {
            $model->servicePeriod = $map['ServicePeriod'];
        }
        if (isset($map['ServicePeriodUnit'])) {
            $model->servicePeriodUnit = $map['ServicePeriodUnit'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}

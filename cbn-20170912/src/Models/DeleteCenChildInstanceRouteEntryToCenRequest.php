<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DeleteCenChildInstanceRouteEntryToCenRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * This parameter is required.
     * @example cen-7febra5nqj7jjh****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the Alibaba Cloud account to which the network instance belongs.
     *
     * > If the network instance and the CEN instance belong to different Alibaba Cloud accounts, this parameter is required.
     * @example 1787100000000000
     *
     * @var int
     */
    public $childInstanceAliUid;

    /**
     * @description The ID of the network instance.
     *
     * This parameter is required.
     * @example vpc-k1alm2jbuwibhxtx2****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the region where the network instance is deployed.
     *
     * This parameter is required.
     * @example ap-southeast-5
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: a virtual private cloud (VPC)
     *   **VBR**: a virtual border router (VBR)
     *
     * This parameter is required.
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The destination CIDR block of the route.
     *
     * This parameter is required.
     * @example 192.168.22.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the route table configured on the network instance.
     *
     * This parameter is required.
     * @example vtb-k1aa8ulqs39f86op8****
     *
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'cenId'                 => 'CenId',
        'childInstanceAliUid'   => 'ChildInstanceAliUid',
        'childInstanceId'       => 'ChildInstanceId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType'     => 'ChildInstanceType',
        'destinationCidrBlock'  => 'DestinationCidrBlock',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'routeTableId'          => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceAliUid) {
            $res['ChildInstanceAliUid'] = $this->childInstanceAliUid;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCenChildInstanceRouteEntryToCenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceAliUid'])) {
            $model->childInstanceAliUid = $map['ChildInstanceAliUid'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ListCenInterRegionTrafficQosQueuesRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query.
     *
     * - If NextToken was returned in the previous query, specify the value to obtain the next set of results.
     * @example 2ca1ed1573cb****
     *
     * @var string
     */
    public $nextToken;

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
     * @description The ID of the QoS policy.
     *
     * @example qos-rnghap5gc8155x****
     *
     * @var string
     */
    public $trafficQosPolicyId;

    /**
     * @description The description of the queue.
     *
     * @example qosQueueDescription
     *
     * @var string
     */
    public $trafficQosQueueDescription;

    /**
     * @description The ID of the queue.
     *
     * @example qos-queue-siakjb2nn9gz5z****
     *
     * @var string
     */
    public $trafficQosQueueId;

    /**
     * @description The name of the queue.
     *
     * @example qosQueueName
     *
     * @var string
     */
    public $trafficQosQueueName;

    /**
     * @description The ID of the inter-region connection.
     *
     * @example tr-attach-a6p8voaodog5c0****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-bp1rmwxnk221e3fas****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'trafficQosPolicyId'         => 'TrafficQosPolicyId',
        'trafficQosQueueDescription' => 'TrafficQosQueueDescription',
        'trafficQosQueueId'          => 'TrafficQosQueueId',
        'trafficQosQueueName'        => 'TrafficQosQueueName',
        'transitRouterAttachmentId'  => 'TransitRouterAttachmentId',
        'transitRouterId'            => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }
        if (null !== $this->trafficQosQueueDescription) {
            $res['TrafficQosQueueDescription'] = $this->trafficQosQueueDescription;
        }
        if (null !== $this->trafficQosQueueId) {
            $res['TrafficQosQueueId'] = $this->trafficQosQueueId;
        }
        if (null !== $this->trafficQosQueueName) {
            $res['TrafficQosQueueName'] = $this->trafficQosQueueName;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCenInterRegionTrafficQosQueuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }
        if (isset($map['TrafficQosQueueDescription'])) {
            $model->trafficQosQueueDescription = $map['TrafficQosQueueDescription'];
        }
        if (isset($map['TrafficQosQueueId'])) {
            $model->trafficQosQueueId = $map['TrafficQosQueueId'];
        }
        if (isset($map['TrafficQosQueueName'])) {
            $model->trafficQosQueueName = $map['TrafficQosQueueName'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}

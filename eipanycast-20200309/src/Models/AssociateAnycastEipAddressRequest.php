<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\AssociateAnycastEipAddressRequest\popLocations;
use AlibabaCloud\Tea\Model;

class AssociateAnycastEipAddressRequest extends Model
{
    /**
     * @description The ID of the Anycast EIP.
     *
     * @example aeip-bp1ix34fralt4ykf3****
     *
     * @var string
     */
    public $anycastId;

    /**
     * @description The association mode. Valid values:
     *
     *   **Default**: the default mode. In this mode, cloud resources to be associated are set as default origin servers.
     *   **Normal**: the standard mode. In this mode, cloud resources to be associated are set as standard origin servers.
     *
     * > You can associate an Anycast EIP with cloud resources in multiple regions. However, you can set only one cloud resource as the default origin server. Other cloud resources are set as standard origin servers. If you do not specify or add an access point, requests are forwarded to the default origin server.
     *
     *   If this is your first time to associate an Anycast EIP with a cloud resource, set the value to **Default**.
     *   If not, you can also set the value to **Default**, which specifies a new default origin server. In this case, the previous origin server functions as a standard origin server.
     *
     * @example Default
     *
     * @var string
     */
    public $associationMode;

    /**
     * @description The ID of the cloud resource with which you want to associate the Anycast EIP.
     *
     * @example lb-d7oxbixhxv1uupnon****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The ID of the region where the cloud resource is deployed.
     *
     * You can associate Anycast EIPs only with cloud resources in specific regions. You can call the [DescribeAnycastServerRegions](~~171939~~) operation to query the region IDs.
     * @example us-west-1
     *
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @description The type of cloud resource with which you want to associate the Anycast EIP. Valid values:
     *
     *   **SlbInstance**: an internal-facing Server Load Balancer (SLB) instance that is deployed in a virtual private cloud (VPC)
     *   **NetworkInterface**: an elastic network interface (ENI)
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $bindInstanceType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, the system automatically uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to only precheck the request. Valid values:
     *
     *   **true**: prechecks the request. After the request passes the precheck, the Anycast EIP is not associated with the instance. The system checks the required parameters, request syntax, and limits. If the request fails to pass the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the API request. If the request passes the precheck, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The information about the access points in associated access areas when you associate an Anycast EIP with a cloud resource.
     *
     * You can call the [DescribeAnycastPopLocations](~~171938~~) operation to query information about access points in supported access areas.
     * @var popLocations[]
     */
    public $popLocations;

    /**
     * @description The secondary private IP address of the ENI with which you want to associate the Anycast EIP.
     *
     * This parameter is valid only when you set **BindInstanceType** to **NetworkInterface**. If you do not set this parameter, the primary private IP address of the ENI is used.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;
    protected $_name = [
        'anycastId'            => 'AnycastId',
        'associationMode'      => 'AssociationMode',
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'popLocations'         => 'PopLocations',
        'privateIpAddress'     => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->popLocations) {
            $res['PopLocations'] = [];
            if (null !== $this->popLocations && \is_array($this->popLocations)) {
                $n = 0;
                foreach ($this->popLocations as $item) {
                    $res['PopLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateAnycastEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['PopLocations'])) {
            if (!empty($map['PopLocations'])) {
                $model->popLocations = [];
                $n                   = 0;
                foreach ($map['PopLocations'] as $item) {
                    $model->popLocations[$n++] = null !== $item ? popLocations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        return $model;
    }
}

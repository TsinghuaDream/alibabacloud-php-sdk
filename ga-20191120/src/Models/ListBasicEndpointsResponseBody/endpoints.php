<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The address of the endpoint.
     *
     * @example eni-bp1a05txelswuj8g****
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description The ID of the endpoint group to which the endpoints belong.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the endpoint that is associated with the basic GA instance.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The secondary address of the endpoint.
     *
     * This parameter is returned when the accelerated IP address is associated with the secondary private IP address of an ECS instance or ENI.
     *
     *   When the endpoint type is **ECS**, **EndpointSubAddress** returns the secondary private IP address of the primary ENI. If the parameter is left empty, the primary private IP address of the primary ENI is returned.
     *   When the endpoint type is **ENI**, **EndpointSubAddress** returns the secondary private IP address of the secondary ENI. If the parameter is left empty, the primary private IP address of the secondary ENI is returned.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @example primary
     *
     * @var string
     */
    public $endpointSubAddressType;

    /**
     * @description The type of endpoint. Valid values:
     *
     *   **ENI**: ENI
     *   **SLB**: CLB
     *   **ECS**: ECS
     *
     * @example ENI
     *
     * @var string
     */
    public $endpointType;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $endpointZoneId;

    /**
     * @example ep01
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the endpoint. Valid values:
     *
     *   **init**: The endpoint is being initialized.
     *   **active**: The endpoint is available.
     *   **updating**: The endpoint is being configured.
     *   **binding**: The endpoint is being associated.
     *   **unbinding**: The endpoint is being disassociated.
     *   **deleting**: The endpoint is being deleted.
     *   **bound**: The endpoint is associated.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'          => 'AcceleratorId',
        'endpointAddress'        => 'EndpointAddress',
        'endpointGroupId'        => 'EndpointGroupId',
        'endpointId'             => 'EndpointId',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'name'                   => 'Name',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointSubAddress) {
            $res['EndpointSubAddress'] = $this->endpointSubAddress;
        }
        if (null !== $this->endpointSubAddressType) {
            $res['EndpointSubAddressType'] = $this->endpointSubAddressType;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->endpointZoneId) {
            $res['EndpointZoneId'] = $this->endpointZoneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointSubAddress'])) {
            $model->endpointSubAddress = $map['EndpointSubAddress'];
        }
        if (isset($map['EndpointSubAddressType'])) {
            $model->endpointSubAddressType = $map['EndpointSubAddressType'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['EndpointZoneId'])) {
            $model->endpointZoneId = $map['EndpointZoneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}

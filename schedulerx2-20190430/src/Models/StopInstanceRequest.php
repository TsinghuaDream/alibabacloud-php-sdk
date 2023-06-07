<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceRequest extends Model
{
    /**
     * @description The ID of the application. You can obtain the application ID on the Application Management page in the SchedulerX console.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the job instance in the running state.
     *
     * @example 11111111
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The ID of the job. You can obtain the ID of the job on the Task Management page in the SchedulerX console.
     *
     * @example 92583
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the namespace. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupId'         => 'GroupId',
        'instanceId'      => 'InstanceId',
        'jobId'           => 'JobId',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

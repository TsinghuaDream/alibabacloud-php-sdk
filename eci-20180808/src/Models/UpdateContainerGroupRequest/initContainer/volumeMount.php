<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\UpdateContainerGroupRequest\initContainer;

use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @description The mount directory of the init container. The data in this directory is overwritten by the data on the volume. Specify this parameter with caution.
     *
     * @example /pod/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount propagation settings of the volume. Mount propagation allows volumes that are mounted on one container to be shared with other containers in the same pod, or even with other pods on the same node. Valid values:
     *
     *   None: The volume mount does not receive subsequent mounts that are performed on this volume or subdirectories of this volume.
     *   HostToContainer: The volume mount receives all subsequent mounts that are performed on this volume or subdirectories of this volume.
     *   Bidirectional: The volume mount behaves the same as the HostToContainer mount. The volume mount receives subsequent mounts that are performed on the volume or the subdirectories of the volume. In addition, all volume mounts that are mounted on the container are propagated back to the host and all containers of all pods that use the same volume.
     *
     * Default value: None.
     * @example None
     *
     * @var string
     */
    public $mountPropagation;

    /**
     * @description The name of the volume that is mounted to the init container. Valid values: the values of Volume.N.Name, which are the names of volumes that are mounted to the elastic container instance.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether the volume is read-only. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @description The subdirectory of the volume that is mounted to the init container. You can use this parameter to mount the same volume to different subdirectories of the init container.
     *
     * @example data2/
     *
     * @var string
     */
    public $subPath;
    protected $_name = [
        'mountPath'        => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name'             => 'Name',
        'readOnly'         => 'ReadOnly',
        'subPath'          => 'SubPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->mountPropagation) {
            $res['MountPropagation'] = $this->mountPropagation;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['MountPropagation'])) {
            $model->mountPropagation = $map['MountPropagation'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }

        return $model;
    }
}

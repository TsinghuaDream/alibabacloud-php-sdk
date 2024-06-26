<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class MigrateImageProtocolRequest extends Model
{
    /**
     * @description The image IDs.
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The protocol to which you want to update the image protocols. Set the value to ASP.
     *
     * @example ASP
     *
     * @var string
     */
    public $targetProtocolType;
    protected $_name = [
        'imageId'            => 'ImageId',
        'regionId'           => 'RegionId',
        'targetProtocolType' => 'TargetProtocolType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetProtocolType) {
            $res['TargetProtocolType'] = $this->targetProtocolType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateImageProtocolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetProtocolType'])) {
            $model->targetProtocolType = $map['TargetProtocolType'];
        }

        return $model;
    }
}

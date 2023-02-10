<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @example 2022-08-29T22:02:14Z
     *
     * @var string
     */
    public $buildTime;

    /**
     * @example true
     *
     * @var string
     */
    public $imageAvailable;

    /**
     * @example 4
     *
     * @var int
     */
    public $imageId;

    /**
     * @example Service is Running
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var string
     */
    public $serviceRunnable;
    protected $_name = [
        'buildTime'       => 'BuildTime',
        'imageAvailable'  => 'ImageAvailable',
        'imageId'         => 'ImageId',
        'message'         => 'Message',
        'serviceRunnable' => 'ServiceRunnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTime) {
            $res['BuildTime'] = $this->buildTime;
        }
        if (null !== $this->imageAvailable) {
            $res['ImageAvailable'] = $this->imageAvailable;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->serviceRunnable) {
            $res['ServiceRunnable'] = $this->serviceRunnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTime'])) {
            $model->buildTime = $map['BuildTime'];
        }
        if (isset($map['ImageAvailable'])) {
            $model->imageAvailable = $map['ImageAvailable'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ServiceRunnable'])) {
            $model->serviceRunnable = $map['ServiceRunnable'];
        }

        return $model;
    }
}

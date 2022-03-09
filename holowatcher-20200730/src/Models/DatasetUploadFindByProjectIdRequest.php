<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetUploadFindByProjectIdRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $typeId;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'projectId' => 'ProjectId',
        'size'      => 'Size',
        'typeId'    => 'TypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetUploadFindByProjectIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        return $model;
    }
}

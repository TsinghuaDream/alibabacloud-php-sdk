<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PageImageRegistryRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description 镜像仓名称
     *
     * @var string
     */
    public $registryNameLike;

    /**
     * @description 镜像仓类型in
     *
     * @var string[]
     */
    public $registryTypeInList;

    /**
     * @description 镜像仓类型not in
     *
     * @var string[]
     */
    public $registryTypeNotInList;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage'           => 'CurrentPage',
        'pageSize'              => 'PageSize',
        'registryNameLike'      => 'RegistryNameLike',
        'registryTypeInList'    => 'RegistryTypeInList',
        'registryTypeNotInList' => 'RegistryTypeNotInList',
        'sourceIp'              => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->registryNameLike) {
            $res['RegistryNameLike'] = $this->registryNameLike;
        }
        if (null !== $this->registryTypeInList) {
            $res['RegistryTypeInList'] = $this->registryTypeInList;
        }
        if (null !== $this->registryTypeNotInList) {
            $res['RegistryTypeNotInList'] = $this->registryTypeNotInList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageImageRegistryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegistryNameLike'])) {
            $model->registryNameLike = $map['RegistryNameLike'];
        }
        if (isset($map['RegistryTypeInList'])) {
            if (!empty($map['RegistryTypeInList'])) {
                $model->registryTypeInList = $map['RegistryTypeInList'];
            }
        }
        if (isset($map['RegistryTypeNotInList'])) {
            if (!empty($map['RegistryTypeNotInList'])) {
                $model->registryTypeNotInList = $map['RegistryTypeNotInList'];
            }
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}

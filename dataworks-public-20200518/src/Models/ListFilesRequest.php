<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListFilesRequest extends Model
{
    /**
     * @var string
     */
    public $fileFolderPath;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $useType;

    /**
     * @var string
     */
    public $fileTypes;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'fileFolderPath'    => 'FileFolderPath',
        'projectId'         => 'ProjectId',
        'keyword'           => 'Keyword',
        'projectIdentifier' => 'ProjectIdentifier',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'useType'           => 'UseType',
        'fileTypes'         => 'FileTypes',
        'owner'             => 'Owner',
        'nodeId'            => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }
        if (null !== $this->fileTypes) {
            $res['FileTypes'] = $this->fileTypes;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }
        if (isset($map['FileTypes'])) {
            $model->fileTypes = $map['FileTypes'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}

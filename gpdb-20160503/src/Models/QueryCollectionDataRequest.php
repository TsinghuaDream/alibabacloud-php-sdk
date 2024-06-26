<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class QueryCollectionDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @example hello_world
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example response > 200
     *
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $hybridSearch;

    /**
     * @var mixed[][]
     */
    public $hybridSearchArgs;

    /**
     * @var string
     */
    public $includeMetadataFields;

    /**
     * @var bool
     */
    public $includeValues;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $topK;

    /**
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'collection'            => 'Collection',
        'content'               => 'Content',
        'DBInstanceId'          => 'DBInstanceId',
        'filter'                => 'Filter',
        'hybridSearch'          => 'HybridSearch',
        'hybridSearchArgs'      => 'HybridSearchArgs',
        'includeMetadataFields' => 'IncludeMetadataFields',
        'includeValues'         => 'IncludeValues',
        'metrics'               => 'Metrics',
        'namespace'             => 'Namespace',
        'namespacePassword'     => 'NamespacePassword',
        'offset'                => 'Offset',
        'orderBy'               => 'OrderBy',
        'ownerId'               => 'OwnerId',
        'regionId'              => 'RegionId',
        'topK'                  => 'TopK',
        'vector'                => 'Vector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->hybridSearch) {
            $res['HybridSearch'] = $this->hybridSearch;
        }
        if (null !== $this->hybridSearchArgs) {
            $res['HybridSearchArgs'] = $this->hybridSearchArgs;
        }
        if (null !== $this->includeMetadataFields) {
            $res['IncludeMetadataFields'] = $this->includeMetadataFields;
        }
        if (null !== $this->includeValues) {
            $res['IncludeValues'] = $this->includeValues;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }
        if (null !== $this->vector) {
            $res['Vector'] = $this->vector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCollectionDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['HybridSearch'])) {
            $model->hybridSearch = $map['HybridSearch'];
        }
        if (isset($map['HybridSearchArgs'])) {
            $model->hybridSearchArgs = $map['HybridSearchArgs'];
        }
        if (isset($map['IncludeMetadataFields'])) {
            $model->includeMetadataFields = $map['IncludeMetadataFields'];
        }
        if (isset($map['IncludeValues'])) {
            $model->includeValues = $map['IncludeValues'];
        }
        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }
        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = $map['Vector'];
            }
        }

        return $model;
    }
}

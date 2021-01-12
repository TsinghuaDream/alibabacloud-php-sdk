<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody\items;

use AlibabaCloud\Tea\Model;

class importResultFromDB extends Model
{
    /**
     * @var int
     */
    public $importId;

    /**
     * @var string
     */
    public $importDataType;

    /**
     * @var string
     */
    public $importDataStatus;

    /**
     * @var string
     */
    public $importDataStatusDescription;

    /**
     * @var string
     */
    public $incrementalImportingTime;
    protected $_name = [
        'importId'                    => 'ImportId',
        'importDataType'              => 'ImportDataType',
        'importDataStatus'            => 'ImportDataStatus',
        'importDataStatusDescription' => 'ImportDataStatusDescription',
        'incrementalImportingTime'    => 'IncrementalImportingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importId) {
            $res['ImportId'] = $this->importId;
        }
        if (null !== $this->importDataType) {
            $res['ImportDataType'] = $this->importDataType;
        }
        if (null !== $this->importDataStatus) {
            $res['ImportDataStatus'] = $this->importDataStatus;
        }
        if (null !== $this->importDataStatusDescription) {
            $res['ImportDataStatusDescription'] = $this->importDataStatusDescription;
        }
        if (null !== $this->incrementalImportingTime) {
            $res['IncrementalImportingTime'] = $this->incrementalImportingTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return importResultFromDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportId'])) {
            $model->importId = $map['ImportId'];
        }
        if (isset($map['ImportDataType'])) {
            $model->importDataType = $map['ImportDataType'];
        }
        if (isset($map['ImportDataStatus'])) {
            $model->importDataStatus = $map['ImportDataStatus'];
        }
        if (isset($map['ImportDataStatusDescription'])) {
            $model->importDataStatusDescription = $map['ImportDataStatusDescription'];
        }
        if (isset($map['IncrementalImportingTime'])) {
            $model->incrementalImportingTime = $map['IncrementalImportingTime'];
        }

        return $model;
    }
}

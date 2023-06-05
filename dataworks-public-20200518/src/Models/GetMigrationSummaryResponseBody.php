<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationSummaryResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetMigrationSummaryResponseBody extends Model
{
    /**
     * @description The ID of the migration task.
     *
     * @var data
     */
    public $data;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request is successful.
     *   false: The request fails. You can locate the error based on the request ID.
     *
     * @example 19999A96-71BA-1845-B455-ED620EF4E37F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the migration task.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMigrationSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

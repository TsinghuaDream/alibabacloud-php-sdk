<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListDataSourcesResponseBody extends Model
{
    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @var data
     */
    public $data;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The query result.
     *
     * @example 0bc14115159376359****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The page number of the returned page.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return ListDataSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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

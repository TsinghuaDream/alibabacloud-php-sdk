<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeAccountsResponseBody\accounts;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @var accounts
     */
    public $accounts;

    /**
     * @example 9BA1F8A4-12CC-4638-A7EC-D8FA2768D223
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accounts'  => 'Accounts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

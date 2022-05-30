<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDutyRostersResponseBody\paging;
use AlibabaCloud\Tea\Model;

class ListDutyRostersResponseBody extends Model
{
    /**
     * @var paging
     */
    public $paging;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paging'    => 'Paging',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paging) {
            $res['Paging'] = null !== $this->paging ? $this->paging->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDutyRostersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Paging'])) {
            $model->paging = paging::fromMap($map['Paging']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

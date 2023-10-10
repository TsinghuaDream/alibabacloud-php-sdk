<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationBaseInfoResponseBody\applcation;
use AlibabaCloud\Tea\Model;

class UpdateApplicationBaseInfoResponseBody extends Model
{
    /**
     * @description The applications that you want to modify.
     *
     * @var applcation
     */
    public $applcation;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example D16979DC-4D42-**************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applcation' => 'Applcation',
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applcation) {
            $res['Applcation'] = null !== $this->applcation ? $this->applcation->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationBaseInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Applcation'])) {
            $model->applcation = applcation::fromMap($map['Applcation']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

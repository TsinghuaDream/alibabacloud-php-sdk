<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails;

use AlibabaCloud\Tea\Model;

class registrationErrorCodes extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorSolution;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'errorSolution' => 'ErrorSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorSolution) {
            $res['ErrorSolution'] = $this->errorSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrationErrorCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorSolution'])) {
            $model->errorSolution = $map['ErrorSolution'];
        }

        return $model;
    }
}

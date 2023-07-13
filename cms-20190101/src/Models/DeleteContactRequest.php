<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactRequest extends Model
{
    /**
     * @description test-01
     *
     * @example The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @var string
     */
    public $contactName;
    protected $_name = [
        'contactName' => 'ContactName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CreateAliasRequest extends Model
{
    /**
     * @var CreateAliasInput
     */
    public $request;
    protected $_name = [
        'request' => 'request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['request'])) {
            $model->request = CreateAliasInput::fromMap($map['request']);
        }

        return $model;
    }
}

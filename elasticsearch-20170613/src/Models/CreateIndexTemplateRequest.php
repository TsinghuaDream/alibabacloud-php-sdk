<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CreateIndexTemplateRequest extends Model
{
    /**
     * @example E1136AE9-4E49-4585-9358-6FDD2A6D****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'body'        => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIndexTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}

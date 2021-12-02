<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIPv6TranslatorEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $ipv6TranslatorEntryId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv6TranslatorEntryId' => 'Ipv6TranslatorEntryId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6TranslatorEntryId) {
            $res['Ipv6TranslatorEntryId'] = $this->ipv6TranslatorEntryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIPv6TranslatorEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6TranslatorEntryId'])) {
            $model->ipv6TranslatorEntryId = $map['Ipv6TranslatorEntryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

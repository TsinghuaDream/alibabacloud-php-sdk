<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponseBody\securityPreference;
use AlibabaCloud\Tea\Model;

class GetSecurityPreferenceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example DC1213F1-A9D5-4A01-A996-44983689126C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security preferences.
     *
     * @var securityPreference
     */
    public $securityPreference;
    protected $_name = [
        'requestId'          => 'RequestId',
        'securityPreference' => 'SecurityPreference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityPreference) {
            $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecurityPreferenceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityPreference'])) {
            $model->securityPreference = securityPreference::fromMap($map['SecurityPreference']);
        }

        return $model;
    }
}

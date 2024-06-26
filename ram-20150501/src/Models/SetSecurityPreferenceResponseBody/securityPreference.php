<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody;

use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\MFAPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponseBody\securityPreference\publicKeyPreference;
use AlibabaCloud\Tea\Model;

class securityPreference extends Model
{
    /**
     * @description The AccessKey pair preference.
     *
     * @var accessKeyPreference
     */
    public $accessKeyPreference;

    /**
     * @description The logon preference.
     *
     * @var loginProfilePreference
     */
    public $loginProfilePreference;

    /**
     * @description The MFA preference.
     *
     * @var MFAPreference
     */
    public $MFAPreference;

    /**
     * @description The public key preference.
     *
     * >  This parameter is valid only for the Japan site.
     * @var publicKeyPreference
     */
    public $publicKeyPreference;
    protected $_name = [
        'accessKeyPreference'    => 'AccessKeyPreference',
        'loginProfilePreference' => 'LoginProfilePreference',
        'MFAPreference'          => 'MFAPreference',
        'publicKeyPreference'    => 'PublicKeyPreference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyPreference) {
            $res['AccessKeyPreference'] = null !== $this->accessKeyPreference ? $this->accessKeyPreference->toMap() : null;
        }
        if (null !== $this->loginProfilePreference) {
            $res['LoginProfilePreference'] = null !== $this->loginProfilePreference ? $this->loginProfilePreference->toMap() : null;
        }
        if (null !== $this->MFAPreference) {
            $res['MFAPreference'] = null !== $this->MFAPreference ? $this->MFAPreference->toMap() : null;
        }
        if (null !== $this->publicKeyPreference) {
            $res['PublicKeyPreference'] = null !== $this->publicKeyPreference ? $this->publicKeyPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyPreference'])) {
            $model->accessKeyPreference = accessKeyPreference::fromMap($map['AccessKeyPreference']);
        }
        if (isset($map['LoginProfilePreference'])) {
            $model->loginProfilePreference = loginProfilePreference::fromMap($map['LoginProfilePreference']);
        }
        if (isset($map['MFAPreference'])) {
            $model->MFAPreference = MFAPreference::fromMap($map['MFAPreference']);
        }
        if (isset($map['PublicKeyPreference'])) {
            $model->publicKeyPreference = publicKeyPreference::fromMap($map['PublicKeyPreference']);
        }

        return $model;
    }
}

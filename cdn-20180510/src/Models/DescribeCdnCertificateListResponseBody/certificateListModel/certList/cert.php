<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnCertificateListResponseBody\certificateListModel\certList;

use AlibabaCloud\Tea\Model;

class cert extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 1
     *
     * @var int
     */
    public $certId;

    /**
     * @description The name of the certificate.
     *
     * @example Certificate1
     *
     * @var string
     */
    public $certName;

    /**
     * @description The Common Name (CN) attribute of the certificate. In most cases, the CN is a domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $common;

    /**
     * @description The fingerprint of the certificate.
     *
     * @example 2ED68FD33786C5B42950D40A6C50353575BB****
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example CO****
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The timestamp.
     *
     * @example 1512388610
     *
     * @var int
     */
    public $lastTime;
    protected $_name = [
        'certId'      => 'CertId',
        'certName'    => 'CertName',
        'common'      => 'Common',
        'fingerprint' => 'Fingerprint',
        'issuer'      => 'Issuer',
        'lastTime'    => 'LastTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->common) {
            $res['Common'] = $this->common;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Common'])) {
            $model->common = $map['Common'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        return $model;
    }
}

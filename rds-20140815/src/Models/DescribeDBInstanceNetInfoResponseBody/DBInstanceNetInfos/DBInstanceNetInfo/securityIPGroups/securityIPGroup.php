<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;

use AlibabaCloud\Tea\Model;

class securityIPGroup extends Model
{
    /**
     * @description The name of the IP address whitelist.
     *
     * @example Default
     *
     * @var string
     */
    public $securityIPGroupName;

    /**
     * @description The IP address in the whitelist.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $securityIPs;
    protected $_name = [
        'securityIPGroupName' => 'SecurityIPGroupName',
        'securityIPs'         => 'SecurityIPs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIPGroupName) {
            $res['SecurityIPGroupName'] = $this->securityIPGroupName;
        }
        if (null !== $this->securityIPs) {
            $res['SecurityIPs'] = $this->securityIPs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIPGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIPGroupName'])) {
            $model->securityIPGroupName = $map['SecurityIPGroupName'];
        }
        if (isset($map['SecurityIPs'])) {
            $model->securityIPs = $map['SecurityIPs'];
        }

        return $model;
    }
}

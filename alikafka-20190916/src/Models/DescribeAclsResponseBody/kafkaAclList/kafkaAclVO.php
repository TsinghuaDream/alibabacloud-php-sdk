<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody\kafkaAclList;

use AlibabaCloud\Tea\Model;

class kafkaAclVO extends Model
{
    /**
     * @description The type of the operation. Valid values:
     *
     *   **Write**
     *   **Read**
     *
     * @example Write
     *
     * @var string
     */
    public $aclOperationType;

    /**
     * @description The name of the resource.
     *
     *   The value can be the name of a topic or a consumer group.
     *   An asterisk (\*) represents the names of all topics or consumer groups.
     *
     * @example demo
     *
     * @var string
     */
    public $aclResourceName;

    /**
     * @description The match mode. Valid values:
     *
     *   **LITERAL**: full-name match
     *   **PREFIXED**: prefix match
     *
     * @example LITERAL
     *
     * @var string
     */
    public $aclResourcePatternType;

    /**
     * @description The type of the resources to which you want to attach tags. Valid values:
     *
     *   **Topic**
     *   **Group**
     *
     * @example Topic
     *
     * @var string
     */
    public $aclResourceType;

    /**
     * @description The host.
     *
     * @example ****
     *
     * @var string
     */
    public $host;

    /**
     * @description The name of the user.
     *
     * @example test12***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'aclOperationType'       => 'AclOperationType',
        'aclResourceName'        => 'AclResourceName',
        'aclResourcePatternType' => 'AclResourcePatternType',
        'aclResourceType'        => 'AclResourceType',
        'host'                   => 'Host',
        'username'               => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclOperationType) {
            $res['AclOperationType'] = $this->aclOperationType;
        }
        if (null !== $this->aclResourceName) {
            $res['AclResourceName'] = $this->aclResourceName;
        }
        if (null !== $this->aclResourcePatternType) {
            $res['AclResourcePatternType'] = $this->aclResourcePatternType;
        }
        if (null !== $this->aclResourceType) {
            $res['AclResourceType'] = $this->aclResourceType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kafkaAclVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclOperationType'])) {
            $model->aclOperationType = $map['AclOperationType'];
        }
        if (isset($map['AclResourceName'])) {
            $model->aclResourceName = $map['AclResourceName'];
        }
        if (isset($map['AclResourcePatternType'])) {
            $model->aclResourcePatternType = $map['AclResourcePatternType'];
        }
        if (isset($map['AclResourceType'])) {
            $model->aclResourceType = $map['AclResourceType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

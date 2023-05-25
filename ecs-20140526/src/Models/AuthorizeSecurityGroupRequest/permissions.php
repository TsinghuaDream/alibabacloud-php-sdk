<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The description of the security group rule. The description must be 1 to 512 characters in length.
     *
     * Valid values of N: 1 to 100.
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block. CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The transport layer protocol of the security group rule. The value of this parameter is not case-sensitive. Valid values:
     *
     *   TCP
     *   UDP
     *   ICMP
     *   ICMPv6
     *   GRE
     *   ALL: All protocols are supported.
     *
     * Valid values of N: 1 to 100.
     * @example ALL
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block. CIDR blocks and IPv6 addresses are supported.
     *
     * > This parameter takes effect only when the destinations are ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify this parameter and `DestCidrIp` at the same time.
     * @example 2001:250:6000::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block of the security group rule. CIDR blocks and IPv6 addresses are supported.
     *
     * > This parameter takes effect only when the sources are ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify this parameter and `SourceCidrIp` at the same time.
     * @example 2001:250:6000::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The network interface card (NIC) type of the security group rule when the security group is in the classic network. Valid values:
     *
     *   internet
     *   intranet
     *
     * Valid values of N: 1 to 100.
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @description The authorization policy. Valid values:
     *
     *   accept: allows access.
     *   drop: denies access and does not return responses. In this case, the request times out or the connection cannot be established.
     *
     * Valid values of N: 1 to 100.
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination ports that correspond to the transport layer protocol of the security group rule. Valid values:
     *
     *   If you set Permissions.N.IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set Permissions.N.IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to GRE, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to ALL, the port number range is -1/-1.
     *
     * Valid values of N: 1 to 100.
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value specifies a higher priority. Valid values: 1 to 100.
     *
     * Valid values of N: 1 to 100.
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The source IPv4 CIDR block of the security group rule. CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The ID of the source security group that you want to reference in the security group rule.
     *
     *   Specify at least one of the following parameters: `SourceGroupId`, `SourceCidrIp`, `Ipv6SourceCidrIp`, and `SourcePrefixListId`.
     *   If you specify `SourceGroupId` but do not specify `SourceCidrIp` or `Ipv6SourceCidrIp`, you must set `NicType` to `intranet`.
     *   If you specify `SourceGroupId` and `SourceCidrIp`, `SourceCidrIp` takes precedence.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   You cannot reference security groups as sources or destinations in the rules of advanced security groups.
     *   You can reference up to 20 security groups as sources or destinations in the rules of each basic security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description The Alibaba Cloud account that manages the source security group when you set a security group rule across accounts.
     *
     *   If `SourceGroupOwnerAccount` and `SourceGroupOwnerId` are empty, access permissions are configured for another security group that is managed by your account.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerAccount` becomes invalid.
     *
     * Valid values of N: 1 to 100.
     * @example test@aliyun.com
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the source security group when you set a security group rule across accounts.
     *
     *   If both `SourceGroupOwnerAccount` and `SourceGroupOwnerId` are empty, access permissions are configured for another security group managed by your account.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerAccount` becomes invalid.
     *
     * Valid values of N: 1 to 100.
     * @example 1234567890
     *
     * @var int
     */
    public $sourceGroupOwnerId;

    /**
     * @description The range of source ports that correspond to the transport layer protocol of the security group rule. Valid values:
     *
     *   If you set Permissions.N.IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set Permissions.N.IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to GRE, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to ALL, the port number range is -1/-1.
     *
     * Valid values of N: 1 to 100.
     * @example 7000/8000
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The ID of the source prefix list that you want to reference in the security group rule. You can call the [DescribePrefixLists](~~205046~~) operation to query the IDs of available prefix lists.
     *
     * When you specify this parameter, take note of the following items:
     *   If the security group is of the classic network type, you cannot reference prefix lists in the security group rules. For information about the limits on security groups and prefix lists, see the "Security group limits" section in [Limits](~~25412#SecurityGroupQuota1~~).
     *   If you specify `SourceCidrIp`, `Ipv6SourceCidrIp`, or `SourceGroupId`, this parameter is ignored.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $sourcePrefixListId;
    protected $_name = [
        'description'             => 'Description',
        'destCidrIp'              => 'DestCidrIp',
        'ipProtocol'              => 'IpProtocol',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'nicType'                 => 'NicType',
        'policy'                  => 'Policy',
        'portRange'               => 'PortRange',
        'priority'                => 'Priority',
        'sourceCidrIp'            => 'SourceCidrIp',
        'sourceGroupId'           => 'SourceGroupId',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'sourceGroupOwnerId'      => 'SourceGroupOwnerId',
        'sourcePortRange'         => 'SourcePortRange',
        'sourcePrefixListId'      => 'SourcePrefixListId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourceGroupOwnerAccount) {
            $res['SourceGroupOwnerAccount'] = $this->sourceGroupOwnerAccount;
        }
        if (null !== $this->sourceGroupOwnerId) {
            $res['SourceGroupOwnerId'] = $this->sourceGroupOwnerId;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourcePrefixListId) {
            $res['SourcePrefixListId'] = $this->sourcePrefixListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourceGroupOwnerAccount'])) {
            $model->sourceGroupOwnerAccount = $map['SourceGroupOwnerAccount'];
        }
        if (isset($map['SourceGroupOwnerId'])) {
            $model->sourceGroupOwnerId = $map['SourceGroupOwnerId'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourcePrefixListId'])) {
            $model->sourcePrefixListId = $map['SourcePrefixListId'];
        }

        return $model;
    }
}

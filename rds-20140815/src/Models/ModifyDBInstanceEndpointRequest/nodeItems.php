<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBInstanceEndpointRequest;

use AlibabaCloud\Tea\Model;

class nodeItems extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The node ID.
     *
     * You can query the node ID by using the following methods:
     *
     *   Log on the ApsaraDB RDS console, go to the instance details page, and then view the ID of the node in the instance topology in the lower part of the instance details page.
     *   Call the DescribeDBInstanceAttribute operation to query the node ID.
     *
     * @example rn-xxxx-****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The weight of the node. Read requests are distributed based on the weight.
     *
     * Valid values: 0 to 100.
     * @example 50
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'nodeId'       => 'NodeId',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}

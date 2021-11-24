<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGovernanceKubernetesClusterListResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $k8sVersion;

    /**
     * @var string
     */
    public $namespaceInfos;

    /**
     * @var string
     */
    public $pilotStartTime;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterName'    => 'ClusterName',
        'k8sVersion'     => 'K8sVersion',
        'namespaceInfos' => 'NamespaceInfos',
        'pilotStartTime' => 'PilotStartTime',
        'region'         => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->k8sVersion) {
            $res['K8sVersion'] = $this->k8sVersion;
        }
        if (null !== $this->namespaceInfos) {
            $res['NamespaceInfos'] = $this->namespaceInfos;
        }
        if (null !== $this->pilotStartTime) {
            $res['PilotStartTime'] = $this->pilotStartTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['K8sVersion'])) {
            $model->k8sVersion = $map['K8sVersion'];
        }
        if (isset($map['NamespaceInfos'])) {
            $model->namespaceInfos = $map['NamespaceInfos'];
        }
        if (isset($map['PilotStartTime'])) {
            $model->pilotStartTime = $map['PilotStartTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}

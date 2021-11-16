<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data\projectMemberList\projectRoleList;
use AlibabaCloud\Tea\Model;

class projectMemberList extends Model
{
    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $projectMemberId;

    /**
     * @var string
     */
    public $projectMemberName;

    /**
     * @var string
     */
    public $projectMemberType;

    /**
     * @var projectRoleList[]
     */
    public $projectRoleList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'nick'              => 'Nick',
        'projectMemberId'   => 'ProjectMemberId',
        'projectMemberName' => 'ProjectMemberName',
        'projectMemberType' => 'ProjectMemberType',
        'projectRoleList'   => 'ProjectRoleList',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->projectMemberId) {
            $res['ProjectMemberId'] = $this->projectMemberId;
        }
        if (null !== $this->projectMemberName) {
            $res['ProjectMemberName'] = $this->projectMemberName;
        }
        if (null !== $this->projectMemberType) {
            $res['ProjectMemberType'] = $this->projectMemberType;
        }
        if (null !== $this->projectRoleList) {
            $res['ProjectRoleList'] = [];
            if (null !== $this->projectRoleList && \is_array($this->projectRoleList)) {
                $n = 0;
                foreach ($this->projectRoleList as $item) {
                    $res['ProjectRoleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMemberList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['ProjectMemberId'])) {
            $model->projectMemberId = $map['ProjectMemberId'];
        }
        if (isset($map['ProjectMemberName'])) {
            $model->projectMemberName = $map['ProjectMemberName'];
        }
        if (isset($map['ProjectMemberType'])) {
            $model->projectMemberType = $map['ProjectMemberType'];
        }
        if (isset($map['ProjectRoleList'])) {
            if (!empty($map['ProjectRoleList'])) {
                $model->projectRoleList = [];
                $n                      = 0;
                foreach ($map['ProjectRoleList'] as $item) {
                    $model->projectRoleList[$n++] = null !== $item ? projectRoleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

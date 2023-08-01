<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody\result;

use AlibabaCloud\Tea\Model;

class author extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 7914
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example nickname
     *
     * @var string
     */
    public $username;

    /**
     * @example ""
     *
     * @var string
     */
    public $websiteUrl;
    protected $_name = [
        'avatarUrl'  => 'avatarUrl',
        'email'      => 'email',
        'id'         => 'id',
        'name'       => 'name',
        'state'      => 'state',
        'username'   => 'username',
        'websiteUrl' => 'websiteUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->websiteUrl) {
            $res['websiteUrl'] = $this->websiteUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return author
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['websiteUrl'])) {
            $model->websiteUrl = $map['websiteUrl'];
        }

        return $model;
    }
}

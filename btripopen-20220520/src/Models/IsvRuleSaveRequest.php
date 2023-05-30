<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IsvRuleSaveRequest\bookuserList;
use AlibabaCloud\Tea\Model;

class IsvRuleSaveRequest extends Model
{
    /**
     * @var string
     */
    public $bookType;

    /**
     * @var bookuserList[]
     */
    public $bookuserList;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bookType'     => 'book_type',
        'bookuserList' => 'bookuser_list',
        'status'       => 'status',
        'userId'       => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookType) {
            $res['book_type'] = $this->bookType;
        }
        if (null !== $this->bookuserList) {
            $res['bookuser_list'] = [];
            if (null !== $this->bookuserList && \is_array($this->bookuserList)) {
                $n = 0;
                foreach ($this->bookuserList as $item) {
                    $res['bookuser_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvRuleSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_type'])) {
            $model->bookType = $map['book_type'];
        }
        if (isset($map['bookuser_list'])) {
            if (!empty($map['bookuser_list'])) {
                $model->bookuserList = [];
                $n                   = 0;
                foreach ($map['bookuser_list'] as $item) {
                    $model->bookuserList[$n++] = null !== $item ? bookuserList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}

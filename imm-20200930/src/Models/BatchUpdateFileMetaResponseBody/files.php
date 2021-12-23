<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\BatchUpdateFileMetaResponseBody;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'message' => 'Message',
        'success' => 'Success',
        'URI'     => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}

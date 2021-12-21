<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponseBody\jobList\job;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobsResponseBody\jobList\job\resourceList\resource;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @var resource[]
     */
    public $resource;
    protected $_name = [
        'resource' => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = [];
            if (null !== $this->resource && \is_array($this->resource)) {
                $n = 0;
                foreach ($this->resource as $item) {
                    $res['Resource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            if (!empty($map['Resource'])) {
                $model->resource = [];
                $n               = 0;
                foreach ($map['Resource'] as $item) {
                    $model->resource[$n++] = null !== $item ? resource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\eciSecurityContext\sysctls;
use AlibabaCloud\Tea\Model;

class eciSecurityContext extends Model
{
    /**
     * @description sysctl parameters.
     *
     * @var sysctls[]
     */
    public $sysctls;
    protected $_name = [
        'sysctls' => 'Sysctls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysctls) {
            $res['Sysctls'] = [];
            if (null !== $this->sysctls && \is_array($this->sysctls)) {
                $n = 0;
                foreach ($this->sysctls as $item) {
                    $res['Sysctls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eciSecurityContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sysctls'])) {
            if (!empty($map['Sysctls'])) {
                $model->sysctls = [];
                $n              = 0;
                foreach ($map['Sysctls'] as $item) {
                    $model->sysctls[$n++] = null !== $item ? sysctls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

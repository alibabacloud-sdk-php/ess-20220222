<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Tea\Model;

class loadBalancerConfigs extends Model
{
    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}

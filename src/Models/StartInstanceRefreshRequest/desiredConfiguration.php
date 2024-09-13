<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest;

use AlibabaCloud\Tea\Model;

class desiredConfiguration extends Model
{
    /**
     * @example m-2ze8cqacj7opnf***
     *
     * @var string
     */
    public $imageId;

    /**
     * @example asc-2zed7lqn4ts4****
     *
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'imageId'                => 'ImageId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desiredConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        return $model;
    }
}
<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\volumes;

use AlibabaCloud\Tea\Model;

class flexVolume extends Model
{
    /**
     * @var string
     */
    public $driver;

    /**
     * @var string
     */
    public $fsType;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'driver' => 'Driver',
        'fsType' => 'FsType',
        'options' => 'Options',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->fsType) {
            $res['FsType'] = $this->fsType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}

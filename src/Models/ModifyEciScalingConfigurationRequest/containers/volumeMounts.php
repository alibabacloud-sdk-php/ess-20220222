<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\containers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
    /**
     * @description The directory within the container onto which you want to mount the volume.
     *
     * >  The information stored within this directory is overwritten by the data on the mounted volume. Exercise caution when you specify this parameter.
     *
     * @example /pod/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount propagation settings of the volume. Mount propagation enables volumes mounted on one container to be shared among other containers within the same pod or across distinct pods residing on the same node. Valid values:
     *
     *   None: Subsequent mounts executed on the volume or its subdirectories do not propagate to the volume.
     *   HostToCotainer: Subsequent mounts executed on the volume or its subdirectories propagate to the volume.
     *   Bidirectional: This value is similar to HostToCotainer. Subsequent mounts executed on the volume or its subdirectories propagate to the volume. In addition, volume mounts executed on the container propagate back to the underlying instance and to all containers across every pod that uses the same volume.
     *
     * @example None
     *
     * @var string
     */
    public $mountPropagation;

    /**
     * @description The volume name. The value of this parameter is the same as the name of the volume that is mounted to containers.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether the volume is read-only.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @description The volume subdirectory.
     *
     * @example data2/
     *
     * @var string
     */
    public $subPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name' => 'Name',
        'readOnly' => 'ReadOnly',
        'subPath' => 'SubPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->mountPropagation) {
            $res['MountPropagation'] = $this->mountPropagation;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['MountPropagation'])) {
            $model->mountPropagation = $map['MountPropagation'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }

        return $model;
    }
}

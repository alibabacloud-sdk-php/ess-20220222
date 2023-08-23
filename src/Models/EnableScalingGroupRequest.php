<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\EnableScalingGroupRequest\launchTemplateOverrides;
use AlibabaCloud\Tea\Model;

class EnableScalingGroupRequest extends Model
{
    /**
     * @description The ID of the scaling configuration that you want to put into the Active state.
     *
     * @example asc-bp1ffogfdauy0nu5****
     *
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @description The IDs of ECS instances that you want to add to the scaling group after you enable the scaling group.
     *
     * The ECS instances must meet the following requirements:
     *
     *   The ECS instances and the scaling group must reside in the same region.
     *   The ECS instances must be in the Running state.
     *   The ECS instances are not added to other scaling groups.
     *   The billing method of the ECS instances must be subscription or pay-as-you-go, or the ECS instances must be preemptible instances.
     *   If you specify the VswitchID parameter for the scaling group, the ECS instances must reside in the same virtual private cloud (VPC) as the specified vSwitch. You cannot add the ECS instances that reside in the classic network or other VPCs to the scaling group.
     *   If you do not specify the VswitchID parameter for the scaling group, you cannot add ECS instances that reside in VPCs to the scaling group.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the launch template that is used by Auto Scaling to create ECS instances.
     *
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description Details of the instance types that you specify by using the Extended Configurations feature of the launch template.
     *
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @description The version number of the launch template. Valid values:
     *
     *   A fixed template version number.
     *   Default: the default template version.
     *   Latest: the latest template version.
     *
     * @example Default
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The weight of an ECS instance as a backend server in the backend vServer group.
     *
     * Default value: 50.
     * @var int[]
     */
    public $loadBalancerWeights;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the scaling group.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp14wlu85wrpchm0****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'activeScalingConfigurationId' => 'ActiveScalingConfigurationId',
        'instanceIds'                  => 'InstanceIds',
        'launchTemplateId'             => 'LaunchTemplateId',
        'launchTemplateOverrides'      => 'LaunchTemplateOverrides',
        'launchTemplateVersion'        => 'LaunchTemplateVersion',
        'loadBalancerWeights'          => 'LoadBalancerWeights',
        'ownerAccount'                 => 'OwnerAccount',
        'ownerId'                      => 'OwnerId',
        'regionId'                     => 'RegionId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'scalingGroupId'               => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateOverrides) {
            $res['LaunchTemplateOverrides'] = [];
            if (null !== $this->launchTemplateOverrides && \is_array($this->launchTemplateOverrides)) {
                $n = 0;
                foreach ($this->launchTemplateOverrides as $item) {
                    $res['LaunchTemplateOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->loadBalancerWeights) {
            $res['LoadBalancerWeights'] = $this->loadBalancerWeights;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateOverrides'])) {
            if (!empty($map['LaunchTemplateOverrides'])) {
                $model->launchTemplateOverrides = [];
                $n                              = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item) {
                    $model->launchTemplateOverrides[$n++] = null !== $item ? launchTemplateOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['LoadBalancerWeights'])) {
            if (!empty($map['LoadBalancerWeights'])) {
                $model->loadBalancerWeights = $map['LoadBalancerWeights'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}

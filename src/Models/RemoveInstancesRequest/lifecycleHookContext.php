<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\RemoveInstancesRequest;

use AlibabaCloud\Tea\Model;

class lifecycleHookContext extends Model
{
    /**
     * @description Specifies whether to disable the lifecycle hook. Valid Values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $disableLifecycleHook;

    /**
     * @description The IDs of the lifecycle hooks that you want to disable.
     *
     * @var string[]
     */
    public $ignoredLifecycleHookIds;
    protected $_name = [
        'disableLifecycleHook' => 'DisableLifecycleHook',
        'ignoredLifecycleHookIds' => 'IgnoredLifecycleHookIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableLifecycleHook) {
            $res['DisableLifecycleHook'] = $this->disableLifecycleHook;
        }
        if (null !== $this->ignoredLifecycleHookIds) {
            $res['IgnoredLifecycleHookIds'] = $this->ignoredLifecycleHookIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycleHookContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableLifecycleHook'])) {
            $model->disableLifecycleHook = $map['DisableLifecycleHook'];
        }
        if (isset($map['IgnoredLifecycleHookIds'])) {
            if (!empty($map['IgnoredLifecycleHookIds'])) {
                $model->ignoredLifecycleHookIds = $map['IgnoredLifecycleHookIds'];
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRefreshResponseBody extends Model
{
    /**
     * @example ir-a12ds234fasd*****
     *
     * @var string
     */
    public $instanceRefreshTaskId;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRefreshTaskId' => 'InstanceRefreshTaskId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRefreshTaskId) {
            $res['InstanceRefreshTaskId'] = $this->instanceRefreshTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceRefreshResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRefreshTaskId'])) {
            $model->instanceRefreshTaskId = $map['InstanceRefreshTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
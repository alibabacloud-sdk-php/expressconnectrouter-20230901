<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class CheckAddRegionToExpressConnectRouterRequest extends Model
{
    /**
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ecr-fu8rszhgv7623c****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $freshRegionId;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'dryRun'        => 'DryRun',
        'ecrId'         => 'EcrId',
        'freshRegionId' => 'FreshRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->freshRegionId) {
            $res['FreshRegionId'] = $this->freshRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAddRegionToExpressConnectRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['FreshRegionId'])) {
            $model->freshRegionId = $map['FreshRegionId'];
        }

        return $model;
    }
}

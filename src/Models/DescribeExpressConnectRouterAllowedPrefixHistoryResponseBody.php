<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterAllowedPrefixHistoryResponseBody\allowedPrefixHistoryList;

class DescribeExpressConnectRouterAllowedPrefixHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var allowedPrefixHistoryList[]
     */
    public $allowedPrefixHistoryList;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $dynamicCode;
    /**
     * @var string
     */
    public $dynamicMessage;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail'       => 'AccessDeniedDetail',
        'allowedPrefixHistoryList' => 'AllowedPrefixHistoryList',
        'code'                     => 'Code',
        'dynamicCode'              => 'DynamicCode',
        'dynamicMessage'           => 'DynamicMessage',
        'httpStatusCode'           => 'HttpStatusCode',
        'message'                  => 'Message',
        'requestId'                => 'RequestId',
        'success'                  => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->allowedPrefixHistoryList)) {
            Model::validateArray($this->allowedPrefixHistoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->allowedPrefixHistoryList) {
            if (\is_array($this->allowedPrefixHistoryList)) {
                $res['AllowedPrefixHistoryList'] = [];
                $n1                              = 0;
                foreach ($this->allowedPrefixHistoryList as $item1) {
                    $res['AllowedPrefixHistoryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AllowedPrefixHistoryList'])) {
            if (!empty($map['AllowedPrefixHistoryList'])) {
                $model->allowedPrefixHistoryList = [];
                $n1                              = 0;
                foreach ($map['AllowedPrefixHistoryList'] as $item1) {
                    $model->allowedPrefixHistoryList[$n1++] = allowedPrefixHistoryList::fromMap($item1);
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

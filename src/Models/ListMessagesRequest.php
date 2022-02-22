<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListMessagesRequest extends Model
{
    /**
     * @description 发送日期，格式为20220101
     *
     * @var string
     */
    public $datetime;

    /**
     * @description 关联人群Id。
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 短信序列号。
     *
     * @var string
     */
    public $messageId;

    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 手机号码。
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description 请求序列号。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 关联发送计划Id。
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @var string
     */
    public $signature;

    /**
     * @description 模板号。
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'datetime'     => 'Datetime',
        'groupId'      => 'GroupId',
        'messageId'    => 'MessageId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'phoneNumber'  => 'PhoneNumber',
        'requestId'    => 'RequestId',
        'scheduleId'   => 'ScheduleId',
        'signature'    => 'Signature',
        'templateCode' => 'TemplateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datetime) {
            $res['Datetime'] = $this->datetime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datetime'])) {
            $model->datetime = $map['Datetime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
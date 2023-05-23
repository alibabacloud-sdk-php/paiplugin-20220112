<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models;

use AlibabaCloud\Tea\Model;

class SendMessageRequest extends Model
{
    /**
     * @description 人群Id，用于关联人群。
     *
     * @example 10ed87f5-3ca8-4a43-9d83-b30519be7241
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 外部拓展字段，示例：["1234567890"]。
     *
     * @var string[]
     */
    public $outIds;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段，示例：["1234567890"]。
     *
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @description 触达计划Id，用于关联触达计划。
     *
     * @example 08d19262-bd76-48fd-80e8-6a225ac388c1
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description 签名名称。
     *
     * @example PAI通知
     *
     * @var string
     */
    public $signName;

    /**
     * @description 签名Id，同时只能指定签名名称或签名Id其中之一。
     *
     * @example 5480e3e7-f578-42d2-8ce8-217dec75f2e6
     *
     * @var string
     */
    public $signatureId;

    /**
     * @description 短信上行拓展码，示例：["1234567890"]。
     *
     * @var string[]
     */
    public $smsUpExtendCodes;

    /**
     * @description 模板Code。
     *
     * @example SMS_123456
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板Id，同时只能指定模板Code或模板Id其中之一。
     *
     * @example b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：[{"name":"张三","number":"15038****76"}]。
     *
     * @var string[]
     */
    public $templateParams;
    protected $_name = [
        'groupId'          => 'GroupId',
        'outIds'           => 'OutIds',
        'paymentType'      => 'PaymentType',
        'phoneNumbers'     => 'PhoneNumbers',
        'scheduleId'       => 'ScheduleId',
        'signName'         => 'SignName',
        'signatureId'      => 'SignatureId',
        'smsUpExtendCodes' => 'SmsUpExtendCodes',
        'templateCode'     => 'TemplateCode',
        'templateId'       => 'TemplateId',
        'templateParams'   => 'TemplateParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->outIds) {
            $res['OutIds'] = $this->outIds;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }
        if (null !== $this->smsUpExtendCodes) {
            $res['SmsUpExtendCodes'] = $this->smsUpExtendCodes;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateParams) {
            $res['TemplateParams'] = $this->templateParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OutIds'])) {
            if (!empty($map['OutIds'])) {
                $model->outIds = $map['OutIds'];
            }
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = $map['PhoneNumbers'];
            }
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }
        if (isset($map['SmsUpExtendCodes'])) {
            if (!empty($map['SmsUpExtendCodes'])) {
                $model->smsUpExtendCodes = $map['SmsUpExtendCodes'];
            }
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateParams'])) {
            if (!empty($map['TemplateParams'])) {
                $model->templateParams = $map['TemplateParams'];
            }
        }

        return $model;
    }
}

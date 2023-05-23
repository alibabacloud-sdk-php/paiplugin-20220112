<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesResponseBody;

use AlibabaCloud\SDK\PaiPlugin\V20220112\Models\ListSignaturesResponseBody\data\signatures;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 分页数，从1开始，默认为1。
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页大小，默认为10。
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 分页返回的签名列表。
     *
     * @var signatures[]
     */
    public $signatures;

    /**
     * @description 账号下全部签名注册记录数量。
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'signatures' => 'Signatures',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->signatures) {
            $res['Signatures'] = [];
            if (null !== $this->signatures && \is_array($this->signatures)) {
                $n = 0;
                foreach ($this->signatures as $item) {
                    $res['Signatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Signatures'])) {
            if (!empty($map['Signatures'])) {
                $model->signatures = [];
                $n                 = 0;
                foreach ($map['Signatures'] as $item) {
                    $model->signatures[$n++] = null !== $item ? signatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

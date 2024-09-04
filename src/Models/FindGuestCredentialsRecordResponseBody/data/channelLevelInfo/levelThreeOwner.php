<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\FindGuestCredentialsRecordResponseBody\data\channelLevelInfo;

use AlibabaCloud\Tea\Model;

class levelThreeOwner extends Model
{
    /**
     * @example hBCycGELqJd6LEqSWKiLCQ==
     *
     * @var string
     */
    public $ownerEmpIdOrTelephone;

    /**
     * @example buc_160953
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example hBCycGELqJd6LEqSWKiLCQ==
     *
     * @var string
     */
    public $ownerNickName;
    protected $_name = [
        'ownerEmpIdOrTelephone' => 'OwnerEmpIdOrTelephone',
        'ownerName'             => 'OwnerName',
        'ownerNickName'         => 'OwnerNickName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerEmpIdOrTelephone) {
            $res['OwnerEmpIdOrTelephone'] = $this->ownerEmpIdOrTelephone;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerNickName) {
            $res['OwnerNickName'] = $this->ownerNickName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return levelThreeOwner
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerEmpIdOrTelephone'])) {
            $model->ownerEmpIdOrTelephone = $map['OwnerEmpIdOrTelephone'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerNickName'])) {
            $model->ownerNickName = $map['OwnerNickName'];
        }

        return $model;
    }
}

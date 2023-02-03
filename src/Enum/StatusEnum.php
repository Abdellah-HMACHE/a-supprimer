<?php

namespace Accessap\YousignComponent\Enum;

class StatusEnum
{
    public const STATUS_PENDING = 1;
    public const STATUS_PRECESSING = 2;
    public const STATUS_DONE = 3;
    public const STATUS_REFUSED = 4;

    //member status
    public const EVENT_PENDING = 'PENDING';
    public const EVENT_PRECESSING = 'PRECESSING';
    public const EVENT_DONE = 'DONE';
    public const EVENT_REFUSED = 'REFUSED';

    //procedure status
    public const PROCEDURE_DRAFT = 'draft';
    public const PROCEDURE_ACTIVE = 'active';
    public const PROCEDURE_FINISHED = 'finished';
    public const PROCEDURE_EXPIRED = 'expired';
    public const PROCEDURE_REFUSED = 'refused';

    public const STATUS = [
        self::EVENT_PENDING => self::STATUS_PENDING,
        self::EVENT_PRECESSING => self::STATUS_PRECESSING,
        self::EVENT_DONE => self::STATUS_DONE,
        self::EVENT_REFUSED => self::STATUS_REFUSED,
    ];

    public const EVENTS = [
        self::STATUS_PENDING => self::EVENT_PENDING,
        self::STATUS_PRECESSING => self::EVENT_PRECESSING,
        self::STATUS_DONE => self::EVENT_DONE,
        self::STATUS_REFUSED => self::EVENT_REFUSED,
    ];

    public static function get(?string $status): string
    {
        return self::STATUS[strtoupper(($status))] ?? self::STATUS_PENDING;
    }
}

<?php

namespace Armcanada\TaskLogger\Enums;

enum Application: int
{
    CASE CUSTOMER_CENTRE = 0;
    CASE DEBTOR_CENTRE = 1;
    CASE DASHBOARD = 2;
    CASE DASHBOARD_A25 = 3;
    CASE WALKIN = 4;
    CASE ARMDESK = 5;
    CASE MDCV = 6;
    case ARMP = 7;
    case ARMSMS = 8;
    case VIRTUAL_AGENT_MANAGER = 9;
    case SHERLOCK = 10;
    case ARMALYTICS = 11;

    public function slug(): string
    {
        return match($this) {
            self::CUSTOMER_CENTRE       => 'customer_centre',
            self::DEBTOR_CENTRE         => 'debtor_centre',
            self::DASHBOARD             => 'dashboard',
            self::DASHBOARD_A25         => 'dashboard_a25',
            self::WALKIN                => 'walkin',
            self::ARMDESK               => 'armdesk',
            self::MDCV                  => 'mdcv',
            self::ARMP                  => 'armp',
            self::ARMSMS                => 'armsms',
            self::VIRTUAL_AGENT_MANAGER => 'virtual_agent_manager',
            self::SHERLOCK              => 'sherlock',
            self::ARMALYTICS            => 'armalytics',
        };
    }

    public static function slugs(): array
    {
        return array_map(
            fn (self $case) => $case->slug(),
            self::cases()
        );
    }
}

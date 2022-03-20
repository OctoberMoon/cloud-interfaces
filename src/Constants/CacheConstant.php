<?php
declare(strict_types=1);
namespace OctoberMoon\CloudInterfaces\Constants;

class CacheConstant
{
    // 该值只可增加 不可更改 多个服务使用
    public const CONVERT_PARSE_CONTENT_TYPE_DEF  = 0;
    public const CONVERT_PARSE_CONTENT_TYPE_TB  = 1;
    public const CONVERT_PARSE_CONTENT_TYPE_JD  = 2;
    public const CONVERT_PARSE_CONTENT_TYPE_PDD = 3;
    public const CONVERT_PARSE_CONTENT_TYPE_SN  = 4;
    public const CONVERT_PARSE_CONTENT_TYPE_VIP = 5;
    public const CONVERT_PARSE_CONTENT_TYPE_KL  = 6;
    public const CONVERT_PARSE_CONTENT_TYPE_KS  = 7;
    public const CONVERT_PARSE_CONTENT_TYPE_DY  = 8;

    public const CONVERT_PARSE_CONTENT_CACHE_ARR = [
        0 => 'convert:other:parse_content:',
        1 => 'convert:tb:parse_content:',
        2 => 'convert:jd:parse_content:',
        3 => 'convert:pdd:parse_content:',
        4 => 'convert:sn:parse_content:',
        5 => 'convert:vip:parse_content:',
        6 => 'convert:kl:parse_content:',
        7 => 'convert:ks:parse_content:',
        8 => 'convert:dy:parse_content:',
    ];

}
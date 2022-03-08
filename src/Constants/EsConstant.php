<?php
declare(strict_types=1);

namespace OctoberMoon\CloudInterfaces\Constants;

class EsConstant
{
    public const TURN_CHAIN_TYPE_ECO                     = 1;
    public const TURN_CHAIN_TYPE_ATK                     = 2;
    public const TURN_CHAIN_TYPE_CQ                      = 3;
    public const TURN_CHAIN_TYPE_ECO_STATISTICS_NUM_ARR  = [
        0 => 'turn_chain:eco:statistics_num_other',
        1 => 'turn_chain:eco:statistics_num_tb',
        2 => 'turn_chain:eco:statistics_num_jd',
        3 => 'turn_chain:eco:statistics_num_pdd',
        4 => 'turn_chain:eco:statistics_num_sn',
        5 => 'turn_chain:eco:statistics_num_vip',
        6 => 'turn_chain:eco:statistics_num_kl',
        7 => 'turn_chain:eco:statistics_num_ks',
        8 => 'turn_chain:eco:statistics_num_dy',
    ];

    public const TURN_CHAIN_TYPE_ECO_STATISTICS_NUM_FAIL_ARR = [
        0 => 'turn_chain:eco:statistics_num_other_fail',
        1 => 'turn_chain:eco:statistics_num_tb_fail',
        2 => 'turn_chain:eco:statistics_num_jd_fail',
        3 => 'turn_chain:eco:statistics_num_pdd_fail',
        4 => 'turn_chain:eco:statistics_num_sn_fail',
        5 => 'turn_chain:eco:statistics_num_vip_fail',
        6 => 'turn_chain:eco:statistics_num_kl_fail',
        7 => 'turn_chain:eco:statistics_num_ks_fail',
        8 => 'turn_chain:eco:statistics_num_dy_fail',
    ];

    public const TURN_CHAIN_TYPE_ATK_STATISTICS_NUM_ARR = [
        0 => 'turn_chain:atk:statistics_num_other',
        1 => 'turn_chain:atk:statistics_num_tb',
        2 => 'turn_chain:atk:statistics_num_jd',
        3 => 'turn_chain:atk:statistics_num_pdd',
        4 => 'turn_chain:atk:statistics_num_sn',
        5 => 'turn_chain:atk:statistics_num_vip',
        6 => 'turn_chain:atk:statistics_num_kl',
        7 => 'turn_chain:atk:statistics_num_ks',
        8 => 'turn_chain:atk:statistics_num_dy',
    ];

    public const TURN_CHAIN_TYPE_ATK_STATISTICS_NUM_FAIL_ARR = [
        0 => 'turn_chain:atk:statistics_num_other_fail',
        1 => 'turn_chain:atk:statistics_num_tb_fail',
        2 => 'turn_chain:atk:statistics_num_jd_fail',
        3 => 'turn_chain:atk:statistics_num_pdd_fail',
        4 => 'turn_chain:atk:statistics_num_sn_fail',
        5 => 'turn_chain:atk:statistics_num_vip_fail',
        6 => 'turn_chain:atk:statistics_num_kl_fail',
        7 => 'turn_chain:atk:statistics_num_ks_fail',
        8 => 'turn_chain:atk:statistics_num_dy_fail',
    ];

    public const TURN_CHAIN_TYPE_CQ_STATISTICS_NUM_ARR = [
        0 => 'turn_chain:cq:statistics_num_other',
        1 => 'turn_chain:cq:statistics_num_tb',
        2 => 'turn_chain:cq:statistics_num_jd',
        3 => 'turn_chain:cq:statistics_num_pdd',
        4 => 'turn_chain:cq:statistics_num_sn',
        5 => 'turn_chain:cq:statistics_num_vip',
        6 => 'turn_chain:cq:statistics_num_kl',
        7 => 'turn_chain:cq:statistics_num_ks',
        8 => 'turn_chain:cq:statistics_num_dy',
    ];

    public const TURN_CHAIN_TYPE_CQ_STATISTICS_NUM_FAIL_ARR = [
        0 => 'turn_chain:cq:statistics_num_other_fail',
        1 => 'turn_chain:cq:statistics_num_tb_fail',
        2 => 'turn_chain:cq:statistics_num_jd_fail',
        3 => 'turn_chain:cq:statistics_num_pdd_fail',
        4 => 'turn_chain:cq:statistics_num_sn_fail',
        5 => 'turn_chain:cq:statistics_num_vip_fail',
        6 => 'turn_chain:cq:statistics_num_kl_fail',
        7 => 'turn_chain:cq:statistics_num_ks_fail',
        8 => 'turn_chain:cq:statistics_num_dy_fail',
    ];

    public static array $turnChainResponseKeyMap = [
        self::TURN_CHAIN_TYPE_ECO => 'turn_chain_eco_log',
        self::TURN_CHAIN_TYPE_ATK => 'turn_chain_atk_log',
        self::TURN_CHAIN_TYPE_CQ => 'turn_chain_cq_log',
    ];
    public static array $turnChainTypeKeyFailMap = [
        self::TURN_CHAIN_TYPE_ECO => self::TURN_CHAIN_TYPE_ECO_STATISTICS_NUM_FAIL_ARR,
        self::TURN_CHAIN_TYPE_ATK => self::TURN_CHAIN_TYPE_ATK_STATISTICS_NUM_FAIL_ARR,
        self::TURN_CHAIN_TYPE_CQ  => self::TURN_CHAIN_TYPE_CQ_STATISTICS_NUM_FAIL_ARR,
    ];

    public static array $turnChainTypeKeyMap = [
        self::TURN_CHAIN_TYPE_ECO => self::TURN_CHAIN_TYPE_ECO_STATISTICS_NUM_ARR,
        self::TURN_CHAIN_TYPE_ATK => self::TURN_CHAIN_TYPE_ATK_STATISTICS_NUM_ARR,
        self::TURN_CHAIN_TYPE_CQ  => self::TURN_CHAIN_TYPE_CQ_STATISTICS_NUM_ARR,
    ];
    public static array $ecoTurnChainLimitMap = [
        self::TURN_CHAIN_TYPE_ECO => 1000,
        self::TURN_CHAIN_TYPE_ATK => 2000,
        self::TURN_CHAIN_TYPE_CQ => 2000,
    ];


}
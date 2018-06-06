<?php
return [
    // Product status
    'product_status' => [
        1 => '出荷待ち',
        2 => '発注待ち',
        3 => '見積待ち',
        4 => '出荷中',
        5 => '発注中',
        6 => '見積中',
        7 => '入荷待ち',
        8 => '直送出荷中',
        9 => '出荷済',
        10 => '決済',
        11 => '完了',
        12 => '入荷不足',
        13 => '欠品中',
        14 => '廃番中',
        15 => 'キャンセル',
        16 => '返品',
        17 => '入荷中',
    ],
    'tantou_role' => [
        'admin'    => 'admin',
        'operator' => 'operator'
    ],
    'stock_type' => [
        [
            'key' => 1,
            'value' => '売上',
        ],
        [
            'key' => 2,
            'value' => '仕入',
        ],
        [
            'key' => 3,
            'value' => '出庫',
        ],
        [
            'key' => 4,
            'value' => '入庫',
        ],
    ],
    'stock_detail_type' => [
        [
            'key' => 1,
            'value' => '客注',
        ],
        [
            'key' => 2,
            'value' => '補充',
        ],
        [
            'key' => 3,
            'value' => '初月',
        ],
        [
            'key' => 4,
            'value' => 'お客様返品',
        ],
        [
            'key' => 5,
            'value' => 'イレギュラー入庫',
        ],
        [
            'key' => 6,
            'value' => '破棄',
        ],
        [
            'key' => 7,
            'value' => 'DFO在庫移動',
        ],
    ],
    'receive_mail_status' => [
        1 => '未処理',
        2 => '完了',
        3 => '保留',
        4 => '対応中',
        5 => 'ゴミ箱'
    ],

    'receive_mail_reason' => [
        1 => '納期',
        2 => 'あす楽あすつく',
        3 => 'メール不着',
        4 => '商品情報不足',
        5 => '入り数/価格'
    ],

    'receive_mail_deparment' => [
        1  => 'OS・注文中１',
        2  => 'BS・注文前２',
        3  => 'RS・返品交換３',
        4  => 'AS・発送後４',
        5  => 'BIZ・法人５',
        7  => 'OS・キャンセル７',
        8  => '統計・メール不着８',
        9  => '統計・領収書不着９',
        10 => '運営１０',
        11 => 'COM１１',
        12 => 'システム１２',
        13 => '支援１３',
        14 => '売屋１４'
    ],
    'flg'  => [
        [
            'key' => 0,
            'value' => '無',
        ],
        [
            'key' => 1,
            'value' => '有',
        ],
    ],
    
    'raw_new_product_r2_csv' => [
        'maker_number',
        'product_name',
        'shiyou_kikaku',
        'saitei_hacchu_num',
        'saitei_hacchu_tani',
        'irisuu',
        'irisuu_tani',
        'jan_code',
        'maker_name',
        'teika',
        'tanka',
        'nyuka_yotei_flg',
        'genre',
        'layer_1',
        'layer_2',
        'layer_3',
        'size',
        'weight',
        'color',
        'zokuseihin',
        'brand_name',
        'sale_price',
        'sale_date',
        'kihon_comment',
        'chokusou_kubun',
        'zaishitu',
        'shouhin_package_l',
        'shouhin_package_w',
        'shouhin_package_lw_unit',
        'shouhin_package_wei',
        'shouhin_package_wei_unit',
        'shouhin_package_h',
        'shouhin_package_h_unit',
        'country_made_in',
        'search_key',
        'order_number',
        'teika_flag',
        'daito_store_shipping_fee',
        'direct_shipping_fee'
    ]
];

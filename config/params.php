<?php
return [
    'url' => 'https://' . $_SERVER["SERVER_NAME"] . '/',
    'SiteName'    => 'Keto Cider Gummies',
    'PhoneNumber'    => '1-855-547-0383',
    'EmailAddress'    => 'contact@ketocidergummies.com',
    'SiteUrl'    => 'ketocidergummies.com',

    'CampaignID' => 1468,

    
    // Don't Change >>>
    'adminEmail'  => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName'  => 'Example.com mailer',
    'salt'        => '$2a$10$Q7qlnTFPwKq4D6csshB3n5',
    // <<< Don't change

    // Promo Codes
    'promo_codes' => [
      'TEST123' => [
        'title' => 'Test 1 Code Flat',
        'discount' => '25.00',
        'type' => 1
      ],
      'TEST456' => [
        'title' => 'Test 2 Code Percent',
        'discount' => '50',
        'type' => 2
      ],
    ],


  // ---------------------------- All Products ------------------------------------------
  'all_products' => [
    'p1' => [
      'name' => 'p1',
      'amount' => 79.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => 'Premium Male Enhancement',
      'subscription_terms' => 'monthly',
      'receive_terms' => 'each month',
      'product_type' => 'product'
    ],
    'p2' => [
      'name' => 'p2',
      'amount' => 89.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => 'Premium Male Performance',
      'subscription_terms' => 'monthly',
      'receive_terms' => 'each month',
      'product_type' => 'product'
    ],
    'p3' => [
      'name' => 'p3',
      'amount' => 89.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => 'Premium Testosterone Support',
      'subscription_terms' => 'monthly',
      'receive_terms' => 'each month',
      'product_type' => 'product'
    ],
    'p4' => [
      'name' => 'p4',
      'amount' => 49.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => 'Premium Blood Flow Formula',
      'subscription_terms' => 'monthly',
      'receive_terms' => 'each month',
      'product_type' => 'product'
    ],
    'p_1_month' => [
      'name' => 'KetoCider 1 Month',
      'amount' => 139.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => '1 Month Ultimate',
      'subscription_terms' => 'monthly',
      'receive_terms' => 'each month',
      'product_type' => 'package'
    ],
    'p_3_month' => [
      'name' => 'KetoCider 3 Month',
      'amount' => 279.95,
      'id' => 111,
      'subs_id' => 222,
      'description' => '3 Month Ultimate',
      'subscription_terms' => 'every 3 months',
      'receive_terms' => 'every 3 months',
      'product_type' => 'package'
    ],
  ],
  // End All Products



  // Keto Cider Gummies Order ============================================================
  'prod1'   => [
    'name' => 'Keto Cider Gummies 1 Month Pro',
    'amount' => 79.95,
    'id'     => 111,
    'pp' => 222,
    //'pp_code' => 'P-55Y35407YL101154HMR3DVSI', // live
    'pp_code' => 'P-70U28770DC780251AMJA27LQ', // test
  ],
  'prod2'   => [
    'name' => 'Keto Cider Gummies 1 Month Extreme',
    'amount' => 139.95,
    'id'     => 111,
    'pp' => 222,
    //'pp_code' => 'P-1FV51564BY178382UMR3DWBY', // live
    'pp_code' => 'P-2X2692317W8122306MJA26YI', // test
  ],
  'prod3'   => [
    'name' => 'Keto Cider Gummies 3 Month Extreme',
    'amount' => 279.95,
    'id'     => 111,
    'pp' => 222,
    //'pp_code' => 'P-66D19511T8482513PMR3DWLA', // live
    'pp_code' => 'P-6V957670LG3146405MHPSHPY', // test
  ],
   // Upsell Product
   'upsell' => [
    'name' => 'Upsell 1 Month',
    'amount' => 49.95,
    'id' => 111,
    'pp' => 222,
  // 'pp_code' => 'P-64091106LJ3479459MR3DWSY', // Live
    'pp_code' => 'P-6V957670LG3146405MHPSHPY', // Test
],
  // End Keto Cider Gummies Order

  // Keto Cider Gummies Save ============================================================
  'save'   => [
    'name' => 'Keto Cider Gummies Save SMS Package',
    'amount' => 79.95,
    'id'     => 10856,
    'pp' => 10858,
    //'pp_code' => 'P-23U22281KT779484HMR7QK6A', // live
    'pp_code' => 'P-70U28770DC780251AMJA27LQ', // test
  ],







    // TEST ACC
    'paypal_client_id' => 'AZlc6nGGWaOMtCROHaLKxmw0X4g02y7KkgZYCwGNFNzMIPWAiRhbhyg2xkj0nOk9xQ0Ao9nDFPcw1oRw',

    // Live ACC
    //'paypal_client_id' => 'AXpxZHhfDqnhBaHb3aR06O87psVQa1NIu7Z0pliOgNRna0myzQZYSaxcpw_kNYGjmU73js5RFyny4S9e',


    'authorize.mode' => 'sandbox', //sandbox or live



    'us.free.shipping.id'         => 5,
    'us.free.shipping.amount'     => 0,
    'us.exp.shipping.id'          => 36,
    'us.exp.shipping.amount'      => 7.95,
    'ca.standard.shipping.id'     => 33,
    'ca.standard.shipping.amount' => 9.95,

    
    'ip_white_list'  => [
        '::1',
        '127.0.0.1',
        '108.41.203.139',   # NY Office NEW
        '108.46.164.152',   # NY Office
        '173.63.72.225',    # NJ Office
        '206.201.0.83',     # PH Office - Converge
        '38.107.174.197',   # PH Office - APN
        '38.107.176.178',   # PH Office - 2
        '71.187.195.113', #MG Home
        '96.242.19.128',    # MG Home
        '108.41.203.181',   # MB Home
        '24.185.140.132',   # JG Home
        '108.53.129.232',   # Mike MID's PC
        '216.107.140.19',   # Main
        '45.59.16.146',     # Backup
        '109.93.86.2',      # Luka Dynamic
        '96.242.19.128',    # Mike S' home IP
        '182.77.8.119',
        '49.147.184.112',   # Kenn Dev
        '71.187.195.173',   # Mike G New Home
        '38.141.62.247', #1COGENT
        '202.182.71.92', #1ATT
        '109.121.0.219', #1SPRINT
        '103.161.61.22',
        '108.54.198.238', # JG Home 2
        '173.77.156.168', #NY Office New IP
    ],
];

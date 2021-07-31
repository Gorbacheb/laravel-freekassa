<?php

return [

    /*
     * Project`s id
     */
    'project_id' => env('FREEKASSA_PROJECT_ID', ''),

    /*
     * api key
     */
    'api_key' => env('FREEKASSA_API_KEY', ''),

    /*
     * First project`s secret key
     */
    'secret_world' => env('FREEKASSA_SECRET_KEY', ''),

    /*
     * Second project`s secret key
     */
    'secret_world_second' => env('FREEKASSA_SECRET_KEY_SECOND', ''),

    /*
     * Locale for payment form
     */
    'locale' => 'ru',  // ru || en

    /*
     * Allowed currenc'ies https://docs.freekassa.ru/#section/1.-Vvedenie/1.2.-Nastrojka-uchetnoj-zapisi
     *
     * If currency = null, that parameter doesn`t be setted
     * RUB,USD,EUR,UAH,KZT
     */
    'currency' => null,

    /*
     * Allowed ip's https://docs.freekassa.ru/#section/1.-Vvedenie/1.4.-Opoveshenie-o-platezhe
     */
    'allowed_ips' => [
        '168.119.157.136',
        '168.119.60.227',
        '138.201.88.124',
    ],

    /*
     *  SearchOrder
     *  Search order in the database and return order details
     *  Must return array with:
     *
     *  _orderStatus
     *  _orderSum
     */
    'searchOrder' => null, //  'App\Http\Controllers\FreeKassaController@searchOrder',

    /*
     *  PaidOrder
     *  If current _orderStatus from DB != paid then call PaidOrderFilter
     *  update order into DB & other actions
     */
    'paidOrder' => null, //  'App\Http\Controllers\FreeKassaController@paidOrder',

    /*
     * Customize error messages
     */
    'errors' => [
        'validateOrderFromHandle' => 'Validate Order Error',
        'searchOrder' => 'Search Order Error',
        'paidOrder' => 'Paid Order Error',
    ],

    /*
     * Url to init payment on FreeKassa
     * https://www.free-kassa.ru/docs/api.php#step2
     */
    'pay_url' => 'https://pay.freekassa.ru/',
];

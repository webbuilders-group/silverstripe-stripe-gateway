<?php
class StripeGateway extends PaymentGateway_MerchantHosted
{
    /**
     * Supported currencies for this gateway
     * @see PaymentGateway::getSupportedCurrencies()
     */
    protected $supportedCurrencies=array(
                                        'AED'=>'United Arab Emirates Dirham',
                                        'AFN'=>'Afghan Afghani',
                                        'ALL'=>'Albanian Lek',
                                        'AMD'=>'Armenian Dram',
                                        'ANG'=>'Netherlands Antillean Gulden',
                                        'AOA'=>'Angolan Kwanza',
                                        'ARS'=>'Argentine Peso',
                                        'AUD'=>'Australian Dollar',
                                        'AWG'=>'Aruban Florin',
                                        'AZN'=>'Azerbaijani Manat',
                                        'BAM'=>'Bosnia & Herzegovina Convertible Mark',
                                        'BBD'=>'Barbadian Dollar',
                                        'BDT'=>'Bangladeshi Taka',
                                        'BGN'=>'Bulgarian Lev',
                                        'BIF'=>'Burundian Franc',
                                        'BMD'=>'Bermudian Dollar',
                                        'BND'=>'Brunei Dollar',
                                        'BOB'=>'Bolivian Boliviano',
                                        'BRL'=>'Brazilian Real',
                                        'BSD'=>'Bahamian Dollar',
                                        'BWP'=>'Botswana Pula',
                                        'BZD'=>'Belize Dollar',
                                        'CAD'=>'Canadian Dollar',
                                        'CDF'=>'Congolese Franc',
                                        'CHF'=>'Swiss Franc',
                                        'CLP'=>'Chilean Peso',
                                        'CNY'=>'Chinese Renminbi Yuan',
                                        'COP'=>'Colombian Peso',
                                        'CRC'=>'Costa Rican Colón',
                                        'CVE'=>'Cape Verdean Escudo',
                                        'CZK'=>'Czech Koruna',
                                        'DJF'=>'Djiboutian Franc',
                                        'DKK'=>'Danish Krone',
                                        'DOP'=>'Dominican Peso',
                                        'DZD'=>'Algerian Dinar',
                                        'EEK'=>'Estonian Kroon',
                                        'EGP'=>'Egyptian Pound',
                                        'ETB'=>'Ethiopian Birr',
                                        'EUR'=>'Euro',
                                        'FJD'=>'Fijian Dollar',
                                        'FKP'=>'Falkland Islands Pound',
                                        'GBP'=>'British Pound',
                                        'GEL'=>'Georgian Lari',
                                        'GIP'=>'Gibraltar Pound',
                                        'GMD'=>'Gambian Dalasi',
                                        'GNF'=>'Guinean Franc',
                                        'GTQ'=>'Guatemalan Quetzal',
                                        'GYD'=>'Guyanese Dollar',
                                        'HKD'=>'Hong Kong Dollar',
                                        'HNL'=>'Honduran Lempira',
                                        'HRK'=>'Croatian Kuna',
                                        'HTG'=>'Haitian Gourde',
                                        'HUF'=>'Hungarian Forint',
                                        'IDR'=>'Indonesian Rupiah',
                                        'ILS'=>'Israeli New Sheqel',
                                        'INR'=>'Indian Rupee',
                                        'ISK'=>'Icelandic Króna',
                                        'JMD'=>'Jamaican Dollar',
                                        'JPY'=>'Japanese Yen',
                                        'KES'=>'Kenyan Shilling',
                                        'KGS'=>'Kyrgyzstani Som',
                                        'KHR'=>'Cambodian Riel',
                                        'KMF'=>'Comorian Franc',
                                        'KRW'=>'South Korean Won',
                                        'KYD'=>'Cayman Islands Dollar',
                                        'KZT'=>'Kazakhstani Tenge',
                                        'LAK'=>'Lao Kip',
                                        'LBP'=>'Lebanese Pound',
                                        'LKR'=>'Sri Lankan Rupee',
                                        'LRD'=>'Liberian Dollar',
                                        'LSL'=>'Lesotho Loti',
                                        'LTL'=>'Lithuanian Litas',
                                        'LVL'=>'Latvian Lats',
                                        'MAD'=>'Moroccan Dirham',
                                        'MDL'=>'Moldovan Leu',
                                        'MGA'=>'Malagasy Ariary',
                                        'MKD'=>'Macedonian Denar',
                                        'MNT'=>'Mongolian Tögrög',
                                        'MOP'=>'Macanese Pataca',
                                        'MRO'=>'Mauritanian Ouguiya',
                                        'MUR'=>'Mauritian Rupee',
                                        'MVR'=>'Maldivian Rufiyaa',
                                        'MWK'=>'Malawian Kwacha',
                                        'MXN'=>'Mexican Peso',
                                        'MYR'=>'Malaysian Ringgit',
                                        'MZN'=>'Mozambican Metical',
                                        'NAD'=>'Namibian Dollar',
                                        'NGN'=>'Nigerian Naira',
                                        'NIO'=>'Nicaraguan Córdoba',
                                        'NOK'=>'Norwegian Krone',
                                        'NPR'=>'Nepalese Rupee',
                                        'NZD'=>'New Zealand Dollar',
                                        'PAB'=>'Panamanian Balboa',
                                        'PEN'=>'Peruvian Nuevo Sol',
                                        'PGK'=>'Papua New Guinean Kina',
                                        'PHP'=>'Philippine Peso',
                                        'PKR'=>'Pakistani Rupee',
                                        'PLN'=>'Polish Złoty',
                                        'PYG'=>'Paraguayan Guaraní',
                                        'QAR'=>'Qatari Riyal',
                                        'RON'=>'Romanian Leu',
                                        'RSD'=>'Serbian Dinar',
                                        'RUB'=>'Russian Ruble',
                                        'RWF'=>'Rwandan Franc',
                                        'SAR'=>'Saudi Riyal',
                                        'SBD'=>'Solomon Islands Dollar',
                                        'SCR'=>'Seychellois Rupee',
                                        'SEK'=>'Swedish Krona',
                                        'SGD'=>'Singapore Dollar',
                                        'SHP'=>'Saint Helenian Pound',
                                        'SLL'=>'Sierra Leonean Leone',
                                        'SOS'=>'Somali Shilling',
                                        'SRD'=>'Surinamese Dollar',
                                        'STD'=>'São Tomé and Príncipe Dobra',
                                        'SVC'=>'Salvadoran Colón',
                                        'SZL'=>'Swazi Lilangeni',
                                        'THB'=>'Thai Baht',
                                        'TJS'=>'Tajikistani Somoni',
                                        'TOP'=>'Tongan Paʻanga',
                                        'TRY'=>'Turkish Lira',
                                        'TTD'=>'Trinidad and Tobago Dollar',
                                        'TWD'=>'New Taiwan Dollar',
                                        'TZS'=>'Tanzanian Shilling',
                                        'UAH'=>'Ukrainian Hryvnia',
                                        'UGX'=>'Ugandan Shilling',
                                        'USD'=>'United States Dollar',
                                        'UYU'=>'Uruguayan Peso',
                                        'UZS'=>'Uzbekistani Som',
                                        'VEF'=>'Venezuelan Bolívar',
                                        'VND'=>'Vietnamese Đồng',
                                        'VUV'=>'Vanuatu Vatu',
                                        'WST'=>'Samoan Tala',
                                        'XAF'=>'Central African Cfa Franc',
                                        'XCD'=>'East Caribbean Dollar',
                                        'XOF'=>'West African Cfa Franc',
                                        'XPF'=>'Cfp Franc',
                                        'YER'=>'Yemeni Rial',
                                        'ZAR'=>'South African Rand',
                                        'ZMW'=>'Zambian Kwacha'
                                    );
    
    /**
     * Supported credit card types for this gateway
     * @see PaymentGateway::getSupportedCardTypes()
     */
    protected $supportedCardTypes=array(
                                        'visa'=>'Visa',
                                        'master'=>'MasterCard',
                                        'american_express'=>'American Express',
                                        'jcb'=>'JCB',
                                        'discover'=>'Discover',
                                        'diners'=>'Diners Club'
                                    );
    
    /**
     * Test API secret
     * @config StripeGateway.test_api_secret
     */
    private static $test_api_secret=null;
    
    /**
     * API secret
     * @config StripeGateway.api_secret
     */
    private static $api_secret=null;
    
    /**
     * Send a request to the gateway to process the payment
     * @param {array} $data Data to be passed to the gateway
     * @return {PaymentGateway_Result} Payment result object
     */
    public function process($data)
    {
        $api_key='';
        if (PaymentGateway::get_environment()=='dev') {
            $api_key=Config::inst()->get('StripeGateway', 'test_api_secret');
        } else {
            $api_key=Config::inst()->get('StripeGateway', 'api_secret');
        }
        
        
        if (empty($api_key)) {
            return new PaymentGateway_Failure(403, _t('StripeGateway.NO_API_KEY', '_No api key configured, you must configure StripeGateway.api_secret for live and StripeGateway.test_api_secret for dev'));
        }
        
        
        //Set the api key in the Stripe library
        Stripe::setApiKey($api_key);
        
        
        //Create the Stripe charge
        try {
            $response=Stripe_Charge::create(array(
                                                'amount'=>intval($data['Amount'])*100,
                                                'currency'=>$data['Currency'],
                                                'card'=>array(
                                                            'number'=>implode('', $data['CardNumber']),
                                                            'exp_month'=>$data['MonthExpiry'],
                                                            'exp_year'=>$data['YearExpiry'],
                                                            'cvc'=>$data['Cvc2'],
                                                            'name'=>$data['FirstName'].' '.$data['LastName'],
                                                            'address_line1'=>$data['BillingAddress'],
                                                            'address_line2'=>$data['BillingAddress2'],
                                                            'address_city'=>$data['BillingCity'],
                                                            'address_zip'=>$data['BillingZIPCode'],
                                                            'address_state'=>$data['BillingState'],
                                                            'address_country'=>$data['BillingCountry']
                                                        ),
                                                'description'=>_t('StripeGateway.PAYMENT_DESCRIPTION', '_{sitetitle} Store Sale', array('sitetitle'=>(class_exists('SiteConfig') ? SiteConfig::get()->first()->Title:'SilverStripe')))
                                            ));
            
            if ($response->paid) {
                return new PaymentGateway_Success($status);
            } elseif ($response->cvc_check=='fail' || $response->address_line1_check=='fail' || $response->address_zip_check=='fail') {
                $errors=array();
                
                if ($response->cvc_check=='fail') {
                    $errors[]=_t('StripeGateway.FAIL_CVC', '_The credit card\'s security code (cvc) is invalid');
                }
                
                if ($response->address_line1_check=='fail') {
                    $errors[]=_t('StripeGateway.FAIL_ADDRESS', '_Your bank declined the charge based on your address information, please verify the information and try again');
                }
                
                if ($response->address_zip_check=='fail') {
                    $errors[]=_t('StripeGateway.FAIL_ZIP_CODE', '_Your bank declined the charge based on your postal code/zip code, please verify it and try again');
                }
                
                return new PaymentGateway_Failure(null, $errors);
            } else {
                return new PaymentGateway_Incomplete();
            }
        } catch (Stripe_Error $e) {
            return new PaymentGateway_Failure(new SS_HTTPResponse('', $e->getHttpStatus()), array($e->getCode()=>$e->getMessage()));
        }
        
        return new PaymentGateway_Failure();
    }
}

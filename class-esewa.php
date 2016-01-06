<?php
/**
 * Class eSewa.
 */
class Esewa {

    private $logger;
    private $testing;
    private $live_url;
    private $test_url;
    private $live_url_verification;
    private $test_url_verification;
    private $merchant_code;

    function __construct( $args = array() ) {

        $this->live_url = 'https://esewa.com.np/epay/main';
        $this->test_url = 'https://dev.esewa.com.np/epay/main';
        $this->live_url_verification = 'https://esewa.com.np/epay/transrec';
        $this->test_url_verification = 'https://dev.esewa.com.np/epay/transrec';

        $merchant_code = ( isset( $args['merchant_code'] ) ) ? $args['merchant_code'] : '';

    }

    function set_transation_data( $args ) {


    }

    function render() {

    }

}

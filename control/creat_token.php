<?php
include_once ('../vendor/autoload.php');

use Firebase\JWT\JWT;

class Token{
    private $exp, $yam, $nickname;
    private $secret_key;
    function __construct($exp, $yam, $nickname) {
        $this->exp = $exp;
        $this->yam = $yam;
        $this->nickname = $nickname;
        $this->secret_key = '12345';
    }
    function getToken(){
        $data = array(
            'exp' => $this->exp,
            'data' =>[
                'nickname'=>$this->nickname,
                'yam' => $this->yam,
            ]
        );
        return JWT::encode($data, $this->secret_key);
    }

};



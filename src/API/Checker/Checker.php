<?php

namespace alaaaq80\unifonic\src\API\Checker;
use alaaaq80\unifonic\src\lib\GUMP\GUMP;

/**
 * Class Account
 * @package alaaaq80\unifonic\src\API\Account
 */
Class Checker{

    /**
     * @var
     */
    private $client;

    /**
     * @param $oClient
     */
    public function __construct($oClient)
    {

        $this->client = $oClient;

    }


    public function Rules($methodName){

        $rules = array(
            'CheckNumber'=>array(
                'Recipient' =>  'numeric|required|min_len,12|max_len,14'
            )
        );

        return $rules["$methodName"];
    }

    /**
     * @param $Recipient
     * @return mixed
     */
    public function CheckNumber($Recipient)
    {
        $aParams = array();
        $aParams['Recipient'] = $Recipient;

        $valid = GUMP::is_valid($aParams ,$this->Rules(__FUNCTION__));
        if($valid === true)
        {
            return $this->client->Checker_CheckNumber($aParams);

        }else{
            return $valid[0];
        }
    }


}
?>

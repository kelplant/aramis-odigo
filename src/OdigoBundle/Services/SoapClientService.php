<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 19:46
 */
namespace OdigoBundle\Services;

class SoapClientService
{
    public function createSoapClientInstance($url,$soapParams){

        $client = new \SoapClient($soapParams['url']);
        try {
            $res = $client->createAgent(array(
                'wsLogin' => $soapParams['wsLogin'],
                'wsPassword' => $soapParams['wsPassword'],
                'userBean' => $soapParams['userBean']
            ));
            $return = $res;
        }
        catch (\SoapFault $e) {
            $return = $e;
        }

        return $return;

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: kcchan
 * Date: 2014-06-20
 * Time: 3:07 PM
 */

namespace Git\Service;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GitService implements ServiceLocatorAwareInterface
{

    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {

    }

    public function getServiceLocator()
    {

    }

    public function makeRequest($json = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://api.github.com/user?access_token=" . $this->token);

        if (!is_null($json)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
        }

        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
        $cont = curl_exec($curl);
        curl_close($curl);

        return $cont;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 13:27
 */

namespace OdigoBundle\Services;


interface OdigoClientServiceInterface
{
    public function create($url,$wsLogin,$wsPassword,$userBeanInfos);
    public function createwithtemplate($url,$wsLogin,$wsPassword,$userBeanWithTemplateInfos);
    public function delete($url,$wsLogin,$wsPassword,$userId);
    public function export($url,$wsLogin,$wsPassword,$AutoUserAdmin);
}
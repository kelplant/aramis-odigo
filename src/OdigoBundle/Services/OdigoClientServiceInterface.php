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
    public function create($parameters,$userBeanInfos);
    public function createwithtemplate($parameters,$userBeanWithTemplateInfos);
    public function delete($parameters,$userId);
    public function export($parameters,$AutoUserAdmin);
}
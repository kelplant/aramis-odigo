<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\Actions;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\Actions\CreateWithTemplateStruct;

class CreateWithTemplateStructFactory extends AbstractFactory
{
    /**
     * @param $CreateWithTemplateStruct
     * @return CreateWithTemplateStruct
     */
    public function createFromEntity($CreateWithTemplateStruct)
    {
        $CreateWithTemplateStruct = new CreateWithTemplateStruct(
            $CreateWithTemplateStruct['wsLogin'],
            $CreateWithTemplateStruct['wsPassword'],
            $CreateWithTemplateStruct['userBean']
        );

        return $CreateWithTemplateStruct;
    }
}
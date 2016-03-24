<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\Actions;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\Actions\CreateAgentStruct;

class CreateAgentStructFactory extends AbstractFactory
{
    /**
     * @param $createAgentStruct
     * @return CreateAgentStruct
     */
    public function createFromEntity($createAgentStruct)
    {
        $createAgentStruct = new CreateAgentStruct(
            $createAgentStruct['wsLogin'],
            $createAgentStruct['wsPassword'],
            $createAgentStruct['userBean']
        );

        return $createAgentStruct;
    }
}
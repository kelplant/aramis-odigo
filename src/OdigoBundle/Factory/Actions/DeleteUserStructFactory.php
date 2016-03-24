<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\Actions;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\Actions\DeleteUserStruct;

class DeleteUserStructFactory extends AbstractFactory
{
    /**
     * @param $deleteUserStruct
     * @return DeleteUserStruct
     */
    public function createFromEntity($deleteUserStruct)
    {
        $deleteUserStruct = new DeleteUserStruct(
            $deleteUserStruct['wsLogin'],
            $deleteUserStruct['wsPassword'],
            $deleteUserStruct['userId']
        );

        return $deleteUserStruct;
    }
}
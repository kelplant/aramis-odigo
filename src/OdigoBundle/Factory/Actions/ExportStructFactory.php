<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\Actions;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\Actions\ExportStruct;

class ExportStructFactory extends AbstractFactory
{
    /**
     * @param $exportStruct
     * @return ExportStruct
     */
    public function createFromEntity($exportStruct)
    {
        $exportStruct = new ExportStruct(
            $exportStruct['wsLogin'],
            $exportStruct['wsPassword'],
            $exportStruct['userId']
        );

        return $exportStruct;
    }
}
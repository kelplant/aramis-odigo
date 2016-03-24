<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 13:04
 */

namespace OdigoBundle\Factory;


abstract class AbstractFactory
{
    abstract public function createFromEntity($entityData);

    /**
     * @param array $collection
     * @return array
     */
    public function createFromCollection(array $collection)
    {
        $result = [];

        foreach($collection as $entityData) {
            $result[] = $this->createFromEntity($entityData);
        }

        return $result;
    }
}
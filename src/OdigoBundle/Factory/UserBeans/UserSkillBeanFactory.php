<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\UserBeans;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\UserBeans\UserSkillBean;

class UserSkillBeanFactory extends AbstractFactory
{
    /**
     * @param $UserBeanSkillsInfos
     * @return UserSkillBean
     */
    public function createFromEntity($UserBeanSkillsInfos)
    {
        $UserSkillBean = new UserSkillBean(
            $UserBeanSkillsInfos['level'],
            $UserBeanSkillsInfos['skillKeyword'],
            $UserBeanSkillsInfos['specialty']
        );

        return $UserSkillBean;
    }
}
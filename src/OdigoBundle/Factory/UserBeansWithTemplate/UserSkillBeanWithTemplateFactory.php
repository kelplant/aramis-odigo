<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\UserBeansWithTemplate;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\UserBeansWithTemplate\UserSkillBeanWithTemplate;

class UserSkillBeanWithTemplateFactory extends AbstractFactory
{
    /**
     * @param $UserSkillBeanWithTemplate
     * @return UserSkillBeanWithTemplate
     */
    public function createFromEntity($UserSkillBeanWithTemplate)
    {
        $UserSkillBeanWithTemplate = new UserSkillBeanWithTemplate(
            $UserSkillBeanWithTemplate['id'],
            $UserSkillBeanWithTemplate['level']
        );

        return $UserSkillBeanWithTemplate;
    }
}
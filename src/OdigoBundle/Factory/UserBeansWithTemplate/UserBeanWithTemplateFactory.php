<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\UserBeansWithTemplate;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\UserBeansWithTemplate\UserBeanWithTemplate;

class UserBeanWithTemplateFactory extends AbstractFactory
{
    /** @var UserSkillBeanWithTemplateFactory $userSkillBeanWithTemplateFactory */
    protected $userSkillBeanWithTemplateFactory;

    /**
     * UserBeanWithTemplate constructor.
     * @param UserSkillBeanWithTemplateFactory $userSkillBeanWithTemplateFactory
     */
    public function __construct(UserSkillBeanWithTemplateFactory $userSkillBeanWithTemplateFactory)
    {
        $this->userSkillBeanWithTemplateFactory = $userSkillBeanWithTemplateFactory;
    }

    /**
     * @param $userBeanWithTemplateInfos
     * @return UserBeanWithTemplate
     */
    public function createFromEntity($userBeanWithTemplateInfos)
    {
        $userBeanWithTemplateSkillsInfos = array(
            'id' => $userBeanWithTemplateInfos['skillId'],
            'level' => $userBeanWithTemplateInfos['skillLevel'],
        );

        $entity = (new UserBeanWithTemplate())
            ->setActive($userBeanWithTemplateInfos['active'])
            ->setData($userBeanWithTemplateInfos['odigoPhoneNumber'])
            ->setDdiNumber($userBeanWithTemplateInfos['fixePhoneNumber'])
            ->setDirectAccessCode($userBeanWithTemplateInfos['odigoPhoneNumber'])
            ->setFirstName($userBeanWithTemplateInfos['firstName'])
            ->setLanguage($userBeanWithTemplateInfos['language'])
//            ->setListAgentGroup("ga_" . $userBeanWithTemplateInfos['Agence'])
//            ->setListSkill($this->userSkillBeanWithTemplateFactory->createFromEntity($userBeanWithTemplateSkillsInfos))
            ->setListTemplate($userBeanWithTemplateInfos['Agence'] . "_" . $userBeanWithTemplateInfos['fonction'])
            ->setMail($userBeanWithTemplateInfos['mail'])
            ->setName($userBeanWithTemplateInfos['name'])
            ->setOverloadGroup($userBeanWithTemplateInfos['overloadGroup'])
            ->setOverloadTemplate($userBeanWithTemplateInfos['overloadTemplate'])
            ->setPassword($userBeanWithTemplateInfos['password'])
            ->setPhoneLoginNumber($userBeanWithTemplateInfos['odigoPhoneNumber'])
//            ->setPhoneLoginPassword($userBeanWithTemplateInfos['phoneLoginPassword'])
            ->setTemplateId($userBeanWithTemplateInfos['Agence'] . "_" . $userBeanWithTemplateInfos['fonction'])
            ->setTimeZone($userBeanWithTemplateInfos['timeZone'])
            ->setUserId($userBeanWithTemplateInfos['companyExtension'])
        ;

        return $entity;
    }
}

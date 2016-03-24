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
     * @return mixed
     */
    public function createFromEntity($userBeanWithTemplateInfos)
    {
        $userBeanSkillsInfos = array(
            'id' => $userBeanWithTemplateInfos['id'],
            'level' => $userBeanWithTemplateInfos['level'],
        );

        $entity = (new UserBeanWithTemplate())
            ->setActive($userBeanWithTemplateInfos['activeState'])
            ->setData($userBeanWithTemplateInfos['phoneNumberOdigo'])
            ->setDdiNumber($userBeanWithTemplateInfos['phoneNumberInternal'])
            ->setDirectAccessCode($userBeanWithTemplateInfos['phoneNumberOdigo'])
            ->setFirstName($userBeanWithTemplateInfos['firstName'])
            ->setLanguage($userBeanWithTemplateInfos['language'])
            ->setListAgentGroup($userBeanWithTemplateInfos['listAgentGroup'])
            ->setListSkill($this->userSkillBeanWithTemplateFactory->createFromEntity($userBeanSkillsInfos))
            ->setListTemplate($userBeanWithTemplateInfos['listTemplate'])
            ->setMail($userBeanWithTemplateInfos['mail'])
            ->setName($userBeanWithTemplateInfos['name'])
            ->setOverloadGroup($userBeanWithTemplateInfos['overloadGroup'])
            ->setOverloadTemplate($userBeanWithTemplateInfos['overloadTemplate'])
            ->setPassword($userBeanWithTemplateInfos['password'])
            ->setPhoneLoginNumber($userBeanWithTemplateInfos['phoneNumberOdigo'])
            ->setPhoneLoginPassword($userBeanWithTemplateInfos['phoneLoginPassword'])
            ->setTemplateId($userBeanWithTemplateInfos['templateId'])
            ->setTimeZone($userBeanWithTemplateInfos['timeZone'])
            ->setUserId($userBeanWithTemplateInfos['companyExtension'])
        ;


        return $entity;
    }
}

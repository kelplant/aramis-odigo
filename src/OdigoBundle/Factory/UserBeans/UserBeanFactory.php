<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:35
 */
namespace OdigoBundle\Factory\UserBeans;

use OdigoBundle\Factory\AbstractFactory;
use OdigoBundle\Entity\UserBeans\UserBean;

class UserBeanFactory extends AbstractFactory
{
    /** @var UserSkillBeanFactory $userSkillBeanFactory */
    protected $userSkillBeanFactory;

    /**
     * UserBeanFactory constructor.
     * @param UserSkillBeanFactory $userSkillBeanFactory
     */
    public function __construct(UserSkillBeanFactory $userSkillBeanFactory)
    {
        $this->userSkillBeanFactory = $userSkillBeanFactory;
    }

    /**
     * @param $userBeanInfos
     * @return UserBean
     */
    public function createFromEntity($userBeanInfos)
    {
        $userBeanSkillsInfos = array(
            'level' => $userBeanInfos['level'],
            'skillKeyword' => $userBeanInfos['skillKeyword'],
            'specialty' => $userBeanInfos['specialty'],
        );

        $entity = (new UserBean())
            ->setActiveState($userBeanInfos['activeState'])
            ->setAgentGroups($userBeanInfos['agentGroups'])
            ->setCalendarId($userBeanInfos['calendarId'])
            ->setDdiNumber($userBeanInfos['ddiNumber'])
            ->setDisruptionDuration($userBeanInfos['disruptionDuration'])
            ->setEmail($userBeanInfos['email'])
            ->setEnable2WaysSwitch($userBeanInfos['enable2WaysSwitch'])
            ->setEnableCallBack($userBeanInfos['enableCallBack'])
            ->setEnableConference($userBeanInfos['enableConference'])
            ->setEnableOutCall($userBeanInfos['enableOutCall'])
            ->setEnableRecording($userBeanInfos['enableRecording'])
            ->setFirstName($userBeanInfos['firstName'])
            ->setLanguageId($userBeanInfos['languageId'])
            ->setLoginTel($userBeanInfos['loginTel'])
            ->setName($userBeanInfos['name'])
            ->setPassword($userBeanInfos['password'])
            ->setTransfertDDIAuthorized($userBeanInfos['transfertDDIAuthorized'])
            ->setUserId($userBeanInfos['userId'])
            ->setWrapupTime($userBeanInfos['wrapupTime'])
            ->setSkills($this->userSkillBeanFactory->createFromEntity($userBeanSkillsInfos))
        ;

        return $entity;
    }
}

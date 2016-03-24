<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 13:25
 */
namespace OdigoBundle\Services;

use OdigoBundle\Factory\Actions\CreateAgentStructFactory;
use OdigoBundle\Factory\Actions\CreateWithTemplateStructFactory;
use OdigoBundle\Factory\Actions\DeleteUserStructFactory;
use OdigoBundle\Factory\Actions\ExportStructFactory;
use OdigoBundle\Factory\UserBeans\UserBeanFactory;
use OdigoBundle\Factory\UserBeansWithTemplate\UserBeanWithTemplateFactory;

class OdigoClientService implements OdigoClientServiceInterface
{
    /** @var UserBeanFactory $userBeanFactory */
    protected $userBeanFactory;

    /** @var UserBeanWithTemplateFactory $userBeanWithTemplateFactory */
    protected $userBeanWithTemplateFactory;

    /** @var CreateAgentStructFactory $createAgentFactory*/
    protected $createAgentStructFactory;

    /** @var CreateWithTemplateStructFactory $createWithTemplateStructFactory*/
    protected $createWithTemplateStructFactory;

    /** @var DeleteUserStructFactory $deleteUserFactory*/
    protected $deleteUserStructFactory;

    /** @var ExportStructFactory $exportStructFactory*/
    protected $exportStructFactory;

    /**
     * OdigoClientService constructor.
     * @param UserBeanFactory $userBeanFactory
     * @param UserBeanWithTemplateFactory $userBeanWithTemplateFactory
     * @param CreateAgentStructFactory $createAgentStructFactory
     * @param CreateWithTemplateStructFactory $createWithTemplateStructFactory
     * @param DeleteUserStructFactory $deleteUserStructFactory
     * @param ExportStructFactory $exportStructFactory
     */
    public function __construct(UserBeanFactory $userBeanFactory, UserBeanWithTemplateFactory $userBeanWithTemplateFactory, CreateAgentStructFactory $createAgentStructFactory, CreateWithTemplateStructFactory $createWithTemplateStructFactory, DeleteUserStructFactory $deleteUserStructFactory, ExportStructFactory $exportStructFactory)
    {
        $this->userBeanFactory = $userBeanFactory;
        $this->userBeanWithTemplateFactory = $userBeanWithTemplateFactory;
        $this->createAgentStructFactory = $createAgentStructFactory;
        $this->createWithTemplateStructFactory = $createWithTemplateStructFactory;
        $this->deleteUserStructFactory = $deleteUserStructFactory;
        $this->exportStructFactory = $exportStructFactory;
    }


    /**
     * @param $userBeanInfos
     * @return \OdigoBundle\Entity\UserBeans\UserBean
     */
    private function generateUserBean($userBeanInfos)
    {
        $UserBean = $this->userBeanFactory->createFromEntity($userBeanInfos);
        return $UserBean;
    }

    /**
     * @param $url
     * @param $wsLogin
     * @param $wsPassword
     * @param $userBeanInfos
     * @return \Exception|\SoapFault
     */
    public function create($url, $wsLogin, $wsPassword, $userBeanInfos)
    {
        $userBean = $this->generateUserBean($userBeanInfos);
        var_dump($userBean);

        $clientInfosClassmap = array(
            'createAgent' => 'CreateAgentStruct',
            'CreateUserBean' => 'UserBean',
            'CreateUserSkillBean' => 'UserSkillBean',
            );
        $client = new \SoapClient($url,array('classmap',$clientInfosClassmap));
        $createAgentSruct = $this->createAgentStructFactory->createFromEntity(array('wsLogin' => $wsLogin,'wsPassword' => $wsPassword,'userBean' => $userBean));
        try {
            $response = $client->createAgent($createAgentSruct);
            $return = $response;
        }
        catch (\SoapFault $e) {
            $return = $e;
        }
        return $return;
    }

    /**
     * @param $url
     * @param $wsLogin
     * @param $wsPassword
     * @param $userBeanWithTemplateInfos
     * @return \Exception|\SoapFault
     */
    public function createwithtemplate($url, $wsLogin, $wsPassword, $userBeanWithTemplateInfos)
    {
//        $userBean = $this->generateUserBeanWithTemplate($userBeanWithTemplateInfos);
//        var_dump($userBean);
//
//        $clientInfosClassmap = array(
//            'createUserUsingTemplate' => 'CreateWithTemplateStruct',
//            'UserBean' => 'UserBeanWithTemplate',
//            'CreateUserSkillBean' => 'UserSkillBeanWithTemplate',
//        );
//        $client = new \SoapClient($url,array('classmap',$clientInfosClassmap));
//        $createWithTemplateSruct = $this->createWithTemplateStructFactory->createFromEntity(array('wsLogin' => $wsLogin,'wsPassword' => $wsPassword,'userBean' => $userBean));
//        try {
//            $response = $client->createUserUsingTemplate($createWithTemplateSruct);
//            $return = $response;
//        }
//        catch (\SoapFault $e) {
//            $return = $e;
//        }
//        return $return;
    }

    /**
     * @param $url
     * @param $wsLogin
     * @param $wsPassword
     * @param $userId
     * @return \Exception|\SoapFault
     */
    public function delete($url, $wsLogin, $wsPassword, $userId)
    {
        $clientInfosClassmap = array(
            'deleteUser' => 'DeleteUserStruct',
        );
        $client = new \SoapClient($url,array('classmap',$clientInfosClassmap));
        $deleteUserSruct = $this->deleteUserStructFactory->createFromEntity(array('wsLogin' => $wsLogin,'wsPassword' => $wsPassword,'userId' => $userId));
        try {
            $response = $client->deleteUser($deleteUserSruct);
            $return = $response;
        }
        catch (\SoapFault $e) {
            $return = $e;
        }
        return $return;
    }

    /**
     * @param $url
     * @param $wsLogin
     * @param $wsPassword
     * @param $userId
     * @return \Exception|\SoapFault
     */
    public function export($url, $wsLogin, $wsPassword, $userId)
    {
        $clientInfosClassmap = array(
            'Export' => 'ExportStruct',
        );
        $client = new \SoapClient($url,array('classmap',$clientInfosClassmap));
        $exportSruct = $this->exportStructFactory->createFromEntity(array('wsLogin' => $wsLogin,'wsPassword' => $wsPassword,'userId' => $userId));
        try {
            $response = $client->export($exportSruct);
            $return = $response;
        }
        catch (\SoapFault $e) {
            $return = $e;
        }
        return $return;
    }
}
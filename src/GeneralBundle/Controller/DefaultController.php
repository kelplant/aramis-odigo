<?php

namespace GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $userBeanInfos = array(
            'activeState' => "0",
            'agentGroups' => "ga_AIX",
            'breaks' => "0",
            'calendarId' => "GENERAL",
            'ddiNumber' => "0232190924",
            'disruptionDuration' => "15",
            'email' => "fbadets@prosodie.com",
            'enable2WaysSwitch' => "true",
            'enableCallBack' => "true",
            'enableConference' => "true",
            'enableOutCall' => "true",
            'enableRecording' => "true",
            'firstName' => "Freddy",
            'languageId' => "1",
            'loginTel' => "35967",
            'name' => "arrtest",
            'password' => "toto",
            'transfertDDIAuthorized' => "true",
            'userId' => "fbad7",
            'wrapupTime' => "15",
            'level' => "1",
            'skillKeyword' => "MARKET",
            'specialty' => "1",
        );

        $userBeanWithTemplateInfos = array(
            'active' => "1",
            'odigoPhoneNumber' => "0404040404",
            'fixePhoneNumber' => "0622244545",
            'firstName' => "XavTestWs",
            'language' => "1",
            'mail' => "xavtestws@mail.fr",
            'name' => "arrtestws",
            'overloadGroup' => "true",
            'overloadTemplate' => "true",
            'password' => "passwordtest",
            'Agence' => "Aix",
            'fonction' => "CC",
            'companyExtension' => "xavarrws",
            'skillId' => "MARKET",
            'skillLevel' => "3",
            'phoneLoginPassword' => "",
            'timeZone' => "fr",
        );


        $create = $this->get('odigo.service.client')->create(
            $this->getParameter('odigo'),
            $userBeanInfos
        );
        echo "<br><br>";
        var_dump($create);
        echo "<br><br>";
        $createWithTemplate = $this->get('odigo.service.client')->createwithtemplate(
            $this->getParameter('odigo'),
            $userBeanWithTemplateInfos
        );
        echo "<br><br>";
        var_dump($createWithTemplate);
        echo "<br><br>";
//        $companyExtensionId = "cchampy";
//        $delete = $this->get('odigo.service.client')->delete(
//            $this->getParameter('odigo'),
//            $companyExtensionId
//            );

//        $export = $this->get('odigo.service.client')->export(
//            $this->getParameter('odigo'),
//            $this->getParameter('odigo_login')
//        );
//        echo "<br><br>";
//        var_dump($export);
        echo "<br><br>";
        echo "12345";

        return $this->render('GeneralBundle:Default:index.html.twig');
    }
}

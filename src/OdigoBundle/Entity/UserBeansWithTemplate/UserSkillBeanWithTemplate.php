<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:08
 */
namespace OdigoBundle\Entity\UserBeansWithTemplate;

class UserSkillBeanWithTemplate
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $id;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $label;

    /**
     * UserSkillBeanWithTemplate constructor.
     * @param string $id
     * @param string $label
     */
    public function __construct($id, $label)
    {
        $this->id = $id;
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return UserSkillBeanWithTemplate
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return UserSkillBeanWithTemplate
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }



}
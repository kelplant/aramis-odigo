<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 23/03/2016
 * Time: 01:08
 */
namespace OdigoBundle\Entity\UserBeans;

class UserSkillBean
{
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $level;
    /**
     * The skillKeyword
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $skillKeyword;
    /**
     * The specialty
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $specialty;

    /**
     * UserSkillBean constructor.
     * @param int $level
     * @param string $skillKeyword
     * @param int $specialty
     */
    public function __construct($level, $skillKeyword, $specialty)
    {
        $this->level = $level;
        $this->skillKeyword = $skillKeyword;
        $this->specialty = $specialty;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return UserSkillBean
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkillKeyword()
    {
        return $this->skillKeyword;
    }

    /**
     * @param string $skillKeyword
     * @return UserSkillBean
     */
    public function setSkillKeyword($skillKeyword)
    {
        $this->skillKeyword = $skillKeyword;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param int $specialty
     * @return UserSkillBean
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }


}
<?php


class Employee{

    private $id;
    private $name;
    private $age;
    private $dob;
    private $behave;
    private $attitude;
    private $skill;
    private $overall;

    public function __construct($name, $age, $dob)
    {
        $this->name=$name;
        $this->age=$age;
        $this->dob=$dob;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getBehave()
    {
        return $this->behave;
    }

    public function setBehave($behave)
    {
        $this->behave = $behave;
    }

    public function getAttitude()
    {
        return $this->attitude;
    }

    public function setAttitude($attitude)
    {
        $this->attitude = $attitude;
    }

    public function getSkill()
    {
        return $this->skill;
    }

    public function setSkill($skill)
    {
        $this->skill = $skill;
    }

    public function getOverall()
    {
        return $this->overall;
    }

    public function setOverall($overall)
    {
        $this->overall = $overall;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

}
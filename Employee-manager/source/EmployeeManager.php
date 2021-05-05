<?php


class EmployeeManager
{

    protected $filepath;

    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public function loadDataFile()
    {
        $dataFile = file_get_contents($this->filepath);
        return json_decode($dataFile);
    }

    public function saveDataFile($data)
    {
        $dataE = json_encode($data);
        file_put_contents($this->filepath, $dataE);
    }

    public function getAll()
    {
        $data = $this->loadDataFile();
        $employees = [];

        foreach ($data as $item) {
            $employee = new Employee($item->name,
                                     $item->age,
                                     $item->dob);
            $employee->setId($item->id);
            array_push($employees, $employee);
        }

        return $employees;
    }

    public function add($data)
    {
        $dataFile = $this->loadDataFile();
        $lastEmployee = $dataFile[count($dataFile) - 1];
        $data["id"] = $lastEmployee->id + 1;
        array_push($dataFile, $data);
        $this->saveDataFile($dataFile);
    }

    public function getEmployeeById($id){
        $data=$this->loadDataFile();
        foreach ($data as $item){
            if($id==$item->id){
                $employee = new Employee($item->name, $item->age, $item->dob);
                $employee->setId($item->id);
                return $employee;
            }
        }
    }
}
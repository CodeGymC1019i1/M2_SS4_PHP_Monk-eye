<?php


namespace Manage;


class EmployeeManager
{
    public $pathFile;

    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function readFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }

    public function saveDataToFile($employees)
    {
        try {
            $dataJson = json_encode($employees);
            file_put_contents($this->pathFile, $dataJson);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    public function getList()
    {
        $data = $this->readFile();
        $arr = [];
        foreach ($data as $item) {
            $employee = new Employee($item["firstName"],
                $item["lastName"],
                $item["birthday"],
                $item["address"],
                $item["position"]);
            array_push($arr, $employee);
        }
        return $arr;
    }

    public function add($employee)
    {
        $listEmployee = $this->readFile();
        $data = [
            "firstName" => $employee->firstName,
            "lastName" => $employee->lastName,
            "birthday" => $employee->birthday,
            "address" => $employee->address,
            "position" => $employee->position
        ];
        array_push($listEmployee, $employee);
        $this->saveDataToFile($listEmployee);

    }

    public function delete($index)
    {
        $listEmployee = $this->readFile();
        if (array_key_exists($index, $listEmployee))
            array_splice($listEmployee, $index, 1);
        $this->saveDataToFile($listEmployee);

    }

    public function findById($index)
    {
        $data = $this->readFile();
        if (array_key_exists($index, $data)) {
            $employee = new Employee($data[$index]["firstName"],
                $data[$index]["lastName"],
                $data[$index]["birthday"],
                $data[$index]["address"],
                $data[$index]["position"]);
            return $employee;
        }

    }

    public function edit($employee, $index)
    {
        $listEmployee = $this->readFile();
        $data = [
            "firstName" => $employee->firstName,
            "lastName" => $employee->lastName,
            "birthday" => $employee->birthday,
            "address" => $employee->address,
            "position" => $employee->position
        ];
        $listEmployee[$index] = $data;
        $this->saveDataToFile($listEmployee);
    }

}
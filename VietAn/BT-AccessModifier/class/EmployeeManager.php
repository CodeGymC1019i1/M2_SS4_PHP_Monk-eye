<?php


class EmployeeManager
{
    public $pathFile;

    public function __construct($pathFile)
    {
        $this->pathFile = $pathFile;
    }

    public function add($employee)
    {
        $listEmployee = $this->readFile();

        $data = [
            'firstName' => $employee->firstName,
            'lastName' => $employee->lastName,
            'birthDay' => $employee->birthday,
            'address' => $employee->address,
            'job' => $employee->job,
        ];
        array_push($listEmployee, $employee);
        $this->saveDataToFile($listEmployee);
    }

    public function readFile()
    {
        $dataJson = file_get_contents($this->pathFile);
        return json_decode($dataJson, true);
    }

    public function saveDataToFile($employee)
    {
        try {
            $dataJson = json_encode($employee);
            file_put_contents($this->pathFile, $dataJson);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($index)
    {
        $employees = $this->readFile();
        if (array_key_exists($index, $employees)) {
            array_splice($employee, $index, 1);
        }
        $this->saveDateToFile($employee);
    }

    public function getList()
    {
        $data = $this->readFile();
        $arr = [];
        foreach ($data as $item) {
            $employee = new Employees($item['firstName'],
                $item['lastName'],
                $item['birthDay'],
                $item['address'],
                $item['job']
            );
            array_push($arr, $employee);
        }
        return $arr;
    }
}
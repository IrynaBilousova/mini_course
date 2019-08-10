<?php


namespace App;

class Test
{
    public $email;
    public $avatar;
    public $currentTask;
    public $answers;
    public $points;
    public $startTime;

    function __construct($email, $avatar)
    {
        $this->email = $email;
        $this->avatar = $avatar;
        $this->currentTask = 1;
        $this->startTime = time();
        $this->points = 0;
    }


    function checkTask2()
    {
        if (!isset($this->answers['task2']['sum'])) return 0;

        return intval(intval($this->answers['task2']['num1']) + intval($this->answers['task2']['num2'])
            === intval($this->answers['task2']['sum']));
    }

    function checkTask3()
    {
        return intval(!isset($this->answers['task3']['visualBasic'] ) && count($this->answers['task3']));
    }

    function checkTask4()
    {
        if (!isset($this->answers['task4']['day'])) return 0;

        return intval(intval($this->answers['task4']['day']) === intval(date('w')));

    }

    function finish()
    {
        $this->points =  1 + $this->checkTask2() + $this->checkTask3() + $this->checkTask4();

        $result = new Result();

        $result->email = $this->email;
        $result->avatar = $this->avatar;
        $result->seconds = time() - $this->startTime;
        $result->points = $this->points;

        $result->save();

        return $result->getAttributes();
    }
}

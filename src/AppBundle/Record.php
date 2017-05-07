<?php

namespace AppBundle;


class Record
{
    var $id;
    var $date;
    var $header;

    /**
     * Record constructor.
     * @param $header
     */
    public function __construct($id, $header)
    {
        $this->id = $id;
        $this->date = $this->generateDate();
        $this->header = $header;
    }

    /**
     * Function generates fake ID
     * @return int
     */
    private function generateId()
    {
        return rand(1, 100);
    }

    /**
     * Function generates fake date
     * @return string
     */
    private function generateDate()
    {
        $day = rand(1, 30);
        $month = rand(1, 12);
        $year = rand(2000, 2017);
        return $day . "/" . $month . "/" . $year;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

}
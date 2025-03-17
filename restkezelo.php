<?php

class restkezelo
{
    private $httpversion ="HTTP/1.1";

    public function sethttpFejlec($statuskod)
    {
        $statusuzenet =  $this->gethttpStatusUzenet($statuskod);
        header($this->httpVersion . " ". $statuskod
        . " " . $statusuzenet)
        header("Content-Type:Appliation/json; charset=utf-8");
    }

    public function gethttpStatusUzenet($statuskod)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found'
        );
        return($httpStatus[$statuskod])
    }
}
?>
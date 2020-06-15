<?php

class DB
{
    private $server = "hcm4e9frmbwfez47.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "fg50iy6ghhy58wsx";
    private $pwd = "p8330fkwj27gaiif";
    private $database = "kz46l2erzjmr1run";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}
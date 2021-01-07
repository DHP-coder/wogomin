<?php
    class DB{
        public $con;
        protected $serverName = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "wogomin";

        function __construct()
        {
            $this->con = mysqli_connect($this->serverName, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
?>
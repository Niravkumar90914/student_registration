<?php
/*DATABASE CONTROLLER ; CREATED BY NIRAV PATEL  27 OCT 2019 */

class DBController
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "student_registration";
    private $conn;
    public $error = "";

    function __construct()
    {   
        $connOk = $this->connectDB();
        if ($connOk) {
            $this->conn = $connOk;
        } else {
           $this->error = "Database connection error: " . mysqli_connect_error();
          }
    }

    function __destruct()
    {
        mysqli_close($this->conn);     
    }

    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($conn) {
            return $conn;
        } else {
            return false;
        }
       
    }

    //GETTING RESULT FROM DATABASE TABLE
    function getDataQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        if (!empty($data)) {
            return $data;
        } else {
            return false;
        }
    }

    //EXECUTE QUERY FOR INSERT DATA TO TABLE ADN RETURN LAST INSERTED ID
    function insertDataQuery($query)
    {
        if (mysqli_query($this->conn, $query)) {
            $last_insert_id = mysqli_insert_id($this->conn);
            return $last_insert_id;
        } else {
            return false;
        }
    }

    // EXECUTE QUERY FOR DELETE AND UPDATE DATA
    function updateDeleteDataQuery($query)
    {
        if (mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return false;
        }
    }

    //INSERT DATA FUNCTION
    function insertData($query)
    {
        $result = $this->insertDataQuery($query);//execute query return last insert id.
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    //INSERT ADN DELETE DATA FUNCTION
    function updateDeleteData($query) {
        if ($this->updateDeleteDataQuery($query)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
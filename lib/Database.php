
<?php
class Database{
     public $dbhost = DB_HOST;
     public $dbuser = DB_USER;
     public $dbname = DB_NAME;
     public $dbpass = DB_PASS;

     public $link;
     public $error;

    /**
     * Database constructor.
     */
    public function __construct()
    {
      $this->connect();
    }

    /**
     * connection to database
     */
    private function connect(){
        $this->link = new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
        if (!$this->link){
            $this->error="connection failed".$this->link->connect_error;
        }
    }

    /**
     * Select function
     *
     */
    public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if ($result->num_rows>0){
            return $result;
        }
        else{
            return false;
        }
    }

    /**
     * insert function
     */
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        //validate insert

        if ($insert_row) {
            header("Location:index.php?msg=".urlencode('Record Added'));
            exit();
        } else {
            die('Error :('.$this->link->errno.')'.$this->link->error);
        }

    }

    /**
     * update function
     */
    public function update($query)
    {
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        //validate update

        if ($update_row) {
            header("Location:index.php?msg=".urlencode('Record Updated'));
            exit();
        } else {
            die('Error :('.$this->link->errno.')'.$this->link->error);
        }

    }

    /**
     * delete function
     */
    public function delete($query)
    {
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        //validate delete

        if ($delete_row) {
            header("Location:index.php?msg=".urlencode('Record Deleted'));
            exit();
        } else {
            die('Error :('.$this->link->errno.')'.$this->link->error);
        }

    }

}
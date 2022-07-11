<?php





class lerndb {
    private $host;
    private $name;
    private $login;
    private $pass;
    public $DB;

    function __construct($host, $name, $login, $pass) {
        try {
            $this->DB = new PDO('pgsql:host='.$host.';port=5432;dbname='.$name.';user='.$login.';password='.$pass);
         } catch(PDOexception $e) {
            $this->db = $e->getMessage();
        }
    }

    
    public function query($qstring) {
        $sth = $this->DB->prepare($qstring);
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        print_r($array);
    }
}


?>
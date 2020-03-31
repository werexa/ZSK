<?php
class Devalien{

    public $mysql;

    function __construct()
    {
        $this->connect();
    }


    function connect()
    {
    //Łączenie z bazą danych
    $servername = "localhost";
    $username = "root";
    $password = "";
    $my_db    = "devalien";
    $port = '3306'; //domyślnie jest to port 3306
    
    //$pdo = new PDO('mysql:host='.$servername.';dbname='.$my_db.';port='.$port, $username, $password );
    $mysqli = new mysqli($servername, $username, $password , $my_db);
    
    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    $mysqli->set_charset("utf8");

    $this->mysql = $mysqli;
    
    //end Łączenie z bazą danych
    }

    public function getCategories(){
        $categories = $this->mysql->query("SELECT category_id, category_name, category_en FROM dev_categories");
        return $categories;
    }

    public function getUserPackages($userid){
        return $this->mysql->query("SELECT `pack_id`,`pack_name` FROM `dev_word_packages` where `pack_author` = $userid");
    }
    public function getCategory($categoryid)
    {
        return $this->mysql->query("SELECT category_name, category_en  FROM dev_categories WHERE category_id = $categoryid")->fetch_row();
    }

    public function getUserWords($userid)
    {
        return $this->mysql->query("SELECT e.word_en wen, p.word_pl epl, w.word_lvl elvl, c.category_name cn, pc.pack_name pn
                        FROM `dev_words` w 
                        inner join dev_word_pl p  
                        on p.word_id = w.word_pl_id 
                        inner join dev_word_en e 
                        on e.word_id = w.`word_en_id`
                        inner join dev_word_packages pc
                        on pc.pack_id = w.pack_id
                        inner join dev_categories c 
                        on c.category_id = w.word_category
                        WHERE pc.pack_author = $userid");
    }

    public function getRandUnionCategoryWords($category)
    {
        return $this->mysql->query("SELECT w.`word_en_id` id , pl.word_pl word
                            FROM `dev_words` w 
                            inner join dev_word_pl pl 
                            on w.word_pl_id = pl.word_id
                            where `word_category` = $category
                            UNION all
                            SELECT w.word_en_id , en.word_en
                            from dev_words w
                            inner join dev_word_en en 
                            on w.word_en_id = en.word_id
                            where `word_category` = $category
                            ORDER by Rand() limit 20");
    }
    
    public function getRandCategoryWords($category,$limit = "")
    {
        if($limit!== "")
        {
            $limit = "LIMIT $limit";
        }
        return $this->mysql->query("SELECT
        w.`word_pl_id` as word_pl_id,
        pl.word_pl as word_pl,
        w.`word_en_id` as word_en_id,
        en.word_en as word_en
        FROM
        `dev_words` w
        inner join dev_word_pl pl on w.`word_pl_id` = pl.`word_id`
        inner join dev_word_en en on w.`word_en_id` = en.word_id
        where word_category = $category
        ORDER BY RAND() $limit");
    }

   public function getUserFavorite($user)
   {
      return $this->mysql->query("SELECT word_en_id FROM dev_users_favorite where dev_user_id = $user");
   }

  /* public function checkIfExistFavorite($user,$wordid)
   {
        return $this->mysql->query("SELECT 1 FROM dev_users_favorite where dev_user_id = $user and where word_en_id = $wordid")->fetch_row();
   }*/

   public function insertUserFavorite($user,$wordid)
   {
        return $this->mysql->query("INSERT INTO dev_users_favorite(dev_user_id,word_en_id) SELECT $user, $wordid WHERE NOT EXISTS ( SELECT * FROM dev_users_favorite where dev_user_id = $user and word_en_id = $wordid )");
   }
}



?>
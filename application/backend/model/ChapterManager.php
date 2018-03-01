<?php
require_once ('../frontend/model/Database.php');

class ChapterManager extends Database
{   




public function getallChapters()
    {
        $db = $this->dbConnect();
        $allChapters=$db->query('SELECT id, title, author, content, DATE_FORMAT(date_created, \'%d/%m/%Y\') AS date_created_fr FROM chapters ORDER BY date_created_fr ASC');
        return $allChapters;     
    }
}

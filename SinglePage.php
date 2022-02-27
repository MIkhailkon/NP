<?php

class SinglePage extends Page
{
    public function __construct($title = '')
    {
        parent::__construct($title);
    }

    private function getContentFromDB($id){
        $query = 'SELECT content FROM NEWS WHERE id = ' . $id;
        $result = $dbh->query($query);
        $row = $result->fetch();

        return $row[0];
    }

    public function printContent(array $id)
    {
        echo $this->getTitle();
        echo 'Page body';
        echo $this->getContentFromDB($id[0]);
    }
}
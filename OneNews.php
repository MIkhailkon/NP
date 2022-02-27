<?php

class OneNews
{
    private $dataNews;

    public function __construct(int $id)
    {
        $query = 'SELECT * FROM NEWS WHERE id = ' . $id;
        $result = $dbh->query($query);
        while ($row = $result->fetch()) {
            $this->dataNews = $row;
        }
    }

    public function getTitle()
    {
        return $this->dataNews['title'];
    }

    public function getContent()
    {
        return $this->dataNews['content'];
    }

    public function getAuthor()
    {
        return $this->dataNews['author'];
    }

    public function getDate()
    {
        return date("m-d-Y", $this->dataNews['created_at']);
    }
}
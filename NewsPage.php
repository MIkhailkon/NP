<?php

class NewsPage extends Page
{

    public function __construct(string $title = '')
    {
        parent::__construct($title);
    }

    private function getOneNews (int $id){
        $news = new OneNews($id);

        $pageContent = '';
        $pageContent .= $news->getTitle();
        $pageContent .= $news->getContent();
        $pageContent .= $news->getAuthor();
        $pageContent .= $news->getDate();

        return $pageContent;
    }

    private function getNews(array $ids){
        $content = '';

        foreach ($ids as $id){
            $content .= $this->getOneNews($id) . PHP_EOL;
        }
        return $content;
    }

    public function printContent($ids)
    {
        echo $this->getTitle();
        echo $this->getNews($ids);
    }

}
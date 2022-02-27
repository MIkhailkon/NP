<?php

abstract class Page
{
    private string $title;

    public function __construct(string $title = '')
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    abstract public function printContent(array $ids);
}
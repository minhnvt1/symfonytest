<?php
namespace M3e\HelloBundle\Entity;

class Search
{
    protected $query;

    public function getQuery()
    {
        return $this->query;
    }
    public function setQuery($query)
    {
        $this->query = $query;
    }

}
<?php

namespace Admin\MvcOop\Models;

use Admin\MvcOop\Commons\Model;

class News extends Model
{
    protected string $tableName = 'news';

    public function all()
    {
        return $this->queryBuilder
        ->select('n.id', 'n.title', 'n.image', 'n.content', 'n.id_tag', 'n.created_at', 'n.updated_at', 't.name')
        ->from($this->tableName, 'n')
        ->innerJoin('n', 'tags', 't', 'n.id_tag = t.id')
        ->orderBy('id', 'desc')
        ->fetchAllAssociative();
    }

    public function suggest()
    {
        $suggest = new Model();
        return $suggest->queryBuilder
        ->select('n.id', 'n.title', 'n.image', 'n.content', 'n.id_tag', 'n.created_at', 'n.updated_at', 't.name')
        ->from($this->tableName, 'n')
        ->innerJoin('n', 'tags', 't', 'n.id_tag = t.id')
        ->orderBy('id', 'asc')
        ->setMaxResults(1)
        ->fetchAllAssociative();
    }

    public function lastest()
    {
        $lastest = new Model();
        return $lastest->queryBuilder
        ->select('n.id', 'n.title', 'n.image', 'n.content', 'n.id_tag', 'n.created_at', 'n.updated_at', 't.name')
        ->from($this->tableName, 'n')
        ->innerJoin('n', 'tags', 't', 'n.id_tag = t.id')
        ->orderBy('updated_at', 'desc')
        ->setMaxResults(1)
        ->fetchAllAssociative();
    }

    public function trend()
    {
        $trend = new Model();
        return $trend->queryBuilder
        ->select('n.id', 'n.title', 'n.image', 'n.content', 'n.id_tag', 'n.created_at', 'n.updated_at', 't.name')
        ->from($this->tableName, 'n')
        ->innerJoin('n', 'tags', 't', 'n.id_tag = t.id')
        ->orderBy('updated_at', 'desc')
        ->setMaxResults(3)
        ->fetchAllAssociative();
    }
}
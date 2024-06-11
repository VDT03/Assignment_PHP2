<?php

namespace Admin\MvcOop\Models;

use Admin\MvcOop\Commons\Model;

class User extends Model
{
    protected string $tableName = 'users';

    public function all()
    {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->orderBy('id_user', 'desc')
        ->fetchAllAssociative();
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id_user = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }

    public function update($id, array $data)
    {
        if (!empty($data)) {
            $query = $this->queryBuilder->update($this->tableName);

            // $data = [
            //     'name' => 'Ahihi',
            //     'email' => 'keke@gnai.com',
            //     'address' => 'HN'
            // ];

            $index = 0;
            foreach($data as $key => $value) {
                $query->set($key, '?')->setParameter($index, $value);

                ++$index;
            }

            $query->where('id_user = ?')
                ->setParameter(count($data), $id)
                ->executeQuery();

            return true;
        }
        
        return false;
    }

    public function delete($id)
    {        
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id_user = ?')
            ->setParameter(0, $id)
            ->executeQuery();
    }

    public function findByEmail($email)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('email = ?')
            ->setParameter(0, $email)
            ->fetchAssociative();
    }
}
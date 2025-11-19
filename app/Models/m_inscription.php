<?php

namespace Models;

use CodeIgniter\Model;

class m_inscription extends Model
{
    function ajoutUser(array $infoUser){
        $db = db_connect();
        try {
            $db->table('users')
                ->insert($infoUser);
            return $db->affectedRows();
        }catch (DatabaseException $e){
            $codeError = $e->getCode();
            return $codeError;
        }
    }
}
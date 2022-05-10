<?php

namespace src\handlers;

use \src\models\Post;
use \src\models\User;
use \src\models\UserRelation;

class PostHandler
{

    public static function addPost($idUser, $type, $body)
    {
        $body = trim($body);

        if (!empty($idUser) && !empty($body)) {

            Post::insert([
                'id_user' => $idUser,
                'type' => $type,
                'created_at' => date('Y-m-d H:i:s'),
                'body' => $body
            ])->execute();
        }
    }

    public static function getHomeFeed($idUser) {
        // 1. Pegar lista de usuários que EU sigo
        $userList = UserRelation::select()->where('user_from', $idUser)->get();
        $users = [];
        foreach($userList as $userItem) {
            $users[] = $userItem['user_to'];
        }
        $users[] = $idUser;

        print_r($users);

        // 2. Pegar os posts dessa galera ordenado pela data.
        // 3. Transformar o resultado em objetos dos models
        // 4. Preencher as informações adicionais no post
        // 5. Retornar o resultado
    }
}

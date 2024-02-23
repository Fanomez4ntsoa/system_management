<?php

namespace App\Services\Admin;

use App\Contracts\Admin\AdminServiceInterface;
use App\Models\User;
use Exception;

class AdminService implements AdminServiceInterface {
    /**
     * Creation d'un utilisateur
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $password
     * @return User
     */
    public function create(string $firstname, string $lastname, string $email, string $password) : User
    {
        $userExist = User::where('email', $email)->exists();
        if($userExist){
            return throw new Exception('Utilisateur déjà existant');
        }

        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = bcrypt($password);

        if($user->save()) {
            return $user;
        } else {
            return throw new Exception('Une s\'est produite dans la création d\'un utilisateur');
        }
    }
}
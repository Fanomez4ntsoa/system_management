<?php

namespace App\Contracts\Admin;

use App\Models\User;

interface AdminServiceInterface 
{
    /**
     * Creation d'un utilisateur
     *
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $password
     * @return User
     */
    public function create(string $firstname, string $lastname, string $email, string $password): User;    
}
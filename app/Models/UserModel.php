<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fname', 'lname', 'email', 'password', 'pic'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $validationRules = [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|valid_email|is_unique[user.email]',
        'password' => 'required',
        'pic' => 'required'
    ];

    protected $validationMessages = [
        'fname' => 'You must Enter First Name',
        'lname' => 'You must enter last Name',
        'email' => 'You must enter valid and unique email',
        'password' => 'You must enter the Password',
        'pic' => 'You Must Select The Pic'
    ];

    public function getUser()
    {
        return $this->findAll();
    }


}

?>
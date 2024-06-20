<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_m extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['username', 'password', 'level'];
}

<?php

/**
 * Modèle de la table User
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'User';
    protected $primaryKey = 'ID';
}

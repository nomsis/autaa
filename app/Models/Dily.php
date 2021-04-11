<?php namespace App\Models;

use CodeIgniter\Model;

class Dily extends Model
{
    
    protected $table = 'nahradni_dily';
    protected $allowedFields = ['nazev', 'cena', 'sklad'];
    

    
}
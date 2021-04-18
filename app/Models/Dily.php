<?php namespace App\Models;

use CodeIgniter\Model;

class Dily extends Model
{
    
    protected $table = 'nahradni_dily';
    protected $primaryKey = 'iddilu';
    protected $allowedFields = ['nazev', 'cena', 'sklad','iddilu'];
    
    
    
}
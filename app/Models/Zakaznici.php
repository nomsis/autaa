<?php namespace App\Models;

use CodeIgniter\Model;

class Zakaznici extends Model
{
    
    protected $table = 'majitele';
    protected $primaryKey = 'idmajitele';
    protected $allowedFields = ['jmeno', 'prijmeni', 'adresa', 'telefon', 'email', 'idmajitele'];
    

    
}
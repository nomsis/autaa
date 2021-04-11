<?php namespace App\Models;

use CodeIgniter\Model;

class Zamestnanci extends Model
{
    
    protected $table = 'zamestnanci';
    protected $allowedFields = ['jmeno', 'prijmeni', 'osobnicislo'];
    

    
}
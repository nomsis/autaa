<?php namespace App\Models;

use CodeIgniter\Model;

class Zamestnanci extends Model
{
    
    protected $table = 'zamestnanci';
    protected $primaryKey = 'osobnicislo';
    protected $allowedFields = ['jmeno', 'prijmeni', 'osobnicislo'];
    

    
}
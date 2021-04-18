<?php namespace App\Models;

use CodeIgniter\Model;

class Opravy extends Model
{
    
    protected $table = 'opravy';
    protected $primaryKey = 'automobily_idautomobily';
    protected $allowedFields = ['automobily_idautomobily', 'zamestnanci_osobnicislo', 'nahradni_dily_iddilu'];
    
    
    
}

//'zamestnanci_osobnicislo', 'nahradni_dily_iddilu''zamestnanci_osobnicislo', 'nahradni_dily_iddilu'
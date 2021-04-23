<?php namespace App\Models;

use CodeIgniter\Model;

class Opravy extends Model
{
    
    protected $table = 'opravy';
    protected $primaryKey = 'id_opravy';
    protected $allowedFields = ['automobily_idautomobily', 'zamestananci_osobnicislo', 'nahradni_dily_iddilu', 'id_opravy'];
    
    
    
}

//'zamestnanci_osobnicislo', 'nahradni_dily_iddilu''zamestnanci_osobnicislo', 'nahradni_dily_iddilu'
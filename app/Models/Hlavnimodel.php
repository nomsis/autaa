<?php namespace App\Models;

use CodeIgniter\Model;

class Hlavnimodel extends Model
{
    
    protected $table = 'automobily';
    protected $primaryKey = 'idautomobily';
    protected $allowedFields = ['registracni_znacka', 'vyrobce', 'typ_voze', 'rok_vyroby', 'obsah_motoru', 'prevodovka','idautomobily'];
    
    

    
}
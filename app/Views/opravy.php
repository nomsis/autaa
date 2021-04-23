<?php $db = \Config\Database::connect(); 

?>

<?php
$query   = $db->query('SELECT id_opravy, automobily.vyrobce as automobily, zamestnanci.prijmeni as zamestnanci, nahradni_dily.nazev as dily FROM opravy inner join automobily on opravy.automobily_idautomobily = automobily.idautomobily inner join zamestnanci on opravy.zamestananci_osobnicislo = zamestnanci.osobnicislo inner join nahradni_dily on opravy.nahradni_dily_iddilu = nahradni_dily.iddilu');
$results = $query->getResultArray();
?>
<div class="container mt-4">
<div class="row">
<div class ="col-md-12">
<div class ="card">
<div class="card-header">
  <h5>Opravy
    <a href="<?= base_url('pridatOpravu') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
  </h5>
</div>
<div class="card-body">
<table class="table table-bordered" id="users-list">
<thead>
  <tr>
      <th scope="col">Oprava</th>
      <th scope="col">Použité díly</th>
      <th scope="col">Zaměstnanec</th>
     
  </tr>
</thead>
<tbody>
    <?php foreach($results as $o): ?>
      <tr>
          
          <td>
              <?php echo $o['automobily'];?>       
          </td>
            
          <td> 
              <?php echo $o['dily']; ?>
          </td>
            
          <td> 
              <?php echo $o['zamestnanci']; ?>
          </td>
          
            
          <td>
              <a href="<?= base_url('upravaOpravy/'.$o['id_opravy'])?>" class="btn btn-primary btn-sm">Upravit</a> 
              <a href="<?= base_url('smazatOpravu/'.$o['id_opravy'])?>" class="btn btn-primary btn-sm">Vymazat</a> 
          </td>
      </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>


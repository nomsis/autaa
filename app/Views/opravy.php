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
    <?php foreach($opravy as $o): ?>
      <tr>
          
          <td>
              <?php echo $o['automobily_idautomobily'];?>       
          </td>
            
          <td> 
              <?php echo $o['nahradni_dily_iddilu']; ?>
          </td>
            
          <td> 
              <?php echo $o['zamestananci_osobnicislo']; ?>
          </td>
          
            
          <td>
              <a href="<?= base_url('upravaOpravy/'.$o['automobily_idautomobily'])?>" class="btn btn-primary btn-sm">Upravit</a> 
              <a href="<?= base_url('smazatOpravu/'.$o['automobily_idautomobily'])?>" class="btn btn-primary btn-sm">Vymazat</a> 
          </td>
      </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>


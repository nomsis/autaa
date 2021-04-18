<div class="container mt-4">
<div class="row">
<div class ="col-md-12">
<div class ="card">
<div class="card-header">
  <h5>Díly na skladě
    <a href="<?= base_url('pridatDil') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
  </h5>
</div>
<div class="card-body">
<table class="table table-bordered" id="users-list">
<thead>
  <tr>
      <th scope="col">Název</th>
      <th scope="col">Cena za kus</th>
      <th scope="col">Množství na skladě</th>
      <th scope="col">Úprava</th>    
  </tr>
</thead>
<tbody>
    <?php foreach($dily as $d): ?>
      <tr>
          
          <td>
              <?php echo $d['nazev'];?>       
          </td>
            
          <td> 
              <?php echo $d['cena']; ?>
          </td>
            
          <td> 
              <?php echo $d['sklad']; ?>
          </td>
            
          <td>
              <a href="<?= base_url('upravaDilu/'.$d['iddilu'])?>" class="btn btn-primary btn-sm">Upravit</a> 
              <a href="<?= base_url('smazatDil/'.$d['iddilu'])?>" class="btn btn-primary btn-sm">Vymazat</a> 
          </td>
      </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>


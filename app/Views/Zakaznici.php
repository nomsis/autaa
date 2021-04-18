<div class="container mt-4">
<div class="row">
<div class ="col-md-12">
<div class ="card">
<div class="card-header">
  <h5>Zákazníci
    <a href="<?= base_url('pridatZakaznika') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
  </h5>
</div>
<div class="container obsah">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Email</th>
      <th scope="col">Telefon</th>
      <th scope="col">Adresa</th>
      <th scope="col">Úprava</th>  
      
    </tr>
  </thead>
  <tbody>
     <?php foreach($majitele as $z): ?>
      <tr>
            <td>
              <?php echo $z['jmeno'];?>       
            </td>
            <td> 
                <?php echo $z['prijmeni']; ?>
            </td>
            <td> 
                <?php echo $z['email']; ?>
            </td>
            <td> 
                <?php echo $z['telefon']; ?>
            </td>
            <td> 
                <?php echo $z['adresa']; ?>
            </td>
            <td>
              <a href="<?= base_url('upravaZakaznika/'.$z['idmajitele'])?>" class="btn btn-primary btn-sm">Upravit</a> 
              <a href="<?= base_url('smazatZakaznika/'.$z['idmajitele'])?>" class="btn btn-primary btn-sm">Vymazat</a> 
          </td>
          
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
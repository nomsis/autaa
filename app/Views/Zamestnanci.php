<div class="container mt-4">
<div class="row">
<div class ="col-md-12">
<div class ="card">
<div class="card-header">
  <h5>Zaměstanci
    <a href="<?= base_url('pridatZamestnance') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
  </h5>
</div>
<div class="container obsah">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Jméno</th>
      <th scope="col">Příjmení</th>
      <th scope="col">Osobní číslo</th>
      <th scope="col">Úprava</th>  
      

    </tr>
  </thead>
  <tbody>
     <?php foreach($zamestnanci as $z): ?>
      <tr>
            <td>
              <?php echo $z['jmeno'];?>       
            </td>
            <td> 
                <?php echo $z['prijmeni']; ?>
            </td>
            <td> 
                <?php echo $z['osobnicislo']; ?>
            </td>
            <td>
              <a href="<?= base_url('upravaZamestnance/'.$z['osobnicislo'])?>" class="btn btn-primary btn-sm">Upravit</a> 
              <a href="<?= base_url('smazatZamestnance/'.$z['osobnicislo'])?>" class="btn btn-primary btn-sm">Vymazat</a> 
          </td>

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>
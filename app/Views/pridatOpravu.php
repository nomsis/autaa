<?php $db = \Config\Database::connect(); ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat Opravu
                        <a href="<?= base_url('opravy') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatOpravy') ?>" method="POST">
                    <label>Auto</label>

            <div class="info">
<select class="form-control" name="automobily_idautomobily" id="automobily_idautomobily">
<?php
$query = $db->query("SELECT * FROM automobily");
foreach ($query->getResult() as $row)
{ ?> 
<option value=<?php echo $row->idautomobily?>> <?php echo $row->vyrobce;}?></option>
</select>



<label>Díly </label>
<select class="form-control" name="nahradni_dily_iddilu" id="nahradni_dily_iddilu">
<?php
$query = $db->query("SELECT * FROM nahradni_dily");
foreach ($query->getResult() as $row)
{ ?> 
<option value=<?php echo $row->iddilu?>> <?php echo $row->nazev;}?></option>
</select>

</div>

<label>Zaměstnanec</label>
<select class="form-control" name="zamestananci_osobnicislo" id="zamestananci_osobnicislo">
<?php
$query = $db->query("SELECT * FROM zamestnanci");
foreach ($query->getResult() as $row)
{ ?> 
<option value=<?php echo $row->osobnicislo?>> <?php echo $row->prijmeni;}?></option>
</select>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit Zaměstnance
                        <a href="<?= base_url('Zamestnanci') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuZamestnance/'.$zamestnanci['osobnicislo']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Jméno</label>
                            <input type="text" name="jmeno" value="<?= $zamestnanci['jmeno'] ?>" class="form-control" placeholder="Napiš název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Prijmeni</label>
                            <input type="text" name="prijmeni" value="<?= $zamestnanci['prijmeni'] ?>" class="form-control" placeholder="Cena" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Osobní Číslo</label>
                            <input type="text" name="osobnicislo" value="<?= $zamestnanci['osobnicislo'] ?>" class="form-control" placeholder="Na skladu" required>
                        </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
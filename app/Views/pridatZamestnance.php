<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat Zaměstnance
                        <a href="<?= base_url('Zamestnanci') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatZamestnance') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Jméno</label>
                            <input type="text" name="jmeno" class="form-control" placeholder="jmeno" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Příjmení</label>
                            <input type="text" name="prijmeni" class="form-control" placeholder="prijmeni" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>osobnicislo</label>
                            <input type="text" name="osobnicislo" class="form-control" placeholder="osobnicislo" required>
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
                
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
                    <div class="form-group mb-2">
                            <label>Auto</label>
                            <input type="text" name="automobily_idautomobily" class="form-control" placeholder="Název automobilu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Díly</label>
                            <input type="text" name="nahradni_dily_iddilu" class="form-control" placeholder="Použité díly" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Zaměstnanec</label>
                            <input type="text" name="zamestananci_osobnicislo" class="form-control" placeholder="Osobní číslo zaměstnance" required>
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
                
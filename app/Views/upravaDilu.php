<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit díly
                        <a href="<?= base_url('dily') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuDilu/'.$nahradni_dily['iddilu']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Název dílu</label>
                            <input type="text" name="nazev" value="<?= $nahradni_dily['nazev'] ?>" class="form-control" placeholder="Napiš název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Cena</label>
                            <input type="text" name="cena" value="<?= $nahradni_dily['cena'] ?>" class="form-control" placeholder="Cena" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Na skladu</label>
                            <input type="text" name="sklad" value="<?= $nahradni_dily['sklad'] ?>" class="form-control" placeholder="Na skladu" required>
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
                
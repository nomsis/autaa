<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Oprava
                        <a href="<?= base_url('oprava') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuOpravy/'.$opravy['automobily_idautomobily']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Název dílu</label>
                            <input type="text" name="nahradni_dily_iddilu" value="<?= $opravy['nahradni_dily_iddilu'] ?>" class="form-control" placeholder="Napiš název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Cena</label>
                            <input type="text" name="zamestananci_osobnicislo" value="<?= $opravy['zamestananci_osobnicislo'] ?>" class="form-control" placeholder="Cena" required>
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
                
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit Zákazníka
                        <a href="<?= base_url('Zakaznici') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuZakaznika/'.$majitele['idmajitele']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Jméno Zákazníka</label>
                            <input type="text" name="jmeno" value="<?= $majitele['jmeno'] ?>" class="form-control" placeholder="Napiš název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Prijmeni</label>
                            <input type="text" name="prijmeni" value="<?= $majitele['prijmeni'] ?>" class="form-control" placeholder="Cena" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Adresa</label>
                            <input type="text" name="adresa" value="<?= $majitele['adresa'] ?>" class="form-control" placeholder="Na skladu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Telefon</label>
                            <input type="text" name="telefon" value="<?= $majitele['telefon'] ?>" class="form-control" placeholder="Na skladu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Email</label>
                            <input type="text" name="email" value="<?= $majitele['email'] ?>" class="form-control" placeholder="Na skladu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Automobily_id</label>
                            <input type="text" name="automobily_idautomobily" value="<?= $majitele['automobily_idautomobily'] ?>" class="form-control" placeholder="Na skladu" required>
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
                
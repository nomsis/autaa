<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat Zákazníka
                        <a href="<?= base_url('Zakaznici') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatZakaznika') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Jméno zákazníka</label>
                            <input type="text" name="jmeno" class="form-control" placeholder="Jméno" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Příjmení</label>
                            <input type="text" name="prijmeni" class="form-control" placeholder="Cena" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Adresa</label>
                            <input type="text" name="adresa" class="form-control" placeholder="Adresa" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Telefon</label>
                            <input type="text" name="telefon" class="form-control" placeholder="Telefon" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Automobily_id</label>
                            <input type="text" name="automobily_idautomobily" class="form-control" placeholder="automobil_id" required>
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
                
<div class="container mt-4">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">

<form method="post" action='<?php base_url(); ?>/Home/zapis'>
    <div class="form-group">
        <label>Výrobce vozu</label>
        <input type="text" name='vyrobce' class="form-control">
        <label>Typ vozu</label>
        <input type="text" name='typ_vozu' class="form-control">
        <label>Registrační značka</label>
        <input type="text" name='registracni_znacka' class="form-control">
        <label>Rok výroby</label>
        <input type="text" name='rok_vyroby' class="form-control">
        <label> Motor</label>
        <input type="text" name='obsah_motoru' class="form-control">
        <label>Převodovka</label>
        <input type="text" name='prevodovka' class="form-control">
        <button type="submit">Závazně objednat</button>
    </div>
</form>
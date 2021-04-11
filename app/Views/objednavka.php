<style>
.obsah{
    float: center;
    width: 50%;
    height: 85%;
    margin-left: 25%;
    
}
button{
    background-color: #dc3545;
    color: white;
    text-align: center;
    border: 4px solid #dc3545;
    border-radius: 20px;
    padding: 20px 30px;
    transition-duration: 1s;
    
}
</style>
<div class="obsah">
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
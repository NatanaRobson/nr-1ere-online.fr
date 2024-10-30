<?php
// Inclusion du head
    include "./fragments/head.php";
// Inclusion des variables Guerlain
    include "./Variables/guerlain.php";
// Inclusion des fonctions Guerlain
    include "./fonctions/guerlain.php";
    // $num_btk = 0;
    // var_dump('Liste du staff : '.Boutique::get_ls()[$num_btk]->get_nom(), Boutique::get_staff($num_btk));

?>
<h1>Projet d'Yvon</h1>
<div class="form commande">
    <form action="">
        <label for="btk">Choisir votre boutique :</label>
        <select name="boutiques" id="selector_btk">
            <option value=""></option> 
            <?php
            foreach(Boutique::get_ls() as $btk)
            {   
                $nom = $btk->get_nom();
                $num = array_search($btk, Boutique::get_ls());
                echo '<option value='.$num.'>'.$nom.'</option>';
            }
            ?>
        </select>
        <span id="btk_choisie">...</span>
        <br>
        <br>
        <label for="staff">Sélectionner votre profil : </label>
        <select name="selector_profil" id="selector_profil">
            <?php
            $num_btk = array_search($btk, Boutique::get_ls());
            $staff = Boutique::get_staff($num_btk);
            $options = generate_staff_html_options($staff);
            foreach($personnel1 as $e)
            {
                echo '<option value = '.$e->get_np().' class = "'.$e->get_details()["num_btk"].'">'.$e->get_np().'</option>';
            }
            ?>
        </select>
    </form>
</div>

<!-- Déploiement du script final -->
<script src="./scripts/guerlain.js">var ls_options = <?=$options?></script>
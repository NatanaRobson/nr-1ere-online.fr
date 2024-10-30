<?php
// *Ajout de liste d'objets Peronne au staff des boutiques
Personne::ajout_pers($personnel1);
$personnel = Personne::$ls_personnel;
foreach($personnel as $e){
    Boutique::add_staff($e->get_details()['num_btk'],$e);
}

// *Générer la liste du staff
function generate_staff_html_options(array $t, $options ='')
{
    foreach($t as $p)
    {
        if($p instanceof Personne)
        {
            $options .= '<option value = '.$p->get_nom().'>'.$p->get_nom().' '.$p->get_prenom().'</option>';
        }
    }
    return $options;
}
?>
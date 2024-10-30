<?php
// Les boutiques
new Boutique('Chp élysé', '1 bld camp élysé 75 000 Paris');
new Boutique('Chp de Mars', '1 bld cp Mars 77 000 Paris');
new Boutique('Etoile', '11 rd pt de l\'étoile 90 000 Paris');
new Boutique('Victoire', '7 bd de la liberté 75 000 Paris');
// Les employés
$Yvon = new Personne('RZKTN','Yvon',['num_btk'  => 0]);
$Tiana = new Personne('RZKTN', 'Tiana',['num_btk'  => 0]);
$Natana = new Personne('RBS', 'Natana',['num_btk'  => 0]);
$Yari = new Personne('RZKTN','Yari',['num_btk'  => 1]);
$Kevin = new Personne('RZKTN', 'Kévin',['num_btk'  => 1]);
$Rova = new Personne('RBS', 'Rova',['num_btk'  => 1]);
$Benjamin = new Personne('RZKTN','Benjamin',['num_btk'  => 2]);
$Romy = new Personne('RZKTN', 'Romy',['num_btk'  => 2]);
$Benja = new Personne('RBS', 'Benja',['num_btk'  => 2]);
$Jasy = new Personne('RBS','Jasy',['num_btk'  => 3]);
$Aimee = new Personne('RBS', 'Aimée',['num_btk'  => 3]);
$Gael = new Personne('RBS', 'Gaël',['num_btk'  => 3]);
$personnel1 = [$Yvon,$Tiana,$Natana,$Yari,$Kevin,$Benjamin,$Romy,$Benja,$Rova,$Gael,$Aimee];

?>
<?php
class Personne
{
    // attributs
    private string $nom;
    private string $prenom;
    private array $details;

    // constructeur
    function __construct($n, $p)
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->details = [];
    }

    // fonctions
        // getters
            // *retourne le nom
            function get_nom()
            {
                return $this->nom;
            }
            // *retourne le prénom
            function get_prenom()
            {
                return $this->prenom;
            }
            // *retourne les details
            function get_details()
            {
                return $this->details;
            }
        // setters
            // *initialise le nom
            function set_nom(string $n)
            {
                $this->nom = $n;
            }
            // *initialise le prénom
            function set_prenom(string $p)
            {
                $this->nom = $p;
            }
            // *initialise les détails
            function set_details(string $k,string $v)
            {
                $this->details += [$k => $v];
            }
}
?>
<?php
class Personne
{
    // attributs
    private string $nom;
    private string $prenom;
    private array $details = [];
    static public $ls_personnel = [];

    // constructeur
    function __construct($n, $p, $d = [])
    {
        $this->nom = $n;
        $this->prenom = $p;
        $this->details = $d;
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
            // *retourne le nom complet
            function get_np()
            {
                return $this->get_nom().' '.$this->get_prenom();
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
            // *ajouter à liste personnel
            public static function ajout_pers($pers)
            {
                if(is_array($pers))
                {
                    foreach($pers as $p)
                    {
                        if(!in_array($p,self::$ls_personnel))
                        {
                            self::$ls_personnel[] = $p;
                        }
                    }
                }
            }
}
?>
<?php
class Boutique
{
    // attributs
    private string $nom;
    private string $adresse;
    private array $staff = [];
    private array $details = [];
    static private array $ls_boutiques = [];
    static private array $ls_noms_boutiques = [];

    // methodes
        // *constructeur
        public function __construct(string $nom, string $adresse)
        {
            $this->nom = $nom;
            $this->adresse = $adresse;
            if(!in_array($nom, self::$ls_noms_boutiques))
            {
                self::$ls_boutiques[] = $this;
                self::$ls_noms_boutiques[] = $nom;
            }
        }
        // *retourne la liste des objets boutiques
        static public function get_ls()
        {
            return self::$ls_boutiques;
        }
        // *retourne la liste des noms des boutiques
        static public function get_ls_noms()
        {
            return self::$ls_noms_boutiques;
        }
        // *retourne le nom de la boutique
        public function get_nom()
        {
            return $this->nom;
        }
        // *retourne l'adresse' de la boutique
        public function get_adresse()
        {
            return $this->adresse;
        }
        // *retourne le staff d'une boutique
        static public function get_staff(int $num_btk)
        {
            if(self::$ls_boutiques[$num_btk])
            {
                return self::$ls_boutiques[$num_btk]->staff;
            }
            else
            {
                echo "<script>alert('N° boutique ".$num_btk. " non valide');</script>";
            }
        }
        // *ajout staff à une boutique
        static public function add_staff(int $num_btk, Personne $p)
        {
            if(self::$ls_boutiques[$num_btk])
            {
                self::$ls_boutiques[$num_btk]->staff[] = $p;
            }
            else
            {
                echo "<script>alert('N° boutique ".$num_btk. " non valide');</script>";
            }
        }
}
?>
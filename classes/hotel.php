<?php
// définition de la classe Hotel 
class Hotel {
    //définition des attributs de la classe Hotel 
    // les attributs sont privés (modificateurs d'accès,encapsulation) donc ils sont inaccessibles en dehors de la classe ; 
    private string $nomHotel; 
    private string $adresseHotel;
    private string $ville;
    private string $cp;
    // attribut du type tableau : il contient plusieurs chambres, cad plusieurs objets de la classe Chambre 
    private array $chambres;


    // fonction constructeur et ses arguments :
    // fonction qui est appelée automatiquement au moment de l'instanciation d'un objet de la classe Hotel
    public function __construct(string $nomHotel, string $adresseHotel, string $ville,string $cp){
        //initialisation des propriétés du constructeur : 
        $this->nomHotel=$nomHotel;
        // affectation de la valeur de l'argument $nomHotel à l'attribut $nomHotel de l'objet en cours de création 
        $this->adresseHotel=$adresseHotel;
        $this->ville=$ville;
        $this->cp=$cp;

        $this->chambres=[];
        // initialisation du tableau chambres ; ce tableau permettra de stocker les objets de la classe Chambre 
    }

    //getters & setters 
    // définition des méthodes permettant de récupérer la valeur des attributs privés de la classe (Getters)
    // et des méthodes permettant de modifier la valeur des attributs privés de la classe (Setters)
    public function getNomHotel():string{
        return $this->nomHotel;
    }

    public function setNomHotel($nomHotel){
        $this->nomHotel = $nomHotel;
    }

    public function getAdresseHotel():string{
        return $this->adresseHotel;
    }

    public function setAdresseHotel($adresseHotel){
        $this->adresseHotel=$adresseHotel;
    }

    public function getVille():string{
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville=$ville;
    }

    public function getCp():string{
        return $this->cp;
    }

    public function setCp($cp){
        $this->cp=$cp;
    }

    public function getChambres():array{
        return $this->chambres;
    }

    // définition d'une méthode permettant d'ajouter un objet chambre à la propriété $chambres de l'objet Hotel 
    public function ajouterChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }

    // définition de la méthode permettant de récupérer le nombre total de chambres de l'objet Hotel
    public function getNbChambres():int{
        return count($this->chambres);
    }

    public function getNbChambresReservees():int{
        $nbChambresReservees=0;
        foreach($this->chambres as $chambre){
            if($chambre->getReservee()== true){
                $nbChambresReservees++;
                
            }
        }
        return $nbChambresReservees;
    }

    public function getNbChambresDisponibles():int{
        return $this->getNbChambres() - $this->getNbChambresReservees();
    }

    // **************************** fonctions affichage *******************************

    public function InfoHotel(){
        $result = "<p style=font-family:Arial>" . $this->getNomHotel() . " " . $this->getVille() . "<br>" . $this->getAdresseHotel() . "<br>" . "Nombre de chambres : " . $this->getNbChambres() ."<br>"."Nombre de chambres réservées : " . $this->getNbChambresReservees() . "<br>" . "Nombre de chambres disponibles : ". $this->getNbChambresDisponibles() . "</p>";
         return $result;
    }

    public function __toString(){
        return $this->nomHotel." ".$this->ville;
    }

    public function voirReservations(){
       
        foreach ($this->chambres as $chambre){
            if (count($chambre->getReservations())>0){
        
               $chambre->afficherReservations();
               var_dump($chambre->afficherReservations());
            }else{
                echo "Pas de réservation";
            }
        }
    }
}



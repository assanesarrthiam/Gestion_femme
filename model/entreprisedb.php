<?php
require_once "entreprise.php";
require_once "./utils/DataBaseHelper.php";
$entreprise =new entreprise();
class entreprisedb{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    //la methode qui va me permettre de faire ajout
     public function add(entreprise $entreprise)
     {
         $sql = $this->dbc->prepare("INSERT INTO entreprise (nomentreprise) VALUES(?)");
         $sql->bindParam(1, $nomentreprise);
         $sql->execute([$entreprise->getIdentreprise()]);
         if ($sql) {
             echo "<script>
             alert('ajout avec success')
             </script>";
         } else {
             echo "ajout non reussie";
         }
     }
//recuperer les donnes dans la base de donnée
    public function selectAll(){  
        $sql=$this->dbc->prepare("SELECT * FROM entreprise ORDER BY identreprise DESC");
        $sql->execute();
        $entreprise=$sql->fetchAll(PDO::FETCH_ASSOC); 
        return $entreprise;
    }
}
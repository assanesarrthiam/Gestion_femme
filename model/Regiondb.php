<?php
require_once "Region.php";
require_once "./utils/DataBaseHelper.php";
$region =new Region();
class Regiondb{
    private $dbc;
    public function __construct()
    {
        $this->dbc = DataBaseHelper::getConnexion();
    }
    //la methode qui va me permettre de faire ajout
     public function add(Region $region)
     {
         $sql = $this->dbc->prepare("INSERT INTO region (nomRegion) VALUES(?)");
         $sql->bindParam(1, $nomRegion);
         $sql->execute([$region->getIdRegion()]);
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
        $sql=$this->dbc->prepare("SELECT * FROM region ORDER BY id DESC");
        $sql->execute();
        $regions=$sql->fetchAll(PDO::FETCH_ASSOC); 
        return $regions;
    }
}
//button supprimer

if (isset($_GET['delete']))
{
$id = $_GET['delete'];
$sql = "DELETE FROM gestion WHERE Id=?";
$prepare=$this->dbc->prepare($sql);
$prepare->execute([$id]);
$query = 'mysql_query'($sql);
if ($query)
{
    echo "supprimer sucess!";
}
}
?>
<?php
class Utilisateur
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_d_naissance;
    private $_mail;
    private $_mdp = '1234'; 

    public function set_nom($s)
{
    if ($s === null || strlen($s) == 0) {
        exit("Utilisateur : le nom est obligatoire");
    }
    $this->_nom = $s;
}


    public function set_prenom($s)
    {
        $this->_prenom = $s;
    }
    public function get_mail()
{
    return $this->_mail;
}


    public function set_mail($s)
    {
        if (strlen($s) < 5 || strlen($s) > 50) {
            exit("Utilisateur : la taille du mail doit être entre 5 et 50 caractères");
        }
        $this->_mail = $s;
    }

    public function set_mdp($s)
    {
        if (strlen($s) < 4 || strlen($s) > 15) {
            exit("Utilisateur : le mdp doit être compris entre 4 et 15 caractères");
        }
        $this->_mdp = $s;
    }

    public function set_d_naissance($s)
    {
        $this->_d_naissance = $s;
    }

    public function set_id($x)
    {
        $this->_id = $x;
    }

    public function enregistrer(Mysql $bdd)
    {
        $q = "INSERT INTO utilisateur (id, nom, prenom, d_naissance, mail, mdp) 
              VALUES (null, '$this->_nom', '$this->_prenom', '$this->_d_naissance', '$this->_mail', '$this->_mdp')";
        return $bdd->requete($q);
    }

    public function supprimer(Mysql $bdd)
    {
        if ($this->_id) {
            $q = "DELETE FROM utilisateur WHERE id = $this->_id";
            return $bdd->requete($q);
        }
    }
    public function get_id()
    {
        return $this->_id;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function get_prenom()
{
    return $this->_prenom;
}
public function get_mdp()
    {
        return $this->_mdp;
    }

    public function get_d_naissance()
    {
        return $this->_d_naissance;
    }

    public function modifier(Mysql $bdd)
    {
        $q = "UPDATE utilisateur SET nom = '$this->_nom', prenom = '$this->_prenom', mail = '$this->_mail', mdp = '$this->_mdp', d_naissance = '$this->_d_naissance' WHERE id = $this->_id";
        return $bdd->requete($q);
    }

    public static function get_un(Mysql $bdd, $id)
    {
        $q = "SELECT * FROM utilisateur WHERE id = $id";
        $res = $bdd->requete($q);
        if ($row = $res->fetch_assoc()) {
            $u = new Utilisateur();
            $u->set_id($row['id']);
            $u->set_nom($row['nom']);
            $u->set_prenom($row['prenom']);
            $u->set_d_naissance($row['d_naissance']);
            $u->set_mail($row['mail']);
            
            return $u;
        }
        return null; 
    }

    public static function get_liste(Mysql $bdd, $order_by = 'id', $order_type = 'ASC')
    {
        $q = "SELECT * FROM utilisateur ORDER BY $order_by $order_type";
        $res = $bdd->requete($q);
        $a_user = [];
        while ($row = $res->fetch_assoc()) {
            $u = new Utilisateur();
            $u->set_id($row['id']);
            $u->set_nom($row['nom']);
            $u->set_prenom($row['prenom']);
            $u->set_d_naissance($row['d_naissance']);
            $u->set_mail($row['mail']);
            
            $a_user[] = $u;
        }
        return $a_user;
    }
}

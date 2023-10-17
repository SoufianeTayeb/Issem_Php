<?php
class Mysql
{
    private $_serveur = "localhost";
    private $_login = "root";
    private $_mdp = "";
    private $_bdd = "travail_collaboratif";
    private $_cnx;

    public function set_serveur($s)
    {
        $this->_serveur = $s;
    }

    public function set_login($s)
    {
        $this->_login = $s;
    }

    public function set_mdp($s)
    {
        $this->_mdp = $s;
    }

    public function set_bdd($s)
    {
        $this->_bdd = $s;
    }

    public function get_cnx()
    {
        return $this->_cnx;
    }

    public function connexion()
    {
        $this->_cnx = new mysqli($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);

        if ($this->_cnx->connect_error)
        {
            exit("Erreur de connexion bdd : " . $this->_cnx->connect_error);
        }
    }

    public function requete($q)
    {
        $res = $this->_cnx->query($q);

        if (!$res)
        {
            exit("<pre>Erreur dans la requête [$q] : " . $this->_cnx->error . "</pre>");
        }

        return $res;
    }

    public function deconnexion()
    {
        $this->_cnx->close();
    }

}

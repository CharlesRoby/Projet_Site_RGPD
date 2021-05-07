<?php

// Classe qui va gérer la manipulation des objets Formulaires et faire le lien avec la BDD
class FormulaireManager implements iterator
{
	// Le seul attribut de cette classe Manager
	private $_db;
	private $_pos0;
	private $_tab;

	public function __construct($db)
	{
		$this->setDB($db); // on passe par un setter 
		$this->_tab = $this->getList();
		$this->_pos = 0;
	}
	// méthodes CRUD ( Create, Read, Update, Delete)

	// Ajout d'un formulaire
	public function add(Formulaire $formulaire)
	{
		$q = $this->_db->prepare('INSERT INTO FORMULAIRE (Nom, Mdp, Liceite, Auteur, Service, Responsable1, Responsable2, Representant, FinaliteP, Finalite1, Finalite2, Finalite3, Finalite4, Finalite5, Etat, Collecte1, Duree1, NSS, Collecte2, Duree2, Viepers, Collecte3, Duree3, Economique, Collecte4, Duree4, Connexion, Collecte5, Duree5, Localisation, Collecte6, Duree6, Origine,Collecte7, Duree7, Politique, Collecte8, Duree8, Conviction, Collecte9, Duree9, Syndicale, Collecte10, Duree10, Medicale, Collecte11, Duree11, Orientation, Collecte12, Duree12, Infraction, Collecte13, Duree13, Echange1, Echange2, Echange3, Destinataire1, Destinataire2, Destinataire3, Destinataire4, HorsUE, DestinataireHUE1, Pays1, Garantie1, DestinataireHUE2, Pays2, Garantie2, DestinataireHUE3, Pays3, Garantie3, DestinataireHUE4, Pays4, Garantie4, Securite1, Securite2, Securite3, Technologie1, Technologie2, Autre ) VALUES(:Nom, :Mdp, :Liceite, :Auteur, :Service, :Responsable1, :Responsable2, :Representant, :FinaliteP, :Finalite1, :Finalite2, :Finalite3, :Finalite4, :Finalite5, :Etat, :Collecte1, :Duree1, :NSS, :Collecte2, :Duree2, :Viepers, :Collecte3, :Duree3, :Economique, :Collecte4, :Duree4, :Connexion, :Collecte5, :Duree5, :Localisation, :Collecte6, :Duree6, :Origine, :Collecte7, :Duree7, :Politique, :Collecte8, :Duree8, :Conviction, :Collecte9, :Duree9, :Syndicale, :Collecte10, :Duree10, :Medicale, :Collecte11, :Duree11, :Orientation, :Collecte12, :Duree12, :Infraction, :Collecte13, :Duree13, :Echange1, :Echange2, :Echange3, :Destinataire1, :Destinataire2, :Destinataire3, :Destinataire4, :HorsUE, :DestinataireHUE1, :Pays1, :Garantie1, :DestinataireHUE2, :Pays2, :Garantie2, :DestinataireHUE3, :Pays3, :Garantie3, :DestinataireHUE4, :Pays4, :Garantie4, :Securite1, :Securite2, :Securite3, :Technologie1, :Technologie2, :Autre)');	
		$q->bindValue(':Nom', $formulaire->getNom());
		$q->bindValue(':Mdp', $formulaire->getMdp());
		$q->bindValue(':Liceite', $formulaire->getLiceite());
		$q->bindValue(':Auteur', $formulaire->getAuteur());
		$q->bindValue(':Service', $formulaire->getService());
		$q->bindValue(':Responsable1', $formulaire->getResponsable1());
		$q->bindValue(':Responsable2', $formulaire->getResponsable2());
		$q->bindValue(':Representant', $formulaire->getRepresentant());
		$q->bindValue(':FinaliteP', $formulaire->getFinaliteP());
		$q->bindValue(':Finalite1', $formulaire->getFinalite1());
		$q->bindValue(':Finalite2', $formulaire->getFinalite2());
		$q->bindValue(':Finalite3', $formulaire->getFinalite3());
		$q->bindValue(':Finalite4', $formulaire->getFinalite4());
		$q->bindValue(':Finalite5', $formulaire->getFinalite5());
		$q->bindValue(':Etat', $formulaire->getEtat());
		$q->bindValue(':Collecte1', $formulaire->getCollecte1());
		$q->bindValue(':Duree1', $formulaire->getDuree1());
		$q->bindValue(':NSS', $formulaire->getNSS());
		$q->bindValue(':Collecte2', $formulaire->getCollecte2());
		$q->bindValue(':Duree2', $formulaire->getDuree2());
		$q->bindValue(':Viepers', $formulaire->getViepers());
		$q->bindValue(':Collecte3', $formulaire->getCollecte3());
		$q->bindValue(':Duree3', $formulaire->getDuree3());
		$q->bindValue(':Economique', $formulaire->getEconomique());
		$q->bindValue(':Collecte4', $formulaire->getCollecte4());
		$q->bindValue(':Duree4', $formulaire->getDuree4());
		$q->bindValue(':Connexion', $formulaire->getConnexion());
		$q->bindValue(':Collecte5', $formulaire->getCollecte5());
		$q->bindValue(':Duree5', $formulaire->getDuree5());
		$q->bindValue(':Localisation', $formulaire->getLocalisation());
		$q->bindValue(':Collecte6', $formulaire->getCollecte6());
		$q->bindValue(':Duree6', $formulaire->getDuree6());
		$q->bindValue(':Origine', $formulaire->getOrigine());
		$q->bindValue(':Collecte7', $formulaire->getCollecte7());
		$q->bindValue(':Duree7', $formulaire->getDuree7());
		$q->bindValue(':Politique', $formulaire->getPolitique());
		$q->bindValue(':Collecte8', $formulaire->getCollecte8());
		$q->bindValue(':Duree8', $formulaire->getDuree8());
		$q->bindValue(':Conviction', $formulaire->getConviction());
		$q->bindValue(':Collecte9', $formulaire->getCollecte9());
		$q->bindValue(':Duree9', $formulaire->getDuree9());
		$q->bindValue(':Syndicale', $formulaire->getSyndicale());
		$q->bindValue(':Collecte10', $formulaire->getCollecte10());
		$q->bindValue(':Duree10', $formulaire->getDuree10());
		$q->bindValue(':Medicale', $formulaire->getMedicale());
		$q->bindValue(':Collecte11', $formulaire->getCollecte11());
		$q->bindValue(':Duree11', $formulaire->getDuree11());
		$q->bindValue(':Orientation', $formulaire->getOrientation());
		$q->bindValue(':Collecte12', $formulaire->getCollecte12());
		$q->bindValue(':Duree12', $formulaire->getDuree12());
		$q->bindValue(':Infraction', $formulaire->getInfraction());
		$q->bindValue(':Collecte13', $formulaire->getCollecte13());
		$q->bindValue(':Duree13', $formulaire->getDuree13());
		$q->bindValue(':Echange1', $formulaire->getEchange1());
		$q->bindValue(':Echange2', $formulaire->getEchange2());
		$q->bindValue(':Echange3', $formulaire->getEchange3());
		$q->bindValue(':Destinataire1', $formulaire->getDestinataire1());
		$q->bindValue(':Destinataire2', $formulaire->getDestinataire2());
		$q->bindValue(':Destinataire3', $formulaire->getDestinataire3());
		$q->bindValue(':Destinataire4', $formulaire->getDestinataire4());
		$q->bindValue(':HorsUE', $formulaire->getHorsUE());
		$q->bindValue(':DestinataireHUE1', $formulaire->getDestinataireHUE1());
		$q->bindValue(':Pays1', $formulaire->getPays1());
		$q->bindValue(':Garantie1', $formulaire->getGarantie1());
		$q->bindValue(':DestinataireHUE2', $formulaire->getDestinataireHUE2());
		$q->bindValue(':Pays2', $formulaire->getPays2());
		$q->bindValue(':Garantie2', $formulaire->getGarantie2());
		$q->bindValue(':DestinataireHUE3', $formulaire->getDestinataireHUE3());
		$q->bindValue(':Pays3', $formulaire->getPays3());
		$q->bindValue(':Garantie3', $formulaire->getGarantie3());
		$q->bindValue(':DestinataireHUE4', $formulaire->getDestinataireHUE4());
		$q->bindValue(':Pays4', $formulaire->getPays4());
		$q->bindValue(':Garantie4', $formulaire->getGarantie4());
		$q->bindValue(':Securite1', $formulaire->getSecurite1());
		$q->bindValue(':Securite2', $formulaire->getSecurite2());
		$q->bindValue(':Securite3', $formulaire->getSecurite3());
		$q->bindValue(':Technologie1', $formulaire->getTechnologie1());
		$q->bindValue(':Technologie2', $formulaire->getTechnologie2());
		$q->bindValue(':Autre', $formulaire->getAutre());
		$q->execute();
	}

		public function count()
	{

		$nombre=$this->_db->query('SELECT count(*) FROM FORMULAIRE');
		$count2 = $nombre->fetchColumn();
		return $count2;

	}


	// Suppression d'un formulaire
	public function delete($Ref) 
	{
		$Ref = (int) $Ref;
		$this->_db->exec("DELETE FROM FORMULAIRE WHERE Ref = '$Ref'");
	}

public function getMdp($mdp)
        {
        $mdp = (string) $mdp;
        $formulaire = $this->_db->query("SELECT * FROM FORMULAIRE Where Mdp ='$mdp'");
        $donnees = $formulaire->fetch(PDO::FETCH_ASSOC);
            if($donnees){
                return True;
            }else{
                return False;
            }
        // On retourne un objet de type client

        }


	// Modification du Formulaire
	public function update($Ref, $Nom, $Liceite, $Service, $Responsable1, $Responsable2, $Representant, $FinaliteP, $Finalite1, $Finalite2, $Finalite3, $Finalite4, $Finalite5, $Etat, $Collecte1, $Duree1, $NSS, $Collecte2, $Duree2, $Viepers, $Collecte3, $Duree3, $Economique, $Collecte4, $Duree4, $Connexion, $Collecte5, $Duree5, $Localisation, $Collecte6, $Duree6, $Origine, $Collecte7, $Duree7, $Politique, $Collecte8, $Duree8, $Conviction, $Collecte9, $Duree9, $Syndicale, $Collecte10, $Duree10, $Medicale, $Collecte11, $Duree11, $Orientation, $Collecte12, $Duree12, $Infraction, $Collecte13, $Duree13, $Echange1, $Echange2, $Echange3, $Destinataire1, $Destinataire2, $Destinataire3, $Destinataire4, $HorsUE, $DestinataireHUE1, $Pays1, $Garantie1, $DestinataireHUE2, $Pays2, $Garantie2, $DestinataireHUE3, $Pays3, $Garantie3, $DestinataireHUE4, $Pays4, $Garantie4, $Securite1, $Securite2, $Securite3, $Technologie1, $Technologie2, $Autre)
	{
		$ref = (string) $ref;
		$nom = (string) $nom;
		$liceite = (string) $liceite;
		$service = (string) $service;
		$responsable1 = (string) $responsable1;
		$responsable2 = (string) $responsable2;
		$representant = (string) $representant;
		$finaliteP = (string) $finaliteP;
		$finalite1 = (string) $finalite1;
		$finalite2 = (string) $finalite2;
		$finalite3 = (string) $finalite3;
		$finalite4 = (string) $finalite4;
		$finalite5 = (string) $finalite5;
		$etat = (string) $etat;
		$collecte1 = (string) $collecte1;
		$duree1 = (string) $duree1;
		$nss = (string) $nss;
		$collecte2 = (string) $collecte2;
		$duree2 = (string) $duree2;
		$viepers = (string) $viepers;
		$collecte3 = (string) $collecte3;
		$duree3 = (string) $duree3;
		$economique = (string) $economique;
		$collecte4 = (string) $collecte4;
		$duree4 = (string) $duree4;
		$connexion = (string) $connexion;
		$collecte5 = (string) $collecte5;
		$duree5 = (string) $duree5;
		$localisation = (string) $localisation;
		$collecte6 = (string) $collecte6;
		$duree6 = (string) $duree6;
		$origine = (string) $origine;
		$collecte7 = (string) $collecte7;
		$duree7 = (string) $duree7;
		$politique = (string) $politique;
		$collecte8 = (string) $collecte8;
		$duree8 = (string) $duree8;
		$conviction = (string) $conviction;
		$collecte9 = (string) $collecte9;
		$duree9 = (string) $duree9;
		$syndicale = (string) $syndicale;
		$collecte10 = (string) $collecte10;
		$duree10 = (string) $duree10;
		$medicale = (string) $medicale;
		$collecte11 = (string) $collecte11;
		$duree11 = (string) $duree11;
		$orientation = (string) $orientation;
		$collecte12 = (string) $collecte12;
		$duree12 = (string) $duree12;
		$infraction = (string) $infraction;
		$collecte13 = (string) $collecte13;
		$duree13 = (string) $duree13;
		$echange1 = (string) $echange1;
		$echange2 = (string) $echange2;
		$echange3 = (string) $echange3;
		$destinataire1 = (string) $destinataire1;
		$destinataire2 = (string) $destinataire2;
		$destinataire3 = (string) $destinataire3;
		$destinataire4 = (string) $destinataire4;
		$horsue = (string) $horsue;
		$destinatairehue1 = (string) $destinatairehue1;
		$pays1 = (string) $pays1;
		$garantie1 = (string) $garantie1;
		$destinatairehue2 = (string) $destinatairehue2;
		$pays2 = (string) $pays2;
		$garantie2 = (string) $garantie2;
		$destinatairehue3 = (string) $destinatairehue3;
		$pays3 = (string) $pays3;
		$garantie3 = (string) $garantie3;
		$destinatairehue4 = (string) $destinatairehue4;
		$pays4 = (string) $pays4;
		$garantie4 = (string) $garantie4;
		$securite1 = (string) $securite1;
		$securite2 = (string) $securite2;
		$securite3 = (string) $securite3;
		$technologie1 = (string) $technologie1;
		$technologie2 = (string) $technologie2;
		$autre = (string) $autre;
		$q = $this->_db->prepare("UPDATE FORMULAIRE 
			SET Nom = '$nom',
				Liceite = '$liceite',
				Service = '$service',
				Responsable1 = '$responsable1',
				Responsable2 = '$responsable2',
				Representant = '$representant',
				FinaliteP = '$finaliteP',
				Finalite1 = '$finalite1',
				Finalite2 = '$finalite2',
				Finalite3 = '$finalite3',
				Finalite4 = '$finalite4',
				Finalite5 = '$finalite5',
				Etat= '$etat',
				Collecte1 = '$collecte1',
				Duree1 = '$duree1',
				NSS= '$nss',
				Collecte2 = '$collecte2',
				Duree2 = '$duree2',
				Viepers = '$viepers',
				Collecte3 = '$collecte3',
				Duree3 = '$duree3',
				Economique = '$economique',
				Collecte4 = '$collecte4',
				Duree4 = '$duree4',
				Connexion = '$connexion',
				Collecte5 = '$collecte5',
				Duree5 = '$duree5',
				Localisation = '$localisation',
				Collecte6 = '$collecte6',
				Duree6 = '$duree6',
				Origine = '$origine',
				Collecte7 = '$collecte7',
				Duree7 = '$duree7',
				Politique = '$politique',
				Collecte8 = '$collecte8',
				Duree8 = '$duree8',
				Conviction = '$conviction',
				Collecte9 = '$collecte9',
				Duree9 = '$duree9',
				Syndicale = '$syndicale',
				Collecte10 = '$collecte10',
				Duree10 = '$duree10',
				Medicale = '$medicale',
				Collecte11 = '$collecte11',
				Duree11 = '$duree11',
				Orientation = '$orientation',
				Collecte12 = '$collecte12',
				Duree12 = '$duree12',
				Infraction = '$infraction',
				Collecte13 = '$collecte13',
				Duree13 = '$duree13',
				Echange1 = '$echange1',
				Echange2 = '$echange2',
				Echange3 = '$echange3',
				Destinataire1 = '$destinataire1',
				Destinataire2 = '$destinataire2',
				Destinataire3 = '$destinataire3',
				Destinataire4 = '$destinataire4',
				HorsUE = '$horsue',
				DestinataireHUE1 = '$destinatairehue1',
				Pays1 = '$pays1',
				Garantie1 = '$garantie1',
				DestinataireHUE2 = '$destinatairehue2',
				Pays2 = '$pays2',
				Garantie2 = '$garantie2',
				DestinataireHUE3 = '$destinatairehue3',
				Pays3 = '$pays3',
				Garantie3 = '$garantie3',
				DestinataireHUE4 = '$destinatairehue4',
				Pays4 = '$pays4',
				Garantie4 = '$garantie4',
				Securite1 = '$securite1',
				Securite2 = '$securite2',
				Securite3 = '$securite3',
				Technologie1 = '$technologie1',
				Technologie2 = '$technologie2',
				Autre = '$autre'

			WHERE Ref = '$ref'"); // on ne modifie pas Ref ( identifiant )
		$q->execute();
	}

	// Retourne un objet de type Formulaire en fonction de l'identifiant passé en paramètre
	public function get($Ref)
	{
		$Ref = (int) $Ref;
		$q = $this->_db->query('SELECT Ref, Nom, Liceite, Auteur, Service, Responsable1, Responsable2, Representant, FinaliteP, Finalite1, Finalite2, Finalite3, Finalite4, Finalite5, Etat, Collecte1, Duree1, NSS, Collecte2, Duree2, Viepers, Collecte3, Duree3, Economique, Collecte4, Duree4, Connexion, Collecte5, Duree5, Localisation, Collecte6, Duree6, Origine,Collecte7, Duree7, Politique, Collecte8, Duree8, Conviction, Collecte9, Duree9, Syndicale, Collecte10, Duree10, Medicale, Collecte11, Duree11, Orientation, Collecte12, Duree12, Infraction, Collecte13, Duree13, Echange1, Echange2, Echange3, Destinataire1, Destinataire2, Destinataire3, Destinataire4, HorsUE, DestinataireHUE1, Pays1, Garantie1, DestinataireHUE2, Pays2, Garantie2, DestinataireHUE3, Pays3, Garantie3, DestinataireHUE4, Pays4, Garantie4, Securite1, Securite2, Securite3, Technologie1, Technologie2, Autre FROM FORMULAIRE Where Ref = '.$Ref);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		// On retourne un objet de type Formulaire
		return new Formulaire($donnees);
	}	

	// Autres méthodes outils 

	// Liste de formulaires
	public function getList()
	{
		// Retourne tous les Formulaire 
		$formulaire = [];
		$q = $this->_db->query('SELECT Ref, Nom, Auteur FROM FORMULAIRE ORDER BY Ref');
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$formulaire[] = new Formulaire($donnees);
		}
		return $formulaire; // On retourne un tableau d'objets Formulaire
	}

	public function current(){
		if($this->valid())
			return $this->_tab[$this->_pos];
	}

	public function key(){
		return $this->_pos;
	}

	public function next(){
		return $this->_pos++;
	}

	public function rewind(){
		return $this->_pos = 0;
	}

	public function valid(){
		return isset($this->_tab[$this->_pos]);
	}

	// On fixe la BDD
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}



}
?>
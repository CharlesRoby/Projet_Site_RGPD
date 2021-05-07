<?php
// Classe qui gère la fabrication d'un objet Formulaire
// Et gère les caractéristiques de cet objet (attributs & méthodes)
// Une classe = un rôle

class Formulaire
{
	// Atrributs du formulaire
	private $Ref;
	private $Nom;
	private $Mdp;
	private $Liceite;
	private $Auteur;
	private $Service;
	private $Responsable1;
	private $Responsable2;
	private $Representant;
	private $FinaliteP;
	private $Finalite1;
	private $Finalite2;
	private $Finalite3;
	private $Finalite4;
	private $Finalite5;
	private $Etat;
	private $Collecte1;
	private $Duree1;
	private $NSS;
	private $Collecte2;
	private $Duree2;
	private $Viepers;
	private $Collecte3;
	private $Duree3;
	private $Economique;
	private $Collecte4;
	private $Duree4;
	private $Connexion;
	private $Collecte5;
	private $Duree5;
	private $Localisation;
	private $Collecte6;
	private $Duree6;
	private $Origine;
	private $Collecte7;
	private $Duree7;
	private $Politique;
	private $Collecte8;
	private $Duree8;
	private $Conviction;
	private $Collecte9;
	private $Duree9;
	private $Syndicale;
	private $Collecte10;
	private $Duree10;
	private $Medicale;
	private $Collecte11;
	private $Duree11;
	private $Orientation;
	private $Collecte12;
	private $Duree12;
	private $Infraction;
	private $Collecte13;
	private $Duree13;
	private $Echange1;
	private $Echange2;
	private $Echange3;
	private $Destinataire1;
	private $Destinataire2;
	private $Destinataire3;
	private $Destinataire4;
	private $HorsUE;
	private $DestinataireHUE1;
	private $Pays1;
	private $Garantie1;
	private $DestinataireHUE2;
	private $Pays2;
	private $Garantie2;
	private $DestinataireHUE3;
	private $Pays3;
	private $Garantie3;
	private $DestinataireHUE4;
	private $Pays4;
	private $Garantie4;
	private $Securite1;
	private $Securite2;
	private $Securite3;
	private $Technologie1;
	private $Technologie2;
	private $Autre;

	// Le constructeur
	public function __construct(array $donnees)
	{
		// Le constructeur appelle la méthode hydrate
		// Celle ci sera utile pour la construction des objets 
		$this->hydrate($donnees);
	}


	public function hydrate(array $donnees)
	{
		// L'hydratation se fait toujours via les mutateurs
		foreach ($donnees as $key => $value) {
			$method = 'set'.$key;
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
			else
			{
				trigger_error('Je trouve pas la méthode !', E_USER_WARNING);
			}
		}
	}

	// Méthode magique afin d'afficher un objet Formulaire
	public function __toString()
	{
		return "Numero du registre : ".$this->getRef()." Nom du logiciel : ".$this->getNom().".";
	}

	// Les getters
	
	public function getRef()
	{
		return $this->_Ref;
	}

	public function getNom()
	{
		return $this->_Nom;
	}

		public function getMdp()
	{
		return $this->_Mdp;
	}
		
		public function getLiceite()
	{
		return $this->_Liceite;
	}

	public function getAuteur()
	{
		return $this->_Auteur;
	}

		public function getService()
	{
		return $this->_Service;
	}

		public function getResponsable1()
	{
		return $this->_Responsable1;
	}

		public function getResponsable2()
	{
		return $this->_Responsable2;
	}

		public function getRepresentant()
	{
		return $this->_Representant;
	}

		public function getFinaliteP()
	{
		return $this->_FinaliteP;
	}

		public function getFinalite1()
	{
		return $this->_Finalite2;
	}

		public function getFinalite2()
	{
		return $this->_Finalite2;
	}

		public function getFinalite3()
	{
		return $this->_Finalite3;
	}

		public function getFinalite4()
	{
		return $this->_Finalite4;
	}

		public function getFinalite5()
	{
		return $this->_Finalite5;
	}

		public function getEtat()
	{
		return $this->_Etat;
	}

		public function getCollecte1()
	{
		return $this->_Collecte1;
	}

		public function getDuree1()
	{
		return $this->_Duree1;
	}

		public function getNSS()
	{
		return $this->_NSS;
	}

		public function getCollecte2()
	{
		return $this->_Collecte2;
	}

		public function getDuree2()
	{
		return $this->_Duree2;
	}

		public function getViepers()
	{
		return $this->_Viepers;
	}

		public function getCollecte3()
	{
		return $this->_Collecte3;
	}

		public function getDuree3()
	{
		return $this->_Duree3;
	}

		public function getEconomique()
	{
		return $this->_Economique;
	}

		public function getCollecte4()
	{
		return $this->_Collecte4;
	}

		public function getDuree4()
	{
		return $this->_Duree4;
	}

		public function getConnexion()
	{
		return $this->_Connexion;
	}

		public function getCollecte5()
	{
		return $this->_Collecte5;
	}

		public function getDuree5()
	{
		return $this->_Duree5;
	}

		public function getLocalisation()
	{
		return $this->_Localisation;
	}

		public function getCollecte6()
	{
		return $this->_Collecte6;
	}

		public function getDuree6()
	{
		return $this->_Duree6;
	}

		public function getOrigine()
	{
		return $this->_Origine;
	}

		public function getCollecte7()
	{
		return $this->_Collecte7;
	}

		public function getDuree7()
	{
		return $this->_Duree7;
	}

		public function getPolitique()
	{
		return $this->_Politique;
	}

		public function getCollecte8()
	{
		return $this->_Collecte8;
	}

		public function getDuree8()
	{
		return $this->_Duree8;
	}

		public function getConviction()
	{
		return $this->_Conviction;
	}

		public function getCollecte9()
	{
		return $this->_Collecte9;
	}

		public function getDuree9()
	{
		return $this->_Duree9;
	}

		public function getSyndicale()
	{
		return $this->_Syndicale;
	}

		public function getCollecte10()
	{
		return $this->_Collecte10;
	}

		public function getDuree10()
	{
		return $this->_Duree10;
	}

		public function getMedicale()
	{
		return $this->_Medicale;
	}

		public function getCollecte11()
	{
		return $this->_Collecte11;
	}

		public function getDuree11()
	{
		return $this->_Duree11;
	}

		public function getOrientation()
	{
		return $this->_Orientation;
	}

		public function getCollecte12()
	{
		return $this->_Collecte12;
	}

		public function getDuree12()
	{
		return $this->_Duree12;
	}

		public function getInfraction()
	{
		return $this->_Infraction;
	}

		public function getCollecte13()
	{
		return $this->_Collecte13;
	}

		public function getDuree13()
	{
		return $this->_Duree13;
	}

		public function getEchange1()
	{
		return $this->_Echange1;
	}

		public function getEchange2()
	{
		return $this->_Echange2;
	}

		public function getEchange3()
	{
		return $this->_Echange3;
	}

		public function getDestinataire1()
	{
		return $this->_Destinataire1;
	}

		public function getDestinataire2()
	{
		return $this->_Destinataire2;
	}

		public function getDestinataire3()
	{
		return $this->_Destinataire3;
	}

		public function getDestinataire4()
	{
		return $this->_Destinataire4;
	}

		public function getHorsUE()
	{
		return $this->_HorsUE;
	}

		public function getDestinataireHUE1()
	{
		return $this->_DestinataireHUE1;
	}

		public function getPays1()
	{
		return $this->_Pays1;
	}

		public function getGarantie1()
	{
		return $this->_Garantie1;
	}

		public function getDestinataireHUE2()
	{
		return $this->_DestinataireHUE2;
	}

		public function getPays2()
	{
		return $this->_Pays2;
	}

		public function getGarantie2()
	{
		return $this->_Garantie2;
	}

		public function getDestinataireHUE3()
	{
		return $this->_DestinataireHUE3;
	}

		public function getPays3()
	{
		return $this->_Pays3;
	}

		public function getGarantie3()
	{
		return $this->_Garantie3;
	}

		public function getDestinataireHUE4()
	{
		return $this->_DestinataireHUE4;
	}

		public function getPays4()
	{
		return $this->_Pays4;
	}

		public function getGarantie4()
	{
		return $this->_Garantie4;
	}

		public function getSecurite1()
	{
		return $this->_Securite1;
	}

		public function getSecurite2()
	{
		return $this->_Securite2;
	}

		public function getSecurite3()
	{
		return $this->_Securite3;
	}

		public function getTechnologie1()
	{
		return $this->_Technologie1;
	}

		public function getTechnologie2()
	{
		return $this->_Technologie2;
	}

		public function getAutre()
	{
		return $this->_Autre;
	}








	// Les setters ou mutateurs avec éventuellement des restrictions
	public function setRef($Ref)
	{
		$Ref = (int) $Ref;
		// Si c'est pas un entier la convertion donne 0.
		// On suppose que l'Id d'un Formulaire ne peut pas être 0
		if ($Ref > 0)
		{
			$this->_Ref = $Ref;
		}
	}

	public function setNom($Nom)
	{
		if (is_string($Nom))
		{
			$this->_Nom = $Nom;
		}
	}

	public function setMdp($Mdp)
	{
		if (is_string($Mdp))
		{
			$this->_Mdp = $Mdp;
		}
	}

	public function setLiceite($Liceite)
	{
		if (is_string($Liceite))
		{
			$this->_Liceite = $Liceite;
		}
	}

	public function setAuteur($Auteur)
	{
		if (is_string($Auteur))
		{
			$this->_Auteur = $Auteur;
		}
	}

	public function setService($Service)
	{
		if (is_string($Service))
		{
			$this->_Service = $Service;
		}
	}

	public function setResponsable1($Responsable1)
	{
		if (is_string($Responsable1))
		{
			$this->_Responsable1 = $Responsable1;
		}
	}

	public function setResponsable2($Responsable2)
	{
		if (is_string($Responsable2))
		{
			$this->_Responsable2 = $Responsable2;
		}
	}

	public function setRepresentant($Representant)
	{
		if (is_string($Representant))
		{
			$this->_Representant = $Representant;
		}
	}

	public function setFinaliteP($FinaliteP)
	{
		if (is_string($FinaliteP))
		{
			$this->_FinaliteP = $FinaliteP;
		}
	}

	public function setFinalite1($Finalite1)
	{
		if (is_string($Finalite1))
		{
			$this->_Finalite1 = $Finalite1;
		}
	}

	public function setFinalite2($Finalite2)
	{
		if (is_string($Finalite2))
		{
			$this->_Finalite2 = $Finalite2;
		}
	}

	public function setFinalite3($Finalite3)
	{
		if (is_string($Finalite3))
		{
			$this->_Finalite3 = $Finalite3;
		}
	}

	public function setFinalite4($Finalite4)
	{
		if (is_string($Finalite4))
		{
			$this->_Finalite4 = $Finalite4;
		}
	}

	public function setFinalite5($Finalite5)
	{
		if (is_string($Finalite5))
		{
			$this->_Finalite5 = $Finalite5;
		}
	}

	public function setEtat($Etat)
	{
		if (is_string($Etat))
		{
			$this->_Etat = $Etat;
		}
	}

	public function setCollecte1($Collecte1)
	{
		if (is_string($Collecte1))
		{
			$this->_Collecte1 = $Collecte1;
		}
	}

	public function setDuree1($Duree1)
	{
		if (is_string($Duree1))
		{
			$this->_Duree1 = $Duree1;
		}
	}

	public function setNSS($NSS)
	{
		if (is_string($NSS))
		{
			$this->_NSS = $NSS;
		}
	}

	public function setCollecte2($Collecte2)
	{
		if (is_string($Collecte2))
		{
			$this->_Collecte2 = $Collecte2;
		}
	}

	public function setDuree2($Duree2)
	{
		if (is_string($Duree2))
		{
			$this->_Duree2 = $Duree2;
		}
	}

	public function setViepers($Viepers)
	{
		if (is_string($Viepers))
		{
			$this->_Viepers = $Viepers;
		}
	}

	public function setCollecte3($Collecte3)
	{
		if (is_string($Collecte3))
		{
			$this->_Collecte3 = $Collecte3;
		}
	}

	public function setDuree3($Duree3)
	{
		if (is_string($Duree3))
		{
			$this->_Duree3 = $Duree3;
		}
	}

	public function setEconomique($Economique)
	{
		if (is_string($Economique))
		{
			$this->_Economique = $Economique;
		}
	}

	public function setCollecte4($Collecte4)
	{
		if (is_string($Collecte4))
		{
			$this->_Collecte4 = $Collecte4;
		}
	}

	public function setDuree4($Duree4)
	{
		if (is_string($Duree4))
		{
			$this->_Duree4 = $Duree4;
		}
	}

	public function setConnexion($Connexion)
	{
		if (is_string($Connexion))
		{
			$this->_Connexion = $Connexion;
		}
	}

	public function setCollecte5($Collecte5)
	{
		if (is_string($Collecte5))
		{
			$this->_Collecte5 = $Collecte5;
		}
	}

	public function setDuree5($Duree5)
	{
		if (is_string($Duree5))
		{
			$this->_Duree5 = $Duree5;
		}
	}

	public function setLocalisation($Localisation)
	{
		if (is_string($Localisation))
		{
			$this->_Localisation = $Localisation;
		}
	}

	public function setCollecte6($Collecte6)
	{
		if (is_string($Collecte6))
		{
			$this->_Collecte6 = $Collecte6;
		}
	}

	public function setDuree6($Duree6)
	{
		if (is_string($Duree6))
		{
			$this->_Duree6 = $Duree6;
		}
	}

	public function setOrigine($Origine)
	{
		if (is_string($Origine))
		{
			$this->_Origine = $Origine;
		}
	}

	public function setCollecte7($Collecte7)
	{
		if (is_string($Collecte7))
		{
			$this->_Collecte7 = $Collecte7;
		}
	}

	public function setDuree7($Duree7)
	{
		if (is_string($Duree7))
		{
			$this->_Duree7 = $Duree7;
		}
	}

	public function setPolitique($Politique)
	{
		if (is_string($Politique))
		{
			$this->_Politique = $Politique;
		}
	}

	public function setCollecte8($Collecte8)
	{
		if (is_string($Collecte8))
		{
			$this->_Collecte8 = $Collecte8;
		}
	}

	public function setDuree8($Duree8)
	{
		if (is_string($Duree8))
		{
			$this->_Duree8 = $Duree8;
		}
	}

	public function setConviction($Conviction)
	{
		if (is_string($Conviction))
		{
			$this->_Conviction = $Conviction;
		}
	}

	public function setCollecte9($Collecte9)
	{
		if (is_string($Collecte9))
		{
			$this->_Collecte9 = $Collecte9;
		}
	}

	public function setDuree9($Duree9)
	{
		if (is_string($Duree9))
		{
			$this->_Duree9 = $Duree9;
		}
	}

	public function setSyndicale($Syndicale)
	{
		if (is_string($Syndicale))
		{
			$this->_Syndicale = $Syndicale;
		}
	}

	public function setCollecte10($Collecte10)
	{
		if (is_string($Collecte10))
		{
			$this->_Collecte10 = $Collecte10;
		}
	}

	public function setDuree10($Duree10)
	{
		if (is_string($Duree10))
		{
			$this->_Duree10 = $Duree10;
		}
	}

	public function setMedicale($Medicale)
	{
		if (is_string($Medicale))
		{
			$this->_Medicale = $Medicale;
		}
	}

	public function setCollecte11($Collecte11)
	{
		if (is_string($Collecte11))
		{
			$this->_Collecte11 = $Collecte11;
		}
	}

	public function setDuree11($Duree11)
	{
		if (is_string($Duree11))
		{
			$this->_Duree11 = $Duree11;
		}
	}

	public function setOrientation($Orientation)
	{
		if (is_string($Orientation))
		{
			$this->_Orientation = $Orientation;
		}
	}

	public function setCollecte12($Collecte12)
	{
		if (is_string($Collecte12))
		{
			$this->_Collecte12 = $Collecte12;
		}
	}

	public function setDuree12($Duree12)
	{
		if (is_string($Duree12))
		{
			$this->_Duree12 = $Duree12;
		}
	}

	public function setInfraction($Infraction)
	{
		if (is_string($Infraction))
		{
			$this->_Infraction = $Infraction;
		}
	}

	public function setCollecte13($Collecte13)
	{
		if (is_string($Collecte13))
		{
			$this->_Collecte13 = $Collecte13;
		}
	}

	public function setDuree13($Duree13)
	{
		if (is_string($Duree13))
		{
			$this->_Duree13 = $Duree13;
		}
	}

	public function setEchange1($Echange1)
	{
		if (is_string($Echange1))
		{
			$this->_Echange1 = $Echange1;
		}
	}

	public function setEchange2($Echange2)
	{
		if (is_string($Echange2))
		{
			$this->_Echange2 = $Echange2;
		}
	}

	public function setEchange3($Echange3)
	{
		if (is_string($Echange3))
		{
			$this->_Echange3 = $Echange3;
		}
	}

	public function setDestinataire1($Destinataire1)
	{
		if (is_string($Destinataire1))
		{
			$this->_Destinataire1 = $Destinataire1;
		}
	}

	public function setDestinataire2($Destinataire2)
	{
		if (is_string($Destinataire2))
		{
			$this->_Destinataire2 = $Destinataire2;
		}
	}

	public function setDestinataire3($Destinataire3)
	{
		if (is_string($Destinataire3))
		{
			$this->_Destinataire3 = $Destinataire3;
		}
	}

	public function setDestinataire4($Destinataire4)
	{
		if (is_string($Destinataire4))
		{
			$this->_Destinataire4 = $Destinataire4;
		}
	}

	public function setHorsUE($HorsUE)
	{
		if (is_string($HorsUE))
		{
			$this->_HorsUE = $HorsUE;
		}
	}

	public function setDestinataireHUE1($DestinataireHUE1)
	{
		if (is_string($DestinataireHUE1))
		{
			$this->_DestinataireHUE1 = $DestinataireHUE1;
		}
	}

	public function setPays1($Pays1)
	{
		if (is_string($Pays1))
		{
			$this->_Pays1 = $Pays1;
		}
	}

	public function setGarantie1($Garantie1)
	{
		if (is_string($Garantie1))
		{
			$this->_Garantie1 = $Garantie1;
		}
	}

	public function setDestinataireHUE2($DestinataireHUE2)
	{
		if (is_string($DestinataireHUE2))
		{
			$this->_DestinataireHUE2 = $DestinataireHUE2;
		}
	}

	public function setPays2($Pays2)
	{
		if (is_string($Pays2))
		{
			$this->_Pays2 = $Pays2;
		}
	}

	public function setGarantie2($Garantie2)
	{
		if (is_string($Garantie2))
		{
			$this->_Garantie2 = $Garantie2;
		}
	}

	public function setDestinataireHUE3($DestinataireHUE3)
	{
		if (is_string($DestinataireHUE3))
		{
			$this->_DestinataireHUE3 = $DestinataireHUE3;
		}
	}

	public function setPays3($Pays3)
	{
		if (is_string($Pays3))
		{
			$this->_Pays3 = $Pays3;
		}
	}

	public function setGarantie3($Garantie3)
	{
		if (is_string($Garantie3))
		{
			$this->_Garantie3 = $Garantie3;
		}
	}

	public function setDestinataireHUE4($DestinataireHUE4)
	{
		if (is_string($DestinataireHUE4))
		{
			$this->_DestinataireHUE4 = $DestinataireHUE4;
		}
	}

	public function setPays4($Pays4)
	{
		if (is_string($Pays4))
		{
			$this->_Pays4 = $Pays4;
		}
	}

	public function setGarantie4($Garantie4)
	{
		if (is_string($Garantie4))
		{
			$this->_Garantie4 = $Garantie4;
		}
	}

	public function setSecurite1($Securite1)
	{
		if (is_string($Securite1))
		{
			$this->_Securite1 = $Securite1;
		}
	}

	public function setSecurite2($Securite2)
	{
		if (is_string($Securite2))
		{
			$this->_Securite2 = $Securite2;
		}
	}

	public function setSecurite3($Securite3)
	{
		if (is_string($Securite3))
		{
			$this->_Securite3 = $Securite3;
		}
	}

	public function setTechnologie1($Technologie1)
	{
		if (is_string($Technologie1))
		{
			$this->_Technologie1 = $Technologie1;
		}
	}

	public function setTechnologie2($Technologie2)
	{
		if (is_string($Technologie2))
		{
			$this->_Technologie2 = $Technologie2;
		}
	}
	
	public function setAutre($Autre)
	{
		if (is_string($Autre))
		{
			$this->_Autre = $Autre;
		}
	}
}




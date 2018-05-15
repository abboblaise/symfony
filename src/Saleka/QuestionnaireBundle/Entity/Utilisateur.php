<?php

namespace Saleka\QuestionnaireBundle\Entity;

/**
 * Utilisateur
 *
 * @ORM\Table(name="sa_utilisateur")
 * @ORM\Entity(repositoryClass="Saleka\QuestionnaireBundle\Repository\UtilisateurRepository")
 */
use Doctrine\ORM\Mapping as ORM;

class Utilisateur {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nomuser", type="string", length=150)
	 */
	private $nomuser;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=150, unique=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="telephone", type="string", length=25)
	 */
	private $telephone;

	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set nomuser
	 *
	 * @param string $nomuser
	 *
	 * @return Utilisateur
	 */
	public function setNomuser($nomuser) {
		$this->nomuser = $nomuser;

		return $this;
	}

	/**
	 * Get nomuser
	 *
	 * @return string
	 */
	public function getNomuser() {
		return $this->nomuser;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 *
	 * @return Utilisateur
	 */
	public function setEmail($email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Set telephone
	 *
	 * @param string $telephone
	 *
	 * @return Utilisateur
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;

		return $this;
	}

	/**
	 * Get telephone
	 *
	 * @return string
	 */
	public function getTelephone() {
		return $this->telephone;
	}
}

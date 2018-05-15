<?php

namespace Saleka\QuestionnaireBundle\Entity;

/**
 * Question
 *
 * @ORM\Table(name="sa_question")
 * @ORM\Entity(repositoryClass="Saleka\QuestionnaireBundle\Repository\QuestionRepository")
 */
use Doctrine\ORM\Mapping as ORM;

class Question {
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
	 * @ORM\Column(name="libelle", type="text")
	 */
	private $libelle;

	/**
	 * Get id
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set libelle
	 *
	 * @param string $libelle
	 *
	 * @return Question
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;

		return $this;
	}

	/**
	 * Get libelle
	 *
	 * @return string
	 */
	public function getLibelle() {
		return $this->libelle;
	}
}

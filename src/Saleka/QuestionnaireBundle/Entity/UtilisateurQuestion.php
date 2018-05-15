<?php

namespace Saleka\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurQuestion
 *
 * @ORM\Table(name="utilisateur_question")
 * @ORM\Entity(repositoryClass="Saleka\QuestionnaireBundle\Repository\UtilisateurQuestionRepository")
 */
class UtilisateurQuestion
{
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
     * @ORM\Column(name="reponse", type="text")
     */
    private $reponse;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Set reponse
     *
     * @param string $reponse
     *
     * @return UtilisateurQuestion
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }
}


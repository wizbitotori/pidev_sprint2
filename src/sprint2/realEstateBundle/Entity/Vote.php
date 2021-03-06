<?php


namespace sprint2\realEstateBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * 
 */
class Vote 

{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    

     /**
     * @ORM\ManyToOne(targetEntity="sprint2\realEstateBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(name="idUtilisateur")
     */
    protected $idUtilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="sprint2\realEstateBundle\Entity\Offre")
     * @ORM\JoinColumn(name="idOffre")
     */
    protected $idOffre;

    /**
     * @ORM\Column(name="note")
     */
    protected $note;
    

    /**
     * Set note
     *
     * @param string $note
     * @return Vote
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idUtilisateur
     *
     * @param \sprint2\realEstateBundle\Entity\Utilisateur $idUtilisateur
     * @return Vote
     */
    public function setIdUtilisateur(\sprint2\realEstateBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \sprint2\realEstateBundle\Entity\Utilisateur 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idOffre
     *
     * @param \sprint2\realEstateBundle\Entity\Offre $idOffre
     * @return Vote
     */
    public function setIdOffre(\sprint2\realEstateBundle\Entity\Offre $idOffre = null)
    {
        $this->idOffre = $idOffre;

        return $this;
    }

    /**
     * Get idOffre
     *
     * @return \sprint2\realEstateBundle\Entity\Offre 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}

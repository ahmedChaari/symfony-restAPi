<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $adresse = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255, nullable=false)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=false)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gsm", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gsm = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_civil", type="string", length=255, nullable=false)
     */
    private $etatCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_conjoint", type="string", length=255, nullable=false)
     */
    private $nomConjoint;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_parente", type="string", length=255, nullable=false)
     */
    private $lieuParente;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_enfant", type="integer", nullable=false)
     */
    private $nbrEnfant;

    /**
     * @var string
     *
     * @ORM\Column(name="taille", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="group_sanguin", type="string", length=255, nullable=false)
     */
    private $groupSanguin;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=false)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="n_cnss", type="string", length=255, nullable=false)
     */
    private $nCnss;

    /**
     * @var string
     *
     * @ORM\Column(name="ident_uinique", type="string", length=255, nullable=false)
     */
    private $identUinique;

    /**
     * @var string
     *
     * @ORM\Column(name="prise_en_charge", type="string", length=255, nullable=false)
     */
    private $priseEnCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="assureur", type="string", length=255, nullable=false)
     */
    private $assureur;

    /**
     * @var string
     *
     * @ORM\Column(name="medecin", type="string", length=255, nullable=false)
     */
    private $medecin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_pr_rdv", type="date", nullable=false)
     */
    private $datePrRdv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_rdv", type="date", nullable=false)
     */
    private $dateDeRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_cles", type="string", length=255, nullable=false)
     */
    private $motCles;

    /**
     * @var string
     *
     * @ORM\Column(name="code_apci", type="string", length=255, nullable=false)
     */
    private $codeApci;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_cnam", type="string", length=255, nullable=false)
     */
    private $regCnam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validite", type="date", nullable=false)
     */
    private $dateValidite;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=255, nullable=false)
     */
    private $qualite;


}

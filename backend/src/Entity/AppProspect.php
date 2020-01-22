<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppProspect
 *
 * @ORM\Table(name="app_prospect")
 * @ORM\Entity
 */
class AppProspect
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
     * @var string|null
     *
     * @ORM\Column(name="processflag", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $processflag = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="insert_platform", type="string", length=3, nullable=true, options={"default"="'1'"})
     */
    private $insertPlatform = "1";

    /**
     * @var string|null
     *
     * @ORM\Column(name="insert_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $insertUser = null;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_date", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $insertDate = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="update_platform", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $updatePlatform = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="update_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $updateUser = null;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true, options={"default"="current_timestamp()"})
     */
    private $updateDate = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete_platform", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $deletePlatform = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $deleteUser = null;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="delete_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $deleteDate = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cru_csvnote", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $cruCsvnote = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_erpsent", type="string", length=3, nullable=true, options={"default"="'0'"})
     */
    private $isErpsent = '\'0\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_enabled", type="string", length=3, nullable=true, options={"default"="'1'"})
     */
    private $isEnabled = "1";

    /**
     * @var int|null
     *
     * @ORM\Column(name="i", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $i = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_erp", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $codeErp = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nickname", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nickname = null;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthday", type="date", nullable=true, options={"default"="NULL"})
     */
    private $birthday = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $email = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $password = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_gender", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=gender)"})
     */
    private $idGender = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_country", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=countries)"})
     */
    private $idCountry = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_city", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=cities)"})
     */
    private $idCity = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_language", type="integer", nullable=true, options={"default"="1","comment"="app_languages.id"})
     */
    private $idLanguage = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_points", type="integer", nullable=true, options={"default"="NULL","comment"="puntos acumulados"})
     */
    private $totalPoints = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_picture", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $urlPicture = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $phone = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_status", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=userstatus)"})
     */
    private $idStatus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProcessflag(): ?string
    {
        return $this->processflag;
    }

    public function setProcessflag(?string $processflag): self
    {
        $this->processflag = $processflag;

        return $this;
    }

    public function getInsertPlatform(): ?string
    {
        return $this->insertPlatform;
    }

    public function setInsertPlatform(?string $insertPlatform): self
    {
        $this->insertPlatform = $insertPlatform;

        return $this;
    }

    public function getInsertUser(): ?string
    {
        return $this->insertUser;
    }

    public function setInsertUser(?string $insertUser): self
    {
        $this->insertUser = $insertUser;

        return $this;
    }

    public function getInsertDate(): ?\DateTimeInterface
    {
        return $this->insertDate;
    }

    public function setInsertDate(\DateTimeInterface $insertDate): self
    {
        $this->insertDate = $insertDate;

        return $this;
    }

    public function getUpdatePlatform(): ?string
    {
        return $this->updatePlatform;
    }

    public function setUpdatePlatform(?string $updatePlatform): self
    {
        $this->updatePlatform = $updatePlatform;

        return $this;
    }

    public function getUpdateUser(): ?string
    {
        return $this->updateUser;
    }

    public function setUpdateUser(?string $updateUser): self
    {
        $this->updateUser = $updateUser;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }

    public function setUpdateDate(?\DateTimeInterface $updateDate): self
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function getDeletePlatform(): ?string
    {
        return $this->deletePlatform;
    }

    public function setDeletePlatform(?string $deletePlatform): self
    {
        $this->deletePlatform = $deletePlatform;

        return $this;
    }

    public function getDeleteUser(): ?string
    {
        return $this->deleteUser;
    }

    public function setDeleteUser(?string $deleteUser): self
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    public function getDeleteDate(): ?\DateTimeInterface
    {
        return $this->deleteDate;
    }

    public function setDeleteDate(?\DateTimeInterface $deleteDate): self
    {
        $this->deleteDate = $deleteDate;

        return $this;
    }

    public function getCruCsvnote(): ?string
    {
        return $this->cruCsvnote;
    }

    public function setCruCsvnote(?string $cruCsvnote): self
    {
        $this->cruCsvnote = $cruCsvnote;

        return $this;
    }

    public function getIsErpsent(): ?string
    {
        return $this->isErpsent;
    }

    public function setIsErpsent(?string $isErpsent): self
    {
        $this->isErpsent = $isErpsent;

        return $this;
    }

    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getI(): ?int
    {
        return $this->i;
    }

    public function setI(?int $i): self
    {
        $this->i = $i;

        return $this;
    }

    public function getCodeErp(): ?string
    {
        return $this->codeErp;
    }

    public function setCodeErp(?string $codeErp): self
    {
        $this->codeErp = $codeErp;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIdGender(): ?int
    {
        return $this->idGender;
    }

    public function setIdGender(?int $idGender): self
    {
        $this->idGender = $idGender;

        return $this;
    }

    public function getIdCountry(): ?int
    {
        return $this->idCountry;
    }

    public function setIdCountry(?int $idCountry): self
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    public function getIdCity(): ?int
    {
        return $this->idCity;
    }

    public function setIdCity(?int $idCity): self
    {
        $this->idCity = $idCity;

        return $this;
    }

    public function getIdLanguage(): ?int
    {
        return $this->idLanguage;
    }

    public function setIdLanguage(?int $idLanguage): self
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    public function getTotalPoints(): ?int
    {
        return $this->totalPoints;
    }

    public function setTotalPoints(?int $totalPoints): self
    {
        $this->totalPoints = $totalPoints;

        return $this;
    }

    public function getUrlPicture(): ?string
    {
        return $this->urlPicture;
    }

    public function setUrlPicture(?string $urlPicture): self
    {
        $this->urlPicture = $urlPicture;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getIdStatus(): ?int
    {
        return $this->idStatus;
    }

    public function setIdStatus(?int $idStatus): self
    {
        $this->idStatus = $idStatus;

        return $this;
    }


}

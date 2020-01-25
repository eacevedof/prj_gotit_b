<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppPromotion
 *
 * @ORM\Table(name="app_promotion")
 * @ORM\Entity(repositoryClass="App\Repository\AppPromotionRepository")
 */
class AppPromotion
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
    private $isErpsent = "0";

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateStart = null;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateEnd = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="original_price", type="decimal", precision=11, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $originalPrice = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="promo_price", type="decimal", precision=11, scale=3, nullable=true, options={"default"="NULL"})
     */
    private $promoPrice = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_prospects", type="integer", nullable=true, options={"default"="NULL","comment"="el número máximo de inscritos"})
     */
    private $maxProspects = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_status", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=promostatus) online,stopped,cancelled"})
     */
    private $idStatus = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_acumulable", type="integer", nullable=true, options={"default"="NULL","comment"="si tiene función de bono"})
     */
    private $isAcumulable = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_acumulable", type="integer", nullable=true, options={"default"="NULL","comment"="las promos mínimas para reclamar el bono"})
     */
    private $minAcumulable = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_acumperiod", type="integer", nullable=true, options={"default"="NULL","comment"="máximo en días que se puede acumular"})
     */
    private $maxAcumperiod = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="free_units", type="integer", nullable=true, options={"default"="NULL","comment"="unidades a regalar"})
     */
    private $freeUnits = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="repeat_period", type="integer", nullable=true, options={"default"="NULL","comment"="dias que tienen que pasar para poder insribirse nuevamente"})
     */
    private $repeatPeriod = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=250, nullable=true, options={"default"="NULL","comment"="notas que no se publicarán"})
     */
    private $notes = null;

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

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(?\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getOriginalPrice(): ?string
    {
        return $this->originalPrice;
    }

    public function setOriginalPrice(?string $originalPrice): self
    {
        $this->originalPrice = $originalPrice;

        return $this;
    }

    public function getPromoPrice(): ?string
    {
        return $this->promoPrice;
    }

    public function setPromoPrice(?string $promoPrice): self
    {
        $this->promoPrice = $promoPrice;

        return $this;
    }

    public function getMaxProspects(): ?int
    {
        return $this->maxProspects;
    }

    public function setMaxProspects(?int $maxProspects): self
    {
        $this->maxProspects = $maxProspects;

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

    public function getIsAcumulable(): ?int
    {
        return $this->isAcumulable;
    }

    public function setIsAcumulable(?int $isAcumulable): self
    {
        $this->isAcumulable = $isAcumulable;

        return $this;
    }

    public function getMinAcumulable(): ?int
    {
        return $this->minAcumulable;
    }

    public function setMinAcumulable(?int $minAcumulable): self
    {
        $this->minAcumulable = $minAcumulable;

        return $this;
    }

    public function getMaxAcumperiod(): ?int
    {
        return $this->maxAcumperiod;
    }

    public function setMaxAcumperiod(?int $maxAcumperiod): self
    {
        $this->maxAcumperiod = $maxAcumperiod;

        return $this;
    }

    public function getFreeUnits(): ?int
    {
        return $this->freeUnits;
    }

    public function setFreeUnits(?int $freeUnits): self
    {
        $this->freeUnits = $freeUnits;

        return $this;
    }

    public function getRepeatPeriod(): ?int
    {
        return $this->repeatPeriod;
    }

    public function setRepeatPeriod(?int $repeatPeriod): self
    {
        $this->repeatPeriod = $repeatPeriod;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }


}

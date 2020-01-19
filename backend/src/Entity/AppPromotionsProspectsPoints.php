<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppPromotionsProspectsPoints
 *
 * @ORM\Table(name="app_promotions_prospects_points")
 * @ORM\Entity
 */
class AppPromotionsProspectsPoints
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
    private $processflag = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="insert_platform", type="string", length=3, nullable=true, options={"default"="'1'"})
     */
    private $insertPlatform = '\'1\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="insert_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $insertUser = 'NULL';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="insert_date", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $insertDate = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="update_platform", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $updatePlatform = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="update_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $updateUser = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true, options={"default"="current_timestamp()"})
     */
    private $updateDate = 'current_timestamp()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete_platform", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $deletePlatform = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="delete_user", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $deleteUser = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="delete_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $deleteDate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cru_csvnote", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $cruCsvnote = 'NULL';

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
    private $isEnabled = '\'1\'';

    /**
     * @var int|null
     *
     * @ORM\Column(name="i", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $i = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_promotion", type="integer", nullable=true, options={"default"="NULL","comment"="app_promotion.id"})
     */
    private $idPromotion = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_prospect", type="integer", nullable=true, options={"default"="NULL","comment"="app_prospect.id"})
     */
    private $idProspect = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="reset_points", type="integer", nullable=true, options={"default"="NULL","comment"="contador promos efectivas si igual a min_acumulable se r"})
     */
    private $resetPoints = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_points", type="integer", nullable=true, options={"default"="NULL","comment"="contador total realizado en esta promo"})
     */
    private $totalPoints = 'NULL';

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

    public function getIdPromotion(): ?int
    {
        return $this->idPromotion;
    }

    public function setIdPromotion(?int $idPromotion): self
    {
        $this->idPromotion = $idPromotion;

        return $this;
    }

    public function getIdProspect(): ?int
    {
        return $this->idProspect;
    }

    public function setIdProspect(?int $idProspect): self
    {
        $this->idProspect = $idProspect;

        return $this;
    }

    public function getResetPoints(): ?int
    {
        return $this->resetPoints;
    }

    public function setResetPoints(?int $resetPoints): self
    {
        $this->resetPoints = $resetPoints;

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


}

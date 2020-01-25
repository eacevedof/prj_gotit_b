<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppArray
 *
 * @ORM\Table(name="app_array")
 * @ORM\Entity(repositoryClass="App\Repository\AppArrayRepository")
 */
class AppArray
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
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $type = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_tosave", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $idTosave = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $description = null;

    /**
     * @var int
     *
     * @ORM\Column(name="order_by", type="integer", nullable=false, options={"default"="100"})
     */
    private $orderBy = '100';

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_cache", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $codeCache = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_parent", type="integer", nullable=true, options={"default"="NULL","comment"="para el caso de paises"})
     */
    private $idParent = null;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdTosave(): ?string
    {
        return $this->idTosave;
    }

    public function setIdTosave(?string $idTosave): self
    {
        $this->idTosave = $idTosave;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getOrderBy(): ?int
    {
        return $this->orderBy;
    }

    public function setOrderBy(int $orderBy): self
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    public function getCodeCache(): ?string
    {
        return $this->codeCache;
    }

    public function setCodeCache(?string $codeCache): self
    {
        $this->codeCache = $codeCache;

        return $this;
    }

    public function getIdParent(): ?int
    {
        return $this->idParent;
    }

    public function setIdParent(?int $idParent): self
    {
        $this->idParent = $idParent;

        return $this;
    }


}

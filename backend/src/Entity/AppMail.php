<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppMail
 *
 * @ORM\Table(name="app_mail")
 * @ORM\Entity(repositoryClass="App\Repository\AppMailRepository")
 */
class AppMail
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
     * @ORM\Column(name="from_mail", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $fromMail = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="from_title", type="string", length=250, nullable=true, options={"default"="NULL"})
     */
    private $fromTitle = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to", type="string", length=2000, nullable=true, options={"default"="NULL"})
     */
    private $to = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cc", type="string", length=2000, nullable=true, options={"default"="NULL"})
     */
    private $cc = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bcc", type="string", length=2000, nullable=true, options={"default"="NULL"})
     */
    private $bcc = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $subject = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $body = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_status", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=mailstatus)"})
     */
    private $idStatus = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_entity", type="string", length=25, nullable=true, options={"default"="NULL","comment"="app_table.id"})
     */
    private $idEntity = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_entity_desc", type="integer", nullable=true, options={"default"="NULL","comment"="app_array.id (type=entities)"})
     */
    private $idEntityDesc = null;

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

    public function getFromMail(): ?string
    {
        return $this->fromMail;
    }

    public function setFromMail(?string $fromMail): self
    {
        $this->fromMail = $fromMail;

        return $this;
    }

    public function getFromTitle(): ?string
    {
        return $this->fromTitle;
    }

    public function setFromTitle(?string $fromTitle): self
    {
        $this->fromTitle = $fromTitle;

        return $this;
    }

    public function getTo(): ?string
    {
        return $this->to;
    }

    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }

    public function getCc(): ?string
    {
        return $this->cc;
    }

    public function setCc(?string $cc): self
    {
        $this->cc = $cc;

        return $this;
    }

    public function getBcc(): ?string
    {
        return $this->bcc;
    }

    public function setBcc(?string $bcc): self
    {
        $this->bcc = $bcc;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

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

    public function getIdEntity(): ?string
    {
        return $this->idEntity;
    }

    public function setIdEntity(?string $idEntity): self
    {
        $this->idEntity = $idEntity;

        return $this;
    }

    public function getIdEntityDesc(): ?int
    {
        return $this->idEntityDesc;
    }

    public function setIdEntityDesc(?int $idEntityDesc): self
    {
        $this->idEntityDesc = $idEntityDesc;

        return $this;
    }


}

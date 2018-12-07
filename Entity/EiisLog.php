<?php

namespace Corp\EiisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EiisLog
 *
 * @ORM\Table(name="eiis_log")
 * @ORM\Entity(repositoryClass="Corp\EiisBundle\Repository\EiisLogRepository")
 */
class EiisLog
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
     * @ORM\Column(name="systemObjectCode", type="string", length=255)
     */
    private $systemObjectCode;

    /**
     * @var string
     *
     * @ORM\Column(name="oldValue", type="text", nullable=true)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="newValue", type="text", nullable=true)
     */
    private $newValue;

    /**
     * @var string
     *
     * @ORM\Column(name="EiisId", type="string", length=36, nullable=true)
     */
    private $eiisId;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="externalName", type="string", length=255)
	 */
	private $externalName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * EiisLog constructor.
     * @param \DateTime $dateCreated
     */
    public function __construct()
    {
        $this->dateCreated = new \DateTime();
    }


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
     * Set systemObjectCode
     *
     * @param string $systemObjectCode
     *
     * @return EiisLog
     */
    public function setSystemObjectCode($systemObjectCode)
    {
        $this->systemObjectCode = $systemObjectCode;

        return $this;
    }

    /**
     * Get systemObjectCode
     *
     * @return string
     */
    public function getSystemObjectCode()
    {
        return $this->systemObjectCode;
    }

    /**
     * Set oldValue
     *
     * @param string $oldValue
     *
     * @return EiisLog
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Get oldValue
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Set newValue
     *
     * @param string $newValue
     *
     * @return EiisLog
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Get newValue
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Set eiisId
     *
     * @param string $eiisId
     *
     * @return EiisLog
     */
    public function setEiisId($eiisId)
    {
        $this->eiisId = $eiisId;

        return $this;
    }

    /**
     * Get eiisId
     *
     * @return string
     */
    public function getEiisId()
    {
        return $this->eiisId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return EiisLog
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

	/**
	 * @return string
	 */
	public function getExternalName(): string
	{
		return $this->externalName;
	}

	/**
	 * @param string $externalName
	 */
	public function setExternalName(string $externalName)
	{
		$this->externalName = $externalName;

		return $this;
	}

}


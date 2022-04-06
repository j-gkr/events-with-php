<?php

namespace App\Form\Dto;

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

class Event
{   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->eventDate = new DateTime();
    }

    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var string|null
     * 
     * @Assert\NotNull(message="Please specify a title.")
     */
    protected $eventTitle;

    /**
     * @var DateTime|null
     * 
     * @Assert\NotNull(message="Please specify a date.")
     */
    protected $eventDate;

    /**
     * @var string|null
     * 
     * @Assert\NotNull(message="Please specify a city.")
     */
    protected $eventCity;

    /**
     * @var Collection
     */
    protected $tickets;

    /**
     * @var int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getEventTitle(): ?string
    {
        return $this->eventTitle;
    }

    /**
     * @param string|null $eventTitle
     */
    public function setEventTitle(?string $eventTitle): void
    {
        $this->eventTitle = $eventTitle;
    }

    /**
     * @return DateTime|null
     */
    public function getEventDate(): ?DateTime
    {
        return $this->eventDate;
    }

    /**
     * @param string|null $eventTitle
     */
    public function setEventDate(?DateTime $eventDate): void
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return string|null
     */
    public function getEventCity(): ?string
    {
        return $this->eventCity;
    }

    /**
     * @param string|null $eventTitle
     */
    public function setEventCity(?string $eventCity): void
    {
        $this->eventCity = $eventCity;
    }

    /**
     * @return Collection
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function toArray(): array
    {
        $tickets = [];
        foreach($this->getTickets() as $ticket) {
            $tickets[] = $ticket->toArray();
        }

        return [
            'eventTitle' => $this->eventTitle,
            'eventDate' => $this->eventDate->format('c'),
            'eventCity' => $this->eventCity,
            'tickets' => $tickets
        ];
    }
}
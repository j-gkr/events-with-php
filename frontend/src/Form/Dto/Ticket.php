<?php

namespace App\Form\Dto;

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

class Ticket
{
    /**
     * @var string|null
     * 
     * @Assert\NotNull(message="Please specify a barcode.")
     */
    protected $barcode;

    /**
     * @var string|null
     * 
     * @Assert\NotNull(message="Please specify a first name.")
     */
    protected $firstName;

    /**
     * @var DateTime|null
     * 
     * @Assert\NotNull(message="Please specify a last name.")
     */
    protected $lastName;

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'barcode' => $this->barcode,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName
        ];
    }
}
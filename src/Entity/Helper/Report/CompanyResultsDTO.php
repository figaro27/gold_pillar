<?php

namespace App\Entity\Helper\Report;

class CompanyResultsDTO
{
    private $entryFee;
    private $exitFee;
    private $profit;
    private $percentage;
    private $advertisingReserve;
    private $balance;
    private $isPaid;
    private $cost;

    public function getEntryFee(): ?float
    {
        return $this->entryFee;
    }

    public function setEntryFee(float $entryFee): self
    {
        $this->entryFee = $entryFee;

        return $this;
    }

    public function getExitFee(): ?float
    {
        return $this->exitFee;
    }

    public function setExitFee(float $exitFee): self
    {
        $this->exitFee = $exitFee;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getProfit(): ?float
    {
        return $this->profit;
    }

    public function setProfit(float $profit): self
    {
        $this->profit = $profit;

        return $this;
    }

    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;

        return $this;
    }

    public function getAdvertisingReserve(): ?float
    {
        return $this->advertisingReserve;
    }

    public function setAdvertisingReserve(float $advertisingReserve): self
    {
        $this->advertisingReserve = $advertisingReserve;

        return $this;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    public function setIsPaid(?bool $isPaid): self
    {
        $this->isPaid = $isPaid;

        return $this;
    }
}

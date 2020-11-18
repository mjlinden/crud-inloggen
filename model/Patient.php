<?php

namespace model;

class Patient
{
    private $id;
    private $naam;
    private $adres;
    private $woonplaats;
    private $zknummer;
    private $geboortedatum;
    private $soortverzekering;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }

}
<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CACountry implements Country
{
  public function getName()
  {
    return 'Canada';
  }

  public function getIso2()
  {
    return 'CA';
  }

  public function getIso3()
  {
    return 'CAN';
  }

  public function getWmo()
  {
    return 'CN';
  }

  public function getNumericCode()
  {
    return 124;
  }

  public function getDialPrefix()
  {
    return 1;
  }

  public function getCurrencyCode()
  {
    return 'CAD';
  }
}

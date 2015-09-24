<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class MOCountry implements Country
{
  public function getName()
  {
    return 'Macao';
  }

  public function getIso2()
  {
    return 'MO';
  }

  public function getIso3()
  {
    return 'MAC';
  }

  public function getWmo()
  {
    return 'MU';
  }

  public function getNumericCode()
  {
    return 446;
  }

  public function getDialPrefix()
  {
    return 853;
  }

  public function getCurrencyCode()
  {
    return 'MOP';
  }
}

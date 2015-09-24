<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class CWCountry implements Country
{
  public function getName()
  {
    return 'Curaçao';
  }

  public function getIso2()
  {
    return 'CW';
  }

  public function getIso3()
  {
    return 'CUW';
  }

  public function getWmo()
  {
    return '';
  }

  public function getNumericCode()
  {
    return 531;
  }

  public function getDialPrefix()
  {
    return 599;
  }

  public function getCurrencyCode()
  {
    return 'ANG';
  }
}

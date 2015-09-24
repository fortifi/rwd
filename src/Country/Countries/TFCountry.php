<?php
namespace Fortifi\Rwd\Country\Countries;

use Fortifi\Rwd\Country\Country;

class TFCountry implements Country
{
  public function getName()
  {
    return 'French Southern Territories';
  }

  public function getIso2()
  {
    return 'TF';
  }

  public function getIso3()
  {
    return 'ATF';
  }

  public function getWmo()
  {
    return ' ';
  }

  public function getNumericCode()
  {
    return 260;
  }

  public function getDialPrefix()
  {
    return 262;
  }

  public function getCurrencyCode()
  {
    return 'EUR';
  }
}

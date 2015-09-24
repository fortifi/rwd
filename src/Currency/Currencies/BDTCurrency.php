<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class BDTCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'BDT';
  }

  public function getCode()
  {
    return 'BDT';
  }

  public function getNumericCode()
  {
    return 50;
  }

  public function getName()
  {
    return 'Bangladesh, Taka';
  }

  public function getMajorUnit()
  {
    return 'taka';
  }

  public function getMinorUnit()
  {
    return 'paisa';
  }
}

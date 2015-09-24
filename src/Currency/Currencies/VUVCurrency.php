<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class VUVCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'VUV';
  }

  public function getCode()
  {
    return 'VUV';
  }

  public function getNumericCode()
  {
    return 548;
  }

  public function getName()
  {
    return 'Vanuatu, Vatu';
  }

  public function getMajorUnit()
  {
    return 'vatu';
  }

  public function getMinorUnit()
  {
    return 'centime';
  }
}

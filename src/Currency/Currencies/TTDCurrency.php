<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class TTDCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TT$';
  }

  public function getCode()
  {
    return 'TTD';
  }

  public function getNumericCode()
  {
    return 780;
  }

  public function getName()
  {
    return 'Trinidad and Tobago Dollar';
  }

  public function getMajorUnit()
  {
    return 'dollar';
  }

  public function getMinorUnit()
  {
    return 'cent';
  }
}

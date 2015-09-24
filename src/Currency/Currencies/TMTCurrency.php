<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class TMTCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'TMT';
  }

  public function getCode()
  {
    return 'TMT';
  }

  public function getNumericCode()
  {
    return 934;
  }

  public function getName()
  {
    return 'Turkmenistani New Manat';
  }

  public function getMajorUnit()
  {
    return 'manat';
  }

  public function getMinorUnit()
  {
    return 'tenga';
  }
}

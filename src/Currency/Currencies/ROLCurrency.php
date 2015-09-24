<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class ROLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'ROL';
  }

  public function getCode()
  {
    return 'ROL';
  }

  public function getNumericCode()
  {
    return 642;
  }

  public function getName()
  {
    return 'Romania, Old Leu';
  }

  public function getMajorUnit()
  {
    return 'leu (pl. lei)';
  }

  public function getMinorUnit()
  {
    return 'bani';
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return '.';
  }
}

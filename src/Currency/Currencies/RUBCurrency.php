<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class RUBCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'руб';
  }

  public function getCode()
  {
    return 'RUB';
  }

  public function getNumericCode()
  {
    return 643;
  }

  public function getName()
  {
    return 'Russian Ruble';
  }

  public function getMajorUnit()
  {
    return 'ruble';
  }

  public function getMinorUnit()
  {
    return 'kopeck';
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

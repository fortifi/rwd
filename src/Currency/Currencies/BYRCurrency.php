<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BYRCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'p.';
  }

  public function getCode()
  {
    return 'BYR';
  }

  public function getNumericCode()
  {
    return 974;
  }

  public function getName()
  {
    return 'Belarussian Ruble';
  }

  public function getMajorUnit()
  {
    return 'ruble';
  }

  public function getMinorUnit()
  {
    return ' ';
  }
}
<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class LTLCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'Lt';
  }

  public function getCode()
  {
    return 'LTL';
  }

  public function getNumericCode()
  {
    return 440;
  }

  public function getName()
  {
    return 'Lithuanian Litas';
  }

  public function getMajorUnit()
  {
    return 'litas';
  }

  public function getMinorUnit()
  {
    return 'centu';
  }

  public function getDecimalSeparator()
  {
    return ',';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}

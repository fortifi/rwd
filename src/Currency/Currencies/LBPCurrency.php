<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class LBPCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '£';
  }

  public function getCode()
  {
    return 'LBP';
  }

  public function getNumericCode()
  {
    return 422;
  }

  public function getName()
  {
    return 'Lebanese Pound';
  }

  public function getMajorUnit()
  {
    return 'pound (livre)';
  }

  public function getMinorUnit()
  {
    return 'piastre';
  }

  public function getDecimalSeparator()
  {
    return '#';
  }

  public function getThousandSeparator()
  {
    return ' ';
  }
}
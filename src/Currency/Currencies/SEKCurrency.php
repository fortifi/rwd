<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class SEKCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'kr';
  }

  public function getCode()
  {
    return 'SEK';
  }

  public function getNumericCode()
  {
    return '752';
  }

  public function getName()
  {
    return 'Swedish Krona';
  }

  public function getMajorUnit()
  {
    return 'krona (pl. kronor)';
  }

  public function getMinorUnit()
  {
    return 'öre';
  }

  public function getUSDAverage()
  {
    return 7.0624;
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

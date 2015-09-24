<?php
namespace Fortifi\Rwd\Currency\Currencies;

use Fortifi\Rwd\Currency\AbstractCurrency;

class UAHCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '₴';
  }

  public function getCode()
  {
    return 'UAH';
  }

  public function getNumericCode()
  {
    return 980;
  }

  public function getName()
  {
    return 'Ukraine, Hryvnia';
  }

  public function getMajorUnit()
  {
    return 'Hryvnia';
  }

  public function getMinorUnit()
  {
    return 'kopiyka';
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

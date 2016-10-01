<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[124-9]\\d{2,5}|3(?:\\d{2,5}|\\d{7})',
    'PossibleNumberPattern' => '\\d{3,6}|\\d{8}',
    'PossibleLength' => 
    array (
      0 => '3',
      1 => '5',
      2 => '6',
      3 => '8',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '211',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '211',
    'PossibleLength' => 
    array (
      0 => '3',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '112|911',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '911',
    'PossibleLength' => 
    array (
      0 => '3',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '1(?:12|\\d{4,5})|[25-9](?:11|\\d{4,5})|3(?:\\d{4,5}|0000\\d{3}|11)|411',
    'PossibleNumberPattern' => '\\d{3,6}|\\d{8}',
    'ExampleNumber' => '12345',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '[23567]11',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '611',
    'PossibleLength' => 
    array (
      0 => '3',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'CA',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);

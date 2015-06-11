<?php namespace Katas\RomanNumerals\Tests\Unit;

use Katas\RomanNumerals\Tests\TestCase;
use Katas\RomanNumerals\NumberConverter;

class RomanNumeralTests extends TestCase {

	public function test_one_converts_to_I() {
		$converter = new NumberConverter();
		$romanNumeral = $converter->arabicToRoman(1);
		$this->assertEquals('I', $romanNumeral);
	}

}

<?php namespace Katas\RomanNumerals\Tests\Unit;

use Katas\RomanNumerals\Tests\TestCase;
use Katas\RomanNumerals\NumberConverter;

class RomanNumeralTests extends TestCase {

	public function test_1_converts_to_I() {
		$converter = new NumberConverter();
		$romanNumeral = $converter->arabicToRoman(1);
		$this->assertEquals('I', $romanNumeral);
	}

	public function test_2_converts_to_II() {
		$converter = new NumberConverter();
		$romanNumeral = $converter->arabicToRoman(2);
		$this->assertEquals('II', $romanNumeral);
	}

}

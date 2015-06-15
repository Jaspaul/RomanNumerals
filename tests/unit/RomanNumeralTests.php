<?php namespace Katas\RomanNumerals\Tests\Unit;

use Katas\RomanNumerals\Tests\TestCase;
use Katas\RomanNumerals\NumberConverter;

class RomanNumeralTests extends TestCase {
	protected $converter;

	public function setUp() {
		parent::setUp();
		$this->converter = new NumberConverter();
	}

	public function test_1_converts_to_I() {
		$romanNumeral = $this->converter->arabicToRoman(1);
		$this->assertEquals('I', $romanNumeral);
	}

	public function test_2_converts_to_II() {
		$romanNumeral = $this->converter->arabicToRoman(2);
		$this->assertEquals('II', $romanNumeral);
	}

	public function test_3_converts_to_III() {
		$romanNumeral = $this->converter->arabicToRoman(3);
		$this->assertEquals('III', $romanNumeral);
	}

	public function test_4_converts_to_IV() {
		$romanNumeral = $this->converter->arabicToRoman(4);
		$this->assertEquals('IV', $romanNumeral);
	}

	public function test_5_converts_to_V() {
		$romanNumeral = $this->converter->arabicToRoman(5);
		$this->assertEquals('V', $romanNumeral);
	}

}

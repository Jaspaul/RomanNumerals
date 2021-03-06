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

	public function test_6_converts_to_VI() {
		$romanNumeral = $this->converter->arabicToRoman(6);
		$this->assertEquals('VI', $romanNumeral);
	}

	public function test_9_converts_to_IX() {
		$romanNumeral = $this->converter->arabicToRoman(9);
		$this->assertEquals('IX', $romanNumeral);
	}

	public function test_10_converts_to_X() {
		$romanNumeral = $this->converter->arabicToRoman(10);
		$this->assertEquals('X', $romanNumeral);
	}

	public function test_29_converts_to_XXIX() {
		$romanNumeral = $this->converter->arabicToRoman(29);
		$this->assertEquals('XXIX', $romanNumeral);
	}

	public function test_100_converts_to_C() {
		$romanNumeral = $this->converter->arabicToRoman(100);
		$this->assertEquals('C', $romanNumeral);
	}

}

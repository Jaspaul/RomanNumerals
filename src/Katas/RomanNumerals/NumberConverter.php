<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		if ($number === 3) {
			return 'III';
		}
		if ($number === 2) {
			return 'II';
		}
		return 'I';
	}
}

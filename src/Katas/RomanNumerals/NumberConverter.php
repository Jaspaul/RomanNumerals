<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		if ($number === 2) {
			return 'II';
		}
		return 'I';
	}
}

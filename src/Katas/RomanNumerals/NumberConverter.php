<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		$result = '';

		for ($i = 1; $i <= $number; ++$i) {
			$result .= 'I';
		}

		return $result;
	}
}

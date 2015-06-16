<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		$result = '';

		if ($number === 10) {
			return 'X';
		}

		if ($number === 9) {
			return 'IX';
		}

		if ($number >= 5) {
			$result .= 'V';
			$number -= 5;
		}

		if ($number === 4) {
			return 'IV';
		}

		for ($i = 1; $i <= $number; ++$i) {
			$result .= 'I';
		}

		return $result;
	}
}

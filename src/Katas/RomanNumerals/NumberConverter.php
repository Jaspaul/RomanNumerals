<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		$result = '';

		if ($number >= 10) {
			$result .= 'X';
			$number -= 10;
		}

		if ($number >= 9) {
			$result .= 'IX';
			$number -= 9;
		}

		if ($number >= 5) {
			$result .= 'V';
			$number -= 5;
		}

		if ($number >= 4) {
			$result .= 'IV';
			$number -= 4;
		}

		for ($i = 1; $i <= $number; ++$i) {
			$result .= 'I';
		}

		return $result;
	}
}

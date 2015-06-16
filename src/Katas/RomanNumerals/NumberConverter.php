<?php namespace Katas\RomanNumerals;

class NumberConverter {
	public function arabicToRoman($number) {
		$result = '';

		if ($number === 6) {
			return 'VI';
		}

		if ($number === 5) {
			return 'V';
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

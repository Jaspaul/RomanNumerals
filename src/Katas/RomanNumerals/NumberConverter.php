<?php namespace Katas\RomanNumerals;

class NumberConverter {
	private function appendResult($number, $value, $result) {
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

		return [$number, $result];
	}

	public function arabicToRoman($number) {
		$result = '';

		list($number, $result) = $this->appendResult($number, 10, $result);
		list($number, $result) = $this->appendResult($number, 9, $result);
		list($number, $result) = $this->appendResult($number, 5, $result);
		list($number, $result) = $this->appendResult($number, 4, $result);

		for ($i = 1; $i <= $number; ++$i) {
			$result .= 'I';
		}

		return $result;
	}
}

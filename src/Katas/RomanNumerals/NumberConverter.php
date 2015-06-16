<?php namespace Katas\RomanNumerals;

class NumberConverter {
	private $map = [
		10 => 'X',
		9  => 'IX',
		5  => 'V',
		4  => 'IV',
		1  => 'I'
	];

	private function appendResult($number, $value, $result) {
		if (array_key_exists($value, $this->map) && $number >= $value) {
			$result .= $this->map[$value];
			$number -= $value;
		}

		return [$number, $result];
	}

	public function arabicToRoman($number) {
		$result = '';

		while($number != 0) {
			list($number, $result) = $this->appendResult($number, 10, $result);
			list($number, $result) = $this->appendResult($number, 9, $result);
			list($number, $result) = $this->appendResult($number, 5, $result);
			list($number, $result) = $this->appendResult($number, 4, $result);
			list($number, $result) = $this->appendResult($number, 1, $result);
		}

		return $result;
	}
}

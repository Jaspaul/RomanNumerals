<?php namespace Katas\RomanNumerals;

class NumberConverter {

	private $map = [
		1000 => 'M',
		500  => 'D',
		100  => 'C',
		50   => 'L',
		10   => 'X',
		9    => 'IX',
		5    => 'V',
		4    => 'IV',
		1    => 'I'
	];

	public function arabicToRoman($number) {
		$result = '';

		while($number != 0) {
			foreach (array_keys($this->map) as $value) {
				if ($number >= $value) {
					$result .= $this->map[$value];
					$number -= $value;
					break;
				}
			}
		}

		return $result;
	}

}

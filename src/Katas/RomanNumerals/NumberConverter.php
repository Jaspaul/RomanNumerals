<?php namespace Katas\RomanNumerals;

class NumberConverter {

	private $map = [
		1000 => 'M',
		900  => 'CM',
		500  => 'D',
		400  => 'CD',
		100  => 'C',
		90   => 'XC',
		50   => 'L',
		40   => 'XL',
		10   => 'X',
		9    => 'IX',
		5    => 'V',
		4    => 'IV',
		1    => 'I'
	];

	public function arabicToRoman($number) {
		$result = '';

		while($number != 0) {
			foreach($this->map as $key => $value) {
				if ($number >= $key) {
					$result .= $value;
					$number -= $key;
					break;
				}
			}
		}

		return $result;
	}

}

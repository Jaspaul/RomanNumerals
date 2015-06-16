<?php namespace Katas\RomanNumerals\Tests\Unit;

use Katas\RomanNumerals\Tests\TestCase;
use Katas\RomanNumerals\NumberConverter;

class MegaNumeralsTests extends TestCase {
	protected $converter;

	public function setUp() {
		parent::setUp();
		$this->converter = new NumberConverter();
	}

	public function test_1_converts_to_I() {
		$romanNumeral = $this->converter->arabicToRoman(1);
		$this->assertEquals('I', $romanNumeral);
	}

	public function test_32_converts_to_XXXII() {
		$romanNumeral = $this->converter->arabicToRoman(32);
		$this->assertEquals('XXXII', $romanNumeral);
	}

	public function test_63_converts_to_LXIII() {
		$romanNumeral = $this->converter->arabicToRoman(63);
		$this->assertEquals('LXIII', $romanNumeral);
	}

	public function test_94_converts_to_XCIV() {
		$romanNumeral = $this->converter->arabicToRoman(94);
		$this->assertEquals('XCIV', $romanNumeral);
	}

	public function test_33_converts_to_XXXIII() {
		$romanNumeral = $this->converter->arabicToRoman(33);
		$this->assertEquals('XXXIII', $romanNumeral);
	}

	public function test_64_converts_to_LXIV() {
		$romanNumeral = $this->converter->arabicToRoman(64);
		$this->assertEquals('LXIV', $romanNumeral);
	}

	public function test_95_converts_to_XCV() {
		$romanNumeral = $this->converter->arabicToRoman(95);
		$this->assertEquals('XCV', $romanNumeral);
	}

	public function test_34_converts_to_XXXIV() {
		$romanNumeral = $this->converter->arabicToRoman(34);
		$this->assertEquals('XXXIV', $romanNumeral);
	}

	public function test_65_converts_to_LXV() {
		$romanNumeral = $this->converter->arabicToRoman(65);
		$this->assertEquals('LXV', $romanNumeral);
	}

	public function test_96_converts_to_XCVI() {
		$romanNumeral = $this->converter->arabicToRoman(96);
		$this->assertEquals('XCVI', $romanNumeral);
	}

	public function test_35_converts_to_XXXV() {
		$romanNumeral = $this->converter->arabicToRoman(35);
		$this->assertEquals('XXXV', $romanNumeral);
	}

	public function test_66_converts_to_LXVI() {
		$romanNumeral = $this->converter->arabicToRoman(66);
		$this->assertEquals('LXVI', $romanNumeral);
	}

	public function test_97_converts_to_XCVII() {
		$romanNumeral = $this->converter->arabicToRoman(97);
		$this->assertEquals('XCVII', $romanNumeral);
	}

	public function test_36_converts_to_XXXVI() {
		$romanNumeral = $this->converter->arabicToRoman(36);
		$this->assertEquals('XXXVI', $romanNumeral);
	}

	public function test_67_converts_to_LXVII() {
		$romanNumeral = $this->converter->arabicToRoman(67);
		$this->assertEquals('LXVII', $romanNumeral);
	}

	public function test_98_converts_to_XCVIII() {
		$romanNumeral = $this->converter->arabicToRoman(98);
		$this->assertEquals('XCVIII', $romanNumeral);
	}

	public function test_37_converts_to_XXXVII() {
		$romanNumeral = $this->converter->arabicToRoman(37);
		$this->assertEquals('XXXVII', $romanNumeral);
	}

	public function test_68_converts_to_LXVIII() {
		$romanNumeral = $this->converter->arabicToRoman(68);
		$this->assertEquals('LXVIII', $romanNumeral);
	}

	public function test_99_converts_to_XCIX() {
		$romanNumeral = $this->converter->arabicToRoman(99);
		$this->assertEquals('XCIX', $romanNumeral);
	}

	public function test_38_converts_to_XXXVIII() {
		$romanNumeral = $this->converter->arabicToRoman(38);
		$this->assertEquals('XXXVIII', $romanNumeral);
	}

	public function test_69_converts_to_LXIX() {
		$romanNumeral = $this->converter->arabicToRoman(69);
		$this->assertEquals('LXIX', $romanNumeral);
	}

	public function test_100_converts_to_C() {
		$romanNumeral = $this->converter->arabicToRoman(100);
		$this->assertEquals('C', $romanNumeral);
	}

	public function test_39_converts_to_XXXIX() {
		$romanNumeral = $this->converter->arabicToRoman(39);
		$this->assertEquals('XXXIX', $romanNumeral);
	}

	public function test_70_converts_to_LXX() {
		$romanNumeral = $this->converter->arabicToRoman(70);
		$this->assertEquals('LXX', $romanNumeral);
	}

	public function test_9_converts_to_IX() {
		$romanNumeral = $this->converter->arabicToRoman(9);
		$this->assertEquals('IX', $romanNumeral);
	}

	public function test_40_converts_to_XL() {
		$romanNumeral = $this->converter->arabicToRoman(40);
		$this->assertEquals('XL', $romanNumeral);
	}

	public function test_71_converts_to_LXXI() {
		$romanNumeral = $this->converter->arabicToRoman(71);
		$this->assertEquals('LXXI', $romanNumeral);
	}

	public function test_10_converts_to_X() {
		$romanNumeral = $this->converter->arabicToRoman(10);
		$this->assertEquals('X', $romanNumeral);
	}

	public function test_41_converts_to_XLI() {
		$romanNumeral = $this->converter->arabicToRoman(41);
		$this->assertEquals('XLI', $romanNumeral);
	}

	public function test_72_converts_to_LXXII() {
		$romanNumeral = $this->converter->arabicToRoman(72);
		$this->assertEquals('LXXII', $romanNumeral);
	}

	public function test_501_converts_to_DI() {
		$romanNumeral = $this->converter->arabicToRoman(501);
		$this->assertEquals('DI', $romanNumeral);
	}

	public function test_42_converts_to_XLII() {
		$romanNumeral = $this->converter->arabicToRoman(42);
		$this->assertEquals('XLII', $romanNumeral);
	}

	public function test_73_converts_to_LXXIII() {
		$romanNumeral = $this->converter->arabicToRoman(73);
		$this->assertEquals('LXXIII', $romanNumeral);
	}

	public function test_550_converts_to_DL() {
		$romanNumeral = $this->converter->arabicToRoman(550);
		$this->assertEquals('DL', $romanNumeral);
	}

	public function test_43_converts_to_XLIII() {
		$romanNumeral = $this->converter->arabicToRoman(43);
		$this->assertEquals('XLIII', $romanNumeral);
	}

	public function test_74_converts_to_LXXIV() {
		$romanNumeral = $this->converter->arabicToRoman(74);
		$this->assertEquals('LXXIV', $romanNumeral);
	}

	public function test_530_converts_to_DXXX() {
		$romanNumeral = $this->converter->arabicToRoman(530);
		$this->assertEquals('DXXX', $romanNumeral);
	}

	public function test_44_converts_to_XLIV() {
		$romanNumeral = $this->converter->arabicToRoman(44);
		$this->assertEquals('XLIV', $romanNumeral);
	}

	public function test_75_converts_to_LXXV() {
		$romanNumeral = $this->converter->arabicToRoman(75);
		$this->assertEquals('LXXV', $romanNumeral);
	}

	public function test_707_converts_to_DCCVII() {
		$romanNumeral = $this->converter->arabicToRoman(707);
		$this->assertEquals('DCCVII', $romanNumeral);
	}

	public function test_45_converts_to_XLV() {
		$romanNumeral = $this->converter->arabicToRoman(45);
		$this->assertEquals('XLV', $romanNumeral);
	}

	public function test_76_converts_to_LXXVI() {
		$romanNumeral = $this->converter->arabicToRoman(76);
		$this->assertEquals('LXXVI', $romanNumeral);
	}

	public function test_890_converts_to_DCCCXC() {
		$romanNumeral = $this->converter->arabicToRoman(890);
		$this->assertEquals('DCCCXC', $romanNumeral);
	}

	public function test_46_converts_to_XLVI() {
		$romanNumeral = $this->converter->arabicToRoman(46);
		$this->assertEquals('XLVI', $romanNumeral);
	}

	public function test_77_converts_to_LXXVII() {
		$romanNumeral = $this->converter->arabicToRoman(77);
		$this->assertEquals('LXXVII', $romanNumeral);
	}

	public function test_1500_converts_to_MD() {
		$romanNumeral = $this->converter->arabicToRoman(1500);
		$this->assertEquals('MD', $romanNumeral);
	}

	public function test_47_converts_to_XLVII() {
		$romanNumeral = $this->converter->arabicToRoman(47);
		$this->assertEquals('XLVII', $romanNumeral);
	}

	public function test_78_converts_to_LXXVIII() {
		$romanNumeral = $this->converter->arabicToRoman(78);
		$this->assertEquals('LXXVIII', $romanNumeral);
	}

	public function test_1800_converts_to_MDCCC() {
		$romanNumeral = $this->converter->arabicToRoman(1800);
		$this->assertEquals('MDCCC', $romanNumeral);
	}

	public function test_48_converts_to_XLVIII() {
		$romanNumeral = $this->converter->arabicToRoman(48);
		$this->assertEquals('XLVIII', $romanNumeral);
	}

	public function test_79_converts_to_LXXIX() {
		$romanNumeral = $this->converter->arabicToRoman(79);
		$this->assertEquals('LXXIX', $romanNumeral);
	}

	public function test_900_converts_to_CM() {
		$romanNumeral = $this->converter->arabicToRoman(900);
		$this->assertEquals('CM', $romanNumeral);
	}

	public function test_49_converts_to_XLIX() {
		$romanNumeral = $this->converter->arabicToRoman(49);
		$this->assertEquals('XLIX', $romanNumeral);
	}

	public function test_80_converts_to_LXXX() {
		$romanNumeral = $this->converter->arabicToRoman(80);
		$this->assertEquals('LXXX', $romanNumeral);
	}

	public function test_19_converts_to_XIX() {
		$romanNumeral = $this->converter->arabicToRoman(19);
		$this->assertEquals('XIX', $romanNumeral);
	}

	public function test_50_converts_to_L() {
		$romanNumeral = $this->converter->arabicToRoman(50);
		$this->assertEquals('L', $romanNumeral);
	}

	public function test_81_converts_to_LXXXI() {
		$romanNumeral = $this->converter->arabicToRoman(81);
		$this->assertEquals('LXXXI', $romanNumeral);
	}

	public function test_20_converts_to_XX() {
		$romanNumeral = $this->converter->arabicToRoman(20);
		$this->assertEquals('XX', $romanNumeral);
	}

	public function test_51_converts_to_LI() {
		$romanNumeral = $this->converter->arabicToRoman(51);
		$this->assertEquals('LI', $romanNumeral);
	}

	public function test_82_converts_to_LXXXII() {
		$romanNumeral = $this->converter->arabicToRoman(82);
		$this->assertEquals('LXXXII', $romanNumeral);
	}

	public function test_21_converts_to_XXI() {
		$romanNumeral = $this->converter->arabicToRoman(21);
		$this->assertEquals('XXI', $romanNumeral);
	}

	public function test_52_converts_to_LII() {
		$romanNumeral = $this->converter->arabicToRoman(52);
		$this->assertEquals('LII', $romanNumeral);
	}

	public function test_83_converts_to_LXXXIII() {
		$romanNumeral = $this->converter->arabicToRoman(83);
		$this->assertEquals('LXXXIII', $romanNumeral);
	}

	public function test_22_converts_to_XXII() {
		$romanNumeral = $this->converter->arabicToRoman(22);
		$this->assertEquals('XXII', $romanNumeral);
	}

	public function test_53_converts_to_LIII() {
		$romanNumeral = $this->converter->arabicToRoman(53);
		$this->assertEquals('LIII', $romanNumeral);
	}

	public function test_84_converts_to_LXXXIV() {
		$romanNumeral = $this->converter->arabicToRoman(84);
		$this->assertEquals('LXXXIV', $romanNumeral);
	}

	public function test_23_converts_to_XXIII() {
		$romanNumeral = $this->converter->arabicToRoman(23);
		$this->assertEquals('XXIII', $romanNumeral);
	}

	public function test_54_converts_to_LIV() {
		$romanNumeral = $this->converter->arabicToRoman(54);
		$this->assertEquals('LIV', $romanNumeral);
	}

	public function test_85_converts_to_LXXXV() {
		$romanNumeral = $this->converter->arabicToRoman(85);
		$this->assertEquals('LXXXV', $romanNumeral);
	}

	public function test_24_converts_to_XXIV() {
		$romanNumeral = $this->converter->arabicToRoman(24);
		$this->assertEquals('XXIV', $romanNumeral);
	}

	public function test_55_converts_to_LV() {
		$romanNumeral = $this->converter->arabicToRoman(55);
		$this->assertEquals('LV', $romanNumeral);
	}

	public function test_86_converts_to_LXXXVI() {
		$romanNumeral = $this->converter->arabicToRoman(86);
		$this->assertEquals('LXXXVI', $romanNumeral);
	}

	public function test_25_converts_to_XXV() {
		$romanNumeral = $this->converter->arabicToRoman(25);
		$this->assertEquals('XXV', $romanNumeral);
	}

	public function test_56_converts_to_LVI() {
		$romanNumeral = $this->converter->arabicToRoman(56);
		$this->assertEquals('LVI', $romanNumeral);
	}

	public function test_87_converts_to_LXXXVII() {
		$romanNumeral = $this->converter->arabicToRoman(87);
		$this->assertEquals('LXXXVII', $romanNumeral);
	}

	public function test_26_converts_to_XXVI() {
		$romanNumeral = $this->converter->arabicToRoman(26);
		$this->assertEquals('XXVI', $romanNumeral);
	}

	public function test_57_converts_to_LVII() {
		$romanNumeral = $this->converter->arabicToRoman(57);
		$this->assertEquals('LVII', $romanNumeral);
	}

	public function test_88_converts_to_LXXXVIII() {
		$romanNumeral = $this->converter->arabicToRoman(88);
		$this->assertEquals('LXXXVIII', $romanNumeral);
	}

	public function test_27_converts_to_XXVII() {
		$romanNumeral = $this->converter->arabicToRoman(27);
		$this->assertEquals('XXVII', $romanNumeral);
	}

	public function test_58_converts_to_LVIII() {
		$romanNumeral = $this->converter->arabicToRoman(58);
		$this->assertEquals('LVIII', $romanNumeral);
	}

	public function test_89_converts_to_LXXXIX() {
		$romanNumeral = $this->converter->arabicToRoman(89);
		$this->assertEquals('LXXXIX', $romanNumeral);
	}

	public function test_28_converts_to_XXVIII() {
		$romanNumeral = $this->converter->arabicToRoman(28);
		$this->assertEquals('XXVIII', $romanNumeral);
	}

	public function test_59_converts_to_LIX() {
		$romanNumeral = $this->converter->arabicToRoman(59);
		$this->assertEquals('LIX', $romanNumeral);
	}

	public function test_90_converts_to_XC() {
		$romanNumeral = $this->converter->arabicToRoman(90);
		$this->assertEquals('XC', $romanNumeral);
	}

	public function test_29_converts_to_XXIX() {
		$romanNumeral = $this->converter->arabicToRoman(29);
		$this->assertEquals('XXIX', $romanNumeral);
	}

	public function test_60_converts_to_LX() {
		$romanNumeral = $this->converter->arabicToRoman(60);
		$this->assertEquals('LX', $romanNumeral);
	}

	public function test_91_converts_to_XCI() {
		$romanNumeral = $this->converter->arabicToRoman(91);
		$this->assertEquals('XCI', $romanNumeral);
	}

	public function test_30_converts_to_XXX() {
		$romanNumeral = $this->converter->arabicToRoman(30);
		$this->assertEquals('XXX', $romanNumeral);
	}

	public function test_61_converts_to_LXI() {
		$romanNumeral = $this->converter->arabicToRoman(61);
		$this->assertEquals('LXI', $romanNumeral);
	}

	public function test_92_converts_to_XCII() {
		$romanNumeral = $this->converter->arabicToRoman(92);
		$this->assertEquals('XCII', $romanNumeral);
	}

	public function test_31_converts_to_XXXI() {
		$romanNumeral = $this->converter->arabicToRoman(31);
		$this->assertEquals('XXXI', $romanNumeral);
	}

	public function test_62_converts_to_LXII() {
		$romanNumeral = $this->converter->arabicToRoman(62);
		$this->assertEquals('LXII', $romanNumeral);
	}

	public function test_93_converts_to_XCIII() {
		$romanNumeral = $this->converter->arabicToRoman(93);
		$this->assertEquals('XCIII', $romanNumeral);
	}

}

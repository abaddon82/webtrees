<?php

/**
 * webtrees: online genealogy
 * 'Copyright (C) 2023 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Encodings;

/**
 * Convert between Windows Code Page 1250 and UTF-8.
 *
 * @link https://en.wikipedia.org/wiki/ISO/IEC_8859-2
 */
class ISO88592 extends AbstractEncoding
{
    public const NAME = 'ISO-8859-2';

    protected const TO_UTF8 = [
        "\x80" => UTF8::REPLACEMENT_CHARACTER,
        "\x81" => UTF8::REPLACEMENT_CHARACTER,
        "\x82" => UTF8::REPLACEMENT_CHARACTER,
        "\x83" => UTF8::REPLACEMENT_CHARACTER,
        "\x84" => UTF8::REPLACEMENT_CHARACTER,
        "\x85" => UTF8::REPLACEMENT_CHARACTER,
        "\x86" => UTF8::REPLACEMENT_CHARACTER,
        "\x87" => UTF8::REPLACEMENT_CHARACTER,
        "\x88" => UTF8::REPLACEMENT_CHARACTER,
        "\x89" => UTF8::REPLACEMENT_CHARACTER,
        "\x8A" => UTF8::REPLACEMENT_CHARACTER,
        "\x8B" => UTF8::REPLACEMENT_CHARACTER,
        "\x8C" => UTF8::REPLACEMENT_CHARACTER,
        "\x8D" => UTF8::REPLACEMENT_CHARACTER,
        "\x8E" => UTF8::REPLACEMENT_CHARACTER,
        "\x8F" => UTF8::REPLACEMENT_CHARACTER,
        "\x90" => UTF8::REPLACEMENT_CHARACTER,
        "\x91" => UTF8::REPLACEMENT_CHARACTER,
        "\x92" => UTF8::REPLACEMENT_CHARACTER,
        "\x93" => UTF8::REPLACEMENT_CHARACTER,
        "\x94" => UTF8::REPLACEMENT_CHARACTER,
        "\x95" => UTF8::REPLACEMENT_CHARACTER,
        "\x96" => UTF8::REPLACEMENT_CHARACTER,
        "\x97" => UTF8::REPLACEMENT_CHARACTER,
        "\x98" => UTF8::REPLACEMENT_CHARACTER,
        "\x99" => UTF8::REPLACEMENT_CHARACTER,
        "\x9A" => UTF8::REPLACEMENT_CHARACTER,
        "\x9B" => UTF8::REPLACEMENT_CHARACTER,
        "\x9C" => UTF8::REPLACEMENT_CHARACTER,
        "\x9D" => UTF8::REPLACEMENT_CHARACTER,
        "\x9E" => UTF8::REPLACEMENT_CHARACTER,
        "\x9F" => UTF8::REPLACEMENT_CHARACTER,
        "\xA0" => UTF8::NO_BREAK_SPACE,
        "\xA1" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_OGONEK,
        "\xA2" => UTF8::BREVE,
        "\xA3" => UTF8::LATIN_CAPITAL_LETTER_L_WITH_STROKE,
        "\xA4" => UTF8::CURRENCY_SIGN,
        "\xA5" => UTF8::LATIN_CAPITAL_LETTER_L_WITH_CARON,
        "\xA6" => UTF8::LATIN_CAPITAL_LETTER_S_WITH_ACUTE,
        "\xA7" => UTF8::SECTION_SIGN,
        "\xA8" => UTF8::DIAERESIS,
        "\xA9" => UTF8::LATIN_CAPITAL_LETTER_S_WITH_CARON,
        "\xAA" => UTF8::LATIN_CAPITAL_LETTER_S_WITH_CEDILLA,
        "\xAB" => UTF8::LATIN_CAPITAL_LETTER_T_WITH_CARON,
        "\xAC" => UTF8::LATIN_CAPITAL_LETTER_Z_WITH_ACUTE,
        "\xAD" => UTF8::SOFT_HYPHEN,
        "\xAE" => UTF8::LATIN_CAPITAL_LETTER_Z_WITH_CARON,
        "\xAF" => UTF8::LATIN_CAPITAL_LETTER_Z_WITH_DOT_ABOVE,
        "\xB0" => UTF8::DEGREE_SIGN,
        "\xB1" => UTF8::LATIN_SMALL_LETTER_A_WITH_OGONEK,
        "\xB2" => UTF8::OGONEK,
        "\xB3" => UTF8::LATIN_SMALL_LETTER_L_WITH_STROKE,
        "\xB4" => UTF8::ACUTE_ACCENT,
        "\xB5" => UTF8::LATIN_SMALL_LETTER_L_WITH_CARON,
        "\xB6" => UTF8::LATIN_SMALL_LETTER_S_WITH_ACUTE,
        "\xB7" => UTF8::CARON,
        "\xB8" => UTF8::CEDILLA,
        "\xB9" => UTF8::LATIN_SMALL_LETTER_S_WITH_CARON,
        "\xBA" => UTF8::LATIN_SMALL_LETTER_S_WITH_CEDILLA,
        "\xBB" => UTF8::LATIN_SMALL_LETTER_T_WITH_CARON,
        "\xBC" => UTF8::LATIN_SMALL_LETTER_Z_WITH_ACUTE,
        "\xBD" => UTF8::DOUBLE_ACUTE_ACCENT,
        "\xBE" => UTF8::LATIN_SMALL_LETTER_Z_WITH_CARON,
        "\xBF" => UTF8::LATIN_SMALL_LETTER_Z_WITH_DOT_ABOVE,
        "\xC0" => UTF8::LATIN_CAPITAL_LETTER_R_WITH_ACUTE,
        "\xC1" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_ACUTE,
        "\xC2" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_CIRCUMFLEX,
        "\xC3" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_BREVE,
        "\xC4" => UTF8::LATIN_CAPITAL_LETTER_A_WITH_DIAERESIS,
        "\xC5" => UTF8::LATIN_CAPITAL_LETTER_L_WITH_ACUTE,
        "\xC6" => UTF8::LATIN_CAPITAL_LETTER_C_WITH_ACUTE,
        "\xC7" => UTF8::LATIN_CAPITAL_LETTER_C_WITH_CEDILLA,
        "\xC8" => UTF8::LATIN_CAPITAL_LETTER_C_WITH_CARON,
        "\xC9" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_ACUTE,
        "\xCA" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_OGONEK,
        "\xCB" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_DIAERESIS,
        "\xCC" => UTF8::LATIN_CAPITAL_LETTER_E_WITH_CARON,
        "\xCD" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_ACUTE,
        "\xCE" => UTF8::LATIN_CAPITAL_LETTER_I_WITH_CIRCUMFLEX,
        "\xCF" => UTF8::LATIN_CAPITAL_LETTER_D_WITH_CARON,
        "\xD0" => UTF8::LATIN_CAPITAL_LETTER_D_WITH_STROKE,
        "\xD1" => UTF8::LATIN_CAPITAL_LETTER_N_WITH_ACUTE,
        "\xD2" => UTF8::LATIN_CAPITAL_LETTER_N_WITH_CARON,
        "\xD3" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_ACUTE,
        "\xD4" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_CIRCUMFLEX,
        "\xD5" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_DOUBLE_ACUTE,
        "\xD6" => UTF8::LATIN_CAPITAL_LETTER_O_WITH_DIAERESIS,
        "\xD7" => UTF8::MULTIPLICATION_SIGN,
        "\xD8" => UTF8::LATIN_CAPITAL_LETTER_R_WITH_CARON,
        "\xD9" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_RING_ABOVE,
        "\xDA" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_ACUTE,
        "\xDB" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_DOUBLE_ACUTE,
        "\xDC" => UTF8::LATIN_CAPITAL_LETTER_U_WITH_DIAERESIS,
        "\xDD" => UTF8::LATIN_CAPITAL_LETTER_Y_WITH_ACUTE,
        "\xDE" => UTF8::LATIN_CAPITAL_LETTER_T_WITH_CEDILLA,
        "\xDF" => UTF8::LATIN_SMALL_LETTER_SHARP_S,
        "\xE0" => UTF8::LATIN_SMALL_LETTER_R_WITH_ACUTE,
        "\xE1" => UTF8::LATIN_SMALL_LETTER_A_WITH_ACUTE,
        "\xE2" => UTF8::LATIN_SMALL_LETTER_A_WITH_CIRCUMFLEX,
        "\xE3" => UTF8::LATIN_SMALL_LETTER_A_WITH_BREVE,
        "\xE4" => UTF8::LATIN_SMALL_LETTER_A_WITH_DIAERESIS,
        "\xE5" => UTF8::LATIN_SMALL_LETTER_L_WITH_ACUTE,
        "\xE6" => UTF8::LATIN_SMALL_LETTER_C_WITH_ACUTE,
        "\xE7" => UTF8::LATIN_SMALL_LETTER_C_WITH_CEDILLA,
        "\xE8" => UTF8::LATIN_SMALL_LETTER_C_WITH_CARON,
        "\xE9" => UTF8::LATIN_SMALL_LETTER_E_WITH_ACUTE,
        "\xEA" => UTF8::LATIN_SMALL_LETTER_E_WITH_OGONEK,
        "\xEB" => UTF8::LATIN_SMALL_LETTER_E_WITH_DIAERESIS,
        "\xEC" => UTF8::LATIN_SMALL_LETTER_E_WITH_CARON,
        "\xED" => UTF8::LATIN_SMALL_LETTER_I_WITH_ACUTE,
        "\xEE" => UTF8::LATIN_SMALL_LETTER_I_WITH_CIRCUMFLEX,
        "\xEF" => UTF8::LATIN_SMALL_LETTER_D_WITH_CARON,
        "\xF0" => UTF8::LATIN_SMALL_LETTER_D_WITH_STROKE,
        "\xF1" => UTF8::LATIN_SMALL_LETTER_N_WITH_ACUTE,
        "\xF2" => UTF8::LATIN_SMALL_LETTER_N_WITH_CARON,
        "\xF3" => UTF8::LATIN_SMALL_LETTER_O_WITH_ACUTE,
        "\xF4" => UTF8::LATIN_SMALL_LETTER_O_WITH_CIRCUMFLEX,
        "\xF5" => UTF8::LATIN_SMALL_LETTER_O_WITH_DOUBLE_ACUTE,
        "\xF6" => UTF8::LATIN_SMALL_LETTER_O_WITH_DIAERESIS,
        "\xF7" => UTF8::DIVISION_SIGN,
        "\xF8" => UTF8::LATIN_SMALL_LETTER_R_WITH_CARON,
        "\xF9" => UTF8::LATIN_SMALL_LETTER_U_WITH_RING_ABOVE,
        "\xFA" => UTF8::LATIN_SMALL_LETTER_U_WITH_ACUTE,
        "\xFB" => UTF8::LATIN_SMALL_LETTER_U_WITH_DOUBLE_ACUTE,
        "\xFC" => UTF8::LATIN_SMALL_LETTER_U_WITH_DIAERESIS,
        "\xFD" => UTF8::LATIN_SMALL_LETTER_Y_WITH_ACUTE,
        "\xFE" => UTF8::LATIN_SMALL_LETTER_T_WITH_CEDILLA,
        "\xFF" => UTF8::DOT_ABOVE,
    ];
}

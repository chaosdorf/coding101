#!/usr/bin/env python

"""
Wandle alle Großbuchstaben in snake_case um.

Beispiele:

Eingabe: makeSnakeCase
Ausgabe: make_snake_case

Eingabe: More Snake
Ausgabe: _more _snake

Bau die Funktion **snake_case** so, dass die Tests **True** ausgeben.
Mach es C-like in pure python ohne imports und ohne fancy string Methoden (Beispiel: kein lower, keine der Funktionen https://twitter.com/AbzAaron/status/1434556230014541826) (das join ist nur für die tests der Übersicht halber drin).
Da Python strings nicht by-ref übergeben kann und es mehr wie C sein soll wird mit Listen gearbeitet.
"""

# hand written C-like snake_case without fancy python methods


def snake_case(txt_ar):
    pass


# tests

char_ar = ['m', 'a', 'k', 'e', 'S', 'n', 'a', 'k', 'e', 'C', 'a', 's', 'e', ' ', ' ']
snake_case(char_ar)
print('# TEST 1: ', ''.join(char_ar) == "make_snake_case")
print('Output: ', ''.join(char_ar))  # Output: make_snake_case

char_ar = ['m', 'o', 'r', 'e', ' ', 'S', 'n', 'a', 'k', 'e', ' ']
snake_case(char_ar)
print('# TEST 2: ', ''.join(char_ar) == "more _snake")
print('Output: ', ''.join(char_ar))  # Output: more _snake

char_ar = ['B', 'l', 'e', 'r', 'g', 'h', ' ']
snake_case(char_ar)
print('# TEST 3: ', ''.join(char_ar) == "_blergh")
print('Output: ', ''.join(char_ar))  # Output: _blergh

char_ar = ['l', 'O', 'L', ' ', ' ']
snake_case(char_ar)
print('# TEST 4: ', ''.join(char_ar) == "l_o_l")
print('Output: ', ''.join(char_ar))  # Output: _blergh

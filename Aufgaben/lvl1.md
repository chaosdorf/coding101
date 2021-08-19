## WHEEEEE ##

1.) Lasse den Benutzer eine Zahl eingeben und Stelle folgendes dar

```
Enter MAX: 5
#
##
###
####
#####
```

2.) Lasse den Benutzer eine Zahl eingeben und Stelle folgendes dar

```
Enter MAX: 5
#
##
###
####
#####
####
###
##
#
```

## Ladebalken ##

1.) Stelle einen Ladebalken dar.

```
[###       ] 30 %
```

2.) Lasse den Ladebalken von der Eingabe (im beispiel 70, Eingabe ist dynamisch) bis 100% laufen

```
Enter State: 70
[#######   ]  70 %
[########  ]  80 %
[######### ]  90 %
[##########] 100 %
```

## Message Of The Day ##

Mögliche Nachrichten (es können auch eigene sein, der Einfachheit halber sind hier Beispiele):
```
No one is perfect - that’s why pencils have erasers. - Wolfgang Riebe
Have no fear of perfection - you'll never reach it. - Salvador Dali
The tallest mountain started as a stone. - One Punch Man Intro
Make it work. Make it nice. Make it fast. Always obey this order! - kiraa
A good programmer is someone who always looks both ways before crossing a one-way street. – Doug Linder
If debugging is the process of removing software bugs, then programming must be the process of putting them in. - Edsger W. Dijkstra
```

1. Zeige dem user eine Zufällige Nachricht des tages an.

2. Sorge dafür, dass jede zufällig angezeigte nachricht nur 1x angezeigt wird bis alle Nachrichten angezeigt wurden / es keine dopplungen gibt bis alle angezeigt wurden.

3. Wenn alle Nachrichten ausgegeben wurden, lasse wieder alle Nachrichten zu und wiederhole 2.

## Matrix ##

1.) Zeige einen gefüllten Bereich an

```
#####
#####
#####
#####
#####
```

2.) Setze ein zeichen per Zufall auf einen anderen Wert

```
#####
#####
#####
###*#
#####
```

3.) mache alle Werte vom User einstellbar

```
Width: 10
Height: 4
Randoms: 4

#*########
#####*####
########*#
###*######
```

## TestProgram ##
(Diese Aufgabe lässt sich am besten im Terminal erledigen)  

1. Zahlen von 1 bis incl. 999 im terminal ausgeben
 
2. Zahlen von 1 bis incl. 99, jede durch 5 teilbare zahl in eine Datei schreiben  
(zusätzlich NICHT in der normalen Ausgabe/Terminal ausgeben, newline getrennt)
 
3. Programm ist erst ab 18 Jahren geeignet.  
Eingabe, Prüfung, Programmabbruch!  
(integers/zahlen reichen ;)
 
4. benutzername und passwort sollen abgefragt werden
solange benutzername und passwort nicht stimmen, weiter danach fragen (kann erstmal RAW sein, ohne passwort * abfrage)
 
5. Ein beliebiger text soll eingegeben werden können und dieser in einer FREI wählbaren Datei (kann vorgegebener ordner sein) gespeichert werden.
 
Beispiel:  
```
enter text: hamster sind im grunde wie Zigaretten....
save to file: hamster.info
```


## Calculator ##
 
1.) Taschenrechner mit +, -, *, /  
Beispieleingabe  
```
first number:  
operator:  
second number:
```
2.) als "natürliche" einagbe entgegen nehmen:  
13 + 2  
 
3.) ergebnis halten und weiter verarbeiten  
Beispiel:
```
Eingabe: 13 + 2  
Ausgabe: 15  
Eingabe: -5  
Ausgabe: 10  
Eingabe: * 2  
Ausgabe: 20
```
 
4.) "neustart" erlauben 
```
Eingabe: 13 + 2
Ausgabe: 15
Eingabe: clear
Eingabe: 2 + 2
Ausgabe: 4
```

5.) Programm beendbar machen ohne Ctrl+c


## Random Tweet ##
Ein Programm, dass aus einem Text (zum Beispiel der GPL) zufällig wörter anzeigt.

1.) Eine Textdatei mit viel Inhalt auslesen und eine bestimmte anzahl an Wörtern zufällig ausgeben 
Beispiel (GPLv3):  
```
enter how many words you want: 5
Ausgabe: anything acceptance shall and EVEN
```

2.) So viele Wörter "sammeln" bis 140 Zeichen überschritten werden.

2.1) Das Wort, dass die 140 Zeichen überschreitet NICHT abschneiden, sondern weg lassen.

3.) Zufällige Textdateien aus einem Ordner auslesen und einen "Tweet" zusammen stellen.

## Listiger Luchs ##

Array (entsprechend der Benutzen Sprache anpassen):   
```[5, 7, 3, 2, 1, 0, 8, 9, 4, 6]```

1. Nehme das gegebene Array und gebe es lesbar (auf der Konsole/Terminal, wenn verfügbar) aus.  
Ermittle über eine User-Abfrage, wie viele Zahlen der User vom Array-Anfang aufaddiert haben möchte.  
Und gebe die Summe der Addition auf die Konsole aus.  

2. Füge vorher eine Abfrage hinzu, von welcher Seite aus (Anfang oder Ende des Arrays) der User diese Addition haben möchte.  
Und implementiere die Anforderung im Code.  

3. Füge vorher eine weitere Abfrage hinzu, ob der User das Array vor der Addition sortiert haben will oder nicht und implementiere die Anforderung im Code.


## Members ##

Textdatei liegt unter: Aufgaben/data/member_list.txt (https://github.com/chaosdorf/coding101/blob/master/Aufgaben/data/member_list.txt)

Lese die gegebene Textdatei ein. In jeder Zeile steht ein Name und eine Mitgliedsnummer. Verarbeite die Daten so, dass für jedes Mitglied ein Objekt (oder vergleichbare Datenstruktur) erstellt wird. Die Objekte sollten dann in einer Liste gespeichert werden. Gebe die fertigen Mitglieder im Browserfenster / in der Konsole / verfügbares UI übersichtlich aus, sodass die Namen und die Mitgliedsnummern jeweils untereinander stehen wie in einer Art Tabelle.  

Füge dem Ganzen einen User-Input hinzu, wo der User einen Namen eingeben kann. Der Name soll dann mithilfe einer automatisch generierten Mitgliedsnummer als neues Objekt in der Liste gespeichert werden.  

Sortiere die Liste nach Mitgliedsnummer.  


## SimpleLogin + Menu ##

Aufgabenstellung:

Benutzername + Passwort wird abgefragt, bei falscheingabe wird das Programm NICHT beendet, sondern erst beim 3. fehlversuch.  
 
Nach dem Login wird ein Menü mit 4 Punkten angezeigt    
```
1.) Kochrezepte
2.) Weltherrschaft
3.) Uhrzeit
q ) Beenden
```

Es soll mit der eingabe vor der klammer ausgewähl werden können.    
Bei 1-3 beliebeige ausgabe von texten, bei q das programm beenden.  
 

## WordGuess ##

1.)  
* Spieler 1 gibt ein wort ein und Spieler 2 muss es erraten.
* Der erste und der letzte Buchstabe soll dabei angezeigt werden.  
* 3 Versuche.

2.)  
* Auswählbar machen, ob 1 oder 2 Spieler.  
* Die CPU wählt zufällig ein Wort aus einer Liste.  

3.) Die CPU wählt ein Wort aus der GPL mit einer bestimmten mindestlänge, welche als schwierigkeitsgrad angegeben wird.  

4.) Die CPU wählt ein Wort aus der Wikipedia mit einer bestimmten mindestlänge, welche als schwierigkeitsgrad angegeben wird.  


Zum Beispiel:  
```
1) Singlepalyer
2) Multiplayer
Choose: 1

Difficulty
1) Easy (3-5)
2) Medium (6-10)
3) Hard (11-20)
4) Academic (20-∞)
Choose: 
```


## numberGo ##

Zahlen raten

1.)  
* $mensch gibt zahl zwischen 1 und 10 ein (incl. 1 und 10)  
* $mensch2 hat 3 versuche zu raten  
* Programm sagt bei fehler, ob die geratene zahl über oder unter dem zielergebnis steht  

2.) Wie 1. nur, dass Spieler 1 der Computer ist und eine zahl vorgibt  
2.2) Auswählbar machen ob zahlenvorgeber Mensch oder Computer ist
 
3.) Punktestand nach jeder runde anzeigen

4.) Highscores speichern
 
4.1) Highscores bei spielstart wieder anzeigen


## PrivateCalendar ##
 
1.)  
* Liste Tage des aktuellen monats  
* (eine Woche je Zeile, mit Wochennummer)  
* Wochenanfang ist Montag
 
2.) Markiere "Heute"
 
3.) Mit eingabe eines Monats diesen Monat anzeigen
 
4.) Mit eingabe eines Jahres+Monats diesen Monat anzeigen
 
5.) Tag + Monat eingeben um Termin hinzuzufügen
 
5.1) Termin hat Überrschrift/Titel + mehrzeilige Notitz
 
5.2)  
* In Datei speichern  
* Format ist beliebig, empfehle eine Textdatei mit Datum als Namen pro Termin
 
6.) Bei Programmstart wieder laden + Tage mit Terminen hervorheben
 
7.) Auf eingabe eines  bestimmten Kommandos ALLE Termine in der Zukunft auflisten
 
7.1) Durchnummerieren und auf eingabe der Nummer den Text dazu anzeigen
 
7.2) Termin löschbar machen
 
8.) Einen Kommandozeilenparameter akzeprieren, der das anzeigen eines Menüs unterdrückt und eine Mail als reminder sendet, wenn "Morgen" ein Termin ansteht!    
* (damit man es als cron laufen lassen KÖNNTE)
 
9.) Exportiere beliebigen Monat zu statischem HTML  
* Ohne "heute" aber mit markierten Terminen und mit einer liste unter dem Kalender
* Mit den Überrschtriften der Termine + Datum

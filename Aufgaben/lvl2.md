## SimpleLogin + Menu ##

Aufgabenstellung:
 
* Benutzername + Passwort wird abgefragt, bei falscheingabe wird das Programm NICHT beendet, sondern erst beim 3. fehlversuch.
 
* Nach dem Login wird ein Menü mit 4 Punkten angezeigt  
** 1) Kochrezepte  
** 2) Weltherrschaft  
** 3) Uhrzeit  
** q) Beenden  
 
Es soll mit der eingabe vor der klammer ausgewähl werden können.  
Bei 1-3 beliebeige ausgabe von texten, bei q das programm beenden.  
 


## numberGo ##
 
Zahlen raten
 
1.)
$mensch gibt zahl zwischen 1 und 10 ein (incl. 1 und 10)  
$mensch2 hat 3 versuche zu raten  
programm sagt bei fehler, ob die geratene zahl über oder unter dem zielergebnis steht  
 
2.)
wie 1. nur, dass Spieler 1 der Computer ist und eine zahl vorgibt
 
2.2)
Auswählbar machen ob zahlenvorgeber Mensch oder Computer ist
 
3.)
punktestand nach jeder runde anzeigen
 
4.)
highscores speichern
 
4.1)
highscores bei spielstart wieder anzeigen
 
 
## PrivateCalendar ##
 
1.)
Liste Tage des aktuellen monats  
(eine Woche je Zeile, mit Wochennummer)  
Wochenanfang ist Monatg
 
2.)
markiere "Heute"
 
3.)
mit eingabe eines Monats diesen Monat anzeigen
 
4.) 
mit eingabe eines Jahres+Monats diesen Monat anzeigen
 
5.)
Tag+Monat eingeben um Termin hinzuzufügen
 
5.1) 
Termin hat Überrschrift/Titel + mehrzeilige Notitz
 
5.2)
In Datei speichern  
Format ist beliebig, empfehle eine Textdatei mit Datum als Namen pro Termin
 
6.)
bei Programmstart wieder laden + Tage mit Terminen hervorheben
 
7.)
auf eingabe eines  bestimmten Kommandos ALLE Termine in der Zukunft auflisten
 
7.1)
durchnummerieren und auf eingabe der Nummer den Text dazu anzeigen
 
7.2)
termin löschbar machen
 
8.)
Einen Kommandozeilenparameter akzeprieren, der das anzeigen eines Menüs unterdrückt und eine Mail als reminder sendet, wenn "Morgen" ein Termin ansteht!  
(damit man es als cron laufen lassen KÖNNTE)
 
9.)
Exportiere beliebigen Monat zu statischem HTML  
Ohne "heute" aber mit markierten Terminen und mit einer liste unter dem Kalender mit den Überrschtriften der Termine+Datum

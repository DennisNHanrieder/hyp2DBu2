# Beschreibung
Im fünften und letzten Assignment sollen die fehlenden Funktionalitäten von __QuizQuest__ umgesetzt werden. 
Die Grundlage dazu stellt der Code von Assignment 4 dar. 
Bauen Sie auf diesen Code auf und erweitern Sie die Funktionalität gemäß der Angabe.
Der Code von Assignment 4 soll weiterverwendet werden und anschließend in dieses Repository gepusht werden.

Die Gestaltung (Design) ist Ihnen frei überlassen, die nachfolgenden Funktionalitäten müssen hinsichtlich Businesslogik vollständig umsetzt werden. 

# Quiz spielen (7 Punkte)
Im Assignment 4 haben Sie bereits die Übersichtsseite aller offenen Quizzes umgesetzt.
Auf dieser Seite ist es - je nach Rolle - möglich ein Quiz zu starten bzw. bearbeiten oder löschen. 
Nun soll die Funktionalität erweitert werden, dass ein Quiz auch tatsächlich gespielt werden kann.
Wenn ein Spiel mit dem "Open"-Button geöffnet wird, soll das konkrete Quiz geöffnet werden.
Dazu ist im Template _quiz\_overview.html.twig_ bereits eine Route mit dem Namen _quizshow_ vorgesehen, die per GET die ID des jeweiligen Quizzes überträgt.

Nach dem Klick auf "Open" soll nun das Quiz starten.
Falls es zum ersten Mal geöffnet wird, soll bei der ersten Frage begonnen werden, ansonsten bei der zuletzt beantworteten Fragen fortgefahren werden.

## Template

Es soll ein neues Template/View (_views/quiz\_open.html.twig_) erstellt werden, das alle Fragen eines Quizzes der Reihe nach anzeigt. 
Jede individuelle Frage soll folgende Informationen enthalten:

1. Fragentext
2. Antwortmöglichkeiten (mindestens zwei, maximal vier) als Buttons

Sobald auf einen der Antwortmöglichkeiten (d. h. einen der Buttons) geklickt wird, wird die Antwort abgesendet und zur nächsten Frage weitergeleitet.
Eine Ausnahme bildet die letzte Frage, wenn diese beantwortet wird, soll auf die Seite __Quiz-Übersicht__ weitergeleitet werden (s. Abschnitt unten).
Eine Navigation (d. h. ein Vorspringen bzw. Zurückkehren) ist nicht vorgesehen, d. h. sobald auf einen Antwortbutton geklickt wird, erscheint die nächste Frage.

## Route

Die Route für die Anzeige des jeweiligen Quizzes muss angepasst werden.
In der Datei _public/index.php_ gibt es bereits eine Route (_quiz_), die auf _quizshow_ angepasst werden muss, damit das Template geladen wird. 

## Logik

Die Logik für das Spielen eines Quizzes soll in einer neuen Datei (_src/play\_quiz.php_) umgesetzt werden.
Ein Spiel soll sich wie oben beschrieben verhalten, d. h. es wird jeweils eine Frage angezeigt, mit einem Klick auf eine Antwortmöglichkeit wird zur nächsten Frage weitergeleitet. 
Sobald die letzte Frage erreicht wurde, soll allerdings die Quiz-Übersicht angezeigt werden.

# Quiz-Übersicht (3 Punkte)
Alle Spiele, die von einem Player abgeschlossen wurden, können nicht erneut gespielt werden.
Wenn ein Spiel abgeschlossen wurde, soll mit einem Klick auf "Open" eine Spielübersicht geöffnet werden.
Diese Übersicht enthält folgende zwei Bereiche:

**1. Übersichtsbereich**

Der Übersichtsbereich hat folgende Informationen aufgelistet:

- Name des Quizzes
- Zeitspanne der Verfügbarkeit (von wann bis wann ist das Spiel verfügbar)
- Anzahl der Fragen im Quiz
- Anzahl der richtig beantworteten Fragen

**2. Antwortbereich**

Im Antwortbereich soll eine Kompaktansicht aller Fragen erfolgen. 
Alle Fragen in dem Quiz werden untereinander angezeigt. 
Es soll zuerst die Frage angeführt sein, danach werden die Antwortmöglichkeiten aufgelistet. 
Die vom User gewählte Antwort wird unterstrichen dargestellt.
Falls die Antwort richtig ist, wird diese in grüner Textfarbe angedruckt (und unterstrichen).
Sollte die vom User gewählte Antwort falsch sein, wird diese in roter Farbe gedruckt (und unterstrichen) sowie die korrekte Antwort in grüner Farbe markiert.
Die Fragen werden durch eine horizontale Linie voneinander getrennt.

# Leaderboard (3 Punkte)
Es soll ein neuer Menüpunkt hinzugefügt werden: _Leaderboard_.
Dieser Menüpunkt soll sowohl für alle sichtbar sein (unabhängig davon ob ein User eingeloggt bzw. ausgeloggt ist). 
Das Leaderboard soll tabellarisch folgende Informationen über die ersten zehn Personen enthalten:

- Platzierung (1 bis 10)
- Name des Players
- Herkunft des Players
- Punkteanzahl

Die Platzierung bildet die Punkteanzahl - das heißt die Person mit den meisten Punkten soll den Platz 1 einnehmen, bis hin zum Platz 10. 

Für das Leaderboard ist eine neue View, eine neue Route, aber auch eine neue Source-Datei nötig. 

# Badges-Übersicht (3 Punkte)
Laut Spezifikation gibt es insgesamt fünf Badges. 
Für unsere Version von Quiz-Quest werden allerdings nur drei Badges umgesetzt:

- QuizzerStreak Bronze - Sobald drei Quizzes jeweils zur Gänze richtig beantwortet wurden.
- QuizzerStreak Silver - Sobald fünf Quizzes jeweils zur Gänze richtig beantwortet wurden.
- QuizzerStreak Gold - Sobald sieben Quizzes jeweils zur Gänze richtig beantwortet wurden.

Das heißt, die Badges sind aufsteigend - sobald drei Quizzes zu jeweils 100 % richtig beantwortet werden, schaltet ein User den ersten Badge frei, bei fünf (d. h. zwei weiteren) den zweiten Badge und bei insgesamt sieben Quizzes, den letzten Badge.
Die Freischaltung der Badges soll als [Stored Procedure](https://www.w3schools.com/sql/sql_stored_procedures.asp) umgesetzt werden, d. h. immer wenn ein Quiz bei einem User beendet wird, soll die Stored Procedure aufgerufen werden und überprüfen, ob ein Badge freigeschaltet werden soll.
Der Aufruf der Prozedur kann idealerweise in der Datei _src/play\_quiz.php_ erfolgen. 

Die Anzeige der Badges soll in einem neuen Menüpunkt (analog zum Leaderboard) mit dem Namen _Badges_ erfolgen.
Auf dieser Seite sollen alle Badges der konkreten Player-Person angezeigt werden - sofern Badges vorhanden sind. 
Die kreative Gestaltung der Badges ist Ihnen überlassen, es soll zumindest der Name des jeweiligen Badges auf der Seite dargestellt werden.

# Abgabe
Die Abgabe muss bis zur Deadline, am **4. Juni 2024, 23:59 Uhr** in dem gemeinsamen Github-Repository erfolgen.

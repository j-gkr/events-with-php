# ticket i/O

## Gedanken-Aufgabe

> Du hast vor dir 10 Maschinen die Münzen prägen. Die Münzen sehen alle gleich aus! Die Münzen wiegen 100 Gramm. Allerdings ist eine Maschine kaputt und die Münzen der Maschine wiegen 10 Gramm. Münzen stehen unendlich pro Maschine bereit und es gibt eine Digitalwaage mit der ich einmal wiegen darf, um heraus zu finden, welche Maschine defekt ist. Welche Maschine ist defekt?

Antwort:

Um heraus zu finden, welche Maschine defekt ist, lasse ich Maschine 1 eine Münze prägen.
Maschine 2 lasse ich zwei Münzen prägen. Maschine 3 prägt drei Münzen und so weiter. Maschine 10 prägt somit 10 Münzen.
Wenn ich alle Münzen habe, lasse ich sie einmal von der Digitalwaage wiegen. Anhand des Ergebnisses erkenne ich, welche Maschine defekt ist.
Wenn alle Maschinen funktionieren würden, würde die Waage ein Gewicht von 5500 Gramm zurückgeben.

- Wenn Maschine 1 kaputt ist endet das Gewicht auf die Zahl 10.
- Wenn Maschine 2 kaputt ist endet das Gewicht auf die Zahl 20.
- Wenn Maschine 3 kaputt ist endet das Gewicht auf die Zahl 30.
- Wenn Maschine 4 kaputt ist endet das Gewicht auf die Zahl 40.
- Wenn Maschine 5 kaputt ist endet das Gewicht auf die Zahl 50.
- Wenn Maschine 6 kaputt ist endet das Gewicht auf die Zahl 60.
- Wenn Maschine 7 kaputt ist endet das Gewicht auf die Zahl 70.
- Wenn Maschine 8 kaputt ist endet das Gewicht auf die Zahl 80.
- Wenn Maschine 9 kaputt ist endet das Gewicht auf die Zahl 90.
- Wenn Maschine 10 kaputt ist kommen wir nicht auf ein Gewicht von 5500 Gramm sondern nur auf 4600 Gramm.


## IT-Aufgabe

Baue eine API und ein Frontend um Eventinformationen anzuzeigen und zu speichern.

### Umgebung ausführen

**Wichtig:** Vorher die lokalen Ports frei machen. [80, 443, 5000] (Falls bspw. ein lokaler apache läuft...)

1. Docker Container ausführen, dazu im `frontend` und `backend` Ordner `docker-compose up --build` ausführen.
2. Das Backend lauscht auf den Port 5000.
3. Auf der Startseite sollte schon ein Event angezeigt werden.
4. Weitere Events können über den Menüpunkt "Create an Event" angelegt werden.

### Test ausführen

Ich habe einen Test erstellt, der das initiale Event Array prüft.

1. Zum Aufschalten auf den `backend` container `docker exec -it backend /bin/sh` ausführen
2. `npm test` ausführen

### Validation

#### Backend-Seite

- Mithilfe der Validation Pipe

#### Frontend-Seite

- Mithilfe der Symfony Form Validation

## Anmerkungen

- Im EventController verwende ich eine Konstante für die Host-IP, da `localhost` im Container auf den Container zeigt. Ich habe gelesen, dass unter macOS vermutlich `host.docker.internal` funktioniert.

- Erstmalig mit dem NestJS Framework gearbeitet, weil ich nicht zwei Symfony Umgebungen verwenden wollte.

- Ich hoffe es ist bei euch ohne Änderungen ausführbar.

Viele Grüße

Julian :)
# Birthday30_phpHandling

Mahlzeit!

Das Design steht und das Client-seitige Verarbeiten von Eingaben etc. mit JS funktioniert auch einwandfrei. Danke auch hier nochmal für deine Unterstützung.
Jetzt habe ich für das bissche Backend-Verarbeitung deinen php-Code angeschaut und verstanden, auch die Datenbank-Logik habe ich soweit nachvollziehen können. Danke!

2 Probleme:

1. Aus einem Grund den ich nicht nachvollziehen kann funktioniert mein Apache-Server nicht mehr, obwohl er laut Control Panel läuft. Php-Dateien werden als Quelltext im Browser angezeigt und nicht mehr verarbeitet. Das Problem trat von einem auf den nächsten Start auf ohne dass ich etwas geändert habe.

2. Ich glaube, dass vergessen wurde an einer Stelle Cookies zu setzen. Vielleicht können wir hier nochmal gemeinsam die Logik durchgehen, sodass auch alle User-Fälle abgedeckt sind. Ich habe die php-Dateien schon mal so gut ich kann angepasst und meine Ideen als auskommentierten Einwurf dazugeschrieben. Am Ende brauch ich auch noch Hilfe, wie am besten die Eingaben aus dem Anmelde-Formular (Name etc.) in die DB kommen, weil der Anmelde-Name vom LogIn-Name abweichen wird eventuell. Aber das könnte man ja über den Cookie für den LogIn-Name dann eindeutig machen oder? So gibt es in der DB eben 2 Spalten für Namen --> 1x LogIn-Name (kommt von der LandingPage) und 1x AnmeldeName (kommt von letzter Page), AnmeldeName wird mit LogIn-Name gematcht sodass es nur 1 Datensatz je User gibt.


Zusammenfassung über Grundlagen zur WebEntwicklung

•	Kommunikationsablauf – Webserver und Client/Browser
-	Der Browser (Client) schickt eine Anfrage an den Webserver. Und der Server bearbeitet die Anfrage und schickt eine HTML-Datei zurück. Dann liest der Browser diese Datei und zeigt die Webseite dem Benutzer an.

•	Installation Entwicklungsumgebung (Webserver+PHP+MySQL/MariaDB - oder Alternative und ein Editor mit PHP Support)
-	Webserver: Apache Server, (XAMPP)
-	PHP: Eine Programmiersprache, mit der ich Webseiten entwickeln werde.
-	Datenbank: MySQL – damit speichere ich die Daten der Benutzer.
-	Editor mit PHP-Unterstützung: Ich verwende Visual Studio Code, da er kostenlos, benutzerfreundlich und sehr beliebt ist.

•	Sicherheitsrisiken von Webanwendungen (Phishing, Datendiebstahl, SQL Injections, Cross-Site-Scripting, Session-Hijacking, DoS, ...)
-	Phishing: Eine Betrugsmasche, bei der Angreifer versuchen, über gefälschte Webseiten oder E-Mails an persönliche Daten wie Passwörter zu kommen.
-	Datendiebstahl: Wenn jemand illegal auf Daten wie Passwörter oder Finanzinformationen zugreift.
-	SQL-Injection: Ein Cyberangriff, bei dem Angreifer schädlichen Code in eine Datenbank einschleusen, um Daten auszulesen, zu verändern, zu löschen oder sogar die volle Kontrolle über das System zu bekommen.
-	Cross-Site-Scripting (XSS): Schädlicher Code wird in Webseiten eingefügt und vom Browser ausgeführt.
-	Session-Hijacking: Jemand klaut deine Sitzung im Internet und tut so, als wärst er du z.B beim Online-Banking.
-	DoS: Der Server wird mit zu vielen Anfragen überlastet und fällt aus.

•	Maßnahmen zum Schutz von Webanwendungen (Verschlüsselung, Multifaktor Authentifizierung, Sanitizing/Prepared Statements,...)
-	Verschlüsselung: Daten werden so umgewandelt, dass sie nur mit einem speziellen Schlüssel wieder lesbar sind – wie ein geheimer Code.
-	Multifaktor: Beim Einloggen braucht man mehr als nur ein Passwort – z. B. zusätzlich einen Code per SMS oder Fingerabdruck.
-	Authentifizierung: Der Nachweis, dass du wirklich du bist – z. B. durch Eingabe von Benutzername und Passwort.
-	Sanitizing/Prepared Statements: Techniken, um Benutzereingaben zu „säubern“, damit Hacker keine schädlichen Befehle einschleusen können – besonders wichtig bei Datenbankabfragen.

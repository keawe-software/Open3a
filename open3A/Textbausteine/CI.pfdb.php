<?php echo "This is a database-file."; /*
MySQL&%%%&MSSQL
varchar(5000)&%%%&varchar(5000)
CREATE TABLE `Textbaustein` (%n%l%  `TextbausteinID` int(10) NOT NULL AUTO_INCREMENT,%n%l%  `label` varchar(30) NOT NULL DEFAULT \'\',%n%l%  `isRStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isLStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isGStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isBStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isMStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `isAStandard` tinyint(1) NOT NULL DEFAULT \'0\',%n%l%  `text` text NOT NULL,%n%l%  `KategorieID` int(10) NOT NULL DEFAULT \'0\',%n%l%  `isKatDefault` tinyint(1) NOT NULL,%n%l%  `betreff` text NOT NULL,%n%l%  `isOStandard` tinyint(1) NOT NULL,%n%l%  `isPStandard` tinyint(1) NOT NULL,%n%l%  PRIMARY KEY (`TextbausteinID`)%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    &%%%&CREATE TABLE [Textbaustein] (%n%l%  [TextbausteinID] int NOT NULL AUTO_INCREMENT,%n%l%  [label] varchar(30) NOT NULL DEFAULT \'\',%n%l%  [isRStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isLStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isGStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isBStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isMStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [isAStandard] tinyint NOT NULL DEFAULT \'0\',%n%l%  [text] text NOT NULL,%n%l%  [KategorieID] int NOT NULL DEFAULT \'0\',%n%l%  [isKatDefault] tinyint NOT NULL,%n%l%  [betreff] text NOT NULL,%n%l%  [isOStandard] tinyint NOT NULL,%n%l%  [isPStandard] tinyint NOT NULL,%n%l%  PRIMARY KEY ([TextbausteinID])%n%l%) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT=\'openFiBu_0.1;\';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       %%&&&
INSERT INTO `Textbaustein` VALUES (2,\'sofort, rein netto\',1,0,0,0,0,0,\'Zahlungsbedingungen: sofort, rein netto\',1,0,\'\',0,0),(3,\'Eigentumsvorbehalt\',1,0,0,0,0,0,\'Unberechtigt abgezogene Skontobeträge werden nachgefordert.\nDie Ware bleibt bis zur vollständigen Bezahlung unser Eigentum.\',3,0,\'\',0,0),(4,\'8 Tage 3%\',0,0,0,0,0,0,\'Bei Bezahlung innerhalb 8 Tagen gewähren wir 3 % Skonto.\',1,0,\'\',0,0),(5,\'Lastschrift\',0,0,0,0,0,0,\'Der Rechnungsbetrag wird per Lastschrift eingezogen.\',1,0,\'\',0,0),(6,\'Rechnung\',1,0,0,0,0,0,\'Folgende Positionen erlauben wir uns, Ihnen in Rechnung zu stellen:\',2,0,\'\',0,0),(7,\'keine\',0,1,0,0,0,1,\'\',1,0,\'\',0,0),(8,\'keiner\',0,0,0,0,0,1,\'\',2,0,\'\',0,0),(9,\'keiner\',0,1,1,1,0,1,\'\',3,0,\'\',0,0),(10,\'Lieferschein\',0,1,0,0,0,0,\'Vielen Dank für Ihren Auftrag.\nBitte prüfen Sie die Vollständigkeit der aufgeführten Positionen.\',2,0,\'\',0,0),(11,\'Gutschrift\',0,0,1,0,0,0,\'\',2,0,\'\',0,0),(12,\'Gutschrift\',0,0,1,0,0,0,\'Bitte bringen Sie den Betrag bei Ihrer nächsten Zahlung in Abzug.\',1,0,\'\',0,0),(27,\'erste Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum}\n\n{Anrede},\n\nIhren Auftrag haben wir schnell und pünktlich ausgeführt.\nLeider warten wir bis heute vergeblich auf den Zahlungseingang.\n\nBitte überweisen Sie den Rechnungsbetrag von {RechnungsBetrag} bis zum {BisDatum} auf unser Konto.\n\nVielen Dank!\n\n\nMit freundlichen Grüßen,\n\n\n{Benutzername}\',31,1,\'\',0,0),(28,\'zweite Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum} und die Mahnung vom {1.MahnungDatum}\n\n{Anrede},\n\nam {1.MahnungDatum} haben wir Sie an den Zahlungsrückstand von {RechnungsBetrag} erinnert.\nBis heute haben wir weder eine Zahlung noch eine Reaktion von Ihnen erhalten.\n\nBitte überweisen Sie den Rechnungsbetrag bis zum {BisDatum} auf unser Konto:\n\nBankverbindung: Dresdner Bank Hamburg\nKontonummer: 1234 5678\nBankleitzahl: 200 800 00.\n\nSollten wir bis zum {BisDatum} keinen Zahlungseingang feststellen, werden wir zusätzlich Mahngebühren und Verzugszinsen berechnen.\n\nWir hoffen, dass dies nicht nötig sein wird!\n\n\nMit freundlichen Grüßen,\n\n\n{Benutzername}\',32,1,\'\',0,0),(29,\'dritte Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum} sowie die Mahnungen vom {1.MahnungDatum} und {2.MahnungDatum}\n\n{Anrede},\n\nauf unsere Mahnungen haben Sie leider nicht reagiert.\nEs besteht immer noch ein Zahlungsrückstand von {RechnungsBetrag}.\n\nBevor wir das gerichtliche Mahnverfahren einleiten, geben wir Ihnen hiermit eine letzte Chance, den Rechnungsbetrag zu zahlen.\n\nBitte nutzen Sie diese letzte Frist bis zum {BisDatum}. Danke!\n\n\n{Benutzername}\',33,1,\'\',0,0),(31,\'Rechnung\',1,0,0,0,0,0,\'{Anrede},\n\nim Anhang dieser E-Mail finden Sie eine Rechnung im PDF-Format.\n\nUm eine PDF-Datei anzeigen zu können, benötigen Sie zum Beispiel den Adobe Reader.\nDieser kann kostenlos unter http://www.adobe.de/products/acrobat/readstep2_allversions.html\nheruntergeladen werden.\n\nVielen Dank.\n\nMit freundlichen Grüßen\n   {Benutzername}\',42,0,\'Ihre Rechnung von {Firmenname}\',0,0),(41,\'Auftragsbestätigung\',0,0,0,1,0,0,\'Hiermit bestätigen wir Ihren Auftrag:\',2,0,\'\',0,0),(43,\'Zahlung erhalten\',0,0,0,0,0,0,\'{Anrede},\n\ndie Zahlung für Ihre Bestellung mit der Nummer {Bestellnummer} ist bei uns eingegangen.\nDie Bestellung enthält folgende Artikel:\n\n{Positionen}\n\nDie Bestellung wird jetzt weiter bearbeitet, Sie hören in Kürze wieder von uns.\n\nVielen Dank.\n\nMit freundlichen Grüßen\n  {Benutzername}\',101,1,\'Zahlungseingang für Bestellung {Bestellnummer}\',0,0),(44,\'Bestellung verschickt\',0,0,0,0,0,0,\'{Anrede},\n\nIhre Bestellung mit der Nummer {Bestellnummer} hat soeben unser Haus verlassen.\nSie können Ihr Paket unter folgender Adresse verfolgen:\n{TrackingLink}\n\nDie Bestellung ist damit abgeschlossen.\n\nMit freundlichen Grüßen\n  {Benutzername}\',102,1,\'Ihre Bestellung {Bestellnummer} wurde verschickt\',0,0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              &%%%&INSERT INTO [Textbaustein] ([TextbausteinID], [label], [isRStandard], [isLStandard], [isGStandard], [isBStandard], [isMStandard], [isAStandard], [text], [KategorieID], [isKatDefault], [betreff], [isOStandard], [isPStandard]) VALUES (2,\'sofort, rein netto\',1,0,0,0,0,0,\'Zahlungsbedingungen: sofort, rein netto\',1,0,\'\',0,0),(3,\'Eigentumsvorbehalt\',1,0,0,0,0,0,\'Unberechtigt abgezogene Skontobeträge werden nachgefordert.\nDie Ware bleibt bis zur vollständigen Bezahlung unser Eigentum.\',3,0,\'\',0,0),(4,\'8 Tage 3%\',0,0,0,0,0,0,\'Bei Bezahlung innerhalb 8 Tagen gewähren wir 3 % Skonto.\',1,0,\'\',0,0),(5,\'Lastschrift\',0,0,0,0,0,0,\'Der Rechnungsbetrag wird per Lastschrift eingezogen.\',1,0,\'\',0,0),(6,\'Rechnung\',1,0,0,0,0,0,\'Folgende Positionen erlauben wir uns, Ihnen in Rechnung zu stellen:\',2,0,\'\',0,0),(7,\'keine\',0,1,0,0,0,1,\'\',1,0,\'\',0,0),(8,\'keiner\',0,0,0,0,0,1,\'\',2,0,\'\',0,0),(9,\'keiner\',0,1,1,1,0,1,\'\',3,0,\'\',0,0),(10,\'Lieferschein\',0,1,0,0,0,0,\'Vielen Dank für Ihren Auftrag.\nBitte prüfen Sie die Vollständigkeit der aufgeführten Positionen.\',2,0,\'\',0,0),(11,\'Gutschrift\',0,0,1,0,0,0,\'\',2,0,\'\',0,0),(12,\'Gutschrift\',0,0,1,0,0,0,\'Bitte bringen Sie den Betrag bei Ihrer nächsten Zahlung in Abzug.\',1,0,\'\',0,0),(27,\'erste Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum}\n\n{Anrede},\n\nIhren Auftrag haben wir schnell und pünktlich ausgeführt.\nLeider warten wir bis heute vergeblich auf den Zahlungseingang.\n\nBitte überweisen Sie den Rechnungsbetrag von {RechnungsBetrag} bis zum {BisDatum} auf unser Konto.\n\nVielen Dank!\n\n\nMit freundlichen Grüßen,\n\n\n{Benutzername}\',31,1,\'\',0,0),(28,\'zweite Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum} und die Mahnung vom {1.MahnungDatum}\n\n{Anrede},\n\nam {1.MahnungDatum} haben wir Sie an den Zahlungsrückstand von {RechnungsBetrag} erinnert.\nBis heute haben wir weder eine Zahlung noch eine Reaktion von Ihnen erhalten.\n\nBitte überweisen Sie den Rechnungsbetrag bis zum {BisDatum} auf unser Konto:\n\nBankverbindung: Dresdner Bank Hamburg\nKontonummer: 1234 5678\nBankleitzahl: 200 800 00.\n\nSollten wir bis zum {BisDatum} keinen Zahlungseingang feststellen, werden wir zusätzlich Mahngebühren und Verzugszinsen berechnen.\n\nWir hoffen, dass dies nicht nötig sein wird!\n\n\nMit freundlichen Grüßen,\n\n\n{Benutzername}\',32,1,\'\',0,0),(29,\'dritte Mahnung\',0,0,0,0,0,0,\'Betreff: Unsere Rechnung {RechnungsNummer} vom {RechnungsDatum} sowie die Mahnungen vom {1.MahnungDatum} und {2.MahnungDatum}\n\n{Anrede},\n\nauf unsere Mahnungen haben Sie leider nicht reagiert.\nEs besteht immer noch ein Zahlungsrückstand von {RechnungsBetrag}.\n\nBevor wir das gerichtliche Mahnverfahren einleiten, geben wir Ihnen hiermit eine letzte Chance, den Rechnungsbetrag zu zahlen.\n\nBitte nutzen Sie diese letzte Frist bis zum {BisDatum}. Danke!\n\n\n{Benutzername}\',33,1,\'\',0,0),(31,\'Rechnung\',1,0,0,0,0,0,\'{Anrede},\n\nim Anhang dieser E-Mail finden Sie eine Rechnung im PDF-Format.\n\nUm eine PDF-Datei anzeigen zu können, benötigen Sie zum Beispiel den Adobe Reader.\nDieser kann kostenlos unter http://www.adobe.de/products/acrobat/readstep2_allversions.html\nheruntergeladen werden.\n\nVielen Dank.\n\nMit freundlichen Grüßen\n   {Benutzername}\',42,0,\'Ihre Rechnung von {Firmenname}\',0,0),(41,\'Auftragsbestätigung\',0,0,0,1,0,0,\'Hiermit bestätigen wir Ihren Auftrag:\',2,0,\'\',0,0),(43,\'Zahlung erhalten\',0,0,0,0,0,0,\'{Anrede},\n\ndie Zahlung für Ihre Bestellung mit der Nummer {Bestellnummer} ist bei uns eingegangen.\nDie Bestellung enthält folgende Artikel:\n\n{Positionen}\n\nDie Bestellung wird jetzt weiter bearbeitet, Sie hören in Kürze wieder von uns.\n\nVielen Dank.\n\nMit freundlichen Grüßen\n  {Benutzername}\',101,1,\'Zahlungseingang für Bestellung {Bestellnummer}\',0,0),(44,\'Bestellung verschickt\',0,0,0,0,0,0,\'{Anrede},\n\nIhre Bestellung mit der Nummer {Bestellnummer} hat soeben unser Haus verlassen.\nSie können Ihr Paket unter folgender Adresse verfolgen:\n{TrackingLink}\n\nDie Bestellung ist damit abgeschlossen.\n\nMit freundlichen Grüßen\n  {Benutzername}\',102,1,\'Ihre Bestellung {Bestellnummer} wurde verschickt\',0,0);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        %%&&&
*/ ?>

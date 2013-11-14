Title: Adobe Shadow

----

Release: 2012-03-08

----

Excerpt: Adobe hat in der entwickelnden Webgemeinde sicher keinen einfachen Stand. Mit Shadow kommt nach langer Zeit aus San Jose mal wieder etwas Nützliches.
 
----

Text: 

Adobe hat ein Problem. Ihr einst solides Standbein in der entwickelnden Webgemeinde wackelt nicht nur, es ist eingeknickt. Flash findet immer mehr in einer Nische statt und Dreamweaver ist schon längst nicht mehr die erste Wahl unter Entwicklern. Der letzte Versuch eines Webtools, Muse, wurde als peinlicher Fehltritt belächelt. Gestern kam dann Adobe Shadow.

Shadow ist ein kleiner, effizienter Helfer, um ein Webprojekt auf mobilen Endgeräte zu testen. Das Prinzip: Auf dem Mac oder Windows-PC läuft (link: http://labs.adobe.com/downloads/shadow.html text: ein Client) mitsamt (link: https://chrome.google.com/webstore/detail/ijoeapleklopieoejahbpdnhkjjgddem text: Chrome Extension), auf dem Device das Gegenstück in Form einer (link: http://www.adobe.com/go/sd_ios_app text: iOS) oder (link: http://www.adobe.com/go/sd_android_app text: Android App). Im gleichen Netzwerk betrieben, lassen sich nun mobile Devices mit dem Desktop-Client pairen.

(image: adobe_shadow.jpg)

Von nun an wird jeder in Chrome getätigte Seitenaufruf auch auf dem mobilen Endgerät ausgeführt. Egal ob eine Seite erstmalig aufgerufen, neu geladen oder durch einen Tabwechsel in den Vordergrund geholt wird.

In der Praxis funktioniert das sehr zufriedenstellend. Arbeitet man mit seiner lokalen IP statt eines Hostnamens wie localhost, lässt sich auch die lokale Entwicklung direkt auf Smartphone und Tablet betrachten. Das Pairing hat auch im hinter der Firewall tadellos funktioniert und macht generell einen sehr stabilen Eindruck. Unterwegs lässt sich der Personal Hotspot des iPhones als LAN-Ersatz nutzen. Auch hier wurde der Client umgehend gefunden.

Dank des implementierten (link: http://phonegap.github.com/weinre/ text: weinre) ist auch ein Debuggen der Clientansicht in Chrome möglich. Hier hört der stabile, selbst hinter Firewalls funktionierende Part allerdings auf. Durch den DOM-Baum wandern, CSS-Attribute ändern und (mit einiger Verzögerung) in der Konsole arbeiten funktioniert. Bei jedem Neuladen der Seite brach mir dabei jedoch die Verbindung weg. Auch auf die Netzwerkansicht gab es keinen Zugriff. Das Debuggen wirkt allem in allem etwas wackelig.

Insgesamt hinterlässt Adobes Shadow aber einen recht soliden und durchdachten Eindruck. Für mich eine gute Gelegenheit, um UI/UX ein wenig Responsivness einzuhauchen.
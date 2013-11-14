Title: Fremdmanipulation

----

Release: 2012-03-20

----

Excerpt: Bei fehlenden Funktionen in fremden Webdiensten kann man sich oft mit ein paar Zeilen JavaScript behelfen. Fehlt eine hilfreiche Bibliothek, ist auch diese nur ein Bookmarklet weit entfernt.

----

Text:

Bei vielen Webdiensten vermisse ich immer wieder bestimmte Funktionen, die mir die Nutzung des Angebots effizienter gestalten würden. Das ist gar kein Vorwurf an sich, denn meist sind das sehr spezielle Anliegen, deren Lösungen sich auch völlig zu Recht nicht im Interface wiederfinden.

## Do It Yourself

Wenn sich dabei das Problem im Frontend abspielt, behelfe ich mir gerne selbst. Insbesondere wenn jQuery bereits eingebunden ist, ein Kinderspiel! Aber was wenn nicht? Dafür tut bei mir folgendes kleines Bookmarklet gute Dienste:

<a href="javascript:(function(){document.body.appendChild(document.createElement('script')).src='http://code.jquery.com/jquery.min.js';})();" class="button red">jQuery laden</a>

Das macht nicht mehr, als ein `<script>` mit der aktuellen Version von jQuery ins Dokument zu hängen, behebt das Problem in den allermeisten Fällen aber effektiv. Was mache ich nun damit? Hier zwei Beispiele aus der Praxis.

### 1. Tweets filtern

Twitter hat eine fantastische Eigenschaft: Bei einem mit "@account..." beginnenden Tweet geht Twitter davon aus, dass es sich um eine Unterhaltung zwischen zwei Usern handelt. Zudem glaubt Twitter, dass diese Unterhaltung nur dann für mich relevant ist, wenn ich den beiden Usern auch folge. Ist dies nicht der Fall, bekomme ich den Tweet erst gar nicht in meiner Timeline angezeigt. 

Rufe ich eine Profilseite (wie z.B. (link: http://twitter.com/73inches text: diese hier)) direkt im Web auf, greift dieser Mechanismus nicht. Um bei der Suche nach einem Tweet die Übersicht wiederherzustellen, helfen mir folgende Zeilen:

```js

$('.js-tweet-text').each(function() {
	if($(this).text().substr(0,1) == '@') {
		$(this).closest('.js-stream-item').hide()
	}
});

```

Alle mit einem @-Zeichen beginnenden Tweets werden ausblendet. In die Konsole einfügen, abschicken, fertig.

### 2. Freie Domains finden

(link: http//united-domains.de text: United Domains) ist ein Domain-Registrar, den ich <strike>im Leben nicht</strike> nur in wenigen Ausnahmefällen nutzen würde. Sehr praktisch ist allerdings die Suche über alle angebotenen Domains hinweg, 239 an der Zahl. Um aus dieser Liste die vergebenen, reservierten oder aus sonst einem Grund nicht registrierbaren Treffer zu filtern, dient mir folgendes Snippet:

```js

$('.taken, .forSale, .serverError, .searchError, .vorgemerkt').parent().hide()

```

Ich wünsche fröhliches heimliches Funktionsnachrüsten.
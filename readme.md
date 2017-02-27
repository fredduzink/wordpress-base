## Wordpress starter kit

#### Wordpress goed zetten
 1. Thema naam geven (wp-content/themes/child hiernoemen)
 2. Lege DB aanmaken
 3. DB gegevens in wp-config.php zetten
 4. Via Mamp (oid) de website in host file zetten met domein naar bijvoorbeeld de testsite
 5. De url aanroepen die je in Mamp hebt aangegeven
 6. Wordpress installatie proces uitvoeren
 7. Vervolgens naar het child thema mapje en hierin de style.css, zodat de thema gegevens goed staan
 8. Inloggen in de backend: www.domain.nl/wordpress/admin
 9. Het child thema activeren. 
 10. Bij instellingen -> algemeen de Siteadres (URL) zonder /wordpress instellen

#### Thema goed zetten

 1. Open je Wordpress installatie in je favoriete editor (phpstorm/coda/sublime)
 2. Ga via je terminal (iterm/standaard) naar de child theme map
 3. We gaan nu eerst bower draaien, dit is een programmatje om dependencies te installeren, zoals bootstrap en font awesome.
 4. Open je bower.json bestand maar eens, hier staat in wat we installeren met bower
 5. Draai in je terminal binnen je child theme map `npm install -g bower` dit zorgt ervoor dat je bower hebt installeerd op je machine, heb je dit al dan kan je dit overslaan.
 6. Draai vervolgens `bower install`
 4. Nu gaan Gulp installeren om gebruik te maken van SASS.
 5. In je child theme map zie je ook een gulpfile.js bestand hierin zie je wat gulp straks allemaal gaat uivoeren.
 6. Via de terminal draai je nu gulp watch, en waarschijnlijk krijg je een foutmelding!
 7. Draai nu `npm install gulp`
 8. Wanneer je nu weer gulp watch draait krijg je weer een foutmelding omdat gulp een aantal gulp hulpmiddelen nodig hebben, deze staan bovenaan in je gulpfile.js
 9. Draai deze commando's: `npm install gulp-if` `npm install gulp-sass` `npm install gulp-concat` `npm install gulp-minify-css` `npm install gulp-uglify` `npm install merge2`
 10. Nu zijn alle hulpmiddelen geïnstalleerd en kunnen we gulp watch draaien.
 11. Wat gulp watch doet is het watchen van het style.scss file en het functions.js file, deze bestanden worden gecompiled naar de map assets/build/css en assets/build/js mappen. Deze worden natuurlijk weer in de head ingeladen, vanuit de scaffolder.
 12. Omdat we via bower bootstrap en font awesome hebben ingeladen worden deze al geinclude in de style.scss
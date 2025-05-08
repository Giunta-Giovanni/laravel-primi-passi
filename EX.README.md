
# Descrizione
Iniziamo a muovere i primi passi con questo fantastico framework che è Laravel!

# Svolgimento
Per prima cosa, creiamo un nuovo progetto Laravel 11 (ho usato Laravel 12), utilizzando questo comando:
__" composer create-project --prefer-dist laravel/laravel:^11.0 larave-primi-passi  "__

Al termine dell'installazione, entriamo nella cartella del progetto:
__" cd laravel-primi-passi "__

Avviamo il server con uno di questi due comandi:
__" php artisan serve oppure php -S localhost:8000 -t public "__

A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php.
Inizialmente stampiamo un "Hello World", poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
# Bonus 
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()

# Milestone 1 – Cancellazione della view di default
	•	Vai in resources/views ed elimina il file welcome.blade.php.

# Milestone 2 – Creazione della nuova homepage
	•	Crea un nuovo file chiamato home.blade.php in resources/views.
	•	All’interno di home.blade.php, scrivi un semplice Hello World.

# Milestone 3 – Rotta per la homepage
	•	Apri il file routes/web.php.
	•	Crea una rotta per / che ritorni la view home.blade.php.


# Milestone 4 – Passaggio di dati alla view
	•	Modifica la rotta per passare dei dati (es: nome o messaggio).
	•	In home.blade.php, visualizza il dato dinamicamente con Blade:

# Milestone 5 (Bonus) – Aggiunta di più pagine
	•	Crea almeno altre due views (es: about.blade.php, contact.blade.php) in resources/views.
	•	Aggiungi le rotte corrispondenti in web.php:

# Milestone 6 (Bonus) – Header con menu di navigazione
	•	In ogni view, aggiungi un header comune (può essere direttamente dentro ogni file o tramite @include).



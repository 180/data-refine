Dane statystyczne os�b bezrobotnych
=============

##�r�d�o:

Dane pochodz� ze strony : [http://www.stat.gov.pl/gus](http://www.stat.gov.pl/gus/5840_1487_PLK_HTML.htm).

##Proces oczyszczenia danych:

- do oczyszczenia danych u�y�em google refine
- oczyszczenie wymaga�o usuni�cia zb�dnych kolumn, usuni�cia zb�dnych wierszy, podmienienia numeracji wojew�dztw nazwami, posortowania wojew�dztwami
- po oczyszczeniu danych wyeksportowa�em je do formatu CSV r�wnie� poprzez google refine
- dane w formacie csv przekonwertowa�em do formatu JSON poprzez: [www.cparker15.com](http://www.cparker15.com/code/utilities/csv-to-json)

##Moje Dane:

[Dane w formacie CSV](../data/csv/bezrobotni_mcholka.csv)

[Dane w formacie JSON](../data/json/bezrobotni_mcholka.json)

##Przyk�adowe dane w formacie JSON:
```json
	{
		"wojewodztwo": "DOLNO�L�SKIE",
		"powiat": "m. Wroc�aw",
		"ilosc": "20.5",
		"procent": "6.2"
	}
	{
		"wojewodztwo": "KUJAWSKO-POMORSKIE",
		"powiat": "Bydgoski",
		"ilosc": "5.6",
		"procent": "14.6"
	}
```
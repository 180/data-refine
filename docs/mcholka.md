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

##Skrypt agreguj�cy

Skrypt przedstawiaj�cy przyk�adowe agregacje zosta� zaimplementowany na 3 r�nych bazach danych.
Skrypt zosta� napisany w j�zyku java.
Tutaj dost�pny jego kod �r�d�owy: [SKRYPT](../scripts/java/mcholka/SimpleAggregator.java)
Skrypt by� odpalany jako maven projekt, do jego zdalnego uruchomienia trzeba pobra� jary:

         <dependency>
             <groupId>org.mongodb</groupId>
             <artifactId>mongo-java-driver</artifactId>
             <version>2.11.0</version>
         </dependency>
         <dependency>
             <groupId>org.apache.commons</groupId>
             <artifactId>commons-io</artifactId>
             <version>1.3.2</version>
         </dependency>
         <dependency>
             <groupId>com.google.code.gson</groupId>
             <artifactId>gson</artifactId>
             <version>2.2.4</version>
         </dependency>
		 
Wyniki skryptu z ka�dej agregacji s� zapisywane na dysku w poprawnie sformatowanym pliku JSON.
Przyk�adowy fragment:

```json
{
  "serverUsed": "/153.19.1.202:27017",
  "result": [
    {
      "_id": "honda",
      "numberOfModels": 29.0
    },
    {
      "_id": "volkswagen",
      "numberOfModels": 25.0
    },
    {
      "_id": "ford",
      "numberOfModels": 24.0
    }
  ],
  "ok": 1.0
}
```

##Wykresy przedstawiaj�ce wyniki agregacji

* Stany usa posortowane wed�ug najwy�szej �redniej populacji powy�ej 10000.

![](../images/mcholka/stany.png)

* Wojew�dztwa wed�ug najwi�kszej sumy kod�w pocztowych

![](../images/mcholka/wojewodztwa.png)

* Posortowane modele aut wed�ug najwi�kszej ilo�ci modeli w roku 2000

![](../images/mcholka/marki.png)


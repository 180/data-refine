no_sql
======

Skrypt do pobierania kod�w wraz z danymi(.json) oraz wersja .csv utworzona przy pomocy narz�dzia google-refine.
Dane to kody-pocztowe gmin.


Skrypt php wykorzystuje api strony sejmometr.pl, po zarejestrowaniu si� na stronie, pobraniu kluczy �ci�gamy bibliotek� do api (folder ep_API), osadzamy klucze. Po za��czeniu biblioteki do skryptu mo�emy ju� korzysta� z wszystkich funkcjonalno�ci udost�pnianych przez sejmometr.

Fragment CSV:
```csv
kod,kod_int,liczba_gmin,wojewodztwo_id,liczba_powiatow,gminy,wojewodztwo,miejscowosci_str

00-002,2,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-003,3,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-004,4,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-005,5,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-006,6,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-007,7,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)

00-008,8,1,7,1,Warszawa,mazowieckie,Warszawa (�r�dmie�cie)
```

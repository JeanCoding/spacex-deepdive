
# SpaceX

Wij hebben gekozen voor de customer Journey case voor de starship deepdive.
**Bit Academy 2023**

## Designs

![SpaceX Customer Journey Design](https://i.ibb.co/P9VY1XH/customer-journey-design.png)

## Hoe run je dit prototype?

1. **Clone de GitHub repo voor deze project lokaal.**

- Dit kun je doen door deze commando in de terminal te zetten:

- `git clone git@bitlab.bit-academy.nl:mauroscheltens/stokbroden.git`

2. **Cd in het project.**

- Je moet in het project zijn om vervolgens door te kunnen gaan.

- Dit doe je door dit in te typen:

- `cd stokbroden.`

3. **Installeer composer.**

- Als je een nieuwe Laravel project start moet je dit doen omdat het
  dan pas echt Laravel installeert naast de andere nodige packages. Doe
  je met deze commando:

- `composer install`

4. **Installeer NPM.**

- Zoals we composer packages nodig hebben om door te kunnen gaan. Dat
  moet ook met NPM:

- `npm install`

5. **Maak een kopie van jouw .env file**

- `cp .env.example .env`

6. **Genereer een app encryption key**

- `php artisan key:generate`

7. **Maak een lege database, in phpmyadmin of een andere database manager.**

8. **In de .env file, verander de dbname naar de naam van jouw database, zodat Laravel kan connecten.**

9. **Migrate de database.**

- `php artisan migrate`

10. **Seed de database.**

- Als je klaar bent dan kan je de database met informatie gaan vullen.

- `php artisan db:seed`

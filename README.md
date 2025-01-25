b2_efrei_dev_portfolio_stage <!-- omit in toc -->
===

Description <!-- omit in toc -->
---

création d'un portfolio, projet annexe des étude de développement web d'EFREI, fait en janvier 2025.

Sommaire <!-- omit in toc -->
--------

- [Technologies](#technologies)
- [Fonctionnalités](#fonctionnalités)
- [Installation](#installation)
- [Lancement du serveur](#lancement-du-serveur)
- [Contributeurs](#contributeurs)
- [Licence](#licence)

Technologies
------------

- front-ends
  - HTML5
  - CSS3
  - PHP 8.2

- back-ends
  - PHP 8.2
  - Alterouter

- Composer
- Docker

Fonctionnalités
---------------

page home accueillante
CV téléchargeable
multilingue
page du matériel
page des technologies connus
page d'autres projets réalisé
page d'un projet avec des photo et autres précision sur ce projet

Installation
------------

Si vous n'avez pas composer voici comment l'installer :

```bash
apt -get install composer
```

puis installer les dépendance avec :

```bash
composer install
```

Lancement du serveur
--------------------

vous aurez besoin de composer et de docker installés

[Comment installer Docker](https://docs.docker.com/engine/install/)

après installation de docker, vous pouvez lancer le serveur avec la commande suivante :

```bash
docker-compose up --build
```

enfin vous pouvez accéder à votre site web avec l'adresse suivante :

[localhost](http://localhost:8080/)

Contributeurs
-------------

Lucas (EFREI Villejuif, Bachelor 2ème année)

Licence
-------

Ce projet est sous licence MIT. Vous êtes libres de l'utiliser, le modifier et le distribuer.

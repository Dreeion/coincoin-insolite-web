## CoinCoins Insolites

Related repo: https://github.com/Dreeion/coincoin-insolite-mobile

---

The "CoinCoins Insolites" application is a student project aiming to use and develop our skills in a two-weeks-long project.

The objective is to develop an application that allows users to see and visit unusual places around them. 
It is also required to design and develop a website to showcase the application.

------

L'application "CoinCoins Insolites" est un projet d'étudiants ayant pour objectif d'utiliser et de développer nos compétences dans un projet d'une durée de deux semaines.

L'objectif est de développer une application permettant aux utilisateurs de voir et de visiter des lieux insolites autour d'eux.
Il est également demandé de designer et de développer un site web permettant de mettre en avant l'application.

---

**Maintainers:**

- @Amestyale - Mobile Lead Dev
- @camillenaulet3 - Web Dev
- @Dreeion - Mobile Dev
- @maeldebon - Project Lead
- @Theia01 - Web Lead Dev

All information related to the advancement can be found in the [progress.md](./progress.md) document.

**Branches:**

- [Mobile development](https://github.com/Dreeion/coincoin-insolite-mobile)
- [Web development](https://github.com/Dreeion/coincoin-insolite-web)

---

**Setup the project**

Before starting, you must have [php 7.2](https://www.php.net/manual/en/install.php) installed.

In order to run the project, you will need to run a few commands.

First, clone the projet by using this command:
```sh
git clone https://github.com/Dreeion/coincoin-insolite-web.git
```

Then, setup it by typing these commands:
```sh 
npm install
composer install
```

Once this is done, you will have to rename the `.env.example` file to `.env`.

Then, type this command to generate a new key:
```sh 
php artisan key:generate
```

Finally, run these commands into two different terminals to run the app:
```sh 
npm run dev
php artisan serve
```

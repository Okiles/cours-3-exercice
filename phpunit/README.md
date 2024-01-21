# TP Automatisation du developpement - Test - PHPUnit

Exercice pour le cours d'automatisation du développement sur les tests.

Ce projet contient une classe `Calculator.php` qui permet de faire des opérations basique

## Technologie utilisées

- PHP 8.2
- PHPUnit 10.5

## Installation

### Docker

Vous pouvez utilisez Docker pour faire fonctionner ce projet

```sh
docker compose up
```

Sinon il suffit de lancer l'installation des packages via composer :

```sh
composer install
```

## Script

Si vous utilisez Docker ces commandes sont à lancer depuis le container ou avec le prefix `docker compose exec php`

### Run test with [PHPUnit](https://phpunit.de/)

```sh
composer test
```

utilise la configuration disponible dans le fichier `phpunit.xml`

### Run test and coverage

```sh
composer test:coverage
```

édite un rapport au format HTML dans le dossier `coverage`

### Linter

```sh
composer phpcs
```

```sh
composer phpcs:fix
```

### PHPStan

```sh
composer phpstan
```

## Structure du projet

- **src** : Contient le code source de l'application
- **tests** : Contient le code source des tests
- **coverage** : Dossier contentant les rapports de test coverage

## Attendu

Vous devrez écrire les tests pour couvrir l'intégralité des use case de ce projet.

### Tips

Servez vous des rapports de code coverage pour vérifier la pertinence de vos tests.

Si vous rencontrer l'erreur :
  > No code coverage driver available

C'est que vous n'avez pas l'extention XDebug de configuré avec PHP. Pour l'ajouter suivez le [guide d'installation](https://xdebug.org/docs/install) pour votre OS.

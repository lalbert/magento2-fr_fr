# French (France) Language Pack for Magento 2

Traduction de l'interface de Magento 2 en Français.

# Installation

## Via composer

La méthode la plus simple est d'utiliser composer pour installer et mettre à jour le package de traduction :

Ajouter le composant dans le fichier composer.json :

    composer require lalbert/magento2-fr_fr:@alpha
    
Vider le cacher

    bin/magento cache:clean
    
Pour effectuer la mise à jour :

	composer update
	
## Téléchargement du package

Si vous désirez installer le package sans utiliser composer, téléchargez-le et décompressez-le dans le répertoire `app/i18n/lalbert/fr_fr`
    
# Contribuer à la traduction

Référez-vous au fichier [CONTRIBUTING.md](https://github.com/lalbert/magento2-fr_fr/blob/master/CONTRIBUTING.md) si vous désirez contribuer aux traductions.

# Version

Les versions du package suivent les recommandations de la [Gestion sémantique de version](http://semver.org/lang/fr/).

Destinée initialement au développement logiciel, voici les règles utilisées pour notre numérotation :

## Incrémentation du numéro de version de CORRECTIF (x.y.**Z**)

* Correction de coquilles
* Correction de fautes fautes d'orthographes
* Ajout de nouvelles chaînes traduites

## Incrémentation du numéro de version MINEUR (x.**Y**.z)

* Remplacement d'un mot par un autre
* Changement du sens litérale de la précédente traduction

## Incrémentation du numéro de version MAJEUR (**X**.y.z)

Ne devrait jamais arriver...


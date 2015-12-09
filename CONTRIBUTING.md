# Contribuer à la traduction française de Magento 2

Toute aide à la traduction de Magento 2 en français est la bienvenue !

## Traduire les modules

1. Recherchez dans [la liste des tickets](https://github.com/lalbert/magento2-fr_fr/labels/A%20traduire) les modules qui ont besoin d'être traduit
2. "Forkez" le dépôt
3. Indiquez dans les commentaires du ticket que vous travaillez sur la traduction du module. Le label "En cours de traduction" sera ajouté
4. Une fois la traduction effectuée, effectuez un pull-request pour l'intégration des traductions

### Tests automatisés des traductions

Des tests ont été mis en place afin de vérifier au mieux les traductions. Les vérifications effectuées sont :

* Vérifie si la traduction de la chaîne est bien fournie (pas de chaîne vide, ...)
* Vérifie si les espaces en début ou fin de chaîne ont été respéctées ou qu'il n'y a pas eu un ajout innutile en début de chaîne (ce dernier test n'est pas effectué à la fin de la chaîne)
* Vérifie si la case du 1er caractère est respectée
* Vérifie si la ponctuation de fin de chaîne est bien respectée

## Tester les traductions

Si vous avez installé le package est que vous remarquez une erreur de traduction, une "coquille", une ~~fote d'ortografe~~ faute d'orthographe ou autre, vous pouvez [ouvrir un ticket](https://github.com/lalbert/magento2-fr_fr/issues/new) **après avoir vérifié** dans [la liste](https://github.com/lalbert/magento2-fr_fr/issues?utf8=%E2%9C%93&q=is%3Aopen+-label%3A%22A+traduire%22) que le problème n'a pas déjà été soulevé.

## Discution sur les termes de traduction

Certain termes peuvent être traduit de plusieurs façons différentes (ex: "Save" : "Sauvegarder" ou "Enregistrer").
Afin d'uniformiser les traductions dans l'ensemble de Magento, des [tickets de discussion](https://github.com/lalbert/magento2-fr_fr/issues?q=is%3Aopen+is%3Aissue+label%3Adiscussion) sont ouverts (ou peuvent être ouverts) afin de voter pour le meilleur terme à intégrer.
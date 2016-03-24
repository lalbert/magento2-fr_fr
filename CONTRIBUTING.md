# Contribuer à la traduction française de Magento 2

Toute aide à la traduction de Magento 2 en français est la bienvenue !

Les traductions sont gérées avec l'outil en ligne [OneSky](http://lalbert.oneskyapp.com/). Vous pouvez désormais participer à la traduction française directement à partir de cet outil.

Le package est basé sur 3 fichiers de traduction :

* [fr_fr.csv](fr_fr.csv) : toutes ces chaînes ont été extraites de [Magento 2.0.2](https://github.com/magento/magento2/tree/2.0) en utilisant la commande [`i18n:collect-phrases`](http://devdocs.magento.com/guides/v2.0/config-guide/cli/config-cli-subcommands-i18n.html#config-cli-subcommands-xlate-dict).
* [fr_fr.missing.csv](fr_fr.missing.csv) : contient des chaînes supplémentaires qui n'ont pas pas été extraites avec la commande précédente.
* [fr_fr.script.csv](fr_fr.script.csv) : contient des chaînes dont les apostrophes sont échappées pour corriger des erreurs dans les scripts.

*Les 2 fichiers `fr_fr.missing.csv` et `fr_fr.script.csv` ne devraient théoriquement pas exister puisque Magento devrait d'une part extraire correctement toutes les chaînes traductibles, et devrait d'autre part correctement échapper les caractères posant d'éventuels problèmes.
Ces problèmes ayant été remonté aux équipes de développement de Magento, nous sommes optimistes pour qu'ils soient corrigés dans une future version et seront donc inutiles.*

## Reportez une erreur

Si vous utilisez le package est que vous remarquez une erreur de traduction, une "coquille", une ~~fote d'ortografe~~ faute d'orthographe ou autre, vous pouvez [ouvrir un ticket](https://github.com/lalbert/magento2-fr_fr/issues/new) **après avoir vérifié** dans [la liste](https://github.com/lalbert/magento2-fr_fr/issues?utf8=%E2%9C%93&q=is%3Aopen+-label%3A%22A+traduire%22) que le problème n'a pas déjà été soulevé.

## Discution sur les termes de traduction

Certain termes peuvent être traduit de plusieurs façons différentes (ex: "Save" : "Sauvegarder" ou "Enregistrer").
Afin d'uniformiser les traductions dans l'ensemble de Magento, des [tickets de discussion](https://github.com/lalbert/magento2-fr_fr/issues?q=is%3Aopen+is%3Aissue+label%3Adiscussion) sont ouverts (ou peuvent être ouverts) afin de voter pour le meilleur terme à intégrer.

## Proposer vos traductions et corrections

Si vous êtes utilisateur de GitHub, vous pouvez proposer vos propres traductions et corrections en demandant des Pull Request.

Notez que les Pull Request ne sont autorisés que sur la branche [develop](https://github.com/lalbert/magento2-fr_fr/tree/develop).


### Tests automatisés des traductions

Des tests ont été mis en place afin de vérifier au mieux les traductions. Les vérifications effectuées sont :

* Vérifie si la traduction de la chaîne est bien fournie (pas de chaîne vide, ...)
* Vérifie si les espaces en début ou fin de chaîne ont été respéctées ou qu'il n'y a pas eu un ajout innutile en début de chaîne (ce dernier test n'est pas effectué à la fin de la chaîne)
* Vérifie si la case du 1er caractère est respectée
* Vérifie si la ponctuation de fin de chaîne est bien respectée




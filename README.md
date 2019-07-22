# First installation instructions

`composer install`


`bin/console doctrine:migrations:migrate`

# Créer une nouvelle branche avant de push

Pour créer une nouvelle branche il faut exécuter la commande suivante :

`git checkout -b nomDeLaBranche`

Le basculement sur la branche git est automatique.

Faire tous les commits nécessaire avec :

`git commit -m "nom du commit"`


et pour push sur la branche nouvellement créée il faut faire :

`git push --set-upstream origin nomDeLaBranche`

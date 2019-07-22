+ Créer la route pour afficher la page d'accueil
+ Créer/affiche le formulaire sur la page d'accueil
+ Gérer les contraintes de validation des formulaires
+ Gérer les erreurs des formulaires
+ Envoi des données de la commande par POST à l'API
+ A la fin de la commande, rediriger sur une page de paiement correspondante au choix de l'utilisateur (Stripe ou Paypal)
+ Afficher le succès du paiement, dans le cas contraire redirection sur la page d'accueil avec une erreur.
+ Enregistrer les informations de la commande en BDD.
+ Envoi des informations sur le statut du paiement validé à l'API.
+ Envoi de l'email de confirmation à la suite du retour de l'API.
+ Redirection sur la page de confirmation de la commande.
+ Tous les champs du formulaire de facturation sont requis.
+ Si l'adresse de livraison différente est activée, les champs de ce formulaire sont requis également.
+ Mettre des Assert NotBlank sur les champs du formulaire.
+ Il est possible de choisir le pays France, Luxembourg ou Belgique.

# Contraintes

Les éléments suivants doivent être enregistrés localement dans une BDD :
+ La commande
+ L'adresse de livraison
+ L'adresse de facturation si fournie
+ Le client
+ Le produit acheté
+ Le mode de paiement

+ Utiliser les Form Type au maximum.
+ Utiliser le système de logs de Symfony pour garder une trace du bon déroulement des commandes et de l'envoie de l'email.


# Recommandation

+ Utiliser Payum pour gérer Stripe et Paypal **[facultatif]**
+ Utiliser le service SMTP de Mailtrap.io
+ Utiliser Guzzle pour la communication avec l'API.

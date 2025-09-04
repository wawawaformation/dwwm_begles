Réinitialisation de mot de passe

Présentation
Ce projet est une petite page qui permet de réinitialiser son mot de passe avec quelques règles de sécurité.  
Le HTML et le CSS étaient déjà fournis, ma mission était uniquement de compléter le script JavaScript pour gérer la validation côté client.


Ce que fait le script
- Vérifie en temps réel les critères du mot de passe :
  - au moins une minuscule
  - au moins une majuscule
  - au moins un chiffre
  - longueur ≥ 8 caractères
- Chaque critère validé allume sa petite puce verte.
- Vérifie que la confirmation correspond bien au mot de passe.
- Bloque la soumission si les conditions ne sont pas respectées (avec un message clair).
- Permet d’afficher/masquer le mot de passe avec la case « Voir le mot de passe ».


Comment ça marche
J’ai séparé deux parties dans mon script :
1. Les fonctions “pures” (juste de la logique, ex : tester une regex).
   - `hasLowercase`, `hasUppercase`, `hasNumber`, `hasMinLength`
2. L’interface (DOM) qui met à jour les puces, gère la soumission et le bouton « Voir le mot de passe ».
   - `toogleClassChecked`
   - les `addEventListener` sur le champ mot de passe, le formulaire et la case à cocher


Choix techniques
- J’ai utilisé des Regex simples pour tester les caractères.
- J’ai utilisé `classList.add/remove` pour colorer les puces au lieu de manipuler le style en dur.
- Les `alert()` permettent de prévenir l’utilisateur en cas d’erreur. (On pourrait améliorer plus tard en affichant les messages directement sous les champs.)


Tests effectués
- Champ vide → aucune puce validée, soumission bloquée.
- Mot de passe partiel (ex : `abc`) → seulement la minuscule validée.
- Mot de passe correct (ex : `Abcdef12`) → toutes les puces validées, formulaire accepté.
- Confirmation différente → soumission bloquée avec un message.
- Case « Voir le mot de passe » → affiche ou cache le texte sans perte de focus.

Conclusion
Le projet montre l’utilisation du DOM, des événements et des regex pour faire une validation simple mais efficace côté client.  
Tout est fait en vanilla JS et respecte le HTML/CSS fournis.

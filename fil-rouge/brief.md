
# Fil rouge – DWWM Bègles 2025–2026  
## Plateforme de gestion de citations

---

## Quelques mots sur le projet

Ce projet fil rouge accompagne la montée en compétences des apprenants du titre professionnel **Développeur Web et Web Mobile (DWWM)**.  
Il s'agit de concevoir, développer et maintenir une application web complète de **gestion de citations**, avec une interface publique (lecture des contenus) et un espace privé (gestion et administration).

Le projet est mené dans une **démarche agile inspirée de Scrum et Kanban** :
- Travail en **petites équipes** avec répartition des rôles.
- Avancement par **lots fonctionnels** (user stories).
- Organisation du travail sous forme de **colonnes Kanban** : À faire / En cours / À valider / Fait.
- Réunions régulières (Jitsi) pour synchroniser les équipes.

---

## User Stories

### Visiteur (non connecté)
- Je veux consulter la liste des citations.
- Je veux cliquer sur une citation pour voir son contenu complet avec explication et auteur.
- Je veux consulter la liste des auteurs.
- Je veux ouvrir la fiche d’un auteur avec sa bio et ses citations.
- Je veux lire les pages statiques : "À propos", "Mentions légales", etc.
- Je veux envoyer un message via un formulaire de contact.

### Utilisateur inscrit
- Je veux me connecter avec email et mot de passe.
- Je veux réinitialiser mon mot de passe.
- Je veux modifier mes informations personnelles (nom, email, mot de passe).

### Éditeur
- Je veux créer, modifier et supprimer des auteurs.
- Je veux créer, modifier et supprimer des citations.

### Rédacteur
- Je veux modifier les pages statiques comme "À propos".

### Administrateur
- Je veux ajouter, modifier, désactiver ou supprimer des comptes.
- Je veux attribuer ou modifier les rôles des utilisateurs.

---

## Charges fonctionnelles et techniques

### Fonctionnelles
- Interface publique (consultation sans compte) : citations, auteurs, pages fixes, contact
- Espace personnel pour les inscrits : connexion, profil, réinitialisation mot de passe
- Interface de gestion (Back Office) :
  - CRUD auteurs et citations (éditeur)
  - Édition des pages statiques (rédacteur)
  - Gestion des utilisateurs et des rôles (admin)

### Techniques
- Architecture MVC
- API REST pour l’accès aux données
- Authentification sécurisée
- Système de rôles et permissions
- Validation front + back des formulaires
- Interface dynamique avec Vue.js
- Sécurité basique : contrôle des accès, anti-spam formulaire
- Gestion d’erreurs propre (utilisateur et serveur)

---

## Outils utilisés

| Usage               | Outil / technologie                                   |
|---------------------|------------------------------------------------------|
| Maquettage          | **Figma**                                            |
| Développement front | **HTML / CSS / JavaScript / Vue.js**                |
| Développement back  | **PHP 8.3+ / Symfony / Composer**                   |
| Base de données     | **MySQL / MariaDB**                                  |
| IDE                 | **Visual Studio Code**                               |
| Versionning         | **Git + GitHub**                                     |
| Suivi de projet     | **NextCloud + Kanban**                               |
| Réunions            | [Jitsi – Salle dédiée](https://meet.jit.si/DWWMBegle33011) |
| Dépôt GitHub        | [github.com/wawawaformation/dwwm_begles](https://github.com/wawawaformation/dwwm_begles)

---

## Agenda pédagogique du projet

| 📆 Période               | 💡 Objectif principal                            |
|--------------------------|--------------------------------------------------|
| **15 – 27 juillet 2025** | Maquettage + intégration HTML/CSS + Git/GitHub  |
| **7 – 8 août 2025**      | Ajout d’interactions avec JavaScript            |
| **28 – 29 août 2025**    | Conception et création de la base de données    |
| **20 – 24 octobre 2025** | Développement back-end avec Symfony             |
| **3 – 7 novembre 2025**  | Développement front-end Vue.js + API            |

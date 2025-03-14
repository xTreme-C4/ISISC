# ISISC - Système d'Inscription Scout

ISISC est un système d'inscription pour les groupes scouts, permettant aux utilisateurs de s'inscrire selon leur district et leur groupe. En gros, ISISC est un système qui reprend un système d'inscription déjà intégré dans le SISC. Il gère les liens et les affiche dans un iframe tout en sélectionnant le district et le groupe choisis.

## 📌 Fonctionnalités
- Sélection du district et du groupe scout.
- Choix du type d'inscription (Jeune Scout, Scout d'un jour, Adulte Bénévole).
- Redirection automatique vers la page d'inscription.

## 📂 Structure du projet

- `index.php` : Page principale permettant la sélection du district et du groupe.
- `systeme.php` : Gestion des étapes d'inscription en fonction des choix utilisateurs.
- `config.php` : Liste des districts, groupes et types d'inscriptions disponibles.

## 🚀 Installation et Utilisation

1. Clonez ce dépôt sur votre serveur :
   ```bash
   git clone https://github.com/pasmax2/ISISC.git
   ```
2. Placez les fichiers dans le répertoire racine de votre serveur web (Apache, Nginx, etc.).
3. Assurez-vous que PHP est installé et configuré sur votre serveur.
4. Modifiez le fichier `config.php` pour ajouter ou mettre à jour les districts et groupes si nécessaire.
5. Accédez à l'URL de votre serveur pour commencer l'inscription :
   ```
   http://votre-serveur/index.php
   ```

## ⚙️ Prérequis
- PHP 7.4 ou supérieur
- Serveur web (Apache, Nginx, etc.)

## 📜 Licence
Ce projet est sous licence propriétaire (© 2025 Indexatech, Pascal Levesque).

## 📧 Contact
Pour toute question ou suggestion, contactez : [pasmax2@gmail.com]

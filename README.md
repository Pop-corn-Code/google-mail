# 🚀 Envoi d'Emails avec Laravel & Gmail SMTP

![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)

Ce dépôt contient le code source complet du tutoriel YouTube sur l'intégration de Gmail comme serveur SMTP dans une application Laravel.

---

## 📺 Tutoriel Vidéo (Français)
Retrouvez toutes les explications détaillées dans cette vidéo :
👉 **[LIEN VERS TA VIDÉO YOUTUBE ICI]**

---

## ⚙️ Configuration du Compte Google

Pour des raisons de sécurité, Google bloque les connexions SMTP directes avec votre mot de passe habituel. Vous devez créer un **Mot de passe d'application** :

1. Allez sur votre [Compte Google](https://myaccount.google.com/).
2. Activez la **Validation en deux étapes** (obligatoire).
3. Recherchez **"Mots de passe d'application"**.
4. Créez-en un pour "Autre (Nom personnalisé)" et nommez-le "Laravel App".
5. Copiez le code de **16 caractères**.

---

## 🛠️ Installation Rapide

1. **Cloner le projet :**
   ```bash
   git clone [https://github.com/votre-pseudo/votre-repo.git](https://github.com/votre-pseudo/votre-repo.git)
   cd votre-repo

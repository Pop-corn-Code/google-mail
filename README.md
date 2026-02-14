# 🚀 Envoi d'Emails avec Laravel & Gmail SMTP

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
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


2. **Installer les dépendances :**
   ```bash
   composer install


3. **Configurer l'environnement :**
   Copiez le fichier d'exemple et remplissez vos informations (voir section `.env` ci-dessous).
   ```bash
   cp .env.example .env
   php artisan key:generate



4. **Lancer le serveur :**
   Copiez le fichier d'exemple et remplissez vos informations (voir section `.env` ci-dessous).
   ```bash
   php artisan serve


---

## 📧 Configuration du fichier `.env`

Modifiez ces lignes dans votre fichier `.env` pour activer l'envoi d'emails :
    
    ```bash
     MAIL_MAILER=smtp
     MAIL_HOST=smtp.gmail.com
     MAIL_PORT=465
     MAIL_USERNAME=votre-adresse@gmail.com
     MAIL_PASSWORD=votre-code-16-caracteres-sans-espaces
     MAIL_ENCRYPTION=ssl
     MAIL_FROM_ADDRESS="votre-adresse@gmail.com"
     MAIL_FROM_NAME="${APP_NAME}"


> **Note :** Si vous préférez le port `587`, utilisez MAIL_ENCRYPTION=tls.

---

## 🧪 Tester l'envoi

Une route de test est disponible dans `routes/web.php`. Une fois votre `.env` configuré, visitez :
`http://localhost:8000/send-mail` (ou l'URL de votre projet).

---

## 👨‍💻 Auteur
Jery123

YouTube : https://www.youtube.com/@pop2c

Twitter/X : @Pop2_c

**⭐ N'oubliez pas de laisser une étoile sur le repo si ce code vous a aidé !**

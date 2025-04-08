# 🚗 Gestion de location de voitures

Une application web développée avec **Laravel** pour gérer un parc de voitures à louer. Elle permet aux utilisateurs d’ajouter, modifier, supprimer et consulter les voitures disponibles. L’interface est claire et moderne.

---

## 🛠️ Technologies utilisées

- **Laravel 11**
- **PHP 8.1+**
- **MySQL**
- **Docker / Docker Compose**
- **TailwindCSS**
- **JavaScript (Vite)**

---

## ⚙️ Instructions de build et d’exécution locale

```bash
# Cloner le dépôt
git clone https://github.com/malloukmarwane/gestion-location-voitures.git
cd gestion-location-voitures

# Copier le fichier d’environnement
cp .env.example .env

# Lancer Docker
docker-compose up -d --build

# Installer les dépendances
docker exec -it app composer install
docker exec -it app php artisan key:generate
docker exec -it app php artisan migrate
docker exec -it app npm install
docker exec -it app npm run build
```

Accéder à l’application sur : [http://localhost:8000](http://localhost:8000)

---

## 🐳 Lien vers l’image Docker

📦 En attente de publication sur Docker Hub

> Tu peux publier l’image avec :

```bash
docker build -t malloukmarwane/gestion-location-voitures .
docker push malloukmarwane/gestion-location-voitures
```

---

## 🧰 Commandes utiles

| Commande                              | Description                             |
|--------------------------------------|-----------------------------------------|
| `docker-compose up -d --build`       | Lancer l'application                    |
| `docker-compose down`                | Arrêter les conteneurs                  |
| `docker exec -it app bash`           | Accéder au conteneur `app`              |
| `php artisan migrate`                | Exécuter les migrations Laravel         |
| `npm run dev`                        | Lancer les assets en mode développement |
| `npm run build`                      | Compiler les assets pour production     |

---

## 👨‍💻 Auteur

- **Marwane Mallouk**  
📧 malloukmarwan@gmail.com  
🔗 [GitHub - malloukmarwane](https://github.com/malloukmarwane)

---

## 📸 Aperçu de l'application

![Aperçu de l'application](public/images/demo.png)

> L'image est extraite directement de l’interface utilisateur de l’application.

---

## 📄 Licence

Ce projet est sous licence **MIT**.  
Voir le fichier [LICENSE](LICENSE) pour plus d’informations.

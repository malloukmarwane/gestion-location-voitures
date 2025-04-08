# 🚗 Gestion de location de voitures

Une application web développée avec **Laravel** pour gérer un parc de voitures à louer. Elle permet aux utilisateurs d’ajouter, modifier, supprimer et consulter les voitures disponibles. L’interface est claire et moderne.

---

## 🛠️ Technologies utilisées

- **Laravel 11**
- **PHP 8.1+**
- **MySQL**
- **Docker / Docker Compose**
- **Bootstrap**
- **JavaScript**

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

```

Accéder à l’application sur : [http://localhost:8000](http://localhost:8000)

---

## 🐳 Lien vers l’image Docker

> Tu peux publier l’image avec :

```bash
docker build -t marwanemallouk/gestion-location-voitures .
docker push marwanemallouk/gestion-location-voitures
```

---

## 🧰 Commandes utiles

| Commande                              | Description                             |
|--------------------------------------|-----------------------------------------|
| `docker-compose up -d --build`       | Lancer l'application                    |
| `docker-compose down`                | Arrêter les conteneurs                  |
| `docker exec -it app bash`           | Accéder au conteneur `app`              |
| `php artisan migrate`                | Exécuter les migrations Laravel         |

---

## 👨‍💻 Auteur

- **Marwane Mallouk**  
📧 malloukmarwan@gmail.com  
🔗 [GitHub - malloukmarwane](https://github.com/malloukmarwane)

---


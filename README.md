# API Pêche Sénégal - Laravel

Cette API fournit les données de pêche au Sénégal par région et espèce.  
Elle est utilisée par l’application R Shiny pour afficher graphiques et cartes interactives.

---

## **Installation**

### 1. Cloner le dépôt
```bash
git clone https://github.com/bayecheikh/api-peche.git
cd api-peche

2. Installer les dépendances
composer install

3. Configuration de l’environnement
Copiez le fichier .env.example en .env et configurez votre base de données MySQL :
cp .env.example .env

Modifier les lignes suivantes dans .env :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_peche
DB_USERNAME=root
DB_PASSWORD=

4. Générer la clé d’application
php artisan key:generate

5. Créer la base de données
Assurez-vous que la base api_peche existe dans MySQL.

6. Migrer et seed la base de données
php artisan migrate --seed
Cela va créer les tables peches et sites et insérer les données d’exemple.

7. Lancer le serveur
php artisan serve
L’API sera disponible sur : http://localhost:8000/api/peche

Endpoints
GET /api/peche
Retourne toutes les données de pêche au format JSON.

GET /api/peche?region=Kayar
Retourne les données filtrées par région.

Exemple de réponse
[
  {
    "region": "Kayar",
    "espece": "Thiof",
    "quantite": 400,
    "lat": "14.9189000",
    "lng": "-17.1198000"
  },
  {
    "region": "Kayar",
    "espece": "Sardinelle",
    "quantite": 600,
    "lat": "14.9189000",
    "lng": "-17.1198000"
  }
]

Notes
Les coordonnées lat et lng sont utilisées pour afficher les sites sur Leaflet.
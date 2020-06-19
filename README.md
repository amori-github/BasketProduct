# DOCUMENTATION


# Objectif:

Développer une application contenant un catalogue de produits et une gestion de panier basique.

- L’application propose 12 produits au total.
- Les produits contiennent les champs suivants : id, nom, description, prix.
- Les produits seront stockés en base de donnée.
- Le panier sera stocké en session. 

  
### Tech  
- Projet Symfony 4.4
- PHP >= 7.2
- SQLite

### Détails de l'application
- Mise en forme simple avec le framework Bootstrap 4 et gestion des assets avec 
  Symfony Encore
- Fixtures pour charger les produits en base de données
- Migrations de base de données
- Test unitaire du panier : tester le calcul du montant total
- Test fonctionnel de la page d’accueil : tester le code de la réponse et le nombre de
  produits affichés
- Installer un espace d'administration permettant de gérer les produits (​ easyadmin ​ )
  Sécuriser cet espace d’administration (utilisateur “admin@gmail.com” avec pour mot de passe
  “adminadmin” de type ​ in_memory) 
  pour l'accée à l'espace admin tapez -> lien de votre serveur/admin : http://127.0.0.1:8000/admin
- Produit : ajouter une photo visible sur les pages d’accueil et de détails
- Produit : ajouter un slug qui servira à afficher la page de détails
- Page panier : pouvoir modifier les quantités
- Page panier : pouvoir supprimer un produit
- Proposer un point d’API renvoyant l’intégralité des produits au format JSON et CSV
- Permettre au visiteur de choisir la langue du site : fr ou en (les produits et les urls ne
  sont pas à traduire, seule l’interface est à adapter)

### Installation

Importer le projet depuis github
   
     git clone https://github.com/amori-github/BasketProduct.git
     
Exécuter le composer install pour instalez tous les dépendances du projet
    
     composer install

### Configurer la base de données

Configurer votre base de données dans le fichier .env 
 
    DATABASE_URL="sqlite:///%kernel.project_dir%/var/catalogue.db"
    
Créer la base de donnée en exécutant cette commande    
 
    php bin/console doctrine:database:create
 
### Migrations: 
On stock nos entités sur notre base de données: 
    
    php bin/console make:migration
 
Exécutez la migration :
 
    php bin/console doctrine:migrations:migrate
 
### Data Fixtures
Doctrine fournit une bibliothèque qui vous permet de charger par programme des données de test dans votre projet (c'est-à-dire des "données de fixture"). Installez-le avec:

    composer require doctrine/doctrine-fixtures-bundle --dev

Ensuite, utilisez la make:fixturescommande pour générer une classe de fixture vide:
 
    php bin/console make:fixtures
    The class name of the fixtures to create (e.g. AppFixtures):
    > ProductFixture

Personnalisez la nouvelle classe pour charger des Productobjets dans Doctrine:
```sh
namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1 ; $i <= 12; $i++) {
            $alphabet="abcdefghijklmnopqrstuvwxyz";
            $lettre_aleatoire=$alphabet[rand(0,25)];
            $product = new Product();
            $product->setNom($lettre_aleatoire.' product '.$i);
            $product->setImage(' product '.$i.'jpg');
            $product->setUpdatedAt(new \DateTime('02/06/2020'));
            $product->setDescription('Description du Produit '.$i);
            $product->setPrix(mt_rand(10, 100));
            $manager->persist($product);
        }


        $manager->flush();
    }
}
```
Rechargez toutes les classes de fixture:

    php bin/console doctrine:fixtures:load

### Compiler les assets 
Installer Encore dans votre projet
 
    composer require symfony/webpack-encore-bundle
    yarn install
    
si vous rencontrez des problémes, assurez-vous d'installer Node.js et également le gestionnaire de packages Yarn.
ou consulter la documentation [documentation](https://symfony.com/doc/4.4/frontend/encore/installation.html) 
 
Utiliser Bootstrap 4 dans votre projet
 
    yarn add bootstrap --dev
 
Pour utiliser scss et les icones fontawesome dans votre projet exécuter ces commandes:

    sass-loader@^7.0.1 node-sass --dev
    yarn add --dev @fortawesome/fontawesome-free

Créer un nouveau dossier scss puis un fichien app.scss sous assets et le remplir comme suit:

    @import "node_modules/bootstrap/scss/bootstrap";
    @import '../../node_modules/@fortawesome/fontawesome-free/css/all.css';
Vérifier que votre fichier webpack.config.je qui se trouve dans la racine de votre projet est comme suit :
```sh
 var Encore = require('@symfony/webpack-encore');
 
 // Manually configure the runtime environment if not already configured yet by the "encore" command.
 // It's useful when you use tools that rely on webpack.config.js file.
 if (!Encore.isRuntimeEnvironmentConfigured()) {
     Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
 }
 
 Encore
     // directory where compiled assets will be stored
     .setOutputPath('public/build/')
     // public path used by the web server to access the output path
     .setPublicPath('/build')
     // only needed for CDN's or sub-directory deploy
     //.setManifestKeyPrefix('build/')
 
     /*
      * ENTRY CONFIG
      *
      * Add 1 entry for each "page" of your app
      * (including one that's included on every page - e.g. "app")
      *
      * Each entry will result in one JavaScript file (e.g. app.js)
      * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
      */
     .addEntry('app', './assets/js/app.js')
     //.addEntry('page1', './assets/js/page1.js')
     //.addEntry('page2', './assets/js/page2.js')
 
     // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
     .splitEntryChunks()
 
     // will require an extra script tag for runtime.js
     // but, you probably want this, unless you're building a single-page app
     .enableSingleRuntimeChunk()
 
     /*
      * FEATURE CONFIG
      *
      * Enable & configure other features below. For a full
      * list of features, see:
      * https://symfony.com/doc/current/frontend.html#adding-more-features
      */
     .cleanupOutputBeforeBuild()
     .enableBuildNotifications()
     .enableSourceMaps(!Encore.isProduction())
     // enables hashed filenames (e.g. app.abc123.css)
     .enableVersioning(Encore.isProduction())
 
     // enables @babel/preset-env polyfills
     .configureBabelPresetEnv((config) => {
         config.useBuiltIns = 'usage';
         config.corejs = 3;
     })
 
     // enables Sass/SCSS support
     .enableSassLoader()
 
     // uncomment if you use TypeScript
     //.enableTypeScriptLoader()
 
     // uncomment to get integrity="..." attributes on your script & link tags
     // requires WebpackEncoreBundle 1.4 or higher
     //.enableIntegrityHashes(Encore.isProduction())
 
     // uncomment if you're having problems with a jQuery plugin
     //.autoProvidejQuery()
 
     // uncomment if you use API Platform Admin (composer req api-admin)
     //.enableReactPreset()
     //.addEntry('admin', './assets/js/admin.js')
 ;
 
 module.exports = Encore.getWebpackConfig();

 ```
Exécuter cette commande Pour construire les actifs dans le fichier public [documentation](https://symfony.com/doc/4.4/frontend/encore/simple-example.html):

    yarn encore dev --watch

Vérifier que les 2 links: app.css et app.js sont dans votre page de base, "base.html.twig" comme suit:
```sh
 {% block stylesheets %}
     {{ encore_entry_link_tags('app') }}
 {% endblock %}

 {% block javascripts %}
    {{ encore_entry_script_tags('app') }}
 {% endblock %}
```
### Lancer votre application BasketProduct
en installant le web-service-bundle

    composer require symfony/web-server-bundle --dev
    php bin/console server:run
    
### Developpement

## Tester votre application

installer le composant PHPUnit :
 
    composer req symfony/phpunit-bridge
 
Et pour les tests fonctionnels on va avoir besoin de :
 
    composer require --dev symfony/browser-kit symfony/css-selector

dans le fichier config/packages/test/framework.yaml, décommenter les 2 dernières lignes pour utiliser les session:
```sh
framework:
    test: ~
    # Uncomment this section if you're using sessions
    session:
        storage_id: session.storage.mock_file
 ```
dans le phpunit.xml.dist, ajouter la ligne de configuration de votre base
```sh
<php>
        <server name="DATABASE_URL" value = "sqlite:///%kernel.project_dir%/var/productcataloge.db" />
</php>
 ```
En fin vous pouvez exécuter les tests avec  :

    php bin/phpunit



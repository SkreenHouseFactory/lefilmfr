# bootstrap-slim
Configuration de démarrage pour les développements George's Office & Ebb&Flow




## Installation

### Github
 * initialiser GIT `git init`, puis `git remote add origin git@github.com:georges-office/XXX.git`
 * récupérer les modifications depuis github : `git pull origin master`
 * envoyer ses modifications à github : `git add .`, puis  `git commit -m 'commentaire'` et `git push origin master`
 * pour que GIT ignore des fichiers et/ou dossiers il faut les ajouter au fichier `.gitignore`
### Composer
 * installer : https://getcomposer.org/ et executer `./composer.phar update`
### .htaccess
 * `public/.htaccess`
### Bootstrap
 * `/public/bootstrap` est un raccourci vers `/vendor/twitter/bootstrap/dist`
### Vi
* liste des commandes vi http://www.cs.colostate.edu/helpdocs/vi.html




## Environnements

Il y a trois environnements : dev, recette et prod  
Ils sont paramétrés dans `app/config/env.php`




## Développement

### Controller
`public/index.php` utilise `$app->smart_controller` qui pointe vers un controller et une action contenus dans le namespace `App\Controller`.

### View
On utilise Twig (http://twig.sensiolabs.org/) couplé à TwigBridge pour les helpers formulaires notament (https://github.com/symfony/TwigBridge)  
Les templates sont organisées dans app/Views, avec un layout et de manière générale un dossier par controller.

### Forms
Utilisation du composant formulaire avec les contraintes Symfony2   (http://symfony.com/fr/doc/current/components/form/introduction.html), activable dans index.php  
Liste des contraintes :   
http://symfony.com/fr/doc/current/reference/constraints.html  
Ils sont paramétrés dans `app/config/form_factory.php`  
Dans le controller la form factory est accessible via `$this->app->form_factory`  
exemple :  

     $form = $this->app->form_factory->createBuilder()
	    ->add('carte', 'integer', array(
        'required' => true,
        'attr'   =>  array(
          'class'   => 'maclass',
        ),
        'constraints' => array(
          new Assert\Length(array(
            'min'        => 12,
            'max'        => 12,
            'exactMessage' => 'Votre nom ne peut pas être plus long que {{ limit }} caractères',
        ))
      )))
	    ->add('motdepasse', 'password')
	    ->getForm();

Dans la vue, vous pouvez utiliser TwigBridge et rendre le formulaire et les messages d'erreur par un simple
`{{ form }}`  
Plus de doc : http://symfony.com/fr/doc/current/book/forms.html  

### ORM
Utilisation de Doctrine 2 (http://www.doctrine-project.org/), activable dans index.php  
Mise à jour de la base de donnée à partir des annotations des entités  
`./app/console orm:schema-tool:update --force`  
Génération des methodes dans les Entity  
`./app/console orm:generate-entities app/Entity/`  

### Session
Activable dans index.php




## Frontend

### Assets : js et css
Ils sont à mettre dans /public/assets

### Bootstrap 
`/public/bootstrap` est un raccourci vers `/vendor/twitter/bootstrap/dist`



## Maintenance
Pour mettre le site en maintenance il faut aller dans `app/config/env.php` et décommenter les lignes `// Maintain splashscreen`  
Le template du message de maintenance est dans `app/Views/maintain/splashscreen.twig`



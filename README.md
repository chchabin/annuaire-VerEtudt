# 1 - Annuaire version étudiant
Un club de bridge a souhaité créer une application pour recenser tous ses membres lors d'une compétition. 
Un étudiant en informatique a durant son stage créer un debut d'application.
Les caractéristiques sont les suivantes :
1. Langage : PHP, HTML, CSS
2. Pattern :  MVC
3. Framework css : [Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)
Pour l'instant cette application est locale. 
Monsieur Geste le président de l'association souhaite faire quelques modifications.

## Mission 1 : Installation de l'application
1. Faire un fork de annuaire-VerEtudt sur [https://github.com/chchabin/annuaire-VerEtudt](https://github.com/chchabin/annuaire-VerEtudt)  
   ![fork](images/fork.png)
2. Faire un clone du repository 
> git clone https://github.com/<votre nom>/annuaire-VerEtudt.git
3. Lancer le script `annuaire.sql`
4. Lisez la partie 2 pour comprendre les principes du MVC.



## Mission 2 : Création de la fonctionalité liste des membres
#### a - Maquette
La maquette de la vue `v_listemembres.php` doit avoir cette apparence :
![vueListeMembre](images/vueListeMembre.PNG) 

#### b - Fiches descriptives du cas d'utilisation à réaliser

| **PROJET :**   Application  web de afficher les membres | 
|---------------------------------------------------------|
| **Description cas d’utilisation**                       |
| **Nom cas d’utilisation :**   Afficher les membres      |
| **Acteur déclencheur :**   l’utilisateur                |
| **Scénario nominal :**                                  |                                                                                                                                                                                          
| 1. L’utilisateur demande à afficher les membres.        |
| 2. Le système retourne le vue listemembres              |
| 3. L’utilisateur choisi de retourner à l’accueil.       |
| 4. Le système retourne la vue accueil                   |
| **Extensions :**                                        |
| **Exceptions :**                                        | 
### c- fiches savoir
[framework bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)  
[la boucle foreach](http://chchabin.free.fr/docs/php/programmer/les-boucles/)  
[les tableaux associatifs](http://chchabin.free.fr/docs/php/programmer/les-tableaux/)  

**Ce qui vous est demandé de faire :**
1. dans le fichier `m_model.php` trouvez la requête qui récupère tous les noms et prénom des membres.
2. Testez votre résultat.
3. dans le fichier `v_listemembres.php` construisez un tableau HTML et remplissez les lignes dynamiquement à partir de la variable 
`$les_membres` qui envoyée par le contrôleur.

## Mission 3 : Création de la fonctionalité saisir un membre
#### a - Maquette
La maquette de la vue `v_saisiemembre` doit avoir cette apparence :  
![v_saisieMembre](images/vueSaisieMembre.PNG)  
La maquette de résultat doit avoir cette apparence:  
![v_saisieResult](images/vueSaisieResult.PNG)

#### b - Fiches descriptives du cas d'utilisation à réaliser

| **PROJET :**   Application  web de saisir un membre                              | 
|----------------------------------------------------------------------------------|
| **Description cas d’utilisation**                                                |
| **Nom cas d’utilisation :**   Saisir les membres                                 |
| **Acteur déclencheur :**   l’utilisateur                                         |
| **Scénario nominal :**                                                           | 
| 1. L’utilisateur demande à saisir un membre.                                     |
| 2. Le système retourne le formulaire de saisie                                   |
| 3. L’utilisateur saisit les informations et valide sa saisie.                    |
| 4. Le système retourne la vue accueil avec l'information sur l'etat de la saisie |
| **Extensions :**                                                                 |
| **Exceptions :**                                                                 |
### c- fiches savoir
[framework bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)  
[les formulaires](http://chchabin.free.fr/docs/php/transmission/transmission-script/)

**Ce qui vous est demandé de faire :**
1. dans le fichier `m_model.php` créez la fonction `insertMembre()` pour insérer un nouveau membre dans la base de données.
2. dans le fichier `v_saisiemembre.php` et construisez un formulaire avec le nom et le prénom à saisir.
3. modifiez l'action `controlesaisie` dans le contrôleur pour récupérer toutes les variables.
4. modifiez le message envoyé par le contrôleur dans la vue `accueil.php`.


## Mission 4 : Création de la fonctionalité supprimer un membre
>Les membres seront supprimés un par un.
#### a - Maquette
La maquette de la vue `v_deletemembre` doit avoir cette apparence :   
![vueSupprimerMembre](images/vueSupprimerMembre.PNG)  
La maquette de résultat doit avoir cette apparence:  
![vueSupprimerResult](images/vueSupprimerResult.PNG)


#### b - Fiches descriptives du cas d'utilisation à réaliser

| **PROJET :**   Application  web de supprimer un membre                           | 
|----------------------------------------------------------------------------------|
| **Description cas d’utilisation**                                                |
| **Nom cas d’utilisation :**   Supprimer un membre                                |
| **Acteur déclencheur :**   l’utilisateur                                         |
| **Scénario nominal :**                                                           | 
| 1. L’utilisateur demande à supprimer un membre.                                  |
| 2. Le système retourne le formulaire de saisie                                   |
| 3. L’utilisateur choisi le membre et valide sa saisie.                           |
| 4. Le système retourne la vue accueil avec l'information sur l'etat de la saisie |
| **Extensions :**                                                                 |
| **Exceptions :**                                                                 |
### c- fiches savoir
[framework bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)  
[les formulaires](http://chchabin.free.fr/docs/php/transmission/transmission-script/)  
[formulaire et select](http://chchabin.free.fr/docs/php/transmission/transmission-script/)

**Ce qui vous est demandé de faire :**                                 
1. dans le fichier `m_model.php` créez la fonction `deleteMembre()` qui prendra en paramètre l'id du membre,
2. créez un fichier `v_deletemembre.php` dans lequel l'utilisateur chois le membre à supprimer dans une liste, puis valide la suppression,
3. dans le contrôleur, créez l'action `supprimer` qui affiche la vue `v_deletemembre.php`,
4. testez votre travail,
5. dans le contrôleur, créez l'action `controledelete` pour récupérer les informations du formulaire et lancer la suppression dans le modèle.
6. Affichez le résultat de la saisie dans la vue `accueil.php` (prevoyez le code dans l'action `controledelete` en conséquence).

## Mission 5 : Création de la fonctionalité modifier un membre
#### a - Maquette
La maquette de la vue `v_choisirmembre` doit avoir la même apparence que la vue `v_deletemembre`  
La maquette de résultat correspond à celle de celle de saisie d'un membre

#### b - Fiches descriptives du cas d'utilisation à réaliser

| **PROJET :**   Application  web de modifier un membre                                  | 
|----------------------------------------------------------------------------------------|
| **Description cas d’utilisation**                                                      |
| **Nom cas d’utilisation :**   Saisir les membres                                       |
| **Acteur déclencheur :**   l’utilisateur                                               |
| **Scénario nominal :**                                                                 | 
| 1. L’utilisateur demande à modifier un membre.                                         |
| 2. Le système retourne le formulaire de saisie                                         |
| 3. L’utilisateur choisi le membre et valide sa saisie.                                 |
| 4. Le système retourne le formulaire de modification                                   |
| 5. L’utilisateur modifie les informations et valide sa saisie.                         |
| 6. Le système retourne la vue accueil avec l'information sur l'état de la modification |
| **Extensions :**                                                                       |
| **Exceptions :**                                                                       |

### c- fiches savoir
[framework bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)  
[les formulaires](http://chchabin.free.fr/docs/php/transmission/transmission-script/)  
[formulaire et select](http://chchabin.free.fr/docs/php/transmission/transmission-script/)  
[formulaire utilisation de la propriété value](https://codepen.io/binosor/pen/qBydvBo)

**Ce qui vous est demandé de faire :**
1. dans le fichier `m_model.php` créez la fonction `getUnMembre()` qui prendra en paramètre l'id du membre,
2. modifiez le fichier `v_choisirmembre.php` avec la même structure que `v_deletemembre.php` mais qui a pour action `modifier`,
3. dans le contrôleur, créez l'action `choisir` qui affiche la vue `v_choisirmembre.php`,
4. testez votre travail,
5. dans le contrôleur, créez l'action `modifier` pour récupérer les informations du formulaire et afficher la vue `v_saisiemembre.php`.
6. modifier la vue `v_saisiemembre.php` pour qu'elle affiche les données du memebre choisi (attention, l'id du membre doit être récupérée mais pas affichée).
7. dans le fichier `m_model.php` créez la fonction `updateMembre()` qui prend en paramètre l'id, le nom et le prénom.
8. modifier l'action `controlesaisie` pour quelle appelle `updateMembre()` s'il existe un `id` dans le `REQUEST`,
9. affichez le résultat de la saisie dans la vue `accueil.php`.


# 2- Quelques explications

## a - Point d'entrée unique
Le fichier `index.php` va lire toutes les url lancées par l'utilisateur.  
Il faut distinguer 2 cas :
1. l'application se lance pour le **première fois**, dans ce cas les paramètres de l'url sont fixées par avance
2. l'utilisateur clique sur un lien du menu, l'url obtenu sera de la forme
>adresse du site/index.php?uc=nomcontroleur&action=nomaction

Par exemple vous pouvez avoir l'URL suivante si vous cliquez sur `Lister les membres` 
> http://localhost/annuaire-VerEtudt/index.php?uc=gerer&action=lister
## La gestion de l'url
Le routage de l'URL se fait dans le fichier `index.php`. 
Le tableau `$_REQUEST` récupère les valeurs de `uc` et de `action`.
```php
$uc = 'gerer'; ---------------------> // valeur par défaut du contrôleur  
$action = 'accueil';----------------> // valeur par défaut de l'action   
if (isset($_REQUEST['action'])) { -->//test si la variable action a une valeur   
   $action=$_REQUEST['action'];  
  }  
if (isset($_REQUEST['uc'])) {------->//test si la variable uc a une valeur  
    $uc=$_REQUEST['uc'];  
    }  
include "controllers/c_$uc.php";---->// appel du contrôleur correspondant  
```
Le fichier index.php va orienter le flux vers le contrôleur qui, par défaut, est le fichier
>c_gerer.php  

## b - L'écriture de l'action dans le contrôleur
Dans le contrôleur, le programme exécutera la fonction correspondant au nom de l'action.
Ici l'action est appelée via un `switch`  
L'action va obtenir des données du modèle. Elle va les traiter et les envoyer à une vue. Voici un exemple
```php
switch ($action) {
     ⁝
     case 'lister': {
        $les_membres=$pdo->getLesMembres(); // Appel de la fonction dans le modèle
        require 'views/v_listemembres.php'; // Appel de la vue à afficher
        break;
     }
     ⁝
}
```
## c - Le modèle
Le modèle enregistre toutes les données, qu'elles viennent d'une base de données ou d'un tableau.  
Dans le cas d'une base de donnée elle rassemblera toutes les requêtes nécessaires à la fourniture de données.
Dans notre cas c'est la fonction `getLesMembres()` qui est appelée :
```php
    public function getLesMembres()
    {
        $sql = ''; // Requête à créer
        $req = PdoBridge::$monPdo->prepare($sql);
        $req->execute();
        $d = $req->fetchALL(PDO::FETCH_ASSOC);
        return $d;
    }
```
## d - La vue
Elle reçoit les données et le met en forme selon les besoins du client.
Le contrôleur appel al vue `v_accueil` et envoie des données via la variable `$message`:
```php
switch ($action) {
        case 'accueil':
    {
        $message="Ce site permet d'enregistrer les participants à une épreuve.";
        include("views/v_accueil.php");
        break;
    }
     ⁝
}
```
`v_accueil` récupère les données de la variable `$message`
```php
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Bienvenue</h1>
        <p><?php echo $message; ?></p>
    </div>
</div>
```
>**ATTENTION**  
> Ici le nom de la variable doit être identique dans l'action et dans la vue !

L'affichage sera alors :
![vueAccueil](images/vueAccueil.png)

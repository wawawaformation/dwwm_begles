# La console
## OPO
- Expliquer ce qu’est la programmation et différencier langage compilé et interprété
- Déclarer et utiliser des variables
- Manipuler des tableaux et des objets
- Écrire et appeler des fonctions simples
- Utiliser les structures de contrôle
- Tester du code dans la console du navigateur
- Intégrer du code JavaScript dans une page HTML

## Les activités
### La console
1. On ouvre la console du navigateur :
    - Raccouci clavier F12
    - Clic droit une page web > Inspecter > Onget console

1. On ecti directement dans la console :
```JS
console.log("Ceci est un est un test")
console.error("Ceci est un message d'erreur")
``` 

3. À quoi sert la console ?

---
### Ajouter du javascript au HTML
- Dans le header ou à la fin du body

```HTML
...
    <script>
        // commentaire sur une ligne
    </script>
</header>
<body>
    ....
    ...
     <script>
        /*
            Commentaire sur plusieurs 
            lignes
        */
    </script>
</body>
```
- Dans un fichier externe

```HTML
<script src="js/script.js"></script>
```

```JS
/**
 * Un peu de doc à propos du fichier
 */
 alert("lance une boite d'alert")
 ```

 - Question : quelles conséquences quand on place son JS dans le head ou à la fin du body ?
 ---
 ### Les variables

Vous créez une classe `CompteBancaire` avec les propriétés suivantes :  
- `int $solde` (par défaut vaut 500)  
- `string $titulaire`  

Les méthodes suivantes :  
- les **getters et setters**  
- `__construct(string $titulaire, ?int $solde = null)`  
- `deposer(int $montant): self` // montant forcément supérieur à 0  
- `retirer(int $montant): self` // montant forcément supérieur à 0  
- `effectuerUnVirement(CompteBancaire $compte, int $montant): bool` // montant forcément supérieur à 0  


Créez deux comptes et testez toutes les méthodes, surtout `effectuerUnVirement()`.
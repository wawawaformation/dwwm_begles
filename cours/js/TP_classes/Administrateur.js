/**
 * Classe représentant un utilisateur administrateur.
 */
class Administrateur extends Utilisateur
{
    constructor(prenom, age, ville, role='admin')
    {
        super(prenom, age, ville);
        this.role = role;
    }



    presentation(){
        return `${super.presentation()} Je suis un administrateur avec le rôle de ${this.role}.`;
    }
}
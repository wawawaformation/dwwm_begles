/**
 * Représente une utilisateur
 */
class Utilisateur
{
    /**
     * 
     * @param {String} prenom 
     * @param {Number} age 
     * @param {String} ville 
     */
    constructor(prenom, age, ville)
    {
        this.prenom = prenom;
        this.age = age;
        this.ville = ville;
    }

    presentation()
    {
        return `Bonjour, je m'appelle ${this.prenom}, j'ai ${this.age} ans et j'habite à ${this.ville}.`;
    }

    veillir()
    {
        this.age++;
    }
}
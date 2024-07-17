// Exemple de requête AJAX pour récupérer tous les menus
fetch('/api/menus')
    .then(response => response.json())
    .then(data => console.log('Menus récupérés:', data))
    .catch(error => console.error('Erreur lors de la récupération des menus:', error));


// Exemple de requête AJAX pour récupérer un menu spécifique (remplacez {id} par l'ID réel)
fetch('/api/menus/{id}')
    .then(response => response.json())
    .then(data => console.log('Menu récupéré:', data))
    .catch(error => console.error('Erreur lors de la récupération du menu:', error));


// Exemple de requête AJAX pour créer un nouveau menu
let nouveauMenu = {
    nom: 'Nouveau menu',
    description: 'Description du nouveau menu',
    prix: 10.99
};

fetch('/api/menus', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(nouveauMenu)
})
.then(response => response.json())
.then(data => console.log('Nouveau menu créé:', data))
.catch(error => console.error('Erreur lors de la création du menu:', error));



// Exemple de requête AJAX pour mettre à jour un menu existant (remplacez {id} par l'ID réel)
let menuModifie = {
    nom: 'Menu modifié',
    description: 'Nouvelle description du menu modifié',
    prix: 12.99
};

fetch('/api/menus/{id}', {
    method: 'PUT', // ou 'PATCH' selon votre implémentation Laravel
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(menuModifie)
})
.then(response => response.json())
.then(data => console.log('Menu mis à jour:', data))
.catch(error => console.error('Erreur lors de la mise à jour du menu:', error));





// Exemple de requête AJAX pour supprimer un menu existant (remplacez {id} par l'ID réel)
fetch('/api/menus/{id}', {
    method: 'DELETE'
})
.then(response => {
    if (response.ok) {
        console.log('Menu supprimé avec succès');
    } else {
        throw new Error('Erreur lors de la suppression du menu');
    }
})
.catch(error => console.error('Erreur lors de la suppression du menu:', error));

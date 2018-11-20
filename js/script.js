

function saveDonnee($user){
    //à coder
}

function afficheUser(){ //affiche sur le pannel d'administrateur tous les utilisateurs
    var xhr = new XMLHttpRequest(); 
        xhr.open("GET", "php/ajax/afficheUsers.php");
        
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

function modifDonnee($admin){
    //à coder
}

function afficheLieu(){ //affiche sur le pannel d'administrateur tous les lieux
    //à coder
}

function saveLieu($lieu){
    //à coder
}

function SearchUser(){ //recherche d'un utilisateur en particulier
    
}

function SearchLieu(){ //recherche d'un lieu en particulier 
    
}

function deleteActivite($user, $this){ //suppression d'une activité de l'utilisateur
    
}

function addActivite(){ //ajouter une activité à l'utilisateur
    
}
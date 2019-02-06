

function saveDonnee($user){
    //à coder
}

function afficheUser(id = -1){ //affiche sur le pannel d'administrateur tous les utilisateurs
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheUsers.php?id="+ id);

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

function afficheLieu(id = -1){ //affiche sur le pannel d'administrateur tous les lieux
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheAllLieux.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

function SearchUser(){ //recherche d'un utilisateur en particulier
    var idSelected = document.getElementById('pseudo').value;
    afficheUser(idSelected);
}

function SearchLieu(){ //recherche d'un lieu en particulier
    var idSelected = document.getElementById('lieux').value;
    afficheLieu(idSelected);
}

function deleteActivite($user, $this){ //suppression d'une activité de l'utilisateur

}

function addActivite(){ //ajouter une activité à l'utilisateur

}

function SearchLieuByAct(id = -1){ //affiche sur le pannel d'administrateur tous les lieux
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheAct.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}


function SearchUserByAct(id = -1){
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheUserAct.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

function SeachUserByDist(id){
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheUserDist.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

function afficheForum(id = -1){
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheForum.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

function SearchForum(){
    var idSelected = document.getElementById('fTitre').value;
    afficheForum(idSelected);
}

function SearchForumByAct(id = -1){
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "php/ajax/afficheForumAct.php?id="+ id);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                document.getElementById('Liste').innerHTML = xhr.responseText;
            }
        }
        xhr.send();
}

var global_idU = '';
var global_idUtilisateur_a_use = '';

function message(idU, idUtilisateur_a_use, to = true) {
    var xhr = new XMLHttpRequest();
        xhr.open("GET", "message.php?id=" + idU + "&idUser="+  idUtilisateur_a_use, true);

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                global_idU                  = idU;
                global_idUtilisateur_a_use  = idUtilisateur_a_use;
                document.getElementById('ListMessage').innerHTML = xhr.responseText;
                if (to) {
                    document.getElementById("form").innerHTML =
                        '<form class="formMessage">' +
                            '<textarea id="contenuTxt" name="contenuTxt" ></textarea>'+
                            '<div class="right">' +
                                '<a id="btnEnvoyer" onclick="sendMessage(' + idU + ',' + idUtilisateur_a_use + ')" class="btn">Envoyer</a>'+
                            '</div>'+
                        '</form>';

                    document.getElementById("contenuTxt").focus();
                    var input = document.getElementById("contenuTxt");
                    document.getElementById("contenuTxt").addEventListener("keyup", function(event) { event.preventDefault(); if (event.keyCode === 13) { document.getElementById("btnEnvoyer").click(); } });

                }

            }
        }
        xhr.send();
}

function sendMessage(idU, idUtilisateur_a_use) {
    var xhr = new XMLHttpRequest();
        xhr.open("POST", 'SaveMessage.php?id='+ idU + '&idUser=' + idUtilisateur_a_use, true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
                messageRefresh();
                document.getElementById('contenuTxt').value = '';
                document.getElementById("contenuTxt").focus();
            }
        }
        xhr.send("contenuTxt="+ document.getElementById('contenuTxt').value);

}

function messageRefresh() {
    if (global_idU != '' && global_idUtilisateur_a_use != '') {
        message(global_idU, global_idUtilisateur_a_use, false);
    }
}



window.setInterval("messageRefresh()",3000);

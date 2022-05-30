// Variable to hold request
var request;
// formulaire d'ajout de trottinettes
$("#formUser").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");
    console.log($inputs);

    // Serialize the data in the form
    var serializedData = $form.serialize();

    $inputs.prop("disabled", true);

    request = $.ajax({
        url: "controllers/user.php",
        type: "post",
        data: serializedData
    });

    // Si la requete s'est bien exec renvoie ce qu'il y a en dessous
    request.done(function (response, textStatus, jqXHR){
        $firstname= document.getElementsByName("number")[0].value; //alert d'ajout d'user
        $("#msgAddNumber").html($firstname);

        document.getElementById("msgDivDelUser").classList.add("d-none");
        document.getElementById("msgDivAddUser").classList.remove("d-none");



        document.getElementsByName("number")[0].value = "";//met la valeur number a 0
        $("#infoUser").load(window.location.href + " #infoUser" ); //sert a refresh la div contenant la liste des utilisateurs
        console.log("Ca marche !!");
    });

    // Si la requete à une erreur
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Affiche l'erreur dans la console
        console.error(
            "Les erreurs suivantes sont rencontré: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});

var request2;

// formulaire de suppréssion de trottinettes
$("#delUser").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
/*    if (request2) {
        request2.abort();
    }*/
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");
    // Serialize the data in the form

    var serializedData = $form.serialize();
    console.log("Serializedata" + serializedData);
    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request2 = $.ajax({
        url: "controllers/user.php",
        type: "get",
        data: serializedData
    });
    // Si la requete s'est bien exec renvoie ce qu'il y a en dessous
    request2.done(function (response, textStatus, jqXHR){
        $firstname= document.getElementsByName("delNumber")[0].value;
        console.log($firstname);
        $("#msgDelNumber").html($firstname);
        document.getElementById("msgDivDelUser").classList.remove("d-none");
        document.getElementById("msgDivAddUser").classList.add("d-none");

        $("#infoUser").load(window.location.href + " #infoUser" ); //sert a refresh la div contenant la liste des utilisateurs
        console.log("Suppression executé");
    });
    // Si la requete à une erreur
    request2.fail(function (jqXHR, textStatus, errorThrown){
        // Affiche l'erreur dans la console
        console.error(
            "Les erreurs suivantes sont rencontré: "+
            textStatus, errorThrown
        );
    });
    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request2.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});
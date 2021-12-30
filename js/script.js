$(document).ready(function() {

    $("#buttonAdd").click(function() {
        $.ajax({
            url: './php/increase.php',
            success: function(data) {
                location.reload();
            }
        });
    });

    $("#buttonRemove").click(function() {
        $.ajax({
            url: './php/decrease.php',
            success: function(data) {
                location.reload();
            }
        });
    });

    $("#buttonListe").click(function() {
        $.ajax({
            url: './php/liste.php',
            success: function(data) {
                if ((data != null) && (data != "")) {

                    let personnes = data.split(";");
                    let table = "<table class=\"table\"><thead><tr><th scope=\"col\">Nom</th><th scope=\"col\">Prenom</th><th scope=\"col\">Adresse</th><th scope=\"col\">Telephone</th></tr></thead><tbody>";
                    personnes.forEach(p => {
                        let a = p.split(",");
                        table += "<tr><td>" + a[0] + "</td><td>" + a[1] + "</td><td>" + a[2] + "</td><td>" + a[3] + "</td></tr>";
                    });
                    table += "</tbody><table>";
                    $("#liste").append(table);
                }
            }
        });
    });

    $.ajax({
        url: './php/updateValues.php',
        success: function(data) {
            console.log(data);
            data = data.replace('\n', "");
            valeurs = data.split(',');
            $("#actuel").html("<h5>Sur place de fete : <b>" + valeurs[0] + "</b></h5>");
            $("#max").html("<h5>Max. simultanément : <b>" + valeurs[1] + "</b></h5>");
            $("#total").html("<h5>Total Personnes :  <b>" + valeurs[2] + "</b></h5>");
        },
    });
});
<script>
$(document).ready(function () {

    $(".supprimerArticle").hide();

    $(".ajoutArticle").click(function (){
        var form = $(this).closest('form');
        var articleList = form.find('.article');
        // Le nombre d'articles déjà présents
        var n = articleList.length;
        // Le premier article que l'on va cloner
        var firstArticle = $(articleList[0]);
        // Le dernier article de la liste
        var lastArticle = $(articleList[n-1]);
        // Un article cloné
        var clonedArticle = firstArticle.clone();

        // Pour chaque input clonés
        clonedArticle.find(':input').each(function() {
            // On vide la valeur
            $(this)
                .filter(':text').val('').end()
            // On change le nom en ajoutant le numero
            $(this).attr('name', $(this).attr('name')+n)
        })

        // On l'ajoute au dom après les autres
        clonedArticle.insertAfter(lastArticle).hide().fadeIn('slow');

        // On ajoute le le lien de suppression
        $(".supprimerArticle").fadeIn("fast");

    });


    $(".supprimerArticle").click(function (){
        var article = $(".article:last");
        article.remove();

        // S'il y a moins de 2 articles (autrement dit un seul) on cache le bouton supprimer.
        if ( $(".article").length < 2 ) { $(".supprimerArticle").fadeOut("fast"); }

    });


});
</script>
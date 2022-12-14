<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Source+Serif+Pro&display=swap" rel="stylesheet"> 
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>A la découverte de Guillotière</title>
</head>

<body>

    <?php include("_mainNav.php") ?>

    <header>
        <h1>Guillotière</h1>
        <nav class="miniNavBar">
            <ul>
                <li><a href="#histoire">Histoire</a>
                </li>
                <li><a href="#culture">Culture</a>
                </li>
                <li><a href="#restauration">Restauration</a>
                </li>
                <li><a href="#activites">Activités</a>
                </li>
            </ul>
        </nav>
        <img src="Images\Images Guillotière\Guillotière embleme.jpg" alt="Esplanade Guillotière">
    </header>

    <div id="scroll_to_top">
        <a href="#top"><img src="Images/arrow-top-3-svgrepo-com.svg" alt=" Retour en haut" /></a>
    </div>

    <article>
        <h2 id="histoire">Un brin d'histoire</h2>
        <div class="imgLeft">
            <img src="Images\Images Guillotière\Histoire-pont-de-la-guillotiere.jpg" alt="Histoire pont de la Guillotière">
            <p>La Guillotière est située sur la rive gauche du Rhône et recouvre une partie des 3ème et 7ème arrondissements de Lyon. L'origine de son nom est incertaine, venant du nom de fameux aubergistes locaux, des druides qui s'y rendaient pour en ramener du gui, ou encore des grelots des mulets qui traversaient le pont.</p>
        </div>
        <div class="imgRight">
            <img src="Images\Images Guillotière\Histoire-Place Raspail.jpg" alt="Ancienne place Raspail">
            <p>Le faubourg de la Guillotière s'est développé dès le Moyen-Âge et a été longtemps contesté par le Dauphiné. Lors de la Révolution française, il a été rattaché à la commune de Lyon nouvellement créée avant de clamer son indépendance avec l'Insurrection lyonnaise de 1793. Il n'a été définitivement lié à la ville de Lyon qu'en 1852 !</p>
        </div>
        <img src="Images\Images Guillotière\Histoire-Place Saint Louis.jpg" alt="Place Saint Louis">
    </article>

    <article>
        <h2 id="culture">La vie culturelle</h2>
        <div class="imgLeft">
            <img src="Images\Images Guillotière\Culture - Nouvel an chinois.jpg" alt="Nouvel an chinois">
            <p>De par sa longue tradition d'accueil et d'arrivée de populations immigrées, "la Guill" est un véritable melting pot ! En effet, le pont de la Guillotière a longtemps été le seul pont de Lyon sur le Rhône, lui conférant un statut unique de porte d'entrée sur la ville. Aujourd'hui encore, de nombreuses associations et amicales de cultures étrangères s'y retrouvent, de l'Asie à l'Afrique en passant par l'Europe de l'est.</p>
        </div>
        <div class="imgRight">
            <img src="Images\Images Guillotière\Culture - Ramadan.jpg" alt="Patisseries orientales">
            <p>Les habitants s'impliquent souvent dans la vie locale, que ce soit pour l'aménagement du quartier ou pour organiser des événements festifs qui rayonnent bien au-delà de ses frontières ! Par exemple, le quartier a vu la naissance dès 2003 du mouvement de "l'Ilot Mazagran" pour la création d'un jardin paratgé et la préservation de liens sociaux.</p>
        </div>
        <img src="Images\Images Guillotière\Culture - Eglise Saint Louis.jpg" alt="Eglise Saint-Louis">
    </article>

    <article>
        <h2 id="restauration">Où sortir le soir ?</h2>
        <div class="imgLeft">
            <img src="Images\Images Guillotière\Sorties-PLace Raspail.jpg" alt="Place Raspail">
            <p>La Guillotière est aussi très connue et appréciée pour sa vie nocturne. Que ce soit pour un afterwork posé dans un bar cosy ou une soirée endiablée sur le dancefloor des péniches, de nombreuses options s'offrent à vous !</p>
        </div>
        <div class="imgRight">
            <img src="Images\Images Guillotière\Sorties - Fourmi.jpg" alt="Terrasse fourmillière">
            <p>A nouveau, l'identité du quartier se ressentira dans les produits proposés : souvent locaux, équitables et bio ! Mais il ne faut pas négliger ses restaurants qui auront de quoi ravir tous les palets avec des cuisines venues des 4 coins du monde.</p>
        </div>
        <img src="Images\Images Guillotière\Sorties - Court circuit.jpg" alt="PLace Mazagran">
    </article>

    <article>
        <h2 id="activites">Que faire la journée ?</h2>
        <div class="imgLeft">
            <img src="Images\Images Guillotière\Activités - Quais du Rhône.jpg" alt="Quais du Rhône">
            <p>Il existe de nombreux lieux à découvrir et surtout d'espaces à explorer à la Guillotière. Le centre Berthelot est un lieu chargé d'histoire, tandis que le cinéma Comoedia propose une sélection de films de qualité.</p>
        </div>
        <div class="imgRight">
            <img src="Images\Images Guillotière\Activités- Centre Berthelot.jpg" alt="Centre Berthelot">
            <p>Pour les amoureux d'espaces verts, le parc Sergent Blandan vous ravira avec ses sections tout récemment aménagées, tandis que les quais du Rhône offriront un panorama grandiose avec vue sur Fourvière en fin de journée !</p>
        </div>
        <img src="Images\Images Guillotière\Activités- Parc Blandan.jpg" alt="Parc Blandan">
    </article>

    <?php include('_footer.php') ?>

</body>

</html>
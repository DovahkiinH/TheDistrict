const categoriesAndPlats = {
    "categorie":[
        {
         "id_categorie": 4,
         "libelle": "Pizza",
         "image": "pizza_cat.jpg",
         "active": "Yes"
        },
        {
         "id_categorie": 5,
         "libelle": "Burger",
         "image": "burger_cat.jpg",
         "active": "Yes"
        },
        {
         "id_categorie": 9,
         "libelle": "Wraps",
         "image": "wrap_cat.jpg",
         "active": "Yes"
        },
        {
         "id_categorie": 10,
         "libelle": "Pasta",
         "image": "pasta_cat.jpg",
         "active": "Yes"
        },
        {
         "id_categorie": 11,
         "libelle": "Sandwich",
         "image": "sandwich_cat.jpg",
         "active": "Yes"
        },
        {
         "id_categorie": 12,
         "libelle": "Asian Food",
         "image": "asian_food_cat.jpg",
         "active": "No"
        },
        {
         "id_categorie": 13,
         "libelle": "Salade",
         "image": "salade_cat.jpg",
         "active": "YES"
        },
        {
         "id_categorie": 14,
         "libelle": "Veggie",
         "image": "veggie_cat.jpg",
         "active": "Yes"
        }
       ],

    "plat":[
 {
  "id_plat": 4,
  "libelle": "District Burger",
  "description": "Burger composé d'un bun's du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .",
  "prix": 8,
  "image": "hamburger.jpg",
  "id_categorie": 5,
  "active": "Yes"
 },
 {
  "id_plat": 5,
  "libelle": "Pizza Bianca",
  "description": "Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.",
  "prix": 14,
  "image": "pizza-salmon.png",
  "id_categorie": 4,
  "active": "Yes"
 },
 {
  "id_plat": 9,
  "libelle": "Buffalo Chicken Wrap",
  "description": "Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.",
  "prix": 5,
  "image": "buffalo-chicken.webp",
  "id_categorie": 9,
  "active": "Yes"
 },
 {
  "id_plat": 10,
  "libelle": "Cheeseburger",
  "description": "Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.",
  "prix": 8,
  "image": "cheesburger.jpg",
  "id_categorie": 5,
  "active": "Yes"
 },
 {
  "id_plat": 12,
  "libelle": "Spaghetti aux légumes",
  "description": "Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide",
  "prix": 10,
  "image": "spaghetti-legumes.jpg",
  "id_categorie": 10,
  "active": "Yes"
 },
 {
  "id_plat": 13,
  "libelle": "Salade César",
  "description": "Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.",
  "prix": 7,
  "image": "cesar_salad.jpg",
  "id_categorie": 13,
  "active": "Yes"
 },
 {
  "id_plat": 14,
  "libelle": "Pizza Margherita",
  "description": "Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...",
  "prix": 14,
  "image": "pizza-margherita.jpg",
  "id_categorie": 4,
  "active": "Yes"
 },
 {
  "id_plat": 15,
  "libelle": "Courgettes farcies au quinoa et duxelles de champignons",
  "description": "Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!",
  "prix": 8,
  "image": "courgettes_farcies.jpg",
  "id_categorie": 14,
  "active": "Yes"
 },
 {
  "id_plat": 16,
  "libelle": "Lasagnes",
  "description": "Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.",
  "prix": 12,
  "image": "lasagnes_viande.jpg",
  "id_categorie": 10,
  "active": "Yes"
 }
]
};

$(document).ready(function () {
    const searchInput = $('#searchInput');
    const resultsList = $('#results');


    function updateResults(query) {
        resultsList.empty();
        if (!query) return;

        const matchingPlats = categoriesAndPlats.plat.filter(plat => {
            return plat.libelle.toLowerCase().includes(query.toLowerCase());
        });

        matchingPlats.forEach(plat => {
            const listItem = `<li class="list-group-item">
                <h5>${plat.libelle}</h5>
                <p>${plat.description}</p>
                <p>Prix : ${plat.prix} €</p>
            </li>`;
            resultsList.append(listItem);
        });
    }

    searchInput.on('input', function () {
        updateResults($(this).val());
    });
});
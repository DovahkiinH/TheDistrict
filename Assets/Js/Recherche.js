const categoriesAndPlats = {
    "categorie": [
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

    ],
    "plat": [
        {
            "id_plat": 4,
            "libelle": "District Burger",
            "description": "Burger composé d'un bun's du boulanger...",
            "prix": 8,
            "image": "hamburger.jpg",
            "id_categorie": 5,
            "active": "Yes"
        },
        {
            "id_plat": 5,
            "libelle": "Pizza Bianca",
            "description": "Une pizza fine et croustillante garnie de crème mascarpone...",
            "prix": 14,
            "image": "pizza-salmon.png",
            "id_categorie": 4,
            "active": "Yes"
        },

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
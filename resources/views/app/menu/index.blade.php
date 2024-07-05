@extends('layouts.app')
@php
    $categories = [
        [
            'name' => 'Salades',
            'elements' => [
                [
                    'nom' => 'Salade Niçoise',
                    'description' => 'Salade composée de thon, œufs, haricots verts, tomates et olives',
                ],
                [
                    'nom' => 'Taboulé',
                    'description' => 'Salade libanaise à base de persil, menthe, tomates et boulghour',
                ],
            ],
        ],
        [
            'name' => 'Sandwichs',
            'elements' => [
                [
                    'nom' => 'Shawarma',
                    'description' => 'Viande grillée servie dans un pain pita avec des légumes et de la sauce',
                ],
                [
                    'nom' => 'Club sandwich',
                    'description' => 'Sandwich à trois étages avec poulet, bacon, laitue, tomate et mayonnaise',
                ],
                [
                    'nom' => 'Panini',
                    'description' => 'Sandwich grillé avec diverses garnitures, souvent du fromage et du jambon',
                ],
                ['nom' => 'César', 'description' => 'Salade romaine avec poulet grillé, parmesan et croûtons'],
                ['nom' => 'César', 'description' => 'Salade romaine avec poulet grillé, parmesan et croûtons'],

            ],
        ],
        [
            'name' => 'Burgers',
            'elements' => [
                [
                    'nom' => 'Hamburger classique',
                    'description' => 'Pain hamburger avec steak haché, laitue, tomate, oignons et sauce',
                ],
                ['nom' => 'Cheeseburger', 'description' => 'Hamburger avec fromage fondu sur le steak haché'],
                [
                    'nom' => 'Végétarien',
                    'description' => 'Burger sans viande avec une galette de légumes et divers accompagnements',
                ],
            ],
        ],
        [
            'name' => 'Plats à emporter',
            'elements' => [
                ['nom' => 'Pizza', 'description' => 'Pizza garnie de fromage, sauce tomate et divers ingrédients'],
                [
                    'nom' => 'Sushi',
                    'description' => 'Rouleaux de riz et poisson cru, souvent accompagnés de sauce soja et wasabi',
                ],
                ['nom' => 'Burrito', 'description' => 'Tortilla roulée avec viande, riz, haricots, fromage et salsa'],
            ],
        ],
        [
            'name' => 'Soupes',
            'elements' => [
                ['nom' => 'Tom Yum', 'description' => 'Soupe thaïlandaise épicée avec crevettes et citronnelle'],
                [
                    'nom' => 'Gazpacho',
                    'description' => 'Soupe froide espagnole à base de tomates, poivrons et concombres',
                ],
                [
                    'nom' => 'Pho',
                    'description' => 'Soupe vietnamienne avec nouilles de riz, bouillon de bœuf et herbes',
                ],
            ],
        ],
        [
            'name' => 'Pâtes',
            'elements' => [
                [
                    'nom' => 'Spaghetti Carbonara',
                    'description' => 'Pâtes italiennes avec sauce à base d\'œufs, pancetta et fromage',
                ],
                ['nom' => 'Lasagnes', 'description' => 'Pâtes superposées avec viande, sauce tomate et fromage'],
                [
                    'nom' => 'Raviolis',
                    'description' => 'Pâtes farcies avec divers ingrédients comme la viande ou le fromage',
                ],
            ],
        ],
        [
            'name' => 'Plats de viande',
            'elements' => [
                ['nom' => 'Steak frites', 'description' => 'Steak grillé avec frites croustillantes et sauce'],
                ['nom' => 'Filet mignon', 'description' => 'Morceau de bœuf tendre, souvent grillé ou rôti'],
                [
                    'nom' => 'Côtelettes d\'agneau',
                    'description' => 'Côtelettes d\'agneau grillées ou rôties avec des herbes',
                ],
            ],
        ],
        [
            'name' => 'Plats de poisson',
            'elements' => [
                ['nom' => 'Saumon grillé', 'description' => 'Filet de saumon grillé avec légumes sautés'],
                ['nom' => 'Fish and chips', 'description' => 'Poisson frit servi avec des frites'],
                [
                    'nom' => 'Ceviche',
                    'description' => 'Plat latino-américain de poisson cru mariné dans du jus de citron',
                ],
            ],
        ],
        [
            'name' => 'Plats végétariens',
            'elements' => [
                [
                    'nom' => 'Ratatouille',
                    'description' => 'Plat provençal avec légumes mijotés comme les courgettes, aubergines et tomates',
                ],
                [
                    'nom' => 'Falafel',
                    'description' => 'Boulettes frites de pois chiches ou de fèves, souvent servies dans un pain pita',
                ],
                ['nom' => 'Curry de légumes', 'description' => 'Curry épicé avec divers légumes et sauce crémeuse'],
            ],
        ],
        [
            'name' => 'Plats traditionnels',
            'elements' => [
                ['nom' => 'Paella', 'description' => 'Plat espagnol de riz safrané avec fruits de mer et poulet'],
                [
                    'nom' => 'Couscous',
                    'description' => 'Semoule de blé avec légumes et viande, plat traditionnel du Maghreb',
                ],
                [
                    'nom' => 'Sushi',
                    'description' => 'Rouleaux de riz et poisson cru, souvent accompagnés de sauce soja et wasabi',
                ],
            ],
        ],
        [
            'name' => 'Desserts',
            'elements' => [
                [
                    'nom' => 'Tiramisu',
                    'description' => 'Dessert italien à base de biscuits imbibés de café et de mascarpone',
                ],
                ['nom' => 'Crème brûlée', 'description' => 'Crème cuite avec une croûte de sucre caramélisée'],
                ['nom' => 'Mousse au chocolat', 'description' => 'Dessert léger et aéré à base de chocolat et d\'œufs'],
            ],
        ],
        [
            'name' => 'Petit-déjeuner',
            'elements' => [
                ['nom' => 'Pancakes', 'description' => 'Crêpes épaisses servies avec du sirop d\'érable et du beurre'],
                ['nom' => 'Croissant', 'description' => 'Pâtisserie française feuilletée, souvent servie avec du café'],
                [
                    'nom' => 'Œufs brouillés',
                    'description' => 'Œufs battus cuits à feu doux jusqu\'à consistance crémeuse',
                ],
            ],
        ],
        [
            'name' => 'Plats exotiques',
            'elements' => [
                ['nom' => 'Tacos', 'description' => 'Tortillas de maïs avec viande, salsa et garnitures'],
                [
                    'nom' => 'Pad Thai',
                    'description' => 'Plat thaïlandais de nouilles de riz sautées avec crevettes, tofu ou poulet',
                ],
                [
                    'nom' => 'Sashimi',
                    'description' => 'Tranches de poisson cru, souvent servi avec du wasabi et de la sauce soja',
                ],
            ],
        ],
        [
            'name' => 'Tapas',
            'elements' => [
                ['nom' => 'Patatas bravas', 'description' => 'Pommes de terre frites servies avec une sauce piquante'],
                [
                    'nom' => 'Chorizo ​​au vin',
                    'description' => 'Chorizo ​​cuit dans du vin rouge avec des herbes et des épices',
                ],
                [
                    'nom' => 'Pimientos de Padrón',
                    'description' => 'Petits poivrons verts frits, souvent servis comme amuse-gueule',
                ],
            ],
        ],
        [
            'name' => 'Plats épicés',
            'elements' => [
                ['nom' => 'Curry de poulet', 'description' => 'Curry épicé avec morceaux de poulet et sauce crémeuse'],
                [
                    'nom' => 'Chili con carne',
                    'description' => 'Plat mexicain épicé avec viande hachée, haricots et piments',
                ],
                [
                    'nom' => 'Poulet tikka masala',
                    'description' => 'Poulet mariné cuit dans une sauce tomate crémeuse et épicée',
                ],
            ],
        ],
        [
            'name' => 'Plats de fruits de mer',
            'elements' => [
                [
                    'nom' => 'Moules marinières',
                    'description' => 'Moules cuites dans du vin blanc avec de l\'ail et du persil',
                ],
                [
                    'nom' => 'Crevettes grillées',
                    'description' => 'Crevettes grillées avec marinade à l\'ail et au citron',
                ],
                ['nom' => 'Lobster roll', 'description' => 'Sandwich à la chair de homard avec mayonnaise et beurre'],
            ],
        ],
        [
            'name' => 'Plats du monde',
            'elements' => [
                [
                    'nom' => 'Tajine',
                    'description' => 'Plat marocain cuit lentement avec viande, légumes et fruits secs',
                ],
                ['nom' => 'Schnitzel', 'description' => 'Escalope de viande panée et frite, originaire d\'Autriche'],
                [
                    'nom' => 'Gyros',
                    'description' =>
                        'Viande grillée (souvent de porc ou de poulet) servie dans un pain pita avec sauce tzatziki',
                ],
            ],
        ],
        [
            'name' => 'Plats indiens',
            'elements' => [
                ['nom' => 'Chicken Tikka Masala', 'description' => 'Curry crémeux avec morceaux de poulet grillés'],
                ['nom' => 'Palak Paneer', 'description' => 'Épinards épicés avec fromage paneer'],
                ['nom' => 'Biryani', 'description' => 'Riz basmati cuit avec viande ou légumes et aromates'],
            ],
        ],
        [
            'name' => 'Plats mexicains',
            'elements' => [
                [
                    'nom' => 'Enchiladas',
                    'description' =>
                        'Tortillas de maïs farcies de viande ou de haricots, recouvertes de sauce et de fromage',
                ],
                [
                    'nom' => 'Tacos al Pastor',
                    'description' => 'Tacos au porc mariné, souvent accompagnés d\'ananas et de coriandre',
                ],
                [
                    'nom' => 'Chilaquiles',
                    'description' => 'Tortillas frites avec sauce verte ou rouge, fromage et crème',
                ],
            ],
        ],
        [
            'name' => 'Plats asiatiques',
            'elements' => [
                [
                    'nom' => 'Sushi',
                    'description' => 'Rouleaux de riz et poisson cru, souvent accompagnés de sauce soja et wasabi',
                ],
                [
                    'nom' => 'Banh Mi',
                    'description' => 'Sandwich vietnamien avec viande, légumes et herbes dans un pain baguette',
                ],
                [
                    'nom' => 'Pho',
                    'description' => 'Soupe vietnamienne avec nouilles de riz, bouillon de bœuf et herbes',
                ],
            ],
        ],
    ];

@endphp
@section('content')
    <div class="p-6 px-4 mt-4 mb-0 bg-gray-100 sm:px-6 lg:px-8">

        <div class="container mx-auto">
            <!-- CategoryList.blade.php -->
            <div class="flex overflow-x-auto p-4 space-x-4">
                <div class="flex overflow-x-auto gap-3 px-4 py-2 mx-2 whitespace-nowrap rounded-lg">
                    <a href="#"
                        class="flex items-center px-6 py-4 font-bold text-white bg-orange-400 rounded-lg border-transparent shadow-md hover:bg-orange-400">
                        <i class="mr-4 fa fa-bars"></i>
                        {{ __('Tout') }}
                    </a>
                    @foreach ($categories as $category)
                        <a href="#"
                            class="flex items-center px-6 py-4 font-bold text-gray-800 bg-white rounded-lg border-transparent shadow-md hover:bg-orange-400">
                            {{ $category['name'] }}
                        </a>
                        @if (!$loop->last)
                            <span class="inline-block mx-2 w-px h-4 bg-gray-300"></span> <!-- Séparateur -->
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Barre de recherche --}}
            <div class="flex overflow-x-auto justify-between items-center py-6 w-full border-t dark:border-gray-700">
                <div class="w-full">

                    <div class="flex mt-8 w-full">

                        <div class="flex flex-wrap -mx-4">

                            @foreach ($categories as $category)
                                <div
                                    class="flex relative justify-between px-4 my-auto mb-4 w-full border-b-2 border-gray-200 grid-row">
                                    <div class="flex text-2xl font-bold capitalize">{{ $category['name'] }}</div>
                                    <div class="flex text-orange-400">
                                        <a href="#" class>Voir plus</a>
                                        <i class="mt-1 ml-2 fa fa-angle-right"></i>
                                        <i class="mt-1 fa fa-angle-right"></i>
                                    </div>
                                </div>

                                @foreach ($category['elements'] as $item)
                                    @php
                                        $image = 'images/Samer.jpg';
                                        $auteur = Fake()->name();
                                        $description = Fake()->text(15);
                                        $prix = '3000';
                                    @endphp

                                    {{-- Titre de la categorie --}}


                                    <div class="px-4 mb-4 w-1/3">
                                        <x-menu-card :image="$image" :title="$item['nom']" :description="$description"
                                            :prix="$prix">
                                            <div id="crud-modal" tabindex="-1" x-data="{ quantity: 1, isLoading: false }"
                                                x-init="{ quantity: $refs.quantityInput.value }" aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

                                                <input type="hidden" x-ref="quantityInput" id="quantity-input"
                                                    name="quantity" value="1">

                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex justify-between items-center p-4 rounded-t border-b md:p-5 dark:border-gray-600">
                                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                {{ 'Salade au poulet' }}
                                                            </h3>
                                                            <button type="button"
                                                                class="inline-flex justify-center items-center w-8 h-8 text-sm text-orange-700 rounded-lg hover:text-orange-900 ms-auto dark:hover:bg-orange-600"
                                                                data-modal-toggle="crud-modal">
                                                                X
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form class="p-4 md:p-5"
                                                            @submit.prevent="addToCart($event, '{{ addslashes($image) }}', '{{ addslashes($auteur) }}', '{{ addslashes($description) }}', '{{ addslashes($prix) }}')">

                                                            <div class="grid gap-4 mb-4">
                                                                <div class="w-full">
                                                                    <img src="{{ asset('images/salade.jpeg') }}"
                                                                        width="" alt="produit"
                                                                        class="object-cover w-96 h-96" />
                                                                </div>
                                                                <div class="">
                                                                    <h3>{{ $auteur }}</h3>
                                                                </div>
                                                                <div class="">
                                                                    <p>{{ $prix }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-span-2 mb-4">
                                                                <label for="description"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                                    Laisser quelques détails par rapports à votre
                                                                    commande</label>
                                                                <textarea id="description" rows="2"
                                                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                                                    placeholder="Write product description here"></textarea>
                                                            </div>
                                                            <div class="flex col-span-2 justify-between">
                                                                <div>
                                                                    <button type="button" id="decrement-btn"
                                                                        @click="quantity = Math.max(quantity - 1, 1)"
                                                                        class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500">-</button>
                                                                    <span x-text="quantity"></span>
                                                                    <button type="button" id="increment-btn"
                                                                        class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                                                        @click="quantity = quantity + 1">+</button>
                                                                </div>

                                                                <div class="justify-end">
                                                                    <button type="submit"
                                                                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300"
                                                                        :disabled="isLoading" @click="panier = panier+1"
                                                                        x-text="isLoading ? 'Chargement...' : 'Ajouter au panier (' + quantity + ' x 3000)'">
                                                                        Ajouter au panier
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </x-menu-card>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            {{-- fin section de recherche --}}

        </div>
    </div>
    <x-footer class="justify-center mx-auto mt-0 bg-gray-100" />

    <script>
        function addToCart(event, image, auteur, description, prix) {
            // Empêcher le comportement par défaut du formulaire (rechargement de la page)
            event.preventDefault();

            // Vous pouvez maintenant utiliser les variables image, auteur, description, prix ici
            console.log('Image:', image);
            console.log('Auteur:', auteur);
            console.log('Description:', description);
            console.log('Prix:', prix);

            this.isLoading = true;
            setTimeout(() => {

                this.isLoading = false;

                //  data-modal-toggle="crud-modal"

                alert('Produit ajouté au panier avec succès !');

                Alpine.dispatc('crud-model', )

            }, 5000);

            //     // Exemple d'envoi de données via fetch API
            //     fetch('/url-de-votre-api', {
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json',
            //         },
            //         body: JSON.stringify({
            //             image: image,
            //             auteur: auteur,
            //             description: description,
            //             prix: prix,
            //             quantity: Alpine.$refs.quantityInput.value // Récupérer la quantité
            //         }),
            //     }).then(response => {
            //         // Gérer la réponse de l'API (optionnel)
            //         console.log('Réponse de l\'API:', response);
            //     }).catch(error => {
            //         console.error('Erreur lors de la requête:', error);
            //     });
        }
    </script>
@endsection

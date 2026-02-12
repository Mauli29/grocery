<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshMart - Your Online Grocery Store</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4CAF50',
                        secondary: '#81C784'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .hero {
            height: 100vh;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="px-4 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl text-primary font-['Pacifico'] mr-8">Organic Fresh mart</h1>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl mx-4 relative">
                    <div class="relative">
                        <div
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
                            <i class="ri-search-line text-gray-400"></i>
                        </div>
                        <input type="text" placeholder="Search for products..."
                            class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                    </div>
                    <!-- Search Suggestions Dropdown -->
                    <div id="searchSuggestions"
                        class="absolute top-full left-0 right-0 bg-white border border-gray-200 rounded-lg shadow-lg mt-1 hidden z-10">
                        <div class="p-2">
                            <div class="px-3 py-2 hover:bg-gray-50 rounded cursor-pointer text-sm">Fresh Apples</div>
                            <div class="px-3 py-2 hover:bg-gray-50 rounded cursor-pointer text-sm">Organic Bananas</div>
                            <div class="px-3 py-2 hover:bg-gray-50 rounded cursor-pointer text-sm">Whole Milk</div>
                            <div class="px-3 py-2 hover:bg-gray-50 rounded cursor-pointer text-sm">Greek Yogurt</div>
                        </div>
                    </div>
                </div>

                <!-- Right Icons -->
                <div class="flex items-center space-x-4">
                    <button id="themeToggle"
                        class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="ri-sun-line text-gray-600"></i>
                    </button>
                    <a href="view_orders.php"
   class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors">
    <i class="ri-user-line text-gray-600"></i>
</a>

                    <button id="cartToggle"
                        class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors relative">
                        <i class="ri-shopping-cart-line text-gray-600"></i>
                        <span id="cartCount"
                            class="absolute -top-1 -right-1 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Category Navigation -->
        <div class="border-t border-gray-100">
            <div class="px-4 py-2">
                <div class="flex items-center space-x-8 overflow-x-auto">
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-apple-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Fruits</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-plant-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Vegetables</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-cup-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Beverages</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-cake-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Dairy</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-restaurant-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Snacks</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-gray-50 whitespace-nowrap">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-heart-pulse-line text-primary"></i>
                        </div>
                        <span class="text-sm font-medium">Personal Care</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden hero"
        style="background-image: url('https://readdy.ai/api/search-image?query=Fresh%20organic%20grocery%20store%20interior%20with%20abundant%20colorful%20fruits%20and%20vegetables%20displayed%20in%20wooden%20crates%20and%20baskets%2C%20natural%20lighting%20streaming%20through%20large%20windows%2C%20clean%20modern%20design%20with%20white%20walls%20and%20wooden%20shelves%2C%20eco-friendly%20atmosphere%20with%20green%20plants%2C%20minimalist%20aesthetic%20perfect%20for%20healthy%20lifestyle%20branding&width=1200&height=400&seq=hero001&orientation=landscape'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="relative h-full flex items-center">
            <div class="w-full px-4">
                <div class="max-w-2xl">
                    <h2 class="text-5xl font-bold text-white mb-4">Fresh Groceries Delivered to Your Door</h2>
                    <p class="text-xl text-white mb-8 opacity-90">Shop from the comfort of your home and get farm-fresh
                        produce, organic foods, and daily essentials delivered within hours.</p>
                    <div class="flex space-x-4">
                        <button
                            class="bg-primary text-white px-8 py-3 rounded-button font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                            Start Shopping
                        </button>
                        <button
                            class="bg-white text-gray-900 px-8 py-3 rounded-button font-semibold hover:bg-gray-100 transition-colors whitespace-nowrap">
                            View Offers
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-12">
        <div class="px-4">
            <h3 class="text-2xl font-bold text-center mb-8">Shop by Category</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-red-50 rounded-full flex items-center justify-center">
                        <i class="ri-apple-line text-2xl text-red-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Fresh Fruits</h4>
                    <p class="text-sm text-gray-600">120+ items</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-50 rounded-full flex items-center justify-center">
                        <i class="ri-plant-line text-2xl text-green-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Vegetables</h4>
                    <p class="text-sm text-gray-600">85+ items</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-50 rounded-full flex items-center justify-center">
                        <i class="ri-cup-line text-2xl text-blue-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Beverages</h4>
                    <p class="text-sm text-gray-600">65+ items</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-yellow-50 rounded-full flex items-center justify-center">
                        <i class="ri-cake-line text-2xl text-yellow-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Dairy</h4>
                    <p class="text-sm text-gray-600">45+ items</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-orange-50 rounded-full flex items-center justify-center">
                        <i class="ri-restaurant-line text-2xl text-orange-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Snacks</h4>
                    <p class="text-sm text-gray-600">95+ items</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition-shadow cursor-pointer">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-50 rounded-full flex items-center justify-center">
                        <i class="ri-heart-pulse-line text-2xl text-purple-500"></i>
                    </div>
                    <h4 class="font-semibold mb-2">Personal Care</h4>
                    <p class="text-sm text-gray-600">75+ items</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-12 bg-white">
        <div class="px-4">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-2xl font-bold">Featured Products</h3>
                <button class="text-primary font-semibold hover:text-green-600 transition-colors">View All</button>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
                <!-- Product Card 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-square bg-white p-4">
                        <img src="https://readdy.ai/api/search-image?query=Fresh%20red%20organic%20apples%20in%20a%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=300&height=300&seq=apple001&orientation=squarish"
                            alt="Fresh Apples" class="w-full h-full object-cover object-top rounded">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Fresh Red Apples</h4>
                        <p class="text-sm text-gray-600 mb-2">1 kg pack</p>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-lg font-bold text-primary">RS 150</span>
                            <span class="text-sm text-gray-500 line-through">RS 200</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-sm"></i>
                                </button>
                                <span class="px-3 py-1 text-sm">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-sm"></i>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-button text-sm font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-square bg-white p-4">
                        <img src="https://readdy.ai/api/search-image?query=Fresh%20organic%20bananas%20bunch%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=300&height=300&seq=banana001&orientation=squarish"
                            alt="Organic Bananas" class="w-full h-full object-cover object-top rounded">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Organic Bananas</h4>
                        <p class="text-sm text-gray-600 mb-2">1 dozen</p>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-lg font-bold text-primary">Rs 50</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-sm"></i>
                                </button>
                                <span class="px-3 py-1 text-sm">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-sm"></i>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-button text-sm font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-square bg-white p-4">
                        <img src="https://readdy.ai/api/search-image?query=Fresh%20organic%20milk%20bottle%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=300&height=300&seq=milk001&orientation=squarish"
                            alt="Whole Milk" class="w-full h-full object-cover object-top rounded">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Whole Milk</h4>
                        <p class="text-sm text-gray-600 mb-2">1 liter</p>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-lg font-bold text-primary">Rs 70</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-sm"></i>
                                </button>
                                <span class="px-3 py-1 text-sm">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-sm"></i>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-button text-sm font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-square bg-white p-4">
                        <img src="https://readdy.ai/api/search-image?query=Fresh%20organic%20carrots%20bunch%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=300&height=300&seq=carrot001&orientation=squarish"
                            alt="Fresh Carrots" class="w-full h-full object-cover object-top rounded">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Fresh Carrots</h4>
                        <p class="text-sm text-gray-600 mb-2">500g pack</p>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-lg font-bold text-primary">RS 40</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-sm"></i>
                                </button>
                                <span class="px-3 py-1 text-sm">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-sm"></i>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-button text-sm font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="aspect-square bg-white p-4">
                        <img src="https://readdy.ai/api/search-image?query=Greek%20yogurt%20container%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=300&height=300&seq=yogurt001&orientation=squarish"
                            alt="Greek Yogurt" class="w-full h-full object-cover object-top rounded">
                    </div>
                    <div class="p-4">
                        <h4 class="font-semibold mb-1">Greek Yogurt</h4>
                        <p class="text-sm text-gray-600 mb-2">500ml</p>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-lg font-bold text-primary">RS 90</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-sm"></i>
                                </button>
                                <span class="px-3 py-1 text-sm">1</span>
                                <button
                                    class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-sm"></i>
                                </button>
                            </div>
                            <button
                                class="flex-1 bg-primary text-white py-2 px-4 rounded-button text-sm font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="py-12">
        <div class="px-4">
            <h3 class="text-2xl font-bold text-center mb-8">Special Offers</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gradient-to-r from-green-400 to-green-600 rounded-lg p-8 text-white">
                    <h4 class="text-2xl font-bold mb-2">Fresh Produce Sale</h4>
                    <p class="mb-4 opacity-90">Get up to 30% off on all fresh fruits and vegetables</p>
                    <button
                        class="bg-white text-green-600 px-6 py-2 rounded-button font-semibold hover:bg-gray-100 transition-colors whitespace-nowrap">
                        Shop Now
                    </button>
                </div>
                <div class="bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg p-8 text-white">
                    <h4 class="text-2xl font-bold mb-2">Free Delivery</h4>
                    <p class="mb-4 opacity-90">Free delivery on orders above RS 50</p>
                    <a href="order.php">
    <button
        class="bg-white text-blue-600 px-6 py-2 rounded-button font-semibold hover:bg-gray-100 transition-colors whitespace-nowrap">
        Order Now
    </button>
</a>

                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Sidebar -->
    <div id="cartSidebar"
        class="fixed inset-y-0 right-0 w-96 bg-white shadow-xl transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b">
                <h3 class="text-lg font-semibold">Shopping Cart</h3>
                <button id="closeCart"
                    class="w-8 h-8 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="ri-close-line text-gray-600"></i>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto p-4">
                <!-- Cart Item 1 -->
                <div class="flex items-center space-x-3 mb-4 pb-4 border-b">
                    <img src="https://readdy.ai/api/search-image?query=Fresh%20red%20organic%20apples%20in%20a%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=80&height=80&seq=apple002&orientation=squarish"
                        alt="Fresh Apples" class="w-16 h-16 object-cover object-top rounded">
                    <div class="flex-1">
                        <h4 class="font-semibold">Fresh Red Apples</h4>
                        <p class="text-sm text-gray-600">1 kg pack</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-xs"></i>
                                </button>
                                <span class="px-2 py-1 text-sm">2</span>
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-xs"></i>
                                </button>
                            </div>
                            <span class="font-semibold text-primary">RS 150</span>
                        </div>
                    </div>
                    <button
                        class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>

                <!-- Cart Item 2 -->
                <div class="flex items-center space-x-3 mb-4 pb-4 border-b">
                    <img src="https://readdy.ai/api/search-image?query=Fresh%20organic%20milk%20bottle%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=80&height=80&seq=milk002&orientation=squarish"
                        alt="Whole Milk" class="w-16 h-16 object-cover object-top rounded">
                    <div class="flex-1">
                        <h4 class="font-semibold">Whole Milk</h4>
                        <p class="text-sm text-gray-600">1 liter</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-xs"></i>
                                </button>
                                <span class="px-2 py-1 text-sm">1</span>
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-xs"></i>
                                </button>
                            </div>
                            <span class="font-semibold text-primary">RS 70</span>
                        </div>
                    </div>
                    <button
                        class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>

                <!-- Cart Item 3 -->
                <div class="flex items-center space-x-3 mb-4 pb-4 border-b">
                    <img src="https://readdy.ai/api/search-image?query=Greek%20yogurt%20container%20on%20clean%20white%20background%2C%20studio%20photography%20style%2C%20natural%20lighting%2C%20high%20quality%20product%20shot%20for%20e-commerce%2C%20minimalist%20composition&width=80&height=80&seq=yogurt002&orientation=squarish"
                        alt="Greek Yogurt" class="w-16 h-16 object-cover object-top rounded">
                    <div class="flex-1">
                        <h4 class="font-semibold">Greek Yogurt</h4>
                        <p class="text-sm text-gray-600">500ml</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center border border-gray-200 rounded">
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-subtract-line text-xs"></i>
                                </button>
                                <span class="px-2 py-1 text-sm">1</span>
                                <button
                                    class="w-6 h-6 flex items-center justify-center hover:bg-gray-100 transition-colors">
                                    <i class="ri-add-line text-xs"></i>
                                </button>
                            </div>
                            <span class="font-semibold text-primary">RS 70</span>
                        </div>
                    </div>
                    <button
                        class="w-6 h-6 flex items-center justify-center text-gray-400 hover:text-red-500 transition-colors">
                        <i class="ri-delete-bin-line"></i>
                    </button>
                </div>
            </div>
            <div class="border-t p-4">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-lg font-semibold">Total:</span>
                    <span class="text-xl font-bold text-primary">RS 290</span>
                </div>
                <button
                    class="w-full bg-primary text-white py-3 rounded-button font-semibold hover:bg-green-600 transition-colors whitespace-nowrap">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- Cart Overlay -->
    <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-['Pacifico'] text-primary mb-4">Organic Fresh Mart</h4>
                    <p class="text-gray-300 mb-4">Your trusted partner for fresh groceries and daily essentials
                        delivered right to your doorstep.</p>
                    <div class="flex space-x-4">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i
                                class="ri-facebook-fill text-gray-400 hover:text-white transition-colors cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i
                                class="ri-twitter-fill text-gray-400 hover:text-white transition-colors cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i
                                class="ri-instagram-fill text-gray-400 hover:text-white transition-colors cursor-pointer"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="font-semibold mb-4">Quick Links</h5>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Track Order</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-4">Categories</h5>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Fresh Fruits</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Vegetables</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Dairy Products</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Beverages</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-4">Contact Info</h5>
                    <div class="space-y-2 text-gray-300">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span>support@organicfreshmart.com</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 flex items-center justify-center">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span>123 Organic Fresh Street, City, State 12345</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 FreshMart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Navigation -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-40">
        <div class="flex items-center justify-around py-2">
            <a href="#" class="flex flex-col items-center py-2 px-3">
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="ri-home-line text-primary"></i>
                </div>
                <span class="text-xs text-primary font-medium">Home</span>
            </a>
            <a href="#" class="flex flex-col items-center py-2 px-3">
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="ri-search-line text-gray-600"></i>
                </div>
                <span class="text-xs text-gray-600">Search</span>
            </a>
            <a href="#" class="flex flex-col items-center py-2 px-3">
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="ri-grid-line text-gray-600"></i>
                </div>
                <span class="text-xs text-gray-600">Categories</span>
            </a>
            <a href="#" class="flex flex-col items-center py-2 px-3 relative">
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="ri-shopping-cart-line text-gray-600"></i>
                </div>
                <span class="text-xs text-gray-600">Cart</span>
                <span
                    class="absolute -top-1 -right-1 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
            </a>
            <a href="#" class="flex flex-col items-center py-2 px-3">
                <div class="w-6 h-6 flex items-center justify-center">
                    <i class="ri-user-line text-gray-600"></i>
                </div>
                <span class="text-xs text-gray-600">Account</span>
            </a>
        </div>
    </div>

    <script id="searchFunctionality">
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('input[placeholder="Search for products..."]');
            const searchSuggestions = document.getElementById('searchSuggestions');

            searchInput.addEventListener('focus', function () {
                searchSuggestions.classList.remove('hidden');
            });

            searchInput.addEventListener('blur', function () {
                setTimeout(() => {
                    searchSuggestions.classList.add('hidden');
                }, 200);
            });

            searchInput.addEventListener('input', function () {
                if (this.value.length > 0) {
                    searchSuggestions.classList.remove('hidden');
                } else {
                    searchSuggestions.classList.add('hidden');
                }
            });
        });
    </script>

    <script id="cartFunctionality">
        document.addEventListener('DOMContentLoaded', function () {
            const cartToggle = document.getElementById('cartToggle');
            const cartSidebar = document.getElementById('cartSidebar');
            const cartOverlay = document.getElementById('cartOverlay');
            const closeCart = document.getElementById('closeCart');

            function openCart() {
                cartSidebar.classList.remove('translate-x-full');
                cartOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeCartSidebar() {
                cartSidebar.classList.add('translate-x-full');
                cartOverlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            cartToggle.addEventListener('click', openCart);
            closeCart.addEventListener('click', closeCartSidebar);
            cartOverlay.addEventListener('click', closeCartSidebar);
        });
    </script>

    <script id="themeToggle">
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('themeToggle');
            const themeIcon = themeToggle.querySelector('i');
            let isDark = false;

            themeToggle.addEventListener('click', function () {
                isDark = !isDark;
                if (isDark) {
                    document.body.classList.add('dark');
                    themeIcon.className = 'ri-moon-line text-gray-600';
                } else {
                    document.body.classList.remove('dark');
                    themeIcon.className = 'ri-sun-line text-gray-600';
                }
            });
        });
    </script>

    <script id="quantityControls">
        document.addEventListener('DOMContentLoaded', function () {
            const quantityControls = document.querySelectorAll('.flex.items-center.border');

            quantityControls.forEach(control => {
                const minusBtn = control.querySelector('button:first-child');
                const plusBtn = control.querySelector('button:last-child');
                const quantitySpan = control.querySelector('span');

                minusBtn.addEventListener('click', function () {
                    let quantity = parseInt(quantitySpan.textContent);
                    if (quantity > 1) {
                        quantitySpan.textContent = quantity - 1;
                    }
                });

                plusBtn.addEventListener('click', function () {
                    let quantity = parseInt(quantitySpan.textContent);
                    quantitySpan.textContent = quantity + 1;
                });
            });
        });
    </script>
</body>

</html>
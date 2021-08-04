<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PromotionsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\CollectionsComponent;
use App\Http\Livewire\OfertasComponent;
use App\Http\Livewire\HandMadeComponent;
use App\Http\Livewire\WawYearComponent;
use App\Http\Livewire\EcoComponent;
use App\Http\Livewire\SoftComponent;
use App\Http\Livewire\AlpacaDoradaComponent;
use App\Http\Livewire\AlpacaComponent;
use App\Http\Livewire\DetrasMarcaComponent;
use App\Http\Livewire\TermsConditionsComponent;

use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;

use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;

use App\Http\Livewire\Admin\AdminHomePopupComponent;
use App\Http\Livewire\Admin\AdminAddHomePopupComponent;
use App\Http\Livewire\Admin\AdminEditHomePopupComponent;

use App\Http\Livewire\Admin\AdminHomeCategoryComponent;

use App\Http\Livewire\Admin\AdminSaleComponent;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);

Route::get('/shop', ShopComponent::class);

Route::get('/promociones', PromotionsComponent::class);

Route::get('/ofertas', OfertasComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');

Route::get('/collections', CollectionsComponent::class);
Route::get('/collections/handmade', HandMadeComponent::class);
Route::get('/collections/waw-2021', WawYearComponent::class);
Route::get('/collections/eco', EcoComponent::class);
Route::get('/collections/soft', SoftComponent::class);
Route::get('/collections/alpaca-dorada', AlpacaDoradaComponent::class);

Route::get('/la-alpaca', AlpacaComponent::class);

Route::get('/detras-de-la-marca', DetrasMarcaComponent::class);

Route::get('/contact', ContactComponent::class);

Route::get('/terminos-y-condiciones', TermsConditionsComponent::class)->name('terminos.condiciones');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//Para usuarios o Clientes
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');

});

//Para el Administrador

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    //Product

    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');

    //SliderHome
    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    //PopupHome
    Route::get('/admin/popup', AdminHomePopupComponent::class)->name('admin.homepopup');
    Route::get('/admin/popup/add', AdminAddHomePopupComponent::class)->name('admin.addhomepopup');
    Route::get('/admin/popup/edit/{popup_id}', AdminEditHomePopupComponent::class)->name('admin.edithomepopup');

    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');

    Route::get('/admin/sale', AdminSaleComponent::class)->name('admin.sale');

});
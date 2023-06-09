<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandModelController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqsCategoryController;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EnquirieController;
use App\Http\Controllers\ReportTypeController;
use App\Http\Controllers\NotificationTypeController;
use App\Http\Controllers\ItemStatusController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\TimePeriodController;
use App\Http\Controllers\SubscriptionsController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
|    DASHBOARD
|    USER
|    ITEM
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/search-box', function () {
    return view('searchbox');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // user profile

    Route::controller(UserController::class)->group(function () {
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'index')->name('user');
            Route::get('/{id}/items', 'items')->name('user.items');
            Route::get('/{id}/overview', 'overview')->name('user.overview');
            Route::get('/{id}/address', 'address')->name('user.address');
            Route::get('/{id}/packages', 'packages')->name('user.packages');
            Route::get('/{id}/reports', 'reports')->name('user.reports');
            Route::get('/{id}/reviews', 'reviews')->name('user.reviews');
        });
    });
    // item page

    Route::controller(ItemController::class)->group(function () {
        Route::group(['prefix' => 'item'], function () {
            Route::get('/', 'index')->name('item');
            Route::get('/details/{id}', 'details')->name('item.details');
            Route::get('/customers', 'details')->name('item.customers');
            Route::post('/status', 'updateStatus')->name('item.status');
        });
    });
    Route::get('/reviews/{id}', [ReviewController::class, 'reviews'])->name('item/reviews');

    // category

    Route::controller(CategoryController::class)->group(function () {
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'index')->name('category.index');
            Route::get('/add', 'create')->name('category.add');
            Route::post('/store', 'store')->name('category.store');
            Route::get('{id}/view', 'show')->name('category.view');
            Route::get('{id}/edit', 'edit')->name('category.edit');
            Route::post('{id}/update', 'update')->name('category.update');
            Route::delete('{id}/delete', 'destroy')->name('category.delete');
        });
    });

    Route::controller(BannerController::class)->group(function () {
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/', 'index')->name('banner.index');
            Route::get('/add', 'create')->name('banner.add');
            Route::post('/store', 'store')->name('banner.store');
            Route::get('{id}/view', 'show')->name('banner.view');
            Route::get('{id}/edit', 'edit')->name('banner.edit');
            Route::post('{id}/update', 'update')->name('banner.update');
            Route::delete('{id}/delete', 'destroy')->name('banner.delete');
        });
    });

    Route::controller(AttributeController::class)->group(function () {
        Route::group(['prefix' => 'attribute'], function () {
            Route::get('/', 'index')->name('attribute.index');
            Route::get('/add', 'create')->name('attribute.add');
            Route::post('/store', 'store')->name('attribute.store');
            Route::get('{id}', 'show')->name('attribute.view');
            Route::get('{id}/edit', 'edit')->name('attribute.edit');
            Route::post('{id}/update', 'update')->name('attribute.update');
            Route::delete('{id}/delete', 'destroy')->name('attribute.delete');
        });
    });
    Route::controller(AttributeValueController::class)->group(function () {
        Route::group(['prefix' => 'attribute-value'], function () {
            Route::get('/', 'index')->name('attribute-value.index');
            Route::get('/add', 'create')->name('attribute-value.add');
            Route::post('/store', 'store')->name('attribute-value.store');
            Route::get('{id}/edit', 'edit')->name('attribute-value.edit');
            Route::post('{id}/update', 'update')->name('attribute-value.update');
            Route::delete('{id}/delete', 'destroy')->name('attribute-value.delete');
        });
    });

    Route::controller(RuleController::class)->group(function () {
        Route::group(['prefix' => 'rule'], function () {
            Route::get('/', 'index')->name('rule.index');
            Route::get('/add', 'create')->name('rule.add');
            Route::post('/store', 'store')->name('rule.store');
            Route::get('{id}/edit', 'edit')->name('rule.edit');
            Route::post('{id}/update', 'update')->name('rule.update');
            Route::delete('{id}/delete', 'destroy')->name('rule.delete');
        });
    });

    Route::controller(PlanController::class)->group(function () {
        Route::group(['prefix' => 'plan'], function () {
            Route::get('/', 'index')->name('plan.index');
            Route::get('/add', 'create')->name('plan.add');
            Route::post('/store', 'store')->name('plan.store');
            Route::get('{id}', 'show')->name('plan.view');
            Route::get('{id}/edit', 'edit')->name('plan.edit');
            Route::post('{id}/update', 'update')->name('plan.update');
            Route::delete('{id}/delete', 'destroy')->name('plan.delete');
        });
    });

    Route::controller(BrandController::class)->group(function () {
        Route::group(['prefix' => 'brand'], function () {
            Route::get('/', 'index')->name('brand.index');
            Route::get('/add', 'create')->name('brand.add');
            Route::post('/store', 'store')->name('brand.store');
            Route::get('{id}', 'show')->name('brand.view');
            Route::get('{id}/edit', 'edit')->name('brand.edit');
            Route::post('{id}/update', 'update')->name('brand.update');
            Route::delete('{id}/delete', 'destroy')->name('brand.delete');
        });
    });

    Route::controller(BrandModelController::class)->group(function () {
        Route::group(['prefix' => 'brand-model'], function () {
            Route::get('/', 'index')->name('brand-model.index');
            Route::get('/add', 'create')->name('brand-model.add');
            Route::post('/store', 'store')->name('brand-model.store');
            Route::get('{id}/edit', 'edit')->name('brand-model.edit');
            Route::post('{id}/update', 'update')->name('brand-model.update');
            Route::delete('{id}/delete', 'destroy')->name('brand-model.delete');
        });
    });

    Route::controller(CouponController::class)->group(function () {
        Route::group(['prefix' => 'coupon'], function () {
            Route::get('/', 'index')->name('coupon.index');
            Route::get('/add', 'create')->name('coupon.add');
            Route::post('/store', 'store')->name('coupon.store');
            Route::get('{id}', 'show')->name('coupon.view');
            Route::get('{id}/edit', 'edit')->name('coupon.edit');
            Route::post('{id}/update', 'update')->name('coupon.update');
            Route::delete('{id}/delete', 'destroy')->name('coupon.delete');
        });
    });

    Route::controller(ImageController::class)->group(function () {
        Route::post('/upload/image', 'uploadImage');
        Route::post('/upload/category-banner', 'uploadCategoryImage');
        Route::post('/upload/banner', 'uploadBanner');
        Route::post('/upload/brand', 'uploadBrand');
        Route::post('/upload/faq', 'uploadFaq');
    });

    Route::controller(FaqsCategoryController::class)->group(function () {
        Route::group(['prefix' => 'faqs'], function () {
            Route::get('/', 'index')->name('faqs.index');
            Route::get('/add', 'create')->name('faqs.add');
            Route::post('/store', 'store')->name('faqs.store');
            Route::get('{id}', 'show')->name('faqs.view');
            Route::get('{id}/edit', 'edit')->name('faqs.edit');
            Route::post('{id}/update', 'update')->name('faqs.update');
            Route::delete('{id}/delete', 'destroy')->name('faqs.delete');
        });
    });

    Route::controller(FaqController::class)->group(function () {
        Route::group(['prefix' => 'faqs-model'], function () {
            Route::get('/', 'index')->name('faqs-model.index');
            Route::get('/add', 'create')->name('faqs-model.add');
            Route::post('/store', 'store')->name('faqs-model.store');
            Route::get('{id}/edit', 'edit')->name('faqs-model.edit');
            Route::post('{id}/update', 'update')->name('faqs-model.update');
            Route::delete('{id}/delete', 'destroy')->name('faqs-model.delete');
        });
    });

    Route::controller(CustomerReviewController::class)->group(function () {
        Route::group(['prefix' => 'customer-review'], function () {
            Route::get('/', 'index')->name('customer-review.index');
            Route::get('/add', 'create')->name('customer-review.add');
            Route::post('/store', 'store')->name('customer-review.store');
            Route::get('{id}/view', 'show')->name('customer-review.view');
            Route::get('{id}/edit', 'edit')->name('customer-review.edit');
            Route::post('{id}/update', 'update')->name('customer-review.update');
            Route::delete('{id}/delete', 'destroy')->name('customer-review.delete');
        });
    });

    Route::controller(PageController::class)->group(function () {
        Route::group(['prefix' => 'page'], function () {
            Route::get('/', 'index')->name('page.index');
            Route::get('/add', 'create')->name('page.add');
            Route::post('/store', 'store')->name('page.store');
            Route::get('{id}/view', 'show')->name('page.view');
            Route::get('{id}/edit', 'edit')->name('page.edit');
            Route::post('{id}/update', 'update')->name('page.update');
            Route::delete('{id}/delete', 'destroy')->name('page.delete');
        });
    });

    Route::controller(EnquirieController::class)->group(function () {
        Route::group(['prefix' => 'enquire'], function () {
            Route::get('/', 'index')->name('enquire.index');
            Route::post('/status', 'status')->name('enquire.status');
        });
    });

    Route::controller(ReportTypeController::class)->group(function () {
        Route::group(['prefix' => 'report-types'], function () {
            Route::get('/', 'index')->name('report-types.index');
            Route::get('/add', 'create')->name('report-types.add');
            Route::post('/store', 'store')->name('report-types.store');
            Route::get('{id}/view', 'show')->name('report-types.view');
            Route::get('{id}/edit', 'edit')->name('report-types.edit');
            Route::post('{id}/update', 'update')->name('report-types.update');
            Route::delete('{id}/delete', 'destroy')->name('report-types.delete');
        });
    });
    Route::controller(NotificationTypeController::class)->group(function () {
        Route::group(['prefix' => 'notification-types'], function () {
            Route::get('/', 'index')->name('notification-types.index');
            Route::get('/add', 'create')->name('notification-types.add');
            Route::post('/store', 'store')->name('notification-types.store');
            Route::get('{id}/view', 'show')->name('notification-types.view');
            Route::get('{id}/edit', 'edit')->name('notification-types.edit');
            Route::post('{id}/update', 'update')->name('notification-types.update');
            Route::delete('{id}/delete', 'destroy')->name('notification-types.delete');
        });
    });

    Route::controller(ItemStatusController::class)->group(function () {
        Route::group(['prefix' => 'item-status'], function () {
            Route::get('/', 'index')->name('item-status.index');
            Route::get('/add', 'create')->name('item-status.add');
            Route::post('/store', 'store')->name('item-status.store');
            Route::get('{id}/view', 'show')->name('item-status.view');
            Route::get('{id}/edit', 'edit')->name('item-status.edit');
            Route::post('{id}/update', 'update')->name('item-status.update');
            Route::delete('{id}/delete', 'destroy')->name('item-status.delete');
        });
    });

    Route::controller(TimeController::class)->group(function () {
        Route::group(['prefix' => 'time'], function () {
            Route::get('/', 'index')->name('time.index');
            Route::get('/add', 'create')->name('time.add');
            Route::post('/store', 'store')->name('time.store');
            Route::get('{id}/view', 'show')->name('time.view');
            Route::get('{id}/edit', 'edit')->name('time.edit');
            Route::post('{id}/update', 'update')->name('time.update');
            Route::delete('{id}/delete', 'destroy')->name('time.delete');
        });
    });

    Route::controller(TimePeriodController::class)->group(function () {
        Route::group(['prefix' => 'time-periods'], function () {
            Route::get('/', 'index')->name('time-periods.index');
            Route::get('{id}/add', 'create')->name('time-periods.add');
            Route::post('/store', 'store')->name('time-periods.store');
            Route::get('{id}/view', 'show')->name('time-periods.view');
            Route::get('{id}/edit', 'edit')->name('time-periods.edit');
            Route::any('{id}/update', 'update')->name('time-periods.update');
            Route::delete('{id}/delete', 'destroy')->name('time-periods.delete');
        });
    });

    Route::controller(SubscriptionsController::class)->group(function () {
        Route::group(['prefix' => 'subscriptions'], function () {
            Route::get('/', 'index')->name('subscriptions.index');
            Route::post('/status', 'status')->name('subscriptions.status');
        });
    });

    // admin profile page

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

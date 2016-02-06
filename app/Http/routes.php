<?php

$request = Request();
if ($request->has('lang')) {
    $lang = $request->input('lang');
    \L10nHelper::setLocale($lang);
} else if ($request->cookie('lang')) {
    \L10nHelper::setLocale($request->cookie('lang'));
} else {
    $lang = 'geo';
    \L10nHelper::setLocale($lang);
}

Route::get('/', [
    'uses' => 'SiteController@index',
    'as' => 'site.index',
]);
Route::get('login', [
    'uses' => 'SiteController@ShowLogin',
    'as' => 'site.login.show',
]);
Route::post('login', ['uses' => 'SiteController@checkLogin']);
Route::get('registration', [
    'uses' => 'SiteController@ShowRegistration',
    'as' => 'site.registration.show',
]);
Route::get('category/{id}', [
    'uses' => 'SiteController@ShowCategoryItems',
    'as' => 'site.categoryitems.show',
]);
Route::get('subcategory/{id}', [
    'uses' => 'SiteController@ShowSubCategoryItems',
    'as' => 'site.subcategoryitems.show',
]);
Route::post('registration', [
    'uses' => 'UserController@store'
]);
Route::get('terms', [
    'uses' => 'SiteController@ShowTerms',
    'as' => 'site.terms.show',
]);
Route::get('item/{slug}/{id}', [
    'uses' => 'SiteController@ShowItemDetail',
    'as' => 'site.ItemDetail.show',
]);
Route::get('contact', [
    'uses' => 'SiteController@ShowContact',
    'as' => 'site.contact.show',
]);
Route::post('contact', [
    'uses' => 'SiteController@SendMail',
]);
Route::get('library', [
    'uses' => 'SiteController@ShowLibrary',
    'as' => 'site.library.show',
]);
Route::get('gallery', [
    'uses' => 'SiteController@ShowGallery',
    'as' => 'site.gallery.show',
]);
Route::get('team', [
    'uses' => 'SiteController@ShowTeam',
    'as' => 'site.team.show',
]);
Route::get('gallery/{id}', [
    'uses' => 'SiteController@ShowPhotos',
    'as' => 'site.photos.show',
])->where('id', '[0-9]+');
Route::get('news', [
    'uses' => 'SiteController@ShowNews',
    'as' => 'site.news.show',
]);
Route::get('about', [
    'uses' => 'SiteController@ShowAbout',
    'as' => 'site.about.show',
]);
Route::get('staff', [
    'uses' => 'SiteController@ShowStaff',
    'as' => 'site.staff.show',
]);
Route::get('page/{slug}/{id}', [
    'uses' => 'SiteController@ShowPage',
    'as'   => 'site.show.page',
])->where('id', '[0-9]+');

Route::get('news/{slug}/{id}', [
    'uses' => 'SiteController@ShowNewsDetail',
    'as'   => 'site.show.news.detail',
])->where('id', '[0-9]+');
Route::post('news/{slug}/{id}', [
    'uses' => 'CommentController@store'
]);
Route::get('staff/{slug}/{id}', [
    'uses' => 'SiteController@ShowStaffDetail',
    'as'   => 'site.show.staff.detail',
])->where('id', '[0-9]+');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function(){
        if (Auth::admin()->check()){
            return Redirect::route('admin.index');
        } else {
            return Redirect::route('admin.login');
        }
    });

    Route::get('login', [
        'uses' => 'HomeController@showLogin',
        'as' => 'admin.login',
    ]);

    Route::post('login', ['uses' => 'HomeController@checkLogin']);

    Route::get('logout', [
        'uses' => 'HomeController@adminLogout',
        'as' => 'admin.logout',
    ]);

    Route::group(['prefix' => 'news'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'NewsController@index',
            'as' => 'admin.index',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'NewsController@create',
            'as' => 'admin.news.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'NewsController@store',
        ]);

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'NewsController@edit',
            'as' => 'admin.news.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'NewsController@update',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'NewsController@destroy',
            'as' => 'admin.news.delete',
        ])->where('id', '[0-9]+');

        Route::get('{id}/comment', [
            'middleware' => 'auth',
            'uses' => 'CommentController@index',
            'as' => 'admin.comment.show',
        ])->where('id', '[0-9]+');

        Route::post('{id}/photos', [
            'middleware' => 'auth',
            'uses' => 'PhotoController@store'
        ]);

        Route::get('{id}/comment/delete/{commentId}', [
            'middleware' => 'auth',
            'uses' => 'CommentController@destroy',
            'as' => 'admin.comment.delete',
        ])->where('id', '[0-9]+')->where('commentId', '[0-9]+');

    });

    Route::group(['prefix' => 'menu'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'MenuController@index',
            'as' => 'admin.menu.show',  
        ]);

    });

    Route::group(['prefix' => 'pages'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'PageController@index',
            'as' => 'admin.pages.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'PageController@create',
            'as' => 'admin.pages.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'PageController@store',
        ]);

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'PageController@edit',
            'as' => 'admin.pages.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'PageController@update',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'PageController@destroy',
            'as' => 'admin.pages.delete',
        ])->where('id', '[0-9]+');

    });
    Route::group(['prefix' => 'item'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'ItemController@index',
            'as' => 'admin.item.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'ItemController@create',
            'as' => 'admin.item.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'ItemController@store',
        ]);

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'ItemController@edit',
            'as' => 'admin.item.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'ItemController@update',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'ItemController@destroy',
            'as' => 'admin.item.delete',
        ])->where('id', '[0-9]+');

    });

    Route::group(['prefix' => 'slider'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'SlideController@index',
            'as' => 'admin.slider.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'SlideController@create',
            'as' => 'admin.slider.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'SlideController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'SlideController@destroy',
            'as' => 'admin.slide.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'SlideController@edit',
            'as' => 'admin.slide.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'SlideController@update',
        ]);
    });

    Route::group(['prefix' => 'sideslider'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@index',
            'as' => 'admin.sideslider.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@create',
            'as' => 'admin.sideslider.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@destroy',
            'as' => 'admin.sideslider.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@edit',
            'as' => 'admin.sideslider.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'SideSliderController@update',
        ]);
    });

    Route::group(['prefix' => 'category'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@index',
            'as' => 'admin.category.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@create',
            'as' => 'admin.category.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@destroy',
            'as' => 'admin.category.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@edit',
            'as' => 'admin.category.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'CategoryController@update',
        ]);

        Route::get('{id}/subcategory', [
            'middleware' => 'auth',
            'uses' => 'SubCategoryController@index',
            'as' => 'admin.subcategory.show',
        ])->where('id', '[0-9]+');

        Route::post('{id}/subcategory', [
            'middleware' => 'auth',
            'uses' => 'SubCategoryController@store'
        ]);

        Route::get('{id}/photos/delete/{subcategoryid}', [
            'middleware' => 'auth',
            'uses' => 'SubCategoryController@destroy',
            'as' => 'admin.subcategory.delete',
        ])->where('id', '[0-9]+')->where('subcategoryid', '[0-9]+');
    });

    Route::group(['prefix' => 'library'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'libraryController@index',
            'as' => 'admin.library.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'LibraryController@create',
            'as' => 'admin.library.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'LibraryController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'LibraryController@destroy',
            'as' => 'admin.library.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'LibraryController@edit',
            'as' => 'admin.library.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'LibraryController@update',
        ]);
    });

    Route::group(['prefix' => 'partner'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@index',
            'as' => 'admin.partner.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@create',
            'as' => 'admin.partner.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@destroy',
            'as' => 'admin.partner.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@edit',
            'as' => 'admin.partner.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'PartnerController@update',
        ]);
    });

    Route::group(['prefix' => 'staff'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'StaffController@index',
            'as' => 'admin.staff.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'StaffController@create',
            'as' => 'admin.staff.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'StaffController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'StaffController@destroy',
            'as' => 'admin.staff.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'StaffController@edit',
            'as' => 'admin.staff.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'StaffController@update',
        ]);
    });
    Route::group(['prefix' => 'album'], function () {

        Route::get('/', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@index',
            'as' => 'admin.album.show',
        ]);

        Route::get('add', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@create',
            'as' => 'admin.album.add',
        ]);

        Route::post('add', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@store',
        ]);

        Route::get('delete/{id}', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@destroy',
            'as' => 'admin.album.delete',
        ])->where('id', '[0-9]+');

        Route::get('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@edit',
            'as' => 'admin.album.edit',
        ])->where('id', '[0-9]+');

        Route::post('edit/{id}', [
            'middleware' => 'auth',
            'uses' => 'AlbumController@update',
        ]);

        Route::get('{id}/photos', [
            'middleware' => 'auth',
            'uses' => 'PhotoController@index',
            'as' => 'admin.photos.show',
        ])->where('id', '[0-9]+');

        Route::post('{id}/photos', [
            'middleware' => 'auth',
            'uses' => 'PhotoController@store'
        ]);

        Route::get('{id}/photos/delete/{photoId}', [
            'middleware' => 'auth',
            'uses' => 'PhotoController@destroy',
            'as' => 'admin.photos.delete',
        ])->where('id', '[0-9]+')->where('photoId', '[0-9]+');
    });

    Route::group(['prefix' => 'menu'], function()
    {

        Route::get('/', [
            'uses' => 'MenuController@showMenu',
            'as' => 'admin.menu.show'
        ]);

        Route::post('add-link', [
            'uses'=>'MenuController@addLink',
            'as'  =>'admin.menu.link.add'
        ]);

        Route::post('add-json', [
            'uses'=>'MenuController@addJSON',
            'as'  =>'admin.menu.json.add'
        ]);

        Route::get('edit/link/{id}', [
            'uses'=>'MenuController@editMenuLink',
            'as'  =>'admin.menu.link.edit'
        ])->where('id', '[0-9]+');

        Route::put('edit/link/{id}', [
            'uses'=>'MenuController@editMenuLinkDB'
        ])->where('id', '[0-9]+');

        Route::get('delete/{id}', [
            'uses'=>'MenuController@deleteMenu',
            'as'  =>'admin.menu.delete'
        ])->where('id', '[0-9]+');

    });

});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');
Route::post('contact', 'HomeController@message')->name('contact');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', 'DashboardController@index')->name('home');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    //General Info
    Route::get('gen-info', 'GeneralInfoController@index')->name('gen_info.index');
    Route::post('gen-info', 'GeneralInfoController@store')->name('gen_info.store');

    //Site Setting Info
    Route::get('site-setting', 'SiteSettingController@index')->name('site_setting.index');
    Route::post('site-setting', 'SiteSettingController@store')->name('site_setting.store');

    //Skills Route
    Route::get('skills', 'SkillController@index')->name('skills.index');
    Route::get('skill/create', 'SkillController@create')->name('skills.create');
    Route::post('skills/store', 'SkillController@store')->name('skills.store');
    Route::get('skill/edit/{id}', 'SkillController@edit')->name('skills.edit');
    Route::post('skill/update', 'SkillController@update')->name('skills.update');
    Route::get('skill/destroy/{id}', 'SkillController@destroy')->name('skills.destroy');

    //Services Route
    Route::get('services', 'ServiceController@index')->name('services.index');
    Route::get('service/create', 'ServiceController@create')->name('services.create');
    Route::post('services/store', 'ServiceController@store')->name('services.store');
    Route::get('service/edit/{id}', 'ServiceController@edit')->name('services.edit');
    Route::post('service/update', 'ServiceController@update')->name('services.update');
    Route::get('service/destroy/{id}', 'ServiceController@destroy')->name('services.destroy');

    //Experiences Route
    Route::get('experiences', 'ExperienceController@index')->name('experiences.index');
    Route::get('experience/create', 'ExperienceController@create')->name('experiences.create');
    Route::post('experiences/store', 'ExperienceController@store')->name('experiences.store');
    Route::get('experience/edit/{id}', 'ExperienceController@edit')->name('experiences.edit');
    Route::post('experience/update', 'ExperienceController@update')->name('experiences.update');
    Route::get('experience/destroy/{id}', 'ExperienceController@destroy')->name('experiences.destroy');

    //Education Route
    Route::get('educations', 'EducationController@index')->name('educations.index');
    Route::get('education/create', 'EducationController@create')->name('educations.create');
    Route::post('educations/store', 'EducationController@store')->name('educations.store');
    Route::get('education/edit/{id}', 'EducationController@edit')->name('educations.edit');
    Route::post('education/update', 'EducationController@update')->name('educations.update');
    Route::get('education/destroy/{id}', 'EducationController@destroy')->name('educations.destroy');

    //Portfolio Route
    Route::get('portfolios', 'PortfolioController@index')->name('portfolios.index');
    Route::get('portfolio/create', 'PortfolioController@create')->name('portfolios.create');
    Route::post('portfolios/store', 'PortfolioController@store')->name('portfolios.store');
    Route::get('portfolio/edit/{id}', 'PortfolioController@edit')->name('portfolios.edit');
    Route::post('portfolio/update', 'PortfolioController@update')->name('portfolios.update');
    Route::get('portfolio/destroy/{id}', 'PortfolioController@destroy')->name('portfolios.destroy');

    //Testimonial Route
    Route::get('testimonials', 'TestimonialController@index')->name('testimonials.index');
    Route::get('testimonial/create', 'TestimonialController@create')->name('testimonials.create');
    Route::post('testimonials/store', 'TestimonialController@store')->name('testimonials.store');
    Route::get('testimonial/edit/{id}', 'TestimonialController@edit')->name('testimonials.edit');
    Route::post('testimonial/update', 'TestimonialController@update')->name('testimonials.update');
    Route::get('testimonial/destroy/{id}', 'TestimonialController@destroy')->name('testimonials.destroy');

    //Blog Route
    Route::get('blogs', 'BlogController@index')->name('blogs.index');
    Route::get('blog/create', 'BlogController@create')->name('blogs.create');
    Route::post('blogs/store', 'BlogController@store')->name('blogs.store');
    Route::get('blog/edit/{id}', 'BlogController@edit')->name('blogs.edit');
    Route::post('blog/update', 'BlogController@update')->name('blogs.update');
    Route::get('blog/destroy/{id}', 'BlogController@destroy')->name('blogs.destroy');

    //Social Profile Route
    Route::get('socials', 'SocialController@index')->name('socials.index');
    Route::get('social/create', 'SocialController@create')->name('socials.create');
    Route::post('socials/store', 'SocialController@store')->name('socials.store');
    Route::get('social/edit/{id}', 'SocialController@edit')->name('socials.edit');
    Route::post('social/update', 'SocialController@update')->name('socials.update');
    Route::get('social/destroy/{id}', 'SocialController@destroy')->name('socials.destroy');
});

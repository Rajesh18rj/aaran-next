<?php

use Illuminate\Support\Facades\Route;
use Aaran\Website\Livewire\Class\Blog;
use Aaran\Website\Livewire\Class\Service;

Route::middleware(['website'])->group(function () {

    Route::get('/', \Aaran\Website\Livewire\Class\Index::class)->name('home');

    Route::get('/billing/{id}', \Aaran\Website\Livewire\Class\Home\Billing::class)->name('billing');

    Route::get('/about', \Aaran\Website\Livewire\Class\About::class)->name('abouts');
//    Route::get('/web-contacts', \Aaran\Website\Livewire\Class\Contact::class)->name('contacts');
//    Route::post('/web-contacts',[\Aaran\Website\Livewire\Class\Contact::class,'store_message'])->name('contact.message');
    Route::get('/service', Service::class)->name('services');






    Route::get('/blog', Blog::class)->name('blogs');
    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', function () {
            return view('profile.show');
        })->name('profile.show');
    });


    Route::get('/client-register',\Aaran\Website\Livewire\Class\Index::class)->name('client-register');
    Route::get('/client-plans',\Aaran\Website\Livewire\Class\Index::class)->name('client-plans');




    Route::get('/web-contacts',\Aaran\Website\Livewire\Class\ContactPage::class)->name('web-contacts');

});

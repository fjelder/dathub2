<?php
use App\Models\User;
use App\Models\Person;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('Users'), route('users.index'));
});

// Home > Users > [name]
Breadcrumbs::for('usersName', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users');
    $trail->push($user->name, route('users.show', $user->id));
});

// Home > Contacts
Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Kontakty', route('contacts.index'));
});

// Home > Contacts > Create
Breadcrumbs::for('contactsCreate', function (BreadcrumbTrail $trail) {
    $trail->parent('contacts');
    $trail->push('Utwórz', route('contacts.create'));
});

// Home > Contacts > [name]
Breadcrumbs::for('contactsName', function (BreadcrumbTrail $trail, Person $person) {
    $trail->parent('contacts');
    $trail->push($person->name, route('contacts.edit', $person->id));
});

// Home > Contacts > [name] > edit
Breadcrumbs::for('contactsNameEdit', function (BreadcrumbTrail $trail, Person $person) {
    $trail->parent('contactsName', $person);
    $trail->push('Edytuj', route('contacts.edit', $person->id));
});


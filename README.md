# User directory by FriendsOfFlarum

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/estebanh/user-directory.svg)](https://packagist.org/packages/estebanh/user-directory)

An extension that generates a new url `/users` that provides a list of users, with the ability to sort. You can search through the users from the global
search input field, a new item shows up "Search all users for ..".

You can protect access to the list with a permission. If the user has no access, they will see a 404 not found page.

A setting allows you to show a link to the directory from the homepage sidebar, or you can use the [links extension](https://discuss.flarum.org/d/18335-friendsofflarum-links) if you prefer a link in the header.

### Installation

Use [Bazaar](https://discuss.flarum.org/d/5151-flagrow-bazaar-the-extension-marketplace) or install manually with composer:

```sh
composer require estebanh/user-directory
```

### Updating

To the next minor version:

```sh
composer update estebanh/user-directory
```

To the latest compatible version:

```sh
composer require estebanh/user-directory
```

### Updating from Flagrow

This extension replaces [Flagrow User Directory](https://packagist.org/packages/flagrow/user-directory).

To upgrade from the old extension to the new one:

```sh
composer remove flagrow/user-directory
composer require estebanh/user-directory
```

Then enable the new extension in the admin panel.

### Links

- [Flarum Discuss post](https://discuss.flarum.org/d/5682)
- [Source code on GitHub](https://github.com/FriendsOfFlarum/user-directory)
- [Report an issue](https://github.com/FriendsOfFlarum/user-directory/issues)
- [Download via Packagist](https://packagist.org/packages/estebanh/user-directory)

An extension by [FriendsOfFlarum](https://github.com/FriendsOfFlarum)

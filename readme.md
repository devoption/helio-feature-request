# DevOption - Feature Request

<p align="center">
![GitHub](https://img.shields.io/github/license/devoption/helio-feature-request?style=for-the-badge)
</p>

This Laravel package is meant to enable a feature request workflow in DevOption
Helio (an Open Source, Software Development Lifecycle (SDLC) Platform).

After creating a new project, the next step in the SDLC is to begin accepting
feature requests from the client. This package provides a simple way to do that
via REST API.

## Prerequisites

- PHP 8.1+
- Laravel 9+
- Composer 2+

## Installation

Install the package with Composer:

```bash
composer require helio/feature-request
```

Publish the package assets:

```bash
php artisan vendor:publish
```

Configure the package (sensible defaults are already set for you):

Make any necessary config changes to: `config/helio/feature-request.php`

Run the migrations:

```bash
php artisan migrate
```

## Usage

After installation, new REST API endpoints are available to create new feature requests:

| Method | Endpoint               | Description               |
|:------:|:-----------------------|:--------------------------|
| GET    | `/api/v1/features`     | List all feature requests |
| POST   | `/api/v1/feature`      | Create a feature request  |
| GET    | `/api/v1/feature/{id}` | Show a feature request    |
| PATCH  | `/api/v1/feature/{id}` | Update a feature request  |
| DELETE | `/api/v1/feature/{id}` | Delete a feature request  |

## Development

## Sponsors

## Contributions

## License

DevOption Helio is open-sourced software licensed under the [MIT License](https://opensource.org/licenses/MIT).

## Support

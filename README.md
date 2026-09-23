# RouteMosaic

### A PHP/MySQL multi-transport ticket reservation platform

RouteMosaic is a web-based ticket reservation project built with PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap. It brings several transport options into one interface so users can browse available services and create reservations from the same website.

The project covers **Metro, Rail, Air, AMTS, BRTS, and GSRTC** services, with separate user and admin flows for managing transport details and reservations.

---

## What the project does

The application has two main sides:

### User side

- User registration and login
- Password hashing with PHP `password_hash()`
- User profile and settings pages
- Transport selection from one home page
- Browse available services
- Create reservations for:
  - Metro
  - Train
  - Air / flight
  - AMTS
  - BRTS
  - GSRTC
- View reservation records
- Contact/help pages

### Admin side

- Separate admin login and registration
- Admin dashboard
- Add transport/service details
- Edit existing records
- Soft-delete transport records
- View users
- View reservation records
- Manage product/service-style content and uploaded images

---

## Supported transport modules

| Module | Browse | Reserve | Admin management |
|---|:---:|:---:|:---:|
| Metro | ✓ | ✓ | ✓ |
| Train | ✓ | ✓ | ✓ |
| Air / Plan | ✓ | ✓ | ✓ |
| AMTS | ✓ | ✓ | ✓ |
| BRTS | ✓ | ✓ | ✓ |
| GSRTC | ✓ | ✓ | ✓ |

The project stores separate reservation records for each transport type.

---


## Technology stack

| Layer | Technology |
|---|---|
| Backend | PHP |
| Database | MySQL |
| Frontend | HTML5, CSS3, JavaScript |
| UI framework | Bootstrap 5 |
| Server | Apache / XAMPP / PHP built-in server |
| Database API | MySQLi |
| Authentication | PHP sessions + password hashing |

The project also contains a local Bootstrap stylesheet and some pages reference the Bootstrap 5.3.3 JavaScript bundle through jsDelivr.

---

## Project structure

```text
RouteMosaic/
├── images/
│   ├── transport images
│   ├── login / registration assets
│   └── UI assets
│
├── uploads/
│
├── *.php
│   ├── user pages
│   ├── admin pages
│   ├── booking pages
│   ├── reservation handlers
│   └── CRUD operations
│
├── *.html
│   ├── registration forms
│   ├── login forms
│   └── admin data-entry forms
│
├── *.css
├── JS.js
├── bootstrap_min.css
├── db_config.php
└── README.md
```

---

## How the application works

### User flow

```text
Landing Page
     ↓
Register / Login
     ↓
Transport Selection
     ↓
Choose Service
     ↓
Book
     ↓
Reservation Record
```

After login, the session keeps the user identity so reservation records can be associated with the logged-in user.

### Admin flow

```text
Admin Login
     ↓
Dashboard
     ↓
Add / View / Edit / Delete
     ↓
Transport Data
     ↓
Reservation / User Management
```

The project uses soft-delete fields on several transport tables rather than immediately removing those records from the database.

---

## Database

The application uses MySQL through PHP's `mysqli` extension.

The source creates several tables when particular pages are accessed. The main groups include:

```text
Users
Admins

Metro
Train
Plan / Air
AMTS
BRTS
GSRTC

Metro reservations
Train reservations
Plan reservations
AMTS reservations
BRTS reservations
GSRTC reservations

Contact / product-style content
```

Because table creation is embedded in application files, this project does not currently include one clean SQL schema or migration file.

For a polished production repository, moving the schema into a dedicated `database.sql` file would make setup easier.

---

## Requirements

Install:

- XAMPP, WAMP, or another PHP + MySQL environment
- PHP 8.x or compatible version
- MySQL / MariaDB
- A web browser

For XAMPP, enable:

```text
Apache
MySQL
```

## License

MIT

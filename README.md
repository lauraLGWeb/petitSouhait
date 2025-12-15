# PetitSouhait

A simple Symfony application to manage and share small, thoughtful gift ideas for family—perfect for everyday moments and simple joys, not expensive presents.

## Features

- Add, edit, and delete your own gift ideas  
- View gift ideas shared by other family members  
- Fully responsive design  
- Built with Symfony, Twig, Bootstrap, and JavaScript  

## Technologies

- **Backend:** Symfony  
- **Frontend:** Twig, Bootstrap, JavaScript  
- **Database:** Doctrine (SQLite by default)  

## Installation

1. **Clone the repository:**

bash
git clone https://github.com/your-username/PetitSouhait.git
cd PetitSouhait

2. Install dependencies:
composer install

3. Set up environment variables:
Copy .env to .env.local and adjust database URL if needed:
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"

4. Create the database:
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

5.Run the Symfony server:
symfony server:start
Then open http://localhost:8000 in your browser.

Usage
Browse family gift ideas on the homepage

Add, edit, or delete your own ideas

See ideas submitted by other family members

Fully responsive layout works on desktop, tablet, and mobile

This app is designed to celebrate simple, everyday joys and make sharing thoughtful gifts easy and fun.
![Uploading image.png…]()

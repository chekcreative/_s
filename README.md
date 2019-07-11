Wordpress Theme Skeleton
===
Based off of `_s`: https://underscores.me

Setting Up Theme
---------------
After cloning/forking/downloading the theme, you will need to:
- manually set the theme info inside the comments at the beginning of `sass/style.scss`
- set the correct image path to the company's logo & uncomment the block in `functions.php` => `custom_login_logo()`
- set the company's url in `functions.php` => `custom_loginlogo_url($url)`

Adjustments From `_s` Base
---------------
- 6.28.2019:
  - Added flexbox holy grail styling to stick footer to bottom
  - Configured Chek Creative default `.scss` files
  - Imported Bootstrap
  - Configured `.gitignore`
  - Customized Wordpress Admin login page

- 7.11.2019
  - Updated holy grail scss to support IE
            
Theme Launch Checklist
---------------
- Set theme name, description, etc.
- Set theme screenshot
- Set favicon

Wordpress Site Launch Checklist
---------------
- Set up Mailgun
- Set up Google Analytics

Server Launch Checklist
---------------
- TBD

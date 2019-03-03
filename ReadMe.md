# Manga-Tracker
## Setup
Setup is pretty easy.
1. In the folder ```database``` you will find a sql file. Set a database up with it.
2. Copy all files in ```website``` onto your webserver
3. Change the settings in ```database-connect.php```
4. For the register form, you need to get a [Google Recaptcha](https://www.google.com/recaptcha). You need to add the secret key to ```register-script.php``` and your public key to ```register.php```
5. Create an user and set it to admin in your db.
6. With your admin user you can create new mangas.
7. Setup completed

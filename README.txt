DJSTMUSIC AUTOMATIC MP3 WEBSITE

WHAT THIS VERSION DOES
- Professional DJSTMUSIC red/black design
- Your banner at the top
- No old songs
- Admin login
- Upload MP3 from admin page
- After successful upload, the song automatically appears on index.html
- Online play, Download and Share
- Search
- Mobile responsive

IMPORTANT
This ZIP uses Firebase for automatic upload/storage/database.
You must connect your own Firebase project once.

SETUP
1. Create a Firebase project.
2. Enable Authentication -> Email/Password.
3. Create one admin user in Firebase Authentication.
4. Enable Firestore Database.
5. Enable Storage.
6. Create a Web App in Firebase.
7. Copy the Web App config into firebase-config.js.
8. Put the contents of firestore.rules into Firestore Rules.
9. Put the contents of storage.rules into Storage Rules.
10. Upload this folder to GitHub Pages.

ADMIN
Open:
admin.html

Log in with the Firebase admin email/password.
Choose MP3 -> enter title -> Upload Song.
After upload succeeds, the main website updates automatically.

SECURITY
Do not put a Firebase service-account/private key in this website.
The included rules allow public reading of songs but require Firebase login for uploads/changes.

FILES
index.html
admin.html
firebase-config.js
firestore.rules
storage.rules
djstmusic-banner.png
songs/

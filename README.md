🎥 Live Streaming Website
This repository contains the source code for a Live Streaming Platform, developed using Laravel, MySQL, and XAMPP. The platform allows users to view live stream events, game highlights, game schedules, and medal standings. The UI is designed for a seamless experience across devices, ensuring an engaging interaction for both viewers and streamers.

🛠️ Technologies Used
Figma: For UI/UX design and wireframing.
Laravel: Backend framework for building the platform's functionality.
MySQL: Database used for storing user data, stream information, and event details.
XAMPP: Local server environment for development.
Bootstrap: For responsive design.
Custom CSS: To enhance user experience and tailor the design.
🚀 Features
Live Stream Events: Users can watch live events in real-time.
Game Highlights: Viewers can catch up on the best moments of past events.
Game Schedule: A schedule feature displays upcoming events and their timings.
Medal Standings: Displays current standings of teams or players in an easy-to-view format.
User Authentication: Role-based access control differentiating between streamers and viewers, secured using Laravel’s built-in authentication.
Responsive Design: The UI is designed to work seamlessly across desktops, tablets, and mobile devices.
📦 Installation
To set up the project locally:

Clone the repository:
git clone https://github.com/your-username/live-streaming-website.git

Switch to the master branch:
git checkout master

Install dependencies:
composer install
npm install

Configure the .env file:
Update database credentials and other environment variables.

Migrate and seed the database:
php artisan migrate

Run the development server:
php artisan serve

🎨 Customization
To modify the frontend, edit the Blade template files in the resources/views directory.
Styles can be customized by editing the app.css file in the public/css/ folder.
JavaScript functionality is managed in the app.js file under public/js/.
🤝 Contributing
Feel free to submit a pull request if you'd like to contribute to the project:

Add new features 🚀
Fix bugs 🐞
Enhance performance ⚙️
📄 License
This project is open-sourced under the MIT License.

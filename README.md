# Campus Event Hub  

Campus Event Hub is a web-based event management system designed for colleges and clubs to efficiently create, manage, and promote events. It provides a centralized platform for students and organizers to handle registrations, updates, and event notifications seamlessly.  

---

## Features  
- **Event Creation**: Organizers can easily create and manage event details such as date, time, venue, and description.  
- **User Registration**: Students can register for events directly on the platform.  
- **Event Dashboard**: A comprehensive dashboard to view all upcoming and past events. 
- **Search and Filter**: Find events based on categories, dates, or popularity.  

---

## Technologies Used  
The project is built with:  
- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  

---

## Installation  

To set up the project locally, follow these steps:  

1. **Clone the Repository**:  
   ```bash
   git clone https://github.com/your-repo/campus-event-hub.git

2. **Navigate to the Project Directory**:  
   ```bash
   cd campus-event-hub

3. **Set Up a Local Server**:

- Use XAMPP, WAMP, or any local server of your choice.

- Place the project folder in the htdocs directory of your server.

---

## Import the Database

1. **Open phpMyAdmin**.
2. **Create a new database**:
   - Name it `campus_event_hub`.
3. **Create required tables i.e faculty, students and club coordinators**:

## Update the Database Configuration

1. Open the `db_config.php` file.
2. Set your database details as follows:

```php
<?php
$host = 'localhost';
$db = 'eventhub';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
?>
```

## Run the Application

1. Open XAMPP Control Panel and start **Apache** server. 
2. Open browser and navigate to:
   ```
   http://localhost/login.html
   ```

---
## Usage

### Faculties and Club Coordinators
- Log in to create, update, and manage events.

### Students
- Browse through upcoming events and register directly on the platform.


## Future Enhancements

- **Notifications**: Include notifications to the students on adding to new events.
- **Social Media Sharing**: Enable sharing of events on popular social media platforms.
- **Calendar View**: Introduce a calendar view for better organization and navigation.
- **Mobile-Friendly Design**: Improve accessibility with a responsive design for all devices.

## Contributing

We welcome contributions to improve this project! Here's how you can contribute:

1. **Fork the repository**.
2. **Create a new branch**:
   ```
   git checkout -b feature-name
   ```
3. **Commit your changes**:
   ```
   git commit -m "Add some feature"
   ```
4. **Push to the branch**:
   ```
   git push origin feature-name
   ```
5. **Open a Pull Request**.

---
Thank you for contributing to Campus Event Hub! If you encounter any issues, feel free to open an issue or contact the maintainers.


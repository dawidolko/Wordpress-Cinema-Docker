# 🎬 WordPress Cinema – Advanced Movie Theater Website in Docker

## 📌 Project Overview

This project is a **movie theater web application** built using **WordPress** and containerized with **Docker**. It is designed as a learning project to explore **WordPress development**, **Docker containerization**, and **customizing CMS-based web applications**.

The website features:

- A **homepage** with a dynamic **movie slider** and a **"Check What's Playing"** section
- A **cinema selection** based on city locations
- A **movie schedule (repertoire)**
- An **upcoming movies section**
- A **navigation bar with various categories**
- **User login and registration**
- **Ticket reservations**

This repository is intended as a **self-hosted, local development project** for learning purposes and will not be deployed on a live server.

---

## 🛠️ Technologies Used

- **WordPress** – Content Management System (CMS)
- **Docker** – Containerized development environment
- **MySQL** – Database for storing movie schedules and user data
- **Elementor** – Visual page builder for WordPress
- **PHP** – Backend for WordPress functionality
- **HTML/CSS** – Styling and custom theme adjustments

---

## ⚙️ Installation & Setup

### **1️⃣ Clone the Repository**

```bash
git clone https://github.com/dawidolko/wordpress-cinema-docker.git
cd wordpress-cinema-docker
```

### **2️⃣ Run Docker Containers**

```bash
docker-compose up -d
```

Once started, the WordPress application will be available at **`http://localhost:8080`**.

### **3️⃣ Access WordPress Admin Panel**

- **Admin Dashboard:** `http://localhost:8080/wp-admin`
- Default login credentials (change them after setup!):
  - **Username:** `admin`
  - **Password:** `admin`

---

## 📂 Project Structure

```
/wordpress-cinema-docker
 ├── docker-compose.yml   # Docker container configuration
 ├── wp-content/          # WordPress themes and plugins folder
 ├── db_data/             # MySQL database storage
 ├── README.md            # Project documentation
 └── .gitignore           # Ignore unnecessary files in Git repository
```

---

## 🚀 Features

✅ **Homepage:** Movie slider, "Check What's Playing" section, schedule, and information footer  
✅ **Navigation Menu:** Sections for repertoire, trailers, events, family, schools, etc.  
✅ **User Authentication:** Registration and login system  
✅ **Dynamic Movie Schedule:** Custom post types in WordPress for movies and showtimes  
✅ **Ticket Booking System:** Basic reservation form for users

---

## 🎨 Website Layout

### **Homepage:**

- 🎥 **Movie Slider** – Showcasing currently playing films
- 🏙️ **Cinema Selection** – Users can choose their preferred location
- 📅 **Repertoire Section** – List of available showtimes
- 🎬 **Upcoming Movies Section** – Sneak peek at upcoming films
- ℹ️ **Information Section** – About us, social media links, and footer

### **Navigation Bar Sections:**

- 📆 **Repertoire**
- 🎞️ **Trailers**
- 👨‍👩‍👧 **Family**
- 🎉 **Events**
- 🏫 **Schools**

### **User Authentication:**

- 🔑 **Login & Registration System** (Customizable user roles)
- 🛒 **Optional WooCommerce Integration** for ticket purchases
- 🎟️ **Basic Ticket Booking System**

---

## 🔧 WordPress Customization

### **Custom Post Types (CPT) for Movie Data**

Movies and showtimes are managed using **Custom Post Types (CPT)** and **Advanced Custom Fields (ACF)**.  
Each movie entry includes:

- 🎬 **Title & Description**
- 🕒 **Showtimes**
- 🏛️ **Cinema Location**
- 🎥 **Trailer Embed**

### **Dynamic Movie Schedule**

A custom query retrieves movies based on the selected **cinema city** and **date**.

---

## 📝 Development Roadmap

### ✅ Phase 1: Environment Setup

- Install Docker and configure WordPress
- Choose and install a WordPress theme
- Set up MySQL database for storing movies and users

### ✅ Phase 2: Core Features

- Implement **custom post types (CPTs) for movies and showtimes**
- Develop a **custom page template for the movie schedule**
- Add a **basic ticket reservation form**

### 🔜 Phase 3: Advanced Features

- Implement **AJAX-based showtime filtering**
- Add **REST API integration** for movie data
- Enable **email notifications for reservations**

---

## 📌 Running & Testing the Project

- To restart the environment:
  ```bash
  docker-compose down && docker-compose up -d
  ```
- To check active containers:
  ```bash
  docker ps
  ```
- To view logs:
  ```bash
  docker logs container_id
  ```

---

## 🤝 Contribution & Learning

This project is a **learning experiment**, but contributions and improvements are welcome. If you're interested in **WordPress customization, Docker, or CMS-based application development**, feel free to explore and modify it.

---

## 📜 License

This project is released under the **MIT License** – feel free to modify and use it for learning purposes.

👨‍💻 Created by: **[dawidolko](https://github.com/dawidolko)**

<!-- password: b98J)W&FIG4fWp1nWs -->

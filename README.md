# 🎟️ PHP MySQL Ticket Booking CRUD Application

A **Ticket Booking CRUD application** developed using **Core PHP & MySQL**, focused on real-world backend logic, relational data handling, and dynamic form integration.

This project demonstrates how data from one table (Places) is dynamically used inside another module (Ticket Booking) using database-driven logic.

---

## 🚀 Project Overview

The application allows users to:

- Manage travel places
- Book tickets using dynamically fetched place data
- Perform full CRUD operations
- Handle timestamps and travel dates efficiently

The project is designed to reflect **practical PHP–MySQL development** used in real applications.

---

## ✨ Key Features

- ✅ Ticket Booking CRUD (Create, Read, Update, Delete)
- ✅ Place Management Module
- ✅ Dynamic Place Selection in Booking Form
- ✅ Timestamp-based Record Tracking
- ✅ Clean PHP Logic with MySQLi
- ✅ Scalable Database Structure

---

## 🛠️ Tech Stack

- **Backend:** Core PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS
- **Web Server:** Nginx (PHP-FPM)
- **OS:** Linux

---

## 🗂️ Database Structure

### 🎫 Ticket Table

| Column Name | Type | Description |
|------------|------|-------------|
| user_id | INT (PK, AUTO_INCREMENT) | Unique ticket ID |
| user_name | VARCHAR(255) | Passenger name |
| user_age | INT | Passenger age |
| user_person | INT | Number of passengers |
| user_mon | VARCHAR(255) | Mobile number |
| user_from | VARCHAR(255) | Source place |
| user_destination | VARCHAR(255) | Destination place |
| user_timestamp | TIMESTAMP | Record creation time |
| user_travel_date | DATETIME | Travel date |

---

### 📍 Place Table

| Column Name | Type | Description |
|------------|------|-------------|
| place_id | INT (PK, AUTO_INCREMENT) | Unique place ID |
| place_name | VARCHAR(255) | Place name |

---

## 🔄 Dynamic Functionality

- Places are added using a separate Place module
- Ticket booking form dynamically fetches place names
- Place data is reused across booking forms
- Database-driven dropdown logic ensures consistency
- Timestamp is automatically generated for each booking
```bash
git clone https://github.com/nijpadaliya/php-ticket-booking-crud.git

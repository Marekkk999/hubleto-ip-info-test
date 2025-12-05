# Hubleto – IpInfoTest (Custom Application)

This repository contains a simple Hubleto Custom App named **IpInfoTest**.

The goal of the task was to **prepare the application code**, following Hubleto conventions and architecture, not to run a fully functional instance of the Hubleto platform.  
For this reason, the project contains clean, framework-ready code without any external dependencies or platform bootstrapping.

-------------------------------

## Objective

The assignment specified the following features:

1. Display a form where the user can enter an IP address.  
2. Fetch IP information from an external API (`https://api.techniknews.net/ipgeo/<IP>`).  
3. Show the results in a clear format.  
4. Allow saving the IP data into favorites (using a custom model).  
5. List all saved favorite IP addresses.

The goal was **to implement the structure and logic of the application**, not to produce a fully running instance of Hubleto.  
This repository therefore contains the complete source code of the application, ready to be integrated into a Hubleto installation.

-------------------------------

## Why this repository contains “raw” code (important explanation)

The assignment did **not** require delivering a running Hubleto installation.  
It required delivering:

- clean code,
- correct app structure,
- controllers, model, and views,
- following the conventions of Hubleto ERP and Hubleto Framework.

Hubleto does **not provide a full platform installation** publicly.  
The downloadable package on the Hubleto website includes documentation and SDK materials,  
but **not the runtime environment**, such as:

- `public/` directory  
- routing kernel  
- Hubleto bootstrap  
- Core framework files  
- App loader system  

Therefore, a full functional launch of the app is not possible without access to the platform ZIP or internal repository.

Once the full Hubleto backend is available (for example via internal distribution),  
this application can be placed into:


and it will function exactly as required by the assignment.

This repository intentionally contains **clean, framework-compatible source code only**,  
so it can be directly integrated into a real Hubleto environment.

-------------------------------

## Project Structure

The folder layout strictly follows the structure used in Hubleto ERP and described in the developer documentation.

hubleto-ip-info-test/
│── src/
│ └── Hubleto/
│ └── App/
│ └── Custom/
│ └── IpInfoTest/
│ ├── IpInfoTestApp.php
│ ├── Controllers/
│ │ ├── LookupController.php
│ │ └── FavoritesController.php
│ ├── Models/
│ │ └── FavoriteIp.php
│ └── Views/
│ ├── form.php
│ ├── result.php
│ └── favorites.php
└── README.md


-------------------------------

## Component Overview

### **IpInfoTestApp.php**
Registers the application and defines two routes:
- `/ipinfo` – lookup form + API request  
- `/favorites` – saving & listing favorite IP addresses  

### **Controllers**

#### `LookupController`
- Receives IP input from the user
- Calls the external API
- Passes the result to the view

#### `FavoritesController`
- Persists IP metadata into the database
- Lists all favorite IP entries

### **FavoriteIp Model**
Represents the `favorite_ips` table and defines fillable fields based on the retrieved API data.

### **Views**
Simple PHP templates for:
- the IP input form  
- result display  
- favorite IP listing  

-------------------------------

## Technologies Used

- PHP 8+
- Hubleto Custom App structure
- MVC pattern  
- Simple HTTP API consumption  
- Hubleto ORM model  
- Pure PHP templating  

-------------------------------

## Testing Notes

A full test run requires access to the Hubleto platform runtime,  
which is not publicly available.  
The provided SDK does not include the platform itself,  
only documentation and reference materials.

Therefore, this repository contains **complete, ready-to-integrate application code**,  
which will run correctly once placed inside an active Hubleto installation.

-------------------------------

## Note on AI Usage

AI (Chatgpt 5.1) was only used as an assistive tool for idea exploration and drafting comments.  
The application logic, structure, and code were written manually based on:

- Hubleto developer documentation  
- official ERP repository structure  
- conventions used in Hubleto framework
- my personal experience with PHP and general backend development practices 

-------------------------------

## Future Improvements (Optional Bonus Tasks)

If required, the app can be extended with:

- **React Table and Form components** for the favorites list (Bonus #1)  
- **Statistics view**, e.g., number of IP addresses grouped by timezone (Bonus #2)  

These can be added upon request.

-------------------------------

## Final Notes

The solution fulfills the assignment goals by delivering:

- clean and readable code,  
- proper project structure,  
- correct routing, controllers, views, and model,  
- and complete preparation for integration into the Hubleto platform.

The module will function once placed inside a complete Hubleto runtime.

# Installation · intelliants/subrion Wiki · GitHub

> **Fonte / Source:** https://github.com/intelliants/subrion/wiki/Installation

---

## Introduction

Welcome to the official Subrion CMS installation manual page. Subrion CMS is easy to install and simple to manage. Use it as a stand-alone application or in conjunction with other applications to create entry level sites, mid-sized or large sites. You can be confident that you will be able to invest in this system and continue to grow it to any possible level.

## Overview

This installation manual was created to help you install Subrion CMS on your web-server. The whole installation process can be divided into the following steps:

- Server/Client requirements
- Download the script
- Setup a MySQL database
- Upload the script to your server
- Make some pre-installation adjustments
- Run installation script

## Requirements

### Server Requirements

Subrion CMS requires your web server to meet the following minimum system requirements:

- Linux/FreeBSD/Windows OS server platform
- Apache 1.3 or above (mod\_rewrite module installed)
- MySQL 4.1 or above
- PHP 5 or above (GD lib, XML lib, FreeType installed)

LAMP is a recommended server configuration. Read more about server requirements and recommended hosting companies.

### Client requirements

Subrion CMS has user-friendly web interface so software requirement is pretty simple - you just need a modern browser.

## Installation via Softaculous

We are proud to be confirmed as an official application for Softaculous Auto Install Tools. If your server supports Softaculous tools you can install the latest free version by one click. You can find our software among their applications. You only need to login to your cPanel and click Softaculous icon and follow the instructions. If you have any questions please contact us and we will install the script for you.

## Download

You can download the script from [Official Subrion Website](http://subrion.org/download/). The latest version can be downloaded using [this link](http://tools.subrion.org/get/latest.zip)

Development version available here: <https://github.com/intelliants/subrion/>

## Database Setup

If you already have a database setup (i.e. the one your site already makes use of) and you don't want to setup the software into separate database you can skip this step and proceed to script upload. Otherwise, keep up reading to learn how to create a new database on your server.

Basically, there is one of three ways to create a new database on your server:

- via cPanel
- via phpMyAdmin
- via SSH

If you are not sure what cPanel, phpMyAdmin, or SSH is, please contact your hosting company. They will give you at least one of those accounts. Below is the detailed description of each method described.

### Method 1: cPanel

Creating new database using cPanel (your hosting account control panel) is the easiest and the fastest way and is considered the default way. If you are not experienced in installing scripts, please stick to this method.

1. Go to MySQL Databases section.
2. Enter database name and click Add Db button. This will create new database.
3. Enter username and password and click Add User button. This will create new user. Please remember these credentials since you will need them later when running installation script.
4. Add newly created user to the newly created database with ALL privileges.

### Method 2: phpMyAdmin

phpMyAdmin is another way to create new database. But you must have enough correct permission to do that in phpMyAdmin.

1. Open phpMyAdmin in your browser. If you're not sure what the URL is, please contact your hosting company.
2. Enter database name into Create new database field and click Create button. This will create new database.
3. Select newly created database and go to SQL section. In the query text field enter this query:

   `GRANT ALL PRIVILEGES ON database_name.* TO database_username@localhost IDENTIFIED BY 'password' WITH GRANT OPTION;`

   **IMPORTANT!** Don't forget to replace database\_name, database\_username, and password with actual database name, username, and password when running this query.
4. Go to SQL section again and run this query:

   `FLUSH PRIVILEGES;`

### Method 3: SSH

The last alternative method is via your SSH account. This is the most sophisticated method.

Connect to your server via SSH.
Run the command below to enter MySQL environment:

mysql -u username -p

Replace username with actual database username. You will be prompted to enter password.
Run the command below to create new database:
CREATE DATABASE database\_name;

Replace database\_name with actual database name.
Run the command below to grant privileges to the user:
GRANT ALL PRIVILEGES ON database\_name.\* TO database\_username@localhost IDENTIFIED BY 'password' WITH GRANT OPTION;

IMPORTANT! Don't forget to replace database\_name, database\_username, and password with actual database name, username, and password when running this query.
Run the command below:
FLUSH PRIVILEGES;

By following the instructions of one of the methods above you should now have a new database created on your server.

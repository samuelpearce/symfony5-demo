# symfony5-demo
Getting started with Symfony5 and instructions on Windoows

## Overview
Follow the getting started guide.

Then look through the commits. Each commit details

* A description of what the commit does
* The Command which does it

## Getting started
Requirements

* Command line (I'm using Git Bash from [Git for Windows](https://gitforwindows.org/))
* [Composer](https://getcomposer.org/download/)
* PHP 7.4 - See XAMPP below - `php` should be accesible from the command line
* [Symfony CLI](https://symfony.com/download)
* Local MySQL Database - See XAMPP below

I use [XAMPP](https://www.apachefriends.org/download.html), downloading version 7.4.x.

# Add user variables
Add `C:\xampp\php` to the PATH
* Start, search 'edit the system environment variables'
* "Environment Variables"
* User Variables > click `Path` > click 'edit'
* Add `C:\xampp\php`

## Project

To get the project started...

run (what this project uses)
```
symfony new --full symfony5-demo
```
This creates a new symfony project in a subfolder called `symfony5-demo`

Alternatively, this can be used for an API centric (no templating etc) project
```
symfony new symfony5-demo
```

## Project settings
copy `.env` to `.env.local`. To update any project settings, edit `.env.local`. This file is excluded from Git.
Use .env for default values. Do not store secrets here.

Uncomment the line
```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
```
Note: update serverVersion to your corresponding version. XAMPP reported 10.4.14-MariaDB to me

There is a secrets system which allows you to store secrets in the Git repository (protected by a uncommited private key).
I don't go into it here but I use it in other projects.

Now visit [/commits/main](/commits/main) to see the list of commits. The commit message contains the command or action taken and the resulting diff

## Running the webserver
You can configure Apache in XAMPP but I find it easier to use the Symfony CLI built-in

```
cd [root of project]
symfony serve
```
You can access the site on https://localhost:8000

Upon first run, follow the instructions to install to install the dev certificate (if you want or you'll get browser warnings)

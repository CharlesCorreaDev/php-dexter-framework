# Terminal Basics - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/introduction/terminal.html

---

# Terminal Basics

Get comfortable with the command line

- [Windows](docs__user-guide__quickstart__introduction__terminal.md#windows)
- [Opening the Terminal](#opening-the-terminal)
- [Navigating Directories](#navigating-directories)
- [macOS / Linux](docs__user-guide__quickstart__introduction__terminal.md#macos-linux)
- [Opening the Terminal](#opening-the-terminal-1)
- [Navigating Directories](#navigating-directories-1)
- [Commands You Will Need](docs__user-guide__quickstart__introduction__terminal.md#commands-you-will-need)
- [Next Steps](docs__user-guide__quickstart__introduction__terminal.md#next-steps)

[More...](#)

A terminal (also called a command line or shell) is a text-based interface for running commands on your computer. You will use it during installation and occasionally for maintenance tasks like running updates.

If you are already comfortable with the terminal, skip ahead to [Choosing a Text Editor](docs__user-guide__quickstart__introduction__text-editor.md).

## [#](#windows) Windows

### [#](#opening-the-terminal) Opening the Terminal

You have a few options:

- **Laragon Terminal**: If you use [Laragon  (opens new window)](https://laragon.org/), it includes a built-in terminal that is preconfigured with PHP and Composer. Click the **Terminal** button in the Laragon window.
- **Windows Terminal**: Search for "Terminal" in the Start menu. This is the modern terminal app included with Windows 10 and later.
- **WSL (Ubuntu)**: For a Linux-like experience on Windows, install [Windows Subsystem for Linux  (opens new window)](https://learn.microsoft.com/en-us/windows/wsl/install). This gives you a full Ubuntu terminal with native support for PHP, Composer, and DDEV.

### [#](#navigating-directories) Navigating Directories

Most commands run in the context of a directory (folder). Here are the commands you will use most:

**Print your current directory:**

```
cd
```

**List files and folders:**

```
dir
```

**Change directory:**

```
cd my-project
```

Use `cd ..` to go up one level.

Press the **Up Arrow** key to recall previous commands. Press **Tab** to autocomplete file and folder names.

## [#](#macos-linux) macOS / Linux

### [#](#opening-the-terminal-1) Opening the Terminal

**macOS**: Open **Terminal** from Applications → Utilities, or search for "Terminal" in Spotlight.

**Linux**: Open your distribution's terminal emulator, usually found in the system menu or by pressing `Ctrl+Alt+T`.

### [#](#navigating-directories-1) Navigating Directories

Most commands run in the context of a directory (folder). Here are the commands you will use most:

**Print your current directory:**

```
pwd
```

**List files and folders:**

```
ls
```

**Change directory:**

```
cd my-project
```

Use `cd ..` to go up one level.

Press the **Up Arrow** key to recall previous commands. Press **Tab** to autocomplete file and folder names.

## [#](#commands-you-will-need) Commands You Will Need

Throughout this guide, you will run commands that start with `php artisan` and `composer`. To confirm these are available on your system:

**Check PHP version:**

```
php -v
```

PHP 8.2 or later is required. If the command is not found, [download PHP from php.net  (opens new window)](https://www.php.net/downloads).

**Check Composer:**

```
composer
```

You should see a list of available commands. If Composer is not found, [install it from getcomposer.org  (opens new window)](https://getcomposer.org/download/).

Once both are available, you are ready to install October CMS.

## [#](#next-steps) Next Steps

Continue to [Choosing a Text Editor](docs__user-guide__quickstart__introduction__text-editor.md) to set up your code editor.

← [Welcome](docs__user-guide__quickstart__introduction__welcome.md)[Choosing a Text Editor](docs__user-guide__quickstart__introduction__text-editor.md) →

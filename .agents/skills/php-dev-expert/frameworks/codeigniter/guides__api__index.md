# Getting Started with REST APIs — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/guides/api/index.html

---

# Getting Started with REST APIs[](#getting-started-with-rest-apis "Link to this heading")

This tutorial walks you through building a simple RESTful API to manage books in CodeIgniter 4. You’ll learn to set up a project, configure a database, and create API endpoints, and what makes an API RESTful.

This tutorial will primarily focus on:

- Auto-routing (Improved)
- Creating JSON API endpoints
- Using the API ResponseTrait for consistent responses
- Basic database operations with Models

Tip

While we cover the basics of CodeIgniter, it is assumed that you have at least progressed through the [First App tutorial](guides__first-app__index.md).

## [Getting Up and Running](#id1)[](#getting-up-and-running "Link to this heading")

### [Installing CodeIgniter](#id2)[](#installing-codeigniter "Link to this heading")

```
composer create-project codeigniter4/appstarter books-api
cd books-api
php spark serve
```

Open your browser to `http://localhost:8080` and you should see the CodeIgniter welcome page.

Note

Keep the server running in one terminal. If you prefer, you can stop it anytime with `Ctrl`+`C` and start again with `php spark serve`.

### [Setting Development Mode](#id3)[](#setting-development-mode "Link to this heading")

Copy the environment file and enable development settings:

```
cp env .env
```

Open **.env** and make sure this line is **uncommented**:

```
CI_ENVIRONMENT = development
```

You can also use the spark `env` command to set the environment:

```
php spark env development
```

### [Configure SQLite](#id4)[](#configure-sqlite "Link to this heading")

We’ll use a single-file SQLite database under **writable/** so there’s no external setup.

Open **.env** and **uncomment** the database section, then set:

```
database.default.DBDriver = SQLite3
database.default.database = database.db
database.default.DBPrefix =
database.default.username =
database.default.password =
database.default.hostname =
database.default.port     =
```

CodeIgniter will automatically create the SQLite database file if it doesn’t exist, but you need to ensure that the **writable/** directory is writable by the web server.

Warning

On some systems you might need to adjust group/owner or use `chmod 666` temporarily during development. Never ship world-writable permissions to production.

At this point, you have a working CodeIgniter4 project with SQLite configured.

- The app starts with `php spark serve`
- `CI_ENVIRONMENT` is set to `development` in **.env**
- **writable/database.db** exists and is writable

### [What’s Next](#id5)[](#what-s-next "Link to this heading")

In the next section, we’ll enable auto-routing and create a simple JSON endpoint (`/api/pings`) to see how HTTP verbs map to controller methods in CodeIgniter.

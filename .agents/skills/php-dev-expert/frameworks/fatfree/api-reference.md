# API Reference | Fat-Free Framework for PHP

> **Fonte / Source:** https://fatfreeframework.com/3.9/api-reference

---

[edit](https://fatfreeframework.com/3.9/edit/api-reference/main)

# API Reference

Welcome to the API documentation. It's intended as a feature reference to give you more detailed information about working with F3.
You can also find extensive working examples in the [source code of the framework unit tests](https://github.com/f3-factory/fatfree-dev/tree/main/app).

Quick references are available for [System Variables](quick-reference.md#SystemVariables) and [Template Directives](quick-reference.md#TemplateDirectives).

### Framework Core

- [Base](base.md "The Base class represents the framework core")
- [Cache](cache.md "F3 Multi protocols Cache engine")
- [ISO](iso.md "The ISO class provides a list of ISO codes of languages  and countries")
- [Prefab & Registry](prefab-registry.md "Prefab is a factory wrapper for singleton classes")
- [View](view.md "The View is responsible for rendering PHP views in MVC parlance")
- [Preview](preview.md "The Preview class is a lightweight template engine class that extends the View class")

### Databases

- [Jig](jig.md "The Jig class provides a simple way to store arrays of data into flat ASCII files")
- [Mongo](mongo.md "The Mongo class is a lightweight MongoDB wrapper")
- [SQL](sql.md "The SQL class provides a lightweight and consistent interface for accessing SQL databases")

### Data Mappers

- [Cursor](cursor.md "This Cursor class is an abstract foundation of an Active Record implementation, that is used by all F3 Data Mappers")
- [Basket](basket.md "Session-based pseudo-mapper")
- [Jig Mapper](jig-mapper.md "The Jig Object-Document-Mapper is an implementation of the abstract Active Record Cursor class")
- [Mongo Mapper](mongo-mapper.md "The Mongo Object-Document-Mapper (ODM) is an implementation of the abstract Active Record Cursor class")
- [SQL Mapper](sql-mapper.md "The SQL Object-Relational-Mapper is an implementation of the abstract Active Record Cursor class")

### Templating

- [Markdown](markdown.md "This is F3's own implementation of Markdown")
- [Template](template.md "F3's own lightning fast and extendable template engine gives you all the flexibility you need for modern and clean templating")

### Web Services

- [Web](web.md "The Web class and its descendants Geo and Pingback, contain several helpers to interact with HTTP clients and servers")
- [Geo](geo.md "The Geo plugin gives you a handful of location-based features")
- [OAuth2](oauth2.md "Lightweight OAuth2 client")
- [OpenID](openid.md "The OpenID class is a OpenID consumer")
- [PingBack](pingback.md "Pingback 1.0 protocol (client and server) implementation")
- [SMTP](smtp.md "The SMTP class is a SMTP plug-in")
- [Google Static Maps](google-static-maps.md "Google Static Maps API v2 plug-in")
- [WebSocket](websocket.md "RFC6455 Compatible WebSocket Server")

### Misc

- [Audit](audit.md "The Audit class is a data validator")
- [Auth](auth.md "The Auth class is used to authenticate against several storages")
- [Bcrypt](bcrypt.md "The Bcrypt plugin is a secure and lightweight password hashing library")
- [Image](image.md "The Image class offers a bunch of image processing features")
- [Log](log.md "This is the F3 custom Logger class")
- [Magic](magic.md "A PHP magic wrapper")
- [Matrix](matrix.md "The matrix class offers some generic array utilities")
- [Session](session.md "The SESSION handlers of the framework")
- [Test](test.md "The Test class is a simple unit testing stack, where you can add multiple tests to and serve out their results")
- [UTF](utf-unicode-string-manager.md "The UTF class is an utility class that eases the handling of Unicode strings")

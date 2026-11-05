# Plugins | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/category/plugins-1

---

[## ðï¸ Overview

Plugins are "plug-and-play" applications that extend the functionality of Blesta. This document explains how to design and develop plugins, and highlights the roles plugins may assume when rendering data.](dev__developers__plugins.md)

[## ðï¸ Config

Plugins should include a config.json file, which defines basic configuration settings for the plugin.](dev__developers__plugins__plugin-configuration.md)

[## ðï¸ Creating a Plugin

Plugins can do just about anything. Create custom cron tasks, listen for events, create pages, create widgets, extend the API, etc., etc. If it's not aÂ Module or a Payment Gateway, it's a plugin. So let's dig in.](dev__developers__plugins__getting-started.md)

[## ðï¸ Actions

Most plugins need to be displayed somewhere in the interface. Either through a link somewhere in the navigation, or as a widget on a certain page. This is accomplished by having the plugin register actions.](dev__developers__plugins__plugin-actions.md)

[## ðï¸ Cards

Plugins can define info cards in the client profile, both in the client area and in the staff area.Â These cards are quite flexible which makes them quite useful, they can be anything from a simple counter to a complex card with custom HTML code.](dev__developers__plugins__plugin-cards.md)

[## ðï¸ Widgets

A widget is an interface element that can contain just about anything. To help create widgets we've designed the Widget, or WidgetClient helper, which is automatically loaded for all views created in a controller that inherits (either directly or indirectly) from AppController. The Widget helper is loaded for the staff interface, and the WidgetClient helper is loaded for the client interface. The two are almost identical, except that the WidgetClient helper doesn't provide some additional options. In all of the examples below simply replace Widget with WidgetClient if working in the client interface.](dev__developers__plugins__widgets.md)

[## ðï¸ Service Management Tabs

Summary](dev__developers__plugins__service-management-tabs.md)

[## ðï¸ Cron Tasks

In some cases plugins need to execute tasks on a regular basis. For example, if your plugin needs to send an email to a fulfillment center after an invoice is paid you'll want to create a cron task for that.](dev__developers__plugins__plugin-cron-tasks.md)

[## ðï¸ Plugin Events

Some plugins may need to be invoked to perform certain tasks immediately before or after an action has occurred. For this reason plugins may register plugin events. These Events automatically initialize the plugin and invoke the desired event handler (i.e. callback method) when triggered. All event handlers accept a single \Blesta\Core\Util\Events\Common\EventInterface (previously an EventObject). parameter.](dev__developers__plugins__plugin-events.md)

[## ðï¸ Extending the API

Plugins may extend the API simply by offering public model methods. Take for example a plugin called FooBar. The FooBar plugin may have the following model:](dev__developers__plugins__extending-the-api.md)

[## ðï¸ ACL

The Access Control List (ACL) is made available to plugins so access may be restricted and configured under [Settings] > [System] > [Staff] > Staff Groups.](dev__developers__plugins__acl.md)

[## ðï¸ Email

Plugins can create and send emails. Using Blesta's built-in Emails model makes it super easy to send and log email communications. There are two distinct types of emails, template and custom.](dev__developers__plugins__email.md)

[## ðï¸ Database Access

Database Access is made available through the use of the Record component, which utilizes PHP's PDO data-access library. This section provides an overview of the Record component and its common uses.](dev__developers__plugins__database-access.md)

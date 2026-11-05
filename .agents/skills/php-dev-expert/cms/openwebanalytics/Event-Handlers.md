# Event Handlers · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Event-Handlers

---

*Event handlers* are special classes that allow developers to extend the functionality of OWA by hooking into the various [events](Event-Types.md) that are geenrated by the framework and it's modules.

Event handlers essentially allow a function or a class within your module to listen for [events](Event-Types.md). Event handlers are typically used to log information contained in events to OWA's database or to perform actions such as sending email or even generating new events of a different type.

OWA's event handling system utilizes the "observer" design pattern allowing for Events to be handled by more than one handler and handlers to listen for events of more than one type.

## Registering Event Handlers

Event handlers are registered by [modules](Creating-A-New-Module.md) and listen for events of particular types.

To register an event handler use the `registerEventHandler` method in the constructor of your module like so:

```
$this->registerEventHandler('install_complete', $someobject, 'installCompleteHandler');
```

This example registers a new handler that will listen for events of type "install\_complete". The second function parameter is the object that houses the handler code, while the third parameter is the method name of that object that should be called.

When the installCompleteHandler method is called it will be passed a single `\OWA\Module\Base\Classes\Event` object to operate on. (The old global name `owa_event` still resolves through the 1.x compatibility aliases, and is removed in 2.0.)

## Event Dispatching

OWA utilizes the observer pattern to facilitate communicate among it's installed modules.

Classes can generate events and use owa's event dispatch system to " notify" other modules that wish to filter them or perform actions.

### Accessing the event dispatcher

In order to dispatch events you must first retrieve the event dispatcher class. This can be done using the core API method `getEventDispatch` like so:

```
$dispatcher = \OWA\Core\CoreAPI::getEventDispatch();
```

## Creating New Events

Sometimes as the result of handling one event you will want to create another. This is accomplished by creating a new event object and setting the event's type and various properties. For example:

```
$dispatch = \OWA\Core\CoreAPI::getEventDispatch();
$event = $dispatch->eventFactory();
$event->set('name', 'value');
```

## Dispatching an event

Once an event has been created you can dispatch it in several different ways.

### Notify

The notify method will dispatch the event to all handlers in the order that they were registered. For example:

```
$dispatch = \OWA\Core\CoreAPI::getEventDispatch();
$event = $dispatch->eventFactory();
$event->setEventType('foo');
$event->set('name', 'value');
$dispatch->notify($event);
```

### Async Notify

Asynchronous notification is possible using the `asyncNotify` method. This method will dispatch events to an [asynchronous event queue](Event-Queueing.md) where it will be processed by a separate php process. This mode requires that [Event Queueing](Event-Queueing.md) mode be turned on in OWA's configuration. If event queueing mode is not active this method will fall back to using the `notify` method instead.

It is highly encouraged that you use this method to dispatch tracking events that require write to the database.

Example:

```
$dispatch = \OWA\Core\CoreAPI::getEventDispatch();
$dispatch->asyncNotify($event_obj);
```

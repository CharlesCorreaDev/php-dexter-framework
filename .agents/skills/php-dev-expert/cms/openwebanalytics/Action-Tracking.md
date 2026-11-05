# Action Tracking · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/Action-Tracking

---

*Action Tracking* provides a way to track actions that users perform on your web site. An action could anything ranging from the completion of a web form to clicking on a particular link or UI control.

Action tracking can be triggered from OWA's javascript tracker, or server-side with the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk). Actions are reported separately from page views and have their own [metrics & dimensions](Metrics-_26-Dimensions.md).

## Properties

Actions have a few properties that you can associated with them during tracking.

### Action Names

Actions can be given any name you want. Each unique action name will result in a unique type of action. For example let's pretend that we have a an action called "Recipe Print" which would be triggered whenever a users clicked on the print icon on one of our pretend recipe web pages.

### Action Groups

It is possible to group actions for purposes of reporting. It might be helpful to group on "Recipe Print" action under the action group called "Cooking".

### Action Labels

*optional*

Sometimes just looking at actions by name or group is does not provide enough detail. That's where labels come in. For example, let's say that we wanted to see which recipe's were being printed. To accomplish this we could assign a label to the action. In this case the label could be the name title of the recipe, say "Italian Chicken Soup".

### Numeric Value

*optional*

Actions can have a numeric value associated with them. This value will display summarized in reporting.

## Tracking Actions via Javascript

See the [Javascript Tracker](Javascript-Tracker.md).

## Tracking Actions via PHP

Server-side tracking is provided by the [OWA PHP SDK](https://github.com/Open-Web-Analytics/owa-php-sdk),
which is a separate package — OWA itself no longer exposes a PHP `trackAction`
method. See the SDK's own documentation for its API.

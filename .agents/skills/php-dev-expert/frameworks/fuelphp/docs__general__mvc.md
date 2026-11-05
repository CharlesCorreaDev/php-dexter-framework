# Model-View-Controller - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/mvc.html

---

## Model-View-Controller (MVC)

### What is MVC?

MVC is an approach to separating your code depending on what role it plays in your application. In the
application flow it starts with a controller that is loaded. That Controller executes a method which retrieves
data using Models. Once it is done the controller decides what View to load, which contains the output your
visitors get to see.

### Controllers

Controller classes are located in `APPPATH/classes/controller`

Fuel's routing decides based on the requested URL what controller to load and what method to call upon it.
This is where your application starts working. The Controller decides what actions to take, what to do with any
user input, what data gets manipulated and which View is shown to the user. The Controller does none of these
things itself however; it calls upon Models and Classes to do the work.

Read more about [Controllers](docs__general__controllers__base.md).

### Models

Model classes are located in `APPPATH/classes/model`

Whenever data needs to be retrieved, manipulated or deleted this should always be done by a model. A Model
is a representation of some kind of data and has the methods to change them. For example: you never put SQL
queries in a Controller, those are put in the Model and the Controller will call upon the Model to execute
the queries. This way if your database changes you won't need to change all your Controllers but just the
Model that acts upon it.

Read more about [Models](docs__general__models.md).

### Views

Views are located in `APPPATH/views`

Views contain your HTML, which should never be found in your Controllers or any other class that is not
specifically meant to create output. By separating your layout from your logic you ensure that when you decide
to change your layout you only have to change the views and won't have to care about the Controllers.  
Views should thus contain little more than `echo` and `foreach` usage of PHP.

Read more about [Views](docs__general__views.md).

### Presenters

Presenter classes are located in `APPPATH/classes/presenter`

Once your application gets more complex you'll discover that it gets hard to decide if a piece of logic
really belongs in the Controller, what if it is very specifically about the View and has little to do with your
application logic? This is where Presenters come in; they are the glue between your controllers and your
views.

Read more about [Presenters](docs__general__presenters.md).

# Generate - Oil Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/oil/refine.html

---

## Refine

Refine is a tool that lets you run tasks. The idea behind the name is you "refine" Oil to make Fuel. You can read more
specifically about [Tasks](docs__general__tasks.md) to see how they are made and what they can be used for.

### Included tasks

FuelPHP comes with several tasks to make your life just that little bit easier:

- **install**: Allows you to install a new deployment of FuelPHP. Requires `git` to clone the repositories.
- **migrate**: Run database migrations from the commandline.
- **session**: Allows you to manipulate the database table required for the Session class.
- **fromdb**: Allows you to generate models, migrations, scaffolding or admin code from existing database tables.

All tasks will provide some help information when you run them with the help command:

```
$ php oil refine <taskname>:help
```

or

```
$ php oil refine <taskname --help
```

### Example

An example task called robots can be found in `fuel/app/tasks/`.

```
$ php oil refine robots

					"KILL ALL HUMANS!"
			          _____     /
			         /_____\
			    ____[\*---*/]____
			   /\ #\ \_____/ /# /\
			  /  \# \_.---._/ #/  \
			 /   /|\  |   |  /|\   \
			/___/ | | |   | | | \___\
			|  |  | | |---| | |  |  |
			|__|  \_| |_#_| |_/  |__|
			//\\  <\ _//^\\_ />  //\\
			\||/  |\//// \\\\/|  \||/
			      |   |   |   |
			      |---|   |---|
			      |---|   |---|
			      |   |   |   |
			      |___|   |___|
			      /   \   /   \
			     |_____| |_____|
			     |HHHHH| |HHHHH|
```

Not the most useful example in the world, but it works as a useful example. But you can use
the [Cli class](docs__classes__cli.md) to make things more interactive or just run basic model
interaction for cron jobs.

# Spark Commands — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/cli/spark_commands.html

---

# Spark Commands[](#spark-commands "Link to this heading")

CodeIgniter ships with the official command **spark** and built-in commands.

## [Running Commands](#id1)[](#running-commands "Link to this heading")

### [Running via CLI](#id2)[](#running-via-cli "Link to this heading")

The commands are run from the command line, in the project root directory.
The command file **spark** has been provided that is used to run any of the CLI commands.

#### [Showing List of Commands](#id3)[](#showing-list-of-commands "Link to this heading")

When called **spark** without specifying a command, a simple help page is displayed
that also provides a list of available commands and their descriptions, sorted by
categories:

```
php spark
```

##### spark list[](#spark-list "Link to this heading")

`php spark` is the exactly same as the `list` command:

```
php spark list
```

You may also use the `--simple` option to get a raw list of all available commands,
sorted alphabetically:

```
php spark list --simple
```

#### [Showing Help](#id4)[](#showing-help "Link to this heading")

You can get help about any CLI command using the `help` command as follows:

```
php spark help db:seed
```

Since v4.3.0, you can also use the `--help` option instead of the `help` command:

```
php spark db:seed --help
```

#### [Running a Command](#id5)[](#running-a-command "Link to this heading")

You should pass the name of the command as the first argument to run that command:

```
php spark migrate
```

Some commands take additional arguments, which should be provided directly after the command, separated by spaces:

```
php spark db:seed DevUserSeeder
```

For all of the commands CodeIgniter provides, if you do not provide the required arguments, you will be prompted
for the information it needs to run correctly:

```
php spark make:controller

Controller class name :
```

#### [Suppressing Header Output](#id6)[](#suppressing-header-output "Link to this heading")

When you run a command, the header with CodeIgniter version and the current time
is output:

```
php spark env

CodeIgniter v4.3.5 Command Line Tool - Server Time: 2023-06-16 12:45:31 UTC+00:00

Your environment is currently set as development.
```

You may always pass `--no-header` to suppress the header output, helpful for parsing results:

```
php spark env --no-header

Your environment is currently set as development.
```

### [Calling Commands](#id7)[](#calling-commands "Link to this heading")

Commands can also be ran from within your own code. This is most often done within a controller for cronjob tasks,
but they can be used at any time. You do this by using the `command()` function. This function is always available.

```
<?php

echo command('make:migration TestMigration');
```

The only argument is string that is the command called and any parameters. This appears exactly as you would call
it from the command line.

All output from the command that is ran is captured when not run from the command line. It is returned from the command
so that you can choose to display it or not.

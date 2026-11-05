# CLI Overview — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/cli/cli_overview.html

---

# CLI Overview[](#cli-overview "Link to this heading")

CodeIgniter 4 provides built-in command **spark** and useful commands and library.
You can also create spark commands, and run controllers via CLI.

## [What is the CLI?](#id1)[](#what-is-the-cli "Link to this heading")

The command-line interface is a text-based method of interacting with
computers. For more information, check the [Wikipedia
article](https://en.wikipedia.org/wiki/Command-line_interface).

## [Why Run via the Command-Line?](#id2)[](#why-run-via-the-command-line "Link to this heading")

There are many reasons for running CodeIgniter from the command-line,
but they are not always obvious.

- Run your cron-jobs without needing to use *wget* or *curl*.
- Make interactive “tasks” that can do things like set permissions,
  prune cache folders, run backups, etc.
- Integrate with other applications in other languages. For example, a
  random C++ script could call one command and run code in your models!

## [The Spark Commands](#id3)[](#the-spark-commands "Link to this heading")

CodeIgniter ships with the official command **spark** and built-in commands.

You can run the spark and see the help:

```
php spark
```

See the [Spark Commands](cli__spark_commands.md) page for detailed information.

## [The CLI Library](#id4)[](#the-cli-library "Link to this heading")

The CLI library makes working with the CLI interface simple.
It provides easy ways to output text in multiple colors to the terminal window. It also
allows you to prompt a user for information, making it easy to build flexible, smart tools.

See the [CLI Library](cli__cli_library.md) page for detailed information.

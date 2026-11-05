# Contribute - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/contribute.html

---

## Contribute

### Introduction

Fuel is a community driven framework and is open for contributions from anyone who feels they
can improve it or add a feature that will bring the framework to a higher level. There
are multiple forms in which this can be achieved. From writing tutorials, writing and
releasing packages, to contributing to the official parts of Fuel (Core, Orm, Docs, etc..).

### Contribute code

When you encounter a bug or see one in the issues list that you can or have resolved,
and you want to contribute it back to the framework. Use GitHub to send a pull request.
Depending on which version you are running the branch you pull on. Follow the next couple
of steps to when you request a pull:

- **Is the release I am currently using still supported?**  
  If not, upgrade to the current release, and see if the bug is still exists.
- **Is the bug still present in the current release?**  
  If so, upgrade to the current develop branch, and see if the bug is fixed there.
- **If not, checkout the current development branch on your local repository**  
  `$ git checkout -b 1.9/develop origin/1.9/develop`
- **Fix the bug and commit it in your local repository**  
  Use a descriptive and understandable commit message, and make sure you sign it off.  
  `$ git commit -m "This is my awesome description."`
- **Push it to your GitHub account**  
  `$ git push`
- **Request the pull**  
  Request the pull on the same branch as you are on (= the current develop branch).
  Use the "update commit range" interface to direct you request to the correct branch.
  Pull requests are only accepted on the current release develop branch (1.9/develop).
- **Wait for your moment of fame**  
  As soon as your request is merged you'll be part of the contributors list of Fame.

You can find this procedure described in more detail on [Github](https://github.com/fuel/fuel/wiki/Contributing).

### Non-bug contributions

Non-bug contributions are new features, optimizations and all other alterations. All of these request must be made on the
latest development branch. So pull the 1.9/develop branch, make the changes and request a pull.

For large and/or completely new features, or features that will take some time to complete, it might be wise
to setup a separate feature branch. Contact one of the core developers via email or on IRC to discuss the options.

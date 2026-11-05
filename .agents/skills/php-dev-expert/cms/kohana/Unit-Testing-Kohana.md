# Unit Testing Kohana · kohana/kohana Wiki · GitHub

> **Fonte / Source:** https://github.com/kohana/kohana/wiki/Unit-Testing-Kohana

---

## Requirements

- [PHPUnit](http://phpunit.de) 3.4.x
- The [unittest](http://github.com/kohana/unittest) module
- [Phing](http://phing.info)

## How to use the tests

Open a terminal/shell, cd into your kohana directory and run `phing test`. If everything's working then you should see something along the lines of `OK (520 tests, 1939 assertions)`.

If the message says `Ok but skipped or incomplete tests` then this just means that some tests were unable to run
on your system or their implementation is not quite finished.

If instead phpunit complains that some tests have failed create a new issue on [the tracker](http://dev.kohanaframework.org) and paste the output (including the error) in the issue.

## Guidelines for writing unit tests

- Use @covers - This helps provide proper code coverage
- Use providers when appropriate - This helps keep your tests simple and makes it easy to add new test cases.
- When a new feature of bug fix is applied, create a test for it. This may only consist of adding a new set of test data in a provider.

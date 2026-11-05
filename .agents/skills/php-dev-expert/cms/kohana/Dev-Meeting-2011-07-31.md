# Dev Meeting 2011 07 31 · kohana/kohana Wiki · GitHub

> **Fonte / Source:** https://github.com/kohana/kohana/wiki/Dev-Meeting-2011-07-31

---

Attendance: Jeremy, Isaiah, Kiall, Zeelot, Matt

## 3.3 related stuff

Hold off on 3.3 for a few months

Start cleaning up the code using php code sniffer <https://github.com/kohana/coding-standards>

Should adopt agile workflow:
Uses points scale for estimating work required, 1, 2, 3, 5, 8

```
1 - Simple 1 line fix
2 - Few simple fixes
3 - Writing a class
5 - Writing many classes
8 - Kohana 4.0
```

Will help us note how much work we can do per release

Jeremy will assign points to tickets, or we can have another meetup in a few weeks to go through and work out difficulty.

Spend a month or so going through the codebase cleaning up and writing unit tests for 3.2

## Kohana modules website

Isaiah said he’d contact Andrew Hutchings about using kohana-modules.com for kf.org.
Some kind of json file to list dependencies on say kohana, other modules etc.

[Issue #4164](http://dev.kohanaframework.org/issues/4164)

## SSO for vanilla/redmine - Kiall

There will be a branch on the kohanaphp.com repo for sso with redmine once Kiall’s done cleaning up... Next day or so.

Using an sqlite file for storing usernames/passwords

[Issue #4159](http://dev.kohanaframework.org/issues/4159)

## Blog site - Zeelot

Do it in a branch of kohanaphp.com using GitHub pages. Jekyll ?

[Issue #4166](http://dev.kohanaframework.org/issues/4166)

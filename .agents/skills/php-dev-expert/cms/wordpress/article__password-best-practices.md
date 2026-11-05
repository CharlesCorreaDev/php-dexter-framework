# Password Best Practices – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/password-best-practices/

---

# Password Best Practices

## In this article

Table of Contents

- [More about special characters](#more-about-special-characters)
- [Things you should absolutely avoid](#things-you-should-absolutely-avoid)
- [Automatically generated passwords in WordPress](#automatically-generated-passwords-in-wordpress)
- [Keeping track of your passwords](#keeping-track-of-your-passwords)
- [Other security recommendations](#other-security-recommendations)
  - [Two factor authentication](#two-factor-authentication)
  - [Usernames](#usernames)
- [Changelog](#changelog)

[Back to top](#wp--skip-link--target)

Securing your WordPress starts with a strong password. A strong password is complex and elaborate. It isn’t easy to guess since it doesn’t contain recognizable words, names, dates or numbers. You shouldn’t pick a password containing less than 20 characters. It can be hard though to remember a random string of letters, numbers and special characters. But in general, the more characters and complexity, the better.

Here are some suggested guidelines when creating a strong password:

- At least 20 characters (preferably more)
- Use lowercase and uppercase
- Containing numbers
- Containing special characters such as ``` `!"#$%&'()*+,-./:;<=>?@[]^_{}|~`` ```

## [More about special characters](#more-about-special-characters)

- a backslash `\` is not allowed
- many typographical characters like elegant quotes, ligatures, letters with accents and mathematical symbols are allowed (by WordPress) in passwords, but not recommended. Some characters are hard to recognize. Many characters are harder or sometimes impossible to type on a device. The characters can not be substituted by simpler version, it has to be exactly that character
- a space is allowed, but not recommended at the start of a password

**Example**

A good password that upholds all of the guidelines above could be:

`As32!KoP43??@ZkI??L0d`

## [Things you should absolutely avoid](#things-you-should-absolutely-avoid)

Names or words that can be easily linked to you:

- The name of your partner or kids
- The name of your pet
- The name of your company
- The name of your favorite sports team or car brand
- The year in which you were born
- Your birthday

All these items are personal (mostly public) information and thus possible risks for social engineering. So avoid these at all costs!

**Example**

- If your name is John Rogers and you were born in 1976, `JohnRogers1976` would be a really bad idea for a password.

Generic password elements:

- Number sequences like “123” or “54321”
- Using generic words like “admin”, “administrator”, “pass”, “password”, “blue”, “house”…

These elements are often the first terms that are used by malicious people or software when attempting to brute force your password, so should be avoided!

**Example**

Obviously, the password examples below are horrible passwords and NOT SECURE:

- MattMullenweg2018
- admin123
- Password1!

You should also avoid using the same password on multiple sites or accounts.

## [Automatically generated passwords in WordPress](#automatically-generated-passwords-in-wordpress)

When you make a new account for your site or reset your password, a password will be suggested for you (or you can use the button “Generate password”). These strong passwords contain 24 characters, numbers, letters, capitals, and special characters.

## [Keeping track of your passwords](#keeping-track-of-your-passwords)

Since complex passwords are a real necessity these days, it can be a real burden to remember every single password. Fortunately, password managers can help users keep track of their different passwords without resorting to using the same password on multiple sites. Password managers act as a vault for your passwords, secured by one (complex) master password. Many also have functionality to automatically (or on your command) enter your stored password for you, via browser extensions or desktop applications. Using a password manager means you only need to remember your one master password to access all of your other passwords.

A list of password managers and their features is available on <https://en.wikipedia.org/wiki/List_of_password_managers>. Most browsers can store and synchronize your accounts and passwords.

## [Other security recommendations](#other-security-recommendations)

### [Two factor authentication](#two-factor-authentication)

Another great way to keep your WordPress access more secure is to set up two factor authentication (2FA). Currently, this requires installation of a third-party plugin. To set up 2FA look for plugins in the plugins directory with tags like “2FA”, “two factor authentication”, or “two step”.

### [Usernames](#usernames)

A common method of brute force hacking is to use a “dictionary” of common username and password combinations. For this reason, it is often recommended to avoid common usernames such as “admin”.

## [Changelog](#changelog)

- Created 2018-10-27
- Updated 2023-05-23 with additional recommendations on automatically generated passwords, 2FA and Usernames, and minor grammatical/clarity modifications.

## Was this article helpful? How could it be improved? [Cancel reply](article__password-best-practices.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fpassword-best-practices%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

October 27, 2018

Last updated

August 7, 2026

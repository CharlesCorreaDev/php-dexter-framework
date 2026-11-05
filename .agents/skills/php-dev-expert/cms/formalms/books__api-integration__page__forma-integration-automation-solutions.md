# Forma Integration & Au... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/api-integration/page/forma-integration-automation-solutions

---

# Forma Integration & Automation solutions

This article provides an overview of the main native solutions to integrate Forma LMS with external applications through different authentication and data exchange solutions

## API

The “Application Programming Interface” is a set of procedures that programmers can use to interoperate with the application by adding/editing/deleting data from another application (i.e., to update user accounts information from an external HR software).

 Forma LMS is provided with an extensive set of API that will help developers interact con almost any part of the application.

[Full Forma API Guide](https://docs.google.com/document/d/1bbNL7AR_2gbescLkgBIL3Cu7BZ9tZLky9spM3bfkZjA/edit?usp=sharing)

## SSO

This solution allow users logged to another system to seamlessly log in to Forma, without entering their password. SSO requires that a user with the same username is already present in Forma: the list of users must manually be preloaded in Forma, or synchronized via API or I/O task

The SSO can be activated and configured under

Main > Configuration > Settings > API & SSO

[Learn More](books__api-integration__page__sso-format.md)

## LDAP Authentication

LDAP is a protocol allowing integration with Windows Active Directory services.

Forma LMS provides native support for LDAP authentication. LDAP user synchronization is not natively supported.

Check the [Forma User Reference Guide](books__reference-guide__page__system-configuration.md) for details

## I/O Task

this feature allows the creation in Forma of scheduled data import/export operations in text/csv files. The exported files and the files to be imported are saved in the Forma filesystem. This feature is located in administration under:

*Admin > Settings > System Configuration > I/O Tasks*

[Full Forma Connectors Guide](https://drive.google.com/file/d/1TWs_QHcnWkEQaKKFU3_-SFTJTK2Lz5Mk/view)

## Report Scheduler

any report can be scheduled and sent in file format to some user email accounts. With some customization, the report file could be generated and stored on filesystem to be accessed by external applications. Tasks need to be launched via server chron/job.

Entrar em modo de seleção de seção

# I/O Tasks Connectors | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/io-tasks-connectors

---

# I/O Tasks Connectors

The I/O (Input Output) system allows Forma LMS data to be exported to and imported from other applications.

It is available under:

*Admin > Settings > System Configuration > I/O Tasks*

It provides the functionalities to configure and schedule a set of tasks for reading and writing .csv or .xml files to be exchanged in a shared FTP folder.

Basic workflow for managing import/export of data in automatic mode:

- Activities are scheduled in the administration area using the I/O (input/output) module, which is located in admin/main/configuration/IO task
- .csv files are placed in the files/common/iofiles directory by Forma or third-party applications through FTP access
- Import or export tasks are performed using Cron or a similar scheduler

#### Examples of usage

- **Importing user lists** (e.g. filename users\_aaaammdd.csv) User ID, Passwords (e.g. “john.doe”, “pippo”). Many other cataloguing fields can be added. If these are to be managed through “drop-down menus” then the fixed fields must be “preloaded” in the LCMS system. If authentication is managed through systems such as LDAP, it is not necessary to import the passwords.
- **Importing course lists** (e.g. filename courses\_aaaammdd.csv) Course code, Course name (e.g. “001”, “Maths”). Other fields can be added to the .csv file, such as: Difficulty, Course status, Subscription policies, Course language, Start date, End date, Course duration and Estimated time.
- **Importing a list of users to be enrolled in courses** (e.g. filename AAAMMDDusercourses\_data.csv) User ID, Course code (e.g. “john.smith”, “001”). An optional field may also be added for the user level in the course. If this is not specified, the user will be listed as a student. 1 Ghost, 2 Guest, 3 Student, 4 Tutor, 5 Mentor, 6 Teacher, 7 Administrator.
- **Export a list of users** and their status on courses

#### Tasks configuration

Three steps to create a task and automate some activity:

1. Create a CONNECTOR
2. Create a CONNECTION
3. Create and schedule a TASK

NOTE  
Here below a brief general description of the three features, for further details and examples please refer to the **[Extended Connectors Guide](books__api-integration__page__forma-integration-automation-solutions.md#bkmrk-i%2Fo-task)**

## Connectors

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/r51image.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/r51image.png)

Creating a connector means to activate it and make it operational (there is a file that manages a certain type of data)

There are pre-programmed tasks files that perform the following activities:

- Import/Export organization chart structure (connector.doceboorgchart.php);
- Import/Export organization chart structure from a XML file (connector.xmlorgchart.php);
- Import/Export user-course relation (connector.docebocourseusers.php);
- Import/Export course list (connector.docebocourses.php);
- Import/Export SAP HR-compatible course list (connector.coursesap.php);
- Import/Export course report (connector.docebocoursereport.php);
- Import/Export CSV file (connector.csv.php);
- Import/Export Docebo users(connector.docebousers.php);
- Import/Export users report (connector.userreport.php);

## Connections

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/wFQimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/wFQimage.png)

Creating a connection means to assign a certain task to a connector, namely where to write or retrieve certain data, whether these are read from a file or stored in a DB.

## Tasks

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/k3nimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/k3nimage.png)

To create a task means to associate the source connector to a destination connector and explain where to store (importing or exporting) certain data. For instance, writing data on a CSV file or a database beginning with data in another database or CSV file.

Entrar em modo de seleção de seção

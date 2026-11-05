# Importing users with I... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/tutorials/page/importing-users-with-io-tasks

---

# Importing users with I/O Tasks

## Create the Connectors

Go to Admin > Settings > System Configuration > I/O TAsk

And in the "Connectors" tab create two connectors:

- connector.csv.php
- connector.formausers.php

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/image.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/image.png)

## Create the Connections

In the "connections" tab and create a "connection" for each connector, choosing from the dropdown list (1)

Once the connections are created, you will be able to edit them from this page (2)

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/Mdximage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/Mdximage.png)

### Create a Read connection

Configure the connection to match your criteria:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/zSfimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/zSfimage.png)

Available options are pretty self-explanatory, but pay special attention to these:

- **File pattern**: insert the exact file name (if you are overwriting your file every time), or a pattern for the file name. (if you are uploading a new file every time, i.e. adding a timestamp to the filename like "user\_list\_20250731\_091334.csv")  
  The root folder for file exchange will always be /files/common/iofiles
- **Fields definition method**: based on your selection, in the following configuration step you will be prompted to enter the fields name, or they will be created based on a file already available in the FTP folder
- **Subfolder**: set a subfolder to read the file from (or to write to, in case you are using the connector to export something)

### Create a Write connection

#### Connection Setup

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/4Zwimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/4Zwimage.png)

As for the previous connector, available options are pretty self-explanatory, but pay special attention to these:

- **Send Notify**: sends the default notification with login cedentials to all the updated users

Since Forma 4.1.19 the behaviour has been fixed to send credentials only to newly registered users

- **Canceled users**: define the type of action to take on existing users that have been removed from the file. You will be able to decide whether to apply or not this action during the task scheduling step.

It's strongly recommended to leave this option to "suspend"

- **Reset field if not set**: define what to do when a record contains empty fields
  - Yes: existing user data will be cleaned
  - No: existing user data will be kept
- **Use default password**: set a default password for created users. Existing users passwords will be kept anyway

#### Select a root node for importing users

Select a root node for the import procedure: users will be imported/updated/suspended starting from the selected orgchart node

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/Ie9image.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/Ie9image.png)

It is recommended to always set a root node for this kind of task. Do not use the orgchart root to avoid accidentally suspending administrators or other users not included in the file

## Setup the Task

### Select the Read/Write connectors

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/sfBimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/sfBimage.png)

### Configure the import schema

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/hUHimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/hUHimage.png)

### Schedule the activity

Define scheduling and type of import:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/r6Rimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/r6Rimage.png)

## Running the import task

### Launch manually

From the task manager you will be able to manually launch the import activity:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2025-08/scaled-1680-/0Ieimage.png)](https://docs2.formalms.org/uploads/images/gallery/2025-08/0Ieimage.png)

### Cron schedule

Setup a cron job on your server to automatically run the I/O task by calling the file /cron/cron.iotasks.php

Entrar em modo de seleção de seção

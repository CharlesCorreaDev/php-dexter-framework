# Course Report | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/course-report

---

# Course Report

## Overview

The **Course Report Module** extends Forma LMS reporting capabilities by centralizing all course-related tracking data into a single, cohesive view. It enables administrators and trainers to analyze user progress, completion status, and performance at both course and participant level, supporting more informed decision-making. Built on the platform’s flexible reporting system, it allows customizable filters, detailed data selection, and export options. This module is designed to simplify monitoring course activities and improve the efficiency of training evaluation processes.

### Upgrading from Forma 4.1.x

This module has been introduced with Forma LMS 4.2. If you are upgrading from older forma versions, this single module will replace all the following teacher area features:

- [Gradebook](books__reference-guide__page__gradebook.md)
- [User Stats](books__reference-guide__page__course-stats.md)
- [Learning Objects Stats](books__reference-guide__page__course-stats.md)
- [Usage Stats](books__reference-guide__page__course-stats.md)
- [User/Objects Grid](books__reference-guide__page__userobjects-grid.md)

During the upgrade process all these features will be automatically removed both from the course menus and from the menu templates in admin area. A link to the new module will be automatically created in the same menu area both for course menu and menu templates. trying to migrate the same menu permission for administrative roles as the old modules.

Permissions eventually set to users enrolled with the role of student, ghost or guest will be removed.

Check your menus item after upgrade. In case the new module is not present in a course, **just re-apply to the course the menu template**, making permissions changes if needed. View the [menu management documentation](books__reference-guide__page__manage-menu.md) for details.

## Features

### Dashboard

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/image.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/image.png)

1. **Filters Bar**: allow filtering the below data by edition or course group. Not displayed if groups or editions are not configured for this course
2. **Users status Chart**: Total number of enrolled users, and pie chart showing the amount of users for each status. Mouse over each segment to see the number of users.
3. **Course Info**:
   - Start/End date, as set in the main course options. For classroom courses will show the dates set for the master course
   - Days Left: counts remainig days from today until the end date of the course. Only shown if the end date for the course is set.
   - Learning Objects: total number of LO in this course
4. **Quick Search by User**: select a specific user or just start writing a username, and click the submit button to directly see his report details
5. **Quick Search by Learning Object**: select a specific Learning Objector just start writing its title, and click the submit button to directly see the report details page for this LO
6. **Usage stats**: usage stats for the last period.

---

### User Report

#### Main Page

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-03/scaled-1680-/xqHimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-03/xqHimage.png)

1. **Filters Bar**: allows filtering the data below by edition or course group. Not displayed if groups or editions are not configured for this course
2. **Recalculate**: recalculates the final score for all users
3. **Export**: export the report in CSV or XLS format
4. **Search**: search on the displayed data, enable advanced search, anable visibility of hidden columns
5. **Username**: click on a username to display a detailed report of the status of this user on all the learning objects

#### User Report

Status and main tracking data for all the LOs for a specific user

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/mkXimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/mkXimage.png)

1. **Edit**: edit the main informations for the user status on the course
   - Status
   - First Access
   - Last access
2. **Export**: export the user tracking data in CSV or XLS format
3. **Learning Objects list**: click on the object title to see user details for this learning material
4. **Scorm time tracking**: the colums displays the total time spent by a user in each scorm object. Click on the "+" icon to see a detailed report of all the accesses

---

### Learning Objects Report

#### Main Page

This page lists all the learning objects in the course with informations about the progress of users in the course

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/WpJimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/WpJimage.png)

1. **Filters Bar**: allows filtering the data below by edition or course group. Not displayed if groups or editions are not configured for this course
2. **Gradebook Filter**: flag this checkbox to filter the list of learning objects and display only those with scores and marked as "Use for final" in the [LO Management - properties section](books__reference-guide__page__learning-materials-management.md#bkmrk-properties%3A-properti)
3. **Export**: export the report data in CSV or XLS format
4. **LO Title**: Click on the title of a learning object for a detailed report
5. **LO user status chart**: this chart represents the progress status of all users on a learning object. Mouse hover a segment of the status bar to see the number of users with that status in a LO
6. **Answer stats**: click on the istogram icon to see statistics for the answers in a test or poll learning object

#### Learning Object Report

This view features an overview of the status of all users on this learning object, and a list of all the users with their main tracking info

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/Ukdimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/Ukdimage.png)

1. **Learning Object Info**: main information about the selected learning objects. Score settings like max score, use for final, show to user and weight can be set and edited by each LO properties and editing sections
2. **Test Metrics**: only displayed for "test" learning objects:
   - User status: shows how many users have completed (passed or failed), not completed (not attempted or doing) an assessment, and the number of submissions waiting for a teacher validation (to check). **Click on a label to filter the users in this status**
   - Average score: calculates the average score for all users in this test
3. **Score status chart**: pie chart displaying the score status of all users. Mouse hover a segment of the status bar to see the number of users with that score status in this LO
4. **User tracking details**: click on a username to see the user status and tracking details for this LO
5. **Attempts**: number of attempt of the users in a test

---

### User Details

This page displays the available details and features for the tracking of a user on a specific Learning Object, and can be reached by navigating either the user report or the learning objects report.

The page features the following info panel, while the content will vary based on the type of learning object displayed:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/JWHimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/JWHimage.png)

1. **Info**: main tracking information for a user on this learning object. Some details may slightly vary depending on the type of LO
2. **Edit**: click to edit the status, dates and status of this user on this LO[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/cMyimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/cMyimage.png)
3. **Reset**: delete all the tracking for this user on this LO. **Warning: can't be undone!**

#### 

#### Test tracking details page

For learning objects of type "TEST" this page displays the last test submission made by the users, with the given answers and scores

1. **Submissions** History: if the user made multiple attempts to complete the test they will be listed in this dropdown. The page will open by default from the last attempt
2. **User's Answers**: display all the test questions answered by the user, for the selected attempt
3. **Edit**: click this button to edit the user score for an answer and add a comment

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/1azimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/1azimage.png)

##### Edit a test tracking

For each user test attempt, it is possible to edit the tracking info including:

- Score Status: in addition to the generic LO status, it will be possible to set a score status specific for test LOs
- Comments: add teacher comments, visible to the user if set in test options
- Bonus score: increase the score achieved by the user

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/oN4image.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/oN4image.png)

#### SCORM Tracking details page

It the object type is SCORM, this page will display available info about user's sessions

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/V9dimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/V9dimage.png)

---

### Usage Stats

#### Main Page

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/7Bwimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/7Bwimage.png)

1. **Usage stats chart**: volume of browsing activity of the users in this course for a selected time period
2. **Time filter**: choose time range and start data for the usage chart. Start date defaults to the first available tracking.
3. **Users list**: click on a username for a detailed list of browsing sessions and actions

#### Usage Stats by user

List of all the browsing sessions of the selected user in this course:

- **Total time**: sums the browsing time of all the sessions
- **Actions**: click on the icon for a list of the actions performed by the user in a session

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2026-04/scaled-1680-/rtKimage.png)](https://docs2.formalms.org/uploads/images/gallery/2026-04/rtKimage.png)

Entrar em modo de seleção de seção

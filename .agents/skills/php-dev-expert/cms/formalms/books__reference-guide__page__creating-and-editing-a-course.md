# Creating and editing a... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/creating-and-editing-a-course

---

# Creating and editing a course

Here you can see all the configuration settings available for a course. This same configuration page is used for both creating a new course and editing an existing one.

Most of them are self-explaining, we will provide descriptions and details where needed:

## Main course information

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/decimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/decimage.png)

**Selected Category**: shows the selected category for the course. Can be changed upon course edit.

**Code**: enter an alphanumeric code that will help you identify different versions or releases of courses with similar titles, or to integrate course features with other applications.

**Course Type**: Select the course type:

1. Elearning: standard elearning course
2. Classroom: course with editions and classroom management
3. Elearning with editions: course with edition management

Since Forma LMS 4.1.42 is not possible anymore to change the course type if users are already enrolled to the course. This and other conditions (subscriptions via API or import) led to some inconsistencies in previous versions, with "ghost" subscribed users on master courses converted from elearning to classroom or vice versa. Also, An automatic realignment algorithm ensures consistency between master course enrollments and classroom session enrollments by removing users enrolled only in the master course and adding those enrolled only in sessions. It operates on one or all classroom courses, respects overbooking rules, and safely handles repeated executions without side effects. It is also applied during upgrades to fix legacy inconsistencies. See the [release article for details](https://formalms.org/download/releases-changelogs/435-forma-lms-4-1-42.html).

**Course Status**: Select the status for this course:

1. Under Construction: the course is only accessible to the users responsible for preparing its content (normally teachers, tutors, mentors and/or administrators);
2. Confirmed/ Available: the course is accessible to the users. Confirmed is meant to be used for classroom courses, available is meant for elearning courses
3. Concluded: the course is finished and only those users who have concluded it have access;
4. Cancelled: the course is no longer accessible, and registration from the course catalog is no longer possible.

**Directly play the first object**: when clicking on the course “enter” button, the first LO will be automatically opened. Don't use this option if you have more than one LO, because it would be impossible to play the following LO's

**Course Box Description**: enter the text to be displayed in the “my Courses” boxes. You can also insert a link, provided you write it with the appropriate HTML Code

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/PWgimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/PWgimage.png)

The description will then be displayed on the My Courses page and in the Catalog

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/KXRimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/KXRimage.png)

**Description**: full description that can be shown in the “course info” module, or inserted in certificate templates with a tag.

## Details

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/trqimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/trqimage.png)

**Assign the menu**: choose the menu template to be used in this course. If you don't select any different menu, the default one (i.e., the first in alphabetical order) will be used.

**Course Language**: Define the language used for course materials. This option will be useful to filter or select courses by language in catalogs, enrollment policies, administrator assignments

**Difficulty**: label to describe course difficulty level

**Credits**: credits assigned by this course, to be shown in reports and calculated through the “time period” option

**Labels**: assign a label to group courses with the “label” feature

## Course Subscription

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/tNNimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/tNNimage.png)

**Free:**the course will be displayed on the “catalog” page, and the user will have the possibility of self-enrolling

**On approval:**the course will be displayed on the “catalog” page, and the user will have the possibility of self-enrolling. The request will have to be approved by a manager (an admin)

**Only admin:**the course will be displayed on the “catalog” page, but only admins will have the possibility of enrolling users.

It might make sense to describe those options in the course description, for instance, writing “ask your manager to enroll you”.

**Code for automatic subscription**: lets users self register to this course, entering this code upon registration or through the code field in the userpanel

**Sell course**: enable this course for ecommerce features

## Display mode options

The following options will let you define some aspects related to course visualization and layout elements:

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/4Zlimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/4Zlimage.png)

**Show Course To**: The above section describes the course visibility options. Any course can be displayed or not to users who are not yet enrolled. Please also see the reference guide on [Catalogs](books__reference-guide__page__catalogs.md) to learn how you can use catalogs, combining them with the displaying options.

**Show on Course interface**: choose elements to display or hide inside the course

**Users Online in this course [Deprecated]**: choose whether and how to display  the instant messenger.

**Deprecated**: the IM has been removed since version 4.1, and the options has been removed in forma 4.2

**Users to show on Course Information module**: you can choose by level wich users to display in the [**course info module**](books__reference-guide__page__course-info.md) inside a course

**Deny Access to this course**: Block access to the course for users in a specific status

## Time options

In this section, you can configure options related to course scheduling and duration

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/eEDimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/eEDimage.png)

**Days of validity**:  course will be available to user only for the number of days defined in these fields. Time is calculated based on the date of user first access to the course.

**Note**: When “days of validity”is set,  the course closing date shown in the course boxes on the “My Courses” page will be dynamically calculated based on each user's first access date . If closing date is set and is prior than the user calculated end date, it will be displayed instead.

**Average time for course:** Estimated time for course fruition. It doesn't affect the user's stats, but can be used in course info and in reports. Decimal values are supported using a comma as the decimal separator (e.g., `1,50` to indicate 1 hour and 30 minutes).

## Special Options

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/hLvimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/hLvimage.png)

**Max number of subscriptions**: once the limit is reached, course subscriptions by users will be blocked

**Allow overbooking**: once the max-subscription limit is reached, users will still be able to enroll to the course and put in a waiting list

## Documents Upload

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/1Olimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/1Olimage.png)

**Banners** are only shown in specific settings (i.e., with one of our plugins).  The **course logo** should be 400 × 140 pixels.

**Demo material** can be anything you want, and it will be displayed in the My Courses page as well as in the Catalog, like this

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/xwZimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/xwZimage.png)

When you click on the three dots, you will see a clickable link allowing you to download whatever demo material you have uploaded.

[![image.png](https://docs2.formalms.org/uploads/images/gallery/2024-02/scaled-1680-/D7eimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-02/D7eimage.png)

Entrar em modo de seleção de seção

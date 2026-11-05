# General architecture a... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/general-architecture-and-definitions

---

# General architecture and definitions

## Login and Registration

[![fe_login_explained.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/image.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/image.png)

[![fe_registration.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/n8dimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/n8dimage.png)

Main Layout Elements

1. **Language Selector**  
   Change language for the login and registration page. This automatically detects the user browser language. Upon login, language will be set to the user profile language.
2. **Course Catalog**  
   Opens the catalog of courses. Feature must be enabled from System Configuration elearning [settings.](books__reference-guide__page__system-configuration.md)
3. **Login and social login**  
   Standard login form. Social login features can be activated from the [plugin manager.](books__reference-guide__page__plugin-management.md)
4. **Privacy Policy**  
   Default privacy policy text can be edited in admin settings

## LMS Frontend & User Panel

The frontend of the application hosts all the learning related features for both students and teachers.

[![fe_lms_layout_explained.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/zdhimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/zdhimage.png)

[![fe_userpanel_explained.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/Ao0image.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/Ao0image.png)

Main Layout elements

**1. Main Menu**: this is the main navigation menu, for all the general sections of the platform

- **MyCourses**: in this section the user will find all the courses, coursepaths and training activities he is directly enrolled to.
- **Catalog**: if enabled, this section will show the course catalog(s), with courses he can subscribe to
- **Community**: general platform community forums
- **Helpdesk**: a contact form to send support request to platform administrators
- **New Certificates**: notification icon and link to alert for new available certificates for download
- **Administration**: link to backend administration section, only available to administrators and superadministrators
- **User Panel**: click on the username to open your own user panel

**2. MyCourses Tab**s: access different areas of the MyCourses section, if enabled

**3. Filters panel**: here a user can filter and search among the courses he is subscribed to:

- Filter by course category
- Filter by course type
- Filter by year
- Filter by status. The page by default will show all open courses, but you could filter them based on the user status on the course
- Search by word on courses title, description, and category
- Filter by course label: the “label” option must be enabled. Check [system configuration](books__reference-guide__page__system-configuration.md)

#### User Panel

This panel displays personal info and features for the user:

**1. Profile**: if allowed by configuration, user can edit his own profile

**2. User features**:

- Certificates: go to mycertificate page
- Messages: access the private messages feature

**3. Career:** some basic stats about user activities

**4. Language selector**

## Backend Administration

This is the area of the application where most of the administrative operations happen, such as user management and course creation.

[![be_admin_dashboard.png](https://docs2.formalms.org/uploads/images/gallery/2024-01/scaled-1680-/Olpimage.png)](https://docs2.formalms.org/uploads/images/gallery/2024-01/Olpimage.png)

## Terms and Definitions

**USER LEVEL**
:   it's the main permission level that determines which part of the application a user can access, and his level of permissions. In Forma LMS users might be registered as one of the following levels:

**1. User**
:   can only access the frontend

**2. Administrator**
:   can access the backend with limited functionalities and permissions over users and courses

**3. SuperAdmin**
:   is a "GodAdmin" that can access both the frontend and the backend with full permissions

**User ROLE**
:   users of any level can be subscribed to courses with different roles, determining what they can do and see within a course based on course menu configuration and their level

**Admin Profile**
:   the admin profile defines which features an admin can access in the backend menu, and what he can do. The admin profile works together with admin permissions that can be set over specific courses, catalogs, user groups, user nodes, etc.

**Registration**
:   user is registered to the platform with a specific level

**Subscription**
:   user is enrolled to a course with a specific role

Entrar em modo de seleção de seção

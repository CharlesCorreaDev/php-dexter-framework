# Standards - MoodleDocs

> **Fonte / Source:** https://docs.moodle.org/503/en/Standards

---

# Standards

From MoodleDocs

Jump to:[navigation](#mw-navigation), [search](#p-search)

[Main page](Main_page.md "Main page") ► [About Moodle](About_Moodle.md "About Moodle") ► Standards

[About Moodle](About_Moodle.md "About Moodle")

- [Features](Features.md "Features")
- [New features in 5.3](New_features.md "New features")
- [Philosophy](Philosophy.md "Philosophy")
- [Pedagogy](Pedagogy.md "Pedagogy")
- Standards
- [Accessibility](Accessibility.md "Accessibility")
- [History](History.md "History")
- [Usage](Usage.md "Usage")
- [Moodle site - basic structure](Moodle_site_-_basic_structure.md "Moodle site - basic structure")
- [Moodle key terms](Moodle_key_terms.md "Moodle key terms")
- [About Moodle FAQ](About_Moodle_FAQ.md "About Moodle FAQ")
- [User quick guide](User_quick_guide.md "User quick guide")

Moodle is a global learning management platform that supports open **standards**, and is interoperable by design to enable integration of external applications and information onto a single Moodle platform.

Our commitment to open standards means institutions and organisations can leverage Moodle to customise and extend features for any teaching and learning requirements, and benefit from increased cost efficiencies, flexibility, easier manageability along with performance and scalability advantages of using Moodle.

Moodle has achieved and is compliant with the following international standards:

|  |  |
| --- | --- |
|  | **1. An Open Source Initiative** Moodle is provided as a free, open source software that can be used, modified and freely distributed under the terms of the [GNU General Public License](License.md "License"). There are also plenty of documentation, course content and resources available on Moodle.org for anyone to use under the terms of various licenses, including:   - ***Moodle Documentation***: All documentation on [docs.moodle.org](Main_page.md "Main page") is openly licensed under the terms of the GNU General Public License, and is Copyright © 2005 onwards by the individual authors of each page. |
|  | **2. IMS LTI™ Certified** Moodle is certified [Learning Tool Interoperability (LTI) Advantage Complete](https://site.imsglobal.org/certifications/moodle/moodle#tab-v310). The LTI™ certification is a global technical standard of integrating learning applications. [LTI Advantage](https://www.imsglobal.org/lti-advantage-overview) is a package of services that improves upon 1.1 and 2.0 and is the current standard. Users can integrate and present externally hosted applications and content within a single Moodle platform without having to develop and maintain custom integrations. Learn more about [integrating LTI resources onto your Moodle platform](External_tool.md "External tool"). In Moodle 3.1 onwards, Moodle can also act as an LTI 1.1 and 2.0 tool provider with the [Publish as LTI tool](Publish_as_LTI_tool.md "Publish as LTI tool"). |
|  | **3. SCORM-ADL compliant** Moodle complies with the SCORM 1.2 specification. The SCORM (Sharable Content Object Reference Model) is a set of specifications and standards for web-based e-learning. Users can [deliver SCORM content via Moodle](SCORM_module.md "SCORM module") by uploading any SCORM or AICC package to the Moodle course. There are also community plugins available that provide limited support for the Experience API (Tin Can). A commercial plugin that provides full support for SCORM 2004 and the Experience API is also available in Plugins [here](https://moodle.org/plugins/view.php?plugin=mod_scormcloud/). |
|  | **4. Open Badges**  [Open Badges](http://openbadges.org/) project is an online standard to recognise and verify learning using digital badges. Integrated as a core feature in Moodle, any institution, organisation or individual can create and issue [badges](badges.md "badges") to learners on their Moodle learning platform. Moodle is certified [Open Badges v 2.0 compliant as Issuer by IMS](https://site.imsglobal.org/certifications/moodle/moodle#cert_pane_nid_402893) and in Moodle 3.11 is one of the first platforms to implement Open Badges v 2.1 compliance. |
|  | **5. WCAG 2.1 Level AA** Moodle has received [WCAG 2.1 Level AA accreditation](https://www.webkeyit.com/accessibility-services/accessibility-accreditations/moodle/) based on successfully resolving the issues identified in an external audit of key pages which were chosen as representative of its overall functionality and accessibility. Continuing work is being done to further improve the accessibility of other areas in Moodle in order to maintain conformance with the [WCAG 2.1 Level AA guidelines](https://www.w3.org/TR/WCAG21/). |

## Moodle and Interoperability

In supporting the seamless integration and use of content from different sources and multiple vendors, the Moodle platform is designed to exchange data using open industry standards for Web deployments, and supports:

1. **[Authentication](Authentication.md "Authentication")** using:
   - [LDAP](LDAP_authentication.md "LDAP authentication"), the most widely used standard protocol for authentication.
   - Direct direct database lookup (e.g. in an external Oracle database), or on the Shibboleth protocol, or alternatively using IMAP, NNTP or FirstClass.
2. **[Enrolment](Enrolment.md "Enrolment")** using:
   - LDAP server (e.g. Active Directory)
   - [IMS Enterprise standard](IMS_Enterprise.md "IMS Enterprise") (via a downloadable plugin).
3. **Content** using the import of Reusable Learning Objects, packaged according to the SCORM/AICC/IMS Content Packaging standards.
   - Moodle 1.9.5 is certified [SCORM](SCORM_module.md "SCORM module") 1.2 compliant.
   - Moodle supports [IMS Common Cartridge import and export](IMS_Common_Cartridge_import_and_export.md "IMS Common Cartridge import and export")
   - The use of XML for content import/export (standard in Moodle). The "web services" method of exchanging data with other systems (e.g. via SOAP or XML-RPC) is not yet standard - but is in active development.
4. **Quiz questions** via [import](Import_questions.md "Import questions") and [export](Export_questions.md "Export questions") using a variety of formats.
5. **[RSS newsfeeds](RSS.md "RSS")**, integrated into a Moodle site or course.
   - Forum discussions, glossary entries and database content can be accessed as RSS newsfeeds, and therefore integrated into other RSS-capable websites or systems.

Retrieved from "<https://docs.moodle.org/503/en/index.php?title=Standards&oldid=153366>"

[Category](https://docs.moodle.org/503/en/Special:Categories "Special:Categories"):

- [About Moodle](Category_About_Moodle.md "Category:About Moodle")

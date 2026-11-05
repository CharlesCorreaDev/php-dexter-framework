# Version 4.0.0-rc.2 — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/changelogs/v4.0.0-rc.2.html

---

# Version 4.0.0-rc.2[](#version-4-0-0-rc-2 "Link to this heading")

Release Date: Sept 27, 2019

**RC.2 release of CodeIgniter4**

## [Enhancements](#id1)[](#enhancements "Link to this heading")

- query builder testability simplified with new property, but dropped
  :   method parameters (breaking change)
- database, migrations and sessions beefed up
- numerous smaller bugs corrected

## [App Changes](#id2)[](#app-changes "Link to this heading")

- Config/Constants, Paths & some config settings have had changes

## [Message Changes](#id3)[](#message-changes "Link to this heading")

- N/A

## [Changed Files](#id4)[](#changed-files "Link to this heading")

The list of changed files follows, with PR numbers shown.

- admin/
- app/
  :   - Config/
        :   - Boot/\* #2241
            - Constants #2183
            - Paths #2181
- public/
- system/
  :   - CLI/
        :   - BaseCommand #2231
      - Database/
        :   - MySQLi/Connection #2201, 2229
            - Postgre/
              :   - BaseBuilder #2269
                  - Connection #2201
            - SQLite3/Connection #2201, 2228, 2230
            - BaseBuilder #2257, 2232, 2269, 2270
            - BaseConnection #2208, 2213, 2231
            - Config #2224
            - Forge #2205
            - MigrationRunner #2191
      - Debug/
        :   - Exceptions #2262
      - Encryption/
        :   - Encryption #2231
            - Handlers/BaseHandler #2231
      - Files/
        :   - FileCollection #2265
      - HTTP/
        :   - CURLRequest #2168
            - IncomingRequest #2265
            - Request #2253
            - Response #2253
      - I18n/
        :   - Time #2231
            - TimeDifference #2231
      - Images/
        :   - Handlers/BaseHandler #2246
      - RESTful/
        :   - ResourcePresenter #2271
      - Security/
        :   - Security #2240
      - Session/
        :   - Session #2197, 2231
      - Test/
        :   - CIDatabaseTestCase #2205
            - CIDatabaseUnitTestCase #2184
      - Validation/
        :   - FileRules #2265
            - Validation #2268
      - View/
        :   - Parser #2264
      - Common #2200, 2209, 2261
      - Model #2231
- tests/\_support/
- tests/system/
  :   - Commands/
        :   - CommandClassTest #2231
      - Database/
        :   - Builder/
              :   - GetTest #2232
                    :   - CountTest #2269
                        - DeleteTest #2269
                        - EmptyTest #2269
                        - GetTest #2269
                  - GroupTest #2257
                    :   - InsertTest #2269
                        - ReplaceTest #2269
                        - TruncateTest #2269
                        - UpdateTest #2269
            - Live/
              :   - EscapeTest #2229
                  - ForgeTest #2201, 2211
                  - GroupTest #2257
                  - MetadataTest #2211
                  - ModelTest #2231
            - BaseConnectionTest #2229, 2231
      - Encryption/
        :   - EncryptionTest #2231
      - Helpers/
        :   - URLHelperTest #2259
      - HTTP/
        :   - CURLRequestTest #2168
            - FileCOllectionTest #2265
            - URITest #2259
      - I18n/
        :   - TimeDifferenceTest #2231
            - TimeTest #2231
      - Pager/
        :   - pagerTest #2259
      - RESTful/
        :   - ResourcePresenterTest #2271
      - Session/
        :   - SessionTest #2231
      - View/
        :   - ParserTest #2264
- user\_guide\_src/
  :   - concepts/
        :   - structure #2221
      - database/
        :   - metadata #2199, 2201, 2208
            - queries #2208
            - query\_builder #2257, 2232, 2269
      - dbmgmt/
        :   - migration #2190, 2191
      - extending/
        :   - contributing #2221
      - general/
        :   - errors #2221
      - helpera/
        :   - url\_helper #2259
      - incoming/
        :   - restful #2189
            - routing #2221
      - installation/
        :   - troubleshooting #2260
      - libraries/
        :   - encryption #2221
            - pagination #2216
            - time #2221
            - uti #2216
      - outgoing/
        :   - api\_responses #2245
            - view\_layouts #2218
            - view\_parser #2218, 2264
      - testing/
        :   - controllers #2221
            - debugging #2221, 2209
            - feature #2218, 2221
            - overview #2221
      - tutorial/
        :   - news\_section #2221
            - static\_pages #2221

## [PRs merged](#id5)[](#prs-merged "Link to this heading")

- #2271 fix ResourcePresenter::setModel()
- #2270 groupStart() refactorization
- #2269 testMode() method for BaseBuilder
- #2268 Validation session use only if exists
- #2267 Tests setUp and tearDown: void
- #2265 Fix a validation issue on multiple file upload
- #2264 fix. Parser allow other extension
- #2262 Fix parameter type in Debug/Exceptions
- #2261 Fix lang() signature
- #2260 Explain the whoops page
- #2259 Add URI & url\_helper tests
- #2257 Several updates to the HAVING clauses
- #2253 Fix invalid parameters
- #2246 EXIF not supported for GIF
- #2245 Fix class ref parameter types
- #2241 Fix ini\_set parameter type
- #2240 Handle JSON POSTs in CSRF
- #2232 Fixes BaseBuilder getWhere() bug
- #2231 Add magic \_\_isset to classes with \_\_get
- #2230 Add escape to SQLite \_listTables()
- #2229 MySQLi escapeLikeStringDirect()
- #2228 Exclude sqlite\_% from listTables()
- #2224 change new ConfigDatabase() to config(‘Database’)
- #2221 Documentation fixes
- #2218 Typo corrected
- #2216 Update uri.rst
- #2213 Filter listTables cache response on constrainPrefix
- #2211 Add listTable() tests
- #2209 Add trace()
- #2208 Add $db->getPrefix()
- #2205 Fix empty() bug on DBPrefix
- #2201 Foreign key columns
- #2200 Notify Kint of dd alias
- #2199 Add getForeignKeyData to User Guide
- #2187 Update Session.php
- #2191 Migration rollback reverse
- #2190 Fix name of ForeignKeyChecks
- #2189 missing return
- #2184 Fix case on “Seeds/” directory
- #2183 Check defined for constants
- #2181 Remove copy-paste extraneous text
- #2168 Fix for CURL for ‘debug’ option

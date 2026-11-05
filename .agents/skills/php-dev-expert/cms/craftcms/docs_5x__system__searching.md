# Searching | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/searching

---

# Searching

- ### On this Page

  - [Supported Syntaxes](docs_5x__system__searching.md#supported-syntaxes)
  - [Searching for Specific Element Attributes](docs_5x__system__searching.md#searching-for-specific-element-attributes)
  - [Search Filters](docs_5x__system__searching.md#search-filters)
  - [Development](docs_5x__system__searching.md#development)
  - [Configuring Custom Fields for Search](docs_5x__system__searching.md#configuring-custom-fields-for-search)
  - [Indexing Criteria](docs_5x__system__searching.md#indexing-criteria)
  - [Searching Nested Elements](docs_5x__system__searching.md#searching-nested-elements)
  - [Rebuilding Your Search Indexes](docs_5x__system__searching.md#rebuilding-your-search-indexes)
  - [Extending Search](docs_5x__system__searching.md#extending-search)

Craft includes a system-wide search index used for finding elements via keywords. Search is supported wherever you see this field in the [control panel](docs_5x__system__control-panel.md):

![Search Bar](data:image/png;base64,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)

Anything you type into this bar is also a valid query when [searching from code](#development):

TwigGraphQLPHP

```
{% set results = craft.entries()
  .search('foo')
  .all() %}
```

```
{
  entries(search: "foo") {
    title
  }
}
```

```
$results = \craft\elements\Entry::find()
    ->search('foo')
    ->all();
```

## [#](#supported-syntaxes)Supported Syntaxes

Craft supports the following syntax wherever you happen to search from:

| Searching for… | will find elements… |
| --- | --- |
| `salty` | with any attribute or field containing “salty”. |
| `salty dog` | with any *single* attribute or field containing both “salty” and “dog”. |
| `salty OR dog` | with attributes or fields containing either “salty” or “dog” (or both). |
| `salty -dog` | with any *single* attribute or field containing “salty” but not “dog”. |
| `"salty dog"` | with any *single* attribute or field containing the exact phrase “salty dog”. |
| `body:salty` | where the `body` field contains “salty”. |
| `body:salty body:dog` | where the `body` field contains both “salty” and “dog”. |
| `body:salty OR body:dog` | where the `body` field contains either “salty” or “dog”. |
| `body:salty -body:dog` | where the `body` field contains “salty” but not “dog”. |
| `body:"salty dog"` | where the `body` field contains the exact phrase “salty dog”. |
| `body::salty` | where the `body` field is set to “salty” and nothing more. |
| `body::"salty dog"` | where the `body` field is set to “salty dog” and nothing more. |

If you are not seeing the expected results, make sure your field is [set up for indexing](#configuring-custom-fields-for-search) and that the index has been [rebuilt](#rebuilding-your-search-indexes) to reflect those changes.

Searches are tokenized into *terms* for matching and [scoring](#scoring-algorithm). Without any special modifiers (quotes, operators, or attributes), a query is assumed to be a single term, meaning all words must be present within the same attribute to match.

For example, the query `salty dog` matches elements with both words in the same attribute or field, but *not* elements with `salty` in one field and `dog` in another. The order of individual words is not enforced, unless the term appears in quotes.

When a query is tokenized into multiple terms, Craft treats them as through they were joined by an implicit `AND` operator.

### [#](#wildcard-syntax)Wildcard Syntax

You can use a wildcard character (`*`) to modify search behavior:

| Searching for… | will find elements… |
| --- | --- |
| `*ty` | containing a word that ends with “ty”. |
| `*alt*` | containing a word that contains “alt”. |
| `body:*ty` | where the `body` field contains a word that ends with “ty”. |
| `body:*alt*` | where the `body` field contains a word that contains “alt”. |
| `body::salty*` | where the `body` field begins with “salty”. |
| `body::*dog` | where the `body` field ends with “dog”. |
| `body:*` | where the `body` field contains any value. |
| `-body:*` | where the `body` field is empty. |

Use the [`defaultSearchTermOptions`](docs_5x__reference__config__general.md#defaultsearchtermoptions) config setting to adjust default search behavior.

## [#](#searching-for-specific-element-attributes)Searching for Specific Element Attributes

Assets, categories, entries, users, and tags each support their own set of additional attributes to search against:

| Element | Additional Search Attributes |
| --- | --- |
| Assets | `filename` `extension` `kind` |
| Categories | `title` `slug` |
| Entries | `title` `slug` |
| Users | `username` `firstname` `lastname` `fullname` (firstname + lastname) `email` |
| Tags | `title` |

Searching is a great way to quickly find content by keywords—but the most reliable way to directly query against attributes and custom fields is via the element type’s [query parameters](docs_5x__development__element-queries.md#types--parameters).

### [#](#element-specific-attribute-search-examples)Element-Specific Attribute Search Examples

If you wanted to search only for [Assets](docs_5x__reference__element-types__assets.md) that are *images*, it would look like this in the control panel:

![Searching for image assets in the control panel](/docs/assets/img/search-assets-by-kind.bd7000f6.png)

The same search from your code:

TwigGraphQLPHP

```
{% set images = craft.assets()
  .search('kind:image')
  .all() %}
```

```
{
  images: assets(search: "kind:image") {
    title
  }
}
```

```
$images = \craft\elements\Asset::find()
    ->search('kind:image')
    ->all();
```

Querying elements by specific attribute or field values is more efficient when using dedicated methods. The above is equivalent to:

```
{% set images = craft.assets()
  .kind('image')
  .all() %}
```

This can still be combined with keyword search, and will often support more explicit and flexible [arguments](docs_5x__reference__element-types__assets.md#kind).

If you were to search for Users with email addresses ending in `@craftcms.com`, it would look like this in the control panel:

![Searching for users by email in the control panel](/docs/assets/img/search-users-by-email.abe0e64e.png)

The same search from your code:

TwigGraphQLPHP

```
{% set users = craft.users()
  .search('email:@craftcms.com')
  .all() %}
```

```
{
  users(search: "email:@craftcms.com") {
    title
  }
}
```

```
$images = \craft\elements\User::find()
    ->search('email:@craftcms.com')
    ->all();
```

As with the first example, this query could be simplified with the native [`.email()`](docs_5x__reference__element-types__users.md#email) query param:

```
{% set team = craft.users()
  .email('*@craftcms.com')
  .all() %}
```

## [#](#search-filters)Search Filters

Clicking the icon inside the right edge of the search field opens a filter HUD:

![Screenshot of open search filter with an example Post Date rule with a begin and end date](/docs/assets/img/search-with-filter.f8dec177.png)

You can add any number of conditions to further limit search results by those criteria.

## [#](#development)Development

`craft.assets()`, `craft.entries()`, `craft.tags()`, and `craft.users()` support a `search` parameter you can use to filter their elements by a given search query.

Queries don’t have to be static, though—suppose you wanted to let users define keywords:

TwigPHP

```
{# Get the user’s search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch entries that match the search query #}
{% set results = craft.entries()
  .search(searchQuery)
  .all() %}
```

```
// Get the user’s search query from the 'q' query string param
$searchQuery = Craft::$app->getRequest()->getParam('q');

// Fetch entries that match the search query
$results = \craft\elements\Entry::find()
    ->search($searchQuery)
    ->all();
```

See our [Search Form  (opens new window)](https://craftcms.com/knowledge-base/search-form) article for a complete example of listing dynamic search results.

When using the `search` param and [ordering the results by score](#ordering-results-by-score), each returned element will be have its [`searchScore`](#scoring-algorithm) attribute populated with a value representing how well the query matched.

Passing user input to the `search` param is generally safe, but may allow discovery or enumeration of otherwise hidden field values. For instance, a savvy user might supply a query like `myPrivateNotesField:"*"` to test whether a field exists or has a specific value. *Carefully auditing which if your fields are [indexed](#configuring-custom-fields-for-search) will help prevent unwanted disclosure.*

### [#](#ordering-results-by-score)Ordering Results by Score

Pass the special `'score'` value to order results from best-match to worst-match:

TwigGraphQLPHP

```
{% set results = craft.entries()
  .search('foo')
  .orderBy('score')
  .all() %}
```

```
{
  entries(search: "foo", orderBy: "score") {
    title
  }
}
```

```
$results = \craft\elements\Entry::find()
    ->search('foo')
    ->orderBy('score')
    ->all();
```

Keep in mind that unlike most other columns, the implicit order for `score` is *descending*. If you need to invert the order for any reason, explicitly pass `score ASC`, or use the `inReverse()` method.

#### [#](#scoring-algorithm)Scoring Algorithm

Craft uses its own algorithm to score search results, which takes into consideration each “term” from the query and the complete text of a matched attribute.

1. All scores start at zero.
2. Scores for an element are totaled across rows.
3. Rows are scored against individual terms, using a weight of `1`.
   - Explicit “exact attribute” matches (terms using double-colons `::`) do not contribute to scores, as every result is a known match, already;
   - A base score is determined by how many times a term appears in a row’s keywords;
   - Base scores are divided by the number of keywords in a row;
   - Regular matches are given a 50x multiplier;
   - Partial-word matches get a 10x multiplier;
   - Coincidental exact matches are given a 100x multiplier;
   - Matches for the `title` attribute are given an additional 5x multiplier;
4. Rows are scored against term groups (using the `OR` operator), wherein the weight of each term is divided by the number of terms in the group. Otherwise, scores are calculated the same as individual terms.
5. A row’s total score is the sum of its individual term and grouped term scores.

For example, if we had two entries titled “Salty Dog” and “Greyhound” (both of which mention the *Greyhound* in a custom field), a search for “greyhound” would be scored like this:

| Title + Content | Scores | Rounded Total |
| --- | --- | --- |
| **Salty Dog**   A salty dog is a cocktail of gin, or vodka, and grapefruit juice, served in a highball glass with a salted rim. The salt is the only difference between a salty dog and a greyhound.   [Source  (opens new window)](https://en.wikipedia.org/wiki/Salty_dog_(cocktail)) | **Body:** 1 match in 35 words, 50x multiplier | **1** |
| **Greyhound**   A greyhound is a cocktail consisting of grapefruit juice and gin mixed and served over ice. If the rim of the glass has been salted, the drink is instead called a salty dog.   [Source  (opens new window)](https://en.wikipedia.org/wiki/Greyhound_(cocktail)) | **Title:** 1 match in 1 word, 5x title multiplier, 100x exact match multiplier **Body:** 1 match in 33 words, 50x multiplier | **502** |

This is an extreme example—but it shows how quickly exact or near-exact matches can rise to the top of searches. As an exercise, try scoring a search for “salt” against the above content!

## [#](#configuring-custom-fields-for-search)Configuring Custom Fields for Search

Each element type makes basic details, called *searchable attributes*, available as search keywords. It’s common to search for entries by title, for example, or for users by their name or email address. (We just looked at these in the [Searching for Specific Element Attributes](#searching-for-specific-element-attributes) table.)

You can configure any [custom field](docs_5x__system__fields.md) to make its content available for search by enabling **Use this field’s values as search keywords**:

![Searchable Checkbox](/docs/assets/img/searchable-checkbox.bbd3c699.png)

Indexes are only updated once an element with the field is saved. If you have a large amount of content and users (admin or otherwise) rely heavily on search, consider [resaving the elements](#rebuilding-your-search-indexes) to populate the index.

For Matrix fields, the top-level **Use this field’s values as search keywords** setting determines whether *any* sub-fields will factor into results for the parent—individual fields must also opt-in to indexing for any keywords to be bubbled up.

For relational fields like [Assets](docs_5x__reference__field-types__assets.md), [Categories](docs_5x__reference__field-types__categories.md), and [Entries](docs_5x__reference__field-types__entries.md), the setting determines whether titles of related elements should factor into search results.

### [#](#multi-instance-fields)Multi-Instance Fields

When a field is marked as searchable, keywords for *all* instances of that field on an element are combined into a single index, and their handles are treated as aliases. For example, a [plain text](docs_5x__reference__field-types__plain-text.md) field added to a field layout multiple times (with, say, handles `summary` and `byline`), Craft does not distinguish which field instance the keywords came from—this means that [searching against specific element attributes](#searching-for-specific-element-attributes) may produce unexpected results:

- Searching for `summary:daisy` may return entries that included the name *Daisy* in the `byline`;
- Searching for `byline:rose` may return entries that mention the flower *rose* in their `summary`;

If your application relies on distinct keywords, create individual fields.

## [#](#indexing-criteria)Indexing Criteria

Any time an indexable attribute or field on an element is updated (as indicated by Craft’s change-tracking feature, which powers drafts and revisions), an “Updating search indexes” job is pushed into the queue. Prior versions generate an indexing job whenever an element with *any* searchable attributes or fields is saved, regardless of whether or not those specific attributes changed.

The [eligible properties](#searching-for-specific-element-attributes) differ for each element type, the field layout a given element uses, and which of the underlying fields are flagged as searchable.

## [#](#searching-nested-elements)Searching Nested Elements

In Craft 5, [entry queries](docs_5x__reference__element-types__entries.md#querying-entries) return nested elements, by default. To search only for entries that belong to a section (those that are not owned by another entry), use the `.section()` param:

```
{% set results = craft.entries()
  .section(['news', 'resources'])
  .search(terms)
  .orderBy('score')
  .all() %}
```

If you want entries in *any* section, and would prefer to not maintain a list of specific sections (or *excluded* sections, with `.section(['not', 'home', 'suppliers'])`) in your template, pass an asterisk  [5.2.0+](https://github.com/craftcms/cms/blob/5.2.0/CHANGELOG.md "Querying for non-nested entries with the special “section wildcard” was first available in version 5.2.0 of Craft.") (`*`):

```
{% set results = craft.entries()
  .section('*')
  .search(terms)
  .orderBy('score')
  .all() %}
```

## [#](#rebuilding-your-search-indexes)Rebuilding Your Search Indexes

Craft does its best to keep its search indexes as up-to-date as possible, but there are a couple things that might render portions of them inaccurate. If you suspect your search indexes are out of date, you can have Craft rebuild them by bulk-resaving entries with the [`resave/entries`](docs_5x__reference__cli.md#resave) command and including the `--update-search-index` flag:

```
php craft resave/entries --update-search-index
```

You can specify which entries should be resaved with the `--section` and `--type` options, among others. Run `craft help resave/entries` to see all supported options, or `craft help resave` for a list of commands for resaving other element types.

## [#](#extending-search)Extending Search

You can modify both the indexing and scoring of results, programmatically.

### [#](#customizing-the-index)Customizing the Index

Craft generates keywords for element attributes and custom fields based on its understanding of their data types. Each [element](docs_5x__system__elements.md) and [field](docs_5x__system__fields.md) type also have an opportunity to customize keywords: Assets index their `filename`, `extension`, and `kind` attributes; [relational fields](docs_5x__system__relations.md) load the attached elements and concatenate their titles.

Keywords can come in virtually any form, because Craft [normalizes  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-search.html#method-normalizekeywords) them before adding them to the index. You can supplant or augment keywords (or index additional attributes—real or virtual) by listening to specific search events.

Do not modify records in the `searchindex` table, directly. Rows are cleared and rebuilt every time an element is saved, so changes made outside of the normal indexing process will be lost.

#### [#](#different-keywords)Different Keywords

To replace keywords for an existing attribute or field (or prevent something from being indexed, entirely), listen for the [craft\services\Search::EVENT\_BEFORE\_INDEX\_KEYWORDS  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-search.html#event-before-index_keywords) event:

```
use yii\base\Event;
use craft\services\Search;
use craft\events\IndexKeywordsEvent;
use craft\helpers\StringHelper;

Event::on(
    Search::class,
    Search::EVENT_BEFORE_INDEX_KEYWORDS,
    function(IndexKeywordsEvent $e) {
        // Element being indexed:
        $element = $e->element;

        // Current attribute name:
        $attribute = $e->attribute;

        // Field ID, if indexing a custom field:
        $fieldId = $e->fieldId;

        // Keywords that will be indexed:
        $keywords = $e->keywords;

        // Overwrite the keywords (say, to remove common typos)...
        $e->keywords = StringHelper::replaceAll($e->keywords, ['speling', 'wirds', 'typox'], '', false);

        // ...or outright prevent something from being added to the index:
        if (StringHelper::contains($e->keywords, 'naughty words', false)) {
            $e->isValid = false;
        }
    }
);
```

At this point, `$e->keywords` is a space-separated list of terms, ready to be inserted into the index.

#### [#](#additional-attributes)Additional Attributes

Adding searchable attributes is done via the [craft\base\Element::EVENT\_REGISTER\_SEARCHABLE\_ATTRIBUTES  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-searchable_attributes) and [craft\base\Element::EVENT\_DEFINE\_KEYWORDS  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-define-keywords) events:

```
use yii\base\Event;
use craft\elements\Entry;
use craft\events\DefineAttributeKeywordsEvent;
use craft\events\RegisterElementSearchableAttributesEvent;

Event::on(
    Entry::class,
    Entry::EVENT_REGISTER_SEARCHABLE_ATTRIBUTES,
    function(RegisterElementSearchableAttributesEvent $e) {
      // Add a new `author` search attribute:
      $e->attributes[] = 'author';
    }
);

Event::on(
    Entry::class,
    Entry::EVENT_DEFINE_KEYWORDS,
    function (DefineAttributeKeywordsEvent $e) {
        if ($e->attribute === 'author') {
            // Let Craft know that we’ve been able to set custom keywords:
            $e->handled = true;

            // You can set almost anything as keywords, and let Craft figure out how to normalize it...
            $e->keywords = $e->sender->getAuthor();

            // ...or do something more explicit:
            if ($author = $e->sender->getAuthor()) {
                $e->keywords = $author->getFullName();
            }
        }
    }
);
```

Your custom search attributes don’t have to exist on an element to be indexed! As long as you handle the generation of keywords, Craft will treat them the same as any other attribute or custom field.

### [#](#altering-scores)Altering Scores

To alter the [search score](#scoring-algorithm) assigned by Craft, listen for the [craft\services\Search::EVENT\_AFTER\_SEARCH  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-search.html#event-after-search) event [from a plugin or module](docs_5x__extend__events.md):

BasicsExample AExample B

```
use yii\base\Event;
use craft\events\SearchEvent;
use craft\helpers\StringHelper;
use craft\services\Search;

Event::on(
    Search::class,
    Search::EVENT_AFTER_SEARCH,
    function(SearchEvent $e) {
        // Original ElementQuery instance:
        $elementQuery = $e->elementQuery;

        // SearchQuery instance, with parsed tokens:
        $query = $e->query;

        // Site(s) the search was performed in:
        $siteId = $e->siteId;

        // Raw index matches (there may be multiple rows per element):
        $results = $e->results;

        // Corresponding element score totals, indexed by element ID:
        $scores = $e->scores;
    }
);
```

```
use yii\base\Event;
use craft\events\SearchEvent;
use craft\helpers\StringHelper;
use craft\services\Search;

Event::on(
    Search::class,
    Search::EVENT_AFTER_SEARCH,
    function(SearchEvent $e) {
        // Boost a specific element’s score by overwriting its value in $e->scores:
        if (isset($e->scores[12345])) {
          $e->scores[12345] = $e->scores[12345] + 10000;
        }
    }
);
```

```
use yii\base\Event;
use craft\events\SearchEvent;
use craft\helpers\StringHelper;
use craft\services\Search;

Event::on(
    Search::class,
    Search::EVENT_AFTER_SEARCH,
    function(SearchEvent $e) {
        // Make sure a result is always present (and highest-ranked) when certain keywords are used (anywhere in the query):
        if (StringHelper::contains($e->query->getQuery(), 'salt', false)) {
          // Find the highest score, or use `0` if there were no natural results:
          $highestScore = max($e->scores ?: [0]);
          $e->scores[12345] = $highestScore + 1;
        }
    }
);
```

Keep in mind that element IDs may not be stable between environments, so you may need to look it up (with an [Element Query](docs_5x__development__element-queries.md)) or store it as an environment variable!

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/searching.md)

# Joomla! CMS 4.4.x API » Markers

> **Fonte / Source:** https://api.joomla.org/cms-4/markers.html

---

# Markers

## repos/joomla-cms/libraries/src/Access/Access.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 897 | This method should move somewhere else |

## repos/joomla-cms/libraries/src/Application/EventAwareInterface.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 28 | Move to combat plugin |

## repos/joomla-cms/libraries/src/Document/FeedDocument.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 203 | Make this cacheable |

## repos/joomla-cms/libraries/src/Form/Form.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 1510 | Maybe we should receive all addXXXpaths attributes at once? |

## repos/joomla-cms/libraries/src/MVC/Controller/FormController.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 35 | Add ability to set redirect manually to better cope with frontend usage. |

## repos/joomla-cms/libraries/src/Error/Renderer/HtmlRenderer.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 26 | Change this renderer to use JDocumentHtml instead of JDocumentError, the latter is only used for B/C at this time |

## repos/joomla-cms/libraries/src/Installer/Installer.php 2

| Type | Line | Description |
| --- | --- | --- |
| TODO | 1515 | work out why the below line triggers 'node no longer exists' errors with files |
| TODO | 2392 | - Can we abstract this to not depend on the Joomla class namespace without PHP namespaces? |

## repos/joomla-cms/libraries/src/Cache/Controller/PageController.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 182 | Discuss whether this should be coupled to a data hash or a request hash ... perhaps hashed with a serialized request |

## repos/joomla-cms/libraries/src/Event/Table/SetNewTagsEvent.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 22 | Only used in JModelAdmin::batchTag since we can't use JTable::save as we don't want the data to be saved. Maybe trigger onBeforeStore? |

## repos/joomla-cms/libraries/src/Toolbar/Toolbar.php 1

| Type | Line | Description |
| --- | --- | --- |
| TODO | 142 | Needs a proper replacement before removal as ToolbarFactoryInterface alone does not share the object everywhere |

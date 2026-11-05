# Conditions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/conditions

---

# Conditions

- ### On this Page

  - [Architecture](docs_5x__extend__conditions.md#architecture)
  - [Condition Builder Framework](docs_5x__extend__conditions.md#condition-builder-framework)

The Craft CMS condition builder is a powerful tool that helps content editors and site developers utilize dynamic, rule-based settings.

![Abstracted illustration of a condition builder with a criteria row and an add button](data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABbQAAADCCAMAAACmP7SeAAACUlBMVEUAAADf39/n5+vm5+vl5+zl5+vl5+zm5urn5+fl5+zo6O3m6Ozr7vPv8vfy9frz9/zq7fLl5+vm5ujn5+3p7PHy9vvx9frt8PXs7/Tk5+rf3+/k5urj5enm5+zu8vfw9Pnl6/PS2+i/zNy4xtfDz97O2OXr8fjp7PDm6e3n6u7u8fbv9PrS2+fn6e3Dz9/r7vLs7fD09ff8/P3////6+/z29vjo6u709fbs8fjk6/PS3Ofr7fD7+/u3xNavvc6qucmmtMSpt8exv9D+/v7w8vLp6+zi5Obo6eu2w9Wotsa2xNX8/Pzm5+m3xdbw8vOpt8jo6ers8fbK0deOmKGHkZu9xMvEy9GVnqentcXf5Oqiq7PK0diLl6ZeaXWWo7OXo7KotcWXpLKpsLmpuMfn6euvvc2yv9Dx8vOot8b9/f7l5+n7/Pyqucjq6+3x8fP9/v7O2eX19vjR3Ojn6OzS3Ojj5+vk5+rv8vbb4urH0t6/y9nL1eDX3+f3+fv7/P3b4unL1OD3+frH0d6+ydi2wtCxvcusuMavvMm4xNK0wdF/k6t1iqN6jqe9yNeuusiKnLJqgJtvhZ/k5+y2wdCwvMqtucasuca6xtWUprqKnLN1iaKQoba1wdGOmqebp7OaprN7jqequMmbp7SbprNvhJ+aqr6AkquwvMmFl6++ytivu8i9ydels8Wfr8G1wc/k5+z4+Pn3+Pnk5+vj5evx8vTw8fPk5uji5ezv7+/////////////////////////v9/fj4+vl5+rk5eni5Orl5enj5+ui0PdbAAAAxnRSTlMAEH+/3//vcCCfb////////+9wf///////oBBwgL////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9AYP///////////////////////////////////7//////////////////////////////////////YP//v4D/73BQIO/fUGCQgCBAn6BgUICQwD7GAAAJS0lEQVR4Ae3cRXck5xWH8f99u5qGzcwaHjMzM/t7hCOFmZmzzzKMZsYwJ2Zmexhb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)

There are several places you can find the condition builder in action:

- Conditional field layouts, which make it possible to display specific tabs or fields only when precise criteria are met;
- Custom [sources](docs_5x__system__elements.md#sources), which are optional element index sources customized to display whatever elements meet the criteria you set;
- Search field filters;
- Craft Commerce’s pricing and shipping rules;

## [#](#architecture)Architecture

A condition is a group of one or more condition rules that, when combined, can perform a collective task like modifying an element query or matching an element. The rules are available for a control panel user to configure, should they decide to utilize a condition wherever you’ve made it available.

The “condition builder” is the [Htmx  (opens new window)](https://htmx.org/)-powered UI framework the control panel user interacts with in their browser.

Custom fields may define condition rule types to be pulled into element conditions. Most built-in field types take advantage of this and are a great source of examples.

Element types also have an opportunity to register their own conditions and condition rules for native attribute types.

At a high level, a condition rule doesn’t know anything about how it will be used. The [craft\base\conditions\BaseCondition  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-conditions-basecondition.html) class does most of the work to stitch things together and construct the appropriate UI. This base condition class is extended by most of Craft’s included conditions, and all of these pieces are integral parts of the condition builder framework.

## [#](#condition-builder-framework)Condition Builder Framework

Developers can work with existing conditions or introduce new ones using the condition builder framework.

Conditions need to implement [ConditionInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-conditions-conditioninterface.html). A generic base implementation is provided by [BaseCondition  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-conditions-basecondition.html).

Condition rules must implement [ConditionRuleInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-conditions-conditionruleinterface.html). You’ll find a generic [BaseConditionRule  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-conditions-baseconditionrule.html) implementation along with a handful of base condition rules in `base/conditions/` that are geared for common rule formats.

The HTML representation of a condition builder can be generated with `$condition->getBuilderHtml()`, which supports a few builder-specific options:

- `mainTag` – The container tag type (`form`, by default);
- `id` – The HTML container’s `id` attribute;
- `sortable` – Whether the rules should be user-sortable (`true` by default);
- `singleUseTypes` – Whether rules can only be used once within the condition;
- `projectConfigTypes` – Whether to limit the available rules to those which can be stored in the project config (needed for custom sources);

### [#](#element-query-conditions)Element Query Conditions

[Element types](docs_5x__extend__element-types.md) can provide their own custom condition classes which extend [ElementCondition  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-conditions-elementcondition.html). Doing so will give them a chance to include additional element type-specific rules, by overriding [conditionRuleTypes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-conditions-elementcondition.html#method-conditionruletypes) (see [EntryCondition  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-conditions-entries-entrycondition.html) for an example).

The element type should return an instance of its custom condition class from a static `createCondition()` method.

### [#](#field-condition-rules)Field Condition Rules

[Field types](docs_5x__extend__field-types.md) can provide a rule type which implements [FieldConditionRuleInterface  (opens new window)](https://docs.craftcms.com/api/v5/-craft-fields-conditions-fieldconditionruleinterface.html) and uses [FieldConditionRuleTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-conditions-fieldconditionruletrait.html).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/conditions.md)

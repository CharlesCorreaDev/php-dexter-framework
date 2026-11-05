# Handling Requests: Request Handling Overview | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/runtime-overview

---

0

# Overview [¶](#overview)

Each time when a Yii application handles a request, it undergoes a similar workflow.

1. A user makes a request to the [entry script](guide_22_0__structure-entry-scripts.md) `web/index.php`.
2. The entry script loads the application [configuration](guide_22_0__concept-configurations.md) and creates
   an [application](guide_22_0__structure-applications.md) instance to handle the request.
3. The application resolves the requested [route](guide_22_0__runtime-routing.md) with the help of
   the [request](guide_22_0__runtime-requests.md) application component.
4. The application creates a [controller](guide_22_0__structure-controllers.md) instance to handle the request.
5. The controller creates an [action](guide_22_0__structure-controllers.md) instance and performs the filters for the action.
6. If any [filter](guide_22_0__structure-filters.md) fails, the action is cancelled.
7. If all filters pass, the action is executed.
8. The action loads a data [model](guide_22_0__structure-models.md), possibly from a database.
9. The action renders a [view](guide_22_0__structure-views.md), providing it with the data model.
10. The rendered result is returned to the [response](guide_22_0__runtime-responses.md) application component.
11. The response component sends the rendered result to the user's browser.

The following diagram shows how an application handles a request.

![Request Lifecycle](/doc/guide/22.0/en/images/request-lifecycle.png)

In this section, we will describe in detail how some of these steps work.

[Application Structure: Extensions](guide_22_0__structure-extensions.md)

[Go to Top](#top)

[Bootstrapping](guide_22_0__runtime-bootstrapping.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/runtime-overview.md) !

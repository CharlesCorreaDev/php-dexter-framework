# Application Structure: Application Structure Overview | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/structure-overview

---

0

# Overview [¶](#overview)

Yii applications are organized according to the [model-view-controller (MVC)](https://wikipedia.org/wiki/Model-view-controller)
architectural pattern. [Models](guide_22_0__structure-models.md) represent data, business logic and rules; [views](guide_22_0__structure-views.md)
are output representation of models; and [controllers](guide_22_0__structure-controllers.md) take input and convert
it to commands for [models](guide_22_0__structure-models.md) and [views](guide_22_0__structure-views.md).

Besides MVC, Yii applications also have the following entities:

- [entry scripts](guide_22_0__structure-entry-scripts.md): they are PHP scripts that are directly accessible by end users.
  They are responsible for starting a request handling cycle.
- [applications](guide_22_0__structure-applications.md): they are globally accessible objects that manage application components
  and coordinate them to fulfill requests.
- [application components](guide_22_0__structure-application-components.md): they are objects registered with applications and
  provide various services for fulfilling requests.
- [modules](guide_22_0__structure-modules.md): they are self-contained packages that contain complete MVC by themselves.
  An application can be organized in terms of multiple modules.
- [filters](guide_22_0__structure-filters.md): they represent code that need to be invoked before and after the actual
  handling of each request by controllers.
- [widgets](guide_22_0__structure-widgets.md): they are objects that can be embedded in [views](guide_22_0__structure-views.md). They
  may contain controller logic and can be reused in different views.

The following diagram shows the static structure of an application:

![Static Structure of Application](/doc/guide/22.0/en/images/application-structure.png)

[Getting Started: Looking Ahead](guide_22_0__start-looking-ahead.md)

[Go to Top](#top)

[Entry Scripts](guide_22_0__structure-entry-scripts.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/structure-overview.md) !

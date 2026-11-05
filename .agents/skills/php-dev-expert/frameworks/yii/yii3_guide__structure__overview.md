# Overview | Yii3 Documentation

> **Fonte / Source:** https://yiisoft.github.io/docs/guide/structure/overview.html

---

# Overview [​](#overview)

Yii applications code is typically grouped into modules by context. In each module there could be grouping by type.

For example, if the application is an online store, the context could be:

- Customer
  - Profile
  - Products list
  - Checkout
- Logistics
- Delivery
  - Addresses
- Helpdesk
  - Support
  - Claims
  - Returns
- Accounting
  - Returns
  - Transactions
  - Taxes

For a "Customer" context, residing under `App\Customer` namespace, structure would be:

```
App/
  Customer/                          <-- module namespace
    Entity/
      Customer.php                   <-- entity shared by "Profile" and "Checkout"
    Profile/
      Widget/
        Gravatar.php
      ProfileRepository.php          <-- repository is usually specific to context
      ProfileController.php          <-- "Customer\Profile" entry point
    ProductList/                     <-- module namespace 
      Entity/                        <-- entities specific to "Customer\ProductList"
        Category.php
        Product.php
      ProductsListController.php     <-- "Customer\ProductList" entry point
    Checkout/                        <-- module namespace
      CheckoutController.php
```

A context may include sub-contexts. If a class is shared by multiple contexts, it's moved to the ancestor of both contexts.

A context may have [an entry point known as "action" or "controller"](yii3_guide__structure__action.md). Its job is to take [a request instance](yii3_guide__runtime__request.md), pass it to [domain layer](https://yiisoft.github.io/docs/cookbook/organizing-code/domain.html) in a suitable format, and create [a response](yii3_guide__runtime__response.md) based on domain layer return.

Besides, Yii applications also have the following:

- [entry scripts](yii3_guide__structure__entry-script.md): they're PHP scripts that are directly accessible by end users. They're responsible for starting a request handling cycle. Typically, a single entry script is handling the whole application.
- [services](https://yiisoft.github.io/docs/cookbook/organizing-code/service.html): they're typically stateless objects registered within dependency container and provide various action methods.
- [middleware](yii3_guide__structure__middleware.md): they represent a code that needs to be invoked before and after the actual handling of each request by action handlers.

# NestedSets Model - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/model/nestedset.html

---

#### save($cascade = null, $use\_transaction = false)

The `save` method works exactly the same as the regular model's implementation.

However, when you use this method on new tree node objects, additional functionality is added to make sure the tree structure
stays consistent. When you call it on an object and you have used one of the collection methods documented below, the
new object is inserted in the tree relative to the object passed to the collection method.

If you haven't used a collection method, `save` will assume you want to insert a new root node. If the model is
a multi-tree model, it will create a new root with the next available tree-id (if the id is numeric. If not, assign a new
tree-id to the node object yourself).

If a root node can not be created because one already exists, an **OutOfBoundsException** will be thrown. If
the tree-id is not numeric, and you haven't supplied one manually, the result is **unpredicable**!

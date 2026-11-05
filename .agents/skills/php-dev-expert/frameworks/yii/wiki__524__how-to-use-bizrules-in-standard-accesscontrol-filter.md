# How to use bizRules in standard accessControl filter | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/524/how-to-use-bizrules-in-standard-accesscontrol-filter

---

## [How to use bizRules in standard accessControl filter](wiki__524__how-to-use-bizrules-in-standard-accesscontrol-filter.md)

3    0

8

Viewed: 24 292 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [data loader](wiki__index.md)
- [extension](wiki__index.md)
- [filter](wiki__index.md)
- [rbac](wiki__index.md)

Written by: [![Maciej Liżewski](/user/avatar/5739?v=1) Maciej Liżewski](https://www.yiiframework.com/user/5739)

Updated by: [![Maciej Liżewski](/user/avatar/5739?v=1) Maciej Liżewski](https://www.yiiframework.com/user/5739)

Created: Jul 3, 2013

Updated: 12 years ago

I assume you are familiar with accessControl standard filter. It allows you to separate privileges to run some action from action code itself. There is however one problem with most common usage - you cannot use bizRules, at least based on some parameters passed to 'checkAccess' just because it is hard to pass them in accessRules() result.

I would like to describe here programming pattern similar to Ruby On Rails, which simplifies some things and makes possible to use all advantages of RBAC with bizRules.

To do this you will need very simple extension: <http://www.yiiframework.com/extension/csdataloaderfilter/>

Then you may use it to load some models based on GET/POST params BEFORE accessControll filter is used, so you can pass models loaded this way in accessRules.

Example:

```
class MyController extends Controller {
   protected $model;

	public function filters() {
		return array(
			array( 'CSDataLoaderFilter', 'loadModel', 'on'=>array( 'action' ) ),
			'accessControl',
		);
	}
 
	public function accessRules() {
		return array(
			array( 'allow',
				'roles'=>array( 'allowEdit' => array( 'model'=>$this->model ) 
				'actions'=>array( 'action' ),
			),
			array( 'deny' ),
		);
	}
	
	public function loadModel() {
		$this->model = Model::model()->findByPk( Yii::app()->request->getParam( 'id' ) );
		if( $this->model === null ) {
			throw new CHttpException( 404, 'Model not found' );
		}
	}

	public function actionAction() {
		//you may use $this->model safely here - it is gauranteed that it is loaded, exists and user has privileges to run this action for loaded model
		...
	}
```

Now in details. Assume you have controller which runs some action against data models referenced with some id in URL, like: index.php?r=controller/action&id=123.

1. first you define controller attribute that will hold loaded model. It is easily accessible also from views.
2. then you define filters(). It is important to know, that filters are used in the same order they are defined in this method. This means you can load all required models and finally run authorization process to check if user is allowed to access them.
3. Access rules are defined as usual except that now you can reference loaded model as parameter to access rules (it is guaranteed that it is loaded or loadModel would throw exception). Passing attributes is crucial to properly use bizRules in authorization items.
4. data loader method - it is required that it must be "public" method (accessible from filter). You may implement scenarios when model is required (throw exception if it does not exists) or just optional models (leave null value in $this->model attribute)
5. you code actions as usual except that you do not need to load data in the beginning and check privileges - this pattern assures you that those checks are already done.

As you can see - it is extremely easy to implement and greatly clarifies controller code. Also makes possible to use standard access rules but with parameters needed for bizRules.

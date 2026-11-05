# How to use Expression in default AccessControl to allow only the owner to do some action | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/541/how-to-use-expression-in-default-accesscontrol-to-allow-only-the-owner-to-do-some-action

---

## [How to use Expression in default AccessControl to allow only the owner to do some action](wiki__541__how-to-use-expression-in-default-accesscontrol-to-allow-only-the-owner-to-do-some-action.md)

6    1

9

Viewed: 64 824 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [access control](wiki__index.md)
- [expression](wiki__index.md)
- [only owner](wiki__index.md)
- [owner](wiki__index.md)
- [rbac](wiki__index.md)
- [tutorial](wiki__index.md)

Written by: [![whatif](/image/user/default_user.svg) whatif](https://www.yiiframework.com/user/124644)

Updated by: [![DineshR](/image/user/default_user.svg) DineshR](https://www.yiiframework.com/user/234087)

Created: Jul 29, 2013

Updated: 11 years ago

Hi Everyone

You can use 'expression' option in default accessControl in any controller to allow only the owner to do some action in the controller.

You do not need to set up complex RBAC for simple use.

Here is how to do it.

```
class ExampleController extends Controller {
 /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' action
                'actions' => array('create'),
                'users' => array('@'),
            ),
            array('allow', // allow only the owner to perform 'view' 'update' 'delete' actions
                'actions' => array('view', 'update', 'delete'),
                'expression' => array('ExampleController','allowOnlyOwner')
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'foo', 'bar'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Allow only the owner to do the action
     * @return boolean whether or not the user is the owner
     */
    public function allowOnlyOwner(){
        if(Yii::app()->user->isAdmin){
            return true;
        }
        else{
            $example = Example::model()->findByPk($_GET["id"]); 
            return $example->uid === Yii::app()->user->id;
        }
    }
}
```

In this ExampleController, it uses the default accessControl and accessRule.

In this default accessRule, add actions to allow ( 'view', 'update', 'delete' ) and expression for it ( array('ExampleController','allowOnlyOwner') ).

"ExampleController" is the class where the method 'allowOnlyOwner' is.
These can be any other class and method. You can use $this instead of "ExampleController" if 'allowOnlyOwner" is in the same controller as accessRules.

In function allowOnlyOwner, I assumed that the user class has 'isAdmin' property ( Yii::app()->user->isAdmin ). This can be any other condition if you can check if the user is 'admin'.

For example,

```
//Check if the user name is in array of administrators
if(in_array(Yii::app()->user->name, array('admin', 'foo', 'bar'))){
            return true;
}
```

I also assumed that the primary key 'id' of Example::model() is given through $\_GET['id'] and $example->uid is the user's id in Example::model().

If the result ($example->uid === Yii::app()->user->id ) is true, then the action is allowed.

The $example can be reused to avoid duplicate loading by storing it as property in the controller. For example, $this->example = $example;

The whole code is below:

```
class ExampleController extends Controller {
   /**
     * Store the found result row of Example model
     */
    private $example = NULL;
   /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' action
                'actions' => array('create'),
                'users' => array('@'),
            ),
            array('allow', // allow only the owner to perform 'view' 'update' 'delete'                                       actions
                'actions' => array('view', 'update', 'delete'),
                'expression' => array('ExampleController','allowOnlyOwner')
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'foo', 'bar'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Allow only the owner to do the action
     * @return boolean whether or not the user is the owner
     */
    public function allowOnlyOwner(){
        if(Yii::app()->user->isAdmin){
            return true;
        }
        else{
            $example = Example::model()->findByPk($_GET["id"]);
            $this->example = $example; 
            return $example->uid === Yii::app()->user->id;
        }
    }

 /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();
            
            //initialize '$this->example' for next action
            $this->example = NULL;
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        if(!$this->example) $this->example = Example::model()->findByPk($id);
        if ($this->example === NULL)
            throw new CHttpException(404, 'The requested page does not exist.');
        
        return $this->example;
    }
}
```

Have fun.

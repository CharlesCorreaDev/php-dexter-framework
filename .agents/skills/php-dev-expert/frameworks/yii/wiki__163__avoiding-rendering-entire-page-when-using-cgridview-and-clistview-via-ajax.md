# Avoiding rendering entire page when using CGridView and CListView via AJAX | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/163/avoiding-rendering-entire-page-when-using-cgridview-and-clistview-via-ajax

---

## [Avoiding rendering entire page when using CGridView and CListView via AJAX](wiki__163__avoiding-rendering-entire-page-when-using-cgridview-and-clistview-via-ajax.md)

23    0

29

Viewed: 57 460 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [AJAX](wiki__index.md)
- [CGridView](wiki__index.md)
- [CListView](wiki__index.md)
- [Interactions](wiki__index.md)
- [render](wiki__index.md)

Written by: [![xrx](/image/user/default_user.svg) xrx](https://www.yiiframework.com/user/2985)

Updated by: [![xrx](/image/user/default_user.svg) xrx](https://www.yiiframework.com/user/2985)

Created: Mar 24, 2011

Updated: 14 years ago

Since I used CGridView for a first time, I didn't like how it handled operations like sorting, filtering, changing page and etc using AJAX.

Little background for those who are not aware of problem. When you, for example, change page on CGridView, you send AJAX request to current action. Entire page is rendered again just with different parameters to that particular CGridView. After that, widget gets only CGridView part of HTML code and replaces it with current CGridView HTML. Bad thing with this is: when entire page is rendered, it executes all other things on page including other widgets, queries, models and etc making it unusable for any complicated page you might have.

You can avoid this with filters, which will be executed before controller's action. The idea is that you extract CGridView code in separate method, so you can invoke it from view **and** in case of AJAX request. When you call AJAX request for specific CGridView, filter will intercept it and call method where we have CGridView code. Clear as mud, right?

Let's start with code, first let's create filter itself:
Create folder filters and file in it called GridViewHandler.php with following code:

```
<?php
class GridViewHandler extends CFilter {

	protected function preFilter($filterChain){
		if (Yii::app()->request->getIsAjaxRequest() && isset($_GET["ajax"])) {
			$selectedTable = $_GET["ajax"];
			$method='_getGridView'.$selectedTable;
			if(method_exists($filterChain->controller,$method)){
				$filterChain->controller->$method();
				Yii::app()->end();
			}else{
				throw new CHttpException(400,"CGridView handler function {$method} not defined in controller ".get_class($filterChain->controller));
			}
        }
        return true;
    }
}
?>
```

In controller where you have CGridView (famous Post controller), add filter (**after** accessControl if you have it), and extract CGridView code in separate method like this:

```
<?php
class PostController extends Controller{

	public function filters(){
		return array(
			array(
				'application.filters.GridViewHandler' //path to GridViewHandler.php class
			)
		);
	}

	public function actionIndex(){
		//you call _getGridViewPost in index view to display CGridView
		$this->render('index');	
	}

	//This is called by filter when CGridView (with id="Post") is invoked with AJAX request
	public function _getGridViewPost(){ 
		//create data provider and renderPartial CGridView widget
	}
}
```

So in index view, put \_$this->*getGridViewPost()* in place where you want your CGridView. In \_ *getGridViewPost* method, create your dataProvider and call *$this->renderPartial()* of view where you have your CGridView widget.

That's it! On first request, everything works as normal but when you interact with CGridView, filter intercepts request and call only method that is related to CGridView. This also satisfies **Convention Over Confituration** thing. Method with CGridView must have name \_getGridView{$ajaxVar} where {$ajaxVar} is widget ID (which is passed by $\_GET['ajax']).

This thing also works for CListView in very similar way.

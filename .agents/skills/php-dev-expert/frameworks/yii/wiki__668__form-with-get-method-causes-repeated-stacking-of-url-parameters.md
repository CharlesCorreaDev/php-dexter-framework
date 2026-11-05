# FORM with GET method causes repeated stacking of URL Parameters | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/668/form-with-get-method-causes-repeated-stacking-of-url-parameters

---

## [FORM with GET method causes repeated stacking of URL Parameters](wiki__668__form-with-get-method-causes-repeated-stacking-of-url-parameters.md)

7    2

41

Viewed: 70 006 times

Version: all

Category: [Tips](wiki__index.md)

- [form](wiki__index.md)
- [get](wiki__index.md)
- [hidden](wiki__index.md)
- [input](wiki__index.md)
- [parameter](wiki__index.md)
- [repeat](wiki__index.md)
- [repetition](wiki__index.md)
- [stacking](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Updated by: [![toph](/image/user/default_user.svg) toph](https://www.yiiframework.com/user/29351)

Created: May 6, 2014

Updated: 12 years ago

1. [Problem Statement](#problem-statement)
2. [Explanation](#explanation)
3. [Solution](#solution)

#### Problem Statement [¶](#problem-statement)

You are using an ActiveForm in yii (both v1.x or 2), with a GET method like below:

```
// In Yii 2
$form = ActiveForm::begin([
    'id' => 'order-search-form',
    'method' => 'get',
]);
echo $form->field($searchModel, 'id');
echo Html::submitButton('Find', ['class' => 'btn btn-primary']);
ActiveForm::end();

// In Yii 1.x
$form = $this->beginWidget('CActiveForm', [
    'id' => 'order-search-form',
    'method' => 'get',
]);
echo $form->textInput($searchModel, 'id');
echo CHtml::submitButton('Find', ['class' => 'btn btn-primary']);
$this->endWidget();
```

On form submission you encounter this situation:

- Initial uri is `order/index`.
- After submitting form with `id=111` your URL reads `order/index?id=111`.
- After submitting form again your URL reads `order/index?id=111&id=111`

... and so on. The id parameter above keeps on stacking repeatedly, and is not the correct way you want to be submitting a form with GET method.

#### Explanation [¶](#explanation)

The reason for the above behavior is due to a unique validation needed in Yii's `Html::beginForm` method. The query parameters in the action are ignored for GET method so Yii's `Html::beginForm` uses hidden inputs for each GET parameter to add them back. These hidden inputs gets stacked over the last URI call with every submission.

#### Solution [¶](#solution)

To avoid repeated parameter stacking, ensure you pass the action method while defining your form like below:

```
// In Yii 2
$form = ActiveForm::begin([
        'method' => 'get',
        'action' => Url::to(['order/index']),
]);

// In Yii 1.x
$form = $this->beginWidget('CActiveForm', [
        'method' => 'get',
        'action' => $this->createUrl('order/index'),
]);
```

This will automatically use the action URI set above for each form submission rather than relying on the URL from the address bar. Thus the URL parameter repetition and stacking will not happen.

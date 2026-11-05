# Simple Way to Upload and Save File | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/761/simple-way-to-upload-and-save-file

---

## [Simple Way to Upload and Save File](wiki__761__simple-way-to-upload-and-save-file.md)

0    0

4

Viewed: 44 994 times

Version: 2.0

Category: [Tutorials](wiki__index.md)

- [behavior](wiki__index.md)
- [File upload](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Misbahul D Munir](/image/user/default_user.svg) Misbahul D Munir](https://www.yiiframework.com/user/228408)

Updated by: [![Misbahul D Munir](/image/user/default_user.svg) Misbahul D Munir](https://www.yiiframework.com/user/228408)

Created: Oct 19, 2014

Updated: 12 years ago

This tutorial need extension [mdmsoft/yii2-upload-file](https://github.com/mdmsoft/yii2-upload-file). Follow the intruction to install.
After installation done, create `controller` and `action`

```
// in controller
public function actionCreate()
{
    $model = new DynamicModel([
        'nama', 'file_id'
        ]);

    // behavior untuk upload file
    $model->attachBehavior('upload', [
        'class' => 'mdm\upload\UploadBehavior',
        'attribute' => 'file',
        'savedAttribute' => 'file_id' // coresponding with $model->file_id
    ]);

    // rule untuk model
    $model->addRule('nama', 'string')
        ->addRule('file', 'file', ['extensions' => 'jpg']);

    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        if ($model->saveUploadedFile() !== false) {
            Yii::$app->session->setFlash('success', 'Upload Sukses');
        }
    }
    return $this->render('upload',['model' => $model]);
}
```

Then in view `upload.php`

```
<?php

use yii\base\DynamicModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
?>
<div>
    <?php
    $form = ActiveForm::begin([
            'options' => [ 'enctype' => 'multipart/form-data']
    ]);
    ?>
    <?= $form->field($model, 'nama'); ?>
    <?= $form->field($model, 'file')->fileInput(); ?>
    <?php if ($model->file_id): ?>
        <div class="form-group">
            <?= Html::img(['/file', 'id' => $model->file_id]) ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
```

Its how its look like
![screenshot](https://user-content.yiiframework.com/img/A3OgiK9epybm_4P74blFrw/http/mdmunir.files.wordpress.com/2014/10/screenshot-from-2014-10-19-094915-2.png "Screenshot")

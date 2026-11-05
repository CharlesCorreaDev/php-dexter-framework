# Simple way to implement Dynamic Tabular Inputs | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/805/simple-way-to-implement-dynamic-tabular-inputs

---

## [Simple way to implement Dynamic Tabular Inputs](wiki__805__simple-way-to-implement-dynamic-tabular-inputs.md)

5    0

10

Viewed: 95 776 times

Version: 2.0

Category: [Tutorials](wiki__index.md)

- [dynamic](wiki__index.md)
- [Forms](wiki__index.md)
- [tabular](wiki__index.md)

Written by: [![ezekielnoob](/user/avatar/72421?v=1) ezekielnoob](https://www.yiiframework.com/user/72421)

Updated by: [![samdark](/user/avatar/415?v=1) samdark](https://www.yiiframework.com/user/415)

Created: Mar 29, 2015

Updated: 7 years ago

![grid](https://user-content.yiiframework.com/img/MbezNvbZHFQyjOBQZ7xTfQ/https/camo.githubusercontent.com/d753d4420de760ba8e72405647c75462ca63f6f8/687474703a2f2f736e61672e67792f644d50786d2e6a7067)

On my experience in Yii IRC, once in a while there would be someone that asks about how to create pages that handles 1 main model and its submodel and saving the changes in a single click. i wrote the example application on top of Yii2's basic application template that you can download here (i suggest you also run the acceptance test to see it in action):
[Dynamic Tabular Form App](https://github.com/fernandezekiel/yii2-dynamic-tabular-form-app/ "Dynamic Tabular Form App")

My example is a simple receipt page that allows a header and to add details dynamically. The tutorial also keeps the javascript dependency to a minimum.

### Database [¶](#database)

1. [Create action features:](#create-action-features)
2. [Action create Steps:](#action-create-steps)
3. [Update action features:](#update-action-features)
4. [ReceiptDetail model](#receiptdetail-model)
5. [Update action steps:](#update-action-steps)
6. [\_form.php](#formphp)

```
[sql]
CREATE TABLE IF NOT EXISTS `receipt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `receipt_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receipt_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `receipt_detail_receipt_fk` (`receipt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

ALTER TABLE `receipt_detail`
  ADD CONSTRAINT `receipt_detail_receipt_fk` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`id`);
```

#### Create action features: [¶](#create-action-features)

1. validate, create and link together the Receipt and ReceiptDetails
2. have an addRow button that is used to add more rows in the page
3. create scenario that will not require the receipt\_id in the ReceiptDetail model, i call this SCENARIO\_BATCH\_UPDATE

all models here are new instances therefore there is not much complication on handling the page.

#### Action create Steps: [¶](#action-create-steps)

1. instantiate the Receipt model
2. instantiate the $modelDetails array, this will hold the actual ReceiptDetail instances.
   The number of elements contained in this will mirror the number of rows seen in the page
3. assign the $\_POST['ReceiptDetail'] to $formDetails array
4. iterate through $formDetails, create an instance of ReceiptDetail where you will massive assign each of the $formDetails
5. check if the addRow button is clicked instead of the create button, if so... add a new ReceiptDetail instance to the $modelDetails
   and go to the create page
6. if it's actually the create button that has been submitted, validate each $modelDetails and the $model which you have assigned the Receipt
7. save!

```
/**
     * Creates a new Receipt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Receipt();
        $modelDetails = [];

        $formDetails = Yii::$app->request->post('ReceiptDetail', []);
        foreach ($formDetails as $i => $formDetail) {
            $modelDetail = new ReceiptDetail(['scenario' => ReceiptDetail::SCENARIO_BATCH_UPDATE]);
            $modelDetail->setAttributes($formDetail);
            $modelDetails[] = $modelDetail;
        }

        //handling if the addRow button has been pressed
        if (Yii::$app->request->post('addRow') == 'true') {
            $model->load(Yii::$app->request->post());
            $modelDetails[] = new ReceiptDetail(['scenario' => ReceiptDetail::SCENARIO_BATCH_UPDATE]);
            return $this->render('create', [
                'model' => $model,
                'modelDetails' => $modelDetails
            ]);
        }

        if ($model->load(Yii::$app->request->post())) {
            if (Model::validateMultiple($modelDetails) && $model->validate()) {
                $model->save();
                foreach($modelDetails as $modelDetail) {
                    $modelDetail->receipt_id = $model->id;
                    $modelDetail->save();
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelDetails' => $modelDetails
        ]);
    }
```

#### Update action features: [¶](#update-action-features)

this will be the more complicated part, these are the additional features that it will have over the create:

1. updating of the Receipt and of the existing ReceiptDetail models
2. inserting new ReceiptDetail model
3. deletion of old ReceiptDetail model

#### ReceiptDetail model [¶](#receiptdetail-model)

to support the update part, we need to add particular scenarios to our model, here's my ReceiptDetail code

```
/**
 * This is the model class for table "receipt_detail".
 *
 * @property integer $id
 * @property integer $receipt_id
 * @property string $item_name
 *
 * @property Receipt $receipt
 */
class ReceiptDetail extends \yii\db\ActiveRecord
{
    /**
     * these are flags that are used by the form to dictate how the loop will handle each item
     */
    const UPDATE_TYPE_CREATE = 'create';
    const UPDATE_TYPE_UPDATE = 'update';
    const UPDATE_TYPE_DELETE = 'delete';

    const SCENARIO_BATCH_UPDATE = 'batchUpdate';

    private $_updateType;

    public function getUpdateType()
    {
        if (empty($this->_updateType)) {
            if ($this->isNewRecord) {
                $this->_updateType = self::UPDATE_TYPE_CREATE;
            } else {
                $this->_updateType = self::UPDATE_TYPE_UPDATE;
            }
        }

        return $this->_updateType;
    }

    public function setUpdateType($value)
    {
        $this->_updateType = $value;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'receipt_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['updateType', 'required', 'on' => self::SCENARIO_BATCH_UPDATE],
            ['updateType',
                'in',
                'range' => [self::UPDATE_TYPE_CREATE, self::UPDATE_TYPE_UPDATE, self::UPDATE_TYPE_DELETE],
                'on' => self::SCENARIO_BATCH_UPDATE
            ],
            ['item_name', 'required'],
            //allowing it to be empty because it will be filled by the ReceiptController
            ['receipt_id', 'required', 'except' => self::SCENARIO_BATCH_UPDATE],
            [['receipt_id'], 'integer'],
            [['item_name'], 'string', 'max' => 255]
        ];
    }
```

Notice that i have an updateType virtual attribute, this is going to be used by us to determine what kind of operation are we going to do
on a particular form row

This is what most people are looking for, have a streamlined page that the insertion, deletion, updating of the ReceiptDetail
be done in 1 submission.

#### Update action steps: [¶](#update-action-steps)

1. loading of the main $model
2. loading of the receiptDetail related models to the $modelDetails
3. assign the $\_POST['ReceiptDetail'] to $formDetails array
4. a. iterate through $formDetails, check if the the row includes an "ID", and if the 'updateType' is not calling for creation
   if this is the case, that means that it is asking us to load an existing ReceiptDetail model (regardless if it's for deletion or updating)
   b. if it's for creation, just like in our create Action we assign the $formDetail to a new instance of a ReceiptDetail
5. check if the addRow button is clicked, if so then add a new instance of ReceiptDetail to $modelDetails and go to the update page afterwards
6. if it's the "Save" button, validate all models. if the $modelDetail has an updateType for DELETE then call $modelDetail->delete() otherwise
   call save() (for UPDATE or CREATE)
7. Done!

```
/**
     * Updates an existing Receipt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelDetails = $model->receiptDetails;

        $formDetails = Yii::$app->request->post('ReceiptDetail', []);
        foreach ($formDetails as $i => $formDetail) {
            //loading the models if they are not new
            if (isset($formDetail['id']) && isset($formDetail['updateType']) && $formDetail['updateType'] != ReceiptDetail::UPDATE_TYPE_CREATE) {
                //making sure that it is actually a child of the main model
                $modelDetail = ReceiptDetail::findOne(['id' => $formDetail['id'], 'receipt_id' => $model->id]);
                $modelDetail->setScenario(ReceiptDetail::SCENARIO_BATCH_UPDATE);
                $modelDetail->setAttributes($formDetail);
                $modelDetails[$i] = $modelDetail;
                //validate here if the modelDetail loaded is valid, and if it can be updated or deleted
            } else {
                $modelDetail = new ReceiptDetail(['scenario' => ReceiptDetail::SCENARIO_BATCH_UPDATE]);
                $modelDetail->setAttributes($formDetail);
                $modelDetails[] = $modelDetail;
            }

        }

        //handling if the addRow button has been pressed
        if (Yii::$app->request->post('addRow') == 'true') {
            $modelDetails[] = new ReceiptDetail(['scenario' => ReceiptDetail::SCENARIO_BATCH_UPDATE]);
            return $this->render('update', [
                'model' => $model,
                'modelDetails' => $modelDetails
            ]);
        }

        if ($model->load(Yii::$app->request->post())) {
            if (Model::validateMultiple($modelDetails) && $model->validate()) {
                $model->save();
                foreach($modelDetails as $modelDetail) {
                    //details that has been flagged for deletion will be deleted
                    if ($modelDetail->updateType == ReceiptDetail::UPDATE_TYPE_DELETE) {
                        $modelDetail->delete();
                    } else {
                        //new or updated records go here
                        $modelDetail->receipt_id = $model->id;
                        $modelDetail->save();
                    }
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'modelDetails' => $modelDetails
        ]);

    }
```

#### \_form.php [¶](#formphp)

Form responsibilities:

1. function as a regular form for the Receipt model
2. for each instance of $modelDetail, display a row... with delete buttons
3. have hidden inputs that store id and updateType, for create the id is NULL and the updateType is CREATE, for update the id is populated with updateType == UPDATE
4. handle the delete button, if the row represents a ReceiptDetail has a scenario of update (this means it has been loaded from the DB) then we just mark it for deletion by making the updateType to DELETE
   otherwise if this is a new row that you just added using the addRow button, just remove the row entirely from the HTML page

```
use app\models\Receipt;
use app\models\ReceiptDetail;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receipt */
/* @var $form yii\widgets\ActiveForm */
/* @var $modelDetail app\models\ReceiptDetail */
?>
<?php $this->registerJs("
    $('.delete-button').click(function() {
        var detail = $(this).closest('.receipt-detail');
        var updateType = detail.find('.update-type');
        if (updateType.val() === " . json_encode(ReceiptDetail::UPDATE_TYPE_UPDATE) . ") {
            //marking the row for deletion
            updateType.val(" . json_encode(ReceiptDetail::UPDATE_TYPE_DELETE) . ");
            detail.hide();
        } else {
            //if the row is a new row, delete the row
            detail.remove();
        }

    });
");
?>
<div class="receipt-form">

    <?php $form = ActiveForm::begin([
        'enableClientValidation' => false
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>
    <?= "<h2>Details</h2>"?>

    <?php foreach ($modelDetails as $i => $modelDetail) : ?>
        <div class="row receipt-detail receipt-detail-<?= $i ?>">
            <div class="col-md-10">
                <?= Html::activeHiddenInput($modelDetail, "[$i]id") ?>
                <?= Html::activeHiddenInput($modelDetail, "[$i]updateType", ['class' => 'update-type']) ?>
                <?= $form->field($modelDetail, "[$i]item_name") ?>
            </div>
            <div class="col-md-2">
                <?= Html::button('x', ['class' => 'delete-button btn btn-danger', 'data-target' => "receipt-detail-$i"]) ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::submitButton('Add row', ['name' => 'addRow', 'value' => 'true', 'class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
```

# Optimize Scenarios for yii2 | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/852/optimize-scenarios-for-yii2

---

## [Optimize Scenarios for yii2](wiki__852__optimize-scenarios-for-yii2.md)

4    0

2

Viewed: 51 190 times

Version: 2.0

Category: [Tutorials](wiki__index.md)

- [model](wiki__index.md)
- [model validation](wiki__index.md)
- [validation rules](wiki__index.md)

Written by: [![AndroideLP](/user/avatar/148136?v=1) AndroideLP](https://www.yiiframework.com/user/148136)

Updated by: [![AndroideLP](/user/avatar/148136?v=1) AndroideLP](https://www.yiiframework.com/user/148136)

Created: Nov 8, 2016

Updated: 7 years ago

Working with scenarios, with models that can receive many modifications in their rules or structures as development evolves, can create disruptions in the rescue process.

One way to avoid this disorder is to encapsulate the information defined for the scenarios and to have a single point of customization.

For this we need to create constants for each scenario, note: once you define a scenario, you will need to use scenarios for any database edition that uses this model.

**In model**

```
class MyModel extends \yii\db\ActiveRecord
{

  const SCENARIOCREATE = 'scenariocreate';
  const SCENARIOUPDATE = 'scenarioupdate';

    // scenarios encapsulated
    public function getCustomScenarios()
    {
      
      return [
          self::SCENARIOCREATE      =>  ['user_id', 'name', 'desc', 'published','date_create'],
          self::SCENARIOUPDATE      =>  ['user_id', 'name', 'desc', 'date_update'],
      ];
    }
    // get scenarios
    public function scenarios()
    {
        $scenarios = $this->getCustomScenarios();
        return $scenarios;
    }

    // modify itens required for rules
    public function ModifyRequired()
    {

      $allscenarios = $this->getCustomScenarios();
      // published not required
      $allscenarios[self::SCENARIOCREATE] = array_diff($allscenarios[self::SCENARIOCREATE], ['published']);
      return $allscenarios;

    }

    public function rules()
    {
      // get scenarios
      $allscenarios = $this->ModifyRequired();
        return [
            [$allscenarios[self::SCENARIOCREATE], 'required', 'on' => self::SCENARIOCREATE],
            [$allscenarios[self::SCENARIOUPDATE], 'required', 'on' => self::SCENARIOUPDATE],
            [['user_id'], 'integer'],
            [['name','desc'], 'string', 'max' => 70],
            [['date_create', 'date_update'], 'date', 'format' => 'php:Y-m-d H:i:s'],
        ];
    }
```

GetCustomScenarios will be used for when you need to make column modifications.

The ModifyRequired is used to remove from the required, because at this point will be used getCustomScenarios for the save.

**In Controller**

```
public function actionIndex()
{

    $model = new MyModel;
    $model->scenario = 'scenariocreate';

    if ($model->load(\Yii::$app->request->post())){

        // force my columns
        if($model->save()){
          //return true
        } 
    }
}
```

It may seem redundant, but constructing the controller in this way, avoids having problems with maintenance of database tables, the adjustments will be made only in the model, since there is no reference of communes in the controller.

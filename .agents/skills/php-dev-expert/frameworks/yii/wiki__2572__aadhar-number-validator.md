# Aadhar Number Validator | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2572/aadhar-number-validator

---

## [Aadhar Number Validator](wiki__2572__aadhar-number-validator.md)

2    2

1

Viewed: 127 565 times

Version: 2.0

Category: [Tips](wiki__index.md)

- [validator](wiki__index.md)

Written by: [![shiv](/user/avatar/49611?v=3) shiv](https://www.yiiframework.com/user/49611)

Created: Sep 27, 2022

In India have Aadhar number an we may need to valid it a input.
So I created a validator for yii2

```
use yii\validators\Validator;

class TAadharNumberValidator extends Validator
{

    public $regExPattern = '/^\d{4}\s\d{4}\s\d{4}$/';

    public function validateAttribute($model, $attribute)
    {
        if (preg_match($this->regExPattern, $model->$attribute)) {
            $model->addError($attribute, 'Not valid Aadhar Card Number');
        }
    }
}
```

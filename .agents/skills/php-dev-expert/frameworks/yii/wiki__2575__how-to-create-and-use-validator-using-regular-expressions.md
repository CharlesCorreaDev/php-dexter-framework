# How to Create  and Use Validator Using Regular expressions | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2575/how-to-create-and-use-validator-using-regular-expressions

---

## [How to Create and Use Validator Using Regular expressions](wiki__2575__how-to-create-and-use-validator-using-regular-expressions.md)

4    0

1

Viewed: 170 317 times

Version: 2.0

Category: [How-tos](wiki__index.md)

- [custom validation rule](wiki__index.md)
- [Custom Validator](wiki__index.md)
- [Form validation](wiki__index.md)
- [RegExp](wiki__index.md)
- [validation](wiki__index.md)
- [validator](wiki__index.md)

Written by: [![aayushmhu](/image/user/default_user.svg) aayushmhu](https://www.yiiframework.com/user/614226)

Created: Nov 10, 2022

There are Multiple Ways to Create a Validator But here we use Regular Expression or JavaScript Regular Expression or RegExp for Creation Validators. In this article, we will see the most Frequently Used Expression

**Step 1 :** Create a New Class for Validator like below or  [Validator](https://www.yiiframework.com/doc/api/2.0/yii-validators-validator)

See First Example 10 Digit Mobile Number Validation

```
<?php

namespace common\validators;

use yii\validators\Validator;

class MobileValidator extends Validator {

    public function validateAttribute($model, $attribute) {
        if (isset($model->$attribute) and $model->$attribute != '') {
             if (!preg_match('/^[123456789]\d{9}$/', $model->$attribute)) {
                $this->addError($model, $attribute, 'In Valid Mobile / Phone number');
            }
        }
    }

}
```

Here We can Writee Diffrent Diffrent Regular Expression as Per Requirement
`` ` ``php
preg\_match('/^[123456789]\d{9}$/', $model->$attribute)
`` ` ``

**Step 2:** How tO Use Validator

I Hope Everyone Know How to use a validator but here is a example how to use it.

Add a New Rule in your Model Class Like this
`` ` ``php
[['mobile'],\common\validators\MobileValidator::class],
[['mobile'], 'string', 'max' => 10],

```
So It's Very Simple to use a Custom Validator.

As I Told you Earlier that i show you some more Example for Using Regular Expression  Validator Just Replace these string in preg_match.

1. Aadhar Number Validator
```php
preg_match('/^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/', $model->$attribute)
```

1. Bank Account Number Validator
   `` ` ``php
   preg\_match("/^[0-9]{9,18}+$/", $model->$attribute)
   `` ` ``
2. Bank IFSC Code Validator
   `` ` ``php
   preg\_match("/^[A-Z]{4}0[A-Z0-9]{6}$/", $model->$attribute)
   `` ` ``
3. Pan Card Number Validator
   `` ` ``php
   preg\_match('/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/', $model->$attribute)
   `` ` ``
4. Pin Code Validator
   `` ` ``php
   preg\_match('/^[0-9]{6}+$/', $model->$attribute)
   `` ` ``
5. GSTIN Validator
   `` ` ``php
   preg\_match("/^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9a-zA-Z]{1})+$/", $model->$attribute)
   `` ` ``

**This is Other Type of Custom Validator**

1. 500 Word Validator for a String

```
<?php

namespace common\validators;

use yii\validators\Validator;

/**
 * Class Word500Validator
 * @author Aayush Saini <aayushsaini9999@gmail.com>
 */
class Word500Validator extends Validator
{

    public function validateAttribute($model, $attribute)
    {
        if ($model->$attribute != '') {
            if (str_word_count($model->$attribute) > 500) {
                $this->addError($model, $attribute, $model->getAttributeLabel($attribute) . ' length can not exceeded 500 words.');
                \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return $model->errors;
            }
        }
    }
}
```

Now I assume that after reading this article you can create any type of validator as per your Requirement.

:) Thanks for Reading

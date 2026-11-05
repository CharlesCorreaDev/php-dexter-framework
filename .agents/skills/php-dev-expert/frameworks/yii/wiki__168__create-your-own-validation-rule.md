# Create your own Validation Rule | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/168/create-your-own-validation-rule

---

## [Create your own Validation Rule](wiki__168__create-your-own-validation-rule.md)

59    0

54

Viewed: 291 689 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [create validator](wiki__index.md)
- [model validation](wiki__index.md)
- [validation rules](wiki__index.md)
- [validator](wiki__index.md)

Written by: [![nickcv](/user/avatar/8296?v=1) nickcv](https://www.yiiframework.com/user/8296)

Updated by: [![Gismo](/image/user/default_user.svg) Gismo](https://www.yiiframework.com/user/7221)

Created: Mar 31, 2011

Updated: 13 years ago

1. [Easy approach: inside-model rule](#easy-approach-inside-model-rule)
2. [Complete approach: extending the CValidator class](#complete-approach-extending-the-cvalidator-class)
3. [Creating the class file](#creating-the-class-file)
4. [Implementing Client Validation](#implementing-client-validation)
5. [Last step: how to use your validation class inside the module rules](#last-step-how-to-use-your-validation-class-inside-the-module-rules)
6. [Links](#links)

Some times the core validation rules provided by Yii won't satisfy all your needs, so you'll need to create your very own validation rule.

#### Easy approach: inside-model rule [¶](#easy-approach-inside-model-rule)

The easiest way to create a new validation rule is inside the model that is going to use it.

Let's say that you want to check if a user password is safe enough.  
Usually you could achieve this result just by using the [CRegularExpressionValidator](http://www.yiiframework.com/doc/api/CRegularExpressionValidator) but for the sake of this guide let's pretend that validator does not exist.

first of all in your model class you'll have to add two constants

```
const WEAK = 0;
const STRONG = 1;
```

then in your rules method you'll have to set the rule

```
/**
 * @return array validation rules for model attributes.
 */
public function rules()
{
    return array(
       array('password', 'passwordStrength', 'strength'=>self::STRONG),
    );
}
```

make sure that you won't give the rule the name of an existing one, otherwise you are going to have some troubles later.

Now the only thing you need to do is create a new method inside the model, named after the validation rule you just declared.

```
/**
 * check if the user password is strong enough
 * check the password against the pattern requested
 * by the strength parameter
 * This is the 'passwordStrength' validator as declared in rules().
 */
public function passwordStrength($attribute,$params)
{
    if ($params['strength'] === self::WEAK)
        $pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';  
    elseif ($params['strength'] === self::STRONG)
        $pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';  

    if(!preg_match($pattern, $this->$attribute))
      $this->addError($attribute, 'your password is not strong enough!');
}
```

The new method you just created accepts two arguments:

- $attribute = is the name of the attribute that the method is validating
- $params = additional parameters that you could define in the rules

In our rules method we used this rule on the password attribute, so the value of attribute inside our validation model will be **password**

In the rule we also setted an additional parameter named **strength**  
the value of that parameter will be inside the $params array

As you can see inside the method we are making a call to [CModel::addError()](http://www.yiiframework.com/doc/api/1.1/CModel#addError-detail).  
Add Error accepts two parameters: the first one is the name of the attribute that you want to display the error in your form, the second one is the actual error string you want to be displayed.

#### Complete approach: extending the CValidator class [¶](#complete-approach-extending-the-cvalidator-class)

If you need your custom validation rule in more then one model the best thing to do is extending the CValidator class.  
Extending this class you also can take advantage of other features, like [CActiveForm::$enableClientValidation](http://www.yiiframework.com/doc/api/1.1/CActiveForm#enableClientValidation-detail), first implemented with Yii 1.1.7 release.

#### Creating the class file [¶](#creating-the-class-file)

The first thing that you have to do is create your class file. The best thing is to always name it after your class name, to best use Yii lazy loading feature.
Let's create a new directory inside your application extensions directory (which is located inside the protected directory).  
Name this directory *MyValidators*.  
Then we create our own file: **passwordStrength.php**

Inside this file create our CValidator class

```
class passwordStrength extends CValidator
{

    public $strength;

    private $weak_pattern = '/^(?=.*[a-zA-Z0-9]).{5,}$/';
    private $strong_pattern = '/^(?=.*\d(?=.*\d))(?=.*[a-zA-Z](?=.*[a-zA-Z])).{5,}$/';
...
```

In the class file create one attribute for each additional parameter that you want to use inside your validation rule.  
CValidator will take care to populate that attribute with the parameter value all by itself.  
We also created two other attributes, each containing the patterns we want to use in our preg\_match function.

Now we have to override the parent abstract method [validateAttribute](http://www.yiiframework.com/doc/api/1.1/CValidator#validateAttribute-detail)

```
/**
 * Validates the attribute of the object.
 * If there is any error, the error message is added to the object.
 * @param CModel $object the object being validated
 * @param string $attribute the attribute being validated
 */
protected function validateAttribute($object,$attribute)
{
    // check the strength parameter used in the validation rule of our model
    if ($this->strength == 'weak')
      $pattern = $this->weak_pattern;
    elseif ($this->strength == 'strong')
      $pattern = $this->strong_pattern;
		
    // extract the attribute value from it's model object
    $value=$object->$attribute;
    if(!preg_match($pattern, $value))
    {
        $this->addError($object,$attribute,'your password is too weak!');
    }
}
```

The method above is self explanatory i think.  
Of course you could use constants in those IF, and I actually recommend it.

#### Implementing Client Validation [¶](#implementing-client-validation)

If you want to implement client validation you'll need to override another method inside your class: clientValidateAttribute

```
/**
 * Returns the JavaScript needed for performing client-side validation.
 * @param CModel $object the data object being validated
 * @param string $attribute the name of the attribute to be validated.
 * @return string the client-side validation script.
 * @see CActiveForm::enableClientValidation
 */
public function clientValidateAttribute($object,$attribute)
{

    // check the strength parameter used in the validation rule of our model
    if ($this->strength == 'weak')
      $pattern = $this->weak_pattern;
    elseif ($this->strength == 'strong')
      $pattern = $this->strong_pattern;		

    $condition="!value.match({$pattern})";

    return "
if(".$condition.") {
    messages.push(".CJSON::encode('your password is too weak, you fool!').");
}
";
}
```

As you can see this method simply returns the javascript that you need to use for your validation

#### Last step: how to use your validation class inside the module rules [¶](#last-step-how-to-use-your-validation-class-inside-the-module-rules)

There are several approach you can use here.

You could first use [Yii::import](http://www.yiiframework.com/doc/api/1.1/YiiBase#import-detail) in the rules method before returning the rules array, or you can just use Yii dot notation:

```
/**
 * @return array validation rules for model attributes.
 */
public function rules()
{
    return array(
       array('password', 'ext.MyValidators.passwordStrength', 'strength'=>self::STRONG),
    );
}
```

#### Links [¶](#links)

- Russian version [The PHP Times](http://phptime.ru/blog/yii/27.html)

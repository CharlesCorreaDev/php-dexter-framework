# Eloquent: Mutators & Casting | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/eloquent-mutators

---

[Skip to content](#main-content)

# Eloquent: Mutators & Casting

- [Introduction](#introduction)
- [Accessors and Mutators](#accessors-and-mutators)
  - [Defining an Accessor](#defining-an-accessor)
  - [Defining a Mutator](#defining-a-mutator)
- [Attribute Casting](#attribute-casting)
  - [Array and JSON Casting](#array-and-json-casting)
  - [Vector Casting](#vector-casting)
  - [Binary Casting](#binary-casting)
  - [Date Casting](#date-casting)
  - [Enum Casting](#enum-casting)
  - [Encrypted Casting](#encrypted-casting)
  - [Query Time Casting](#query-time-casting)
- [Custom Casts](#custom-casts)
  - [Value Object Casting](#value-object-casting)
  - [Array / JSON Serialization](#array-json-serialization)
  - [Inbound Casting](#inbound-casting)
  - [Cast Parameters](#cast-parameters)
  - [Comparing Cast Values](#comparing-cast-values)
  - [Castables](#castables)

## [Introduction](#introduction)

Accessors, mutators, and attribute casting allow you to transform Eloquent attribute values when you retrieve or set them on model instances. For example, you may want to use the [Laravel encrypter](encryption.md) to encrypt a value while it is stored in the database, and then automatically decrypt the attribute when you access it on an Eloquent model. Or, you may want to convert a JSON string that is stored in your database to an array when it is accessed via your Eloquent model.

## [Accessors and Mutators](#accessors-and-mutators)

### [Defining an Accessor](#defining-an-accessor)

An accessor transforms an Eloquent attribute value when it is accessed. To define an accessor, create a protected method on your model to represent the accessible attribute. This method name should correspond to the "camel case" representation of the true underlying model attribute / database column when applicable.

In this example, we'll define an accessor for the `first_name` attribute. The accessor will automatically be called by Eloquent when attempting to retrieve the value of the `first_name` attribute. All attribute accessor / mutator methods must declare a return type-hint of `Illuminate\Database\Eloquent\Casts\Attribute`:

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Database\Eloquent\Casts\Attribute;

6use Illuminate\Database\Eloquent\Model;

7

8class User extends Model

9{

10    /**

11     * Get the user's first name.

12     */

13    protected function firstName(): Attribute

14    {

15        return Attribute::make(

16            get: fn (string $value) => ucfirst($value),

17        );

18    }

19}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the user's first name.
     */
    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }
}
```

All accessor methods return an `Attribute` instance which defines how the attribute will be accessed and, optionally, mutated. In this example, we are only defining how the attribute will be accessed. To do so, we supply the `get` argument to the `Attribute` class constructor.

As you can see, the original value of the column is passed to the accessor, allowing you to manipulate and return the value. To access the value of the accessor, you may simply access the `first_name` attribute on a model instance:

```
1use App\Models\User;

2

3$user = User::find(1);

4

5$firstName = $user->first_name;

use App\Models\User;

$user = User::find(1);

$firstName = $user->first_name;
```

If you would like these computed values to be added to the array / JSON representations of your model, [you will need to append them](eloquent-serialization.md#appending-values-to-json).

#### [Building Value Objects From Multiple Attributes](#building-value-objects-from-multiple-attributes)

Sometimes your accessor may need to transform multiple model attributes into a single "value object". To do so, your `get` closure may accept a second argument of `$attributes`, which will be automatically supplied to the closure and will contain an array of all of the model's current attributes:

```
1use App\Support\Address;

2use Illuminate\Database\Eloquent\Casts\Attribute;

3

4/**

5 * Interact with the user's address.

6 */

7protected function address(): Attribute

8{

9    return Attribute::make(

10        get: fn (mixed $value, array $attributes) => new Address(

11            $attributes['address_line_one'],

12            $attributes['address_line_two'],

13        ),

14    );

15}

use App\Support\Address;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * Interact with the user's address.
 */
protected function address(): Attribute
{
    return Attribute::make(
        get: fn (mixed $value, array $attributes) => new Address(
            $attributes['address_line_one'],
            $attributes['address_line_two'],
        ),
    );
}
```

#### [Accessor Caching](#accessor-caching)

When returning value objects from accessors, any changes made to the value object will automatically be synced back to the model before the model is saved. This is possible because Eloquent retains instances returned by accessors so it can return the same instance each time the accessor is invoked:

```
1use App\Models\User;

2

3$user = User::find(1);

4

5$user->address->lineOne = 'Updated Address Line 1 Value';

6$user->address->lineTwo = 'Updated Address Line 2 Value';

7

8$user->save();

use App\Models\User;

$user = User::find(1);

$user->address->lineOne = 'Updated Address Line 1 Value';
$user->address->lineTwo = 'Updated Address Line 2 Value';

$user->save();
```

However, you may sometimes wish to enable caching for primitive values like strings and booleans, particularly if they are computationally intensive. To accomplish this, you may invoke the `shouldCache` method when defining your accessor:

```
1protected function hash(): Attribute

2{

3    return Attribute::make(

4        get: fn (string $value) => bcrypt(gzuncompress($value)),

5    )->shouldCache();

6}

protected function hash(): Attribute
{
    return Attribute::make(
        get: fn (string $value) => bcrypt(gzuncompress($value)),
    )->shouldCache();
}
```

If you would like to disable the object caching behavior of attributes, you may invoke the `withoutObjectCaching` method when defining the attribute:

```
1/**

2 * Interact with the user's address.

3 */

4protected function address(): Attribute

5{

6    return Attribute::make(

7        get: fn (mixed $value, array $attributes) => new Address(

8            $attributes['address_line_one'],

9            $attributes['address_line_two'],

10        ),

11    )->withoutObjectCaching();

12}

/**
 * Interact with the user's address.
 */
protected function address(): Attribute
{
    return Attribute::make(
        get: fn (mixed $value, array $attributes) => new Address(
            $attributes['address_line_one'],
            $attributes['address_line_two'],
        ),
    )->withoutObjectCaching();
}
```

### [Defining a Mutator](#defining-a-mutator)

A mutator transforms an Eloquent attribute value when it is set. To define a mutator, you may provide the `set` argument when defining your attribute. Let's define a mutator for the `first_name` attribute. This mutator will be automatically called when we attempt to set the value of the `first_name` attribute on the model:

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Database\Eloquent\Casts\Attribute;

6use Illuminate\Database\Eloquent\Model;

7

8class User extends Model

9{

10    /**

11     * Interact with the user's first name.

12     */

13    protected function firstName(): Attribute

14    {

15        return Attribute::make(

16            get: fn (string $value) => ucfirst($value),

17            set: fn (string $value) => strtolower($value),

18        );

19    }

20}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Interact with the user's first name.
     */
    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value),
        );
    }
}
```

The mutator closure will receive the value that is being set on the attribute, allowing you to manipulate the value and return the manipulated value. To use our mutator, we only need to set the `first_name` attribute on an Eloquent model:

```
1use App\Models\User;

2

3$user = User::find(1);

4

5$user->first_name = 'Sally';

use App\Models\User;

$user = User::find(1);

$user->first_name = 'Sally';
```

In this example, the `set` callback will be called with the value `Sally`. The mutator will then apply the `strtolower` function to the name and set its resulting value in the model's internal `$attributes` array.

#### [Mutating Multiple Attributes](#mutating-multiple-attributes)

Sometimes your mutator may need to set multiple attributes on the underlying model. To do so, you may return an array from the `set` closure. Each key in the array should correspond with an underlying attribute / database column associated with the model:

```
1use App\Support\Address;

2use Illuminate\Database\Eloquent\Casts\Attribute;

3

4/**

5 * Interact with the user's address.

6 */

7protected function address(): Attribute

8{

9    return Attribute::make(

10        get: fn (mixed $value, array $attributes) => new Address(

11            $attributes['address_line_one'],

12            $attributes['address_line_two'],

13        ),

14        set: fn (Address $value) => [

15            'address_line_one' => $value->lineOne,

16            'address_line_two' => $value->lineTwo,

17        ],

18    );

19}

use App\Support\Address;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * Interact with the user's address.
 */
protected function address(): Attribute
{
    return Attribute::make(
        get: fn (mixed $value, array $attributes) => new Address(
            $attributes['address_line_one'],
            $attributes['address_line_two'],
        ),
        set: fn (Address $value) => [
            'address_line_one' => $value->lineOne,
            'address_line_two' => $value->lineTwo,
        ],
    );
}
```

## [Attribute Casting](#attribute-casting)

Attribute casting provides functionality similar to accessors and mutators without requiring you to define any additional methods on your model. Instead, your model's `casts` method provides a convenient way of converting attributes to common data types.

The `casts` method should return an array where the key is the name of the attribute being cast and the value is the type you wish to cast the column to. The supported cast types are:

- `array`
- `AsFluent::class`
- `AsStringable::class`
- `AsUri::class`
- `AsVector::class`
- `boolean`
- `collection`
- `date`
- `datetime`
- `immutable_date`
- `immutable_datetime`
- `decimal:<precision>`
- `double`
- `encrypted`
- `encrypted:array`
- `encrypted:collection`
- `encrypted:object`
- `float`
- `hashed`
- `integer`
- `object`
- `real`
- `string`
- `timestamp`

To demonstrate attribute casting, let's cast the `is_admin` attribute, which is stored in our database as an integer (`0` or `1`) to a boolean value:

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Database\Eloquent\Model;

6

7class User extends Model

8{

9    /**

10     * Get the attributes that should be cast.

11     *

12     * @return array<string, string>

13     */

14    protected function casts(): array

15    {

16        return [

17            'is_admin' => 'boolean',

18        ];

19    }

20}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_admin' => 'boolean',
        ];
    }
}
```

After defining the cast, the `is_admin` attribute will always be cast to a boolean when you access it, even if the underlying value is stored in the database as an integer:

```
1$user = App\Models\User::find(1);

2

3if ($user->is_admin) {

4    // ...

5}

$user = App\Models\User::find(1);

if ($user->is_admin) {
    // ...
}
```

If you need to add a new, temporary cast at runtime, you may use the `mergeCasts` method. These cast definitions will be added to any of the casts already defined on the model:

```
1$user->mergeCasts([

2    'is_admin' => 'integer',

3    'options' => 'object',

4]);

$user->mergeCasts([
    'is_admin' => 'integer',
    'options' => 'object',
]);
```

Attributes that are `null` will not be cast. In addition, you should never define a cast (or an attribute) that has the same name as a relationship or assign a cast to the model's primary key.

#### [Stringable Casting](#stringable-casting)

You may use the `Illuminate\Database\Eloquent\Casts\AsStringable` cast class to cast a model attribute to a [fluent Illuminate\Support\Stringable object](strings.md#fluent-strings-method-list):

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Database\Eloquent\Casts\AsStringable;

6use Illuminate\Database\Eloquent\Model;

7

8class User extends Model

9{

10    /**

11     * Get the attributes that should be cast.

12     *

13     * @return array<string, string>

14     */

15    protected function casts(): array

16    {

17        return [

18            'directory' => AsStringable::class,

19        ];

20    }

21}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsStringable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'directory' => AsStringable::class,
        ];
    }
}
```

### [Array and JSON Casting](#array-and-json-casting)

The `array` cast is particularly useful when working with columns that are stored as serialized JSON. For example, if your database has a `JSON` or `TEXT` field type that contains serialized JSON, adding the `array` cast to that attribute will automatically deserialize the attribute to a PHP array when you access it on your Eloquent model:

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Database\Eloquent\Model;

6

7class User extends Model

8{

9    /**

10     * Get the attributes that should be cast.

11     *

12     * @return array<string, string>

13     */

14    protected function casts(): array

15    {

16        return [

17            'options' => 'array',

18        ];

19    }

20}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'options' => 'array',
        ];
    }
}
```

Once the cast is defined, you may access the `options` attribute and it will automatically be deserialized from JSON into a PHP array. When you set the value of the `options` attribute, the given array will automatically be serialized back into JSON for storage:

```
1use App\Models\User;

2

3$user = User::find(1);

4

5$options = $user->options;

6

7$options['key'] = 'value';

8

9$user->options = $options;

10

11$user->save();

use App\Models\User;

$user = User::find(1);

$options = $user->options;

$options['key'] = 'value';

$user->options = $options;

$user->save();
```

To update a single field of a JSON attribute with a more terse syntax, you may [make the attribute mass assignable](eloquent.md#mass-assignment-json-columns) and use the `->` operator when calling the `update` method:

```
1$user = User::find(1);

2

3$user->update(['options->key' => 'value']);

$user = User::find(1);

$user->update(['options->key' => 'value']);
```

#### [JSON and Unicode](#json-and-unicode)

If you would like to store an array attribute as JSON with unescaped Unicode characters, you may use the `json:unicode` cast:

```
1/**

2 * Get the attributes that should be cast.

3 *

4 * @return array<string, string>

5 */

6protected function casts(): array

7{

8    return [

9        'options' => 'json:unicode',

10    ];

11}

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => 'json:unicode',
    ];
}
```

#### [Array Object and Collection Casting](#array-object-and-collection-casting)

Although the standard `array` cast is sufficient for many applications, it does have some disadvantages. Since the `array` cast returns a primitive type, it is not possible to mutate an offset of the array directly. For example, the following code will trigger a PHP error:

```
1$user = User::find(1);

2

3$user->options['key'] = $value;

$user = User::find(1);

$user->options['key'] = $value;
```

To solve this, Laravel offers an `AsArrayObject` cast that casts your JSON attribute to an [ArrayObject](https://www.php.net/manual/en/class.arrayobject.php) class. This feature is implemented using Laravel's [custom cast](#custom-casts) implementation, which allows Laravel to intelligently cache and transform the mutated object such that individual offsets may be modified without triggering a PHP error. To use the `AsArrayObject` cast, simply assign it to an attribute:

```
1use Illuminate\Database\Eloquent\Casts\AsArrayObject;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'options' => AsArrayObject::class,

12    ];

13}

use Illuminate\Database\Eloquent\Casts\AsArrayObject;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => AsArrayObject::class,
    ];
}
```

Similarly, Laravel offers an `AsCollection` cast that casts your JSON attribute to a Laravel [Collection](collections.md) instance:

```
1use Illuminate\Database\Eloquent\Casts\AsCollection;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'options' => AsCollection::class,

12    ];

13}

use Illuminate\Database\Eloquent\Casts\AsCollection;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => AsCollection::class,
    ];
}
```

By default, assigning `null` to an attribute cast with `AsArrayObject` or `AsCollection` will store the JSON `null` value in the database. If you would like `null` values to be stored as native SQL `NULL` values instead, you may invoke the `nullable` method when defining the cast:

```
1use Illuminate\Database\Eloquent\Casts\AsCollection;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'options' => AsCollection::nullable(),

12    ];

13}

use Illuminate\Database\Eloquent\Casts\AsCollection;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => AsCollection::nullable(),
    ];
}
```

The `nullable` method may also be combined with a custom collection class:

```
1'options' => AsCollection::nullable(OptionCollection::class),

'options' => AsCollection::nullable(OptionCollection::class),
```

The `AsArrayObject` cast also provides a `nullable` method with the same behavior.

If you would like the `AsCollection` cast to instantiate a custom collection class instead of Laravel's base collection class, you may provide the collection class name as a cast argument:

```
1use App\Collections\OptionCollection;

2use Illuminate\Database\Eloquent\Casts\AsCollection;

3

4/**

5 * Get the attributes that should be cast.

6 *

7 * @return array<string, string>

8 */

9protected function casts(): array

10{

11    return [

12        'options' => AsCollection::using(OptionCollection::class),

13    ];

14}

use App\Collections\OptionCollection;
use Illuminate\Database\Eloquent\Casts\AsCollection;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => AsCollection::using(OptionCollection::class),
    ];
}
```

The `of` method may be used to indicate collection items should be mapped into a given class via the collection's [mapInto method](collections.md#method-mapinto):

```
1use App\ValueObjects\Option;

2use Illuminate\Database\Eloquent\Casts\AsCollection;

3

4/**

5 * Get the attributes that should be cast.

6 *

7 * @return array<string, string>

8 */

9protected function casts(): array

10{

11    return [

12        'options' => AsCollection::of(Option::class)

13    ];

14}

use App\ValueObjects\Option;
use Illuminate\Database\Eloquent\Casts\AsCollection;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'options' => AsCollection::of(Option::class)
    ];
}
```

When mapping collections to objects, the object should implement the `Illuminate\Contracts\Support\Arrayable` and `JsonSerializable` interfaces to define how their instances should be serialized into the database as JSON:

```
1<?php

2

3namespace App\ValueObjects;

4

5use Illuminate\Contracts\Support\Arrayable;

6use JsonSerializable;

7

8class Option implements Arrayable, JsonSerializable

9{

10    public string $name;

11    public mixed $value;

12    public bool $isLocked;

13

14    /**

15     * Create a new Option instance.

16     */

17    public function __construct(array $data)

18    {

19        $this->name = $data['name'];

20        $this->value = $data['value'];

21        $this->isLocked = $data['is_locked'];

22    }

23

24    /**

25     * Get the instance as an array.

26     *

27     * @return array{name: string, data: string, is_locked: bool}

28     */

29    public function toArray(): array

30    {

31        return [

32            'name' => $this->name,

33            'value' => $this->value,

34            'is_locked' => $this->isLocked,

35        ];

36    }

37

38    /**

39     * Specify the data which should be serialized to JSON.

40     *

41     * @return array{name: string, data: string, is_locked: bool}

42     */

43    public function jsonSerialize(): array

44    {

45        return $this->toArray();

46    }

47}

<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class Option implements Arrayable, JsonSerializable
{
    public string $name;
    public mixed $value;
    public bool $isLocked;

    /**
     * Create a new Option instance.
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->value = $data['value'];
        $this->isLocked = $data['is_locked'];
    }

    /**
     * Get the instance as an array.
     *
     * @return array{name: string, data: string, is_locked: bool}
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'value' => $this->value,
            'is_locked' => $this->isLocked,
        ];
    }

    /**
     * Specify the data which should be serialized to JSON.
     *
     * @return array{name: string, data: string, is_locked: bool}
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
```

### [Vector Casting](#vector-casting)

You may use the `Illuminate\Database\Eloquent\Casts\AsVector` cast class to cast a database vector column to and from a PHP array:

```
1use Illuminate\Database\Eloquent\Casts\AsVector;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'embedding' => AsVector::class,

12    ];

13}

use Illuminate\Database\Eloquent\Casts\AsVector;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'embedding' => AsVector::class,
    ];
}
```

When setting the attribute, the cast accepts a PHP array or an `Arrayable` instance, such as a Laravel collection. When retrieving the attribute, the cast returns an array of floats.

### [Binary Casting](#binary-casting)

If your Eloquent model has a [binary type](migrations.md#column-method-binary) `uuid` or `ulid` column in addition to your model's auto-incrementing ID column, you may use the `AsBinary` cast to automatically cast the value to and from its binary representation:

```
1use Illuminate\Database\Eloquent\Casts\AsBinary;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'uuid' => AsBinary::uuid(),

12        'ulid' => AsBinary::ulid(),

13    ];

14}

use Illuminate\Database\Eloquent\Casts\AsBinary;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'uuid' => AsBinary::uuid(),
        'ulid' => AsBinary::ulid(),
    ];
}
```

Once the cast has been defined on the model, you may set the UUID / ULID attribute value to an object instance or a string. Eloquent will automatically cast the value to its binary representation. When retrieving the attribute's value, you will always receive a plain-text string value:

```
1use Illuminate\Support\Str;

2

3$user->uuid = Str::uuid();

4

5return $user->uuid;

6

7// "6e8cdeed-2f32-40bd-b109-1e4405be2140"

use Illuminate\Support\Str;

$user->uuid = Str::uuid();

return $user->uuid;

// "6e8cdeed-2f32-40bd-b109-1e4405be2140"
```

### [Date Casting](#date-casting)

By default, Eloquent will cast the `created_at` and `updated_at` columns to instances of [Carbon](https://github.com/briannesbitt/Carbon), which extends the PHP `DateTime` class and provides an assortment of helpful methods. You may cast additional date attributes by defining additional date casts within your model's `casts` method. Typically, dates should be cast using the `datetime` or `immutable_datetime` cast types.

When defining a `date` or `datetime` cast, you may also specify the date's format. This format will be used when the [model is serialized to an array or JSON](eloquent-serialization.md):

```
1/**

2 * Get the attributes that should be cast.

3 *

4 * @return array<string, string>

5 */

6protected function casts(): array

7{

8    return [

9        'created_at' => 'datetime:Y-m-d',

10    ];

11}

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'created_at' => 'datetime:Y-m-d',
    ];
}
```

When a column is cast as a date, you may set the corresponding model attribute value to a UNIX timestamp, date string (`Y-m-d`), date-time string, or a `DateTime` / `Carbon` instance. The date's value will be correctly converted and stored in your database.

You may customize the default serialization format for all of your model's dates by defining a `serializeDate` method on your model. This method does not affect how your dates are formatted for storage in the database:

```
1/**

2 * Prepare a date for array / JSON serialization.

3 */

4protected function serializeDate(DateTimeInterface $date): string

5{

6    return $date->format('Y-m-d');

7}

/**
 * Prepare a date for array / JSON serialization.
 */
protected function serializeDate(DateTimeInterface $date): string
{
    return $date->format('Y-m-d');
}
```

To specify the format that should be used when actually storing a model's dates within your database, you should use the `dateFormat` argument on your model's `Table` attribute:

```
1use Illuminate\Database\Eloquent\Attributes\Table;

2

3#[Table(dateFormat: 'U')]

4class Flight extends Model

5{

6    // ...

7}

use Illuminate\Database\Eloquent\Attributes\Table;

#[Table(dateFormat: 'U')]
class Flight extends Model
{
    // ...
}
```

#### [Date Casting, Serialization, and Timezones](#date-casting-and-timezones)

By default, the `date` and `datetime` casts will serialize dates to a UTC ISO-8601 date string (`YYYY-MM-DDTHH:MM:SS.uuuuuuZ`), regardless of the timezone specified in your application's `timezone` configuration option. You are strongly encouraged to always use this serialization format, as well as to store your application's dates in the UTC timezone by not changing your application's `timezone` configuration option from its default `UTC` value. Consistently using the UTC timezone throughout your application will provide the maximum level of interoperability with other date manipulation libraries written in PHP and JavaScript.

If a custom format is applied to the `date` or `datetime` cast, such as `datetime:Y-m-d H:i:s`, the inner timezone of the Carbon instance will be used during date serialization. Typically, this will be the timezone specified in your application's `timezone` configuration option. However, it's important to note that `timestamp` columns such as `created_at` and `updated_at` are exempt from this behavior and are always formatted in UTC, regardless of the application's timezone setting.

### [Enum Casting](#enum-casting)

Eloquent also allows you to cast your attribute values to PHP [Enums](https://www.php.net/manual/en/language.enumerations.backed.php). To accomplish this, you may specify the attribute and enum you wish to cast in your model's `casts` method:

```
1use App\Enums\ServerStatus;

2

3/**

4 * Get the attributes that should be cast.

5 *

6 * @return array<string, string>

7 */

8protected function casts(): array

9{

10    return [

11        'status' => ServerStatus::class,

12    ];

13}

use App\Enums\ServerStatus;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'status' => ServerStatus::class,
    ];
}
```

Once you have defined the cast on your model, the specified attribute will be automatically cast to and from an enum when you interact with the attribute:

```
1if ($server->status == ServerStatus::Provisioned) {

2    $server->status = ServerStatus::Ready;

3

4    $server->save();

5}

if ($server->status == ServerStatus::Provisioned) {
    $server->status = ServerStatus::Ready;

    $server->save();
}
```

#### [Casting Arrays of Enums](#casting-arrays-of-enums)

Sometimes you may need your model to store an array of enum values within a single column. To accomplish this, you may utilize the `AsEnumArrayObject` or `AsEnumCollection` casts provided by Laravel:

```
1use App\Enums\ServerStatus;

2use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

3

4/**

5 * Get the attributes that should be cast.

6 *

7 * @return array<string, string>

8 */

9protected function casts(): array

10{

11    return [

12        'statuses' => AsEnumCollection::of(ServerStatus::class),

13    ];

14}

use App\Enums\ServerStatus;
use Illuminate\Database\Eloquent\Casts\AsEnumCollection;

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'statuses' => AsEnumCollection::of(ServerStatus::class),
    ];
}
```

### [Encrypted Casting](#encrypted-casting)

The `encrypted` cast will encrypt a model's attribute value using Laravel's built-in [encryption](encryption.md) features. In addition, the `encrypted:array`, `encrypted:collection`, `encrypted:object`, `AsEncryptedArrayObject`, and `AsEncryptedCollection` casts work like their unencrypted counterparts; however, as you might expect, the underlying value is encrypted when stored in your database.

As the final length of the encrypted text is not predictable and is longer than its plain text counterpart, make sure the associated database column is of `TEXT` type or larger. In addition, since the values are encrypted in the database, you will not be able to query or search encrypted attribute values.

#### [Key Rotation](#key-rotation)

As you may know, Laravel encrypts strings using the `key` configuration value specified in your application's `app` configuration file. Typically, this value corresponds to the value of the `APP_KEY` environment variable. If you need to rotate your application's encryption key, you may [gracefully do so](encryption.md#gracefully-rotating-encryption-keys).

### [Query Time Casting](#query-time-casting)

Sometimes you may need to apply casts while executing a query, such as when selecting a raw value from a table. For example, consider the following query:

```
1use App\Models\Post;

2use App\Models\User;

3

4$users = User::select([

5    'users.*',

6    'last_posted_at' => Post::selectRaw('MAX(created_at)')

7        ->whereColumn('user_id', 'users.id')

8])->get();

use App\Models\Post;
use App\Models\User;

$users = User::select([
    'users.*',
    'last_posted_at' => Post::selectRaw('MAX(created_at)')
        ->whereColumn('user_id', 'users.id')
])->get();
```

The `last_posted_at` attribute on the results of this query will be a simple string. It would be wonderful if we could apply a `datetime` cast to this attribute when executing the query. Thankfully, we may accomplish this using the `withCasts` method:

```
1$users = User::select([

2    'users.*',

3    'last_posted_at' => Post::selectRaw('MAX(created_at)')

4        ->whereColumn('user_id', 'users.id')

5])->withCasts([

6    'last_posted_at' => 'datetime'

7])->get();

$users = User::select([
    'users.*',
    'last_posted_at' => Post::selectRaw('MAX(created_at)')
        ->whereColumn('user_id', 'users.id')
])->withCasts([
    'last_posted_at' => 'datetime'
])->get();
```

## [Custom Casts](#custom-casts)

Laravel has a variety of built-in, helpful cast types; however, you may occasionally need to define your own cast types. To create a cast, execute the `make:cast` Artisan command. The new cast class will be placed in your `app/Casts` directory:

```
1php artisan make:cast AsJson

php artisan make:cast AsJson
```

All custom cast classes implement the `CastsAttributes` interface. Classes that implement this interface must define a `get` and `set` method. The `get` method is responsible for transforming a raw value from the database into a cast value, while the `set` method should transform a cast value into a raw value that can be stored in the database. As an example, we will re-implement the built-in `json` cast type as a custom cast type:

```
1<?php

2

3namespace App\Casts;

4

5use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

6use Illuminate\Database\Eloquent\Model;

7

8class AsJson implements CastsAttributes

9{

10    /**

11     * Cast the given value.

12     *

13     * @param  array<string, mixed>  $attributes

14     * @return array<string, mixed>

15     */

16    public function get(

17        Model $model,

18        string $key,

19        mixed $value,

20        array $attributes,

21    ): array {

22        return json_decode($value, true);

23    }

24

25    /**

26     * Prepare the given value for storage.

27     *

28     * @param  array<string, mixed>  $attributes

29     */

30    public function set(

31        Model $model,

32        string $key,

33        mixed $value,

34        array $attributes,

35    ): string {

36        return json_encode($value);

37    }

38}

<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class AsJson implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     * @return array<string, mixed>
     */
    public function get(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): array {
        return json_decode($value, true);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): string {
        return json_encode($value);
    }
}
```

Once you have defined a custom cast type, you may attach it to a model attribute using its class name:

```
1<?php

2

3namespace App\Models;

4

5use App\Casts\AsJson;

6use Illuminate\Database\Eloquent\Model;

7

8class User extends Model

9{

10    /**

11     * Get the attributes that should be cast.

12     *

13     * @return array<string, string>

14     */

15    protected function casts(): array

16    {

17        return [

18            'options' => AsJson::class,

19        ];

20    }

21}

<?php

namespace App\Models;

use App\Casts\AsJson;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'options' => AsJson::class,
        ];
    }
}
```

### [Value Object Casting](#value-object-casting)

You are not limited to casting values to primitive types. You may also cast values to objects. Defining custom casts that cast values to objects is very similar to casting to primitive types; however, if your value object encompasses more than one database column, the `set` method must return an array of key / value pairs that will be used to set raw, storable values on the model. If your value object only affects a single column, you should simply return the storable value.

As an example, we will define a custom cast class that casts multiple model values into a single `Address` value object. We will assume the `Address` value object has two public properties: `lineOne` and `lineTwo`:

```
1<?php

2

3namespace App\Casts;

4

5use App\ValueObjects\Address;

6use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

7use Illuminate\Database\Eloquent\Model;

8use InvalidArgumentException;

9

10class AsAddress implements CastsAttributes

11{

12    /**

13     * Cast the given value.

14     *

15     * @param  array<string, mixed>  $attributes

16     */

17    public function get(

18        Model $model,

19        string $key,

20        mixed $value,

21        array $attributes,

22    ): Address {

23        return new Address(

24            $attributes['address_line_one'],

25            $attributes['address_line_two']

26        );

27    }

28

29    /**

30     * Prepare the given value for storage.

31     *

32     * @param  array<string, mixed>  $attributes

33     * @return array<string, string>

34     */

35    public function set(

36        Model $model,

37        string $key,

38        mixed $value,

39        array $attributes,

40    ): array {

41        if (! $value instanceof Address) {

42            throw new InvalidArgumentException('The given value is not an Address instance.');

43        }

44

45        return [

46            'address_line_one' => $value->lineOne,

47            'address_line_two' => $value->lineTwo,

48        ];

49    }

50}

<?php

namespace App\Casts;

use App\ValueObjects\Address;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class AsAddress implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): Address {
        return new Address(
            $attributes['address_line_one'],
            $attributes['address_line_two']
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     * @return array<string, string>
     */
    public function set(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): array {
        if (! $value instanceof Address) {
            throw new InvalidArgumentException('The given value is not an Address instance.');
        }

        return [
            'address_line_one' => $value->lineOne,
            'address_line_two' => $value->lineTwo,
        ];
    }
}
```

When casting to value objects, any changes made to the value object will automatically be synced back to the model before the model is saved:

```
1use App\Models\User;

2

3$user = User::find(1);

4

5$user->address->lineOne = 'Updated Address Value';

6

7$user->save();

use App\Models\User;

$user = User::find(1);

$user->address->lineOne = 'Updated Address Value';

$user->save();
```

If you plan to serialize your Eloquent models containing value objects to JSON or arrays, you should implement the `Illuminate\Contracts\Support\Arrayable` and `JsonSerializable` interfaces on the value object.

#### [Value Object Caching](#value-object-caching)

When attributes that are cast to value objects are resolved, they are cached by Eloquent. Therefore, the same object instance will be returned if the attribute is accessed again.

If you would like to disable the object caching behavior of custom cast classes, you may declare a public `withoutObjectCaching` property on your custom cast class:

```
1class AsAddress implements CastsAttributes

2{

3    public bool $withoutObjectCaching = true;

4

5    // ...

6}

class AsAddress implements CastsAttributes
{
    public bool $withoutObjectCaching = true;

    // ...
}
```

### [Array / JSON Serialization](#array-json-serialization)

When an Eloquent model is converted to an array or JSON using the `toArray` and `toJson` methods, your custom cast value objects will typically be serialized as well as long as they implement the `Illuminate\Contracts\Support\Arrayable` and `JsonSerializable` interfaces. However, when using value objects provided by third-party libraries, you may not have the ability to add these interfaces to the object.

Therefore, you may specify that your custom cast class will be responsible for serializing the value object. To do so, your custom cast class should implement the `Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes` interface. This interface states that your class should contain a `serialize` method which should return the serialized form of your value object:

```
1/**

2 * Get the serialized representation of the value.

3 *

4 * @param  array<string, mixed>  $attributes

5 */

6public function serialize(

7    Model $model,

8    string $key,

9    mixed $value,

10    array $attributes,

11): string {

12    return (string) $value;

13}

/**
 * Get the serialized representation of the value.
 *
 * @param  array<string, mixed>  $attributes
 */
public function serialize(
    Model $model,
    string $key,
    mixed $value,
    array $attributes,
): string {
    return (string) $value;
}
```

### [Inbound Casting](#inbound-casting)

Occasionally, you may need to write a custom cast class that only transforms values that are being set on the model and does not perform any operations when attributes are being retrieved from the model.

Inbound only custom casts should implement the `CastsInboundAttributes` interface, which only requires a `set` method to be defined. The `make:cast` Artisan command may be invoked with the `--inbound` option to generate an inbound only cast class:

```
1php artisan make:cast AsHash --inbound

php artisan make:cast AsHash --inbound
```

A classic example of an inbound only cast is a "hashing" cast. For example, we may define a cast that hashes inbound values via a given algorithm:

```
1<?php

2

3namespace App\Casts;

4

5use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;

6use Illuminate\Database\Eloquent\Model;

7

8class AsHash implements CastsInboundAttributes

9{

10    /**

11     * Create a new cast class instance.

12     */

13    public function __construct(

14        protected string|null $algorithm = null,

15    ) {}

16

17    /**

18     * Prepare the given value for storage.

19     *

20     * @param  array<string, mixed>  $attributes

21     */

22    public function set(

23        Model $model,

24        string $key,

25        mixed $value,

26        array $attributes,

27    ): string {

28        return is_null($this->algorithm)

29            ? bcrypt($value)

30            : hash($this->algorithm, $value);

31    }

32}

<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsInboundAttributes;
use Illuminate\Database\Eloquent\Model;

class AsHash implements CastsInboundAttributes
{
    /**
     * Create a new cast class instance.
     */
    public function __construct(
        protected string|null $algorithm = null,
    ) {}

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(
        Model $model,
        string $key,
        mixed $value,
        array $attributes,
    ): string {
        return is_null($this->algorithm)
            ? bcrypt($value)
            : hash($this->algorithm, $value);
    }
}
```

### [Cast Parameters](#cast-parameters)

When attaching a custom cast to a model, cast parameters may be specified by separating them from the class name using a `:` character and comma-delimiting multiple parameters. The parameters will be passed to the constructor of the cast class:

```
1/**

2 * Get the attributes that should be cast.

3 *

4 * @return array<string, string>

5 */

6protected function casts(): array

7{

8    return [

9        'secret' => AsHash::class.':sha256',

10    ];

11}

/**
 * Get the attributes that should be cast.
 *
 * @return array<string, string>
 */
protected function casts(): array
{
    return [
        'secret' => AsHash::class.':sha256',
    ];
}
```

### [Comparing Cast Values](#comparing-cast-values)

If you would like to define how two given cast values should be compared to determine if they have been changed, your custom cast class may implement the `Illuminate\Contracts\Database\Eloquent\ComparesCastableAttributes` interface. This allows you to have fine-grained control over which values Eloquent considers changed and thus saves to the database when a model is updated.

This interface states that your class should contain a `compare` method which should return `true` if the given values are considered equal:

```
1/**

2 * Determine if the given values are equal.

3 *

4 * @param  \Illuminate\Database\Eloquent\Model  $model

5 * @param  string  $key

6 * @param  mixed  $firstValue

7 * @param  mixed  $secondValue

8 * @return bool

9 */

10public function compare(

11    Model $model,

12    string $key,

13    mixed $firstValue,

14    mixed $secondValue

15): bool {

16    return $firstValue === $secondValue;

17}

/**
 * Determine if the given values are equal.
 *
 * @param  \Illuminate\Database\Eloquent\Model  $model
 * @param  string  $key
 * @param  mixed  $firstValue
 * @param  mixed  $secondValue
 * @return bool
 */
public function compare(
    Model $model,
    string $key,
    mixed $firstValue,
    mixed $secondValue
): bool {
    return $firstValue === $secondValue;
}
```

### [Castables](#castables)

You may want to allow your application's value objects to define their own custom cast classes. Instead of attaching the custom cast class to your model, you may alternatively attach a value object class that implements the `Illuminate\Contracts\Database\Eloquent\Castable` interface:

```
1use App\ValueObjects\Address;

2

3protected function casts(): array

4{

5    return [

6        'address' => Address::class,

7    ];

8}

use App\ValueObjects\Address;

protected function casts(): array
{
    return [
        'address' => Address::class,
    ];
}
```

Objects that implement the `Castable` interface must define a `castUsing` method that returns the class name of the custom caster class that is responsible for casting to and from the `Castable` class:

```
1<?php

2

3namespace App\ValueObjects;

4

5use Illuminate\Contracts\Database\Eloquent\Castable;

6use App\Casts\AsAddress;

7

8class Address implements Castable

9{

10    /**

11     * Get the name of the caster class to use when casting from / to this cast target.

12     *

13     * @param  array<string, mixed>  $arguments

14     */

15    public static function castUsing(array $arguments): string

16    {

17        return AsAddress::class;

18    }

19}

<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Database\Eloquent\Castable;
use App\Casts\AsAddress;

class Address implements Castable
{
    /**
     * Get the name of the caster class to use when casting from / to this cast target.
     *
     * @param  array<string, mixed>  $arguments
     */
    public static function castUsing(array $arguments): string
    {
        return AsAddress::class;
    }
}
```

When using `Castable` classes, you may still provide arguments in the `casts` method definition. The arguments will be passed to the `castUsing` method:

```
1use App\ValueObjects\Address;

2

3protected function casts(): array

4{

5    return [

6        'address' => Address::class.':argument',

7    ];

8}

use App\ValueObjects\Address;

protected function casts(): array
{
    return [
        'address' => Address::class.':argument',
    ];
}
```

#### [Castables & Anonymous Cast Classes](#anonymous-cast-classes)

By combining "castables" with PHP's [anonymous classes](https://www.php.net/manual/en/language.oop5.anonymous.php), you may define a value object and its casting logic as a single castable object. To accomplish this, return an anonymous class from your value object's `castUsing` method. The anonymous class should implement the `CastsAttributes` interface:

```
1<?php

2

3namespace App\ValueObjects;

4

5use Illuminate\Contracts\Database\Eloquent\Castable;

6use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

7

8class Address implements Castable

9{

10    // ...

11

12    /**

13     * Get the caster class to use when casting from / to this cast target.

14     *

15     * @param  array<string, mixed>  $arguments

16     */

17    public static function castUsing(array $arguments): CastsAttributes

18    {

19        return new class implements CastsAttributes

20        {

21            public function get(

22                Model $model,

23                string $key,

24                mixed $value,

25                array $attributes,

26            ): Address {

27                return new Address(

28                    $attributes['address_line_one'],

29                    $attributes['address_line_two']

30                );

31            }

32

33            public function set(

34                Model $model,

35                string $key,

36                mixed $value,

37                array $attributes,

38            ): array {

39                return [

40                    'address_line_one' => $value->lineOne,

41                    'address_line_two' => $value->lineTwo,

42                ];

43            }

44        };

45    }

46}

<?php

namespace App\ValueObjects;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Address implements Castable
{
    // ...

    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array<string, mixed>  $arguments
     */
    public static function castUsing(array $arguments): CastsAttributes
    {
        return new class implements CastsAttributes
        {
            public function get(
                Model $model,
                string $key,
                mixed $value,
                array $attributes,
            ): Address {
                return new Address(
                    $attributes['address_line_one'],
                    $attributes['address_line_two']
                );
            }

            public function set(
                Model $model,
                string $key,
                mixed $value,
                array $attributes,
            ): array {
                return [
                    'address_line_one' => $value->lineOne,
                    'address_line_two' => $value->lineTwo,
                ];
            }
        };
    }
}
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Accessors and Mutators](#accessors-and-mutators)
  - [Defining an Accessor](#defining-an-accessor)
  - [Defining a Mutator](#defining-a-mutator)
- [Attribute Casting](#attribute-casting)
  - [Array and JSON Casting](#array-and-json-casting)
  - [Vector Casting](#vector-casting)
  - [Binary Casting](#binary-casting)
  - [Date Casting](#date-casting)
  - [Enum Casting](#enum-casting)
  - [Encrypted Casting](#encrypted-casting)
  - [Query Time Casting](#query-time-casting)
- [Custom Casts](#custom-casts)
  - [Value Object Casting](#value-object-casting)
  - [Array / JSON Serialization](#array-json-serialization)
  - [Inbound Casting](#inbound-casting)
  - [Cast Parameters](#cast-parameters)
  - [Comparing Cast Values](#comparing-cast-values)
  - [Castables](#castables)

Laravel is the most productive way to  
 build, deploy, and monitor software.

First name

Last name

Email address

Stay updated

By submitting this form, you agree to our [terms](https://laravel.com/legal). You can opt-out anytime.

- © 2026 Laravel
- [Legal](https://laravel.com/legal)
- [Status](https://status.laravel.com/)

Products

- [Cloud](https://laravel.com/cloud)
- [Forge](https://forge.laravel.com)
- [Nightwatch](https://nightwatch.laravel.com)
- [Vapor](https://vapor.laravel.com)
- [Nova](https://nova.laravel.com)

Packages

- [Cashier](billing.md)
- [Dusk](dusk.md)
- [Horizon](horizon.md)
- [Octane](octane.md)
- [Scout](scout.md)
- [Pennant](pennant.md)
- [Pint](pint.md)
- [Sail](sail.md)
- [Sanctum](sanctum.md)
- [Socialite](socialite.md)
- [Telescope](telescope.md)
- [Pulse](pulse.md)
- [Reverb](reverb.md)
- [Echo](broadcasting.md)

Resources

- [Documentation](index.md)
- [Starter Kits](https://laravel.com/starter-kits)
- [Release Notes](releases.md)
- [Blog](https://laravel.com/blog)
- [News](https://laravel-news.com)
- [Community](https://laravel.com/community)
- [Larabelles](https://larabelles.com/)
- [Learn](https://laravel.com/learn)
- [Jobs](https://larajobs.com/?partner=5)
- [Careers](https://laravel.com/careers)
- [Trust](https://trust.laravel.com)

Partners

- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Jump24](https://laravel.com/partners/jump24)
- [Vehikl](https://laravel.com/partners/vehikl)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Redberry](https://laravel.com/partners/redberry)
- [64 Robots](https://laravel.com/partners/64-robots)
- [Tighten](https://laravel.com/partners/tighten)
- [byte5](https://laravel.com/partners/byte5)
- [Pixel](https://laravel.com/partners/pixel)
- [Threadable](https://laravel.com/partners/threadable)
- [See All](https://laravel.com/partners)

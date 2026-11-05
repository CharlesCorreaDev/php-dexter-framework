# Image Manipulation | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/images

---

[Skip to content](#main-content)

# Image Manipulation

- [Introduction](#introduction)
- [Installation](#installation)
  - [Configuration](#configuration)
- [Reading Images](#reading-images)
  - [Uploaded Files](#uploaded-files)
  - [Storage Files](#storage-files)
  - [Other Sources](#other-sources)
- [Manipulating Images](#manipulating-images)
  - [Resizing Images](#resizing-images)
  - [Other Transformations](#other-transformations)
- [Encoding Images](#encoding-images)
- [Storing Images](#storing-images)
- [Inspecting Images](#inspecting-images)
- [Image Drivers](#image-drivers)
  - [Custom Image Drivers](#custom-image-drivers)
  - [Custom Transformations](#custom-transformations)

## [Introduction](#introduction)

Laravel provides a fluent image manipulation API that allows you to resize, crop, encode, and store images using the same expressive conventions found throughout the framework. Laravel's image features are powered by [Intervention Image](https://image.intervention.io/) and support the GD and Imagick PHP extensions.

The image API is useful when working with uploaded files, files stored on Laravel [filesystem disks](filesystem.md), local files, remote URLs, or raw image bytes:

```
1use Illuminate\Support\Facades\Image;

2

3$path = Image::fromStorage('avatars/photo.jpg', 'public')

4    ->cover(400, 400)

5    ->toWebp()

6    ->quality(80)

7    ->storePublicly('avatars', 'public');

use Illuminate\Support\Facades\Image;

$path = Image::fromStorage('avatars/photo.jpg', 'public')
    ->cover(400, 400)
    ->toWebp()
    ->quality(80)
    ->storePublicly('avatars', 'public');
```

Image manipulation can be CPU and memory-intensive. Consider performing large image processing workloads on a [queued job](queues.md) instead of during the HTTP request that receives the upload.

## [Installation](#installation)

Before using Laravel's image manipulation features, install the Intervention Image package via Composer:

```
1composer require intervention/image:^4.0

composer require intervention/image:^4.0
```

You should also ensure your PHP installation has either the GD or Imagick extension installed, depending on which driver your application will use.

### [Configuration](#configuration)

Laravel's image configuration file is located at `config/images.php`. If your application does not have an `images` configuration file, you may publish it using the `config:publish` Artisan command:

```
1php artisan config:publish images

php artisan config:publish images
```

The image configuration file allows you to specify your application's default image driver. You may also specify the default driver using the `IMAGE_DRIVER` environment variable. The supported drivers are `gd` and `imagick`:

```
1IMAGE_DRIVER=imagick

IMAGE_DRIVER=imagick
```

## [Reading Images](#reading-images)

The `Image` facade provides several methods for reading images from common sources. Image contents are loaded lazily, so the source is typically not read until the image is processed or its bytes are requested.

### [Uploaded Files](#uploaded-files)

You may retrieve an uploaded image from an incoming request using the `image` method. This method returns an `Illuminate\Image\Image` instance for the uploaded file, or `null` if the file is not present:

```
1use Illuminate\Http\Request;

2

3Route::post('/avatar', function (Request $request) {

4    $request->validate(['avatar' => ['required', 'image']]);

5

6    $path = $request->image('avatar')

7        ->cover(400, 400)

8        ->toWebp()

9        ->storePublicly('avatars', 'public');

10

11    // ...

12});

use Illuminate\Http\Request;

Route::post('/avatar', function (Request $request) {
    $request->validate(['avatar' => ['required', 'image']]);

    $path = $request->image('avatar')
        ->cover(400, 400)
        ->toWebp()
        ->storePublicly('avatars', 'public');

    // ...
});
```

Alternatively, you may create an image instance from an `Illuminate\Http\UploadedFile` instance using the `fromUpload` method:

```
1use Illuminate\Support\Facades\Image;

2

3$image = Image::fromUpload($request->file('avatar'));

use Illuminate\Support\Facades\Image;

$image = Image::fromUpload($request->file('avatar'));
```

When an image is created from an uploaded file, you may retrieve the underlying uploaded file using the `file` method:

```
1$file = $image->file();

$file = $image->file();
```

### [Storage Files](#storage-files)

You may create an image instance from a file stored on one of your application's [filesystem disks](filesystem.md) using the `fromStorage` method. The first argument is the path to the file, while the second argument is the disk name:

```
1use Illuminate\Support\Facades\Image;

2

3$image = Image::fromStorage('avatars/photo.jpg', disk: 'public');

use Illuminate\Support\Facades\Image;

$image = Image::fromStorage('avatars/photo.jpg', disk: 'public');
```

You may also create image instances directly from a filesystem disk instance using the `image` method:

```
1use Illuminate\Support\Facades\Storage;

2

3$image = Storage::disk('public')->image('avatars/photo.jpg');

use Illuminate\Support\Facades\Storage;

$image = Storage::disk('public')->image('avatars/photo.jpg');
```

### [Other Sources](#other-sources)

The `Image` facade also includes methods for creating image instances from raw bytes, local file paths, remote URLs, and Base64 encoded strings:

```
1use Illuminate\Support\Facades\Image;

2

3$image = Image::fromBytes($contents);

4$image = Image::fromBase64($base64);

5$image = Image::fromPath(storage_path('app/avatars/photo.jpg'));

6$image = Image::fromUrl('https://example.com/photo.jpg');

use Illuminate\Support\Facades\Image;

$image = Image::fromBytes($contents);
$image = Image::fromBase64($base64);
$image = Image::fromPath(storage_path('app/avatars/photo.jpg'));
$image = Image::fromUrl('https://example.com/photo.jpg');
```

## [Manipulating Images](#manipulating-images)

Image instances are immutable. Each manipulation method returns a new image instance with the transformation appended to its processing pipeline, allowing methods to be chained fluently:

```
1$image = $request->image('avatar')

2    ->orient()

3    ->cover(400, 400)

4    ->sharpen(10);

$image = $request->image('avatar')
    ->orient()
    ->cover(400, 400)
    ->sharpen(10);
```

Transformations are processed in the order they are added to the image pipeline and the image is only encoded once at the end.

### [Resizing Images](#resizing-images)

The `resize` method resizes an image to the given dimensions. You may provide both a width and height, or provide only one dimension using named arguments:

```
1$image = $image->resize(800, 600);

2$image = $image->resize(width: 800);

3$image = $image->resize(height: 600);

$image = $image->resize(800, 600);
$image = $image->resize(width: 800);
$image = $image->resize(height: 600);
```

The `scale` method proportionally scales an image down so that it fits within the given dimensions. This method will never increase the size of an image:

```
1$image = $image->scale(800, 600);

2$image = $image->scale(width: 800);

3$image = $image->scale(height: 600);

$image = $image->scale(800, 600);
$image = $image->scale(width: 800);
$image = $image->scale(height: 600);
```

The `cover` method resizes and crops an image to completely cover the given dimensions:

```
1$image = $image->cover(400, 400);

$image = $image->cover(400, 400);
```

The `contain` method resizes an image to fit within the given dimensions while preserving the entire image. If necessary, empty space will be filled using the optional background color:

```
1$image = $image->contain(400, 400);

2$image = $image->contain(400, 400, '#ffffff');

3$image = $image->contain(400, 400, 'dominant');

$image = $image->contain(400, 400);
$image = $image->contain(400, 400, '#ffffff');
$image = $image->contain(400, 400, 'dominant');
```

You may specify `dominant` as the background color to fill empty space using the image's dominant color.

You may crop an image using the `crop` method. The first two arguments are the desired width and height, and the optional third and fourth arguments specify the crop's `x` and `y` coordinates:

```
1$image = $image->crop(300, 200);

2$image = $image->crop(300, 200, x: 50, y: 25);

$image = $image->crop(300, 200);
$image = $image->crop(300, 200, x: 50, y: 25);
```

### [Other Transformations](#other-transformations)

Laravel also provides a variety of additional image transformation methods:

```
1$image = $image->orient();

2$image = $image->rotate(90);

3$image = $image->rotate(90, '#ffffff');

4$image = $image->rotate(90, 'dominant');

5$image = $image->blur(5);

6$image = $image->grayscale();

7$image = $image->sharpen(10);

8$image = $image->flipVertically();

9$image = $image->flipHorizontally();

$image = $image->orient();
$image = $image->rotate(90);
$image = $image->rotate(90, '#ffffff');
$image = $image->rotate(90, 'dominant');
$image = $image->blur(5);
$image = $image->grayscale();
$image = $image->sharpen(10);
$image = $image->flipVertically();
$image = $image->flipHorizontally();
```

The `orient` method rotates the image according to its EXIF orientation data. The `rotate` method rotates the image clockwise by the given angle and accepts an optional background color. The `blur` and `sharpen` methods accept values between `0` and `100`.

#### [Conditional Transformations](#conditional-transformations)

Image instances support Laravel's `Conditionable` trait, allowing you to conditionally apply transformations using the `when` and `unless` methods:

```
1$image = $request->image('avatar')

2    ->when($request->boolean('crop'), fn ($image) => $image->cover(400, 400))

3    ->unless($request->boolean('preserve_format'), fn ($image) => $image->toWebp());

$image = $request->image('avatar')
    ->when($request->boolean('crop'), fn ($image) => $image->cover(400, 400))
    ->unless($request->boolean('preserve_format'), fn ($image) => $image->toWebp());
```

## [Encoding Images](#encoding-images)

By default, processed images are encoded using their original format. However, you may convert the image to another supported format before retrieving or storing it:

```
1$image = $image->toWebp();

2$image = $image->toJpg();

3$image = $image->toJpeg();

4$image = $image->toPng();

5$image = $image->toGif();

6$image = $image->toAvif();

7$image = $image->toBmp();

$image = $image->toWebp();
$image = $image->toJpg();
$image = $image->toJpeg();
$image = $image->toPng();
$image = $image->toGif();
$image = $image->toAvif();
$image = $image->toBmp();
```

You may use the `quality` method to set the output quality. The quality will be clamped between `1` and `100`:

```
1$image = $image->toWebp()->quality(80);

$image = $image->toWebp()->quality(80);
```

The `optimize` method is a convenient shortcut for converting the image to a given format and setting its quality. By default, images are optimized as WebP images with a quality of `70`:

```
1$image = $image->optimize();

2

3$image = $image->optimize(format: 'jpg', quality: 85);

$image = $image->optimize();

$image = $image->optimize(format: 'jpg', quality: 85);
```

You may retrieve the processed image contents as a string of bytes, base64 encoded string, or data URI:

```
1$bytes = $image->toBytes();

2$base64 = $image->toBase64();

3$dataUri = $image->toDataUri();

$bytes = $image->toBytes();
$base64 = $image->toBase64();
$dataUri = $image->toDataUri();
```

An image instance may also be cast to a string to retrieve a data URI:

```
1$dataUri = (string) $image;

$dataUri = (string) $image;
```

## [Storing Images](#storing-images)

The `store` method stores the processed image on one of your application's filesystem disks. Like uploaded files, Laravel will generate a unique filename and return the stored path. The second argument may be used to specify the disk:

```
1$path = $request->image('avatar')

2    ->cover(400, 400)

3    ->store(path: 'avatars');

4

5$path = $request->image('avatar')

6    ->cover(400, 400)

7    ->store(path: 'avatars', disk: 's3');

$path = $request->image('avatar')
    ->cover(400, 400)
    ->store(path: 'avatars');

$path = $request->image('avatar')
    ->cover(400, 400)
    ->store(path: 'avatars', disk: 's3');
```

You may use the `storeAs` method to specify the stored filename:

```
1$path = $request->image('avatar')

2    ->cover(400, 400)

3    ->storeAs(path: 'avatars', name: 'avatar.jpg', disk: 'public');

$path = $request->image('avatar')
    ->cover(400, 400)
    ->storeAs(path: 'avatars', name: 'avatar.jpg', disk: 'public');
```

The `storePublicly` and `storePubliclyAs` methods store the image with `public` visibility:

```
1$path = $request->image('avatar')

2    ->cover(400, 400)

3    ->storePublicly(path: 'avatars', disk: 'public');

4

5$path = $request->image('avatar')

6    ->cover(400, 400)

7    ->storePubliclyAs(path: 'avatars', name: 'avatar.webp', disk: 'public');

$path = $request->image('avatar')
    ->cover(400, 400)
    ->storePublicly(path: 'avatars', disk: 'public');

$path = $request->image('avatar')
    ->cover(400, 400)
    ->storePubliclyAs(path: 'avatars', name: 'avatar.webp', disk: 'public');
```

If the image could not be stored, the storage methods return `false`.

## [Inspecting Images](#inspecting-images)

You may retrieve the image's MIME type, extension, dimensions, width, height, and dominant color using the following methods:

```
1$mimeType = $image->mimeType();

2$extension = $image->extension();

3

4[$width, $height] = $image->dimensions();

5$width = $image->width();

6$height = $image->height();

7

8$dominantColor = $image->dominantColor();

$mimeType = $image->mimeType();
$extension = $image->extension();

[$width, $height] = $image->dimensions();
$width = $image->width();
$height = $image->height();

$dominantColor = $image->dominantColor();
```

These methods operate on the processed image. For example, calling `width` after `cover(400, 400)` will return `400`.

## [Image Drivers](#image-drivers)

### [Custom Image Drivers](#custom-image-drivers)

Laravel's image manager extends Laravel's base `Illuminate\Support\Manager` class. This means you may register custom image drivers using the `extend` method available on the image manager and `Image` facade.

Custom image drivers should implement the `Illuminate\Contracts\Image\Driver` interface. The `process` method receives the original image contents and the ordered `Illuminate\Image\ImagePipeline` that should be applied to the image, and should return the processed image bytes. The `dimensions` method should return the image's width and height, while the `dominantColor` method should return the image's average color as a hex string:

```
1<?php

2

3namespace App\Images;

4

5use Illuminate\Contracts\Image\Driver;

6use Illuminate\Image\ImagePipeline;

7

8class VipsDriver implements Driver

9{

10    /**

11     * Process the given image contents with the specified pipeline.

12     */

13    public function process(string $contents, ImagePipeline $pipeline): string

14    {

15        // Apply the pipeline's transformations and output options...

16

17        return $contents;

18    }

19

20    /**

21     * Get the dimensions of the given image contents.

22     */

23    public function dimensions(string $contents): array

24    {

25        // Read the image's width and height...

26

27        return [0, 0];

28    }

29

30    /**

31     * Get the dominant (average) color of the image as a hex string.

32     */

33    public function dominantColor(string $contents): string

34    {

35        // Calculate the image's average color...

36

37        return '#000000';

38    }

39

40    /**

41     * Register a transformation handler.

42     */

43    public function transformUsing(string $transformation, callable $callback): static

44    {

45        // Store the handler so it may be applied while processing the pipeline...

46

47        return $this;

48    }

49}

<?php

namespace App\Images;

use Illuminate\Contracts\Image\Driver;
use Illuminate\Image\ImagePipeline;

class VipsDriver implements Driver
{
    /**
     * Process the given image contents with the specified pipeline.
     */
    public function process(string $contents, ImagePipeline $pipeline): string
    {
        // Apply the pipeline's transformations and output options...

        return $contents;
    }

    /**
     * Get the dimensions of the given image contents.
     */
    public function dimensions(string $contents): array
    {
        // Read the image's width and height...

        return [0, 0];
    }

    /**
     * Get the dominant (average) color of the image as a hex string.
     */
    public function dominantColor(string $contents): string
    {
        // Calculate the image's average color...

        return '#000000';
    }

    /**
     * Register a transformation handler.
     */
    public function transformUsing(string $transformation, callable $callback): static
    {
        // Store the handler so it may be applied while processing the pipeline...

        return $this;
    }
}
```

To better understand how to implement a custom image driver, you may review the framework's built-in `Illuminate\Image\Drivers\InterventionDriver` class.

Once you have implemented your custom driver, you may register it using the `Image` facade's `extend` method. Typically, this should be done in the `boot` method of a service provider:

```
1use App\Images\VipsDriver;

2use Illuminate\Contracts\Foundation\Application;

3use Illuminate\Support\Facades\Image;

4

5/**

6 * Bootstrap any application services.

7 */

8public function boot(): void

9{

10    Image::extend('vips', function (Application $app) {

11        return new VipsDriver;

12    });

13}

use App\Images\VipsDriver;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Image;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Image::extend('vips', function (Application $app) {
        return new VipsDriver;
    });
}
```

After registering the driver, you may use it for a specific image using the `using` method:

```
1$image = $request->image('avatar')

2    ->using('vips')

3    ->cover(400, 400);

$image = $request->image('avatar')
    ->using('vips')
    ->cover(400, 400);
```

You may also configure a custom driver as your application's default image driver using the `default` option in your application's `config/images.php` configuration file or the `IMAGE_DRIVER` environment variable:

```
1IMAGE_DRIVER=vips

IMAGE_DRIVER=vips
```

### [Custom Transformations](#custom-transformations)

Applications and packages may define custom transformations by creating a class that implements the `Illuminate\Contracts\Image\Transformation` contract. Custom transformations can then be added to an image pipeline using the `transform` method:

```
1<?php

2

3namespace App\Images\Transformations;

4

5use Illuminate\Contracts\Image\Transformation;

6

7class Pixelate implements Transformation

8{

9    public function __construct(

10        public readonly int $size,

11    ) {

12        //

13    }

14}

<?php

namespace App\Images\Transformations;

use Illuminate\Contracts\Image\Transformation;

class Pixelate implements Transformation
{
    public function __construct(
        public readonly int $size,
    ) {
        //
    }
}
```

Next, register a handler for the transformation and driver using the `Image` facade's `transformUsing` method. Typically, this should be done in the `boot` method of a service provider:

```
1use App\Images\Transformations\Pixelate;

2use Illuminate\Support\Facades\Image;

3use Intervention\Image\Interfaces\ImageInterface;

4

5Image::transformUsing('gd', Pixelate::class, function (ImageInterface $image, Pixelate $transformation) {

6    return $image->pixelate($transformation->size);

7});

use App\Images\Transformations\Pixelate;
use Illuminate\Support\Facades\Image;
use Intervention\Image\Interfaces\ImageInterface;

Image::transformUsing('gd', Pixelate::class, function (ImageInterface $image, Pixelate $transformation) {
    return $image->pixelate($transformation->size);
});
```

Once the transformation handler has been registered, you may apply the transformation to an image:

```
1use App\Images\Transformations\Pixelate;

2

3$image = $request->image('avatar')

4    ->transform(new Pixelate(12))

5    ->store('avatars');

use App\Images\Transformations\Pixelate;

$image = $request->image('avatar')
    ->transform(new Pixelate(12))
    ->store('avatars');
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Installation](#installation)
  - [Configuration](#configuration)
- [Reading Images](#reading-images)
  - [Uploaded Files](#uploaded-files)
  - [Storage Files](#storage-files)
  - [Other Sources](#other-sources)
- [Manipulating Images](#manipulating-images)
  - [Resizing Images](#resizing-images)
  - [Other Transformations](#other-transformations)
- [Encoding Images](#encoding-images)
- [Storing Images](#storing-images)
- [Inspecting Images](#inspecting-images)
- [Image Drivers](#image-drivers)
  - [Custom Image Drivers](#custom-image-drivers)
  - [Custom Transformations](#custom-transformations)

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

- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Jump24](https://laravel.com/partners/jump24)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [Vehikl](https://laravel.com/partners/vehikl)
- [Kirschbaum](https://laravel.com/partners/kirschbaum)
- [Pixel](https://laravel.com/partners/pixel)
- [Curotec](https://laravel.com/partners/curotec)
- [Tighten](https://laravel.com/partners/tighten)
- [See All](https://laravel.com/partners)

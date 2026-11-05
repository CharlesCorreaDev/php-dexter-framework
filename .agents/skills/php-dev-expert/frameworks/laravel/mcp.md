# Laravel MCP | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/mcp

---

[Skip to content](#main-content)

# Laravel MCP

- [Introduction](#introduction)
- [Installation](#installation)
  - [Publishing Routes](#publishing-routes)
- [Creating Servers](#creating-servers)
  - [Server Registration](#server-registration)
  - [Web Servers](#web-servers)
  - [Local Servers](#local-servers)
  - [Cache Hints](#cache-hints)
- [Tools](#tools)
  - [Creating Tools](#creating-tools)
  - [Searchable Tool Catalogs](#searchable-tool-catalogs)
  - [Tool Input Schemas](#tool-input-schemas)
  - [Tool Output Schemas](#tool-output-schemas)
  - [Validating Tool Arguments](#validating-tool-arguments)
  - [Tool Dependency Injection](#tool-dependency-injection)
  - [Tool Annotations](#tool-annotations)
  - [Conditional Tool Registration](#conditional-tool-registration)
  - [Tool Responses](#tool-responses)
- [Prompts](#prompts)
  - [Creating Prompts](#creating-prompts)
  - [Prompt Arguments](#prompt-arguments)
  - [Validating Prompt Arguments](#validating-prompt-arguments)
  - [Prompt Dependency Injection](#prompt-dependency-injection)
  - [Conditional Prompt Registration](#conditional-prompt-registration)
  - [Prompt Responses](#prompt-responses)
- [Resources](#resources)
  - [Creating Resources](#creating-resources)
  - [Resource Templates](#resource-templates)
  - [Resource URI and MIME Type](#resource-uri-and-mime-type)
  - [Resource Request](#resource-request)
  - [Resource Dependency Injection](#resource-dependency-injection)
  - [Resource Annotations](#resource-annotations)
  - [Conditional Resource Registration](#conditional-resource-registration)
  - [Resource Responses](#resource-responses)
- [Apps](#apps)
  - [Creating App Resources](#creating-app-resources)
  - [Rendering Apps From Tools](#rendering-apps-from-tools)
  - [App Tool Visibility](#app-tool-visibility)
  - [App Configuration](#app-configuration)
  - [Building Apps With Boost](#building-apps-with-boost)
- [Metadata](#metadata)
- [Icons](#icons)
- [Authentication](#authentication)
  - [OAuth 2.1](#oauth)
  - [Sanctum](#sanctum)
- [Authorization](#authorization)
- [MCP Client](#client)
  - [Connecting to Servers](#client-connecting)
  - [Named Clients](#named-clients)
  - [Client Authentication](#client-authentication)
  - [Tools](#client-tools)
  - [Prompts](#client-prompts)
  - [Resources](#client-resources)
- [Testing Servers](#testing-servers)
  - [MCP Inspector](#mcp-inspector)
  - [Unit Tests](#unit-tests)

## [Introduction](#introduction)

[Laravel MCP](https://github.com/laravel/mcp) provides a simple and elegant way for AI clients to interact with your Laravel application through the [Model Context Protocol](https://modelcontextprotocol.io/docs/getting-started/intro). It offers an expressive, fluent interface for defining servers, tools, resources, and prompts that enable AI-powered interactions with your application.

## [Installation](#installation)

To get started, install Laravel MCP into your project using the Composer package manager:

```
1composer require laravel/mcp

composer require laravel/mcp
```

### [Publishing Routes](#publishing-routes)

After installing Laravel MCP, execute the `vendor:publish` Artisan command to publish the `routes/ai.php` file where you will define your MCP servers:

```
1php artisan vendor:publish --tag=ai-routes

php artisan vendor:publish --tag=ai-routes
```

This command creates the `routes/ai.php` file in your application's `routes` directory, which you will use to register your MCP servers.

## [Creating Servers](#creating-servers)

You can create an MCP server using the `make:mcp-server` Artisan command. Servers act as the central communication point that exposes MCP capabilities like tools, resources, and prompts to AI clients:

```
1php artisan make:mcp-server WeatherServer

php artisan make:mcp-server WeatherServer
```

This command will create a new server class in the `app/Mcp/Servers` directory. The generated server class extends Laravel MCP's base `Laravel\Mcp\Server` class and provides attributes and properties for configuring the server and registering tools, resources, and prompts:

```
1<?php

2

3namespace App\Mcp\Servers;

4

5use Laravel\Mcp\Server\Attributes\Instructions;

6use Laravel\Mcp\Server\Attributes\Name;

7use Laravel\Mcp\Server\Attributes\Version;

8use Laravel\Mcp\Server;

9

10#[Name('Weather Server')]

11#[Version('1.0.0')]

12#[Instructions('This server provides weather information and forecasts.')]

13class WeatherServer extends Server

14{

15    /**

16     * The tools registered with this MCP server.

17     *

18     * @var array<int, class-string<\Laravel\Mcp\Server\Tool>>

19     */

20    protected array $tools = [

21        // GetCurrentWeatherTool::class,

22    ];

23

24    /**

25     * The resources registered with this MCP server.

26     *

27     * @var array<int, class-string<\Laravel\Mcp\Server\Resource>>

28     */

29    protected array $resources = [

30        // WeatherGuidelinesResource::class,

31    ];

32

33    /**

34     * The prompts registered with this MCP server.

35     *

36     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>

37     */

38    protected array $prompts = [

39        // DescribeWeatherPrompt::class,

40    ];

41}

<?php

namespace App\Mcp\Servers;

use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;
use Laravel\Mcp\Server;

#[Name('Weather Server')]
#[Version('1.0.0')]
#[Instructions('This server provides weather information and forecasts.')]
class WeatherServer extends Server
{
    /**
     * The tools registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Tool>>
     */
    protected array $tools = [
        // GetCurrentWeatherTool::class,
    ];

    /**
     * The resources registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Resource>>
     */
    protected array $resources = [
        // WeatherGuidelinesResource::class,
    ];

    /**
     * The prompts registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>
     */
    protected array $prompts = [
        // DescribeWeatherPrompt::class,
    ];
}
```

### [Server Registration](#server-registration)

Once you've created a server, you must register it in your `routes/ai.php` file to make it accessible. Laravel MCP provides two methods for registering servers: `web` for HTTP-accessible servers and `local` for command-line servers.

### [Web Servers](#web-servers)

Web servers are the most common types of servers and are accessible via HTTP POST requests, making them ideal for remote AI clients or web-based integrations. Register a web server using the `web` method:

```
1use App\Mcp\Servers\WeatherServer;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::web('/mcp/weather', WeatherServer::class);

use App\Mcp\Servers\WeatherServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/weather', WeatherServer::class);
```

Just like normal routes, you may apply middleware to protect your web servers:

```
1Mcp::web('/mcp/weather', WeatherServer::class)

2    ->middleware(['throttle:mcp']);

Mcp::web('/mcp/weather', WeatherServer::class)
    ->middleware(['throttle:mcp']);
```

### [Local Servers](#local-servers)

Local servers run as Artisan commands, perfect for building local AI assistant integrations like [Laravel Boost](installation.md#installing-laravel-boost). Register a local server using the `local` method:

```
1use App\Mcp\Servers\WeatherServer;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::local('weather', WeatherServer::class);

use App\Mcp\Servers\WeatherServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::local('weather', WeatherServer::class);
```

Once registered, you should not typically need to manually run the `mcp:start` Artisan command yourself. Instead, configure your MCP client (AI agent) to start the server or use the [MCP Inspector](#mcp-inspector).

### [Cache Hints](#cache-hints)

Laravel MCP includes cache hints with responses that may be cached, such as server discovery, primitive listings, and resource reads. By default, these responses are marked as private with a time to live of zero milliseconds.

You may customize the default cache hint for a server using the `Cacheable` attribute:

```
1use Laravel\Mcp\Enums\CacheScope;

2use Laravel\Mcp\Server\Attributes\Cacheable;

3

4#[Cacheable(ttlMs: 60_000, scope: CacheScope::Public)]

5class WeatherServer extends Server

6{

7    /**

8     * Get the cache hints for individual MCP methods.

9     *

10     * @return array<string, \Laravel\Mcp\Server\Attributes\Cacheable>

11     */

12    protected function cacheHints(): array

13    {

14        return [

15            'tools/list' => new Cacheable(ttlMs: 30_000, scope: CacheScope::Public),

16        ];

17    }

18}

use Laravel\Mcp\Enums\CacheScope;
use Laravel\Mcp\Server\Attributes\Cacheable;

#[Cacheable(ttlMs: 60_000, scope: CacheScope::Public)]
class WeatherServer extends Server
{
    /**
     * Get the cache hints for individual MCP methods.
     *
     * @return array<string, \Laravel\Mcp\Server\Attributes\Cacheable>
     */
    protected function cacheHints(): array
    {
        return [
            'tools/list' => new Cacheable(ttlMs: 30_000, scope: CacheScope::Public),
        ];
    }
}
```

The `CacheScope::Private` scope limits cached responses to the same authorization context, while `CacheScope::Public` allows responses to be shared between users. Cache hints are advisory; the MCP client or host determines whether a response is actually cached. Method-specific hints returned by `cacheHints` take precedence over the server's `Cacheable` attribute.

You may override the server's cache hint for an individual resource by applying the `Cacheable` attribute to the resource class:

```
1#[Cacheable(ttlMs: 300_000, scope: CacheScope::Public)]

2class WeatherGuidelinesResource extends Resource

3{

4    // ...

5}

#[Cacheable(ttlMs: 300_000, scope: CacheScope::Public)]
class WeatherGuidelinesResource extends Resource
{
    // ...
}
```

A resource's `Cacheable` attribute takes precedence over both the method-specific hint and the server's default hint.

## [Tools](#tools)

Tools enable your server to expose functionality that AI clients can call. They allow language models to perform actions, run code, or interact with external systems:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Attributes\Description;

9use Laravel\Mcp\Server\Tool;

10

11#[Description('Fetches the current weather forecast for a specified location.')]

12class CurrentWeatherTool extends Tool

13{

14    /**

15     * Handle the tool request.

16     */

17    public function handle(Request $request): Response

18    {

19        $location = $request->get('location');

20

21        // Get weather...

22

23        return Response::text('The weather is...');

24    }

25

26    /**

27     * Get the tool's input schema.

28     *

29     * @return array<string, \Illuminate\JsonSchema\Types\Type>

30     */

31    public function schema(JsonSchema $schema): array

32    {

33        return [

34            'location' => $schema->string()

35                ->description('The location to get the weather for.')

36                ->required(),

37        ];

38    }

39}

<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tool;

#[Description('Fetches the current weather forecast for a specified location.')]
class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request): Response
    {
        $location = $request->get('location');

        // Get weather...

        return Response::text('The weather is...');
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, \Illuminate\JsonSchema\Types\Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'location' => $schema->string()
                ->description('The location to get the weather for.')
                ->required(),
        ];
    }
}
```

### [Creating Tools](#creating-tools)

To create a tool, run the `make:mcp-tool` Artisan command:

```
1php artisan make:mcp-tool CurrentWeatherTool

php artisan make:mcp-tool CurrentWeatherTool
```

After creating a tool, register it in your server's `$tools` property:

```
1<?php

2

3namespace App\Mcp\Servers;

4

5use App\Mcp\Tools\CurrentWeatherTool;

6use Laravel\Mcp\Server;

7

8class WeatherServer extends Server

9{

10    /**

11     * The tools registered with this MCP server.

12     *

13     * @var array<int, class-string<\Laravel\Mcp\Server\Tool>>

14     */

15    protected array $tools = [

16        CurrentWeatherTool::class,

17    ];

18}

<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\CurrentWeatherTool;
use Laravel\Mcp\Server;

class WeatherServer extends Server
{
    /**
     * The tools registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Tool>>
     */
    protected array $tools = [
        CurrentWeatherTool::class,
    ];
}
```

### [Searchable Tool Catalogs](#searchable-tool-catalogs)

Servers with many tools can place some tools in a searchable catalog instead of advertising every tool to the AI client. A searchable catalog exposes two tools: `search_tools`, which searches the catalog by tool name, description, and input schema; and `execute_tools`, which invokes one or more tools returned by a search.

To create a searchable catalog, use the `ToolSearch` class as an array key in your server's `$tools` property:

```
1<?php

2

3namespace App\Mcp\Servers;

4

5use App\Mcp\Tools\CurrentWeatherTool;

6use App\Mcp\Tools\HistoricalWeatherTool;

7use App\Mcp\Tools\WeatherAlertsTool;

8use Laravel\Mcp\Server;

9use Laravel\Mcp\Server\Tools\ToolSearch;

10

11class WeatherServer extends Server

12{

13    /**

14     * The tools registered with this MCP server.

15     *

16     * @var array<int|string, \Laravel\Mcp\Server\Tool|class-string<\Laravel\Mcp\Server\Tool>|array<int, \Laravel\Mcp\Server\Tool|class-string<\Laravel\Mcp\Server\Tool>>>

17     */

18    protected array $tools = [

19        CurrentWeatherTool::class,

20

21        ToolSearch::class => [

22            HistoricalWeatherTool::class,

23            WeatherAlertsTool::class,

24        ],

25    ];

26}

<?php

namespace App\Mcp\Servers;

use App\Mcp\Tools\CurrentWeatherTool;
use App\Mcp\Tools\HistoricalWeatherTool;
use App\Mcp\Tools\WeatherAlertsTool;
use Laravel\Mcp\Server;
use Laravel\Mcp\Server\Tools\ToolSearch;

class WeatherServer extends Server
{
    /**
     * The tools registered with this MCP server.
     *
     * @var array<int|string, \Laravel\Mcp\Server\Tool|class-string<\Laravel\Mcp\Server\Tool>|array<int, \Laravel\Mcp\Server\Tool|class-string<\Laravel\Mcp\Server\Tool>>>
     */
    protected array $tools = [
        CurrentWeatherTool::class,

        ToolSearch::class => [
            HistoricalWeatherTool::class,
            WeatherAlertsTool::class,
        ],
    ];
}
```

In this example, `CurrentWeatherTool` is advertised directly, while the historical weather and weather alert tools are available through the searchable catalog. Conditional tool registration is still respected when catalog tools are searched or executed.

The maximum number of tools that may be executed in one `execute_tools` call and the maximum response size are controlled by the `mcp.tool_search.max_tool_calls` and `mcp.tool_search.max_output_bytes` configuration values.

#### [Tool Name, Title, and Description](#tool-name-title-description)

By default, the tool's name and title are derived from the class name. For example, `CurrentWeatherTool` will have a name of `current-weather` and a title of `Current Weather Tool`. You may customize these values using the `Name` and `Title` attributes:

```
1use Laravel\Mcp\Server\Attributes\Name;

2use Laravel\Mcp\Server\Attributes\Title;

3

4#[Name('get-optimistic-weather')]

5#[Title('Get Optimistic Weather Forecast')]

6class CurrentWeatherTool extends Tool

7{

8    // ...

9}

use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Title;

#[Name('get-optimistic-weather')]
#[Title('Get Optimistic Weather Forecast')]
class CurrentWeatherTool extends Tool
{
    // ...
}
```

Tool descriptions are not automatically generated. You should always provide a meaningful description using the `Description` attribute:

```
1use Laravel\Mcp\Server\Attributes\Description;

2

3#[Description('Fetches the current weather forecast for a specified location.')]

4class CurrentWeatherTool extends Tool

5{

6    //

7}

use Laravel\Mcp\Server\Attributes\Description;

#[Description('Fetches the current weather forecast for a specified location.')]
class CurrentWeatherTool extends Tool
{
    //
}
```

The description is a critical part of the tool's metadata, as it helps AI models understand when and how to use the tool effectively.

### [Tool Input Schemas](#tool-input-schemas)

Tools can define input schemas to specify what arguments they accept from AI clients. Use Laravel's `Illuminate\Contracts\JsonSchema\JsonSchema` builder to define your tool's input requirements:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Mcp\Server\Tool;

7

8class CurrentWeatherTool extends Tool

9{

10    /**

11     * Get the tool's input schema.

12     *

13     * @return array<string, \Illuminate\JsonSchema\Types\Type>

14     */

15    public function schema(JsonSchema $schema): array

16    {

17        return [

18            'location' => $schema->string()

19                ->description('The location to get the weather for.')

20                ->required(),

21

22            'units' => $schema->string()

23                ->enum(['celsius', 'fahrenheit'])

24                ->description('The temperature units to use.')

25                ->default('celsius'),

26        ];

27    }

28}

<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Get the tool's input schema.
     *
     * @return array<string, \Illuminate\JsonSchema\Types\Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'location' => $schema->string()
                ->description('The location to get the weather for.')
                ->required(),

            'units' => $schema->string()
                ->enum(['celsius', 'fahrenheit'])
                ->description('The temperature units to use.')
                ->default('celsius'),
        ];
    }
}
```

### [Tool Output Schemas](#tool-output-schemas)

Tools can define [output schemas](https://modelcontextprotocol.io/specification/2026-07-28/server/tools#output-schema) to specify the structure of their responses. This enables better integration with AI clients that need parseable tool results. Use the `outputSchema` method to define your tool's output structure:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Mcp\Server\Tool;

7

8class CurrentWeatherTool extends Tool

9{

10    /**

11     * Get the tool's output schema.

12     *

13     * @return array<string, \Illuminate\JsonSchema\Types\Type>

14     */

15    public function outputSchema(JsonSchema $schema): array

16    {

17        return [

18            'temperature' => $schema->number()

19                ->description('Temperature in Celsius')

20                ->required(),

21

22            'conditions' => $schema->string()

23                ->description('Weather conditions')

24                ->required(),

25

26            'humidity' => $schema->integer()

27                ->description('Humidity percentage')

28                ->required(),

29        ];

30    }

31}

<?php

namespace App\Mcp\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Get the tool's output schema.
     *
     * @return array<string, \Illuminate\JsonSchema\Types\Type>
     */
    public function outputSchema(JsonSchema $schema): array
    {
        return [
            'temperature' => $schema->number()
                ->description('Temperature in Celsius')
                ->required(),

            'conditions' => $schema->string()
                ->description('Weather conditions')
                ->required(),

            'humidity' => $schema->integer()
                ->description('Humidity percentage')
                ->required(),
        ];
    }
}
```

### [Validating Tool Arguments](#validating-tool-arguments)

JSON Schema definitions provide a basic structure for tool arguments, but you may also want to enforce more complex validation rules.

Laravel MCP integrates seamlessly with Laravel's [validation features](validation.md). You may validate incoming tool arguments within your tool's `handle` method:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Tool;

8

9class CurrentWeatherTool extends Tool

10{

11    /**

12     * Handle the tool request.

13     */

14    public function handle(Request $request): Response

15    {

16        $validated = $request->validate([

17            'location' => 'required|string|max:100',

18            'units' => 'in:celsius,fahrenheit',

19        ]);

20

21        // Fetch weather data using the validated arguments...

22    }

23}

<?php

namespace App\Mcp\Tools;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request): Response
    {
        $validated = $request->validate([
            'location' => 'required|string|max:100',
            'units' => 'in:celsius,fahrenheit',
        ]);

        // Fetch weather data using the validated arguments...
    }
}
```

On validation failure, AI clients will act based on the error messages you provide. As such, it is critical to provide clear and actionable error messages:

```
1$validated = $request->validate([

2    'location' => ['required','string','max:100'],

3    'units' => 'in:celsius,fahrenheit',

4],[

5    'location.required' => 'You must specify a location to get the weather for. For example, "New York City" or "Tokyo".',

6    'units.in' => 'You must specify either "celsius" or "fahrenheit" for the units.',

7]);

$validated = $request->validate([
    'location' => ['required','string','max:100'],
    'units' => 'in:celsius,fahrenheit',
],[
    'location.required' => 'You must specify a location to get the weather for. For example, "New York City" or "Tokyo".',
    'units.in' => 'You must specify either "celsius" or "fahrenheit" for the units.',
]);
```

#### [Tool Dependency Injection](#tool-dependency-injection)

The Laravel [service container](container.md) is used to resolve all tools. As a result, you are able to type-hint any dependencies your tool may need in its constructor. The declared dependencies will automatically be resolved and injected into the tool instance:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Server\Tool;

7

8class CurrentWeatherTool extends Tool

9{

10    /**

11     * Create a new tool instance.

12     */

13    public function __construct(

14        protected WeatherRepository $weather,

15    ) {}

16

17    // ...

18}

<?php

namespace App\Mcp\Tools;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Create a new tool instance.
     */
    public function __construct(
        protected WeatherRepository $weather,
    ) {}

    // ...
}
```

In addition to constructor injection, you may also type-hint dependencies in your tool's `handle()` method. The service container will automatically resolve and inject the dependencies when the method is called:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Tool;

9

10class CurrentWeatherTool extends Tool

11{

12    /**

13     * Handle the tool request.

14     */

15    public function handle(Request $request, WeatherRepository $weather): Response

16    {

17        $location = $request->get('location');

18

19        $forecast = $weather->getForecastFor($location);

20

21        // ...

22    }

23}

<?php

namespace App\Mcp\Tools;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request, WeatherRepository $weather): Response
    {
        $location = $request->get('location');

        $forecast = $weather->getForecastFor($location);

        // ...
    }
}
```

### [Tool Annotations](#tool-annotations)

You may enhance your tools with [annotations](https://modelcontextprotocol.io/specification/2026-07-28/schema#toolannotations) to provide additional metadata to AI clients. These annotations help AI models understand the tool's behavior and capabilities. Annotations are added to tools via attributes:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Laravel\Mcp\Server\Tools\Annotations\IsIdempotent;

6use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

7use Laravel\Mcp\Server\Tool;

8

9#[IsIdempotent]

10#[IsReadOnly]

11class CurrentWeatherTool extends Tool

12{

13    //

14}

<?php

namespace App\Mcp\Tools;

use Laravel\Mcp\Server\Tools\Annotations\IsIdempotent;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;
use Laravel\Mcp\Server\Tool;

#[IsIdempotent]
#[IsReadOnly]
class CurrentWeatherTool extends Tool
{
    //
}
```

Available annotations include:

| Annotation | Type | Description |
| --- | --- | --- |
| `#[IsReadOnly]` | boolean | Indicates the tool does not modify its environment. |
| `#[IsDestructive]` | boolean | Indicates the tool may perform destructive updates (only meaningful when not read-only). |
| `#[IsIdempotent]` | boolean | Indicates repeated calls with same arguments have no additional effect (when not read-only). |
| `#[IsOpenWorld]` | boolean | Indicates the tool may interact with external entities. |

Annotation values can be explicitly set using boolean arguments:

```
1use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

2use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

3use Laravel\Mcp\Server\Tools\Annotations\IsOpenWorld;

4use Laravel\Mcp\Server\Tools\Annotations\IsIdempotent;

5use Laravel\Mcp\Server\Tool;

6

7#[IsReadOnly(true)]

8#[IsDestructive(false)]

9#[IsOpenWorld(false)]

10#[IsIdempotent(true)]

11class CurrentWeatherTool extends Tool

12{

13    //

14}

use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;
use Laravel\Mcp\Server\Tools\Annotations\IsOpenWorld;
use Laravel\Mcp\Server\Tools\Annotations\IsIdempotent;
use Laravel\Mcp\Server\Tool;

#[IsReadOnly(true)]
#[IsDestructive(false)]
#[IsOpenWorld(false)]
#[IsIdempotent(true)]
class CurrentWeatherTool extends Tool
{
    //
}
```

### [Conditional Tool Registration](#conditional-tool-registration)

You may conditionally register tools at runtime by implementing the `shouldRegister` method in your tool class. This method allows you to determine whether a tool should be available based on application state, configuration, or request parameters:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Server\Tool;

7

8class CurrentWeatherTool extends Tool

9{

10    /**

11     * Determine if the tool should be registered.

12     */

13    public function shouldRegister(Request $request): bool

14    {

15        return $request?->user()?->subscribed() ?? false;

16    }

17}

<?php

namespace App\Mcp\Tools;

use Laravel\Mcp\Request;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Determine if the tool should be registered.
     */
    public function shouldRegister(Request $request): bool
    {
        return $request?->user()?->subscribed() ?? false;
    }
}
```

When a tool's `shouldRegister` method returns `false`, it will not appear in the list of available tools and cannot be invoked by AI clients.

### [Tool Responses](#tool-responses)

Tools must return an instance of `Laravel\Mcp\Response`. The Response class provides several convenient methods for creating different types of responses:

For simple text responses, use the `text` method:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3

4/**

5 * Handle the tool request.

6 */

7public function handle(Request $request): Response

8{

9    // ...

10

11    return Response::text('Weather Summary: Sunny, 72°F');

12}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the tool request.
 */
public function handle(Request $request): Response
{
    // ...

    return Response::text('Weather Summary: Sunny, 72°F');
}
```

To indicate an error occurred during tool execution, use the `error` method:

```
1return Response::error('Unable to fetch weather data. Please try again.');

return Response::error('Unable to fetch weather data. Please try again.');
```

To return image or audio content, use the `image` and `audio` methods:

```
1return Response::image(file_get_contents(storage_path('weather/radar.png')), 'image/png');

2

3return Response::audio(file_get_contents(storage_path('weather/alert.mp3')), 'audio/mp3');

return Response::image(file_get_contents(storage_path('weather/radar.png')), 'image/png');

return Response::audio(file_get_contents(storage_path('weather/alert.mp3')), 'audio/mp3');
```

You may also load image and audio content directly from a Laravel filesystem disk using the `fromStorage` method. The MIME type will be automatically detected from the file:

```
1return Response::fromStorage('weather/radar.png');

return Response::fromStorage('weather/radar.png');
```

If needed, you may specify a particular disk or override the MIME type:

```
1return Response::fromStorage('weather/radar.png', disk: 's3');

2

3return Response::fromStorage('weather/radar.png', mimeType: 'image/webp');

return Response::fromStorage('weather/radar.png', disk: 's3');

return Response::fromStorage('weather/radar.png', mimeType: 'image/webp');
```

#### [Multiple Content Responses](#multiple-content-responses)

Tools can return multiple pieces of content by returning an array of `Response` instances:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3

4/**

5 * Handle the tool request.

6 *

7 * @return array<int, \Laravel\Mcp\Response>

8 */

9public function handle(Request $request): array

10{

11    // ...

12

13    return [

14        Response::text('Weather Summary: Sunny, 72°F'),

15        Response::text("**Detailed Forecast**\n- Morning: 65°F\n- Afternoon: 78°F\n- Evening: 70°F")

16    ];

17}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the tool request.
 *
 * @return array<int, \Laravel\Mcp\Response>
 */
public function handle(Request $request): array
{
    // ...

    return [
        Response::text('Weather Summary: Sunny, 72°F'),
        Response::text("**Detailed Forecast**\n- Morning: 65°F\n- Afternoon: 78°F\n- Evening: 70°F")
    ];
}
```

#### [Structured Responses](#structured-responses)

Tools can return [structured content](https://modelcontextprotocol.io/specification/2026-07-28/server/tools#structured-content) using the `structured` method. This provides parseable data for AI clients while maintaining backward compatibility with a JSON-encoded text representation:

```
1return Response::structured([

2    'temperature' => 22.5,

3    'conditions' => 'Partly cloudy',

4    'humidity' => 65,

5]);

return Response::structured([
    'temperature' => 22.5,
    'conditions' => 'Partly cloudy',
    'humidity' => 65,
]);
```

If you need to provide custom text alongside structured content, use the `withStructuredContent` method on the response factory:

```
1return Response::make(

2    Response::text('Weather is 22.5°C and sunny')

3)->withStructuredContent([

4    'temperature' => 22.5,

5    'conditions' => 'Sunny',

6]);

return Response::make(
    Response::text('Weather is 22.5°C and sunny')
)->withStructuredContent([
    'temperature' => 22.5,
    'conditions' => 'Sunny',
]);
```

#### [Streaming Responses](#streaming-responses)

For long-running operations or real-time data streaming, tools can return a [generator](https://www.php.net/manual/en/language.generators.overview.php) from their `handle` method. This enables sending intermediate updates to the client before the final response:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use Generator;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Tool;

9

10class CurrentWeatherTool extends Tool

11{

12    /**

13     * Handle the tool request.

14     *

15     * @return \Generator<int, \Laravel\Mcp\Response>

16     */

17    public function handle(Request $request): Generator

18    {

19        $locations = $request->array('locations');

20

21        foreach ($locations as $index => $location) {

22            yield Response::notification('processing/progress', [

23                'current' => $index + 1,

24                'total' => count($locations),

25                'location' => $location,

26            ]);

27

28            yield Response::text($this->forecastFor($location));

29        }

30    }

31}

<?php

namespace App\Mcp\Tools;

use Generator;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Tool;

class CurrentWeatherTool extends Tool
{
    /**
     * Handle the tool request.
     *
     * @return \Generator<int, \Laravel\Mcp\Response>
     */
    public function handle(Request $request): Generator
    {
        $locations = $request->array('locations');

        foreach ($locations as $index => $location) {
            yield Response::notification('processing/progress', [
                'current' => $index + 1,
                'total' => count($locations),
                'location' => $location,
            ]);

            yield Response::text($this->forecastFor($location));
        }
    }
}
```

When using web-based servers, streaming responses automatically open an SSE (Server-Sent Events) stream, sending each yielded message as an event to the client.

## [Prompts](#prompts)

[Prompts](https://modelcontextprotocol.io/specification/2026-07-28/server/prompts) enable your server to share reusable prompt templates that AI clients can use to interact with language models. They provide a standardized way to structure common queries and interactions.

### [Creating Prompts](#creating-prompts)

To create a prompt, run the `make:mcp-prompt` Artisan command:

```
1php artisan make:mcp-prompt DescribeWeatherPrompt

php artisan make:mcp-prompt DescribeWeatherPrompt
```

After creating a prompt, register it in your server's `$prompts` property:

```
1<?php

2

3namespace App\Mcp\Servers;

4

5use App\Mcp\Prompts\DescribeWeatherPrompt;

6use Laravel\Mcp\Server;

7

8class WeatherServer extends Server

9{

10    /**

11     * The prompts registered with this MCP server.

12     *

13     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>

14     */

15    protected array $prompts = [

16        DescribeWeatherPrompt::class,

17    ];

18}

<?php

namespace App\Mcp\Servers;

use App\Mcp\Prompts\DescribeWeatherPrompt;
use Laravel\Mcp\Server;

class WeatherServer extends Server
{
    /**
     * The prompts registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Prompt>>
     */
    protected array $prompts = [
        DescribeWeatherPrompt::class,
    ];
}
```

#### [Prompt Name, Title, and Description](#prompt-name-title-and-description)

By default, the prompt's name and title are derived from the class name. For example, `DescribeWeatherPrompt` will have a name of `describe-weather` and a title of `Describe Weather Prompt`. You may customize these values using the `Name` and `Title` attributes:

```
1use Laravel\Mcp\Server\Attributes\Name;

2use Laravel\Mcp\Server\Attributes\Title;

3

4#[Name('weather-assistant')]

5#[Title('Weather Assistant Prompt')]

6class DescribeWeatherPrompt extends Prompt

7{

8    // ...

9}

use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Title;

#[Name('weather-assistant')]
#[Title('Weather Assistant Prompt')]
class DescribeWeatherPrompt extends Prompt
{
    // ...
}
```

Prompt descriptions are not automatically generated. You should always provide a meaningful description using the `Description` attribute:

```
1use Laravel\Mcp\Server\Attributes\Description;

2

3#[Description('Generates a natural-language explanation of the weather for a given location.')]

4class DescribeWeatherPrompt extends Prompt

5{

6    //

7}

use Laravel\Mcp\Server\Attributes\Description;

#[Description('Generates a natural-language explanation of the weather for a given location.')]
class DescribeWeatherPrompt extends Prompt
{
    //
}
```

The description is a critical part of the prompt's metadata, as it helps AI models understand when and how to get the best use out of the prompt.

### [Prompt Arguments](#prompt-arguments)

Prompts can define arguments that allow AI clients to customize the prompt template with specific values. Use the `arguments` method to define what arguments your prompt accepts:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use Laravel\Mcp\Server\Prompt;

6use Laravel\Mcp\Server\Prompts\Argument;

7

8class DescribeWeatherPrompt extends Prompt

9{

10    /**

11     * Get the prompt's arguments.

12     *

13     * @return array<int, \Laravel\Mcp\Server\Prompts\Argument>

14     */

15    public function arguments(): array

16    {

17        return [

18            new Argument(

19                name: 'tone',

20                description: 'The tone to use in the weather description (e.g., formal, casual, humorous).',

21                required: true,

22            ),

23        ];

24    }

25}

<?php

namespace App\Mcp\Prompts;

use Laravel\Mcp\Server\Prompt;
use Laravel\Mcp\Server\Prompts\Argument;

class DescribeWeatherPrompt extends Prompt
{
    /**
     * Get the prompt's arguments.
     *
     * @return array<int, \Laravel\Mcp\Server\Prompts\Argument>
     */
    public function arguments(): array
    {
        return [
            new Argument(
                name: 'tone',
                description: 'The tone to use in the weather description (e.g., formal, casual, humorous).',
                required: true,
            ),
        ];
    }
}
```

### [Validating Prompt Arguments](#validating-prompt-arguments)

Prompt arguments are automatically validated based on their definition, but you may also want to enforce more complex validation rules.

Laravel MCP integrates seamlessly with Laravel's [validation features](validation.md). You may validate incoming prompt arguments within your prompt's `handle` method:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Prompt;

8

9class DescribeWeatherPrompt extends Prompt

10{

11    /**

12     * Handle the prompt request.

13     */

14    public function handle(Request $request): Response

15    {

16        $validated = $request->validate([

17            'tone' => 'required|string|max:50',

18        ]);

19

20        $tone = $validated['tone'];

21

22        // Generate the prompt response using the given tone...

23    }

24}

<?php

namespace App\Mcp\Prompts;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Prompt;

class DescribeWeatherPrompt extends Prompt
{
    /**
     * Handle the prompt request.
     */
    public function handle(Request $request): Response
    {
        $validated = $request->validate([
            'tone' => 'required|string|max:50',
        ]);

        $tone = $validated['tone'];

        // Generate the prompt response using the given tone...
    }
}
```

On validation failure, AI clients will act based on the error messages you provide. As such, it is critical to provide clear and actionable error messages:

```
1$validated = $request->validate([

2    'tone' => ['required','string','max:50'],

3],[

4    'tone.*' => 'You must specify a tone for the weather description. Examples include "formal", "casual", or "humorous".',

5]);

$validated = $request->validate([
    'tone' => ['required','string','max:50'],
],[
    'tone.*' => 'You must specify a tone for the weather description. Examples include "formal", "casual", or "humorous".',
]);
```

### [Prompt Dependency Injection](#prompt-dependency-injection)

The Laravel [service container](container.md) is used to resolve all prompts. As a result, you are able to type-hint any dependencies your prompt may need in its constructor. The declared dependencies will automatically be resolved and injected into the prompt instance:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Server\Prompt;

7

8class DescribeWeatherPrompt extends Prompt

9{

10    /**

11     * Create a new prompt instance.

12     */

13    public function __construct(

14        protected WeatherRepository $weather,

15    ) {}

16

17    //

18}

<?php

namespace App\Mcp\Prompts;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Server\Prompt;

class DescribeWeatherPrompt extends Prompt
{
    /**
     * Create a new prompt instance.
     */
    public function __construct(
        protected WeatherRepository $weather,
    ) {}

    //
}
```

In addition to constructor injection, you may also type-hint dependencies in your prompt's `handle` method. The service container will automatically resolve and inject the dependencies when the method is called:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Prompt;

9

10class DescribeWeatherPrompt extends Prompt

11{

12    /**

13     * Handle the prompt request.

14     */

15    public function handle(Request $request, WeatherRepository $weather): Response

16    {

17        $isAvailable = $weather->isServiceAvailable();

18

19        // ...

20    }

21}

<?php

namespace App\Mcp\Prompts;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Prompt;

class DescribeWeatherPrompt extends Prompt
{
    /**
     * Handle the prompt request.
     */
    public function handle(Request $request, WeatherRepository $weather): Response
    {
        $isAvailable = $weather->isServiceAvailable();

        // ...
    }
}
```

### [Conditional Prompt Registration](#conditional-prompt-registration)

You may conditionally register prompts at runtime by implementing the `shouldRegister` method in your prompt class. This method allows you to determine whether a prompt should be available based on application state, configuration, or request parameters:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Server\Prompt;

7

8class CurrentWeatherPrompt extends Prompt

9{

10    /**

11     * Determine if the prompt should be registered.

12     */

13    public function shouldRegister(Request $request): bool

14    {

15        return $request?->user()?->subscribed() ?? false;

16    }

17}

<?php

namespace App\Mcp\Prompts;

use Laravel\Mcp\Request;
use Laravel\Mcp\Server\Prompt;

class CurrentWeatherPrompt extends Prompt
{
    /**
     * Determine if the prompt should be registered.
     */
    public function shouldRegister(Request $request): bool
    {
        return $request?->user()?->subscribed() ?? false;
    }
}
```

When a prompt's `shouldRegister` method returns `false`, it will not appear in the list of available prompts and cannot be invoked by AI clients.

### [Prompt Responses](#prompt-responses)

Prompts may return a single `Laravel\Mcp\Response` or an iterable of `Laravel\Mcp\Response` instances. These responses encapsulate the content that will be sent to the AI client:

```
1<?php

2

3namespace App\Mcp\Prompts;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Prompt;

8

9class DescribeWeatherPrompt extends Prompt

10{

11    /**

12     * Handle the prompt request.

13     *

14     * @return array<int, \Laravel\Mcp\Response>

15     */

16    public function handle(Request $request): array

17    {

18        $tone = $request->string('tone');

19

20        $systemMessage = "You are a helpful weather assistant. Please provide a weather description in a {$tone} tone.";

21

22        $userMessage = "What is the current weather like in New York City?";

23

24        return [

25            Response::text($systemMessage)->asAssistant(),

26            Response::text($userMessage),

27        ];

28    }

29}

<?php

namespace App\Mcp\Prompts;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Prompt;

class DescribeWeatherPrompt extends Prompt
{
    /**
     * Handle the prompt request.
     *
     * @return array<int, \Laravel\Mcp\Response>
     */
    public function handle(Request $request): array
    {
        $tone = $request->string('tone');

        $systemMessage = "You are a helpful weather assistant. Please provide a weather description in a {$tone} tone.";

        $userMessage = "What is the current weather like in New York City?";

        return [
            Response::text($systemMessage)->asAssistant(),
            Response::text($userMessage),
        ];
    }
}
```

You can use the `asAssistant()` method to indicate that a response message should be treated as coming from the AI assistant, while regular messages are treated as user input.

## [Resources](#resources)

[Resources](https://modelcontextprotocol.io/specification/2026-07-28/server/resources) enable your server to expose data and content that AI clients can read and use as context when interacting with language models. They provide a way to share static or dynamic information like documentation, configuration, or any data that helps inform AI responses.

## [Creating Resources](#creating-resources)

To create a resource, run the `make:mcp-resource` Artisan command:

```
1php artisan make:mcp-resource WeatherGuidelinesResource

php artisan make:mcp-resource WeatherGuidelinesResource
```

After creating a resource, register it in your server's `$resources` property:

```
1<?php

2

3namespace App\Mcp\Servers;

4

5use App\Mcp\Resources\WeatherGuidelinesResource;

6use Laravel\Mcp\Server;

7

8class WeatherServer extends Server

9{

10    /**

11     * The resources registered with this MCP server.

12     *

13     * @var array<int, class-string<\Laravel\Mcp\Server\Resource>>

14     */

15    protected array $resources = [

16        WeatherGuidelinesResource::class,

17    ];

18}

<?php

namespace App\Mcp\Servers;

use App\Mcp\Resources\WeatherGuidelinesResource;
use Laravel\Mcp\Server;

class WeatherServer extends Server
{
    /**
     * The resources registered with this MCP server.
     *
     * @var array<int, class-string<\Laravel\Mcp\Server\Resource>>
     */
    protected array $resources = [
        WeatherGuidelinesResource::class,
    ];
}
```

#### [Resource Name, Title, and Description](#resource-name-title-and-description)

By default, the resource's name and title are derived from the class name. For example, `WeatherGuidelinesResource` will have a name of `weather-guidelines` and a title of `Weather Guidelines Resource`. You may customize these values using the `Name` and `Title` attributes:

```
1use Laravel\Mcp\Server\Attributes\Name;

2use Laravel\Mcp\Server\Attributes\Title;

3

4#[Name('weather-api-docs')]

5#[Title('Weather API Documentation')]

6class WeatherGuidelinesResource extends Resource

7{

8    // ...

9}

use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Title;

#[Name('weather-api-docs')]
#[Title('Weather API Documentation')]
class WeatherGuidelinesResource extends Resource
{
    // ...
}
```

Resource descriptions are not automatically generated. You should always provide a meaningful description using the `Description` attribute:

```
1use Laravel\Mcp\Server\Attributes\Description;

2

3#[Description('Comprehensive guidelines for using the Weather API.')]

4class WeatherGuidelinesResource extends Resource

5{

6    //

7}

use Laravel\Mcp\Server\Attributes\Description;

#[Description('Comprehensive guidelines for using the Weather API.')]
class WeatherGuidelinesResource extends Resource
{
    //
}
```

The description is a critical part of the resource's metadata, as it helps AI models understand when and how to use the resource effectively.

### [Resource Templates](#resource-templates)

[Resource templates](https://modelcontextprotocol.io/specification/2026-07-28/server/resources#resource-templates) enable your server to expose dynamic resources that match URI patterns with variables. Instead of defining a static URI for each resource, you can create a single resource that handles multiple URIs based on a template pattern.

#### [Creating Resource Templates](#creating-resource-templates)

To create a resource template, implement the `HasUriTemplate` interface on your resource class and define a `uriTemplate` method that returns a `UriTemplate` instance:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Attributes\Description;

8use Laravel\Mcp\Server\Attributes\MimeType;

9use Laravel\Mcp\Server\Contracts\HasUriTemplate;

10use Laravel\Mcp\Server\Resource;

11use Laravel\Mcp\Support\UriTemplate;

12

13#[Description('Access user files by ID')]

14#[MimeType('text/plain')]

15class UserFileResource extends Resource implements HasUriTemplate

16{

17    /**

18     * Get the URI template for this resource.

19     */

20    public function uriTemplate(): UriTemplate

21    {

22        return new UriTemplate('file://users/{userId}/files/{fileId}');

23    }

24

25    /**

26     * Handle the resource request.

27     */

28    public function handle(Request $request): Response

29    {

30        $userId = $request->get('userId');

31        $fileId = $request->get('fileId');

32

33        // Fetch and return the file content...

34

35        return Response::text($content);

36    }

37}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\MimeType;
use Laravel\Mcp\Server\Contracts\HasUriTemplate;
use Laravel\Mcp\Server\Resource;
use Laravel\Mcp\Support\UriTemplate;

#[Description('Access user files by ID')]
#[MimeType('text/plain')]
class UserFileResource extends Resource implements HasUriTemplate
{
    /**
     * Get the URI template for this resource.
     */
    public function uriTemplate(): UriTemplate
    {
        return new UriTemplate('file://users/{userId}/files/{fileId}');
    }

    /**
     * Handle the resource request.
     */
    public function handle(Request $request): Response
    {
        $userId = $request->get('userId');
        $fileId = $request->get('fileId');

        // Fetch and return the file content...

        return Response::text($content);
    }
}
```

When a resource implements the `HasUriTemplate` interface, it will be registered as a resource template rather than a static resource. AI clients can then request resources using URIs that match the template pattern, and the variables from the URI will be automatically extracted and made available in your resource's `handle` method.

#### [URI Template Syntax](#uri-template-syntax)

URI templates use placeholders enclosed in curly braces to define variable segments in the URI:

```
1new UriTemplate('file://users/{userId}');

2new UriTemplate('file://users/{userId}/files/{fileId}');

3new UriTemplate('https://api.example.com/{version}/{resource}/{id}');

new UriTemplate('file://users/{userId}');
new UriTemplate('file://users/{userId}/files/{fileId}');
new UriTemplate('https://api.example.com/{version}/{resource}/{id}');
```

#### [Accessing Template Variables](#accessing-template-variables)

When a URI matches your resource template, the extracted variables are automatically merged into the request and can be accessed using the `get` method:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Contracts\HasUriTemplate;

8use Laravel\Mcp\Server\Resource;

9use Laravel\Mcp\Support\UriTemplate;

10

11class UserProfileResource extends Resource implements HasUriTemplate

12{

13    public function uriTemplate(): UriTemplate

14    {

15        return new UriTemplate('file://users/{userId}/profile');

16    }

17

18    public function handle(Request $request): Response

19    {

20        // Access the extracted variable

21        $userId = $request->get('userId');

22

23        // Access the full URI if needed

24        $uri = $request->uri();

25

26        // Fetch user profile...

27

28        return Response::text("Profile for user {$userId}");

29    }

30}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Contracts\HasUriTemplate;
use Laravel\Mcp\Server\Resource;
use Laravel\Mcp\Support\UriTemplate;

class UserProfileResource extends Resource implements HasUriTemplate
{
    public function uriTemplate(): UriTemplate
    {
        return new UriTemplate('file://users/{userId}/profile');
    }

    public function handle(Request $request): Response
    {
        // Access the extracted variable
        $userId = $request->get('userId');

        // Access the full URI if needed
        $uri = $request->uri();

        // Fetch user profile...

        return Response::text("Profile for user {$userId}");
    }
}
```

The `Request` object provides both the extracted variables and the original URI that was requested, giving you full context for processing the resource request.

### [Resource URI and MIME Type](#resource-uri-and-mime-type)

Each resource is identified by a unique URI and has an associated MIME type that helps AI clients understand the resource's format.

By default, the resource's URI is generated based on the resource's name, so `WeatherGuidelinesResource` will have a URI of `weather://resources/weather-guidelines`. The default MIME type is `text/plain`.

You may customize these values using the `Uri` and `MimeType` attributes:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Server\Attributes\MimeType;

6use Laravel\Mcp\Server\Attributes\Uri;

7use Laravel\Mcp\Server\Resource;

8

9#[Uri('weather://resources/guidelines')]

10#[MimeType('application/pdf')]

11class WeatherGuidelinesResource extends Resource

12{

13}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Server\Attributes\MimeType;
use Laravel\Mcp\Server\Attributes\Uri;
use Laravel\Mcp\Server\Resource;

#[Uri('weather://resources/guidelines')]
#[MimeType('application/pdf')]
class WeatherGuidelinesResource extends Resource
{
}
```

The URI and MIME type help AI clients determine how to process and interpret the resource content appropriately.

### [Resource Request](#resource-request)

Unlike tools and prompts, resources cannot define input schemas or arguments. However, you can still interact with the request object within your resource's `handle` method:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Resource;

8

9class WeatherGuidelinesResource extends Resource

10{

11    /**

12     * Handle the resource request.

13     */

14    public function handle(Request $request): Response

15    {

16        // ...

17    }

18}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Resource;

class WeatherGuidelinesResource extends Resource
{
    /**
     * Handle the resource request.
     */
    public function handle(Request $request): Response
    {
        // ...
    }
}
```

### [Resource Dependency Injection](#resource-dependency-injection)

The Laravel [service container](container.md) is used to resolve all resources. As a result, you are able to type-hint any dependencies your resource may need in its constructor. The declared dependencies will automatically be resolved and injected into the resource instance:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Server\Resource;

7

8class WeatherGuidelinesResource extends Resource

9{

10    /**

11     * Create a new resource instance.

12     */

13    public function __construct(

14        protected WeatherRepository $weather,

15    ) {}

16

17    // ...

18}

<?php

namespace App\Mcp\Resources;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Server\Resource;

class WeatherGuidelinesResource extends Resource
{
    /**
     * Create a new resource instance.
     */
    public function __construct(
        protected WeatherRepository $weather,
    ) {}

    // ...
}
```

In addition to constructor injection, you may also type-hint dependencies in your resource's `handle` method. The service container will automatically resolve and inject the dependencies when the method is called:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use App\Repositories\WeatherRepository;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Resource;

9

10class WeatherGuidelinesResource extends Resource

11{

12    /**

13     * Handle the resource request.

14     */

15    public function handle(WeatherRepository $weather): Response

16    {

17        $guidelines = $weather->guidelines();

18

19        return Response::text($guidelines);

20    }

21}

<?php

namespace App\Mcp\Resources;

use App\Repositories\WeatherRepository;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Resource;

class WeatherGuidelinesResource extends Resource
{
    /**
     * Handle the resource request.
     */
    public function handle(WeatherRepository $weather): Response
    {
        $guidelines = $weather->guidelines();

        return Response::text($guidelines);
    }
}
```

### [Resource Annotations](#resource-annotations)

You may enhance your resources with [annotations](https://modelcontextprotocol.io/specification/2026-07-28/schema#annotations) to provide additional metadata to AI clients. Annotations are added to resources via attributes:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Enums\Role;

6use Laravel\Mcp\Server\Annotations\Audience;

7use Laravel\Mcp\Server\Annotations\LastModified;

8use Laravel\Mcp\Server\Annotations\Priority;

9use Laravel\Mcp\Server\Resource;

10

11#[Audience(Role::User)]

12#[LastModified('2025-01-12T15:00:58Z')]

13#[Priority(0.9)]

14class UserDashboardResource extends Resource

15{

16    //

17}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Enums\Role;
use Laravel\Mcp\Server\Annotations\Audience;
use Laravel\Mcp\Server\Annotations\LastModified;
use Laravel\Mcp\Server\Annotations\Priority;
use Laravel\Mcp\Server\Resource;

#[Audience(Role::User)]
#[LastModified('2025-01-12T15:00:58Z')]
#[Priority(0.9)]
class UserDashboardResource extends Resource
{
    //
}
```

Available annotations include:

| Annotation | Type | Description |
| --- | --- | --- |
| `#[Audience]` | Role or array | Specifies the intended audience (`Role::User`, `Role::Assistant`, or both). |
| `#[Priority]` | float | A numerical score between 0.0 and 1.0 indicating resource importance. |
| `#[LastModified]` | string | An ISO 8601 timestamp showing when the resource was last updated. |

### [Conditional Resource Registration](#conditional-resource-registration)

You may conditionally register resources at runtime by implementing the `shouldRegister` method in your resource class. This method allows you to determine whether a resource should be available based on application state, configuration, or request parameters:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Server\Resource;

7

8class WeatherGuidelinesResource extends Resource

9{

10    /**

11     * Determine if the resource should be registered.

12     */

13    public function shouldRegister(Request $request): bool

14    {

15        return $request?->user()?->subscribed() ?? false;

16    }

17}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Request;
use Laravel\Mcp\Server\Resource;

class WeatherGuidelinesResource extends Resource
{
    /**
     * Determine if the resource should be registered.
     */
    public function shouldRegister(Request $request): bool
    {
        return $request?->user()?->subscribed() ?? false;
    }
}
```

When a resource's `shouldRegister` method returns `false`, it will not appear in the list of available resources and cannot be accessed by AI clients.

### [Resource Responses](#resource-responses)

Resources must return an instance of `Laravel\Mcp\Response`. The Response class provides several convenient methods for creating different types of responses:

For simple text content, use the `text` method:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3

4/**

5 * Handle the resource request.

6 */

7public function handle(Request $request): Response

8{

9    // ...

10

11    return Response::text($weatherData);

12}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the resource request.
 */
public function handle(Request $request): Response
{
    // ...

    return Response::text($weatherData);
}
```

#### [Resource Link Responses](#resource-link-responses)

To return a resource link, use the `resourceLink` method, providing the URI and name. Unlike an embedded resource, a resource link returns a URI pointer that the AI client fetches independently:

```
1return Response::resourceLink(

2    uri: 'file:///data/report.json',

3    name: 'monthly-report',

4    mimeType: 'application/json',

5);

return Response::resourceLink(
    uri: 'file:///data/report.json',
    name: 'monthly-report',
    mimeType: 'application/json',
);
```

You may also pass a registered resource class or instance, which will automatically inherit the resource's URI, name, title, description, and MIME type:

```
1return Response::resourceLink(new WeatherForecastResource);

return Response::resourceLink(new WeatherForecastResource);
```

#### [Blob Responses](#resource-blob-responses)

To return blob content, use the `blob` method, providing the blob content:

```
1return Response::blob(file_get_contents(storage_path('weather/radar.png')));

return Response::blob(file_get_contents(storage_path('weather/radar.png')));
```

When returning blob content, the MIME type will be determined by your resource's configured MIME type:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Server\Attributes\MimeType;

6use Laravel\Mcp\Server\Resource;

7

8#[MimeType('image/png')]

9class WeatherGuidelinesResource extends Resource

10{

11    //

12}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Server\Attributes\MimeType;
use Laravel\Mcp\Server\Resource;

#[MimeType('image/png')]
class WeatherGuidelinesResource extends Resource
{
    //
}
```

#### [Error Responses](#resource-error-responses)

To indicate an error occurred during resource retrieval, use the `error()` method:

```
1return Response::error('Unable to fetch weather data for the specified location.');

return Response::error('Unable to fetch weather data for the specified location.');
```

## [Apps](#apps)

Laravel MCP supports [MCP Apps](https://modelcontextprotocol.io/extensions/apps/overview), an extension of the Model Context Protocol that allows tools to render interactive HTML applications within sandboxed iframes in supported hosts. This allows you to build dashboards, forms, visualizations, and other rich experiences that go beyond plain text responses.

An MCP app consists of two parts working together:

- An **app resource** that returns the self-contained HTML for your application.
- A **tool** that is linked to the app resource using the `#[RendersApp]` attribute. When the tool is called, the host fetches and renders the linked resource.

### [Creating App Resources](#creating-app-resources)

You may create an app resource using the `make:mcp-app-resource` Artisan command:

```
1php artisan make:mcp-app-resource WeatherDashboardApp

php artisan make:mcp-app-resource WeatherDashboardApp
```

This command creates two files: a PHP class in `app/Mcp/Resources` and a Blade view in `resources/views/mcp`. The view name is automatically inferred from the class name. For example, `WeatherDashboardApp` maps to `mcp.weather-dashboard-app`:

```
1<?php

2

3namespace App\Mcp\Resources;

4

5use Laravel\Mcp\Request;

6use Laravel\Mcp\Response;

7use Laravel\Mcp\Server\Attributes\AppMeta;

8use Laravel\Mcp\Server\Attributes\Description;

9use Laravel\Mcp\Server\AppResource;

10

11#[Description('An interactive weather dashboard.')]

12#[AppMeta]

13class WeatherDashboardApp extends AppResource

14{

15    /**

16     * Handle the app resource request.

17     */

18    public function handle(Request $request): Response

19    {

20        return Response::view('mcp.weather-dashboard-app', [

21            'title' => $this->title(),

22        ]);

23    }

24}

<?php

namespace App\Mcp\Resources;

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\AppMeta;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\AppResource;

#[Description('An interactive weather dashboard.')]
#[AppMeta]
class WeatherDashboardApp extends AppResource
{
    /**
     * Handle the app resource request.
     */
    public function handle(Request $request): Response
    {
        return Response::view('mcp.weather-dashboard-app', [
            'title' => $this->title(),
        ]);
    }
}
```

`AppResource` extends the base `Resource` class and automatically configures the `ui://` URI scheme and the `text/html;profile=mcp-app` MIME type required by the MCP Apps specification. Like any other resource, you must register it in your server's `$resources` array.

The generated Blade view uses the `<x-mcp::app>` component, which renders a complete HTML document with the client-side MCP SDK bundled and ready to use:

```
1<x-mcp::app :title="$title">

2    <x-slot:head>

3        <script type="module">

4        createMcpApp(async (app) => {

5            document.getElementById('run-btn').addEventListener('click', async () => {

6                const result = await app.callServerTool('get-weather-data', {});

7                document.getElementById('output').textContent = result.content[0]?.text ?? '';

8            });

9        });

10        </script>

11    </x-slot:head>

12

13    <div id="app">

14        <button id="run-btn">Refresh</button>

15        <p id="output"></p>

16    </div>

17</x-mcp::app>

<x-mcp::app :title="$title">
    <x-slot:head>
        <script type="module">
        createMcpApp(async (app) => {
            document.getElementById('run-btn').addEventListener('click', async () => {
                const result = await app.callServerTool('get-weather-data', {});
                document.getElementById('output').textContent = result.content[0]?.text ?? '';
            });
        });
        </script>
    </x-slot:head>

    <div id="app">
        <button id="run-btn">Refresh</button>
        <p id="output"></p>
    </div>
</x-mcp::app>
```

The `createMcpApp` global is provided by the bundled SDK and handles connecting the iframe to the server, applying host theming, and exposing helpers such as `callServerTool`, `sendMessage`, `openLink`, and event callbacks. For the full client-side API, refer to the [MCP Apps specification](https://modelcontextprotocol.io/extensions/apps/overview).

### [Rendering Apps From Tools](#rendering-apps-from-tools)

To display an app resource, link a tool to it using the `#[RendersApp]` attribute. When the tool is called, Laravel MCP includes the resource's URI in the tool metadata so the host can render the app in a sandboxed iframe:

```
1<?php

2

3namespace App\Mcp\Tools;

4

5use App\Mcp\Resources\WeatherDashboardApp;

6use Laravel\Mcp\Request;

7use Laravel\Mcp\Response;

8use Laravel\Mcp\Server\Attributes\RendersApp;

9use Laravel\Mcp\Server\Tool;

10

11#[RendersApp(resource: WeatherDashboardApp::class)]

12class ShowWeatherDashboard extends Tool

13{

14    /**

15     * Handle the tool request.

16     */

17    public function handle(Request $request): Response

18    {

19        return Response::text('Weather dashboard loaded.');

20    }

21}

<?php

namespace App\Mcp\Tools;

use App\Mcp\Resources\WeatherDashboardApp;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\RendersApp;
use Laravel\Mcp\Server\Tool;

#[RendersApp(resource: WeatherDashboardApp::class)]
class ShowWeatherDashboard extends Tool
{
    /**
     * Handle the tool request.
     */
    public function handle(Request $request): Response
    {
        return Response::text('Weather dashboard loaded.');
    }
}
```

Laravel MCP automatically advertises the `io.modelcontextprotocol/ui` extension within the server's `extensions` capability whenever any `AppResource` is registered, so no additional server configuration is required.

### [App Tool Visibility](#app-tool-visibility)

Each `#[RendersApp]` tool can limit who may invoke it via the `visibility` argument. This is useful for exposing private, app-only tools that the UI calls to load or refresh data without making those tools visible to the model:

```
1use Laravel\Mcp\Server\Attributes\RendersApp;

2use Laravel\Mcp\Server\Ui\Enums\Visibility;

3

4#[RendersApp(resource: WeatherDashboardApp::class, visibility: [Visibility::App])]

5class GetWeatherData extends Tool

6{

7    // ...

8}

use Laravel\Mcp\Server\Attributes\RendersApp;
use Laravel\Mcp\Server\Ui\Enums\Visibility;

#[RendersApp(resource: WeatherDashboardApp::class, visibility: [Visibility::App])]
class GetWeatherData extends Tool
{
    // ...
}
```

The `Visibility` enum has two cases, `Model` and `App`, and defaults to both. Use `[Visibility::App]` for backend actions the UI calls directly, or `[Visibility::Model]` to make a tool unavailable to the UI.

### [App Configuration](#app-configuration)

The `#[AppMeta]` attribute on your app resource configures the iframe's Content Security Policy, browser permissions, and any library scripts that should be included in the view's `<head>`:

```
1use Laravel\Mcp\Server\Attributes\AppMeta;

2use Laravel\Mcp\Server\Ui\Enums\Library;

3use Laravel\Mcp\Server\Ui\Enums\Permission;

4

5#[AppMeta(

6    connectDomains: ['https://api.weather.com'],

7    permissions: [Permission::Geolocation],

8    libraries: [Library::Tailwind, Library::Alpine],

9)]

10class WeatherDashboardApp extends AppResource

11{

12    // ...

13}

use Laravel\Mcp\Server\Attributes\AppMeta;
use Laravel\Mcp\Server\Ui\Enums\Library;
use Laravel\Mcp\Server\Ui\Enums\Permission;

#[AppMeta(
    connectDomains: ['https://api.weather.com'],
    permissions: [Permission::Geolocation],
    libraries: [Library::Tailwind, Library::Alpine],
)]
class WeatherDashboardApp extends AppResource
{
    // ...
}
```

The `Library` enum includes pre-configured CDN scripts for common front-end libraries, such as `Library::Tailwind` and `Library::Alpine`, and their CDN origins are automatically merged into the CSP. The `Permission` enum covers browser permissions such as `Camera`, `Microphone`, `Geolocation`, and `ClipboardWrite`.

For computed or dynamic configuration, override the `appMeta` method on your resource using the fluent `AppMeta`, `Csp`, and `Permissions` builders from the `Laravel\Mcp\Server\Ui` namespace.

### [Building Apps With Boost](#building-apps-with-boost)

Laravel MCP includes a dedicated [Boost](boost.md) skill reference for building MCP Apps. If you have [Laravel Boost](boost.md) installed, your AI coding agent can invoke the `mcp-development` skill and ask it to scaffold an app resource, Blade view, and linked tool for you.

For the complete protocol reference, including the full client-side API and schema details, see the official [MCP Apps documentation](https://modelcontextprotocol.io/extensions/apps/overview).

## [Metadata](#metadata)

Laravel MCP also supports the `_meta` field as defined in the [MCP specification](https://modelcontextprotocol.io/specification/2026-07-28/basic#_meta), which is required by certain MCP clients or integrations. Metadata can be applied to all MCP primitives, including tools, resources, and prompts, as well as their responses.

You can attach metadata to individual response content using the `withMeta` method:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3

4/**

5 * Handle the tool request.

6 */

7public function handle(Request $request): Response

8{

9    return Response::text('The weather is sunny.')

10        ->withMeta(['source' => 'weather-api', 'cached' => true]);

11}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the tool request.
 */
public function handle(Request $request): Response
{
    return Response::text('The weather is sunny.')
        ->withMeta(['source' => 'weather-api', 'cached' => true]);
}
```

For result-level metadata that applies to the entire response envelope, wrap your responses with `Response::make` and call `withMeta` on the returned response factory instance:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3use Laravel\Mcp\ResponseFactory;

4

5/**

6 * Handle the tool request.

7 */

8public function handle(Request $request): ResponseFactory

9{

10    return Response::make(

11        Response::text('The weather is sunny.')

12    )->withMeta(['request_id' => '12345']);

13}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\ResponseFactory;

/**
 * Handle the tool request.
 */
public function handle(Request $request): ResponseFactory
{
    return Response::make(
        Response::text('The weather is sunny.')
    )->withMeta(['request_id' => '12345']);
}
```

To attach metadata to a tool, resource, or prompt itself, define a `$meta` property on the class:

```
1use Laravel\Mcp\Server\Attributes\Description;

2use Laravel\Mcp\Server\Tool;

3

4#[Description('Fetches the current weather forecast.')]

5class CurrentWeatherTool extends Tool

6{

7    protected ?array $meta = [

8        'version' => '2.0',

9        'author' => 'Weather Team',

10    ];

11

12    // ...

13}

use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tool;

#[Description('Fetches the current weather forecast.')]
class CurrentWeatherTool extends Tool
{
    protected ?array $meta = [
        'version' => '2.0',
        'author' => 'Weather Team',
    ];

    // ...
}
```

## [Icons](#icons)

MCP clients can display icons for your server and its primitives. You may declare icons on a server, tool, resource, or prompt using the `Icon` attribute:

```
1use Laravel\Mcp\Enums\IconTheme;

2use Laravel\Mcp\Server\Attributes\Icon;

3

4#[Icon('mcp/server.png', mimeType: 'image/png', sizes: ['48x48'])]

5#[Icon('mcp/server-dark.svg', theme: IconTheme::Dark)]

6class WeatherServer extends Server

7{

8    // ...

9}

use Laravel\Mcp\Enums\IconTheme;
use Laravel\Mcp\Server\Attributes\Icon;

#[Icon('mcp/server.png', mimeType: 'image/png', sizes: ['48x48'])]
#[Icon('mcp/server-dark.svg', theme: IconTheme::Dark)]
class WeatherServer extends Server
{
    // ...
}
```

The `Icon` attribute is repeatable, so you may declare multiple icons to provide different sizes or light and dark theme variants.

Alternatively, you may define icons programmatically by overriding the `icons` method, which is useful when an icon depends on runtime conditions:

```
1use Laravel\Mcp\Schema\Icon;

2

3class CurrentWeatherTool extends Tool

4{

5    /**

6     * Get the tool's icons.

7     *

8     * @return array<int, Icon>

9     */

10    public function icons(): array

11    {

12        return [

13            Icon::from('mcp/tool.png', mimeType: 'image/png'),

14        ];

15    }

16}

use Laravel\Mcp\Schema\Icon;

class CurrentWeatherTool extends Tool
{
    /**
     * Get the tool's icons.
     *
     * @return array<int, Icon>
     */
    public function icons(): array
    {
        return [
            Icon::from('mcp/tool.png', mimeType: 'image/png'),
        ];
    }
}
```

Icons defined via the attribute and the `icons` method are combined automatically. Icon paths are resolved as follows:

- Paths with a URI scheme, such as `https:` or `data:`, are used as-is.
- Relative paths are resolved to a URL using Laravel's `asset` helper.

## [Authentication](#authentication)

Just like routes, you can authenticate web MCP servers with middleware. Adding authentication to your MCP server will require a user to authenticate before using any capability of the server.

This section covers external AI clients accessing **your application's MCP servers**. To connect your application to another service's MCP server using a user's credentials, see [client authentication](#client-authentication) instead.

There are two ways to authenticate access to your MCP server: simple, token based authentication via [Laravel Sanctum](sanctum.md) or any token which is passed via the `Authorization` HTTP header. Or, you may authenticate via OAuth using [Laravel Passport](passport.md).

### [OAuth 2.1](#oauth)

The most robust way to protect your web-based MCP servers is with OAuth using [Laravel Passport](passport.md).

When authenticating your MCP server via OAuth, invoke the `Mcp::oauthRoutes` method in your `routes/ai.php` file to register the required OAuth2 discovery and client registration routes. Then, apply Passport's `auth:api` middleware to your `Mcp::web` route in your `routes/ai.php` file:

```
1use App\Mcp\Servers\WeatherExample;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::oauthRoutes();

5

6Mcp::web('/mcp/weather', WeatherExample::class)

7    ->middleware('auth:api');

use App\Mcp\Servers\WeatherExample;
use Laravel\Mcp\Facades\Mcp;

Mcp::oauthRoutes();

Mcp::web('/mcp/weather', WeatherExample::class)
    ->middleware('auth:api');
```

#### [New Passport Installation](#new-passport-installation)

If your application is not already using Laravel Passport, follow Passport's [installation and deployment guide](passport.md#installation) to add Passport to your application. You should have an `OAuthenticatable` model, new authentication guard, and passport keys before moving on.

Next, you should publish Laravel MCP's provided Passport authorization view:

```
1php artisan vendor:publish --tag=mcp-views

php artisan vendor:publish --tag=mcp-views
```

Then, instruct Passport to use this view using the `Passport::authorizationView` method. Typically, this method should be invoked in the `boot` method of your application's `AppServiceProvider`:

```
1use Laravel\Passport\Passport;

2

3/**

4 * Bootstrap any application services.

5 */

6public function boot(): void

7{

8    Passport::authorizationView(function ($parameters) {

9        return view('mcp.authorize', $parameters);

10    });

11}

use Laravel\Passport\Passport;

/**
 * Bootstrap any application services.
 */
public function boot(): void
{
    Passport::authorizationView(function ($parameters) {
        return view('mcp.authorize', $parameters);
    });
}
```

This view will be displayed to the end-user during authentication to reject or approve the AI agent's authentication attempt.

![Authorization screen example](data:image/png;base64,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)

In this scenario, we're simply using OAuth as a translation layer to the underlying authenticatable model. We are ignoring many aspects of OAuth, such as scopes.

#### Using an Existing Passport Installation

If your application is already using Laravel Passport, Laravel MCP should work seamlessly within your existing Passport installation, but custom scopes aren't currently supported as OAuth is primarily used as a translation layer to the underlying authenticatable model.

Laravel MCP, via the `Mcp::oauthRoutes` method discussed above, adds, advertises, and uses a single `mcp:use` scope.

#### Passport vs. Sanctum

OAuth2.1 is the documented authentication mechanism in the Model Context Protocol specification, and is the most widely supported among MCP clients. For that reason, we recommend using Passport when possible.

If your application is already using [Sanctum](sanctum.md) then adding Passport may be cumbersome. In this instance, we recommend using Sanctum without Passport until you have a clear, necessary requirement to use an MCP client that only supports OAuth.

#### [Rate Limiting OAuth Routes](#rate-limiting-oauth-routes)

As expected by the MCP specification and RFC 7591, the dynamic client registration route registered by `Mcp::oauthRoutes` is publicly accessible, allowing any MCP client to register itself without authentication. Since each registration creates a new OAuth client in your database, you should protect these routes using rate limiting that fits your application's traffic. You may do so by registering the routes within a route group that applies Laravel's `throttle` middleware:

```
1use Illuminate\Support\Facades\Route;

2use Laravel\Mcp\Facades\Mcp;

3

4Route::middleware('throttle:10,1')->group(function () {

5    Mcp::oauthRoutes();

6});

use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Facades\Mcp;

Route::middleware('throttle:10,1')->group(function () {
    Mcp::oauthRoutes();
});
```

If your MCP clients do not need to register themselves dynamically, you may disable the client registration route entirely by passing `false` to the `registration` argument:

```
1Mcp::oauthRoutes(registration: false);

Mcp::oauthRoutes(registration: false);
```

### [Sanctum](#sanctum)

If you would like to protect your MCP server using [Sanctum](sanctum.md), simply add Sanctum's authentication middleware to your server in your `routes/ai.php` file. Then, ensure your MCP clients provide an `Authorization: Bearer <token>` header to ensure successful authentication:

```
1use App\Mcp\Servers\WeatherExample;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::web('/mcp/demo', WeatherExample::class)

5    ->middleware('auth:sanctum');

use App\Mcp\Servers\WeatherExample;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/demo', WeatherExample::class)
    ->middleware('auth:sanctum');
```

#### [Custom MCP Authentication](#custom-mcp-authentication)

If your application issues its own custom API tokens, you may authenticate your MCP server by assigning any middleware you wish to your `Mcp::web` routes. Your custom middleware can inspect the `Authorization` header manually to authenticate the incoming MCP request.

## [Authorization](#authorization)

You may access the currently authenticated user via the `$request->user()` method, allowing you to perform [authorization checks](authorization.md) within your MCP tools and resources:

```
1use Laravel\Mcp\Request;

2use Laravel\Mcp\Response;

3

4/**

5 * Handle the tool request.

6 */

7public function handle(Request $request): Response

8{

9    if (! $request->user()->can('read-weather')) {

10        return Response::error('Permission denied.');

11    }

12

13    // ...

14}

use Laravel\Mcp\Request;
use Laravel\Mcp\Response;

/**
 * Handle the tool request.
 */
public function handle(Request $request): Response
{
    if (! $request->user()->can('read-weather')) {
        return Response::error('Permission denied.');
    }

    // ...
}
```

## [MCP Client](#client)

In addition to building servers, Laravel MCP includes a client for connecting to other MCP servers, whether first-party or third-party. The client lets your application discover and call the tools exposed by an MCP server, which is especially useful for giving your [AI agents](ai-sdk.md#mcp-tools) access to capabilities provided by external MCP servers.

For example, a chat application may connect to GitHub's MCP server using each user's GitHub token, allowing its agent to answer questions about that user's repositories. In this scenario, your application is the MCP client; you do not need to create an MCP server or register `Mcp::web` routes.

### [Connecting to Servers](#client-connecting)

You may connect to an HTTP-accessible MCP server using the `Client::web` method, passing the server's URL:

```
1use Laravel\Mcp\Client;

2

3$client = Client::web('https://api.githubcopilot.com/mcp/');

use Laravel\Mcp\Client;

$client = Client::web('https://api.githubcopilot.com/mcp/');
```

To connect to a local MCP server that runs as a command, use the `Client::local` method, providing the command and any arguments needed to start the server:

```
1use Laravel\Mcp\Client;

2

3$client = Client::local('php', ['artisan', 'mcp:start']);

use Laravel\Mcp\Client;

$client = Client::local('php', ['artisan', 'mcp:start']);
```

The client connects lazily, automatically establishing the connection the first time you list or call tools. If you need to manage the connection manually, you may use the `connect`, `connected`, and `disconnect` methods:

```
1$client->connect();

2

3if ($client->connected()) {

4    $capabilities = $client->capabilities();

5    $server = $client->serverInfo();

6}

7

8$client->disconnect();

$client->connect();

if ($client->connected()) {
    $capabilities = $client->capabilities();
    $server = $client->serverInfo();
}

$client->disconnect();
```

You may customize the request timeout using the `withTimeout` method:

```
1$client = Client::web('https://api.githubcopilot.com/mcp/')->withTimeout(30);

$client = Client::web('https://api.githubcopilot.com/mcp/')->withTimeout(30);
```

### [Named Clients](#named-clients)

Instead of constructing a client each time you need it, you may optionally register reusable, named clients. The `registerClient` method names an outgoing connection; it does not expose an MCP server or authorize a user. Registration is typically done in the `boot` method of a service provider using the `Mcp` facade:

```
1use Laravel\Mcp\Client;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::registerClient('github', fn () => Client::web('https://api.githubcopilot.com/mcp/'));

use Laravel\Mcp\Client;
use Laravel\Mcp\Facades\Mcp;

Mcp::registerClient('github', fn () => Client::web('https://api.githubcopilot.com/mcp/'));
```

Once registered, you may resolve the client anywhere in your application by name:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$client = Mcp::client('github');

use Laravel\Mcp\Facades\Mcp;

$client = Mcp::client('github');
```

Named clients are resolved once per request and automatically disconnect at the end of the request lifecycle.

### [Client Authentication](#client-authentication)

#### [Bearer Tokens](#client-bearer-tokens)

To connect to a web MCP server that is protected by a bearer token, use the `withToken` method. You may pass a token string or a closure that lazily resolves the token:

```
1use Illuminate\Support\Facades\Auth;

2use Laravel\Mcp\Client;

3

4$client = Client::web('https://api.githubcopilot.com/mcp/')->withToken(

5    config('services.github_mcp.token'),

6);

7

8$client = Client::web('https://api.githubcopilot.com/mcp/')->withToken(

9    fn () => Auth::user()->github_mcp_token,

10);

use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Client;

$client = Client::web('https://api.githubcopilot.com/mcp/')->withToken(
    config('services.github_mcp.token'),
);

$client = Client::web('https://api.githubcopilot.com/mcp/')->withToken(
    fn () => Auth::user()->github_mcp_token,
);
```

If you already obtained a suitable token through [Socialite](socialite.md) or another account-linking flow, pass that token to `withToken`; you do not need to register MCP OAuth routes.

#### [Linking User Accounts With OAuth](#client-oauth)

Imagine a chat application where users connect a project management service, then ask an agent questions such as "Which of my tasks are overdue?" The external project management service exposes an OAuth-protected MCP server. Your application must redirect each user to the service's consent screen, exchange their approval for a token, and store that token for future tool calls.

Laravel MCP handles this account-linking flow using `withOAuth` and `Mcp::oAuthRoutesFor`. First, register a named client in a service provider. The OAuth client credentials identify your application to the service, while `withToken` supplies the connected user's saved access token when calling tools:

```
1use Illuminate\Support\Facades\Auth;

2use Laravel\Mcp\Client;

3use Laravel\Mcp\Facades\Mcp;

4

5Mcp::registerClient('projects', fn () => Client::web('https://projects.example.com/mcp')

6    ->withOAuth(

7        clientId: config('services.projects.client_id'),

8        clientSecret: config('services.projects.client_secret'),

9    )

10    ->withToken(fn () => Auth::user()->projects_token));

use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Client;
use Laravel\Mcp\Facades\Mcp;

Mcp::registerClient('projects', fn () => Client::web('https://projects.example.com/mcp')
    ->withOAuth(
        clientId: config('services.projects.client_id'),
        clientSecret: config('services.projects.client_secret'),
    )
    ->withToken(fn () => Auth::user()->projects_token));
```

The `clientId` and `clientSecret` arguments may be omitted. Laravel will use a [Client ID Metadata Document](https://modelcontextprotocol.io/specification/2026-07-28/basic/authorization/client-registration#client-id-metadata-documents) when the authorization server supports them, falling back to [dynamic client registration](https://datatracker.ietf.org/doc/html/rfc7591) for legacy servers.

The authorization server must advertise support for the `S256` PKCE code challenge method in its authorization server metadata. Laravel will reject the authorization attempt if PKCE support is not advertised.

Next, register the account-linking routes in your `routes/ai.php` file. The callback receives the client name and resulting `TokenSet`, allowing you to save the token for the signed-in user:

```
1use Illuminate\Support\Facades\Auth;

2use Laravel\Mcp\Client\OAuth\TokenSet;

3use Laravel\Mcp\Facades\Mcp;

4

5Mcp::oAuthRoutesFor('projects', function (string $client, TokenSet $token) {

6    Auth::user()->update([

7        'projects_token' => $token->accessToken,

8    ]);

9

10    return redirect('/chat');

11}, middleware: ['web', 'auth']);

use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Client\OAuth\TokenSet;
use Laravel\Mcp\Facades\Mcp;

Mcp::oAuthRoutesFor('projects', function (string $client, TokenSet $token) {
    Auth::user()->update([
        'projects_token' => $token->accessToken,
    ]);

    return redirect('/chat');
}, middleware: ['web', 'auth']);
```

The `oAuthRoutesFor` method registers three named routes: a connect route (`mcp.oauth.{client}.connect`) that redirects the user to the authorization server, a callback route (`mcp.oauth.{client}.callback`) that exchanges the authorization code and invokes your handler, and a public Client ID Metadata Document route (`mcp.oauth.{client}.client-metadata`).

The connect and callback routes use the `web` middleware group by default; the account-linking example above adds `auth` to require a signed-in user. The metadata route does not use this middleware because the authorization server must be able to retrieve it.

Your "Connect Project Service" button should send the user to the connect route:

```
1return redirect()->route('mcp.oauth.projects.connect');

return redirect()->route('mcp.oauth.projects.connect');
```

Laravel redirects the user to the service to approve access, exchanges the authorization code on their return, and invokes your callback. On subsequent chat requests, the named client uses the saved token. For example, an [AI SDK agent](ai-sdk.md#mcp-tools) may expose the service's tools:

```
1public function tools(): iterable

2{

3    return [

4        ...Mcp::client('projects')->tools(),

5    ];

6}

public function tools(): iterable
{
    return [
        ...Mcp::client('projects')->tools(),
    ];
}
```

Store tokens using [encrypted casts](eloquent-mutators.md#encrypted-casting) and hide them from model serialization. If the service issues expiring tokens, also persist the refresh token and expiry information from the `TokenSet` and handle renewal before making tool calls. For queued agents, resolve credentials from an explicitly provided user instead of `Auth::user()`.

`Mcp::oAuthRoutesFor` connects your users to an external service. In contrast, `Mcp::oauthRoutes` allows external AI clients to authenticate to your own MCP servers using Passport. You do not need Passport or `Mcp::oauthRoutes` for the account-linking flow above.

#### [Client Metadata](#client-metadata)

The metadata document describes your application as a public OAuth client and uses your application's `APP_URL` to generate the client ID and callback URL. Therefore, you should ensure the `APP_URL` environment variable is set correctly in production. You may customize the metadata route and provide additional metadata using the `clientMetadataUri` and `clientMetadata` arguments:

```
1use Laravel\Mcp\Client\OAuth\TokenSet;

2use Laravel\Mcp\Facades\Mcp;

3

4Mcp::oAuthRoutesFor(

5    'projects',

6    function (string $client, TokenSet $token) {

7        // Store the token...

8

9        return redirect('/dashboard');

10    },

11    clientMetadataUri: 'oauth/projects/client.json',

12    clientMetadata: [

13        'client_name' => 'Acme Dashboard',

14        'logo_uri' => 'https://acme.com/logo.png',

15    ],

16);

use Laravel\Mcp\Client\OAuth\TokenSet;
use Laravel\Mcp\Facades\Mcp;

Mcp::oAuthRoutesFor(
    'projects',
    function (string $client, TokenSet $token) {
        // Store the token...

        return redirect('/dashboard');
    },
    clientMetadataUri: 'oauth/projects/client.json',
    clientMetadata: [
        'client_name' => 'Acme Dashboard',
        'logo_uri' => 'https://acme.com/logo.png',
    ],
);
```

### [Tools](#client-tools)

You may retrieve the tools exposed by an MCP server using the `tools` method, which returns a collection of tools keyed by name:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$tools = Mcp::client('github')->tools();

4

5foreach ($tools as $tool) {

6    $tool->name;

7    $tool->title;

8    $tool->description;

9    $tool->inputSchema;

10}

use Laravel\Mcp\Facades\Mcp;

$tools = Mcp::client('github')->tools();

foreach ($tools as $tool) {
    $tool->name;
    $tool->title;
    $tool->description;
    $tool->inputSchema;
}
```

The client automatically paginates through all available tools. You may limit the number of tools returned using the `limit` argument:

```
1$tools = Mcp::client('github')->tools(limit: 10);

$tools = Mcp::client('github')->tools(limit: 10);
```

To invoke a tool, use the `callTool` method, passing the tool name and an array of arguments. The returned `ToolResult` instance exposes the tool response:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$result = Mcp::client('github')->callTool('list_issues', [

4    'owner' => 'laravel',

5    'repo' => 'framework',

6]);

7

8$result->text(); // The text content of the response...

9(string) $result; // Equivalent to calling text()...

10$result->isError; // Whether the tool reported an error...

11$result->structuredContent;  // Structured content, if any...

use Laravel\Mcp\Facades\Mcp;

$result = Mcp::client('github')->callTool('list_issues', [
    'owner' => 'laravel',
    'repo' => 'framework',
]);

$result->text(); // The text content of the response...
(string) $result; // Equivalent to calling text()...
$result->isError; // Whether the tool reported an error...
$result->structuredContent;  // Structured content, if any...
```

Alternatively, you may call a tool directly from a listed tool instance:

```
1$tools = Mcp::client('github')->tools();

2

3$result = $tools['list_issues']->call([

4    'owner' => 'laravel',

5    'repo' => 'framework',

6]);

$tools = Mcp::client('github')->tools();

$result = $tools['list_issues']->call([
    'owner' => 'laravel',
    'repo' => 'framework',
]);
```

If you are building agents with the [Laravel AI SDK](ai-sdk.md), you may also provide tools from an MCP client directly to an agent, allowing the model to call them while responding to a prompt. See the [MCP Tools](ai-sdk.md#mcp-tools) section of the AI SDK documentation for more information.

### [Prompts](#client-prompts)

You may retrieve the prompts exposed by an MCP server using the `prompts` method, which returns a collection of prompts keyed by name:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$prompts = Mcp::client('github')->prompts();

4

5foreach ($prompts as $prompt) {

6    $prompt->name;

7    $prompt->title;

8    $prompt->description;

9    $prompt->arguments;

10}

use Laravel\Mcp\Facades\Mcp;

$prompts = Mcp::client('github')->prompts();

foreach ($prompts as $prompt) {
    $prompt->name;
    $prompt->title;
    $prompt->description;
    $prompt->arguments;
}
```

The client automatically paginates through all available prompts. You may limit the number of prompts returned using the `limit` argument:

```
1$prompts = Mcp::client('github')->prompts(limit: 10);

$prompts = Mcp::client('github')->prompts(limit: 10);
```

To retrieve a prompt, use the `getPrompt` method, passing the prompt name and an array of arguments. The returned `PromptResult` instance exposes the generated messages:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$result = Mcp::client('github')->getPrompt('issue_to_fix_workflow', [

4    'owner' => 'laravel',

5    'repo' => 'framework',

6    'title' => 'Fix typo in README',

7    'description' => 'The installation section has a typo.',

8]);

9

10$result->text(); // The text content of the messages...

11(string) $result; // Equivalent to calling text()...

12$result->messages; // The raw messages returned by the prompt...

13$result->description; // The prompt description, if any...

use Laravel\Mcp\Facades\Mcp;

$result = Mcp::client('github')->getPrompt('issue_to_fix_workflow', [
    'owner' => 'laravel',
    'repo' => 'framework',
    'title' => 'Fix typo in README',
    'description' => 'The installation section has a typo.',
]);

$result->text(); // The text content of the messages...
(string) $result; // Equivalent to calling text()...
$result->messages; // The raw messages returned by the prompt...
$result->description; // The prompt description, if any...
```

### [Resources](#client-resources)

You may retrieve the resources exposed by an MCP server using the `resources` method, which returns a collection of resources keyed by URI:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$resources = Mcp::client('github')->resources();

4

5foreach ($resources as $resource) {

6    $resource->uri;

7    $resource->name;

8    $resource->title;

9    $resource->description;

10    $resource->mimeType;

11    $resource->size;

12}

use Laravel\Mcp\Facades\Mcp;

$resources = Mcp::client('github')->resources();

foreach ($resources as $resource) {
    $resource->uri;
    $resource->name;
    $resource->title;
    $resource->description;
    $resource->mimeType;
    $resource->size;
}
```

The client automatically paginates through all available resources. You may limit the number of resources returned using the `limit` argument:

```
1$resources = Mcp::client('github')->resources(limit: 10);

$resources = Mcp::client('github')->resources(limit: 10);
```

To read a resource, use the `readResource` method, passing the resource URI. The returned `ResourceReadResult` instance exposes the resource content:

```
1use Laravel\Mcp\Facades\Mcp;

2

3$result = Mcp::client('github')->readResource('repo://laravel/framework/contents/README.md');

4

5$result->content(); // The content of the resource, decoding base64 blobs as needed...

6(string) $result; // Equivalent to calling content()...

7$result->mimeType(); // The MIME type of the resource, if any...

8$result->contents; // The raw contents returned by the resource...

use Laravel\Mcp\Facades\Mcp;

$result = Mcp::client('github')->readResource('repo://laravel/framework/contents/README.md');

$result->content(); // The content of the resource, decoding base64 blobs as needed...
(string) $result; // Equivalent to calling content()...
$result->mimeType(); // The MIME type of the resource, if any...
$result->contents; // The raw contents returned by the resource...
```

## [Testing Servers](#testing-servers)

You may test your MCP servers using the built-in MCP Inspector or by writing unit tests.

### [MCP Inspector](#mcp-inspector)

The [MCP Inspector](https://modelcontextprotocol.io/docs/tools/inspector) is an interactive tool for testing and debugging your MCP servers. Use it to connect to your server, verify authentication, and try out tools, resources, and prompts.

You may run the inspector for any registered server:

```
1# Web server...

2php artisan mcp:inspector mcp/weather

3

4# Local server named "weather"...

5php artisan mcp:inspector weather

# Web server...
php artisan mcp:inspector mcp/weather

# Local server named "weather"...
php artisan mcp:inspector weather
```

This command launches the MCP Inspector and provides the client settings that you may copy into your MCP client to ensure everything is configured correctly. If your web server is protected by an authentication middleware, make sure to include the required headers, such as an `Authorization` bearer token, when connecting.

### [Unit Tests](#unit-tests)

You may write unit tests for your MCP servers, tools, resources, and prompts.

To get started, create a new test case and invoke the desired primitive on the server that registers it. For example, to test a tool on the `WeatherServer`:

Pest
PHPUnit

```
1test('tool', function () {

2    $response = WeatherServer::tool(CurrentWeatherTool::class, [

3        'location' => 'New York City',

4        'units' => 'fahrenheit',

5    ]);

6

7    $response

8        ->assertOk()

9        ->assertSee('The current weather in New York City is 72°F and sunny.');

10});

test('tool', function () {
    $response = WeatherServer::tool(CurrentWeatherTool::class, [
        'location' => 'New York City',
        'units' => 'fahrenheit',
    ]);

    $response
        ->assertOk()
        ->assertSee('The current weather in New York City is 72°F and sunny.');
});
```

```
1/**

2 * Test a tool.

3 */

4public function test_tool(): void

5{

6    $response = WeatherServer::tool(CurrentWeatherTool::class, [

7        'location' => 'New York City',

8        'units' => 'fahrenheit',

9    ]);

10

11    $response

12        ->assertOk()

13        ->assertSee('The current weather in New York City is 72°F and sunny.');

14}

/**
 * Test a tool.
 */
public function test_tool(): void
{
    $response = WeatherServer::tool(CurrentWeatherTool::class, [
        'location' => 'New York City',
        'units' => 'fahrenheit',
    ]);

    $response
        ->assertOk()
        ->assertSee('The current weather in New York City is 72°F and sunny.');
}
```

Similarly, you may test prompts and resources:

```
1$response = WeatherServer::prompt(...);

2$response = WeatherServer::resource(...);

$response = WeatherServer::prompt(...);
$response = WeatherServer::resource(...);
```

You may also act as an authenticated user by chaining the `actingAs` method before invoking the primitive:

```
1$response = WeatherServer::actingAs($user)->tool(...);

$response = WeatherServer::actingAs($user)->tool(...);
```

Once you receive the response, you may use various assertion methods to verify the content and status of the response.

You may assert that a response is successful using the `assertOk` method. This checks that the response does not have any errors:

```
1$response->assertOk();

$response->assertOk();
```

You may assert that a response contains specific text using the `assertSee` method:

```
1$response->assertSee('The current weather in New York City is 72°F and sunny.');

$response->assertSee('The current weather in New York City is 72°F and sunny.');
```

You may assert that a response contains an error using the `assertHasErrors` method:

```
1$response->assertHasErrors();

2

3$response->assertHasErrors([

4    'Something went wrong.',

5]);

$response->assertHasErrors();

$response->assertHasErrors([
    'Something went wrong.',
]);
```

You may assert that a response does not contain an error using the `assertHasNoErrors` method:

```
1$response->assertHasNoErrors();

$response->assertHasNoErrors();
```

You may assert that a response contains specific metadata using the `assertName()`, `assertTitle()`, and `assertDescription()` methods:

```
1$response->assertName('current-weather');

2$response->assertTitle('Current Weather Tool');

3$response->assertDescription('Fetches the current weather forecast for a specified location.');

$response->assertName('current-weather');
$response->assertTitle('Current Weather Tool');
$response->assertDescription('Fetches the current weather forecast for a specified location.');
```

You may assert that notifications were sent using the `assertSentNotification` and `assertNotificationCount` methods:

```
1$response->assertSentNotification('processing/progress', [

2    'step' => 1,

3    'total' => 5,

4]);

5

6$response->assertSentNotification('processing/progress', [

7    'step' => 2,

8    'total' => 5,

9]);

10

11$response->assertNotificationCount(5);

$response->assertSentNotification('processing/progress', [
    'step' => 1,
    'total' => 5,
]);

$response->assertSentNotification('processing/progress', [
    'step' => 2,
    'total' => 5,
]);

$response->assertNotificationCount(5);
```

Finally, if you wish to inspect the raw response content, you may use the `dd` or `dump` methods to output the response for debugging purposes:

```
1$response->dd();

2$response->dump();

$response->dd();
$response->dump();
```

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Installation](#installation)
  - [Publishing Routes](#publishing-routes)
- [Creating Servers](#creating-servers)
  - [Server Registration](#server-registration)
  - [Web Servers](#web-servers)
  - [Local Servers](#local-servers)
  - [Cache Hints](#cache-hints)
- [Tools](#tools)
  - [Creating Tools](#creating-tools)
  - [Searchable Tool Catalogs](#searchable-tool-catalogs)
  - [Tool Input Schemas](#tool-input-schemas)
  - [Tool Output Schemas](#tool-output-schemas)
  - [Validating Tool Arguments](#validating-tool-arguments)
  - [Tool Dependency Injection](#tool-dependency-injection)
  - [Tool Annotations](#tool-annotations)
  - [Conditional Tool Registration](#conditional-tool-registration)
  - [Tool Responses](#tool-responses)
- [Prompts](#prompts)
  - [Creating Prompts](#creating-prompts)
  - [Prompt Arguments](#prompt-arguments)
  - [Validating Prompt Arguments](#validating-prompt-arguments)
  - [Prompt Dependency Injection](#prompt-dependency-injection)
  - [Conditional Prompt Registration](#conditional-prompt-registration)
  - [Prompt Responses](#prompt-responses)
- [Resources](#resources)
  - [Creating Resources](#creating-resources)
  - [Resource Templates](#resource-templates)
  - [Resource URI and MIME Type](#resource-uri-and-mime-type)
  - [Resource Request](#resource-request)
  - [Resource Dependency Injection](#resource-dependency-injection)
  - [Resource Annotations](#resource-annotations)
  - [Conditional Resource Registration](#conditional-resource-registration)
  - [Resource Responses](#resource-responses)
- [Apps](#apps)
  - [Creating App Resources](#creating-app-resources)
  - [Rendering Apps From Tools](#rendering-apps-from-tools)
  - [App Tool Visibility](#app-tool-visibility)
  - [App Configuration](#app-configuration)
  - [Building Apps With Boost](#building-apps-with-boost)
- [Metadata](#metadata)
- [Icons](#icons)
- [Authentication](#authentication)
  - [OAuth 2.1](#oauth)
  - [Sanctum](#sanctum)
- [Authorization](#authorization)
- [MCP Client](#client)
  - [Connecting to Servers](#client-connecting)
  - [Named Clients](#named-clients)
  - [Client Authentication](#client-authentication)
  - [Tools](#client-tools)
  - [Prompts](#client-prompts)
  - [Resources](#client-resources)
- [Testing Servers](#testing-servers)
  - [MCP Inspector](#mcp-inspector)
  - [Unit Tests](#unit-tests)

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

# Laravel AI SDK | Laravel 13.x - The clean stack for Artisans and agents

> **Fonte / Source:** https://laravel.com/framework/docs/ai-sdk

---

[Skip to content](#main-content)

# Laravel AI SDK

- [Introduction](#introduction)
- [Installation](#installation)
  - [Configuration](#configuration)
  - [Custom Base URLs](#custom-base-urls)
  - [OpenAI-Compatible Providers](#openai-compatible-providers)
  - [On-Demand Providers](#on-demand-providers)
  - [Provider Support](#provider-support)
- [Agents](#agents)
  - [Prompting](#prompting)
  - [Conversation Context](#conversation-context)
  - [Structured Output](#structured-output)
  - [Attachments](#attachments)
  - [Streaming](#streaming)
  - [Broadcasting](#broadcasting)
  - [Queueing](#queueing)
  - [Tools](#tools)
  - [Deferred Tool Loading](#deferred-tool-loading)
  - [File Storage Tools](#file-storage-tools)
  - [MCP Tools](#mcp-tools)
  - [Skills](#skills)
  - [Provider Tools](#provider-tools)
  - [Sub-Agents](#sub-agents)
  - [Middleware](#middleware)
  - [Anonymous Agents](#anonymous-agents)
  - [Agent Configuration](#agent-configuration)
  - [Provider Options](#provider-options)
  - [Prompt Caching](#prompt-caching)
- [Human Tool Approval](#human-tool-approval)
  - [Complete Approval Flow](#complete-approval-flow)
- [Images](#images)
- [Audio (TTS)](#audio)
- [Transcription (STT)](#transcription)
- [Text Summarization](#text-summarization)
- [Embeddings](#embeddings)
  - [Multimodal Embeddings](#multimodal-embeddings)
  - [Querying Embeddings](#querying-embeddings)
  - [Caching Embeddings](#caching-embeddings)
- [Reranking](#reranking)
  - [Reranking Collections](#reranking-collections)
- [Classification](#classification)
  - [Classifying Images](#classifying-images)
  - [Yes or No Decisions](#yes-or-no-decisions)
  - [Choosing From Collections](#choosing-from-collections)
- [Files](#files)
  - [Using Stored Files in Conversations](#using-stored-files-in-conversations)
- [Vector Stores](#vector-stores)
  - [Adding Files to Stores](#adding-files-to-stores)
- [Usage](#usage)
- [Failover](#failover)
- [Testing](#testing)
  - [Agents](#testing-agents)
  - [Images](#testing-images)
  - [Audio](#testing-audio)
  - [Transcriptions](#testing-transcriptions)
  - [Embeddings](#testing-embeddings)
  - [Reranking](#testing-reranking)
  - [Classification](#testing-classification)
  - [Files](#testing-files)
  - [Vector Stores](#testing-vector-stores)
- [Events](#events)

## [Introduction](#introduction)

The [Laravel AI SDK](https://github.com/laravel/ai) provides a unified, expressive API for interacting with AI providers such as OpenAI, Anthropic, Gemini, and more. With the AI SDK, you can build intelligent agents with tools and structured output, generate images, synthesize and transcribe audio, create vector embeddings, and much more — all using a consistent, Laravel-friendly interface.

## [Installation](#installation)

You can install the Laravel AI SDK via Composer:

```
1composer require laravel/ai

composer require laravel/ai
```

Next, you should publish the AI SDK configuration and migration files using the `vendor:publish` Artisan command:

```
1php artisan vendor:publish --provider="Laravel\Ai\AiServiceProvider"

php artisan vendor:publish --provider="Laravel\Ai\AiServiceProvider"
```

Finally, you should run your application's database migrations. This will create a `agent_conversations` and `agent_conversation_messages` table that the AI SDK uses to power its conversation storage:

```
1php artisan migrate

php artisan migrate
```

### [Configuration](#configuration)

You may define your AI provider credentials in your application's `config/ai.php` configuration file or as environment variables in your application's `.env` file:

```
1ANTHROPIC_API_KEY=

2AZURE_OPENAI_API_KEY=

3COHERE_API_KEY=

4DEEPSEEK_API_KEY=

5ELEVENLABS_API_KEY=

6GEMINI_API_KEY=

7GROQ_API_KEY=

8MISTRAL_API_KEY=

9OLLAMA_API_KEY=

10OPENAI_API_KEY=

11OPENAI_COMPATIBLE_API_KEY=

12OPENAI_COMPATIBLE_URL=

13OPENROUTER_API_KEY=

14JINA_API_KEY=

15TYPESAFE_API_KEY=

16VOYAGEAI_API_KEY=

17XAI_API_KEY=

ANTHROPIC_API_KEY=
AZURE_OPENAI_API_KEY=
COHERE_API_KEY=
DEEPSEEK_API_KEY=
ELEVENLABS_API_KEY=
GEMINI_API_KEY=
GROQ_API_KEY=
MISTRAL_API_KEY=
OLLAMA_API_KEY=
OPENAI_API_KEY=
OPENAI_COMPATIBLE_API_KEY=
OPENAI_COMPATIBLE_URL=
OPENROUTER_API_KEY=
JINA_API_KEY=
TYPESAFE_API_KEY=
VOYAGEAI_API_KEY=
XAI_API_KEY=
```

The default models used for text, images, audio, transcription, and embeddings may also be configured in your application's `config/ai.php` configuration file.

### [Custom Base URLs](#custom-base-urls)

By default, the Laravel AI SDK connects directly to each provider's public API endpoint. However, you may need to route requests through a different endpoint - for example, when using a proxy service to centralize API key management, implement rate limiting, or route traffic through a corporate gateway.

You may configure custom base URLs by adding a `url` parameter to your provider configuration:

```
1'providers' => [

2    'openai' => [

3        'driver' => 'openai',

4        'key' => env('OPENAI_API_KEY'),

5        'url' => env('OPENAI_URL'),

6    ],

7

8    'anthropic' => [

9        'driver' => 'anthropic',

10        'key' => env('ANTHROPIC_API_KEY'),

11        'url' => env('ANTHROPIC_URL'),

12    ],

13],

'providers' => [
    'openai' => [
        'driver' => 'openai',
        'key' => env('OPENAI_API_KEY'),
        'url' => env('OPENAI_URL'),
    ],

    'anthropic' => [
        'driver' => 'anthropic',
        'key' => env('ANTHROPIC_API_KEY'),
        'url' => env('ANTHROPIC_URL'),
    ],
],
```

This is useful when routing requests through a proxy service (such as LiteLLM or Azure OpenAI Gateway) or using alternative endpoints.

Custom base URLs are supported for the following providers: OpenAI, Anthropic, Gemini, Groq, Cohere, DeepSeek, xAI, OpenRouter, and TypeSafe.

### [OpenAI-Compatible Providers](#openai-compatible-providers)

If you are using an OpenAI-compatible API, such as LM Studio, vLLM, Together, Fireworks, or a local gateway, you may configure an `openai-compatible` provider. The `url` option is required, while the `key` option is optional and will be sent as a bearer token when present:

```
1'providers' => [

2    'local' => [

3        'driver' => 'openai-compatible',

4        'url' => env('LOCAL_AI_URL'),

5        'key' => env('LOCAL_AI_API_KEY'),

6    ],

7],

'providers' => [
    'local' => [
        'driver' => 'openai-compatible',
        'url' => env('LOCAL_AI_URL'),
        'key' => env('LOCAL_AI_API_KEY'),
    ],
],
```

Once configured, you may use the named provider like any other provider:

```
1agent()->prompt('What is Laravel?', provider: 'local', model: 'local-model');

agent()->prompt('What is Laravel?', provider: 'local', model: 'local-model');
```

You may also configure a default text model for the provider so that you do not need to pass a model explicitly:

```
1'local' => [

2    'driver' => 'openai-compatible',

3    'url' => env('LOCAL_AI_URL'),

4    'key' => env('LOCAL_AI_API_KEY'),

5    'models' => [

6        'text' => [

7            'default' => env('LOCAL_AI_MODEL'),

8        ],

9    ],

10],

'local' => [
    'driver' => 'openai-compatible',
    'url' => env('LOCAL_AI_URL'),
    'key' => env('LOCAL_AI_API_KEY'),
    'models' => [
        'text' => [
            'default' => env('LOCAL_AI_MODEL'),
        ],
    ],
],
```

You may add custom HTTP headers to every outgoing request for the provider by defining a `headers` array in its configuration. This is useful when an endpoint requires an additional identifying or authentication header beyond the bearer token:

```
1'local' => [

2    'driver' => 'openai-compatible',

3    'url' => env('LOCAL_AI_URL'),

4    'key' => env('LOCAL_AI_API_KEY'),

5    'headers' => [

6        'X-Tenant-Id' => env('LOCAL_AI_TENANT_ID'),

7    ],

8],

'local' => [
    'driver' => 'openai-compatible',
    'url' => env('LOCAL_AI_URL'),
    'key' => env('LOCAL_AI_API_KEY'),
    'headers' => [
        'X-Tenant-Id' => env('LOCAL_AI_TENANT_ID'),
    ],
],
```

OpenAI-compatible providers support text generation, streaming, tools, structured output, image attachments, embeddings, transcription, and classification. If your endpoint requires additional request body fields, provide them using [provider options](#provider-options).

#### [OpenAI-Compatible Embeddings](#openai-compatible-embeddings)

Since arbitrary endpoints have no known models, you must configure a default embeddings model to use `embeddings()` with an OpenAI-compatible provider. You may also configure a fixed dimensions value; if omitted, the request is sent without a `dimensions` parameter and the model's native dimensions are used.

```
1'local' => [

2    'driver' => 'openai-compatible',

3    'url' => env('LOCAL_AI_URL'),

4    'key' => env('LOCAL_AI_API_KEY'),

5    'models' => [

6        'embeddings' => [

7            'default' => 'text-embedding-qwen3-embedding-0.6b',

8            'dimensions' => 1024, // optional

9        ],

10    ],

11],

'local' => [
    'driver' => 'openai-compatible',
    'url' => env('LOCAL_AI_URL'),
    'key' => env('LOCAL_AI_API_KEY'),
    'models' => [
        'embeddings' => [
            'default' => 'text-embedding-qwen3-embedding-0.6b',
            'dimensions' => 1024, // optional
        ],
    ],
],
```

#### [OpenAI-Compatible Transcriptions](#openai-compatible-transcriptions)

Likewise, you must configure a default transcription model to use `Transcription` with an OpenAI-compatible provider. The audio will be uploaded to the endpoint's `/audio/transcriptions` route as a standard multipart request:

```
1'local' => [

2    'driver' => 'openai-compatible',

3    'url' => env('LOCAL_AI_URL'),

4    'key' => env('LOCAL_AI_API_KEY'),

5    'models' => [

6        'transcription' => [

7            'default' => 'whisper-1',

8        ],

9    ],

10],

'local' => [
    'driver' => 'openai-compatible',
    'url' => env('LOCAL_AI_URL'),
    'key' => env('LOCAL_AI_API_KEY'),
    'models' => [
        'transcription' => [
            'default' => 'whisper-1',
        ],
    ],
],
```

OpenAI-compatible and Groq providers do not support diarization. Invoking the `diarize` method when using these providers will throw an exception.

#### [OpenAI-Compatible Classification](#openai-compatible-classification)

If your endpoint implements OpenAI's decisions endpoint, you may use [classification](#classification) with an OpenAI-compatible provider. The SDK sends questions to the endpoint's `/decisions` route and supports [image attachments](#classifying-images). Since the SDK does not know which models your endpoint supports, configure a default classification model or pass a model to the `classify` method:

```
1'local' => [

2    'driver' => 'openai-compatible',

3    'url' => env('LOCAL_AI_URL'),

4    'key' => env('LOCAL_AI_API_KEY'),

5    'models' => [

6        'classification' => [

7            'default' => env('LOCAL_AI_MODEL'),

8        ],

9    ],

10],

'local' => [
    'driver' => 'openai-compatible',
    'url' => env('LOCAL_AI_URL'),
    'key' => env('LOCAL_AI_API_KEY'),
    'models' => [
        'classification' => [
            'default' => env('LOCAL_AI_MODEL'),
        ],
    ],
],
```

### [On-Demand Providers](#on-demand-providers)

Sometimes you may need to use provider credentials that are not defined in your application's configuration file, such as API keys that are stored in your database for each tenant of a multi-tenant application. You may use the `Ai::build` method to create a provider from a configuration array. The array should have the same structure as a provider entry in your application's `config/ai.php` configuration file:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Ai;

3

4$response = (new SalesCoach)->prompt('Analyze this sales transcript...', provider: [

5    Ai::build([

6        'driver' => 'anthropic',

7        'key' => $user->anthropic_key,

8    ]),

9]);

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Ai;

$response = (new SalesCoach)->prompt('Analyze this sales transcript...', provider: [
    Ai::build([
        'driver' => 'anthropic',
        'key' => $user->anthropic_key,
    ]),
]);
```

On-demand providers may be used anywhere a provider is accepted, including [failover](#failover) lists and when generating images, audio, transcriptions, and embeddings. To specify a model for an on-demand provider, include a `models` array in its configuration:

```
1$response = (new SalesCoach)->prompt('Analyze this sales transcript...', provider: [

2    Ai::build(['driver' => 'anthropic', 'key' => $user->anthropic_key]),

3    Ai::build([

4        'driver' => 'openai',

5        'key' => $user->openai_key,

6        'models' => ['text' => ['default' => 'gpt-6']],

7    ]),

8]);

$response = (new SalesCoach)->prompt('Analyze this sales transcript...', provider: [
    Ai::build(['driver' => 'anthropic', 'key' => $user->anthropic_key]),
    Ai::build([
        'driver' => 'openai',
        'key' => $user->openai_key,
        'models' => ['text' => ['default' => 'gpt-6']],
    ]),
]);
```

When an agent should always use an on-demand provider, you may return the provider from the agent's `provider` method. Since the provider is rebuilt when the agent is used, this approach also works well for [queued](#queueing) agents:

```
1use Laravel\Ai\Ai;

2use Laravel\Ai\Providers\Provider;

3

4public function provider(): Provider

5{

6    return Ai::build($this->user->aiConfiguration());

7}

use Laravel\Ai\Ai;
use Laravel\Ai\Providers\Provider;

public function provider(): Provider
{
    return Ai::build($this->user->aiConfiguration());
}
```

You should pass on-demand providers within an array, as shown in the examples above. If you give an on-demand provider a `name` in its configuration array, the name may not match a built-in provider or a provider defined in your `config/ai.php` configuration file.

### [Provider Support](#provider-support)

The AI SDK supports a variety of providers across its features. The following table summarizes which providers are available for each feature:

| Feature | Providers |
| --- | --- |
| Text | OpenAI, OpenAI Compatible, Anthropic, Gemini, Azure, Bedrock, Groq, xAI, DeepSeek, Mistral, Ollama, OpenRouter, Cohere |
| Images | OpenAI, Gemini, xAI, Azure, Bedrock, OpenRouter |
| TTS | OpenAI, ElevenLabs, Gemini, Mistral, OpenRouter |
| STT | OpenAI, OpenAI Compatible, ElevenLabs, Groq, Mistral, Gemini, OpenRouter |
| Embeddings | OpenAI, OpenAI Compatible, Gemini, Azure, Bedrock, Cohere, Mistral, Jina, VoyageAI, Ollama, OpenRouter |
| Reranking | Cohere, Jina, VoyageAI, Bedrock, OpenRouter |
| Classification | OpenAI, OpenAI Compatible, TypeSafe, OpenRouter |
| Files | OpenAI, Anthropic, Gemini, Azure, OpenRouter |

The `Laravel\Ai\Enums\Lab` enum may be used to reference providers throughout your code instead of using plain strings:

```
1use Laravel\Ai\Enums\Lab;

2

3Lab::Anthropic;

4Lab::OpenAI;

5Lab::OpenAICompatible;

6Lab::Gemini;

7// ...

use Laravel\Ai\Enums\Lab;

Lab::Anthropic;
Lab::OpenAI;
Lab::OpenAICompatible;
Lab::Gemini;
// ...
```

## [Agents](#agents)

Agents are the fundamental building block for interacting with AI providers in the Laravel AI SDK. Each agent is a dedicated PHP class that encapsulates the instructions, conversation context, tools, and output schema needed to interact with a large language model. Think of an agent as a specialized assistant — a sales coach, a document analyzer, a support bot — that you configure once and prompt as needed throughout your application.

You can create an agent via the `make:agent` Artisan command:

```
1php artisan make:agent SalesCoach

2

3php artisan make:agent SalesCoach --structured

php artisan make:agent SalesCoach

php artisan make:agent SalesCoach --structured
```

Within the generated agent class, you can define the system prompt / instructions, message context, available tools, and output schema (if applicable):

```
1<?php

2

3namespace App\Ai\Agents;

4

5use App\Ai\Tools\RetrievePreviousTranscripts;

6use App\Models\History;

7use App\Models\User;

8use Illuminate\Contracts\JsonSchema\JsonSchema;

9use Laravel\Ai\Contracts\Agent;

10use Laravel\Ai\Contracts\Conversational;

11use Laravel\Ai\Contracts\HasStructuredOutput;

12use Laravel\Ai\Contracts\HasTools;

13use Laravel\Ai\Messages\Message;

14use Laravel\Ai\Promptable;

15use Stringable;

16

17class SalesCoach implements Agent, Conversational, HasTools, HasStructuredOutput

18{

19    use Promptable;

20

21    public function __construct(public User $user) {}

22

23    /**

24     * Get the instructions that the agent should follow.

25     */

26    public function instructions(): Stringable|string

27    {

28        return 'You are a sales coach, analyzing transcripts and providing feedback and an overall sales strength score.';

29    }

30

31    /**

32     * Get the list of messages comprising the conversation so far.

33     */

34    public function messages(): iterable

35    {

36        return History::where('user_id', $this->user->id)

37            ->latest()

38            ->limit(50)

39            ->get()

40            ->reverse()

41            ->map(function ($message) {

42                return new Message($message->role, $message->content);

43            })->all();

44    }

45

46    /**

47     * Get the tools available to the agent.

48     *

49     * @return Tool[]

50     */

51    public function tools(): iterable

52    {

53        return [

54            new RetrievePreviousTranscripts,

55        ];

56    }

57

58    /**

59     * Get the agent's structured output schema definition.

60     */

61    public function schema(JsonSchema $schema): array

62    {

63        return [

64            'feedback' => $schema->string()->required(),

65            'score' => $schema->integer()->min(1)->max(10)->required(),

66        ];

67    }

68}

<?php

namespace App\Ai\Agents;

use App\Ai\Tools\RetrievePreviousTranscripts;
use App\Models\History;
use App\Models\User;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Contracts\HasStructuredOutput;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;
use Stringable;

class SalesCoach implements Agent, Conversational, HasTools, HasStructuredOutput
{
    use Promptable;

    public function __construct(public User $user) {}

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): Stringable|string
    {
        return 'You are a sales coach, analyzing transcripts and providing feedback and an overall sales strength score.';
    }

    /**
     * Get the list of messages comprising the conversation so far.
     */
    public function messages(): iterable
    {
        return History::where('user_id', $this->user->id)
            ->latest()
            ->limit(50)
            ->get()
            ->reverse()
            ->map(function ($message) {
                return new Message($message->role, $message->content);
            })->all();
    }

    /**
     * Get the tools available to the agent.
     *
     * @return Tool[]
     */
    public function tools(): iterable
    {
        return [
            new RetrievePreviousTranscripts,
        ];
    }

    /**
     * Get the agent's structured output schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'feedback' => $schema->string()->required(),
            'score' => $schema->integer()->min(1)->max(10)->required(),
        ];
    }
}
```

### [Prompting](#prompting)

To prompt an agent, first create an instance using the `make` method or standard instantiation, then call `prompt`:

```
1$response = (new SalesCoach)

2    ->prompt('Analyze this sales transcript...');

3

4return (string) $response;

$response = (new SalesCoach)
    ->prompt('Analyze this sales transcript...');

return (string) $response;
```

The `make` method resolves your agent from the container, allowing automatic dependency injection. You may also pass arguments to the agent's constructor:

```
1$agent = SalesCoach::make(user: $user);

$agent = SalesCoach::make(user: $user);
```

By passing additional arguments to the `prompt` method, you may override the default provider, model, or HTTP timeout when prompting:

```
1$response = (new SalesCoach)->prompt(

2    'Analyze this sales transcript...',

3    provider: Lab::Anthropic,

4    model: 'claude-sonnet-5',

5    timeout: 120,

6);

$response = (new SalesCoach)->prompt(
    'Analyze this sales transcript...',
    provider: Lab::Anthropic,
    model: 'claude-sonnet-5',
    timeout: 120,
);
```

#### [Raw HTTP Responses](#raw-http-responses)

Every response returned from a text-generating agent exposes the raw HTTP response from the underlying provider API call via a `raw` property. This gives you access to provider-specific information that isn't part of the AI SDK's generic response - rate-limit headers, request IDs, or other exact payload fields:

```
1$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

2

3$response->raw; // Illuminate\Http\Client\Response|null

4

5$response->raw->header('X-RateLimit-Remaining-Requests');

6$response->raw->json('id');

$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

$response->raw; // Illuminate\Http\Client\Response|null

$response->raw->header('X-RateLimit-Remaining-Requests');
$response->raw->json('id');
```

In a tool-call loop, each step retains the raw response of its own request:

```
1foreach ($response->steps as $step) {

2    $step->raw?->header('X-RateLimit-Remaining-Requests');

3}

foreach ($response->steps as $step) {
    $step->raw?->header('X-RateLimit-Remaining-Requests');
}
```

The `raw` property is `null` when streaming a response, when using the Bedrock provider (which performs its API calls via the AWS SDK instead of an HTTP client), and on faked responses unless one is provided explicitly via `withRawResponse`.

### [Conversation Context](#conversation-context)

If your agent implements the `Conversational` interface, you may use the `messages` method to return the previous conversation context, if applicable:

```
1/**

2 * Get the list of messages comprising the conversation so far.

3 */

4public function messages(): iterable

5{

6    return $this->user->history()

7        ->latest()

8        ->limit(50)

9        ->get()

10        ->reverse()

11        ->map(fn ($message) => new Message(

12            $message->role, $message->content,

13        ))->all();

14}

/**
 * Get the list of messages comprising the conversation so far.
 */
public function messages(): iterable
{
    return $this->user->history()
        ->latest()
        ->limit(50)
        ->get()
        ->reverse()
        ->map(fn ($message) => new Message(
            $message->role, $message->content,
        ))->all();
}
```

If your agent does not implement the `Conversational` interface, you may use the `withMessages` method to provide the conversation history for a single run, such as a history posted by your application's frontend:

```
1use Laravel\Ai\Messages\Message;

2

3$response = (new SalesCoach)

4    ->withMessages([

5        new Message('user', 'Analyze this sales transcript...'),

6        new Message('assistant', 'The rep never asked for the close.'),

7    ])

8    ->prompt('What should they say next time?');

use Laravel\Ai\Messages\Message;

$response = (new SalesCoach)
    ->withMessages([
        new Message('user', 'Analyze this sales transcript...'),
        new Message('assistant', 'The rep never asked for the close.'),
    ])
    ->prompt('What should they say next time?');
```

Agents that implement the `Conversational` interface load their own history, so combining the two approaches will throw a `LogicException`.

#### [Remembering Conversations](#remembering-conversations)

Before using the `RemembersConversations` trait, you should publish and run the AI SDK migrations using the `vendor:publish` Artisan command. These migrations will create the necessary database tables to store conversations.

If you would like Laravel to automatically store and retrieve conversation history for your agent, you may use the `RemembersConversations` trait. This trait provides a simple way to persist conversation messages to the database without manually implementing the `Conversational` interface:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Laravel\Ai\Concerns\RemembersConversations;

6use Laravel\Ai\Contracts\Agent;

7use Laravel\Ai\Contracts\Conversational;

8use Laravel\Ai\Promptable;

9

10class SalesCoach implements Agent, Conversational

11{

12    use Promptable, RemembersConversations;

13

14    /**

15     * Get the instructions that the agent should follow.

16     */

17    public function instructions(): string

18    {

19        return 'You are a sales coach...';

20    }

21}

<?php

namespace App\Ai\Agents;

use Laravel\Ai\Concerns\RemembersConversations;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Promptable;

class SalesCoach implements Agent, Conversational
{
    use Promptable, RemembersConversations;

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): string
    {
        return 'You are a sales coach...';
    }
}
```

When using the `RemembersConversations` trait, do not manually define a `messages` method in your agent class. If a `messages` method is present, it will take precedence over the trait's implementation and conversation history will not be loaded from the database.

To start a new conversation for a user, call the `forUser` method before prompting:

```
1$response = (new SalesCoach)->forUser($user)->prompt('Hello!');

2

3$conversationId = $response->conversationId;

$response = (new SalesCoach)->forUser($user)->prompt('Hello!');

$conversationId = $response->conversationId;
```

The conversation ID is returned on the response and can be stored for future reference. If you would like to retrieve all of a user's conversations using Eloquent, you may add the `HasConversations` trait to your user model:

```
1<?php

2

3namespace App\Models;

4

5use Illuminate\Foundation\Auth\User as Authenticatable;

6use Laravel\Ai\Concerns\HasConversations;

7

8class User extends Authenticatable

9{

10    use HasConversations;

11}

<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Ai\Concerns\HasConversations;

class User extends Authenticatable
{
    use HasConversations;
}
```

Once the trait has been added to your model, you may retrieve and query the user's conversations via the `conversations` relationship:

```
1$conversations = $user->conversations()

2    ->latest('updated_at')

3    ->paginate(20);

$conversations = $user->conversations()
    ->latest('updated_at')
    ->paginate(20);
```

To continue an existing conversation, use the `continue` method:

```
1$response = (new SalesCoach)

2    ->continue($conversationId, as: $user)

3    ->prompt('Tell me more about that.');

$response = (new SalesCoach)
    ->continue($conversationId, as: $user)
    ->prompt('Tell me more about that.');
```

The `continueOrStart` method may be used to continue the given conversation, or start a new conversation if the given ID is `null`:

```
1$response = (new SalesCoach)

2    ->continueOrStart($conversationId, as: $user)

3    ->prompt('Hello!');

$response = (new SalesCoach)
    ->continueOrStart($conversationId, as: $user)
    ->prompt('Hello!');
```

When using the `RemembersConversations` trait, previous messages are automatically loaded and included in the conversation context when prompting. New messages (both user and assistant) are automatically stored after each interaction. Each response also contains the IDs of the conversation and messages that were stored:

```
1$response->conversationId;

2$response->userMessageId;

3$response->assistantMessageId;

$response->conversationId;
$response->userMessageId;
$response->assistantMessageId;
```

#### [Conversation Participants](#conversation-participants)

Although users are the most common conversation participants, conversations may belong to any Eloquent model. Use the `forParticipant` method to start a conversation for another type of model:

```
1$response = (new SalesCoach)

2    ->forParticipant($team)

3    ->prompt('Review our latest sales results.');

$response = (new SalesCoach)
    ->forParticipant($team)
    ->prompt('Review our latest sales results.');
```

The participant's morph class and primary key are stored with the conversation. Therefore, models of different types that have the same primary key, such as `User` ID `1` and `Team` ID `1`, have separate conversation histories. The `forUser` method is an alias for `forParticipant`.

You may continue the participant's most recent conversation with the agent using the `continueLastConversation` method. Conversations are scoped to the agent, so only conversations that the agent participated in will be continued:

```
1$response = (new SalesCoach)

2    ->continueLastConversation($team)

3    ->prompt('Tell me more about that.');

$response = (new SalesCoach)
    ->continueLastConversation($team)
    ->prompt('Tell me more about that.');
```

When continuing a specific conversation, pass the participant to the `continue` method:

```
1$response = (new SalesCoach)

2    ->continue($conversationId, as: $team)

3    ->prompt('Tell me more about that.');

$response = (new SalesCoach)
    ->continue($conversationId, as: $team)
    ->prompt('Tell me more about that.');
```

The `HasConversations` trait may be added to any Eloquent model that participates in conversations. The resulting `conversations` relationship is a polymorphic relationship scoped to that model's type and primary key. You may also access the participant that owns a conversation through its inverse relationship:

```
1$conversations = $team->conversations;

2

3$participant = $conversation->participant;

$conversations = $team->conversations;

$participant = $conversation->participant;
```

If your application uses multiple participant model types, you should consider defining an [Eloquent morph map](eloquent-relationships.md#custom-polymorphic-types) so that stored participant types are not coupled to your model class names.

The `continue` and `continueOrStart` methods do not verify that the given participant owns the conversation. Your application should authorize access to the conversation before continuing it.

#### [Inspecting Stored Conversations](#inspecting-stored-conversations)

When displaying a conversation to your users, you often need details such as message IDs, timestamps, and tool calls. You may resolve the conversation store from the service container to read the stored messages without querying the AI SDK's tables directly:

```
1use Laravel\Ai\Contracts\ConversationStore;

2

3$store = app(ConversationStore::class);

use Laravel\Ai\Contracts\ConversationStore;

$store = app(ConversationStore::class);
```

Messages are paginated newest first using a cursor and are returned as `StoredMessage` instances, which contain each message's ID, timestamps, usage, metadata, and attachments:

```
1$messages = $store->paginateConversationMessages($conversationId, perPage: 25);

2

3foreach ($messages as $message) {

4    $message->id;

5    $message->role;

6    $message->content;

7    $message->createdAt;

8    $message->usage;

9    $message->status;

10}

$messages = $store->paginateConversationMessages($conversationId, perPage: 25);

foreach ($messages as $message) {
    $message->id;
    $message->role;
    $message->content;
    $message->createdAt;
    $message->usage;
    $message->status;
}
```

Each turn, which consists of a user prompt and the assistant's reply, is stored as a list of steps. A step is a single request to the provider, so a turn in which the model calls tools will contain several steps. Each tool result is recorded on the tool call that produced it. The `toolCalls`, `providerToolCalls`, and `toolResults` methods flatten these steps in order, so you do not need to traverse them yourself:

```
1$message->steps;

2

3$message->toolCalls();

4$message->providerToolCalls();

5$message->toolResults();

$message->steps;

$message->toolCalls();
$message->providerToolCalls();
$message->toolResults();
```

A tool call contains a `result` once it has been executed. Tool calls that contain an `approval_reason` but no `result` are still awaiting a [tool approval](#human-tool-approval).

The `status` property contains a `Laravel\Ai\Enums\MessageStatus` instance. A turn that failed partway through is stored as `Failed` along with the steps it had already completed, so tool calls that ran before the failure remain in the history. When the conversation continues, any tool call without a recorded result is sent to the model marked as interrupted, since Laravel cannot determine whether it ran.

Before continuing a conversation via an ID provided by your application's frontend, you should verify that the conversation was stored for the given participant:

```
1abort_unless($store->conversationBelongsTo(

2    $conversationId, $user->getMorphClass(), $user->getKey()

3), 403);

abort_unless($store->conversationBelongsTo(
    $conversationId, $user->getMorphClass(), $user->getKey()
), 403);
```

If the most recent turn is paused awaiting [tool approval](#human-tool-approval), you may render its pending tool calls after a page reload without resuming the run:

```
1foreach ($store->pendingApprovalsFor($conversationId) as $approval) {

2    // $approval->id, $approval->tool, $approval->arguments, $approval->reason...

3}

foreach ($store->pendingApprovalsFor($conversationId) as $approval) {
    // $approval->id, $approval->tool, $approval->arguments, $approval->reason...
}
```

These methods are defined by the `PaginatesConversations`, `VerifiesConversationOwnership`, and `ResolvesPendingApprovals` contracts. The included database store implements all three, while a custom store may implement only the contracts it needs.

### [Structured Output](#structured-output)

If you would like your agent to return structured output, implement the `HasStructuredOutput` interface, which requires that your agent define a `schema` method:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Ai\Contracts\Agent;

7use Laravel\Ai\Contracts\HasStructuredOutput;

8use Laravel\Ai\Promptable;

9

10class SalesCoach implements Agent, HasStructuredOutput

11{

12    use Promptable;

13

14    // ...

15

16    /**

17     * Get the agent's structured output schema definition.

18     */

19    public function schema(JsonSchema $schema): array

20    {

21        return [

22            'score' => $schema->integer()->required(),

23        ];

24    }

25}

<?php

namespace App\Ai\Agents;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasStructuredOutput;
use Laravel\Ai\Promptable;

class SalesCoach implements Agent, HasStructuredOutput
{
    use Promptable;

    // ...

    /**
     * Get the agent's structured output schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'score' => $schema->integer()->required(),
        ];
    }
}
```

When prompting an agent that returns structured output, you can access the returned `StructuredAgentResponse` like an array:

```
1$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

2

3return $response['score'];

$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

return $response['score'];
```

#### [Nested Objects](#structured-output-nested-objects)

To define nested structured output, use the `object` method with a closure:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Ai\Contracts\Agent;

7use Laravel\Ai\Contracts\HasStructuredOutput;

8use Laravel\Ai\Promptable;

9

10class SalesCoach implements Agent, HasStructuredOutput

11{

12    use Promptable;

13

14    // ...

15

16    /**

17     * Get the agent's structured output schema definition.

18     */

19    public function schema(JsonSchema $schema): array

20    {

21        return [

22            'score' => $schema->integer()->required(),

23            'metadata' => $schema->object(fn ($schema) => [

24                'confidence' => $schema->string()->enum(['low', 'medium', 'high'])->required(),

25                'language' => $schema->string()->required(),

26            ])->required(),

27        ];

28    }

29}

<?php

namespace App\Ai\Agents;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasStructuredOutput;
use Laravel\Ai\Promptable;

class SalesCoach implements Agent, HasStructuredOutput
{
    use Promptable;

    // ...

    /**
     * Get the agent's structured output schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'score' => $schema->integer()->required(),
            'metadata' => $schema->object(fn ($schema) => [
                'confidence' => $schema->string()->enum(['low', 'medium', 'high'])->required(),
                'language' => $schema->string()->required(),
            ])->required(),
        ];
    }
}
```

#### [Arrays of Objects](#structured-output-arrays-of-objects)

If your agent should return a list of structured items, combine the `array` and `object` methods:

```
1public function schema(JsonSchema $schema): array

2{

3    return [

4        'feedback' => $schema->array()

5            ->items(

6                $schema->object(fn ($schema) => [

7                    'comment' => $schema->string()->required(),

8                    'score' => $schema->integer()->required(),

9                ])

10            )

11            ->required(),

12    ];

13}

public function schema(JsonSchema $schema): array
{
    return [
        'feedback' => $schema->array()
            ->items(
                $schema->object(fn ($schema) => [
                    'comment' => $schema->string()->required(),
                    'score' => $schema->integer()->required(),
                ])
            )
            ->required(),
    ];
}
```

If a value may match one of several schemas, use the `anyOf` method:

```
1public function schema(JsonSchema $schema): array

2{

3    return [

4        'content' => $schema->anyOf([

5            $schema->object(fn ($schema) => [

6                'type' => $schema->string()->enum(['article'])->required(),

7                'title' => $schema->string()->required(),

8            ]),

9            $schema->object(fn ($schema) => [

10                'type' => $schema->string()->enum(['image'])->required(),

11                'url' => $schema->string()->required(),

12            ]),

13        ])->required(),

14    ];

15}

public function schema(JsonSchema $schema): array
{
    return [
        'content' => $schema->anyOf([
            $schema->object(fn ($schema) => [
                'type' => $schema->string()->enum(['article'])->required(),
                'title' => $schema->string()->required(),
            ]),
            $schema->object(fn ($schema) => [
                'type' => $schema->string()->enum(['image'])->required(),
                'url' => $schema->string()->required(),
            ]),
        ])->required(),
    ];
}
```

### [Attachments](#attachments)

When prompting, you may also pass attachments with the prompt to allow the model to inspect images and documents:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Files;

3

4$response = (new SalesCoach)->prompt(

5    'Analyze the attached sales transcript...',

6    attachments: [

7        Files\Document::fromStorage('transcript.pdf'), // Attach a document from a filesystem disk...

8        Files\Document::fromPath('/home/laravel/transcript.md'), // Attach a document from a local path...

9        $request->file('transcript'), // Attach an uploaded file...

10    ]

11);

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Files;

$response = (new SalesCoach)->prompt(
    'Analyze the attached sales transcript...',
    attachments: [
        Files\Document::fromStorage('transcript.pdf'), // Attach a document from a filesystem disk...
        Files\Document::fromPath('/home/laravel/transcript.md'), // Attach a document from a local path...
        $request->file('transcript'), // Attach an uploaded file...
    ]
);
```

Likewise, the `Laravel\Ai\Files\Image` class may be used to attach images to a prompt:

```
1use App\Ai\Agents\ImageAnalyzer;

2use Laravel\Ai\Files;

3

4$response = (new ImageAnalyzer)->prompt(

5    'What is in this image?',

6    attachments: [

7        Files\Image::fromStorage('photo.jpg'), // Attach an image from a filesystem disk...

8        Files\Image::fromPath('/home/laravel/photo.jpg'), // Attach an image from a local path...

9        $request->file('photo'), // Attach an uploaded file...

10    ]

11);

use App\Ai\Agents\ImageAnalyzer;
use Laravel\Ai\Files;

$response = (new ImageAnalyzer)->prompt(
    'What is in this image?',
    attachments: [
        Files\Image::fromStorage('photo.jpg'), // Attach an image from a filesystem disk...
        Files\Image::fromPath('/home/laravel/photo.jpg'), // Attach an image from a local path...
        $request->file('photo'), // Attach an uploaded file...
    ]
);
```

### [Streaming](#streaming)

You may stream an agent's response by invoking the `stream` method. The returned `StreamableAgentResponse` may be returned from a route to automatically send a streaming response (SSE) to the client:

```
1use App\Ai\Agents\SalesCoach;

2

3Route::get('/coach', function () {

4    return (new SalesCoach)->stream('Analyze this sales transcript...');

5});

use App\Ai\Agents\SalesCoach;

Route::get('/coach', function () {
    return (new SalesCoach)->stream('Analyze this sales transcript...');
});
```

The `then` method may be used to provide a closure that will be invoked when the entire response has been streamed to the client:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Responses\StreamedAgentResponse;

3

4Route::get('/coach', function () {

5    return (new SalesCoach)

6        ->stream('Analyze this sales transcript...')

7        ->then(function (StreamedAgentResponse $response) {

8            // $response->text, $response->events, $response->usage...

9        });

10});

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Responses\StreamedAgentResponse;

Route::get('/coach', function () {
    return (new SalesCoach)
        ->stream('Analyze this sales transcript...')
        ->then(function (StreamedAgentResponse $response) {
            // $response->text, $response->events, $response->usage...
        });
});
```

Alternatively, you may iterate through the streamed events manually:

```
1$stream = (new SalesCoach)->stream('Analyze this sales transcript...');

2

3foreach ($stream as $event) {

4    // ...

5}

$stream = (new SalesCoach)->stream('Analyze this sales transcript...');

foreach ($stream as $event) {
    // ...
}
```

The response also contains the model's reasoning and any sources it cited. Both are stored with the assistant message when using the `RemembersConversations` trait:

```
1use Laravel\Ai\Responses\StreamedAgentResponse;

2

3(new SalesCoach)

4    ->stream('Analyze this sales transcript...')

5    ->then(function (StreamedAgentResponse $response) {

6        $response->reasoning; // '' unless the model returned reasoning text...

7        $response->meta->citations;

8    });

use Laravel\Ai\Responses\StreamedAgentResponse;

(new SalesCoach)
    ->stream('Analyze this sales transcript...')
    ->then(function (StreamedAgentResponse $response) {
        $response->reasoning; // '' unless the model returned reasoning text...
        $response->meta->citations;
    });
```

Reasoning is also available on responses returned by the `prompt` method.

#### Stream Protocols

By default, streamed responses use the AI SDK's own event format. However, you may use a frontend streaming protocol instead, which allows you to pair your agent with an existing chat interface rather than building your own.

You may stream the events using the [Vercel AI SDK stream protocol](https://ai-sdk.dev/docs/ai-sdk-ui/stream-protocol) by invoking the `usingVercelDataProtocol` method on the streamable response:

```
1use App\Ai\Agents\SalesCoach;

2

3Route::get('/coach', function () {

4    return (new SalesCoach)

5        ->stream('Analyze this sales transcript...')

6        ->usingVercelDataProtocol();

7});

use App\Ai\Agents\SalesCoach;

Route::get('/coach', function () {
    return (new SalesCoach)
        ->stream('Analyze this sales transcript...')
        ->usingVercelDataProtocol();
});
```

You may pass a message ID if your application's frontend assigns its own:

```
1->usingVercelDataProtocol($request->string('messageId'));

->usingVercelDataProtocol($request->string('messageId'));
```

Alternatively, the `usingAgentUserInteractionProtocol` method may be used to stream using the [Agent User Interaction (AG-UI) protocol](https://docs.ag-ui.com):

```
1Route::post('/coach', function (Request $request) {

2    return (new SalesCoach)

3        ->forUser($request->user())

4        ->stream($request->string('prompt'))

5        ->usingAgentUserInteractionProtocol();

6});

Route::post('/coach', function (Request $request) {
    return (new SalesCoach)
        ->forUser($request->user())
        ->stream($request->string('prompt'))
        ->usingAgentUserInteractionProtocol();
});
```

The `threadId` and `runId` arguments are optional and default to the conversation ID and the invocation ID:

```
1->usingAgentUserInteractionProtocol(

2    threadId: $request->input('threadId'),

3    runId: $request->input('runId'),

4);

->usingAgentUserInteractionProtocol(
    threadId: $request->input('threadId'),
    runId: $request->input('runId'),
);
```

To use a protocol that the AI SDK does not implement, you may pass your own `Laravel\Ai\Streaming\Protocols\StreamProtocol` implementation to the `usingProtocol` method:

```
1use App\Ai\Protocols\CustomProtocol;

2

3return (new SalesCoach)

4    ->stream('Analyze this sales transcript...')

5    ->usingProtocol(new CustomProtocol);

use App\Ai\Protocols\CustomProtocol;

return (new SalesCoach)
    ->stream('Analyze this sales transcript...')
    ->usingProtocol(new CustomProtocol);
```

#### Frontend Integration

Chat interfaces built with libraries such as Vercel's `useChat` or CopilotKit already render messages, tool calls, and approval prompts, so your application only needs to handle the requests they send. Each request contains the conversation history, the newest user message, and any tool approval responses.

The `Vercel::chat` and `AgentUserInteraction::chat` methods convert such a request into an object that may be passed directly to an agent's `stream` method:

```
1use Laravel\Ai\Vercel\Vercel;

2

3Route::post('/chat', function (Request $request) {

4    $chat = Vercel::chat($request);

5

6    return (new SupportAgent)

7        ->withMessages($chat->history())

8        ->stream($chat)

9        ->usingProtocol($chat->protocol());

10});

use Laravel\Ai\Vercel\Vercel;

Route::post('/chat', function (Request $request) {
    $chat = Vercel::chat($request);

    return (new SupportAgent)
        ->withMessages($chat->history())
        ->stream($chat)
        ->usingProtocol($chat->protocol());
});
```

If the request contains [approval decisions](#human-tool-approval), the agent will resume using those decisions. Otherwise, the agent is prompted with the request's newest user message and attachments. The `protocol` method returns the protocol used by the client.

Agents that implement the `Conversational` interface load their own history, so the `withMessages` method may be omitted.

The `AgentUserInteraction::chat` method provides the same API for AG-UI clients, in addition to the request's thread and run IDs:

```
1use Laravel\Ai\AgentUserInteraction\AgentUserInteraction;

2

3$chat = AgentUserInteraction::chat($request);

4

5$chat->threadId();

6$chat->runId();

use Laravel\Ai\AgentUserInteraction\AgentUserInteraction;

$chat = AgentUserInteraction::chat($request);

$chat->threadId();
$chat->runId();
```

You may also convert stored messages back into the format a client expects, allowing the client to display a previous conversation, such as after a page reload:

```
1$messages = $conversation->messages()->oldest()->get();

2

3return ['messages' => Vercel::toUiMessages($messages)];

$messages = $conversation->messages()->oldest()->get();

return ['messages' => Vercel::toUiMessages($messages)];
```

The `AgentUserInteraction::toClientState` method performs the same conversion for AG-UI clients, in addition to returning any pending approval interrupts:

```
1return AgentUserInteraction::toClientState($messages);

return AgentUserInteraction::toClientState($messages);
```

### [Broadcasting](#broadcasting)

You may broadcast streamed events in a few different ways. First, you can simply invoke the `broadcast` or `broadcastNow` method on a streamed event:

```
1use App\Ai\Agents\SalesCoach;

2use Illuminate\Broadcasting\Channel;

3

4$stream = (new SalesCoach)->stream('Analyze this sales transcript...');

5

6foreach ($stream as $event) {

7    $event->broadcast(new Channel('channel-name'));

8}

use App\Ai\Agents\SalesCoach;
use Illuminate\Broadcasting\Channel;

$stream = (new SalesCoach)->stream('Analyze this sales transcript...');

foreach ($stream as $event) {
    $event->broadcast(new Channel('channel-name'));
}
```

Or, you can invoke an agent's `broadcastOnQueue` method to queue the agent operation and broadcast the streamed events as they are available:

```
1(new SalesCoach)->broadcastOnQueue(

2    'Analyze this sales transcript...',

3    new Channel('channel-name'),

4);

(new SalesCoach)->broadcastOnQueue(
    'Analyze this sales transcript...',
    new Channel('channel-name'),
);
```

#### [Skipping Oversized Events](#skipping-oversized-events)

Some broadcasting platforms limit WebSocket messages to around 10KB. Data-heavy stream events, like large tool results, can exceed this limit and cause broadcasting to fail. You may exclude specific event types from broadcasting using the `WithoutBroadcasting` attribute:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Laravel\Ai\Attributes\WithoutBroadcasting;

6use Laravel\Ai\Contracts\Agent;

7use Laravel\Ai\Contracts\HasTools;

8use Laravel\Ai\Promptable;

9use Laravel\Ai\Streaming\Events\ToolCall;

10use Laravel\Ai\Streaming\Events\ToolResult;

11

12#[WithoutBroadcasting(ToolCall::class, ToolResult::class)]

13class SearchAgent implements Agent, HasTools

14{

15    use Promptable;

16

17    // ...

18}

<?php

namespace App\Ai\Agents;

use Laravel\Ai\Attributes\WithoutBroadcasting;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;
use Laravel\Ai\Streaming\Events\ToolCall;
use Laravel\Ai\Streaming\Events\ToolResult;

#[WithoutBroadcasting(ToolCall::class, ToolResult::class)]
class SearchAgent implements Agent, HasTools
{
    use Promptable;

    // ...
}
```

The excluded events are never broadcast, but they are still persisted to the `agent_conversation_messages` table, so your frontend can load the full tool data after the stream completes. This works for both queued (`broadcastOnQueue`) and synchronous (`broadcast` / `broadcastNow`) broadcasting.

### [Queueing](#queueing)

Using an agent's `queue` method, you may prompt the agent, but allow it to process the response in the background, keeping your application feeling fast and responsive. The `then` and `catch` methods may be used to register closures that will be invoked when a response is available or if an exception occurs:

```
1use Illuminate\Http\Request;

2use Laravel\Ai\Responses\AgentResponse;

3use Throwable;

4

5Route::post('/coach', function (Request $request) {

6    (new SalesCoach)

7        ->queue($request->input('transcript'))

8        ->then(function (AgentResponse $response) {

9            // ...

10        })

11        ->catch(function (Throwable $e) {

12            // ...

13        });

14

15    return back();

16});

use Illuminate\Http\Request;
use Laravel\Ai\Responses\AgentResponse;
use Throwable;

Route::post('/coach', function (Request $request) {
    (new SalesCoach)
        ->queue($request->input('transcript'))
        ->then(function (AgentResponse $response) {
            // ...
        })
        ->catch(function (Throwable $e) {
            // ...
        });

    return back();
});
```

### [Tools](#tools)

Tools may be used to give agents additional functionality that they can utilize while responding to prompts. Tools can be created using the `make:tool` Artisan command:

```
1php artisan make:tool RandomNumberGenerator

php artisan make:tool RandomNumberGenerator
```

The generated tool will be placed in your application's `app/Ai/Tools` directory. Each tool contains a `handle` method that will be invoked by the agent when it needs to utilize the tool:

```
1<?php

2

3namespace App\Ai\Tools;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Laravel\Ai\Contracts\Tool;

7use Laravel\Ai\Tools\Request;

8use Stringable;

9

10class RandomNumberGenerator implements Tool

11{

12    /**

13     * Get the description of the tool's purpose.

14     */

15    public function description(): Stringable|string

16    {

17        return 'This tool may be used to generate cryptographically secure random numbers.';

18    }

19

20    /**

21     * Execute the tool.

22     */

23    public function handle(Request $request): Stringable|string

24    {

25        return (string) random_int($request['min'], $request['max']);

26    }

27

28    /**

29     * Get the tool's schema definition.

30     */

31    public function schema(JsonSchema $schema): array

32    {

33        return [

34            'min' => $schema->integer()->min(0)->required(),

35            'max' => $schema->integer()->required(),

36        ];

37    }

38}

<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Stringable;

class RandomNumberGenerator implements Tool
{
    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'This tool may be used to generate cryptographically secure random numbers.';
    }

    /**
     * Execute the tool.
     */
    public function handle(Request $request): Stringable|string
    {
        return (string) random_int($request['min'], $request['max']);
    }

    /**
     * Get the tool's schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'min' => $schema->integer()->min(0)->required(),
            'max' => $schema->integer()->required(),
        ];
    }
}
```

Once you have defined your tool, you may return it from the `tools` method of any of your agents:

```
1use App\Ai\Tools\RandomNumberGenerator;

2

3/**

4 * Get the tools available to the agent.

5 *

6 * @return Tool[]

7 */

8public function tools(): iterable

9{

10    return [

11        new RandomNumberGenerator,

12    ];

13}

use App\Ai\Tools\RandomNumberGenerator;

/**
 * Get the tools available to the agent.
 *
 * @return Tool[]
 */
public function tools(): iterable
{
    return [
        new RandomNumberGenerator,
    ];
}
```

#### [Runtime Tool Overrides](#runtime-tool-overrides)

The `withTools` method may be used to replace the tools declared by an agent instance. This is useful for per-tenant or feature-flagged tool sets:

```
1$response = (new SupportAgent)

2    ->withTools([new LookupOrder])

3    ->prompt('Where is order 12345?');

$response = (new SupportAgent)
    ->withTools([new LookupOrder])
    ->prompt('Where is order 12345?');
```

You may also pass a closure, which receives the agent's declared tools, allowing you to append to or filter them:

```
1$response = (new SupportAgent)

2    ->withTools(fn (array $tools) => [...$tools, new LookupOrder])

3    ->prompt('Where is order 12345?');

$response = (new SupportAgent)
    ->withTools(fn (array $tools) => [...$tools, new LookupOrder])
    ->prompt('Where is order 12345?');
```

#### [Validating Tool Arguments](#validating-tool-arguments)

Although your tool's schema constrains the arguments a model may provide, you may validate the incoming arguments using the request's `validate` method:

```
1public function handle(Request $request): Stringable|string

2{

3    $validated = $request->validate([

4        'city' => 'required|string',

5        'days' => 'required|integer|max:7',

6    ]);

7

8    return $this->forecast($validated['city'], $validated['days']);

9}

public function handle(Request $request): Stringable|string
{
    $validated = $request->validate([
        'city' => 'required|string',
        'days' => 'required|integer|max:7',
    ]);

    return $this->forecast($validated['city'], $validated['days']);
}
```

When validation fails, the validation messages are returned to the model as the tool's result, allowing it to correct the arguments and call the tool again.

#### [Repairing Tool Calls](#repairing-tool-calls)

Use the `RepairToolCalls` attribute to let an agent recover when a model calls an unknown local tool. Laravel returns the failed call to the model with the names of the available local tools, allowing it to correct the call:

```
1use Laravel\Ai\Attributes\RepairToolCalls;

2use Laravel\Ai\Contracts\Agent;

3use Laravel\Ai\Contracts\HasTools;

4use Laravel\Ai\Promptable;

5

6#[RepairToolCalls]

7class SupportAgent implements Agent, HasTools

8{

9    use Promptable;

10

11    // ...

12}

use Laravel\Ai\Attributes\RepairToolCalls;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;

#[RepairToolCalls]
class SupportAgent implements Agent, HasTools
{
    use Promptable;

    // ...
}
```

When Laravel derives the maximum number of steps automatically, this attribute adds one step for the repaired call. Explicit `MaxSteps` limits are unchanged.

#### [Similarity Search](#similarity-search)

The `SimilaritySearch` tool allows agents to search for documents similar to a given query using vector embeddings stored in your database. This is useful for retrieval-augmented generation (RAG) when you want to give agents access to search your application's data.

The simplest way to create a similarity search tool is using the `usingModel` method with an Eloquent model that has vector embeddings:

```
1use App\Models\Document;

2use Laravel\Ai\Tools\SimilaritySearch;

3

4public function tools(): iterable

5{

6    return [

7        SimilaritySearch::usingModel(Document::class, 'embedding'),

8    ];

9}

use App\Models\Document;
use Laravel\Ai\Tools\SimilaritySearch;

public function tools(): iterable
{
    return [
        SimilaritySearch::usingModel(Document::class, 'embedding'),
    ];
}
```

The first argument is the Eloquent model class, and the second argument is the column containing the vector embeddings.

You may also provide a minimum similarity threshold between `0.0` and `1.0` and a closure to customize the query:

```
1SimilaritySearch::usingModel(

2    model: Document::class,

3    column: 'embedding',

4    minSimilarity: 0.7,

5    limit: 10,

6    query: fn ($query) => $query->where('published', true),

7),

SimilaritySearch::usingModel(
    model: Document::class,
    column: 'embedding',
    minSimilarity: 0.7,
    limit: 10,
    query: fn ($query) => $query->where('published', true),
),
```

For more control, you may create a similarity search tool with a custom closure that returns the search results:

```
1use App\Models\Document;

2use Laravel\Ai\Tools\SimilaritySearch;

3

4public function tools(): iterable

5{

6    return [

7        new SimilaritySearch(using: function (string $query) {

8            return Document::query()

9                ->where('user_id', $this->user->id)

10                ->whereVectorSimilarTo('embedding', $query)

11                ->limit(10)

12                ->get();

13        }),

14    ];

15}

use App\Models\Document;
use Laravel\Ai\Tools\SimilaritySearch;

public function tools(): iterable
{
    return [
        new SimilaritySearch(using: function (string $query) {
            return Document::query()
                ->where('user_id', $this->user->id)
                ->whereVectorSimilarTo('embedding', $query)
                ->limit(10)
                ->get();
        }),
    ];
}
```

You may customize the tool's description using the `withDescription` method:

```
1SimilaritySearch::usingModel(Document::class, 'embedding')

2    ->withDescription('Search the knowledge base for relevant articles.'),

SimilaritySearch::usingModel(Document::class, 'embedding')
    ->withDescription('Search the knowledge base for relevant articles.'),
```

### [Deferred Tool Loading](#deferred-tool-loading)

By default, every tool an agent exposes is sent to the provider with each request. When an agent provides a large number of tools, this consumes tokens and may reduce the accuracy of the model's tool selection. Using the `ToolSearch` provider tool with OpenAI, Azure, or Anthropic, you may defer tool definitions so that the provider only loads them when they are needed:

```
1use App\Ai\Tools\RefundOrder;

2use App\Ai\Tools\SearchInvoices;

3use App\Ai\Tools\Weather;

4use Laravel\Ai\Providers\Tools\ToolSearch;

5

6public function tools(): iterable

7{

8    return [

9        new Weather,

10        new ToolSearch(tools: [

11            new SearchInvoices,

12            new RefundOrder,

13        ]),

14    ];

15}

use App\Ai\Tools\RefundOrder;
use App\Ai\Tools\SearchInvoices;
use App\Ai\Tools\Weather;
use Laravel\Ai\Providers\Tools\ToolSearch;

public function tools(): iterable
{
    return [
        new Weather,
        new ToolSearch(tools: [
            new SearchInvoices,
            new RefundOrder,
        ]),
    ];
}
```

The wrapped tools do not require any modification. The provider will search for and load them when they are relevant to the prompt, after which the agent may call them like any other tool.

When using Anthropic, the `strategy` argument may be used to determine how the provider should search for deferred tools. The supported strategies are `regex` (default) and `bm25`:

```
1new ToolSearch(tools: [new SearchInvoices], strategy: 'bm25'),

new ToolSearch(tools: [new SearchInvoices], strategy: 'bm25'),
```

When using Anthropic, additional provider-specific options may be passed to the search tool using the `withProviderOptions` method:

```
1(new ToolSearch(tools: [new SearchInvoices]))

2    ->withProviderOptions(['cache_control' => ['type' => 'ephemeral']]),

(new ToolSearch(tools: [new SearchInvoices]))
    ->withProviderOptions(['cache_control' => ['type' => 'ephemeral']]),
```

Providers that do not support tool search will throw an exception rather than silently discarding the deferred tools. In addition, Anthropic requires that at least one tool is provided outside of the `ToolSearch` wrapper.

### [File Storage Tools](#file-storage-tools)

The `FileStorage` tool factory allows you to give agents access to a Laravel [filesystem disk](filesystem.md). The `all` method returns tools that allow the agent to list, read, inspect, generate URLs for, write, delete, copy, and move files on the given disk:

```
1use Laravel\Ai\Tools\FileStorage;

2

3public function tools(): iterable

4{

5    return FileStorage::all('local');

6}

use Laravel\Ai\Tools\FileStorage;

public function tools(): iterable
{
    return FileStorage::all('local');
}
```

If your agent should only be able to inspect files, use the `readOnly` method:

```
1return FileStorage::readOnly('local');

return FileStorage::readOnly('local');
```

These methods return an `Illuminate\Support\Collection`, allowing you to further filter the tools that are provided to the agent:

```
1use Laravel\Ai\Tools\Filesystem\DeleteFile;

2

3return FileStorage::all('s3')

4    ->reject(fn ($tool) => $tool instanceof DeleteFile);

use Laravel\Ai\Tools\Filesystem\DeleteFile;

return FileStorage::all('s3')
    ->reject(fn ($tool) => $tool instanceof DeleteFile);
```

### [MCP Tools](#mcp-tools)

If your application uses [Laravel MCP](mcp.md), you may give your agents tools exposed by [Model Context Protocol](https://modelcontextprotocol.io) servers. Using the [Laravel MCP client](mcp.md#client), you may connect to a remote or local MCP server and pass its tools directly to your agent.

MCP tools require the [Laravel MCP](mcp.md) package to be installed in your application.

Because an MCP client's `tools` method returns a collection, spread it into your agent's `tools` array using the `...` operator:

```
1use App\Ai\Tools\RandomNumberGenerator;

2use Laravel\Mcp\Client;

3

4/**

5 * Get the tools available to the agent.

6 *

7 * @return Tool[]

8 */

9public function tools(): iterable

10{

11    return [

12        ...Client::web('https://mcp.example.com')

13            ->withToken($token)

14            ->tools(),

15

16        new RandomNumberGenerator,

17    ];

18}

use App\Ai\Tools\RandomNumberGenerator;
use Laravel\Mcp\Client;

/**
 * Get the tools available to the agent.
 *
 * @return Tool[]
 */
public function tools(): iterable
{
    return [
        ...Client::web('https://mcp.example.com')
            ->withToken($token)
            ->tools(),

        new RandomNumberGenerator,
    ];
}
```

The AI SDK automatically wraps each MCP tool so the agent can call it like any other tool. You may also use a [named MCP client](mcp.md#named-clients):

```
1use Laravel\Mcp\Facades\Mcp;

2

3public function tools(): iterable

4{

5    return [

6        ...Mcp::client('github')->tools(),

7    ];

8}

use Laravel\Mcp\Facades\Mcp;

public function tools(): iterable
{
    return [
        ...Mcp::client('github')->tools(),
    ];
}
```

Or connect to a [local MCP server](mcp.md#client-connecting):

```
1use Laravel\Mcp\Client;

2

3public function tools(): iterable

4{

5    return [

6        ...Client::local('php', ['artisan', 'mcp:start'])->tools(),

7    ];

8}

use Laravel\Mcp\Client;

public function tools(): iterable
{
    return [
        ...Client::local('php', ['artisan', 'mcp:start'])->tools(),
    ];
}
```

For more information on creating and authenticating MCP clients, including bearer tokens and OAuth, consult the [MCP client documentation](mcp.md#client).

### [Skills](#skills)

[Agent Skills](https://agentskills.io) are folders of instructions and supporting files that teach an agent how to perform a specific task. Because skills follow an open standard, the same skill may be shared between your application's agents and the coding agents you use to build your application.

Each skill is a directory within your application's `resources/skills` directory that contains a `SKILL.md` file. Any other files in the directory, such as reference documents, are bundled with the skill:

```
1resources/skills/

2└── refund-policy/

3    ├── SKILL.md

4    └── references/EDGE-CASES.md

resources/skills/
└── refund-policy/
    ├── SKILL.md
    └── references/EDGE-CASES.md
```

The `SKILL.md` file begins with YAML frontmatter containing the skill's `name` and a `description` of when the skill should be used, followed by the skill's instructions:

```
1---

2name: refund-policy

3description: Use when a customer asks for a refund or disputes a charge.

4---

5

6# Refund Policy

7

8Customers may request a full refund within 30 days of purchase...

---
name: refund-policy
description: Use when a customer asks for a refund or disputes a charge.
---

# Refund Policy

Customers may request a full refund within 30 days of purchase...
```

If the `name` is omitted, the name of the skill's directory will be used. Skills without a `description` are ignored.

To give an agent access to your skills, implement the `HasSkills` interface and return your skill sources from the `skills` method:

```
1use Laravel\Ai\Contracts\HasSkills;

2use Laravel\Ai\Skills\Skill;

3

4class SupportAgent implements Agent, HasSkills

5{

6    use Promptable;

7

8    public function skills(): iterable

9    {

10        return [

11            resource_path('skills'),

12            base_path('.agents/skills'),

13            new Skill('house-style', 'Use when you write copy for a customer.', view('skills.house-style')),

14            fn () => $this->user->team->skills->map(

15                fn ($skill) => new Skill($skill->name, $skill->description, $skill->instructions)

16            ),

17        ];

18    }

19}

use Laravel\Ai\Contracts\HasSkills;
use Laravel\Ai\Skills\Skill;

class SupportAgent implements Agent, HasSkills
{
    use Promptable;

    public function skills(): iterable
    {
        return [
            resource_path('skills'),
            base_path('.agents/skills'),
            new Skill('house-style', 'Use when you write copy for a customer.', view('skills.house-style')),
            fn () => $this->user->team->skills->map(
                fn ($skill) => new Skill($skill->name, $skill->description, $skill->instructions)
            ),
        ];
    }
}
```

Sources may be directories, `Skill` instances, or closures returning skills, which are only invoked once the agent needs them. When two skills share a name, the source listed first takes precedence.

The agent receives a `LoadSkill` tool that lists each skill's name and description, loading a skill's full instructions and bundled text files only when a prompt calls for it. Binary files and files larger than 256 KB are not returned.

### [Provider Tools](#provider-tools)

Provider tools are special tools implemented natively by AI providers, offering capabilities like web searching, URL fetching, and file searching. Unlike regular tools, provider tools are executed by the provider itself rather than your application.

Provider tools can be returned by your agent's `tools` method.

#### [Web Search](#web-search)

The `WebSearch` provider tool allows agents to search the web for real-time information. This is useful for answering questions about current events, recent data, or topics that may have changed since the model's training cutoff.

**Supported providers:** Anthropic, OpenAI, Azure, Gemini, xAI, Groq, OpenRouter

```
1use Laravel\Ai\Providers\Tools\WebSearch;

2

3public function tools(): iterable

4{

5    return [

6        new WebSearch,

7    ];

8}

use Laravel\Ai\Providers\Tools\WebSearch;

public function tools(): iterable
{
    return [
        new WebSearch,
    ];
}
```

You may configure the web search tool to limit the number of searches or restrict results to specific domains:

```
1(new WebSearch)->max(5)->allow(['laravel.com', 'php.net']),

(new WebSearch)->max(5)->allow(['laravel.com', 'php.net']),
```

To refine search results based on user location, use the `location` method:

```
1(new WebSearch)->location(

2    city: 'New York',

3    region: 'NY',

4    country: 'US'

5);

(new WebSearch)->location(
    city: 'New York',
    region: 'NY',
    country: 'US'
);
```

Groq only supports web search on its GPT-OSS models, and ignores the `max`, `allow`, and `location` methods.

#### [Web Fetch](#web-fetch)

The `WebFetch` provider tool allows agents to fetch and read the contents of web pages. This is useful when you need the agent to analyze specific URLs or retrieve detailed information from known web pages.

**Supported providers:** Anthropic, Gemini, OpenRouter

```
1use Laravel\Ai\Providers\Tools\WebFetch;

2

3public function tools(): iterable

4{

5    return [

6        new WebFetch,

7    ];

8}

use Laravel\Ai\Providers\Tools\WebFetch;

public function tools(): iterable
{
    return [
        new WebFetch,
    ];
}
```

You may configure the web fetch tool to limit the number of fetches or restrict to specific domains:

```
1(new WebFetch)->max(3)->allow(['docs.laravel.com']),

(new WebFetch)->max(3)->allow(['docs.laravel.com']),
```

#### [File Search](#file-search)

The `FileSearch` provider tool allows agents to search through [files](#files) stored in [vector stores](#vector-stores). This enables retrieval-augmented generation (RAG) by allowing the agent to search your uploaded documents for relevant information.

**Supported providers:** OpenAI, Azure, Gemini, xAI

```
1use Laravel\Ai\Providers\Tools\FileSearch;

2

3public function tools(): iterable

4{

5    return [

6        new FileSearch(stores: ['store_id']),

7    ];

8}

use Laravel\Ai\Providers\Tools\FileSearch;

public function tools(): iterable
{
    return [
        new FileSearch(stores: ['store_id']),
    ];
}
```

You may provide multiple vector store IDs to search across multiple stores:

```
1new FileSearch(stores: ['store_1', 'store_2']);

new FileSearch(stores: ['store_1', 'store_2']);
```

If your files have [metadata](#adding-files-to-stores), you may filter the search results by providing a `where` argument. For simple equality filters, pass an array:

```
1new FileSearch(stores: ['store_id'], where: [

2    'author' => 'Taylor Otwell',

3    'year' => 2026,

4]);

new FileSearch(stores: ['store_id'], where: [
    'author' => 'Taylor Otwell',
    'year' => 2026,
]);
```

For more complex filters, you may pass a closure that receives a `FileSearchQuery` instance:

```
1use Laravel\Ai\Providers\Tools\FileSearchQuery;

2

3new FileSearch(stores: ['store_id'], where: fn (FileSearchQuery $query) =>

4    $query->where('author', 'Taylor Otwell')

5        ->whereNot('status', 'draft')

6        ->whereIn('category', ['news', 'updates'])

7);

use Laravel\Ai\Providers\Tools\FileSearchQuery;

new FileSearch(stores: ['store_id'], where: fn (FileSearchQuery $query) =>
    $query->where('author', 'Taylor Otwell')
        ->whereNot('status', 'draft')
        ->whereIn('category', ['news', 'updates'])
);
```

#### [Code Execution](#code-execution)

The `CodeExecution` provider tool allows agents to run code in a sandbox hosted by the AI provider. This is useful for performing calculations and analyzing data.

**Supported providers:** Anthropic, OpenAI, Azure, Gemini, xAI, Groq

```
1use Laravel\Ai\Providers\Tools\CodeExecution;

2

3public function tools(): iterable

4{

5    return [new CodeExecution];

6}

use Laravel\Ai\Providers\Tools\CodeExecution;

public function tools(): iterable
{
    return [new CodeExecution];
}
```

When using OpenAI or Azure, you may make [stored files](#files) available to the sandbox via provider options:

```
1(new CodeExecution)->withProviderOptions([

2    'container' => ['type' => 'auto', 'file_ids' => ['file_123']],

3]);

(new CodeExecution)->withProviderOptions([
    'container' => ['type' => 'auto', 'file_ids' => ['file_123']],
]);
```

Groq only supports code execution on its GPT-OSS models.

### [Sub-Agents](#sub-agents)

Agents may also be returned from another agent's `tools` method. When an agent is returned as a tool, the parent agent may delegate a specific task to the sub-agent and use the sub-agent's response while answering the original prompt. This is useful when a general-purpose agent needs access to specialized agents with their own instructions, tools, model configuration, or provider preferences.

For example, a customer support agent could delegate refund eligibility questions to a dedicated refunds agent:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Laravel\Ai\Contracts\Agent;

6use Laravel\Ai\Contracts\HasTools;

7use Laravel\Ai\Promptable;

8

9class CustomerSupportAgent implements Agent, HasTools

10{

11    use Promptable;

12

13    /**

14     * Get the instructions that the agent should follow.

15     */

16    public function instructions(): string

17    {

18        return 'You help customers with account, order, and billing questions. Delegate refund policy questions to the refunds specialist.';

19    }

20

21    /**

22     * Get the tools available to the agent.

23     *

24     * @return Tool[]

25     */

26    public function tools(): iterable

27    {

28        return [

29            new RefundsAgent,

30        ];

31    }

32}

<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;

class CustomerSupportAgent implements Agent, HasTools
{
    use Promptable;

    /**
     * Get the instructions that the agent should follow.
     */
    public function instructions(): string
    {
        return 'You help customers with account, order, and billing questions. Delegate refund policy questions to the refunds specialist.';
    }

    /**
     * Get the tools available to the agent.
     *
     * @return Tool[]
     */
    public function tools(): iterable
    {
        return [
            new RefundsAgent,
        ];
    }
}
```

To customize how the sub-agent is exposed to the parent agent, implement the `CanActAsTool` interface on the sub-agent and define a tool-facing name and description:

```
1use Laravel\Ai\Attributes\Provider;

2use Laravel\Ai\Contracts\CanActAsTool;

3use Laravel\Ai\Enums\Lab;

4

5#[Provider(Lab::Anthropic)]

6class RefundsAgent implements Agent, CanActAsTool, HasTools

7{

8    /**

9     * Get the agent's tool name.

10     */

11    public function name(): string

12    {

13        return 'refunds_specialist';

14    }

15

16    /**

17     * Get the agent's tool description.

18     */

19    public function description(): string

20    {

21        return 'Determine whether an order is eligible for a refund and explain the next step.';

22    }

23

24    // ...

25}

use Laravel\Ai\Attributes\Provider;
use Laravel\Ai\Contracts\CanActAsTool;
use Laravel\Ai\Enums\Lab;

#[Provider(Lab::Anthropic)]
class RefundsAgent implements Agent, CanActAsTool, HasTools
{
    /**
     * Get the agent's tool name.
     */
    public function name(): string
    {
        return 'refunds_specialist';
    }

    /**
     * Get the agent's tool description.
     */
    public function description(): string
    {
        return 'Determine whether an order is eligible for a refund and explain the next step.';
    }

    // ...
}
```

If a sub-agent does not implement `CanActAsTool`, Laravel will use the agent's class basename as the tool name and a generic description that asks the parent agent to pass a clear, self-contained task description. Each sub-agent invocation runs in isolation and does not receive the parent agent's conversation history.

Sub-agents do not currently support tools that require [human approval](#human-tool-approval). If a sub-agent's tool requires approval, the sub-agent pauses. However, the parent agent receives a normal tool result and continues its run without notifying your application of the pending approval. Register tools that require approval on the top-level agent.

When the parent agent is [streaming](#streaming), its sub-agents stream as well, unless they produce [structured output](#structured-output). For streaming sub-agents, the parent agent emits preliminary `ToolResult` events containing the text the sub-agent has produced so far. The tool call's final result follows these events, so you may skip preliminary events when iterating events manually:

```
1use Laravel\Ai\Streaming\Events\ToolResult;

2

3foreach ($stream as $event) {

4    if ($event instanceof ToolResult && $event->preliminary) {

5        continue;

6    }

7

8    // ...

9}

use Laravel\Ai\Streaming\Events\ToolResult;

foreach ($stream as $event) {
    if ($event instanceof ToolResult && $event->preliminary) {
        continue;
    }

    // ...
}
```

Response values such as `text`, `usage`, and `toolResults` ignore preliminary events. The [Vercel protocol](#stream-protocols) renders them as native streaming tool output, so `useChat` displays the progress without any custom code, while the AG-UI protocol reports them as activity snapshots. The completed response's text, reasoning, citations, and usage include those of the sub-agent.

### [Middleware](#middleware)

Agents support middleware, allowing you to intercept and modify each generation step before it is sent to the provider. Middleware is invoked once per step, so a run that takes three steps will invoke it three times. Middleware can be created using the `make:agent-middleware` Artisan command:

```
1php artisan make:agent-middleware LogPrompts

php artisan make:agent-middleware LogPrompts
```

The generated middleware will be placed in your application's `app/Ai/Middleware` directory. To add middleware to an agent, implement the `HasMiddleware` interface and define a `middleware` method that returns an array of middleware classes:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use App\Ai\Middleware\LogPrompts;

6use Laravel\Ai\Contracts\Agent;

7use Laravel\Ai\Contracts\HasMiddleware;

8use Laravel\Ai\Promptable;

9

10class SalesCoach implements Agent, HasMiddleware

11{

12    use Promptable;

13

14    // ...

15

16    /**

17     * Get the agent's middleware.

18     */

19    public function middleware(): array

20    {

21        return [

22            new LogPrompts,

23        ];

24    }

25}

<?php

namespace App\Ai\Agents;

use App\Ai\Middleware\LogPrompts;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasMiddleware;
use Laravel\Ai\Promptable;

class SalesCoach implements Agent, HasMiddleware
{
    use Promptable;

    // ...

    /**
     * Get the agent's middleware.
     */
    public function middleware(): array
    {
        return [
            new LogPrompts,
        ];
    }
}
```

Each middleware class should define a `handle` method that receives a `PendingStep` and a `Closure` that passes the step to the next middleware:

```
1<?php

2

3namespace App\Ai\Middleware;

4

5use Closure;

6use Illuminate\Support\Facades\Log;

7use Laravel\Ai\PendingStep;

8

9class LogPrompts

10{

11    /**

12     * Handle the pending generation step.

13     */

14    public function handle(PendingStep $step, Closure $next)

15    {

16        Log::info('Prompting agent', ['model' => $step->model]);

17

18        return $next($step);

19    }

20}

<?php

namespace App\Ai\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Laravel\Ai\PendingStep;

class LogPrompts
{
    /**
     * Handle the pending generation step.
     */
    public function handle(PendingStep $step, Closure $next)
    {
        Log::info('Prompting agent', ['model' => $step->model]);

        return $next($step);
    }
}
```

In addition to the `provider`, `model`, `instructions`, `messages`, and `tools` that are about to be sent, the step exposes the steps that have already completed, their combined usage, and the progress of the run:

```
1$step->steps;

2$step->usage;

3

4$step->number;

5$step->isFirstStep();

6$step->isFinalStep;

$step->steps;
$step->usage;

$step->number;
$step->isFirstStep();
$step->isFinalStep;
```

The `withModel`, `withInstructions`, `withMessages`, `withTools`, `onlyTools`, `withoutTools`, `withToolChoice`, `withMaxTokens`, and `withProviderOptions` methods each return a copy of the step. For example, you may remove an expensive tool once the agent has used it:

```
1public function handle(PendingStep $step, Closure $next)

2{

3    if (! $step->isFirstStep()) {

4        $step = $step->withoutTools('SearchDocumentation');

5    }

6

7    return $next($step);

8}

public function handle(PendingStep $step, Closure $next)
{
    if (! $step->isFirstStep()) {
        $step = $step->withoutTools('SearchDocumentation');
    }

    return $next($step);
}
```

Or, you may keep a long tool calling loop within the context window by summarizing the middle of the conversation:

```
1use App\Ai\Agents\Summarizer;

2use Laravel\Ai\Messages\UserMessage;

3

4public function handle(PendingStep $step, Closure $next)

5{

6    if (count($step->messages) > 40) {

7        $summary = (new Summarizer)->prompt(

8            collect(array_slice($step->messages, 1, -10))->map->content->implode("\n"),

9        )->text;

10

11        $step = $step->withMessages([

12            $step->messages[0],

13            new UserMessage("Summary of the conversation so far: {$summary}"),

14            ...array_slice($step->messages, -10),

15        ]);

16    }

17

18    return $next($step);

19}

use App\Ai\Agents\Summarizer;
use Laravel\Ai\Messages\UserMessage;

public function handle(PendingStep $step, Closure $next)
{
    if (count($step->messages) > 40) {
        $summary = (new Summarizer)->prompt(
            collect(array_slice($step->messages, 1, -10))->map->content->implode("\n"),
        )->text;

        $step = $step->withMessages([
            $step->messages[0],
            new UserMessage("Summary of the conversation so far: {$summary}"),
            ...array_slice($step->messages, -10),
        ]);
    }

    return $next($step);
}
```

Messages passed to the `withMessages` method only change what is sent for the current step. Later steps and the stored conversation continue to use the full, unsummarized history.

You may use the `then` method to execute code once the model has answered the step, before its tool calls are executed. This works for both synchronous and streaming responses:

```
1use Laravel\Ai\Gateway\StepResponse;

2

3public function handle(PendingStep $step, Closure $next)

4{

5    return $next($step)->then(function (StepResponse $response) {

6        Log::info('Agent responded', ['text' => $response->text]);

7    });

8}

use Laravel\Ai\Gateway\StepResponse;

public function handle(PendingStep $step, Closure $next)
{
    return $next($step)->then(function (StepResponse $response) {
        Log::info('Agent responded', ['text' => $response->text]);
    });
}
```

Middleware must return the result of `$next`, a `StepResponse`, or `StepResult::stop()`. Return a `StepResponse` to answer the step without invoking the model, such as when serving a cached response. Return `StepResult::stop()` to end the run. Any other return value causes a `LogicException`.

#### [Stopping Runs](#stopping-runs)

To end an agent's run before its next model call, use the `Stop` middleware. For example, you may stop a run when a user presses a "stop" button or the run reaches an input-token budget. The response retains the completed steps and their combined usage:

```
1use Illuminate\Support\Facades\Cache;

2use Laravel\Ai\Contracts\HasMiddleware;

3use Laravel\Ai\Middleware\Stop;

4use Laravel\Ai\PendingStep;

5

6public function middleware(): array

7{

8    return [

9        // Stop when the user has pressed the "stop" button...

10        Stop::when(fn (PendingStep $step) => Cache::has("chat:{$this->user->id}:stopped")),

11

12        // Stop when the run has used at least 50,000 input tokens...

13        Stop::unless(fn (PendingStep $step) => $step->usage->inputTokens < 50_000),

14    ];

15}

use Illuminate\Support\Facades\Cache;
use Laravel\Ai\Contracts\HasMiddleware;
use Laravel\Ai\Middleware\Stop;
use Laravel\Ai\PendingStep;

public function middleware(): array
{
    return [
        // Stop when the user has pressed the "stop" button...
        Stop::when(fn (PendingStep $step) => Cache::has("chat:{$this->user->id}:stopped")),

        // Stop when the run has used at least 50,000 input tokens...
        Stop::unless(fn (PendingStep $step) => $step->usage->inputTokens < 50_000),
    ];
}
```

Before each step, `when` stops the run if the condition is true, and `unless` stops the run if the condition is false. A stopped streaming run has a `cancelled` finish reason.

Custom middleware may also end the run by returning `StepResult::stop()` instead of the result of `$next`:

```
1use Laravel\Ai\Gateway\StepResult;

2

3public function handle(PendingStep $step, Closure $next)

4{

5    return $this->cancelled($step) ? StepResult::stop() : $next($step);

6}

use Laravel\Ai\Gateway\StepResult;

public function handle(PendingStep $step, Closure $next)
{
    return $this->cancelled($step) ? StepResult::stop() : $next($step);
}
```

### [Anonymous Agents](#anonymous-agents)

Sometimes you may want to quickly interact with a model without creating a dedicated agent class. You can create an ad-hoc, anonymous agent using the `agent` function:

```
1use function Laravel\Ai\{agent};

2

3$response = agent(

4    instructions: 'You are an expert at software development.',

5    messages: [],

6    tools: [],

7)->prompt('Tell me about Laravel');

use function Laravel\Ai\{agent};

$response = agent(
    instructions: 'You are an expert at software development.',
    messages: [],
    tools: [],
)->prompt('Tell me about Laravel');
```

Anonymous agents may also produce structured output:

```
1use Illuminate\Contracts\JsonSchema\JsonSchema;

2

3use function Laravel\Ai\{agent};

4

5$response = agent(

6    schema: fn (JsonSchema $schema) => [

7        'number' => $schema->integer()->required(),

8    ],

9)->prompt('Generate a random number less than 100');

use Illuminate\Contracts\JsonSchema\JsonSchema;

use function Laravel\Ai\{agent};

$response = agent(
    schema: fn (JsonSchema $schema) => [
        'number' => $schema->integer()->required(),
    ],
)->prompt('Generate a random number less than 100');
```

### [Agent Configuration](#agent-configuration)

You may configure text generation options for an agent using PHP attributes. The following attributes are available:

- `MaxSteps`: The maximum number of steps the agent may take when using tools.
- `MaxTokens`: The maximum number of tokens the model may generate.
- `Model`: The model the agent should use.
- `Provider`: The AI provider (or providers for failover) to use for the agent.
- `Temperature`: The sampling temperature to use for generation (0.0 to 1.0).
- `Timeout`: The HTTP timeout in seconds for agent requests (default: 60).
- `TopP`: The nucleus sampling probability to use for generation (0.0 to 1.0).
- `UseCheapestModel`: Use the provider's cheapest text model for cost optimization.
- `UseSmartestModel`: Use the provider's most capable text model for complex tasks.

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Laravel\Ai\Attributes\MaxSteps;

6use Laravel\Ai\Attributes\MaxTokens;

7use Laravel\Ai\Attributes\Model;

8use Laravel\Ai\Attributes\Provider;

9use Laravel\Ai\Attributes\Temperature;

10use Laravel\Ai\Attributes\Timeout;

11use Laravel\Ai\Attributes\TopP;

12use Laravel\Ai\Contracts\Agent;

13use Laravel\Ai\Enums\Lab;

14use Laravel\Ai\Promptable;

15

16#[Provider(Lab::Anthropic)]

17#[Model('claude-sonnet-5')]

18#[MaxSteps(10)]

19#[MaxTokens(4096)]

20#[Temperature(0.7)]

21#[Timeout(120)]

22#[TopP(0.9)]

23class SalesCoach implements Agent

24{

25    use Promptable;

26

27    // ...

28}

<?php

namespace App\Ai\Agents;

use Laravel\Ai\Attributes\MaxSteps;
use Laravel\Ai\Attributes\MaxTokens;
use Laravel\Ai\Attributes\Model;
use Laravel\Ai\Attributes\Provider;
use Laravel\Ai\Attributes\Temperature;
use Laravel\Ai\Attributes\Timeout;
use Laravel\Ai\Attributes\TopP;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Enums\Lab;
use Laravel\Ai\Promptable;

#[Provider(Lab::Anthropic)]
#[Model('claude-sonnet-5')]
#[MaxSteps(10)]
#[MaxTokens(4096)]
#[Temperature(0.7)]
#[Timeout(120)]
#[TopP(0.9)]
class SalesCoach implements Agent
{
    use Promptable;

    // ...
}
```

The `UseCheapestModel` and `UseSmartestModel` attributes allow you to automatically select the most cost-effective or most capable model for a given provider without specifying a model name. This is useful when you want to optimize for cost or capability across different providers:

```
1use Laravel\Ai\Attributes\UseCheapestModel;

2use Laravel\Ai\Attributes\UseSmartestModel;

3use Laravel\Ai\Contracts\Agent;

4use Laravel\Ai\Promptable;

5

6#[UseCheapestModel]

7class SimpleSummarizer implements Agent

8{

9    use Promptable;

10

11    // Will use the cheapest model (e.g., Haiku)...

12}

13

14#[UseSmartestModel]

15class ComplexReasoner implements Agent

16{

17    use Promptable;

18

19    // Will use the most capable model (e.g., Opus)...

20}

use Laravel\Ai\Attributes\UseCheapestModel;
use Laravel\Ai\Attributes\UseSmartestModel;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Promptable;

#[UseCheapestModel]
class SimpleSummarizer implements Agent
{
    use Promptable;

    // Will use the cheapest model (e.g., Haiku)...
}

#[UseSmartestModel]
class ComplexReasoner implements Agent
{
    use Promptable;

    // Will use the most capable model (e.g., Opus)...
}
```

The underlying model selected by `UseCheapestModel` and `UseSmartestModel` may change between releases of the Laravel AI SDK as providers release new models. Switching models can introduce behavioral changes, deprecated parameters, and significant cost differences. If you need a stable, predictable model and pricing, specify the model explicitly using the `Model` attribute.

### [Provider Options](#provider-options)

If your agent needs to pass provider-specific options (such as OpenAI reasoning effort or penalty settings), implement the `HasProviderOptions` contract and define a `providerOptions` method:

```
1<?php

2

3namespace App\Ai\Agents;

4

5use Laravel\Ai\Contracts\Agent;

6use Laravel\Ai\Contracts\HasProviderOptions;

7use Laravel\Ai\Enums\Lab;

8use Laravel\Ai\Promptable;

9

10class SalesCoach implements Agent, HasProviderOptions

11{

12    use Promptable;

13

14    // ...

15

16    /**

17     * Get provider-specific generation options.

18     */

19    public function providerOptions(Lab|string $provider): array

20    {

21        return match ($provider) {

22            Lab::OpenAI => [

23                'reasoning' => ['effort' => 'low'],

24                'frequency_penalty' => 0.5,

25                'presence_penalty' => 0.3,

26            ],

27            Lab::Anthropic => [

28                'thinking' => ['budget_tokens' => 1024],

29                'cache_control' => ['type' => 'ephemeral'],

30            ],

31            default => [],

32        };

33    }

34}

<?php

namespace App\Ai\Agents;

use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasProviderOptions;
use Laravel\Ai\Enums\Lab;
use Laravel\Ai\Promptable;

class SalesCoach implements Agent, HasProviderOptions
{
    use Promptable;

    // ...

    /**
     * Get provider-specific generation options.
     */
    public function providerOptions(Lab|string $provider): array
    {
        return match ($provider) {
            Lab::OpenAI => [
                'reasoning' => ['effort' => 'low'],
                'frequency_penalty' => 0.5,
                'presence_penalty' => 0.3,
            ],
            Lab::Anthropic => [
                'thinking' => ['budget_tokens' => 1024],
                'cache_control' => ['type' => 'ephemeral'],
            ],
            default => [],
        };
    }
}
```

The `providerOptions` method receives the provider currently being used (`Lab` enum or string), allowing you to return different options per provider. This is especially useful when using [failover](#failover), since each fallback provider can receive its own configuration.

The Anthropic example above also enables [prompt caching](#prompt-caching) via `cache_control`.

The [image](#images), [audio](#audio), [transcription](#transcription), [embedding](#embeddings), and [reranking](#reranking) builders accept provider options as well:

```
1use Laravel\Ai\Audio;

2

3$audio = Audio::of('I love coding with Laravel.')

4    ->withProviderOptions(['speed' => 1.25])

5    ->generate();

use Laravel\Ai\Audio;

$audio = Audio::of('I love coding with Laravel.')
    ->withProviderOptions(['speed' => 1.25])
    ->generate();
```

You may also pass a closure instead of an array, which will receive the provider currently being used.

#### [Custom HTTP Headers](#custom-http-headers)

Headers configured for a provider within your application's `config/ai.php` configuration file are sent with every request that provider makes. To send headers on a per-request basis, such as metadata used by an AI gateway, you may use the `withHeaders` method, which is available on the image, audio, transcription, embedding, and reranking builders, as well as on [file uploads](#files):

```
1use Laravel\Ai\Embeddings;

2

3$embeddings = Embeddings::for($chunks)

4    ->withHeaders(['cf-aig-metadata' => json_encode(['team' => $team->id])])

5    ->withProviderOptions(['dimensions' => 1024])

6    ->generate();

use Laravel\Ai\Embeddings;

$embeddings = Embeddings::for($chunks)
    ->withHeaders(['cf-aig-metadata' => json_encode(['team' => $team->id])])
    ->withProviderOptions(['dimensions' => 1024])
    ->generate();
```

Headers may also be given as a closure, which receives the provider currently being used. Headers are not included in the request body and do not affect [embedding cache keys](#caching-embeddings).

### [Prompt Caching](#prompt-caching)

Most providers cache repeated prompt prefixes automatically and bill the cached portion at a discount. OpenAI, Gemini, Groq, DeepSeek, and xAI require no configuration, and you may inspect the savings via the response's usage:

```
1$response->usage->cacheReadInputTokens;

2$response->usage->cacheWriteInputTokens;

$response->usage->cacheReadInputTokens;
$response->usage->cacheWriteInputTokens;
```

Both of these counts are subsets of the input token total, which is discussed further in the [usage documentation](#usage).

The `anthropic` and `bedrock` providers only cache when asked. The `CacheInstructions` and `CacheToolDefinitions` attributes place a cache breakpoint at the end of your agent's instructions and tool definitions, so every conversation reads that prefix from the cache instead of writing it again:

```
1use Laravel\Ai\Attributes\CacheInstructions;

2use Laravel\Ai\Attributes\CacheToolDefinitions;

3

4#[CacheInstructions]

5#[CacheToolDefinitions]

6class SalesCoach implements Agent

7{

8    use Promptable;

9

10    // ...

11}

use Laravel\Ai\Attributes\CacheInstructions;
use Laravel\Ai\Attributes\CacheToolDefinitions;

#[CacheInstructions]
#[CacheToolDefinitions]
class SalesCoach implements Agent
{
    use Promptable;

    // ...
}
```

If your instructions change on every request, such as when they embed the current date, use `CacheToolDefinitions` alone. Caching a prefix that changes on every request creates a new cache entry each time, so you pay to write it to the cache without ever reusing it.

Providers that do not support these attributes ignore them, so an agent may safely declare them while using [failover](#failover).

Cached prefixes are retained for five minutes by default. Anthropic may retain them for an hour if you pass a TTL to the attribute:

```
1#[CacheInstructions('1h')]

2#[CacheToolDefinitions('1h')]

#[CacheInstructions('1h')]
#[CacheToolDefinitions('1h')]
```

Alternatively, Anthropic's automatic caching may be enabled via a top-level `cache_control` [provider option](#provider-options). This places a single breakpoint after the last block of the request, so the breakpoint advances as the conversation grows and each turn reads the previous turns from the cache. Both mechanisms may be combined.

Because providers build prompts in the order tools, instructions, and messages, caching instructions for an hour also requires caching tool definitions for an hour. Mixing the two throws an `InvalidArgumentException`.

## [Human Tool Approval](#human-tool-approval)

Tool approval requires the paused turn's history to be available when the run is resumed. You should either use a `Conversational` agent, such as one using the `RemembersConversations` trait, or provide the history from your application's frontend using the [`withMessages` method](#conversation-context). Agents that do neither will throw an `ApprovalNotResumableException` when a tool pauses.

Tools that perform sensitive or irreversible actions may require human approval before they are executed. To make a tool approvable, implement the `Approvable` contract and use the `InteractsWithApprovals` trait. Approvable tools require approval by default:

```
1<?php

2

3namespace App\Ai\Tools;

4

5use Illuminate\Contracts\JsonSchema\JsonSchema;

6use Illuminate\Support\Facades\Storage;

7use Laravel\Ai\Concerns\InteractsWithApprovals;

8use Laravel\Ai\Contracts\Approvable;

9use Laravel\Ai\Contracts\Tool;

10use Laravel\Ai\Tools\Request;

11use Stringable;

12

13class DeleteFile implements Approvable, Tool

14{

15    use InteractsWithApprovals;

16

17    /**

18     * Get the description of the tool's purpose.

19     */

20    public function description(): Stringable|string

21    {

22        return 'Delete a file from storage.';

23    }

24

25    /**

26     * Execute the tool.

27     */

28    public function handle(Request $request): Stringable|string

29    {

30        Storage::delete($request['path']);

31

32        return "Deleted [{$request['path']}].";

33    }

34

35    /**

36     * Get the tool's schema definition.

37     */

38    public function schema(JsonSchema $schema): array

39    {

40        return [

41            'path' => $schema->string()->required(),

42        ];

43    }

44}

<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Storage;
use Laravel\Ai\Concerns\InteractsWithApprovals;
use Laravel\Ai\Contracts\Approvable;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Stringable;

class DeleteFile implements Approvable, Tool
{
    use InteractsWithApprovals;

    /**
     * Get the description of the tool's purpose.
     */
    public function description(): Stringable|string
    {
        return 'Delete a file from storage.';
    }

    /**
     * Execute the tool.
     */
    public function handle(Request $request): Stringable|string
    {
        Storage::delete($request['path']);

        return "Deleted [{$request['path']}].";
    }

    /**
     * Get the tool's schema definition.
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'path' => $schema->string()->required(),
        ];
    }
}
```

To determine whether approval is needed based on the tool call's arguments, define a `needsApproval` method on the tool. This method may return a boolean or an `Approval` instance that includes a reason for the approval request:

```
1use Laravel\Ai\Approvals\Approval;

2

3/**

4 * Determine whether the tool needs approval for the given request.

5 */

6protected function needsApproval(Request $request): Approval|bool

7{

8    return str_starts_with($request['path'], 'temporary/')

9        ? false

10        : Approval::required('This will permanently delete a file.');

11}

use Laravel\Ai\Approvals\Approval;

/**
 * Determine whether the tool needs approval for the given request.
 */
protected function needsApproval(Request $request): Approval|bool
{
    return str_starts_with($request['path'], 'temporary/')
        ? false
        : Approval::required('This will permanently delete a file.');
}
```

You may override a tool's approval requirement when returning it from an agent's `tools` method:

```
1public function tools(): iterable

2{

3    return [

4        (new SendNotification)->withoutApproval(),

5        (new DeleteFile)->requireApproval('Deletion review required.'),

6    ];

7}

public function tools(): iterable
{
    return [
        (new SendNotification)->withoutApproval(),
        (new DeleteFile)->requireApproval('Deletion review required.'),
    ];
}
```

When an approvable tool is called, the agent pauses before executing it. You may inspect the response's pending approvals, which contain each tool call's ID, tool name, arguments, and approval reason:

```
1$response = (new FileAssistant)

2    ->forUser($user)

3    ->prompt('Delete the old invoice.');

4

5if ($response->hasPendingApprovals()) {

6    foreach ($response->pendingApprovals as $approval) {

7        // $approval->id

8        // $approval->tool

9        // $approval->arguments

10        // $approval->reason

11    }

12}

$response = (new FileAssistant)
    ->forUser($user)
    ->prompt('Delete the old invoice.');

if ($response->hasPendingApprovals()) {
    foreach ($response->pendingApprovals as $approval) {
        // $approval->id
        // $approval->tool
        // $approval->arguments
        // $approval->reason
    }
}
```

To resume the agent, continue the conversation and provide a `Decisions` instance containing a decision for each pending tool call. Decisions may approve the call, reject it, or edit its arguments before execution:

```
1use Laravel\Ai\Approvals\Decision;

2use Laravel\Ai\Approvals\Decisions;

3

4$response = (new FileAssistant)

5    ->continue($conversationId, as: $user)

6    ->prompt(Decisions::from([

7        'call_abc' => Decision::approve(),

8        'call_ghi' => Decision::reject('The invoice must be retained.'),

9    ]));

use Laravel\Ai\Approvals\Decision;
use Laravel\Ai\Approvals\Decisions;

$response = (new FileAssistant)
    ->continue($conversationId, as: $user)
    ->prompt(Decisions::from([
        'call_abc' => Decision::approve(),
        'call_ghi' => Decision::reject('The invoice must be retained.'),
    ]));
```

> [!IMPORTANT]
> Paused turns are matched by their conversation and pending tool calls, not by the participant that paused them. Therefore, your application should authorize access to the conversation before resuming it, as demonstrated in the [complete approval flow](#complete-approval-flow), or verify access using the conversation store's `conversationBelongsTo` method.

The boolean values `true` and `false` may be used as shorthand for approval and rejection. Every pending tool call must receive a decision. Unknown, missing, or previously resolved tool call IDs will cause an `ApprovalMismatchException` to be thrown. You may provide a default for calls without an explicit decision using the `approveRemaining` or `rejectRemaining` methods:

```
1$decisions = Decisions::from([

2    'call_abc' => true,

3])->rejectRemaining('Not approved.');

4

5$response = (new FileAssistant)

6    ->continue($conversationId, as: $user)

7    ->prompt($decisions);

$decisions = Decisions::from([
    'call_abc' => true,
])->rejectRemaining('Not approved.');

$response = (new FileAssistant)
    ->continue($conversationId, as: $user)
    ->prompt($decisions);
```

A rejection with a result, such as `Decision::reject('Not approved.')`, is returned to the model so it may continue responding. A rejection without a result stops the generation loop after recording the rejection.

Tool approval is supported by the `prompt`, `stream`, `queue`, `broadcast`, `broadcastNow`, and `broadcastOnQueue` methods.

During streaming and broadcasting, a pause is represented by a `tool_approval_request` event. When using the [Vercel AI SDK stream protocol](#stream-protocols), approval requests and results are emitted using the protocol's native tool approval parts, and the Agent User Interaction protocol reports them as interrupts.

Clients that use either protocol post their decisions along with the rest of the conversation, so a [chat request](#frontend-integration) may be passed directly to the agent:

```
1$chat = Vercel::chat($request);

2

3return (new FileAssistant)

4    ->continue($conversationId, as: $request->user())

5    ->stream($chat)

6    ->usingProtocol($chat->protocol());

$chat = Vercel::chat($request);

return (new FileAssistant)
    ->continue($conversationId, as: $request->user())
    ->stream($chat)
    ->usingProtocol($chat->protocol());
```

When a paused turn is resumed, the resumed steps are merged into that turn, so each turn is stored as a single assistant message. The response's `assistantMessageId` contains the ID of the paused message, and that message's usage includes both the pause and the resume.

For queued agents, the resulting response is passed to the `then` callback, and Laravel also dispatches a `ToolApprovalRequested` event.

Laravel stores the result of an approved tool before asking the model to continue. If generation then fails, the approval has already been resolved. Continue the conversation with a normal text prompt instead of submitting the same approval decisions again.

### [Complete Approval Flow](#complete-approval-flow)

The following route demonstrates a complete approval flow, accepting either a new text prompt or approval decisions from the chat screen. This example assumes the application's `User` model uses the `HasConversations` trait:

```
1use App\Ai\Agents\FileAssistant;

2use Illuminate\Http\Request;

3use Illuminate\Support\Facades\Gate;

4use Illuminate\Support\Facades\Route;

5use Illuminate\Validation\Rule;

6use Laravel\Ai\Approvals\Decision;

7use Laravel\Ai\Approvals\Decisions;

8use Laravel\Ai\Models\Conversation;

9

10Route::post('/chat/{conversation}', function (Request $request, Conversation $conversation) {

11    Gate::authorize('view', $conversation);

12

13    $validated = $request->validate([

14        'message' => ['nullable', 'string', 'required_without:decisions', 'prohibits:decisions'],

15        'decisions' => ['nullable', 'array', 'required_without:message', 'prohibits:message'],

16        'decisions.*.action' => ['required_with:decisions', Rule::in(['approve', 'reject'])],

17        'decisions.*.result' => ['nullable', 'string'],

18    ]);

19

20    $prompt = isset($validated['decisions'])

21        ? Decisions::from(collect($validated['decisions'])->map(

22            fn (array $decision) => match ($decision['action']) {

23                'approve' => Decision::approve(),

24                'reject' => Decision::reject($decision['result'] ?? null),

25            }

26        )->all())

27        : $validated['message'];

28

29    $response = (new FileAssistant)

30        ->continue($conversation->id, as: $request->user())

31        ->prompt($prompt);

32

33    return [

34        'conversation_id' => $response->conversationId,

35        'status' => $response->hasPendingApprovals() ? 'awaiting_approval' : 'complete',

36        'message' => $response->text,

37        'approvals' => $response->pendingApprovals,

38    ];

39})->middleware('auth');

use App\Ai\Agents\FileAssistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Laravel\Ai\Approvals\Decision;
use Laravel\Ai\Approvals\Decisions;
use Laravel\Ai\Models\Conversation;

Route::post('/chat/{conversation}', function (Request $request, Conversation $conversation) {
    Gate::authorize('view', $conversation);

    $validated = $request->validate([
        'message' => ['nullable', 'string', 'required_without:decisions', 'prohibits:decisions'],
        'decisions' => ['nullable', 'array', 'required_without:message', 'prohibits:message'],
        'decisions.*.action' => ['required_with:decisions', Rule::in(['approve', 'reject'])],
        'decisions.*.result' => ['nullable', 'string'],
    ]);

    $prompt = isset($validated['decisions'])
        ? Decisions::from(collect($validated['decisions'])->map(
            fn (array $decision) => match ($decision['action']) {
                'approve' => Decision::approve(),
                'reject' => Decision::reject($decision['result'] ?? null),
            }
        )->all())
        : $validated['message'];

    $response = (new FileAssistant)
        ->continue($conversation->id, as: $request->user())
        ->prompt($prompt);

    return [
        'conversation_id' => $response->conversationId,
        'status' => $response->hasPendingApprovals() ? 'awaiting_approval' : 'complete',
        'message' => $response->text,
        'approvals' => $response->pendingApprovals,
    ];
})->middleware('auth');
```

When the response status is `awaiting_approval`, the chat screen should render the pending approvals and submit the user's choices to the same endpoint using the tool call ID as each decision's key. Otherwise, the screen may submit a plain `message` value:

```
1{

2    "decisions": {

3        "call_abc": {

4            "action": "approve"

5        },

6        "call_def": {

7            "action": "reject",

8            "result": "The invoice must be retained."

9        }

10    }

11}

{
    "decisions": {
        "call_abc": {
            "action": "approve"
        },
        "call_def": {
            "action": "reject",
            "result": "The invoice must be retained."
        }
    }
}
```

## [Images](#images)

The `Laravel\Ai\Image` class may be used to generate images using the `openai`, `gemini`, or `xai` providers:

```
1use Laravel\Ai\Image;

2

3$image = Image::of('A donut sitting on the kitchen counter')->generate();

4

5$rawContent = (string) $image;

use Laravel\Ai\Image;

$image = Image::of('A donut sitting on the kitchen counter')->generate();

$rawContent = (string) $image;
```

The `square`, `portrait`, and `landscape` methods may be used to control the aspect ratio of the image, while the `quality` method may be used to guide the model on final image quality (`high`, `medium`, `low`). The `timeout` method may be used to specify the HTTP timeout in seconds:

```
1use Laravel\Ai\Image;

2

3$image = Image::of('A donut sitting on the kitchen counter')

4    ->quality('high')

5    ->landscape()

6    ->timeout(120)

7    ->generate();

use Laravel\Ai\Image;

$image = Image::of('A donut sitting on the kitchen counter')
    ->quality('high')
    ->landscape()
    ->timeout(120)
    ->generate();
```

You may attach reference images using the `attachments` method:

```
1use Laravel\Ai\Files;

2use Laravel\Ai\Image;

3

4$image = Image::of('Update this photo of me to be in the style of an impressionist painting.')

5    ->attachments([

6        Files\Image::fromStorage('photo.jpg'),

7        // Files\Image::fromPath('/home/laravel/photo.jpg'),

8        // Files\Image::fromUrl('https://example.com/photo.jpg'),

9        // $request->file('photo'),

10    ])

11    ->landscape()

12    ->generate();

use Laravel\Ai\Files;
use Laravel\Ai\Image;

$image = Image::of('Update this photo of me to be in the style of an impressionist painting.')
    ->attachments([
        Files\Image::fromStorage('photo.jpg'),
        // Files\Image::fromPath('/home/laravel/photo.jpg'),
        // Files\Image::fromUrl('https://example.com/photo.jpg'),
        // $request->file('photo'),
    ])
    ->landscape()
    ->generate();
```

Some providers may generate multiple images in a single request. OpenAI, Azure, and xAI accept an `n` [provider option](#provider-options), and the response will contain every image that was returned:

```
1$response = Image::of('A donut sitting on the kitchen counter')

2    ->withProviderOptions(['n' => 4])

3    ->generate();

4

5count($response);           // 4

6$response->images;          // A collection of generated images...

7$response->firstImage();    // The first generated image...

$response = Image::of('A donut sitting on the kitchen counter')
    ->withProviderOptions(['n' => 4])
    ->generate();

count($response);           // 4
$response->images;          // A collection of generated images...
$response->firstImage();    // The first generated image...
```

Generated images may be easily stored on the default disk configured in your application's `config/filesystems.php` configuration file:

```
1$image = Image::of('A donut sitting on the kitchen counter');

2

3$path = $image->store();

4$path = $image->storeAs('image.jpg');

5$path = $image->storePublicly();

6$path = $image->storePubliclyAs('image.jpg');

$image = Image::of('A donut sitting on the kitchen counter');

$path = $image->store();
$path = $image->storeAs('image.jpg');
$path = $image->storePublicly();
$path = $image->storePubliclyAs('image.jpg');
```

Image generation may also be queued:

```
1use Laravel\Ai\Image;

2use Laravel\Ai\Responses\ImageResponse;

3

4Image::of('A donut sitting on the kitchen counter')

5    ->portrait()

6    ->queue()

7    ->then(function (ImageResponse $image) {

8        $path = $image->store();

9

10        // ...

11    });

use Laravel\Ai\Image;
use Laravel\Ai\Responses\ImageResponse;

Image::of('A donut sitting on the kitchen counter')
    ->portrait()
    ->queue()
    ->then(function (ImageResponse $image) {
        $path = $image->store();

        // ...
    });
```

## [Audio](#audio)

The `Laravel\Ai\Audio` class may be used to generate audio from the given text:

```
1use Laravel\Ai\Audio;

2

3$audio = Audio::of('I love coding with Laravel.')->generate();

4

5$rawContent = (string) $audio;

use Laravel\Ai\Audio;

$audio = Audio::of('I love coding with Laravel.')->generate();

$rawContent = (string) $audio;
```

You may also generate audio from a string using the `toAudio` method available via Laravel's `Stringable` class:

```
1use Illuminate\Support\Str;

2

3$audio = Str::of('I love coding with Laravel.')->toAudio();

use Illuminate\Support\Str;

$audio = Str::of('I love coding with Laravel.')->toAudio();
```

The `male`, `female`, and `voice` methods may be used to determine the voice of the generated audio:

```
1$audio = Audio::of('I love coding with Laravel.')

2    ->female()

3    ->generate();

4

5$audio = Audio::of('I love coding with Laravel.')

6    ->voice('voice-id-or-name')

7    ->generate();

$audio = Audio::of('I love coding with Laravel.')
    ->female()
    ->generate();

$audio = Audio::of('I love coding with Laravel.')
    ->voice('voice-id-or-name')
    ->generate();
```

Similarly, the `instructions` method may be used to dynamically coach the model on how the generated audio should sound:

```
1$audio = Audio::of('I love coding with Laravel.')

2    ->female()

3    ->instructions('Said like a pirate')

4    ->generate();

$audio = Audio::of('I love coding with Laravel.')
    ->female()
    ->instructions('Said like a pirate')
    ->generate();
```

Generated audio may be easily stored on the default disk configured in your application's `config/filesystems.php` configuration file:

```
1$audio = Audio::of('I love coding with Laravel.')->generate();

2

3$path = $audio->store();

4$path = $audio->storeAs('audio.mp3');

5$path = $audio->storePublicly();

6$path = $audio->storePubliclyAs('audio.mp3');

$audio = Audio::of('I love coding with Laravel.')->generate();

$path = $audio->store();
$path = $audio->storeAs('audio.mp3');
$path = $audio->storePublicly();
$path = $audio->storePubliclyAs('audio.mp3');
```

Audio generation may also be queued:

```
1use Laravel\Ai\Audio;

2use Laravel\Ai\Responses\AudioResponse;

3

4Audio::of('I love coding with Laravel.')

5    ->queue()

6    ->then(function (AudioResponse $audio) {

7        $path = $audio->store();

8

9        // ...

10    });

use Laravel\Ai\Audio;
use Laravel\Ai\Responses\AudioResponse;

Audio::of('I love coding with Laravel.')
    ->queue()
    ->then(function (AudioResponse $audio) {
        $path = $audio->store();

        // ...
    });
```

## [Transcriptions](#transcription)

The `Laravel\Ai\Transcription` class may be used to generate a transcript of the given audio:

```
1use Laravel\Ai\Transcription;

2

3$transcript = Transcription::fromPath('/home/laravel/audio.mp3')->generate();

4$transcript = Transcription::fromStorage('audio.mp3')->generate();

5$transcript = Transcription::fromUpload($request->file('audio'))->generate();

6

7return (string) $transcript;

use Laravel\Ai\Transcription;

$transcript = Transcription::fromPath('/home/laravel/audio.mp3')->generate();
$transcript = Transcription::fromStorage('audio.mp3')->generate();
$transcript = Transcription::fromUpload($request->file('audio'))->generate();

return (string) $transcript;
```

The `diarize` method may be used to indicate you would like the response to include the diarized transcript in addition to the raw text transcript, allowing you to access the segmented transcript by speaker:

```
1$transcript = Transcription::fromStorage('audio.mp3')

2    ->diarize()

3    ->generate();

$transcript = Transcription::fromStorage('audio.mp3')
    ->diarize()
    ->generate();
```

Transcription generation may also be queued:

```
1use Laravel\Ai\Transcription;

2use Laravel\Ai\Responses\TranscriptionResponse;

3

4Transcription::fromStorage('audio.mp3')

5    ->queue()

6    ->then(function (TranscriptionResponse $transcript) {

7        // ...

8    });

use Laravel\Ai\Transcription;
use Laravel\Ai\Responses\TranscriptionResponse;

Transcription::fromStorage('audio.mp3')
    ->queue()
    ->then(function (TranscriptionResponse $transcript) {
        // ...
    });
```

## [Text Summarization](#text-summarization)

You may summarize text using the `summarize` method available via Laravel's `Stringable` class. By default, the summary will contain no more than three sentences and will be generated using the configured provider's cheapest text model:

```
1use Illuminate\Support\Str;

2

3$summary = Str::of($article)->summarize();

use Illuminate\Support\Str;

$summary = Str::of($article)->summarize();
```

You may specify the maximum number of sentences, provider, model, and timeout used to generate the summary. The `Str` class also offers a static version of the method:

```
1use Laravel\Ai\Enums\Lab;

2

3$summary = Str::of($article)->summarize(

4    sentences: 4,

5    provider: Lab::Anthropic,

6    model: 'claude-sonnet-5',

7    timeout: 30,

8);

9

10$summary = Str::summarize($article, sentences: 4);

use Laravel\Ai\Enums\Lab;

$summary = Str::of($article)->summarize(
    sentences: 4,
    provider: Lab::Anthropic,
    model: 'claude-sonnet-5',
    timeout: 30,
);

$summary = Str::summarize($article, sentences: 4);
```

## [Embeddings](#embeddings)

You may easily generate vector embeddings for any given string using the new `toEmbeddings` method available via Laravel's `Stringable` class:

```
1use Illuminate\Support\Str;

2

3$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings();

use Illuminate\Support\Str;

$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings();
```

Alternatively, you may use the `Embeddings` class to generate embeddings for multiple inputs at once:

```
1use Laravel\Ai\Embeddings;

2

3$response = Embeddings::for([

4    'Napa Valley has great wine.',

5    'Laravel is a PHP framework.',

6])->generate();

7

8$response->embeddings; // [[0.123, 0.456, ...], [0.789, 0.012, ...]]

use Laravel\Ai\Embeddings;

$response = Embeddings::for([
    'Napa Valley has great wine.',
    'Laravel is a PHP framework.',
])->generate();

$response->embeddings; // [[0.123, 0.456, ...], [0.789, 0.012, ...]]
```

You may specify the dimensions and provider for the embeddings:

```
1$response = Embeddings::for(['Napa Valley has great wine.'])

2    ->dimensions(1536)

3    ->generate(Lab::OpenAI, 'text-embedding-3-small');

$response = Embeddings::for(['Napa Valley has great wine.'])
    ->dimensions(1536)
    ->generate(Lab::OpenAI, 'text-embedding-3-small');
```

### [Multimodal Embeddings](#multimodal-embeddings)

In addition to strings, the `Embeddings::for` method accepts image, audio, document, and video inputs, allowing you to generate embeddings for non-text content. Gemini supports image, audio, document, and video embeddings, while VoyageAI supports image and video embeddings:

```
1use Laravel\Ai\Embeddings;

2use Laravel\Ai\Enums\Lab;

3use Laravel\Ai\Files\Image;

4use Laravel\Ai\Files\Video;

5

6$response = Embeddings::for([

7    'A vineyard at sunset.',

8    Image::fromStorage('vineyard.jpg'),

9    Video::fromPath('/home/laravel/tour.mp4'),

10])->generate(Lab::Gemini);

use Laravel\Ai\Embeddings;
use Laravel\Ai\Enums\Lab;
use Laravel\Ai\Files\Image;
use Laravel\Ai\Files\Video;

$response = Embeddings::for([
    'A vineyard at sunset.',
    Image::fromStorage('vineyard.jpg'),
    Video::fromPath('/home/laravel/tour.mp4'),
])->generate(Lab::Gemini);
```

Multimodal inputs use the same [file classes used for attachments](#attachments). These files may be created from a local path, a filesystem disk, a remote URL, or Base64-encoded content. Images, documents, and videos may also be created from uploaded files, while documents may be created from raw string content:

```
1use Laravel\Ai\Files\Audio;

2use Laravel\Ai\Files\Document;

3use Laravel\Ai\Files\Image;

4use Laravel\Ai\Files\Video;

5

6Image::fromPath('/home/laravel/photo.jpg');

7Image::fromStorage('photo.jpg');

8Image::fromUpload($request->file('photo'));

9

10Audio::fromPath('/home/laravel/clip.mp3');

11Audio::fromStorage('clip.mp3');

12Audio::fromUpload($request->file('clip.mp3'));

13

14Video::fromPath('/home/laravel/video.mp4');

15Video::fromStorage('video.mp4');

16Video::fromUpload($request->file('video'));

17

18Document::fromUrl('https://example.com/report.pdf');

19Document::fromString('Laravel is a PHP framework.', 'text/plain');

20Document::fromUpload($request->file('report'));

use Laravel\Ai\Files\Audio;
use Laravel\Ai\Files\Document;
use Laravel\Ai\Files\Image;
use Laravel\Ai\Files\Video;

Image::fromPath('/home/laravel/photo.jpg');
Image::fromStorage('photo.jpg');
Image::fromUpload($request->file('photo'));

Audio::fromPath('/home/laravel/clip.mp3');
Audio::fromStorage('clip.mp3');
Audio::fromUpload($request->file('clip.mp3'));

Video::fromPath('/home/laravel/video.mp4');
Video::fromStorage('video.mp4');
Video::fromUpload($request->file('video'));

Document::fromUrl('https://example.com/report.pdf');
Document::fromString('Laravel is a PHP framework.', 'text/plain');
Document::fromUpload($request->file('report'));
```

VoyageAI does not allow remote URL media and Base64-encoded media to be mixed in a single request. Local, stored, and uploaded files are sent as Base64-encoded content, and text inputs may be combined with either media source. Consult your provider's documentation to determine which multimodal models and inputs are available.

### [Querying Embeddings](#querying-embeddings)

Once you have generated embeddings, you will typically store them in a `vector` column in your database for later querying. Laravel provides native support for vector columns on PostgreSQL via the `pgvector` extension and MariaDB. To get started, define a `vector` column in your migration, specifying the number of dimensions:

```
1Schema::ensureVectorExtensionExists();

2

3Schema::create('documents', function (Blueprint $table) {

4    $table->id();

5    $table->string('title');

6    $table->text('content');

7    $table->vector('embedding', dimensions: 1536);

8    $table->timestamps();

9});

Schema::ensureVectorExtensionExists();

Schema::create('documents', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->vector('embedding', dimensions: 1536);
    $table->timestamps();
});
```

You may also add a vector index to speed up similarity searches. When calling `index` on a vector column, Laravel will automatically create an HNSW index with cosine distance:

```
1$table->vector('embedding', dimensions: 1536)->index();

$table->vector('embedding', dimensions: 1536)->index();
```

On your Eloquent model, you should cast the vector column using the `AsVector` cast:

```
1use Illuminate\Database\Eloquent\Casts\AsVector;

2

3protected function casts(): array

4{

5    return [

6        'embedding' => AsVector::class,

7    ];

8}

use Illuminate\Database\Eloquent\Casts\AsVector;

protected function casts(): array
{
    return [
        'embedding' => AsVector::class,
    ];
}
```

To query for similar records, use the `whereVectorSimilarTo` method. This method filters results by a minimum cosine similarity (between `0.0` and `1.0`, where `1.0` is identical) and orders the results by similarity:

```
1use App\Models\Document;

2

3$documents = Document::query()

4    ->whereVectorSimilarTo('embedding', $queryEmbedding, minSimilarity: 0.4)

5    ->limit(10)

6    ->get();

use App\Models\Document;

$documents = Document::query()
    ->whereVectorSimilarTo('embedding', $queryEmbedding, minSimilarity: 0.4)
    ->limit(10)
    ->get();
```

The `$queryEmbedding` may be an array of floats or a plain string. When a string is given, Laravel will automatically generate embeddings for it:

```
1$documents = Document::query()

2    ->whereVectorSimilarTo('embedding', 'best wineries in Napa Valley')

3    ->limit(10)

4    ->get();

$documents = Document::query()
    ->whereVectorSimilarTo('embedding', 'best wineries in Napa Valley')
    ->limit(10)
    ->get();
```

If you need more control, you may use the lower-level `whereVectorDistanceLessThan`, `selectVectorDistance`, and `orderByVectorDistance` methods independently:

```
1$documents = Document::query()

2    ->select('*')

3    ->selectVectorDistance('embedding', $queryEmbedding, as: 'distance')

4    ->whereVectorDistanceLessThan('embedding', $queryEmbedding, maxDistance: 0.3)

5    ->orderByVectorDistance('embedding', $queryEmbedding)

6    ->limit(10)

7    ->get();

$documents = Document::query()
    ->select('*')
    ->selectVectorDistance('embedding', $queryEmbedding, as: 'distance')
    ->whereVectorDistanceLessThan('embedding', $queryEmbedding, maxDistance: 0.3)
    ->orderByVectorDistance('embedding', $queryEmbedding)
    ->limit(10)
    ->get();
```

If you would like to give an agent the ability to perform similarity searches as a tool, check out the [Similarity Search](#similarity-search) tool documentation.

Vector queries are currently supported on PostgreSQL connections using the `pgvector` extension, or on MariaDB 11.7 or later using its native vector support.

### [Caching Embeddings](#caching-embeddings)

Embedding generation can be cached to avoid redundant API calls for identical inputs. To enable caching, set the `ai.caching.embeddings.cache` configuration option to `true`:

```
1'caching' => [

2    'embeddings' => [

3        'cache' => true,

4        'store' => env('CACHE_STORE', 'database'),

5        'individually' => true,

6        // ...

7    ],

8],

'caching' => [
    'embeddings' => [
        'cache' => true,
        'store' => env('CACHE_STORE', 'database'),
        'individually' => true,
        // ...
    ],
],
```

When caching is enabled, embeddings are cached for 30 days. The cache key is based on the provider, model, dimensions, and input content, ensuring that identical requests return cached results while different configurations generate fresh embeddings.

By default, each input's embedding is cached under its own key, so a later request may hit the cache for inputs it has seen before even when the set of inputs or their order has changed. To instead cache the entire set of inputs under a single key, set the `ai.caching.embeddings.individually` configuration option to `false`.

You may also enable caching for a specific request using the `cache` method, even when global caching is disabled:

```
1$response = Embeddings::for(['Napa Valley has great wine.'])

2    ->cache()

3    ->generate();

$response = Embeddings::for(['Napa Valley has great wine.'])
    ->cache()
    ->generate();
```

You may specify a custom cache duration in seconds:

```
1$response = Embeddings::for(['Napa Valley has great wine.'])

2    ->cache(seconds: 3600) // Cache for 1 hour

3    ->generate();

$response = Embeddings::for(['Napa Valley has great wine.'])
    ->cache(seconds: 3600) // Cache for 1 hour
    ->generate();
```

The `toEmbeddings` Stringable method also accepts a `cache` argument:

```
1// Cache with default duration...

2$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings(cache: true);

3

4// Cache for a specific duration...

5$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings(cache: 3600);

// Cache with default duration...
$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings(cache: true);

// Cache for a specific duration...
$embeddings = Str::of('Napa Valley has great wine.')->toEmbeddings(cache: 3600);
```

## [Reranking](#reranking)

Reranking allows you to reorder a list of documents based on their relevance to a given query. This is useful for improving search results by using semantic understanding:

The `Laravel\Ai\Reranking` class may be used to rerank documents:

```
1use Laravel\Ai\Reranking;

2

3$response = Reranking::of([

4    'Django is a Python web framework.',

5    'Laravel is a PHP web application framework.',

6    'React is a JavaScript library for building user interfaces.',

7])->rerank('PHP frameworks');

8

9// Access the top result...

10$response->first()->document; // "Laravel is a PHP web application framework."

11$response->first()->score;    // 0.95

12$response->first()->index;    // 1 (original position)

use Laravel\Ai\Reranking;

$response = Reranking::of([
    'Django is a Python web framework.',
    'Laravel is a PHP web application framework.',
    'React is a JavaScript library for building user interfaces.',
])->rerank('PHP frameworks');

// Access the top result...
$response->first()->document; // "Laravel is a PHP web application framework."
$response->first()->score;    // 0.95
$response->first()->index;    // 1 (original position)
```

The `limit` method may be used to restrict the number of results returned, while the `timeout` method may be used to specify the HTTP timeout in seconds, which defaults to 30:

```
1$response = Reranking::of($documents)

2    ->limit(5)

3    ->timeout(60)

4    ->rerank('search query');

$response = Reranking::of($documents)
    ->limit(5)
    ->timeout(60)
    ->rerank('search query');
```

### [Reranking Collections](#reranking-collections)

For convenience, Laravel collections may be reranked using the `rerank` macro. The first argument specifies which field(s) to use for reranking, and the second argument is the query:

```
1// Rerank by a single field...

2$posts = Post::all()

3    ->rerank('body', 'Laravel tutorials');

4

5// Rerank by multiple fields (sent as JSON)...

6$reranked = $posts->rerank(['title', 'body'], 'Laravel tutorials');

7

8// Rerank using a closure to build the document...

9$reranked = $posts->rerank(

10    fn ($post) => $post->title.': '.$post->body,

11    'Laravel tutorials'

12);

// Rerank by a single field...
$posts = Post::all()
    ->rerank('body', 'Laravel tutorials');

// Rerank by multiple fields (sent as JSON)...
$reranked = $posts->rerank(['title', 'body'], 'Laravel tutorials');

// Rerank using a closure to build the document...
$reranked = $posts->rerank(
    fn ($post) => $post->title.': '.$post->body,
    'Laravel tutorials'
);
```

You may also limit the number of results and specify a provider:

```
1$reranked = $posts->rerank(

2    by: 'content',

3    query: 'Laravel tutorials',

4    limit: 10,

5    provider: Lab::Cohere,

6    timeout: 60,

7);

$reranked = $posts->rerank(
    by: 'content',
    query: 'Laravel tutorials',
    limit: 10,
    provider: Lab::Cohere,
    timeout: 60,
);
```

## [Classification](#classification)

Classification is currently experimental and its API may change in future minor releases of the AI SDK.

Classification allows you to ask a fixed set of questions about a given string or array of data and receive a typed answer, backed by a probability, for each question instead of free-form text. This is useful for routing, moderation, and scoring, where you need to compare an answer against a threshold or make assertions about it in your tests.

The `Laravel\Ai\Classification` class may be used to classify content. Each question is given a key, and the corresponding answer may be retrieved from the response using that key:

```
1use Laravel\Ai\Classification;

2use Laravel\Ai\Classification\Boolean;

3use Laravel\Ai\Classification\Choice;

4use Laravel\Ai\Classification\Score;

5

6$result = Classification::of($supportRequest)

7    ->questions([

8        'urgent' => new Boolean('Does this request need an immediate response?', [

9            'true' => 'Explicitly time-sensitive',

10            'false' => 'No urgency expressed',

11        ]),

12        'department' => new Choice('Which team should handle this request?', [

13            'billing' => 'Payments, invoices, and refunds',

14            'technical' => 'Bugs, outages, and integrations',

15            'sales' => 'Pricing, plans, and upgrades',

16        ]),

17        'frustration' => new Score('How frustrated is the customer?', [

18            'Calm',

19            'Frustrated',

20            'Very angry',

21        ]),

22    ])

23    ->classify();

use Laravel\Ai\Classification;
use Laravel\Ai\Classification\Boolean;
use Laravel\Ai\Classification\Choice;
use Laravel\Ai\Classification\Score;

$result = Classification::of($supportRequest)
    ->questions([
        'urgent' => new Boolean('Does this request need an immediate response?', [
            'true' => 'Explicitly time-sensitive',
            'false' => 'No urgency expressed',
        ]),
        'department' => new Choice('Which team should handle this request?', [
            'billing' => 'Payments, invoices, and refunds',
            'technical' => 'Bugs, outages, and integrations',
            'sales' => 'Pricing, plans, and upgrades',
        ]),
        'frustration' => new Score('How frustrated is the customer?', [
            'Calm',
            'Frustrated',
            'Very angry',
        ]),
    ])
    ->classify();
```

`Boolean` questions return the probability that the answer is "true". The `isTrue` method may be used to determine whether that probability meets a given threshold, which defaults to `0.5`:

```
1$result['urgent']->probability;             // 0.94

2$result['urgent']->isTrue(threshold: 0.8);  // true

$result['urgent']->probability;             // 0.94
$result['urgent']->isTrue(threshold: 0.8);  // true
```

`Choice` questions return one of the given options along with the probability of each option. The `confidence` property indicates how certain the provider is across the full set of probabilities, and will be `null` when the provider is unable to measure it:

```
1$result['department']->choice;                      // 'technical'

2$result['department']->probabilityOf('technical');  // 0.87

3$result['department']->probabilities;               // ['billing' => 0.08, 'technical' => 0.87, 'sales' => 0.05]

4$result['department']->confidence;                  // 0.82

$result['department']->choice;                      // 'technical'
$result['department']->probabilityOf('technical');  // 0.87
$result['department']->probabilities;               // ['billing' => 0.08, 'technical' => 0.87, 'sales' => 0.05]
$result['department']->confidence;                  // 0.82
```

`Score` questions return a position on the ordered levels that were provided. The `score` property is probability-weighted and may fall between two levels, while the `level` and `label` methods describe the most probable level:

```
1$result['frustration']->score;          // 1.24, the probability-weighted level

2$result['frustration']->level();        // 1, the most probable level

3$result['frustration']->label();        // 'Frustrated'

4$result['frustration']->normalized();   // 0.62, the score as a fraction of the highest level

5$result['frustration']->probabilities;  // [0.12, 0.52, 0.36]

$result['frustration']->score;          // 1.24, the probability-weighted level
$result['frustration']->level();        // 1, the most probable level
$result['frustration']->label();        // 'Frustrated'
$result['frustration']->normalized();   // 0.62, the score as a fraction of the highest level
$result['frustration']->probabilities;  // [0.12, 0.52, 0.36]
```

The criteria given to a `Boolean` question, the option descriptions given to a `Choice` question, and the levels given to a `Score` question may each be an array when a single sentence is not sufficient. `Choice` questions require at least two options, while `Score` questions require at least two levels.

The response may be iterated, counted, and accessed as an array. In addition, the `answer` method may be used to retrieve a single answer, while the `collect` method returns all of the answers as a [collection](collections.md):

```
1$result->answer('urgent');

2$result->collect();

3

4$result->usage;

5$result->meta->provider;

$result->answer('urgent');
$result->collect();

$result->usage;
$result->meta->provider;
```

### [Classifying Images](#classifying-images)

When using the OpenAI, OpenAI-compatible, TypeSafe, or OpenRouter providers, images may be classified alongside the given content by passing them as the second argument to the `of` method. Images may be created using the same [file classes used for attachments](#attachments):

```
1use Laravel\Ai\Classification;

2use Laravel\Ai\Classification\Boolean;

3use Laravel\Ai\Files\Image;

4

5$result = Classification::of('Inspect the product in this photo.', [

6    Image::fromPath($photo),

7])

8    ->question('damaged', new Boolean('Does the product have visible damage?'))

9    ->classify(provider: 'openai');

use Laravel\Ai\Classification;
use Laravel\Ai\Classification\Boolean;
use Laravel\Ai\Files\Image;

$result = Classification::of('Inspect the product in this photo.', [
    Image::fromPath($photo),
])
    ->question('damaged', new Boolean('Does the product have visible damage?'))
    ->classify(provider: 'openai');
```

To refer to a specific image in a question, attach images with string keys. The SDK sends each image's key to the provider as its name:

```
1$result = Classification::of('Inspect the products in these photos.', [

2    'front' => Image::fromPath($front),

3    'back' => Image::fromPath($back),

4])

5    ->question('damaged', new Boolean('Is the product in `front` or `back` damaged?'))

6    ->classify();

$result = Classification::of('Inspect the products in these photos.', [
    'front' => Image::fromPath($front),
    'back' => Image::fromPath($back),
])
    ->question('damaged', new Boolean('Is the product in `front` or `back` damaged?'))
    ->classify();
```

### [Yes or No Decisions](#yes-or-no-decisions)

For a single yes or no decision, you may use the `decide` method available via Laravel's `Stringable` class, which returns a boolean instead of a full response. You may describe what a "yes" and a "no" mean, and specify the probability the answer must reach, which defaults to `0.5`:

```
1use Illuminate\Support\Str;

2

3if (Str::of($message)->decide('Is this spam?')) {

4    // ...

5}

6

7$spam = Str::of($message)->decide('Is this spam?', criteria: [

8    'true' => 'Unsolicited bulk mail.',

9    'false' => 'A genuine message from a customer.',

10], threshold: 0.9);

use Illuminate\Support\Str;

if (Str::of($message)->decide('Is this spam?')) {
    // ...
}

$spam = Str::of($message)->decide('Is this spam?', criteria: [
    'true' => 'Unsolicited bulk mail.',
    'false' => 'A genuine message from a customer.',
], threshold: 0.9);
```

### [Choosing From Collections](#choosing-from-collections)

To quickly choose a single item from a list of options, you may use the `decide` method available on Laravel's `Collection` class. The method accepts a question and the text to classify, and returns the chosen item from the collection.

Collections of strings and enums may be used directly, while other items should be named using the `by` argument. You may also provide a field, array of fields, or closure via the `describe` argument to give the model more detail about each option:

```
1$department = collect(['billing', 'technical', 'sales'])

2    ->decide('Which team should handle this request?', $ticket->body);

3

4$priority = collect(Priority::cases())

5    ->decide('How urgent is this request?', $ticket->body);

6

7$department = Department::all()->decide(

8    'Which department should handle this request?',

9    $ticket->body,

10    by: 'name',

11    describe: 'description',

12);

$department = collect(['billing', 'technical', 'sales'])
    ->decide('Which team should handle this request?', $ticket->body);

$priority = collect(Priority::cases())
    ->decide('How urgent is this request?', $ticket->body);

$department = Department::all()->decide(
    'Which department should handle this request?',
    $ticket->body,
    by: 'name',
    describe: 'description',
);
```

The description defined via the `describe` argument serves as the criteria the model uses to determine whether the text matches that option, which is helpful when an option's name alone is ambiguous. When a closure is provided to the `describe` argument, it receives each item and should return a string or array describing it:

```
1$priority = collect(Priority::cases())->decide(

2    'How urgent is this request?',

3    $ticket->body,

4    describe: fn (Priority $priority) => $priority->description(),

5);

$priority = collect(Priority::cases())->decide(
    'How urgent is this request?',
    $ticket->body,
    describe: fn (Priority $priority) => $priority->description(),
);
```

When a collection of strings is keyed by strings, its keys are used as the options and its values as their descriptions, and the chosen key is returned. If a `threshold` is given and the probability of the chosen option is below it, `null` is returned:

```
1$department = collect([

2    'billing' => 'Payments, invoices, and refunds',

3    'technical' => 'Bugs, outages, and integrations',

4])->decide('Which team should handle this request?', $ticket->body, threshold: 0.6) ?? 'triage';

$department = collect([
    'billing' => 'Payments, invoices, and refunds',
    'technical' => 'Bugs, outages, and integrations',
])->decide('Which team should handle this request?', $ticket->body, threshold: 0.6) ?? 'triage';
```

## [Files](#files)

The `Laravel\Ai\Files` class or the individual file classes may be used to store files with your AI provider for later use in conversations. This is useful for large documents or files you want to reference multiple times without re-uploading:

```
1use Laravel\Ai\Files\Document;

2use Laravel\Ai\Files\Image;

3

4// Store a file from a local path...

5$response = Document::fromPath('/home/laravel/document.pdf')->put();

6$response = Image::fromPath('/home/laravel/photo.jpg')->put();

7

8// Store a file that is stored on a filesystem disk...

9$response = Document::fromStorage('document.pdf', disk: 'local')->put();

10$response = Image::fromStorage('photo.jpg', disk: 'local')->put();

11

12// Store a file that is stored on a remote URL...

13$response = Document::fromUrl('https://example.com/document.pdf')->put();

14$response = Image::fromUrl('https://example.com/photo.jpg')->put();

15

16return $response->id;

use Laravel\Ai\Files\Document;
use Laravel\Ai\Files\Image;

// Store a file from a local path...
$response = Document::fromPath('/home/laravel/document.pdf')->put();
$response = Image::fromPath('/home/laravel/photo.jpg')->put();

// Store a file that is stored on a filesystem disk...
$response = Document::fromStorage('document.pdf', disk: 'local')->put();
$response = Image::fromStorage('photo.jpg', disk: 'local')->put();

// Store a file that is stored on a remote URL...
$response = Document::fromUrl('https://example.com/document.pdf')->put();
$response = Image::fromUrl('https://example.com/photo.jpg')->put();

return $response->id;
```

You may also store raw content or uploaded files:

```
1use Laravel\Ai\Files;

2use Laravel\Ai\Files\Document;

3

4// Store raw content...

5$stored = Document::fromString('Hello, World!', 'text/plain')->put();

6

7// Store an uploaded file...

8$stored = Document::fromUpload($request->file('document'))->put();

use Laravel\Ai\Files;
use Laravel\Ai\Files\Document;

// Store raw content...
$stored = Document::fromString('Hello, World!', 'text/plain')->put();

// Store an uploaded file...
$stored = Document::fromUpload($request->file('document'))->put();
```

Once a file has been stored, you may reference the file when generating text via agents instead of re-uploading the file:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Files;

3

4$response = (new SalesCoach)->prompt(

5    'Analyze the attached sales transcript...',

6    attachments: [

7        Files\Document::fromId('file-id') // Attach a stored document...

8    ]

9);

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Files;

$response = (new SalesCoach)->prompt(
    'Analyze the attached sales transcript...',
    attachments: [
        Files\Document::fromId('file-id') // Attach a stored document...
    ]
);
```

To retrieve a previously stored file, use the `get` method on a file instance:

```
1use Laravel\Ai\Files\Document;

2

3$file = Document::fromId('file-id')->get();

4

5$file->id;

6$file->mimeType();

use Laravel\Ai\Files\Document;

$file = Document::fromId('file-id')->get();

$file->id;
$file->mimeType();
```

To delete a file from the provider, use the `delete` method:

```
1Document::fromId('file-id')->delete();

Document::fromId('file-id')->delete();
```

By default, the `Files` class uses the default AI provider configured in your application's `config/ai.php` configuration file. For most operations, you may specify a different provider using the `provider` argument:

```
1$response = Document::fromPath(

2    '/home/laravel/document.pdf'

3)->put(provider: Lab::Anthropic);

$response = Document::fromPath(
    '/home/laravel/document.pdf'
)->put(provider: Lab::Anthropic);
```

You may pass provider-specific upload options using the `withProviderOptions` method. For example, you may set OpenAI's file `purpose`:

```
1use Laravel\Ai\Files\Document;

2

3$response = Document::fromPath('/home/laravel/knowledge.txt')

4    ->withProviderOptions(['purpose' => 'assistants'])

5    ->put();

use Laravel\Ai\Files\Document;

$response = Document::fromPath('/home/laravel/knowledge.txt')
    ->withProviderOptions(['purpose' => 'assistants'])
    ->put();
```

To scope options per provider, pass a closure that receives the current provider:

```
1use Laravel\Ai\Enums\Lab;

2use Laravel\Ai\Files\Document;

3

4$response = Document::fromPath('/home/laravel/training.jsonl')

5    ->withProviderOptions(fn (Lab|string $provider) => match ($provider) {

6        Lab::OpenAI => ['purpose' => 'fine-tune'],

7        default => [],

8    })

9    ->put();

use Laravel\Ai\Enums\Lab;
use Laravel\Ai\Files\Document;

$response = Document::fromPath('/home/laravel/training.jsonl')
    ->withProviderOptions(fn (Lab|string $provider) => match ($provider) {
        Lab::OpenAI => ['purpose' => 'fine-tune'],
        default => [],
    })
    ->put();
```

### [Using Stored Files in Conversations](#using-stored-files-in-conversations)

Once a file has been stored with a provider, you may reference it in agent conversations using the `fromId` method on the `Document` or `Image` classes:

```
1use App\Ai\Agents\DocumentAnalyzer;

2use Laravel\Ai\Files;

3use Laravel\Ai\Files\Document;

4

5$stored = Document::fromPath('/path/to/report.pdf')->put();

6

7$response = (new DocumentAnalyzer)->prompt(

8    'Summarize this document.',

9    attachments: [

10        Document::fromId($stored->id),

11    ],

12);

use App\Ai\Agents\DocumentAnalyzer;
use Laravel\Ai\Files;
use Laravel\Ai\Files\Document;

$stored = Document::fromPath('/path/to/report.pdf')->put();

$response = (new DocumentAnalyzer)->prompt(
    'Summarize this document.',
    attachments: [
        Document::fromId($stored->id),
    ],
);
```

Similarly, stored images may be referenced using the `Image` class:

```
1use Laravel\Ai\Files;

2use Laravel\Ai\Files\Image;

3

4$stored = Image::fromPath('/path/to/photo.jpg')->put();

5

6$response = (new ImageAnalyzer)->prompt(

7    'What is in this image?',

8    attachments: [

9        Image::fromId($stored->id),

10    ],

11);

use Laravel\Ai\Files;
use Laravel\Ai\Files\Image;

$stored = Image::fromPath('/path/to/photo.jpg')->put();

$response = (new ImageAnalyzer)->prompt(
    'What is in this image?',
    attachments: [
        Image::fromId($stored->id),
    ],
);
```

## [Vector Stores](#vector-stores)

Vector stores allow you to create searchable collections of files that can be used for retrieval-augmented generation (RAG). The `Laravel\Ai\Stores` class provides methods for creating, retrieving, and deleting vector stores:

```
1use Laravel\Ai\Stores;

2

3// Create a new vector store...

4$store = Stores::create('Knowledge Base');

5

6// Create a store with additional options...

7$store = Stores::create(

8    name: 'Knowledge Base',

9    description: 'Documentation and reference materials.',

10    expiresWhenIdleFor: days(30),

11);

12

13return $store->id;

use Laravel\Ai\Stores;

// Create a new vector store...
$store = Stores::create('Knowledge Base');

// Create a store with additional options...
$store = Stores::create(
    name: 'Knowledge Base',
    description: 'Documentation and reference materials.',
    expiresWhenIdleFor: days(30),
);

return $store->id;
```

To retrieve an existing vector store by its ID, use the `get` method:

```
1use Laravel\Ai\Stores;

2

3$store = Stores::get('store_id');

4

5$store->id;

6$store->name;

7$store->fileCounts;

8$store->ready;

use Laravel\Ai\Stores;

$store = Stores::get('store_id');

$store->id;
$store->name;
$store->fileCounts;
$store->ready;
```

To delete a vector store, use the `delete` method on the `Stores` class or the store instance:

```
1use Laravel\Ai\Stores;

2

3// Delete by ID...

4Stores::delete('store_id');

5

6// Or delete via a store instance...

7$store = Stores::get('store_id');

8

9$store->delete();

use Laravel\Ai\Stores;

// Delete by ID...
Stores::delete('store_id');

// Or delete via a store instance...
$store = Stores::get('store_id');

$store->delete();
```

### [Adding Files to Stores](#adding-files-to-stores)

Once you have a vector store, you may add [files](#files) to it using the `add` method. Files added to a store are automatically indexed for semantic searching using the [file search provider tool](#file-search):

```
1use Laravel\Ai\Files\Document;

2use Laravel\Ai\Stores;

3

4$store = Stores::get('store_id');

5

6// Add a file that has already been stored with the provider...

7$document = $store->add('file_id');

8$document = $store->add(Document::fromId('file_id'));

9

10// Or, store and add a file in one step...

11$document = $store->add(Document::fromPath('/path/to/document.pdf'));

12$document = $store->add(Document::fromStorage('manual.pdf'));

13$document = $store->add($request->file('document'));

14

15$document->id;

16$document->fileId;

use Laravel\Ai\Files\Document;
use Laravel\Ai\Stores;

$store = Stores::get('store_id');

// Add a file that has already been stored with the provider...
$document = $store->add('file_id');
$document = $store->add(Document::fromId('file_id'));

// Or, store and add a file in one step...
$document = $store->add(Document::fromPath('/path/to/document.pdf'));
$document = $store->add(Document::fromStorage('manual.pdf'));
$document = $store->add($request->file('document'));

$document->id;
$document->fileId;
```

Typically, when adding previously stored files to vector stores, the returned document ID will match the file's previously assigned ID; however, some vector storage providers may return a new, different "document ID". Therefore, it's recommended that you always store both IDs in your database for future reference.

When adding a file to a Gemini store, Laravel waits for the import to finish so that the document is searchable once the call returns. A `Laravel\Ai\Exceptions\AiException` will be thrown if the import fails or exceeds five minutes, so you may wish to add Gemini files from a [queued job](queues.md).

You may attach metadata to files when adding them to a store. This metadata can later be used to filter search results when using the [file search provider tool](#file-search):

```
1$store->add(Document::fromPath('/path/to/document.pdf'), metadata: [

2    'author' => 'Taylor Otwell',

3    'department' => 'Engineering',

4    'year' => 2026,

5]);

$store->add(Document::fromPath('/path/to/document.pdf'), metadata: [
    'author' => 'Taylor Otwell',
    'department' => 'Engineering',
    'year' => 2026,
]);
```

To remove a file from a store, use the `remove` method:

```
1$store->remove('file_id');

$store->remove('file_id');
```

Removing a file from a vector store does not remove it from the provider's [file storage](#files). To remove a file from the vector store and delete it permanently from file storage, use the `deleteFile` argument:

```
1$store->remove('file_abc123', deleteFile: true);

$store->remove('file_abc123', deleteFile: true);
```

## [Usage](#usage)

Every response contains a `usage` property containing the token counts reported by the provider. The input and output counts are totals, so tokens counted as cached or reasoning tokens are also included in the total they belong to:

```
1$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

2

3$response->usage->inputTokens;

4$response->usage->outputTokens;

5$response->usage->totalTokens();

$response = (new SalesCoach)->prompt('Analyze this sales transcript...');

$response->usage->inputTokens;
$response->usage->outputTokens;
$response->usage->totalTokens();
```

Text generation returns a `Laravel\Ai\Responses\Data\TextUsage` instance, which breaks these totals down further. Each of these values will be `null`, rather than `0`, when the provider does not report it:

```
1$response->usage->cacheReadInputTokens; // Subset of the input tokens read from a prompt cache...

2$response->usage->cacheWriteInputTokens; // Subset of the input tokens written to a prompt cache...

3$response->usage->reasoningTokens; // Subset of the output tokens spent on reasoning...

4

5$response->usage->uncachedInputTokens(); // Input tokens that were neither read from nor written to the cache...

$response->usage->cacheReadInputTokens; // Subset of the input tokens read from a prompt cache...
$response->usage->cacheWriteInputTokens; // Subset of the input tokens written to a prompt cache...
$response->usage->reasoningTokens; // Subset of the output tokens spent on reasoning...

$response->usage->uncachedInputTokens(); // Input tokens that were neither read from nor written to the cache...
```

Cache reads, cache writes, and uncached input are billed at different rates, so you should price these three counts separately instead of using the input total alone.

The remaining capabilities return a usage object containing the counts specific to them:

| Capability | Usage object | Adds |
| --- | --- | --- |
| Text, classification | `TextUsage` | Cache read, cache write, and reasoning tokens |
| Images | `ImageUsage` | `imageInputTokens` and `imageOutputTokens` |
| Transcription | `TranscriptionUsage` | `audioSeconds`, the duration of the transcribed audio |
| Reranking | `RerankingUsage` | `searchUnits`, which some providers bill instead of tokens |
| Audio, embeddings | `Usage` |  |

Not every provider reports every count, and counts that a provider does not report will be `null`:

```
1use Laravel\Ai\Image;

2use Laravel\Ai\Transcription;

3

4Image::of('A donut sitting on the kitchen counter')->generate()->usage->imageOutputTokens;

5

6Transcription::fromPath('/home/laravel/meeting.mp3')->generate()->usage->audioSeconds;

use Laravel\Ai\Image;
use Laravel\Ai\Transcription;

Image::of('A donut sitting on the kitchen counter')->generate()->usage->imageOutputTokens;

Transcription::fromPath('/home/laravel/meeting.mp3')->generate()->usage->audioSeconds;
```

## [Failover](#failover)

When prompting or generating other media, you may provide an array of providers / models to automatically failover to a backup provider / model if a service interruption or rate limit is encountered on the primary provider:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Enums\Lab;

3use Laravel\Ai\Image;

4

5$response = (new SalesCoach)->prompt(

6    'Analyze this sales transcript...',

7    provider: [Lab::OpenAI, Lab::Anthropic],

8);

9

10$image = Image::of('A donut sitting on the kitchen counter')

11    ->generate(provider: [Lab::Gemini, Lab::xAI]);

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Enums\Lab;
use Laravel\Ai\Image;

$response = (new SalesCoach)->prompt(
    'Analyze this sales transcript...',
    provider: [Lab::OpenAI, Lab::Anthropic],
);

$image = Image::of('A donut sitting on the kitchen counter')
    ->generate(provider: [Lab::Gemini, Lab::xAI]);
```

Failover only occurs when a `FailoverableException` is thrown — such as a rate limit (`RateLimitedException`), an overloaded or unavailable provider (`ProviderOverloadedException`), or insufficient credits (`InsufficientCreditsException`). Ordinary errors, like a validation or bad request error, will not trigger failover.

When you pass a plain list of providers, such as `[Lab::OpenAI, Lab::Anthropic]`, each provider uses its default model. To specify a particular model for each provider in the failover chain, pass an associative array keyed by the provider, using the `Lab` enum's `value` as the key (enum cases cannot be used directly as PHP array keys):

```
1use Laravel\Ai\Enums\Lab;

2

3$response = (new SalesCoach)->prompt(

4    'Analyze this sales transcript...',

5    provider: [

6        Lab::Gemini->value => 'gemini-3-flash-preview',

7        Lab::DeepSeek->value => 'deepseek-v4-pro',

8    ],

9);

use Laravel\Ai\Enums\Lab;

$response = (new SalesCoach)->prompt(
    'Analyze this sales transcript...',
    provider: [
        Lab::Gemini->value => 'gemini-3-flash-preview',
        Lab::DeepSeek->value => 'deepseek-v4-pro',
    ],
);
```

## [Testing](#testing)

When faking queued image, audio, transcription, or embeddings generation, any `then` callback registered on the queued generation will be invoked with the faked response, allowing you to test the logic contained within the callback. If you would prefer that these callbacks are not invoked, you may fake the queue using `Queue::fake()` as well.

### [Agents](#testing-agents)

To fake an agent's responses during tests, call the `fake` method on the agent class. You may optionally provide an array of responses or a closure:

```
1use App\Ai\Agents\SalesCoach;

2use Laravel\Ai\Prompts\AgentPrompt;

3

4// Automatically generate a fixed response for every prompt...

5SalesCoach::fake();

6

7// Provide a list of prompt responses...

8SalesCoach::fake([

9    'First response',

10    'Second response',

11]);

12

13// Dynamically handle prompt responses based on the incoming prompt...

14SalesCoach::fake(function (AgentPrompt $prompt) {

15    return 'Response for: '.$prompt->prompt;

16});

use App\Ai\Agents\SalesCoach;
use Laravel\Ai\Prompts\AgentPrompt;

// Automatically generate a fixed response for every prompt...
SalesCoach::fake();

// Provide a list of prompt responses...
SalesCoach::fake([
    'First response',
    'Second response',
]);

// Dynamically handle prompt responses based on the incoming prompt...
SalesCoach::fake(function (AgentPrompt $prompt) {
    return 'Response for: '.$prompt->prompt;
});
```

When faking an agent that returns structured output, you may provide arrays as responses. The agent will return a structured response containing the given data:

```
1SalesCoach::fake([

2    ['score' => 87],

3]);

SalesCoach::fake([
    ['score' => 87],
]);
```

You may also fake a response that is awaiting tool approval:

```
1use Laravel\Ai\Approvals\PendingApproval;

2use Laravel\Ai\Responses\AgentResponse;

3

4FileAssistant::fake([

5    AgentResponse::fakeWithPendingApprovals([

6        new PendingApproval(

7            id: 'call_abc',

8            tool: 'DeleteFile',

9            arguments: ['path' => 'invoice.pdf'],

10            reason: 'This will permanently delete a file.',

11        ),

12    ]),

13]);

14

15$response = (new FileAssistant)->prompt('Delete the invoice.');

16

17$response->hasPendingApprovals(); // true

use Laravel\Ai\Approvals\PendingApproval;
use Laravel\Ai\Responses\AgentResponse;

FileAssistant::fake([
    AgentResponse::fakeWithPendingApprovals([
        new PendingApproval(
            id: 'call_abc',
            tool: 'DeleteFile',
            arguments: ['path' => 'invoice.pdf'],
            reason: 'This will permanently delete a file.',
        ),
    ]),
]);

$response = (new FileAssistant)->prompt('Delete the invoice.');

$response->hasPendingApprovals(); // true
```

In addition, you can fake a response that includes reasoning. The fake emits reasoning events, so the reasoning is reported on streamed runs as well:

```
1use Laravel\Ai\Responses\AgentResponse;

2

3SalesCoach::fake([

4    AgentResponse::fakeWithReasoning('They asked about pricing.', 'Plans start at $10.'),

5]);

6

7$response = (new SalesCoach)->stream('What does it cost?');

8

9foreach ($response as $event) {

10    // ...

11}

12

13$response->reasoning; // 'They asked about pricing.'

use Laravel\Ai\Responses\AgentResponse;

SalesCoach::fake([
    AgentResponse::fakeWithReasoning('They asked about pricing.', 'Plans start at $10.'),
]);

$response = (new SalesCoach)->stream('What does it cost?');

foreach ($response as $event) {
    // ...
}

$response->reasoning; // 'They asked about pricing.'
```

When `Agent::fake()` is invoked on an agent that returns structured output and fake output was not explicitly provided, Laravel will automatically generate fake data that matches your agent's defined output schema.

After prompting the agent, you may make assertions about the prompts that were received:

```
1use Laravel\Ai\Prompts\AgentPrompt;

2

3SalesCoach::assertPrompted('Analyze this...');

4

5SalesCoach::assertPrompted(function (AgentPrompt $prompt) {

6    return $prompt->contains('Analyze');

7});

8

9SalesCoach::assertPromptedTimes(3);

10

11SalesCoach::assertNotPrompted('Missing prompt');

12

13SalesCoach::assertNeverPrompted();

use Laravel\Ai\Prompts\AgentPrompt;

SalesCoach::assertPrompted('Analyze this...');

SalesCoach::assertPrompted(function (AgentPrompt $prompt) {
    return $prompt->contains('Analyze');
});

SalesCoach::assertPromptedTimes(3);

SalesCoach::assertNotPrompted('Missing prompt');

SalesCoach::assertNeverPrompted();
```

When asserting an approval continuation, you may inspect the prompt's approval decisions:

```
1use Laravel\Ai\Approvals\Decisions;

2use Laravel\Ai\Prompts\AgentPrompt;

3

4FileAssistant::fake();

5

6(new FileAssistant)->prompt(Decisions::from([

7    'call_abc' => true,

8]));

9

10FileAssistant::assertPrompted(function (AgentPrompt $prompt) {

11    return $prompt->hasApprovalDecisions()

12        && $prompt->approvalDecisions->get('call_abc')->isApproved();

13});

use Laravel\Ai\Approvals\Decisions;
use Laravel\Ai\Prompts\AgentPrompt;

FileAssistant::fake();

(new FileAssistant)->prompt(Decisions::from([
    'call_abc' => true,
]));

FileAssistant::assertPrompted(function (AgentPrompt $prompt) {
    return $prompt->hasApprovalDecisions()
        && $prompt->approvalDecisions->get('call_abc')->isApproved();
});
```

For queued agent invocations, use the queued assertion methods:

```
1use Laravel\Ai\QueuedAgentPrompt;

2

3SalesCoach::assertQueued('Analyze this...');

4

5SalesCoach::assertQueued(function (QueuedAgentPrompt $prompt) {

6    return $prompt->contains('Analyze');

7});

8

9SalesCoach::assertNotQueued('Missing prompt');

10

11SalesCoach::assertNeverQueued();

use Laravel\Ai\QueuedAgentPrompt;

SalesCoach::assertQueued('Analyze this...');

SalesCoach::assertQueued(function (QueuedAgentPrompt $prompt) {
    return $prompt->contains('Analyze');
});

SalesCoach::assertNotQueued('Missing prompt');

SalesCoach::assertNeverQueued();
```

To ensure all agent invocations have a corresponding fake response, you may use `preventStrayPrompts`. If an agent is invoked without a defined fake response, an exception will be thrown:

```
1SalesCoach::fake()->preventStrayPrompts();

SalesCoach::fake()->preventStrayPrompts();
```

### [Images](#testing-images)

Image generations may be faked by invoking the `fake` method on the `Image` class. Once image has been faked, various assertions may be performed against the recorded image generation prompts:

```
1use Laravel\Ai\Image;

2use Laravel\Ai\Prompts\ImagePrompt;

3use Laravel\Ai\Prompts\QueuedImagePrompt;

4

5// Automatically generate a fixed response for every prompt...

6Image::fake();

7

8// Provide a list of prompt responses...

9Image::fake([

10    base64_encode($firstImage),

11    base64_encode($secondImage),

12]);

13

14// Dynamically handle prompt responses based on the incoming prompt...

15Image::fake(function (ImagePrompt $prompt) {

16    return base64_encode('...');

17});

use Laravel\Ai\Image;
use Laravel\Ai\Prompts\ImagePrompt;
use Laravel\Ai\Prompts\QueuedImagePrompt;

// Automatically generate a fixed response for every prompt...
Image::fake();

// Provide a list of prompt responses...
Image::fake([
    base64_encode($firstImage),
    base64_encode($secondImage),
]);

// Dynamically handle prompt responses based on the incoming prompt...
Image::fake(function (ImagePrompt $prompt) {
    return base64_encode('...');
});
```

After generating images, you may make assertions about the prompts that were received:

```
1Image::assertGenerated(function (ImagePrompt $prompt) {

2    return $prompt->contains('sunset') && $prompt->isLandscape();

3});

4

5Image::assertNotGenerated('Missing prompt');

6

7Image::assertNothingGenerated();

Image::assertGenerated(function (ImagePrompt $prompt) {
    return $prompt->contains('sunset') && $prompt->isLandscape();
});

Image::assertNotGenerated('Missing prompt');

Image::assertNothingGenerated();
```

For queued image generations, use the queued assertion methods:

```
1Image::assertQueued(

2    fn (QueuedImagePrompt $prompt) => $prompt->contains('sunset')

3);

4

5Image::assertNotQueued('Missing prompt');

6

7Image::assertNothingQueued();

Image::assertQueued(
    fn (QueuedImagePrompt $prompt) => $prompt->contains('sunset')
);

Image::assertNotQueued('Missing prompt');

Image::assertNothingQueued();
```

To ensure all image generations have a corresponding fake response, you may use `preventStrayImages`. If an image is generated without a defined fake response, an exception will be thrown:

```
1Image::fake()->preventStrayImages();

Image::fake()->preventStrayImages();
```

### [Audio](#testing-audio)

Audio generations may be faked by invoking the `fake` method on the `Audio` class. Once audio has been faked, various assertions may be performed against the recorded audio generation prompts:

```
1use Laravel\Ai\Audio;

2use Laravel\Ai\Prompts\AudioPrompt;

3use Laravel\Ai\Prompts\QueuedAudioPrompt;

4

5// Automatically generate a fixed response for every prompt...

6Audio::fake();

7

8// Provide a list of prompt responses...

9Audio::fake([

10    base64_encode($firstAudio),

11    base64_encode($secondAudio),

12]);

13

14// Dynamically handle prompt responses based on the incoming prompt...

15Audio::fake(function (AudioPrompt $prompt) {

16    return base64_encode('...');

17});

use Laravel\Ai\Audio;
use Laravel\Ai\Prompts\AudioPrompt;
use Laravel\Ai\Prompts\QueuedAudioPrompt;

// Automatically generate a fixed response for every prompt...
Audio::fake();

// Provide a list of prompt responses...
Audio::fake([
    base64_encode($firstAudio),
    base64_encode($secondAudio),
]);

// Dynamically handle prompt responses based on the incoming prompt...
Audio::fake(function (AudioPrompt $prompt) {
    return base64_encode('...');
});
```

After generating audio, you may make assertions about the prompts that were received:

```
1Audio::assertGenerated(function (AudioPrompt $prompt) {

2    return $prompt->contains('Hello') && $prompt->isFemale();

3});

4

5Audio::assertNotGenerated('Missing prompt');

6

7Audio::assertNothingGenerated();

Audio::assertGenerated(function (AudioPrompt $prompt) {
    return $prompt->contains('Hello') && $prompt->isFemale();
});

Audio::assertNotGenerated('Missing prompt');

Audio::assertNothingGenerated();
```

For queued audio generations, use the queued assertion methods:

```
1Audio::assertQueued(

2    fn (QueuedAudioPrompt $prompt) => $prompt->contains('Hello')

3);

4

5Audio::assertNotQueued('Missing prompt');

6

7Audio::assertNothingQueued();

Audio::assertQueued(
    fn (QueuedAudioPrompt $prompt) => $prompt->contains('Hello')
);

Audio::assertNotQueued('Missing prompt');

Audio::assertNothingQueued();
```

To ensure all audio generations have a corresponding fake response, you may use `preventStrayAudio`. If audio is generated without a defined fake response, an exception will be thrown:

```
1Audio::fake()->preventStrayAudio();

Audio::fake()->preventStrayAudio();
```

### [Transcriptions](#testing-transcriptions)

Transcription generations may be faked by invoking the `fake` method on the `Transcription` class. Once transcription has been faked, various assertions may be performed against the recorded transcription generation prompts:

```
1use Laravel\Ai\Transcription;

2use Laravel\Ai\Prompts\TranscriptionPrompt;

3use Laravel\Ai\Prompts\QueuedTranscriptionPrompt;

4

5// Automatically generate a fixed response for every prompt...

6Transcription::fake();

7

8// Provide a list of prompt responses...

9Transcription::fake([

10    'First transcription text.',

11    'Second transcription text.',

12]);

13

14// Dynamically handle prompt responses based on the incoming prompt...

15Transcription::fake(function (TranscriptionPrompt $prompt) {

16    return 'Transcribed text...';

17});

use Laravel\Ai\Transcription;
use Laravel\Ai\Prompts\TranscriptionPrompt;
use Laravel\Ai\Prompts\QueuedTranscriptionPrompt;

// Automatically generate a fixed response for every prompt...
Transcription::fake();

// Provide a list of prompt responses...
Transcription::fake([
    'First transcription text.',
    'Second transcription text.',
]);

// Dynamically handle prompt responses based on the incoming prompt...
Transcription::fake(function (TranscriptionPrompt $prompt) {
    return 'Transcribed text...';
});
```

After generating transcriptions, you may make assertions about the prompts that were received:

```
1Transcription::assertGenerated(function (TranscriptionPrompt $prompt) {

2    return $prompt->language === 'en' && $prompt->isDiarized();

3});

4

5Transcription::assertNotGenerated(

6    fn (TranscriptionPrompt $prompt) => $prompt->language === 'fr'

7);

8

9Transcription::assertNothingGenerated();

Transcription::assertGenerated(function (TranscriptionPrompt $prompt) {
    return $prompt->language === 'en' && $prompt->isDiarized();
});

Transcription::assertNotGenerated(
    fn (TranscriptionPrompt $prompt) => $prompt->language === 'fr'
);

Transcription::assertNothingGenerated();
```

For queued transcription generations, use the queued assertion methods:

```
1Transcription::assertQueued(

2    fn (QueuedTranscriptionPrompt $prompt) => $prompt->isDiarized()

3);

4

5Transcription::assertNotQueued(

6    fn (QueuedTranscriptionPrompt $prompt) => $prompt->language === 'fr'

7);

8

9Transcription::assertNothingQueued();

Transcription::assertQueued(
    fn (QueuedTranscriptionPrompt $prompt) => $prompt->isDiarized()
);

Transcription::assertNotQueued(
    fn (QueuedTranscriptionPrompt $prompt) => $prompt->language === 'fr'
);

Transcription::assertNothingQueued();
```

To ensure all transcription generations have a corresponding fake response, you may use `preventStrayTranscriptions`. If a transcription is generated without a defined fake response, an exception will be thrown:

```
1Transcription::fake()->preventStrayTranscriptions();

Transcription::fake()->preventStrayTranscriptions();
```

### [Embeddings](#testing-embeddings)

Embeddings generations may be faked by invoking the `fake` method on the `Embeddings` class. Once embeddings has been faked, various assertions may be performed against the recorded embeddings generation prompts:

```
1use Laravel\Ai\Embeddings;

2use Laravel\Ai\Prompts\EmbeddingsPrompt;

3use Laravel\Ai\Prompts\QueuedEmbeddingsPrompt;

4

5// Automatically generate fake embeddings of the proper dimensions for every prompt...

6Embeddings::fake();

7

8// Provide a list of prompt responses...

9Embeddings::fake([

10    [$firstEmbeddingVector],

11    [$secondEmbeddingVector],

12]);

13

14// Dynamically handle prompt responses based on the incoming prompt...

15Embeddings::fake(function (EmbeddingsPrompt $prompt) {

16    return array_map(

17        fn () => Embeddings::fakeEmbedding($prompt->dimensions),

18        $prompt->inputs

19    );

20});

use Laravel\Ai\Embeddings;
use Laravel\Ai\Prompts\EmbeddingsPrompt;
use Laravel\Ai\Prompts\QueuedEmbeddingsPrompt;

// Automatically generate fake embeddings of the proper dimensions for every prompt...
Embeddings::fake();

// Provide a list of prompt responses...
Embeddings::fake([
    [$firstEmbeddingVector],
    [$secondEmbeddingVector],
]);

// Dynamically handle prompt responses based on the incoming prompt...
Embeddings::fake(function (EmbeddingsPrompt $prompt) {
    return array_map(
        fn () => Embeddings::fakeEmbedding($prompt->dimensions),
        $prompt->inputs
    );
});
```

After generating embeddings, you may make assertions about the prompts that were received:

```
1Embeddings::assertGenerated(function (EmbeddingsPrompt $prompt) {

2    return $prompt->contains('Laravel') && $prompt->dimensions === 1536;

3});

4

5Embeddings::assertNotGenerated(

6    fn (EmbeddingsPrompt $prompt) => $prompt->contains('Other')

7);

8

9Embeddings::assertNothingGenerated();

Embeddings::assertGenerated(function (EmbeddingsPrompt $prompt) {
    return $prompt->contains('Laravel') && $prompt->dimensions === 1536;
});

Embeddings::assertNotGenerated(
    fn (EmbeddingsPrompt $prompt) => $prompt->contains('Other')
);

Embeddings::assertNothingGenerated();
```

For queued embeddings generations, use the queued assertion methods:

```
1Embeddings::assertQueued(

2    fn (QueuedEmbeddingsPrompt $prompt) => $prompt->contains('Laravel')

3);

4

5Embeddings::assertNotQueued(

6    fn (QueuedEmbeddingsPrompt $prompt) => $prompt->contains('Other')

7);

8

9Embeddings::assertNothingQueued();

Embeddings::assertQueued(
    fn (QueuedEmbeddingsPrompt $prompt) => $prompt->contains('Laravel')
);

Embeddings::assertNotQueued(
    fn (QueuedEmbeddingsPrompt $prompt) => $prompt->contains('Other')
);

Embeddings::assertNothingQueued();
```

To ensure all embeddings generations have a corresponding fake response, you may use `preventStrayEmbeddings`. If embeddings are generated without a defined fake response, an exception will be thrown:

```
1Embeddings::fake()->preventStrayEmbeddings();

Embeddings::fake()->preventStrayEmbeddings();
```

### [Reranking](#testing-reranking)

Reranking operations may be faked by invoking the `fake` method on the `Reranking` class:

```
1use Laravel\Ai\Reranking;

2use Laravel\Ai\Prompts\RerankingPrompt;

3use Laravel\Ai\Responses\Data\RankedDocument;

4

5// Automatically generate a fake reranked responses...

6Reranking::fake();

7

8// Provide custom responses...

9Reranking::fake([

10    [

11        new RankedDocument(index: 0, document: 'First', score: 0.95),

12        new RankedDocument(index: 1, document: 'Second', score: 0.80),

13    ],

14]);

use Laravel\Ai\Reranking;
use Laravel\Ai\Prompts\RerankingPrompt;
use Laravel\Ai\Responses\Data\RankedDocument;

// Automatically generate a fake reranked responses...
Reranking::fake();

// Provide custom responses...
Reranking::fake([
    [
        new RankedDocument(index: 0, document: 'First', score: 0.95),
        new RankedDocument(index: 1, document: 'Second', score: 0.80),
    ],
]);
```

After reranking, you may make assertions about the operations that were performed:

```
1Reranking::assertReranked(function (RerankingPrompt $prompt) {

2    return $prompt->contains('Laravel') && $prompt->limit === 5;

3});

4

5Reranking::assertNotReranked(

6    fn (RerankingPrompt $prompt) => $prompt->contains('Django')

7);

8

9Reranking::assertNothingReranked();

Reranking::assertReranked(function (RerankingPrompt $prompt) {
    return $prompt->contains('Laravel') && $prompt->limit === 5;
});

Reranking::assertNotReranked(
    fn (RerankingPrompt $prompt) => $prompt->contains('Django')
);

Reranking::assertNothingReranked();
```

### [Classification](#testing-classification)

Classification may be faked by invoking the `fake` method on the `Classification` class. If no custom responses are provided, Laravel will automatically generate answers that match the shape of each question:

```
1use Laravel\Ai\Classification;

2use Laravel\Ai\Prompts\ClassificationPrompt;

3use Laravel\Ai\Responses\Data\BooleanAnswer;

4use Laravel\Ai\Responses\Data\ChoiceAnswer;

5

6// Automatically generate fake answers...

7Classification::fake();

8

9// Provide answers for specific questions...

10Classification::fake([

11    [

12        'urgent' => new BooleanAnswer(0.94),

13        'department' => new ChoiceAnswer('technical', [

14            'billing' => 0.08,

15            'technical' => 0.87,

16            'sales' => 0.05,

17        ], confidence: 0.82),

18    ],

19]);

20

21// Build answers from the prompt...

22Classification::fake(fn (ClassificationPrompt $prompt) => [

23    'urgent' => new BooleanAnswer($prompt->contains('ASAP') ? 1.0 : 0.0),

24]);

use Laravel\Ai\Classification;
use Laravel\Ai\Prompts\ClassificationPrompt;
use Laravel\Ai\Responses\Data\BooleanAnswer;
use Laravel\Ai\Responses\Data\ChoiceAnswer;

// Automatically generate fake answers...
Classification::fake();

// Provide answers for specific questions...
Classification::fake([
    [
        'urgent' => new BooleanAnswer(0.94),
        'department' => new ChoiceAnswer('technical', [
            'billing' => 0.08,
            'technical' => 0.87,
            'sales' => 0.05,
        ], confidence: 0.82),
    ],
]);

// Build answers from the prompt...
Classification::fake(fn (ClassificationPrompt $prompt) => [
    'urgent' => new BooleanAnswer($prompt->contains('ASAP') ? 1.0 : 0.0),
]);
```

Questions that are omitted from a fake response will still receive a generated answer, so your tests only need to provide the answers they make assertions against.

After classifying, you may make assertions about the operations that were performed:

```
1Classification::assertClassified(function (ClassificationPrompt $prompt) {

2    return $prompt->contains('refund') && $prompt->asks('department');

3});

4

5Classification::assertNotClassified(

6    fn (ClassificationPrompt $prompt) => $prompt->asks('sentiment')

7);

8

9Classification::assertNothingClassified();

Classification::assertClassified(function (ClassificationPrompt $prompt) {
    return $prompt->contains('refund') && $prompt->asks('department');
});

Classification::assertNotClassified(
    fn (ClassificationPrompt $prompt) => $prompt->asks('sentiment')
);

Classification::assertNothingClassified();
```

### [Files](#testing-files)

File operations may be faked by invoking the `fake` method on the `Files` class:

```
1use Laravel\Ai\Files;

2

3Files::fake();

use Laravel\Ai\Files;

Files::fake();
```

Once file operations have been faked, you may make assertions about the uploads and deletions that occurred:

```
1use Laravel\Ai\Contracts\Files\StorableFile;

2use Laravel\Ai\Files\Document;

3

4// Store files...

5Document::fromString('Hello, Laravel!', mimeType: 'text/plain')

6    ->as('hello.txt')

7    ->put();

8

9// Make assertions...

10Files::assertStored(fn (StorableFile $file) =>

11    (string) $file === 'Hello, Laravel!' &&

12        $file->mimeType() === 'text/plain'

13);

14

15Files::assertNotStored(fn (StorableFile $file) =>

16    (string) $file === 'Hello, World!'

17);

18

19Files::assertNothingStored();

use Laravel\Ai\Contracts\Files\StorableFile;
use Laravel\Ai\Files\Document;

// Store files...
Document::fromString('Hello, Laravel!', mimeType: 'text/plain')
    ->as('hello.txt')
    ->put();

// Make assertions...
Files::assertStored(fn (StorableFile $file) =>
    (string) $file === 'Hello, Laravel!' &&
        $file->mimeType() === 'text/plain'
);

Files::assertNotStored(fn (StorableFile $file) =>
    (string) $file === 'Hello, World!'
);

Files::assertNothingStored();
```

For asserting against file deletions, you may pass a file ID:

```
1Files::assertDeleted('file-id');

2Files::assertNotDeleted('file-id');

3Files::assertNothingDeleted();

Files::assertDeleted('file-id');
Files::assertNotDeleted('file-id');
Files::assertNothingDeleted();
```

### [Vector Stores](#testing-vector-stores)

Vector store operations may be faked by invoking the `fake` method on the `Stores` class. Faking stores will also fake [file operations](#files) automatically:

```
1use Laravel\Ai\Stores;

2

3Stores::fake();

use Laravel\Ai\Stores;

Stores::fake();
```

Once store operations have been faked, you may make assertions about the stores that were created or deleted:

```
1use Laravel\Ai\Stores;

2

3// Create store...

4$store = Stores::create('Knowledge Base');

5

6// Make assertions...

7Stores::assertCreated('Knowledge Base');

8

9Stores::assertCreated(fn (string $name, ?string $description) =>

10    $name === 'Knowledge Base'

11);

12

13Stores::assertNotCreated('Other Store');

14

15Stores::assertNothingCreated();

use Laravel\Ai\Stores;

// Create store...
$store = Stores::create('Knowledge Base');

// Make assertions...
Stores::assertCreated('Knowledge Base');

Stores::assertCreated(fn (string $name, ?string $description) =>
    $name === 'Knowledge Base'
);

Stores::assertNotCreated('Other Store');

Stores::assertNothingCreated();
```

For asserting against store deletions, you may provide the store ID:

```
1Stores::assertDeleted('store_id');

2Stores::assertNotDeleted('other_store_id');

3Stores::assertNothingDeleted();

Stores::assertDeleted('store_id');
Stores::assertNotDeleted('other_store_id');
Stores::assertNothingDeleted();
```

To assert files were added or removed from a store, use the assertion methods on a given `Store` instance:

```
1Stores::fake();

2

3$store = Stores::get('store_id');

4

5// Add / remove files...

6$store->add('added_id');

7$store->remove('removed_id');

8

9// Make assertions...

10$store->assertAdded('added_id');

11$store->assertRemoved('removed_id');

12

13$store->assertNotAdded('other_file_id');

14$store->assertNotRemoved('other_file_id');

Stores::fake();

$store = Stores::get('store_id');

// Add / remove files...
$store->add('added_id');
$store->remove('removed_id');

// Make assertions...
$store->assertAdded('added_id');
$store->assertRemoved('removed_id');

$store->assertNotAdded('other_file_id');
$store->assertNotRemoved('other_file_id');
```

If a file is stored in the provider's [file storage](#files) and added to a vector store in the same request, you may not know the file's provider ID. In this case, you can pass a closure to the `assertAdded` method to assert against the content of the added file:

```
1use Laravel\Ai\Contracts\Files\StorableFile;

2use Laravel\Ai\Files\Document;

3

4$store->add(Document::fromString('Hello, World!', 'text/plain')->as('hello.txt'));

5

6$store->assertAdded(fn (StorableFile $file) => $file->name() === 'hello.txt');

7$store->assertAdded(fn (StorableFile $file) => $file->content() === 'Hello, World!');

use Laravel\Ai\Contracts\Files\StorableFile;
use Laravel\Ai\Files\Document;

$store->add(Document::fromString('Hello, World!', 'text/plain')->as('hello.txt'));

$store->assertAdded(fn (StorableFile $file) => $file->name() === 'hello.txt');
$store->assertAdded(fn (StorableFile $file) => $file->content() === 'Hello, World!');
```

## [Events](#events)

The Laravel AI SDK dispatches a variety of [events](events.md), including:

- `AddingFileToStore`
- `AddingFileToStoreFailed`
- `AgentFailed`
- `AgentFailedOver`
- `AgentPrompted`
- `AgentStreamed`
- `AudioFailed`
- `AudioGenerated`
- `ClassificationFailed`
- `Classified`
- `Classifying`
- `CreatingStore`
- `CreatingStoreFailed`
- `EmbeddingsFailed`
- `EmbeddingsGenerated`
- `FileAddedToStore`
- `FileDeleted`
- `FileRemovedFromStore`
- `FileStored`
- `GeneratingAudio`
- `GeneratingEmbeddings`
- `GeneratingImage`
- `GeneratingTranscription`
- `ImageFailed`
- `ImageGenerated`
- `InvokingTool`
- `PromptingAgent`
- `ProviderFailedOver`
- `RemovingFileFromStore`
- `RemovingFileFromStoreFailed`
- `Reranked`
- `Reranking`
- `RerankingFailed`
- `StartingStep`
- `StepCompleted`
- `StepFailed`
- `StoreCreated`
- `StoreDeleted`
- `StoringFile`
- `StoringFileFailed`
- `StreamingAgent`
- `ToolApprovalRequested`
- `ToolApprovalResolved`
- `ToolFailed`
- `ToolInvoked`
- `TranscriptionFailed`
- `TranscriptionGenerated`

You can listen to any of these events to log or store AI SDK usage information.

Copy as markdown

### On this page

- [Introduction](#introduction)
- [Installation](#installation)
  - [Configuration](#configuration)
  - [Custom Base URLs](#custom-base-urls)
  - [OpenAI-Compatible Providers](#openai-compatible-providers)
  - [On-Demand Providers](#on-demand-providers)
  - [Provider Support](#provider-support)
- [Agents](#agents)
  - [Prompting](#prompting)
  - [Conversation Context](#conversation-context)
  - [Structured Output](#structured-output)
  - [Attachments](#attachments)
  - [Streaming](#streaming)
  - [Broadcasting](#broadcasting)
  - [Queueing](#queueing)
  - [Tools](#tools)
  - [Deferred Tool Loading](#deferred-tool-loading)
  - [File Storage Tools](#file-storage-tools)
  - [MCP Tools](#mcp-tools)
  - [Skills](#skills)
  - [Provider Tools](#provider-tools)
  - [Sub-Agents](#sub-agents)
  - [Middleware](#middleware)
  - [Anonymous Agents](#anonymous-agents)
  - [Agent Configuration](#agent-configuration)
  - [Provider Options](#provider-options)
  - [Prompt Caching](#prompt-caching)
- [Human Tool Approval](#human-tool-approval)
  - [Complete Approval Flow](#complete-approval-flow)
- [Images](#images)
- [Audio (TTS)](#audio)
- [Transcription (STT)](#transcription)
- [Text Summarization](#text-summarization)
- [Embeddings](#embeddings)
  - [Multimodal Embeddings](#multimodal-embeddings)
  - [Querying Embeddings](#querying-embeddings)
  - [Caching Embeddings](#caching-embeddings)
- [Reranking](#reranking)
  - [Reranking Collections](#reranking-collections)
- [Classification](#classification)
  - [Classifying Images](#classifying-images)
  - [Yes or No Decisions](#yes-or-no-decisions)
  - [Choosing From Collections](#choosing-from-collections)
- [Files](#files)
  - [Using Stored Files in Conversations](#using-stored-files-in-conversations)
- [Vector Stores](#vector-stores)
  - [Adding Files to Stores](#adding-files-to-stores)
- [Usage](#usage)
- [Failover](#failover)
- [Testing](#testing)
  - [Agents](#testing-agents)
  - [Images](#testing-images)
  - [Audio](#testing-audio)
  - [Transcriptions](#testing-transcriptions)
  - [Embeddings](#testing-embeddings)
  - [Reranking](#testing-reranking)
  - [Classification](#testing-classification)
  - [Files](#testing-files)
  - [Vector Stores](#testing-vector-stores)
- [Events](#events)

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

- [Curotec](https://laravel.com/partners/curotec)
- [byte5](https://laravel.com/partners/byte5)
- [Jump24](https://laravel.com/partners/jump24)
- [CACI Limited](https://laravel.com/partners/caci-limited)
- [Pixel](https://laravel.com/partners/pixel)
- [UCodeSoft](https://laravel.com/partners/ucodesoft)
- [Steadfast Collective](https://laravel.com/partners/steadfast-collective)
- [Redberry](https://laravel.com/partners/redberry)
- [Threadable](https://laravel.com/partners/threadable)
- [Vehikl](https://laravel.com/partners/vehikl)
- [See All](https://laravel.com/partners)

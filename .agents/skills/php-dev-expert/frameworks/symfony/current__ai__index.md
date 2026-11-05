# Symfony AI Documentation (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/ai/index.html

---

# Symfony AI Documentation

[Edit this page](https://github.com/symfony/ai/edit/main//docs/index.rst)

Symfony AI is a set of components that integrate AI capabilities into PHP applications,
providing a unified interface to work with various AI platforms like OpenAI, Anthropic,
Google Gemini, Azure, and more.

## [Getting Started](#getting-started "Permalink to this headline")

Symfony AI consists of several components and bundles that work together to bring
AI capabilities to your application:

- [Platform Component](current__ai__components__platform.md): Unified interface to various AI models and providers
- [Agent Component](current__ai__components__agent.md): Framework for building AI agents with tools and workflows
- [Store Component](current__ai__components__store.md): Data storage abstraction for vector databases and RAG applications
- [Mate Component](current__ai__components__mate.md): CLI that gives coding agents project-aware tools for your application
- [AI Bundle](current__ai__bundles__ai-bundle.md): Symfony integration bringing all components together
- [MCP Bundle](current__ai__bundles__mcp-bundle.md): Integration for the Model Context Protocol SDK

## [Quick Start](#quick-start "Permalink to this headline")

Install the AI Bundle to get started with Symfony AI, together with the Agent
component used in the example below:

```
1
```

```
$ composer require symfony/ai-bundle symfony/ai-agent
```

Configure your AI platform:

```
1
2
3
4
5
6
7
8
```

```
# config/packages/ai.yaml
ai:
    platform:
        openai:
            api_key: '%env(OPENAI_API_KEY)%'
    agent:
        default:
            model: 'gpt-4o-mini'
```

Use the agent in your service:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
```

```
namespace App\Agent;

use Symfony\AI\Agent\AgentInterface;
use Symfony\AI\Platform\Message\Message;
use Symfony\AI\Platform\Message\MessageBag;

final readonly class ChatService
{
    public function __construct(
        private AgentInterface $agent,
    ) {
    }

    public function chat(string $userMessage): string
    {
        $messages = new MessageBag(
            Message::forSystem('You are a helpful assistant.'),
            Message::ofUser($userMessage),
        );

        $result = $this->agent->call($messages);

        return $result->getContent();
    }
}
```

## [Key Features](#key-features "Permalink to this headline")

**Multi-Platform Support**
:   Connect to OpenAI, Anthropic Claude, Google Gemini, Azure OpenAI, AWS Bedrock,
    Mistral, Ollama, and many more platforms with a unified interface.

**Tool Calling**
:   Extend your agents with custom tools to interact with external APIs, databases,
    and services. Built-in tools available for common tasks.

**Retrieval Augmented Generation (RAG)**
:   Build context-aware applications using vector stores with support for
    ChromaDB, Pinecone, Weaviate, MongoDB Atlas, and more.

**Structured Output**
:   Extract structured data from unstructured text using PHP classes or array schemas.

**Multi-Modal Support**
:   Process text, images, audio, and other content types with compatible models.

**Streaming Support**
:   Stream responses from AI models for real-time user experiences.

**Memory Management**
:   Add contextual memory to agents for personalized conversations.

**Testing Tools**
:   Mock agents and platforms for reliable testing without external API calls.

## [Documentation](#documentation "Permalink to this headline")

- [Components](current__ai__components__index.md)
- [Bundles](current__ai__bundles__index.md)
- [Cookbook](current__ai__cookbook__index.md)
  - [Getting Started Guides](current__ai__cookbook__index.md#getting-started-guides)
  - [Symfony Integration](current__ai__cookbook__index.md#symfony-integration)
  - [Agents & Tools](current__ai__cookbook__index.md#agents-tools)
  - [Memory & Context Management](current__ai__cookbook__index.md#memory-context-management)
  - [Platform Features](current__ai__cookbook__index.md#platform-features)
  - [Retrieval Augmented Generation](current__ai__cookbook__index.md#retrieval-augmented-generation)
  - [Model Context Protocol](current__ai__cookbook__index.md#model-context-protocol)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version

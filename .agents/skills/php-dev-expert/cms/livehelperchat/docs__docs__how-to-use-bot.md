# How to use a bot (AI agent builder) | Live Helper chat

> **Fonte / Source:** https://doc.livehelperchat.com/docs/how-to-use-bot

---

On this page

Live Helper Chat is a visual **AI agent builder** with a bot interface. You build an agent from triggers, events and actions, and the LHC bot engine acts as the **harness** that runs it and talks to the AI service of your choice.

## AI agents, harness and bots - terminology[​](#ai-agents-harness-and-bots---terminology "Direct link to AI agents, harness and bots - terminology")

Throughout this documentation the following terms are used:

| Term | Meaning |
| --- | --- |
| **AI agent** | The component that decides what happens next: a model (LLM) combined with instructions, tools and conversation state. |
| **Harness** | The runtime that drives the agent. It receives events, keeps conversation state, calls the model, executes the returned actions/tool calls and delivers replies to the visitor. In Live Helper Chat the bot engine is the harness. |
| **Bot** | The Live Helper Chat side definition and interface of an agent: trigger groups, events, actions and the visual builder. Creating a bot means defining the agent the harness runs. |
| **Bot builder** | The visual editor (bot list -> bot -> triggers) used to build an agent without coding. |
| **Tool / action** | Everything the agent can do besides sending a reply: send a predefined block, transfer to an operator, collect information, send mail, call a REST API, execute JavaScript, render an iframe, and so on. These are the agent's tools. |
| **Memory / state** | Conversation scoped data the harness keeps for the agent between messages: chat variables, collected attributes, the bot workflow state and identifiers passed to an external AI service (for example a `uuid` per conversation). |
| **Model provider** | The third party or self hosted service that performs the reasoning and generation: OpenAI, Gemini, DeepSeek, Ollama, Rasa, n8n, your own REST API, and so on. |

In short:

- **Live Helper Chat = builder + harness + agent/chat interface.**
- **Your AI service (or LHC's built-in, rule based triggers) = the agent's brain.**
- **A bot = the agent configuration you build in Live Helper Chat.**

Because Live Helper Chat owns the harness, you can swap the model provider at any time without rebuilding the agent. The agent keeps the same triggers, tools, memory and escalation rules to human operators.

## Key features[​](#key-features "Direct link to Key features")

Key features include:

- Extensions with custom information collection capabilities ([collecting information](docs__docs__bot__collecting-information.md)).
- AI agents that can match text or quick reply buttons, enabling navigation-style workflows, use tools (actions) and escalate to human operators.
- AI Integrations: connect any model provider or third-party API.
- [Rasa integration (chatbot)](docs__docs__bot__rasa-integration.md)
- [Rasa integration (FAQ)](docs__docs__bot__rasa-faq.md)
- [Rasa integration (intent)](docs__docs__bot__rasa-integration-intent.md)
- [DeepPavlov (Sentiment analysis)](docs__docs__bot__sentiment-analysis.md)
- [DeepPavlov (Sentiment analysis per message)](docs__docs__bot__sentiment-analysis-per-message.md)
- [DeepPavlov (FAQ)](docs__docs__bot__deeppavlov-faq.md)
- [Insult detection](https://github.com/LiveHelperChat/lhcinsult)

## How to use[​](#how-to-use "Direct link to How to use")

1. Navigate to:

   > System -> Live Helper Configuration -> Bot list
2. Create a bot. After saving the bot, return to the bot list and click the bot's name.
3. To activate the bot, edit a department and choose the bot in the department edit window.

The dashboard also has a "Bot chats" widget. Activating this widget will display bot chats. You may need to go to your account -> visible lists to enable bot chats listing.

## Understanding the agent-building workflow[​](#understanding-the-agent-building-workflow "Direct link to Understanding the agent-building workflow")

- The first step is to create a triggers group. A trigger is an action that initiates a response. Triggers can listen for multiple events, such as specific text inputs (e.g., "Hi," "Hey," "Hello") and button clicks.
- The middle column defines the actions the bot will take when a trigger is matched. Those actions are the tools the agent can use - including the ones that hand the conversation over to a human operator.
- The right column displays what the visitor will see.

![](/assets/images/bot-building-workflow-505764f3980b9fc52e698fda55e3782a.png)

## Types of Bot Replies and Agent Tools[​](#types-of-bot-replies-and-agent-tools "Direct link to Types of Bot Replies and Agent Tools")

- Basic
  - [Send text](docs__docs__bot__bot-text.md)
  - [Collect custom attribute](docs__docs__bot__collecting-information.md)
  - [Button list](docs__docs__bot__bot-button-list.md)
  - [Send list](docs__docs__bot__bot-list.md)
  - [Send predefined block](docs__docs__bot__send-predefined-block.md)
  - [Send Typing](docs__docs__bot__send-typing.md)
  - [Send Video](docs__docs__bot__bot-video.md)
  - [Send Carrousel](docs__docs__bot__bot-carousel.md)
  - [Update Current chat](docs__docs__bot__bot-update-current-chat.md)
  - Intent detection
  - Check for pending intentions
  - [Check for conditions to proceed](docs__docs__bot__check-conditions.md)
  - [Search for default actions on message](docs__docs__bot__match-action.md)
  - [Restrict execution more than defined times](docs__docs__bot__restrict-execution-more-than-defined-times.md)
  - [Alert icon](docs__docs__bot__alert-icon.md)
  - [Send mail](docs__docs__bot__send-mail.md)
- Advanced
  - Collect information
  - Progress
  - Trigger to execute by response
  - [Log action](docs__docs__bot__log-action.md)
  - [Execute Javascript](docs__docs__bot__execute-js.md)
  - Execute action
  - [Execute trigger body](docs__docs__bot__trigger-body.md)
  - [Rest API](docs__docs__bot__rest-api.md)
  - [Sourceless Iframe](docs__docs__bot__iframe.md)

## FAQ[​](#faq "Direct link to FAQ")

### Why am I seeing the offline form instead of a bot?[​](#why-am-i-seeing-the-offline-form-instead-of-a-bot "Direct link to Why am I seeing the offline form instead of a bot?")

I have configured a bot and it's working perfectly. However, I noticed that when there are no operators online and visitors initiate a chat, an offline form appears.

This usually happens because the chat system doesn't automatically know which department the embed code is generated for, especially if you have multiple departments. As a result, it defaults to offline mode.

To resolve this, you can:

- Set the department's online hours to 24/7.
- Ensure that you choose the specific department when generating the embed code.
- Note: Older versions (3.42v) displayed the offline form if the pending chats limit was reached.

### What is a payload?[​](#what-is-a-payload "Direct link to What is a payload?")

A payload defines the event that should be triggered when a button is clicked.

### Does the bot learn over time (like Chatterbot), or does it purely depend on input from an administrator?[​](#does-the-bot-learn-over-time-like-chatterbot-or-does-it-purely-depend-on-input-from-an-administrator "Direct link to Does the bot learn over time (like Chatterbot), or does it purely depend on input from an administrator?")

No, it doesn't learn over time. However, this functionality may be added in the future.

### Can I alternate between a bot and a human operator, or have a human interfere at a later stage?[​](#can-i-alternate-between-a-bot-and-a-human-operator-or-have-a-human-interfere-at-a-later-stage "Direct link to Can I alternate between a bot and a human operator, or have a human interfere at a later stage?")

Yes. There are specific actions available for transferring a chat to a human or to a bot.

### Do I have to add a "Pattern or event name"? Can I add more than one? For example, if someone says "Hi," "Hello," or "Morning," can I trigger the same response?[​](#do-i-have-to-add-a-pattern-or-event-name-can-i-add-more-than-one-for-example-if-someone-says-hi-hello-or-morning-can-i-trigger-the-same-response "Direct link to Do I have to add a \"Pattern or event name\"? Can I add more than one? For example, if someone says \"Hi,\" \"Hello,\" or \"Morning,\" can I trigger the same response?")

Yes, you can add multiple events to trigger the same response.

## Permissions[​](#permissions "Direct link to Permissions")

> 'lhgenericbot','use'

## What do basic replies look like?[​](#what-do-basic-replies-look-like "Direct link to What do basic replies look like?")

#### Examples:[​](#examples "Direct link to Examples:")

![](/assets/images/specials-62ac6e5223d9c5ffeddf62d89bf04883.gif)

#### Screenshot Send message[​](#screenshot-send-message "Direct link to Screenshot Send message")

![](/assets/images/send-message-608b8deb78bee8cd4a17ca1b3cb48fea.png)

#### Screenshot Button List[​](#screenshot-button-list "Direct link to Screenshot Button List")

![](/assets/images/button-list-00ac3298924a5034b8c0ea5b9a659512.png)

#### Screenshot Send List[​](#screenshot-send-list "Direct link to Screenshot Send List")

![](/assets/images/send-list-53473bbf97c488faa336bf5cedeee309.png)

#### Screenshot Carrousel[​](#screenshot-carrousel "Direct link to Screenshot Carrousel")

![](/assets/images/carousel-068b5491bfabdec84e315b48a26ebd66.png)

# AI for Developers | Blesta Documentation

> **Fonte / Source:** https://docs.blesta.com/developers/ai

---

Version: 6

On this page

Blesta 6.0 ships an AI integration that plugins and modules can call from PHP via the **`BlestaAi` component**. The component wraps the upstream `BlestaAiClient` library, persists conversations and messages to the database, applies the configured model/temperature/max-tokens defaults, and verifies the integrity of the AI client and Guzzle transport against a SHA-256 manifest.

End-user-facing AI features (the chatbot, AI Summarize, AI Content Assistant for emails) are documented under [AI Features](dev__ai.md). This page is for plugin/module authors who want to make AI calls of their own.

## Prerequisites[â](#prerequisites "Direct link to Prerequisites")

- AI must be configured by an admin under **Settings > System > AI** (API key, default model, enabled features). See [AI Configuration](dev__ai__configuration.md).
- Your plugin's staff group must be allowed to use AI features (configured on the same settings page).
- The Blesta AI service is currently in beta and consumes credits associated with the configured Blesta account.

## Loading the component[â](#loading-the-component "Direct link to Loading the component")

```
use Blesta\Components\BlestaAi\BlestaAi;  
  
Loader::loadComponents($this, ['BlestaAi.BlestaAi']);  
  
if ($this->BlestaAi->getIntegrityDiagnostics()['ok']) {  
    // AI client is ready  
}
```

If the integrity check fails (the bundled `BlestaAiClient` or pinned Guzzle files have been tampered with), the component still constructs but every API call short-circuits and returns `null`. Use `getIntegrityDiagnostics()` to surface a useful error to the admin.

## Conversations and messages[â](#conversations-and-messages "Direct link to Conversations and messages")

The component models AI usage as **conversations** containing ordered **messages**. Both are persisted to the `ai_conversations` and `ai_messages` tables, scoped to a company and a staff member.

### Creating a conversation[â](#creating-a-conversation "Direct link to Creating a conversation")

```
$conversation_id = $this->BlestaAi->createConversation(  
    $company_id,  
    $staff_id,  
    'claude-sonnet-4-6',          // model  
    'Investigating ticket #4321',  // optional title  
    'chatbot'                      // type (defaults to 'chatbot')  
);
```

The `type` field lets you separate plugin-specific conversations from the built-in chatbot's history. Pick a string unique to your plugin (e.g. `'my_plugin_summary'`).

### One-shot chat[â](#one-shot-chat "Direct link to One-shot chat")

```
$response = $this->BlestaAi->chat($conversation_id, $user_message, [  
    'temperature' => 0.7,  
    'max_tokens' => 1024,  
    'system_prompt' => 'You are a hosting-industry support assistant.'  
]);  
  
// $response = [  
//   'content' => 'â¦assistant replyâ¦',  
//   'prompt_tokens' => 312,  
//   'completion_tokens' => 184,  
//   'cost' => 0.0021  
// ]
```

`chat()` builds the message array from the conversation history (plus your optional `system_prompt`), sends one completion request, persists both the user message and the assistant response, updates the cached credit balance, and returns the response. Throws `Exception` on API errors.

### Streaming chat[â](#streaming-chat "Direct link to Streaming chat")

For UIs that show tokens as they arrive (chatbot, long-form generation), use `streamChat()`:

```
$result = $this->BlestaAi->streamChat($conversation_id, function ($chunk, $data) {  
    // Emit the chunk to the client (e.g. via SSE).  
    echo $chunk;  
    @ob_flush();  
    @flush();  
}, [  
    'temperature' => 0.7,  
    'max_tokens' => 4096,  
    'system_prompt' => 'You are a Blesta admin assistant.',  
    // 'messages' => [...] // optional override of the message array  
]);
```

The callback receives the raw chunk and the parsed event data for each streamed event. After the stream completes, the assistant's full reply is persisted automatically and `streamChat()` returns the same `['content', 'prompt_tokens', 'completion_tokens', 'cost']` shape as `chat()`.

### Generating a title[â](#generating-a-title "Direct link to Generating a title")

```
$title = $this->BlestaAi->generateTitle($conversation_id);
```

Sends a small follow-up prompt that produces a 4â6 word title for the conversation, useful for displaying conversation lists in your UI.

## Other helpers[â](#other-helpers "Direct link to Other helpers")

| Method | Returns | Purpose |
| --- | --- | --- |
| `getModels()` | array | Models available to this account, with their per-token pricing. |
| `getCredits()` | float | The remaining credit balance (cached for the request). |
| `getUsageStats($company_id, $staff_id = null)` | array | Token / cost totals for billing-period analysis. |
| `getIntegrityDiagnostics()` | array | `['ok' => bool, 'failed' => [...], â¦]` for surfacing tamper detection. |

## Building prompt context[â](#building-prompt-context "Direct link to Building prompt context")

Combine the AI client with the [Example Data Library](dev__developers__example-data.md) when you need the model to know about the shape of Blesta's data:

```
use Blesta\Core\Util\ExampleData\ExampleDataLoader;  
  
$loader = new ExampleDataLoader();  
$context = $loader->getContext('Clients', ['depth' => 2]);  
  
$systemPrompt = "You are answering questions about a Blesta install. "  
    . "Here is one example client object including related contacts and services:\n"  
    . json_encode($context, JSON_PRETTY_PRINT);  
  
$response = $this->BlestaAi->chat($conversation_id, $userQuestion, [  
    'system_prompt' => $systemPrompt  
]);
```

This is the same pattern Blesta's built-in AI features use to ground responses in real data shapes without leaking row contents.

## Privacy and trust posture[â](#privacy-and-trust-posture "Direct link to Privacy and trust posture")

- The trusted endpoint is hard-coded to `https://ai.blesta.com/api/v1`. Plugins cannot redirect API traffic by passing a different base URL.
- Each request includes the configured API key. Do not log or expose request/response payloads in plugin code beyond what your UI needs.
- Costs accrue against the configured Blesta account. Throttle plugin-driven AI calls (rate-limit per staff member, cache responses, etc.) so a runaway plugin can't drain credit.
- The integrity manifest pins the AI client and the Guzzle transport surface that an attacker would most likely tamper with to redirect API traffic. Other vendor files are not pinned â `getIntegrityDiagnostics()` is defense in depth, not a sandbox.

## See also[â](#see-also "Direct link to See also")

- [AI Features](dev__ai.md) â end-user documentation for the bundled AI features.
- [AI Configuration](dev__ai__configuration.md) â admin settings (API key, default model, staff group access).
- [Example Data Library](dev__developers__example-data.md) â schema-driven fixtures useful for prompt context.

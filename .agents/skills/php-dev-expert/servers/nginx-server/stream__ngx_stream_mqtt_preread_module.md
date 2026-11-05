# Module ngx_stream_mqtt_preread_module

> **Fonte / Source:** https://nginx.org/en/docs/stream/ngx_stream_mqtt_preread_module.html

---

## Module ngx\_stream\_mqtt\_preread\_module

|  |
| --- |
| [Example Configuration](#example) [Directives](#directives)      [mqtt\_preread](#mqtt_preread) [Embedded Variables](#variables) |

The `ngx_stream_mqtt_preread_module` module (1.23.4) allows
extracting information from the CONNECT message
of the Message Queuing Telemetry Transport protocol (MQTT) versions
[3.1.1](https://docs.oasis-open.org/mqtt/mqtt/v3.1.1/mqtt-v3.1.1.html)
and
[5.0](https://docs.oasis-open.org/mqtt/mqtt/v5.0/mqtt-v5.0.html),
for example, a username or a client ID.

> This module is available as part of our
> [commercial subscription](https://www.f5.com/products/nginx).

#### Example Configuration

> ```
> mqtt_preread on;
> return       $mqtt_preread_clientid;
> ```

#### Directives

|  |  |
| --- | --- |
| Syntax: | `mqtt_preread on | off;` |
| Default: | ``` mqtt_preread off; ``` |
| Context: | `stream`, `server` |

Enables extracting information from the MQTT CONNECT message at
the [preread](stream__stream_processing.md#preread_phase) phase.

#### Embedded Variables

`$mqtt_preread_clientid`
:   the `clientid` value from the CONNECT message

`$mqtt_preread_username`
:   the `username` value from the CONNECT message

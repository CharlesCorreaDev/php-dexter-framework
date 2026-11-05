# HTTP/2 Protocol Errors | Troubleshooting | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/ts-http2/

---

# Troubleshooting HTTP/2 Protocol Errors[¶](#troubleshooting-http2-protocol-errors "Permanent link")

Some 500 and 503 errors are not caused by the usual suspects (memory, permissions, `.htaccess`, opcode cache, etc.). Instead, the application produces an HTTP response that does not pass HTTP/2 protocol validation. LiteSpeed then rejects the response, and the request fails.

This guide covers that specific scenario. If you are troubleshooting a general 500 or 503 error, start with the [500 Error](lsws__cp__cpanel__500-error.md) or [503 Error](lsws__cp__cpanel__503-error.md) guide first.

## Step 1: Identify the symptom[¶](#step-1-identify-the-symptom "Permanent link")

The affected request normally finishes within a few seconds. When the issue occurs, the request remains pending until it reaches the configured timeout—often around 120 seconds—and then returns an HTTP 500 or 503 error.

Common symptoms include:

- a request that normally finishes in seconds remains pending until the configured timeout;
- the request returns an HTTP 500 or 503 error after timing out;
- the browser reports `Network error` or `Connection reset`;
- the download starts but does not complete;
- the same request works on Apache but fails on LiteSpeed;
- the same request works on an earlier LiteSpeed version but fails on LiteSpeed 6.3.6.

These symptoms can indicate that the application has produced an HTTP response that does not pass HTTP/2 protocol validation.

Tip

If the request works under Apache but fails under LiteSpeed, confirm the scope first. See [Does it Occur with Apache?](lsws__cp__cpanel__500-error.md#does-it-occur-with-apache). Keep in mind that with this particular issue the malformed response originates from the application, so Apache may simply be more tolerant of it (see [Step 5](#step-5-check-whether-stricter-http2-validation-exposed-the-issue)).

## Step 2: Enable the LiteSpeed debug log[¶](#step-2-enable-the-litespeed-debug-log "Permanent link")

Enable the LiteSpeed debug log temporarily, then reproduce the problem once. To toggle debug logging, see [How to Toggle Debug Logging](lsws__cp__cpanel__debug-log.md).

Before reproducing it, record the following information so the request can be found easily:

- request URI;
- approximate request time;
- client IP address;
- affected virtual host;
- downloaded filename, if applicable.

Note

Debug logging can generate a large amount of data, so disable it or restore the previous log level after collecting the required log entries.

## Step 3: Use the request URI as the log anchor[¶](#step-3-use-the-request-uri-as-the-log-anchor "Permanent link")

Search the debug log for the affected request URI. Treat that entry as the anchor for the investigation.

Starting from that request, inspect the log entries that follow it. Keep the investigation on the same connection and HTTP/2 stream. A request identifier may look like this:

```
[192.0.2.103:21302:HTTP2-1#APVH_example.com:lsapi]
```

In this example, `HTTP2-1` identifies the HTTP/2 stream. The related response-header and transmission entries should contain the same connection or stream identifier.

After finding the request, search the following log entries for:

```
append response header
Response Header
Content-Length
Total sent
RST_STREAM
processRstFrame
```

The most important part is the HTTP response produced after the request URI. Do not search for an isolated error message without first connecting it to the affected request.

## Step 4: Check for the two common response problems[¶](#step-4-check-for-the-two-common-response-problems "Permanent link")

### Case 1: `Content-Length` does not match the bytes sent[¶](#case-1-content-length-does-not-match-the-bytes-sent "Permanent link")

One example from the debug log is:

```
Response Header: 'Content-Length: 8107047'
Total sent: 8107048, current window: 3197912
```

The application declares a response length of `8107047` bytes but actually sends `8107048` bytes. The extra byte makes the HTTP response inconsistent with its `Content-Length` header.

The log may then show the client resetting the HTTP/2 stream:

```
Received RST_STREAM, size: 4, flag: 0x0, Message: ''
streamID:1 processRstFrame, error code: 1
```

This type of mismatch is commonly caused by application output being added before or after the file data, such as an uncleared PHP output buffer, whitespace, a BOM, a warning, or debug output.

### Case 2: The HTTP response header is invalid[¶](#case-2-the-http-response-header-is-invalid "Permanent link")

Another example from the debug log is:

```
Response Header: 'Content-Length: 191368:'
```

The `Content-Length` value must contain a valid integer. The additional colon after `191368` makes the response header invalid.

In this example, the malformed header came from this PHP application code:

```
$this->response->setHeader('Content-Length: ' . strlen($file), '');
```

The application incorrectly combined the header name and value in the first argument. A framework method that accepts separate name and value arguments should use a form such as:

```
$this->response->setHeader('Content-Length', (string) strlen($file));
```

## Step 5: Check whether stricter HTTP/2 validation exposed the issue[¶](#step-5-check-whether-stricter-http2-validation-exposed-the-issue "Permanent link")

LiteSpeed 6.3.6 build 0 introduced improved header validation for HTTP/2 and HTTP/3.

Because validation is stricter, an invalid response previously tolerated by an older LiteSpeed version or Apache may now be rejected. This can make the issue appear to be a LiteSpeed regression even though the malformed response originates from the application.

Technically, the malformed or inconsistent response is an HTTP/2 protocol violation. Earlier versions may have been more tolerant, which masked the underlying application issue.

As a diagnostic test, temporarily try the same request on the prior LiteSpeed version, such as 6.3.5 build 7:

- if the request works on 6.3.5 build 7 but fails on 6.3.6;
- and the 6.3.6 debug log shows a length mismatch or invalid response header;
- then the enhanced HTTP/2 validation is likely exposing an existing application-response problem.

Warning

Downgrading should be used only to rule out or confirm this relationship, or as a short-term workaround. It does not correct the invalid response.

## Step 6: Fix the response in the application[¶](#step-6-fix-the-response-in-the-application "Permanent link")

The final solution is to inspect the application, plugin, theme, or PHP controller that generates the response and correct it at the source.

For a `Content-Length` mismatch:

- clear PHP output buffers before sending the download response;
- remove unexpected whitespace, BOMs, warnings, or debug output;
- stop application processing after the file has been sent;
- verify that the declared `Content-Length` exactly matches the bytes sent.

For an invalid response header:

- search the application for `Content-Length`, `header()`, or `setHeader()`;
- verify the expected method signature;
- pass the header name and value separately when required by the framework;
- ensure that the resulting `Content-Length` value contains digits only.

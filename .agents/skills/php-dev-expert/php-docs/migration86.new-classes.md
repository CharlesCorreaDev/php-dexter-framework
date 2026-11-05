# New Classes and Interfaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.new-classes.php

---

## New Classes and Interfaces

### Core

- **SortDirection**
- **StreamError**
- **StreamException**
- **StreamErrorStore**
- **StreamErrorMode**
- **StreamErrorCode**
- **Io\IoException**
- **Io\Poll\Context**
- **Io\Poll\Watcher**
- **Io\Poll\Backend**
- **Io\Poll\Event**
- **Io\Poll\Handle**
- **Io\Poll\PollException**
- **Io\Poll\FailedPollOperationException**
- **Io\Poll\FailedContextInitializationException**
- **Io\Poll\FailedHandleAddException**
- **Io\Poll\FailedWatcherModificationException**
- **Io\Poll\FailedPollWaitException**
- **Io\Poll\BackendUnavailableException**
- **Io\Poll\InactiveWatcherException**
- **Io\Poll\HandleAlreadyWatchedException**
- **Io\Poll\InvalidHandleException**
- **StreamPollHandle**

### Date

- **Time\Duration**
- **Time\TimeException**

### Intl

- **IntlNumberRangeFormatter**

### OpenSSL

- **Openssl\OpensslException**
- **Openssl\Session**
- **Openssl\Psk**

### SNMP

- **Snmp\Mib**
- **Snmp\OidOutput**
- **Snmp\Output**
- **Snmp\StringOutput**

### URI

- **Uri\Rfc3986\UriBuilder**
- **Uri\WhatWg\UrlBuilder**
- **Uri\WhatWg\UrlPercentEncodingMode**

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});

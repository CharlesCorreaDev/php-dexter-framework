# Define manualmente uma variável de requisição SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.setrequestvariable.php

---

# SeasLog::setRequestVariable

(PECL seaslog >=1.9.0)

SeasLog::setRequestVariable — Define manualmente uma variável de requisição SeasLog

### Descrição

public static function **SeasLog::setRequestVariable**([int](language.types.integer.md) `$key`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define manualmente uma variável de requisição SeasLog.

### Parâmetros

`key`
:   Uma das constantes inteiras:

    - [SEASLOG\_REQUEST\_VARIABLE\_DOMAIN\_PORT](seaslog.constants.md#constant.seaslog-request-variable-domain-port)
    - [SEASLOG\_REQUEST\_VARIABLE\_REQUEST\_URI](seaslog.constants.md#constant.seaslog-request-variable-request-uri)
    - [SEASLOG\_REQUEST\_VARIABLE\_REQUEST\_METHOD](seaslog.constants.md#constant.seaslog-request-variable-request-method)
    - [SEASLOG\_REQUEST\_VARIABLE\_CLIENT\_IP](seaslog.constants.md#constant.seaslog-request-variable-client-ip)

`value`
:   O valor da variável de requisição.

### Valor Retornado

Retorna TRUE em caso de sucesso ou FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::setRequestVariable()****

```
<?php

$sDomainPort = 'domain:port';
$sRequestUri = 'uri';
$sRequestMethod = 'method';
$sClientIp = 'client_ip';

$iErrorKey = 1000;

$oSeasLog = new SeasLog();

var_dump($oSeasLog->setRequestVariable(SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT, $sDomainPort));
var_dump($oSeasLog->setRequestVariable(SEASLOG_REQUEST_VARIABLE_REQUEST_URI, $sRequestUri));
var_dump($oSeasLog->setRequestVariable(SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD, $sRequestMethod));
var_dump($oSeasLog->setRequestVariable(SEASLOG_REQUEST_VARIABLE_CLIENT_IP, $sClientIp));

var_dump($oSeasLog->setRequestVariable($iErrorKey,NULL));

var_dump($oSeasLog->getRequestVariable(SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT) == $sDomainPort);
var_dump($oSeasLog->getRequestVariable(SEASLOG_REQUEST_VARIABLE_REQUEST_URI) == $sRequestUri);
var_dump($oSeasLog->getRequestVariable(SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD) == $sRequestMethod);
var_dump($oSeasLog->getRequestVariable(SEASLOG_REQUEST_VARIABLE_CLIENT_IP) == $sClientIp);

var_dump($oSeasLog->getRequestVariable($iErrorKey));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)
```

### Veja também

- [SeasLog::getRequestVariable()](seaslog.getrequestvariable.md) - Obtém a variável requisitada do SeasLog

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

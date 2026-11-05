# Obtém a variável requisitada do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getrequestvariable.php

---

# SeasLog::getRequestVariable

(PECL seaslog >=1.9.0)

SeasLog::getRequestVariable — Obtém a variável requisitada do SeasLog

### Descrição

public static function **SeasLog::getRequestVariable**([int](language.types.integer.md) `$key`): [bool](language.types.boolean.md)

Obtém a variável requisitada do SeasLog.

### Parâmetros

`key`
:   Uma das constantes inteiras:

    - [SEASLOG\_REQUEST\_VARIABLE\_DOMAIN\_PORT](seaslog.constants.md#constant.seaslog-request-variable-domain-port)
    - [SEASLOG\_REQUEST\_VARIABLE\_REQUEST\_URI](seaslog.constants.md#constant.seaslog-request-variable-request-uri)
    - [SEASLOG\_REQUEST\_VARIABLE\_REQUEST\_METHOD](seaslog.constants.md#constant.seaslog-request-variable-request-method)
    - [SEASLOG\_REQUEST\_VARIABLE\_CLIENT\_IP](seaslog.constants.md#constant.seaslog-request-variable-client-ip)

### Valor Retornado

Retorna o valor da variável requisitada em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getRequestVariable()****

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

- [SeasLog::setRequestVariable()](seaslog.setrequestvariable.md) - Define manualmente uma variável de requisição SeasLog

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

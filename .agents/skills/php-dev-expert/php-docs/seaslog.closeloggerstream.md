# Libera manualmente o fluxo do registrador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.closeloggerstream.php

---

# SeasLog::closeLoggerStream

(PECL seaslog >=1.8.6)

SeasLog::closeLoggerStream — Libera manualmente o fluxo do registrador

### Descrição

public static function **SeasLog::closeLoggerStream**([int](language.types.integer.md) `$model`, [string](language.types.string.md) `$logger`): [bool](language.types.boolean.md)

Libera manualmente o fluxo do registrador.
O SeasLog armazena em cache o identificador de fluxo aberto pelo registrador para economizar a sobrecarga da criação de um fluxo. O identificador será liberado automaticamente ao final da solicitação.
Se estiver no modo CLI, o processo também será liberado automaticamente ao sair. Ou pode ser usada esta função para liberar manualmente (necessário SeasLog versão 1.8.6 ou mais recente).

### Parâmetros

`model`
:   Constante inteira. Um dos valores:

    - [SEASLOG\_CLOSE\_LOGGER\_STREAM\_MOD\_ALL](seaslog.constants.md#constant.seaslog-close-logger-stream-mod-all)
    - [SEASLOG\_CLOSE\_LOGGER\_STREAM\_MOD\_ASSIGN](seaslog.constants.md#constant.seaslog-close-logger-stream-mod-assign)

`logger`
:   O nome do registrador.

### Valor Retornado

Retorna TRUE em caso de sucesso ao liberar o fluxo, ou FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::closeLoggerStream()****

```
<?php

var_dump(SeasLog::closeLoggerStream());
var_dump(SeasLog::closeLoggerStream(SEASLOG_CLOSE_LOGGER_STREAM_MOD_ALL));
var_dump(SeasLog::closeLoggerStream(SEASLOG_CLOSE_LOGGER_STREAM_MOD_ASSIGN, 'logger_name'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(true)
bool(true)
```

### Veja também

- [SeasLog::setLogger()](seaslog.setlogger.md) - Define o nome do registrador SeasLog
- [SeasLog::getLastLogger()](seaslog.getlastlogger.md) - Obtém o último caminho do registrador SeasLog

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

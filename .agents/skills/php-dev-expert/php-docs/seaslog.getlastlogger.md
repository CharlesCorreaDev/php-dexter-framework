# Obtém o último caminho do registrador SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getlastlogger.php

---

# SeasLog::getLastLogger

(PECL seaslog >=1.0.0)

SeasLog::getLastLogger — Obtém o último caminho do registrador SeasLog

### Descrição

public static function **SeasLog::getLastLogger**(): [string](language.types.string.md)

Use o método **SeasLog::getLastLogger()**
para obter o valor de [seaslog.default\_logger](seaslog.configuration.md#ini.seaslog.default-logger)
configurado no php.ini (ou seaslog.ini).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O uso do método [SeasLog::setLogger()](seaslog.setlogger.md)
irá alterar o valor de **SeasLog::getLastLogger()**.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getLastLogger()****

```
<?php

var_dump(SeasLog::getLastLogger());
SeasLog::setLogger('theNewLogger');
var_dump(SeasLog::getLastLogger());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(7) "default"
string(12) "theNewLogger"
```

### Veja também

- [SeasLog::setLogger()](seaslog.setlogger.md) - Define o nome do registrador SeasLog

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

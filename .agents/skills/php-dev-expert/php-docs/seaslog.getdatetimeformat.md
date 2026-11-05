# Obtém o formato de data/horário do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.getdatetimeformat.php

---

# SeasLog::getDatetimeFormat

(PECL seaslog >=1.0.0)

SeasLog::getDatetimeFormat — Obtém o formato de data/horário do SeasLog

### Descrição

public static function **SeasLog::getDatetimeFormat**(): [string](language.types.string.md)

Obtém o formato de data/horário do SeasLog.
Use o método **SeasLog::getDatetimeFormat()**
para obter o valor de [seaslog.default\_datetime\_format](seaslog.configuration.md#ini.seaslog.default-datetime-format)
configurado no php.ini (ou seaslog.ini).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Obtém o formato de data/horário do SeasLog de
[seaslog.default\_datetime\_format](seaslog.configuration.md#ini.seaslog.default-datetime-format).
Usar o método [SeasLog::setDatetimeFormat()](seaslog.setdatetimeformat.md)
irá alterar este valor.

### Examples

**Exemplo #1 Exemplo de **SeasLog::getDatetimeFormat()****

```
<?php

var_dump(SeasLog::getDateTimeFormat());
var_dump(SeasLog::setDateTimeFormat('Ymd His'));
var_dump(SeasLog::getDateTimeFormat());

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(11) "Y-m-d H:i:s"
bool(true)
string(7) "Ymd His"
```

### Veja também

- [SeasLog::setDatetimeFormat()](seaslog.setdatetimeformat.md) - Define o formato de data/horário do SeasLog

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

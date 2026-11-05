# Define o formato de data/horário do SeasLog

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.setdatetimeformat.php

---

# SeasLog::setDatetimeFormat

(PECL seaslog >=1.0.0)

SeasLog::setDatetimeFormat — Define o formato de data/horário do SeasLog

### Descrição

public static function **SeasLog::setDatetimeFormat**([string](language.types.string.md) `$format`): [bool](language.types.boolean.md)

Define o formato de data/horário do SeasLog

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`format`
:   String. Exemplos: `Y-m-d H:i:s` ou `Ymd His`. Consulte também o parâmetro `format` da função [date()](function.date.md).

### Valor Retornado

Retorna TRUE em caso de sucesso na definição de formato de data/horário ou FALSE em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SeasLog::setDatetimeFormat()****

```
<?php

var_dump(SeasLog::setDateTimeFormat('Ymd His'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
```

### Veja também

- [SeasLog::getDateTimeFormat()](seaslog.getdatetimeformat.md) - Obtém o formato de data/horário do SeasLog

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

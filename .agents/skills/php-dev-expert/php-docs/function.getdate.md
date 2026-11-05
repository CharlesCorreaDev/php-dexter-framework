# Recupera informações de data/horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getdate.php

---

# getdate

(PHP 4, PHP 5, PHP 7, PHP 8)

getdate — Recupera informações de data/horário

### Descrição

function **getdate**([?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = **`null`**): [array](language.types.array.md)

Retorna um [array](language.types.array.md) associativo contendo a informação
da data do `timestamp`, ou o horário atual
local se `timestamp` for **`null`** ou omitido.

### Parâmetros

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna um [array](language.types.array.md) associativo de informação sobre o
`timestamp`. Os elementos do array associativo
são os seguintes:

**Elementos chave de retorno do array associativo**

| Chave | Descrição | Exemplo dos valores retornados |
| --- | --- | --- |
| `"seconds"` | Representação numérica dos segundos | `0` a `59` |
| `"minutes"` | Representação numérica dos minutos | `0` a `59` |
| `"hours"` | Representação numérica das horas | `0` a `23` |
| `"mday"` | Representação numérica do dia do mês | `1` a `31` |
| `"wday"` | Representação numérica do dia da semana | `0` (para Sunday) a `6` (para Saturday) |
| `"mon"` | Representação numérica de um mês | `1` a `12` |
| `"year"` | Representação numérica completa do ano, 4 dígitos | Exemplos: `1999` ou `2003` |
| `"yday"` | Representação numérica do dia do ano | `0` a `365` |
| `"weekday"` | Representação textual completa do dia da semana | `Sunday` a `Saturday` |
| `"month"` | Representação textual completa de um mês, tal como January ou March | `January` a `December` |
| `0` | Segundos desde a época UNIX, similar ao valor retornados pela função [time()](function.time.md) e utilizado pela função [date()](function.date.md). | Dependente do sistema, tipicamente `-2147483648` à `2147483647`. |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da função **getdate()****

```
<?php
$today = getdate();
print_r($today);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [seconds] => 40
    [minutes] => 58
    [hours] => 21
    [mday] => 17
    [wday] => 2
    [mon] => 6
    [year] => 2003
    [yday] => 167
    [weekday] => Tuesday
    [month] => June
    [0] => 1055901520
)
```

### Veja também

- [date()](function.date.md) - Formata um timestamp Unix
- [idate()](function.idate.md) - Formata uma parte de uma data/horário local como um inteiro
- [localtime()](function.localtime.md) - Obtém o horário local
- [time()](function.time.md) - Retorna o timestamp Unix atual
- [setlocale()](function.setlocale.md) - Define informação de localidade

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

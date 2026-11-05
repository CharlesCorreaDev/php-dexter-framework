# Formata uma data/horário GMT/UTC de acordo com as configurações de localidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmstrftime.php

---

# gmstrftime

(PHP 4, PHP 5, PHP 7, PHP 8)

gmstrftime — Formata uma data/horário GMT/UTC de acordo com as configurações de localidade

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

Alternativas a esta função incluem:

- [gmdate()](function.gmdate.md)
- [IntlDateFormatter::format()](intldateformatter.format.md)

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **gmstrftime**([string](language.types.string.md) `$format`, [?](language.types.null.md)[int](language.types.integer.md) `$timestamp` = [null](reserved.constants.md#constant.null)): [string](language.types.string.md)|[false](language.types.singleton.md)

Possui o mesmo comportamento que a função [strftime()](function.strftime.md) exceto que o
tempo retornado será no Horário de Greenwich (GMT). Por exemplo, quando executada no
fuso horário EST (GMT -0500), a primeira linha abaixo imprime
"Dec 31 1998 20:00:00", enquanto a segunda linha imprime "Jan 01 1999
01:00:00".

**Aviso**

Esta função depende das informações de localidade do sistema operacional, que podem
ser inconsistentes ou não disponíveis. Ao invés disso, use o
método [IntlDateFormatter::format()](intldateformatter.format.md).

### Parâmetros

`format`
:   Veja a descrição em [strftime()](function.strftime.md).

`timestamp`
:   O parâmetro opcional `timestamp` é um
    [int](language.types.integer.md) de timestamp Unix cujo padrão é a hora local
    atual se `timestamp` não for informado ou for **`null`**. Em outras
    palavras, o padrão é o valor de [time()](function.time.md).

### Valor Retornado

Retorna uma string formatada de acordo com a string de formatação,
usando o `timestamp` informado, ou o horário local
se nenhum timestamp é informado. Nomes de meses, dias da semana e
outras strings que dependem do idioma respeitam a configuração de localidade atual definido
com a função [setlocale()](function.setlocale.md).
Em caso de falha, é retornado **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `timestamp` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo da função **gmstrftime()****

```
<?php

setlocale(LC_TIME, 'es_ES.UTF-8');
date_default_timezone_set('EST');

echo strftime("%B %d %Y %H:%M:%S",   mktime(20, 0, 0, 12, 31, 98)) . "\n";
echo gmstrftime("%B %d %Y %H:%M:%S", mktime(20, 0, 0, 12, 31, 98));
```

O exemplo acima produzirá:

```
Deprecated: Function strftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in script on line 6
diciembre 31 1998 20:00:00

Deprecated: Function gmstrftime() is deprecated since 8.1, use IntlDateFormatter::format() instead in script on line 7
enero 01 1999 01:00:00
```

### Veja também

- [IntlDateFormatter::format()](intldateformatter.format.md) - Formata data/horário como uma string
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [strftime()](function.strftime.md) - Formata uma data/horário de acordo com as configurações locais

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

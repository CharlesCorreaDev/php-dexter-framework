# Retorna um array associativo com informações detalhadas da data/horário informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-parse.php

---

# date\_parse

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

date\_parse — Retorna um array associativo com informações detalhadas da data/horário informada

### Descrição

function **date\_parse**([string](language.types.string.md) `$datetime`): [array](language.types.array.md)

A função **date\_parse()** analisa a string
`datetime` informada conforme as mesmas regras de
[strtotime()](function.strtotime.md) e
[DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md). Ao invés de retornar um
timestamp Unix (com [strtotime()](function.strtotime.md)) ou
objeto [DateTimeImmutable](class.datetimeimmutable.md) (com
a função [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md)), ela retorna um
array associativo com a informação que ela poderia detectar na
string `datetime` fornecida.

Se nenhuma informação sobre um certo grupo de elementos puder ser encontrada, estes
elementos do array serão configurados para **`false`** ou omitidos. Se necessário para
construção de um timestamp ou objeto [DateTimeImmutable](class.datetimeimmutable.md) a partir
da mesma string `datetime`, mais campos podem ser configurados para
um valor não-**`false`**. Veja os exemplos para casos onde isso acontece..

### Parâmetros

`datetime`
:   Data/horário no formato aceito pela
    função [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md).

### Valor Retornado

Retorna um [array](language.types.array.md) com informações da data/horário analisada.

O array de retorno tem chaves para `year`,
`month`, `day`, `hour`,
`minute`, `second`,
`fraction`, e `is_localtime`.

Se `is_localtime` estiver presente então
`zone_type` indica o tipo do fuso horário. Para o tipo
`1` (deslocamento UTC), os campos `zone` e
`is_dst` são incluídos; para o tipo `2`
(abreviação), os campos `tz_abbr` e
`is_dst` são incluídos; e para tipo `3`
(identificador de fuso), os campos `tz_abbr` e
`tz_id` são incluídos.

Se elementos de tempo relativo estiverem presentes na
string `datetime` como `+3 days`,
então o array retornado incluirá um array aninhado com a chave
`relative`. Este array então conterá as chaves
`year`, `month`, `day`,
`hour`, `minute`,
`second`, e se necessário `weekday` e
`weekdays`, dependendo da string que foi passada.

O array inclui os campos `warning_count` e
`warnings`. O primeiro indica quantos
avisos ocorreram.
As chaves dos elementos do array `warnings` indicam as
posições na string `datetime` onde os avisos
ocorreram, com o valor da string descrevendo o aviso em si.

O array também contém os campos `error_count` e
`errors`. O primeiro indica quantos erros
foram encontrados.
As chaves dos elementos do array `errors` indicam
posição na string `datetime` onde os erros
ocorreram, com o valor da string descrevendo o erro em si.

**Aviso**

O número de elementos do arrays `warnings` ou
`errors` pode ser menor que
`warning_count` ou `error_count` se eles
ocorreram na mesma posição.

### Erros/Exceções

Se o formato da data/horário contiver erro, o elemento 'errors'
conterá as mensagens de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O elemento `zone` do array de retorno agora representa segundos no lugar de minutos, e seu sinal é invertido. Por exemplo, `-120` é agora `7200`. |

### Examples

**Exemplo #1 Um exemplo da função **date\_parse()**com um
string `datetime` compreensivo**

```
<?php
var_dump(date_parse("2006-12-12 10:00:00.5"));
```

O exemplo acima produzirá:

```
array(12) {
  ["year"]=>
  int(2006)
  ["month"]=>
  int(12)
  ["day"]=>
  int(12)
  ["hour"]=>
  int(10)
  ["minute"]=>
  int(0)
  ["second"]=>
  int(0)
  ["fraction"]=>
  float(0.5)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(false)
}
```

Os elementos de fuso horário só aparecem se eles forem incluídos no parâmetro
`datetime`. Neste caso sempre haverá
um elemento `zone_type` e alguns mais dependendo
do seu valor.

**Exemplo #2 Exemplo da função **date\_parse()** com informação de abreviação de fuso horário**

```
<?php
var_dump(date_parse("June 2nd, 2022, 10:28:17 BST"));
```

O exemplo acima produzirá:

```
array(16) {
  ["year"]=>
  int(2022)
  ["month"]=>
  int(6)
  ["day"]=>
  int(2)
  ["hour"]=>
  int(10)
  ["minute"]=>
  int(28)
  ["second"]=>
  int(17)
  ["fraction"]=>
  float(0)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(true)
  ["zone_type"]=>
  int(2)
  ["zone"]=>
  int(0)
  ["is_dst"]=>
  bool(true)
  ["tz_abbr"]=>
  string(3) "BST"
}
```

**Exemplo #3 Exemplo da função **date\_parse()** com informação de identificador de fuso horário**

```
<?php
var_dump(date_parse("June 2nd, 2022, 10:28:17 Europe/London"));
```

O exemplo acima produzirá:

```
array(14) {
  ["year"]=>
  int(2022)
  ["month"]=>
  int(6)
  ["day"]=>
  int(2)
  ["hour"]=>
  int(10)
  ["minute"]=>
  int(28)
  ["second"]=>
  int(17)
  ["fraction"]=>
  float(0)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(true)
  ["zone_type"]=>
  int(3)
  ["tz_id"]=>
  string(13) "Europe/London"
}
```

Se uma string mais enxuta de `datetime` for analisada, menos
informação estará disponível. Neste exemplo, todas as partes de horário são retornadas
como **`false`**.

**Exemplo #4 Função **date\_parse()** com um string minimizado**

```
<?php
var_dump(date_parse("June 2nd, 2022"));
```

O exemplo acima produzirá:

```
array(12) {
  ["year"]=>
  int(2022)
  ["month"]=>
  int(6)
  ["day"]=>
  int(2)
  ["hour"]=>
  bool(false)
  ["minute"]=>
  bool(false)
  ["second"]=>
  bool(false)
  ["fraction"]=>
  bool(false)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(false)
}
```

[Formatos relativos](datetime.formats.md#datetime.formats.relative) não
influenciam valores interpretados de formatos absolutos, mas são analisados no
elemento "relative".

**Exemplo #5 **date\_parse()** com formatos relativos**

```
<?php
var_dump(date_parse("2006-12-12 10:00:00.5 +1 week +1 hour"));
```

O exemplo acima produzirá:

```
array(13) {
  ["year"]=>
  int(2006)
  ["month"]=>
  int(12)
  ["day"]=>
  int(12)
  ["hour"]=>
  int(10)
  ["minute"]=>
  int(0)
  ["second"]=>
  int(0)
  ["fraction"]=>
  float(0.5)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(false)
  ["relative"]=>
  array(6) {
    ["year"]=>
    int(0)
    ["month"]=>
    int(0)
    ["day"]=>
    int(7)
    ["hour"]=>
    int(1)
    ["minute"]=>
    int(0)
    ["second"]=>
    int(0)
  }
}
```

Algumas strings, como `Thursday` por exemplo, irão configurar a parte de horário
da string para `0`. Se `Thursday` for
passado para a função [DateTimeImmutable::\_\_construct()](datetimeimmutable.construct.md), ela também
teria resultado em hora, minuto, segundo e fração configurados para
`0`. No exemplo abaixo, o elemento do ano também
é configurado como **`false`**.

**Exemplo #6 Função **date\_parse()** com efeitos colaterais**

```
<?php
var_dump(date_parse("Thursday, June 2nd"));
```

O exemplo acima produzirá:

```
array(13) {
  ["year"]=>
  bool(false)
  ["month"]=>
  int(6)
  ["day"]=>
  int(2)
  ["hour"]=>
  int(0)
  ["minute"]=>
  int(0)
  ["second"]=>
  int(0)
  ["fraction"]=>
  float(0)
  ["warning_count"]=>
  int(0)
  ["warnings"]=>
  array(0) {
  }
  ["error_count"]=>
  int(0)
  ["errors"]=>
  array(0) {
  }
  ["is_localtime"]=>
  bool(false)
  ["relative"]=>
  array(7) {
    ["year"]=>
    int(0)
    ["month"]=>
    int(0)
    ["day"]=>
    int(0)
    ["hour"]=>
    int(0)
    ["minute"]=>
    int(0)
    ["second"]=>
    int(0)
    ["weekday"]=>
    int(4)
  }
}
```

### Veja também

- [date\_parse\_from\_format()](function.date-parse-from-format.md) - Retorna informações sobre uma data informada de acordo com um formato para
  analisar um `datetime` com um formato específico
- [checkdate()](function.checkdate.md) - Valida uma data gregoriana para validação da data do calendário gregoriano
- [getdate()](function.getdate.md) - Recupera informações de data/horário

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

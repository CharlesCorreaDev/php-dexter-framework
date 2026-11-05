# Obtém o timestamp Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.gettimestamp.php

---

# DateTimeInterface::getTimestamp

# DateTimeImmutable::getTimestamp

# DateTime::getTimestamp

# date\_timestamp\_get

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTimeInterface::getTimestamp -- DateTimeImmutable::getTimestamp -- DateTime::getTimestamp -- date\_timestamp\_get — Obtém o timestamp Unix

### Descrição

Estilo orientado a objetos

public function **DateTimeInterface::getTimestamp**(): [int](language.types.integer.md)

public function **DateTimeImmutable::getTimestamp**(): [int](language.types.integer.md)

public function **DateTime::getTimestamp**(): [int](language.types.integer.md)

Estilo procedural

function [date\_timestamp\_get](function.date-timestamp-get.md)([DateTimeInterface](class.datetimeinterface.md) `$object`): [int](language.types.integer.md)

Obtém o timestamp Unix.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o timestamp Unix que representa a data.

### Erros/Exceções

Se o timestamp não puder ser representado como um [int](language.types.integer.md), uma exceção
[DateRangeError](class.daterangeerror.md) é disparada. Antes do PHP
8.3.0, uma exceção [ValueError](class.valueerror.md) era disparada. E, antes do
PHP 8.0.0, **`false`** era retornado neste caso. Ainda, o timestamp pode ser
recuperado como [string](language.types.string.md) usando o método
[DateTimeInterface::format()](datetime.format.md) com o formato
literal `U`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | A exceção fora do intervalo é agora [DateRangeError](class.daterangeerror.md). |
| 8.0.0 | Esta função não mais retorna **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo do método **DateTime::getTimestamp()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable();
echo $date->getTimestamp();
```

O exemplo acima produzirá
algo semelhante a:

```
1272509157
```

Estilo procedural

```
<?php
$date = date_create();
echo date_timestamp_get($date);
```

O exemplo acima produzirá
algo semelhante a:

```
1272509157
```

Se for necessário recuperar o timestamp com resolução de
milissegundos ou microssegundos, pode ser utilizada a
função [DateTimeInterface::format()](datetime.format.md).

**Exemplo #2 Recuperando o timestamp com resolução de mili e microssegundos**

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable();
$mili = (int) $date->format('Uv'); // Timestamp em milissegundos
$micro = (int) $date->format('Uu'); // Timestamp em microssegundos

echo $mili, "\n", $micro, "\n";
```

O exemplo acima produzirá
algo semelhante a:

```
1674057635586
1674057635586918
```

### Veja também

- [DateTime::setTimestamp()](datetime.settimestamp.md) - Define a data e hora baseada em um timestamp Unix
- [DateTimeImmutable::setTimestamp()](datetimeimmutable.settimestamp.md) - Define a data e o horário com base em um timestamp Unix
- [DateTimeInterface::format()](datetime.format.md) - Retorna a data formatada de acordo com um formato informado
- [DateTimeInterface::getMicrosecond()](datetimeinterface.getmicrosecond.md) - Obtém a parte de microssegundos do timestamp Unix

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

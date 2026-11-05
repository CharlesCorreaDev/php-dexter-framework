# Cria um novo objeto com seu timestamp modificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.modify.php

---

# DateTimeImmutable::modify

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::modify — Cria um novo objeto com seu timestamp modificado

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::modify() does not modify the object itself")]  
public function **DateTimeImmutable::modify**([string](language.types.string.md) `$modifier`): [DateTimeImmutable](class.datetimeimmutable.md)

Cria um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com seu timestamp modificado.
O objeto original não é modificado.

### Parâmetros

`modifier`
:   Uma string de data/hora. Os formatos válidos são explicados em [Formatos de Data e Hora](datetime.formats.md).

### Valor Retornado

Retorna [DateTimeImmutable](class.datetimeimmutable.md) em caso de sucesso.
Estilo procedural retorna **`false`** em caso de falha.

### Erros/Exceções

Se uma string inválida de data/horário for passada,
uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) é disparada.
Antes do PHP 8.3, era um aviso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora tem um tipo de retorno provisório [DateTimeImmutable](class.datetimeimmutable.md). Anteriormente era [DateTimeImmutable](class.datetimeimmutable.md)|[false](language.types.singleton.md). |
| 8.3.0 | **DateTimeImmutable::modify()** agora lança uma exceção [DateMalformedStringException](class.datemalformedstringexception.md) se uma string inválida for passada. Anteriormente, retornava **`false`** e um alerta era emitido. |

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::modify()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2006-12-12');
$newDate = $date->modify('+1 day');
echo $newDate->format('Y-m-d');
```

O exemplo acima produzirá:

```
2006-12-13
```

**Exemplo #2 Cuidado na adição ou subtração de meses**

```
<?php
$date = new DateTimeImmutable('2000-12-31');

$newDate1 = $date->modify('+1 month');
echo $newDate1->format('Y-m-d') . "\n";

$newDate2 = $newDate1->modify('+1 month');
echo $newDate2->format('Y-m-d') . "\n";
```

O exemplo acima produzirá:

```
2001-01-31
2001-03-03
```

### Veja também

- [DateTimeImmutable::add()](datetimeimmutable.add.md) - Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos
- [DateTimeImmutable::sub()](datetimeimmutable.sub.md) - Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos
- [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md) - Define a data
- [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md) - Define a data ISO
- [DateTimeImmutable::setTime()](datetimeimmutable.settime.md) - Define um horário
- [DateTimeImmutable::setTimestamp()](datetimeimmutable.settimestamp.md) - Define a data e o horário com base em um timestamp Unix

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

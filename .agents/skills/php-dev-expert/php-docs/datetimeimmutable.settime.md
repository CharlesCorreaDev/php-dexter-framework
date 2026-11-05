# Define um horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.settime.php

---

# DateTimeImmutable::setTime

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::setTime — Define um horário

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::setTime() does not modify the object itself")]  
public function **DateTimeImmutable::setTime**(  
    [int](language.types.integer.md) `$hour`,  
    [int](language.types.integer.md) `$minute`,  
    [int](language.types.integer.md) `$second` = 0,  
    [int](language.types.integer.md) `$microsecond` = 0  
): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto DateTimeImmutable configurado com o horário fornecido.

### Parâmetros

`hour`
:   Hora do horário.

`minute`
:   Minuto do horário.

`second`
:   Segundo do horário.

`microsecond`
:   Microssegundo do horário.

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O comportamento com horários que podem ter duplicidade (durante o retorno do horário de verão) mudou. Anteriormente, o PHP usaria a segunda ocorrência do horário (depois do retorno do horário de verão), em vez da primeira ocorrência (antes do retorno). |
| 7.1.0 | O parâmetro `microsecond` foi incluído. |

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::setTime()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2001-01-01');

$newDate = $date->setTime(14, 55);
echo $newDate->format('Y-m-d H:i:s') . "\n";

$newDate = $date->setTime(14, 55, 24);
echo $newDate->format('Y-m-d H:i:s') . "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
2001-01-01 14:55:00
2001-01-01 14:55:24
```

**Exemplo #2 Valores que excedem os limites são transferidos para a escala imediatamente superior**

```
<?php
$date = new DateTimeImmutable('2001-01-01');

$newDate = $date->setTime(14, 55, 24);
echo $newDate->format('Y-m-d H:i:s') . "\n";

$newDate = $date->setTime(14, 55, 65);
echo $newDate->format('Y-m-d H:i:s') . "\n";

$newDate = $date->setTime(14, 65, 24);
echo $newDate->format('Y-m-d H:i:s') . "\n";

$newDate = $date->setTime(25, 55, 24);
echo $newDate->format('Y-m-d H:i:s') . "\n";
?>
```

O exemplo acima produzirá:

```
2001-01-01 14:55:24
2001-01-01 14:56:05
2001-01-01 15:05:24
2001-01-02 01:55:24
```

### Veja também

- [DateTimeImmutable::setDate()](datetimeimmutable.setdate.md) - Define a data
- [DateTimeImmutable::setISODate()](datetimeimmutable.setisodate.md) - Define a data ISO

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

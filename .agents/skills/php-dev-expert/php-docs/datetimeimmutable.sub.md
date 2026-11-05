# Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.sub.php

---

# DateTimeImmutable::sub

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

DateTimeImmutable::sub — 
Subtrai uma quantidade de dias, meses, anos, horas, minutos e segundos

### Descrição

#[[\NoDiscard](class.nodiscard.md)(`message`: "as DateTimeImmutable::sub() does not modify the object itself")]  
public function **DateTimeImmutable::sub**([DateInterval](class.dateinterval.md) `$interval`): [DateTimeImmutable](class.datetimeimmutable.md)

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md), com o
objeto [DateInterval](class.dateinterval.md) especificado substraído do
objeto DateTimeImmutable original.

### Parâmetros

`interval`
:   Um objeto [DateInterval](class.dateinterval.md)

### Valor Retornado

Retorna um novo objeto [DateTimeImmutable](class.datetimeimmutable.md) com os dados modificados.

### Erros/Exceções

Se uma operação não suportada for solicitada, por exemplo usando um
objeto [DateInterval](class.dateinterval.md) que representa especificação
relativa de tempo como `next weekday`, uma
exceção [DateInvalidOperationException](class.dateinvalidoperationexception.md) é lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança uma exceção [DateInvalidOperationException](class.dateinvalidoperationexception.md) em vez de um aviso quando uma operação não suportada for solicitada. |

### Examples

**Exemplo #1 Exemplo da função **DateTimeImmutable::sub()****

Estilo orientado a objetos

```
<?php
$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('P10D'));
echo $newDate->format('Y-m-d') . "\n";
?>
```

O exemplo acima produzirá:

```
2000-01-10
```

**Exemplo #2 Mais exemplos da função **DateTimeImmutable::sub()****

```
<?php
$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('PT10H30S'));
echo $newDate->format('Y-m-d H:i:s') . "\n";

$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('P7Y5M4DT4H3M2S'));
echo $newDate->format('Y-m-d H:i:s') . "\n";
?>
```

O exemplo acima produzirá:

```
2000-01-19 13:59:30
1992-08-15 19:56:58
```

**Exemplo #3 Cuidado ao subtrair meses**

```
<?php
$date = new DateTimeImmutable('2001-04-30');
$interval = new DateInterval('P1M');

$newDate1 = $date->sub($interval);
echo $newDate1->format('Y-m-d') . "\n";

$newDate2 = $newDate1->sub($interval);
echo $newDate2->format('Y-m-d') . "\n";
?>
```

O exemplo acima produzirá:

```
2001-03-30
2001-03-02
```

### Veja também

- [DateTimeImmutable::add()](datetimeimmutable.add.md) - Retorna um novo objeto, com adição de dias, meses, anos, horas, minutos e segundos
- [DateTimeImmutable::diff()](datetime.diff.md) - Retorna a diferença entre dois objetos DateTime
- [DateTimeImmutable::modify()](datetimeimmutable.modify.md) - Cria um novo objeto com seu timestamp modificado

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

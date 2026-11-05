# Retorna um novo objeto DateTimeImmutable encapsulando o objeto DateTimeInterface informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.createfrominterface.php

---

# DateTimeImmutable::createFromInterface

(PHP 8)

DateTimeImmutable::createFromInterface — Retorna um novo objeto DateTimeImmutable encapsulando o objeto DateTimeInterface informado

### Descrição

public static function **DateTimeImmutable::createFromInterface**([DateTimeInterface](class.datetimeinterface.md) `$object`): [DateTimeImmutable](class.datetimeimmutable.md)

### Parâmetros

`object`
:   O objeto [DateTimeInterface](class.datetimeinterface.md) que necessita
    ser convertido para uma versão imutável. Este objeto não é modificado, em
    vez disso uma nova instância [DateTimeImmutable](class.datetimeimmutable.md) é
    criada contendo as mesmas informações de data, horário e fuso.

### Valor Retornado

Retorna uma nova instância de [DateTimeImmutable](class.datetimeimmutable.md).

### Examples

**Exemplo #1 Criando um objeto de data/horário imutável**

```
<?php
$date = new DateTime("2014-06-20 11:45 Europe/London");
$immutable = DateTimeImmutable::createFromInterface($date);

$date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
$also_immutable = DateTimeImmutable::createFromInterface($date);
```

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

# Retorna um novo objeto DateTime encapsulando o objeto DateTimeInterface informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.createfrominterface.php

---

# DateTime::createFromInterface

(PHP 8)

DateTime::createFromInterface — Retorna um novo objeto DateTime encapsulando o objeto DateTimeInterface informado

### Descrição

public static function **DateTime::createFromInterface**([DateTimeInterface](class.datetimeinterface.md) `$object`): [DateTime](class.datetime.md)

### Parâmetros

`object`
:   O objeto [DateTimeInterface](class.datetimeinterface.md) que necessita
    ser convertido para uma versão mutável. Este objeto não é modificado, em
    vez disso uma nova instância [DateTime](class.datetime.md) é
    criada contendo as mesmas informações de data, horário e fuso.

### Valor Retornado

Retorna uma nova instância de [DateTime](class.datetime.md).

### Examples

**Exemplo #1 Criando um objeto de data/horário mutável**

```
<?php
$date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
$mutable = DateTime::createFromInterface($date);

$date = new DateTime("2014-06-20 11:45 Europe/London");
$also_mutable = DateTime::createFromInterface($date);
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

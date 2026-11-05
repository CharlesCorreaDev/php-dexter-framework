# Retorna uma nova instância de DateTime encapsulando o objeto DateTimeImmutable informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetime.createfromimmutable.php

---

# DateTime::createFromImmutable

(PHP 7 >= 7.3.0, PHP 8)

DateTime::createFromImmutable — Retorna uma nova instância de DateTime encapsulando o objeto DateTimeImmutable informado

### Descrição

public static function **DateTime::createFromImmutable**([DateTimeImmutable](class.datetimeimmutable.md) `$object`): static

### Parâmetros

`object`
:   O objeto imutável [DateTimeImmutable](class.datetimeimmutable.md) que necessita
    ser convertido para uma versão mutável. Este objeto não é modificado, em
    vez disso uma nova instância [DateTime](class.datetime.md) é
    criada contendo as mesmas informações de data, horário e fuso.

### Valor Retornado

Retorna uma nova instância [DateTime](class.datetime.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O método agora retorna uma instância da classe que está sendo chamada. Anteriormente, ele criava uma nova instância de [DateTime](class.datetime.md). |

### Examples

**Exemplo #1 Criando um objeto de data/horário mutável**

```
<?php
$date = new DateTimeImmutable("2014-06-20 11:45 Europe/London");
$mutable = DateTime::createFromImmutable( $date );
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

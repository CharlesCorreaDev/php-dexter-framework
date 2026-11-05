# Retorna uma nova instância DateTimeImmutable que encapsula um objeto DateTime informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimeimmutable.createfrommutable.php

---

# DateTimeImmutable::createFromMutable

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

DateTimeImmutable::createFromMutable — Retorna uma nova instância DateTimeImmutable que encapsula um objeto DateTime informado

### Descrição

public static function **DateTimeImmutable::createFromMutable**([DateTime](class.datetime.md) `$object`): static

### Parâmetros

`object`
:   O objeto mutável [DateTime](class.datetime.md) que se deseja
    converter para uma versão imutável. Este objeto não é modificado, mas
    em vez disso uma nova instância de [DateTimeImmutable](class.datetimeimmutable.md) é
    criado contendo a mesma data/horário e informação de fuso horário.

### Valor Retornado

Retorna uma nova instância de [DateTimeImmutable](class.datetimeimmutable.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O método agora retorna uma instância da classe atualmente chamada. Antes, ele criava um nova instância de [DateTimeImmutable](class.datetimeimmutable.md). |

### Examples

**Exemplo #1 Criando um objeto DateTime imutável**

```
<?php
$date = new DateTime("2014-06-20 11:45 Europe/London");
$immutable = DateTimeImmutable::createFromMutable( $date );
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

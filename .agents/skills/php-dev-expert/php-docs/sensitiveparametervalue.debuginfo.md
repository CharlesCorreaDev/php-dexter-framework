# Protege os valores sensíveis de exposição acidental

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sensitiveparametervalue.debuginfo.php

---

# SensitiveParameterValue::\_\_debugInfo

(PHP 8 >= 8.2.0)

SensitiveParameterValue::\_\_debugInfo — Protege os valores sensíveis de exposição acidental

### Descrição

public function **SensitiveParameterValue::\_\_debugInfo**(): [array](language.types.array.md)

Retorna um [array](language.types.array.md) vazio para proteger o valor sensível de exposição acidental quando [var\_dump()](function.var-dump.md) for usado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) vazio.

### Examples

**Exemplo #1 Passando um objeto [SensitiveParameterValue](class.sensitiveparametervalue.md) para [var\_dump()](function.var-dump.md)**

```
<?php
$s = new \SensitiveParameterValue('secret');

var_dump($s);
?>
```

O exemplo acima produzirá:

```
object(SensitiveParameterValue)#1 (0) {
}
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

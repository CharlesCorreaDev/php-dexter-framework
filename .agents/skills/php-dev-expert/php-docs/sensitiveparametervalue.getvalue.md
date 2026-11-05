# Retorna o valor sensível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sensitiveparametervalue.getvalue.php

---

# SensitiveParameterValue::getValue

(PHP 8 >= 8.2.0)

SensitiveParameterValue::getValue — Retorna o valor sensível

### Descrição

public function **SensitiveParameterValue::getValue**(): [mixed](language.types.mixed.md)

Obtém o valor sensível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor sensível.

### Examples

**Exemplo #1 Exemplo de **SensitiveParameterValue::getValue()****

```
<?php
$s = new \SensitiveParameterValue('secret');

echo "O valor protegido é: ", $s->getValue(), "\n";
?>
```

O exemplo acima produzirá:

```
O valor protegido é: secret
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

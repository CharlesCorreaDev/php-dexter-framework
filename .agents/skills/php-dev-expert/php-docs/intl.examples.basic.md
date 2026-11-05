# Uso básico desta extensão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intl.examples.basic.php

---

## Uso básico desta extensão

Cada módulo fornece dois tipos de API: um procedural e um orientado
a objeto. Ambos são na realidade idênticos e descritos no
documento correspondente.

> **Nota**:
>
> Todos as strings de entrada devem estar na codificação UTF-8. Todas as strings de saída
> também estarão em UTF-8.

**Exemplo #1 Exemplo de uso da API procedural**

```
<?php
$coll  = collator_create('pt_BR');
$result = collator_compare($coll, "string#1", "string#2");
?>
```

**Exemplo #2 Exemplo de uso da API procedural orientada a objeto**

```
<?php
$coll = new Collator('pt_BR');
$al   = $coll->getLocale(Locale::ACTUAL_LOCALE);
echo "Localidade atual: $al\n";

$formatter = new NumberFormatter('pt_BR', NumberFormatter::DECIMAL);
echo $formatter->format(1234567);
?>
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

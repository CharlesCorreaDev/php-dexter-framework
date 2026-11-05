# Formata uma lista de itens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intllistformatter.format.php

---

# IntlListFormatter::format

(No version information available, might only be in Git)

IntlListFormatter::format — Formata uma lista de itens

### Descrição

public function **IntlListFormatter::format**([array](language.types.array.md) `$list`): [string](language.types.string.md)|[false](language.types.singleton.md)

Formata uma lista de itens como uma string apropriada para a localidade.

### Parâmetros

`list`
:   Um array de strings a formatar como uma lista.

### Valor Retornado

A lista formatada como uma string ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **IntlListFormatter::format()****

```
<?php
$fmt = new IntlListFormatter('en_US', IntlListFormatter::TYPE_AND, IntlListFormatter::WIDTH_WIDE);
echo $fmt->format(['one', 'two', 'three']);
// one, two, and three

$fmt = new IntlListFormatter('en_US', IntlListFormatter::TYPE_OR, IntlListFormatter::WIDTH_WIDE);
echo $fmt->format(['one', 'two', 'three']);
// one, two, or three
?>
```

### Veja também

- [IntlListFormatter::\_\_construct()](intllistformatter.construct.md) - Cria uma instância de IntlListFormatter

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

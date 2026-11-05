# Obtém o chave gerada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.key.php

---

# Generator::key

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::key — Obtém o chave gerada

### Descrição

public function **Generator::key**(): [mixed](language.types.mixed.md)

Obtém a chave do valor gerado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave gerada.

### Examples

**Exemplo #1 Exemplo do método **Generator::key()****

```
<?php

function Gen()
{
    yield 'key' => 'value';
}

$gen = Gen();

echo "{$gen->key()} => {$gen->current()}";
```

O exemplo acima produzirá:

```
key => value
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

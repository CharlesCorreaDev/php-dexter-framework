# Copia contexto de hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-copy.php

---

# hash\_copy

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

hash\_copy — Copia contexto de hash

### Descrição

function **hash\_copy**([HashContext](class.hashcontext.md) `$context`): [HashContext](class.hashcontext.md)

### Parâmetros

`context`
:   Contexto de hash retornado por [hash\_init()](function.hash-init.md).

### Valor Retornado

Retorna uma cópia do contexto de hash.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Aceita e retorna [HashContext](class.hashcontext.md) em vez de recurso. |

### Examples

**Exemplo #1 Exemplo de **hash\_copy()****

```
<?php
$context = hash_init("sha256");
hash_update($context, "The quick brown fox ");

/* copia o contexto para poder continuar a usá-lo */
$copy_context = hash_copy($context);

echo hash_final($context), "\n";

hash_update($copy_context, "jumped over the lazy dog.");
echo hash_final($copy_context), "\n";
?>
```

O exemplo acima produzirá:

```
b29d66e56ed90cce9b0165c43fedec612b60a071974d8be4513e18580d55b5bd
68b1282b91de2c054c36629cb8dd447f12f096d3e3c587978dc2248444633483
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

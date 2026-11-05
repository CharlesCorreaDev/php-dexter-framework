# Cria uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.symlink.php

---

# symlink

(PHP 4, PHP 5, PHP 7, PHP 8)

symlink — Cria uma ligação simbólica

### Descrição

function **symlink**([string](language.types.string.md) `$target`, [string](language.types.string.md) `$link`): [bool](language.types.boolean.md)

**symlink()** cria uma ligação simbólica ao alvo existente
em `target` com o nome especificado em
`link`.

### Parâmetros

`target`
:   Alvo da ligação.

`link`
:   O nome da ligação.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

A função falha e emite um **`E_WARNING`**,
se `link` já existir.
No Windows, a função também falha e emite um **`E_WARNING`**
se `target` não existir.

### Examples

**Exemplo #1 Cria uma ligação simbólica**

```
<?php
$target = 'uploads.php';
$link = 'uploads';
symlink($target, $link);

echo readlink($link);
?>
```

### Veja também

- [is\_link()](function.is-link.md) - Informa se o arquivo é uma ligação simbólica
- [link()](function.link.md) - Criando uma ligação rígida
- [readlink()](function.readlink.md) - Retornar o alvo de uma ligação simbólica
- [linkinfo()](function.linkinfo.md) - Obtém informação sobre uma ligação
- [unlink()](function.unlink.md) - Apaga um arquivo

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

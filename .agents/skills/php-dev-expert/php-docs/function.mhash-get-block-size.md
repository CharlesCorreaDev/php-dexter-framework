# Obtém o tamanho de bloco da hash especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mhash-get-block-size.php

---

# mhash\_get\_block\_size

(PHP 4, PHP 5, PHP 7, PHP 8)

mhash\_get\_block\_size — Obtém o tamanho de bloco da hash especificada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **mhash\_get\_block\_size**([int](language.types.integer.md) `$algo`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o tamanho de um bloco da hash informada em `algo`.

### Parâmetros

`algo`
:   O ID da hash. Uma das constantes **`MHASH_hashname`**.

### Valor Retornado

Retorna o tamanho em bytes ou **`false`**, se a hash em `algo`
não existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use as [funções `hash_*()`](ref.hash.md) em seu lugar. |

### Examples

**Exemplo #1 Exemplo de **mhash\_get\_block\_size()****

```
<?php

echo mhash_get_block_size(MHASH_MD5); // 16

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

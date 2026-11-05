# Obtém o nome da hash especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mhash-get-hash-name.php

---

# mhash\_get\_hash\_name

(PHP 4, PHP 5, PHP 7, PHP 8)

mhash\_get\_hash\_name — Obtém o nome da hash especificada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **mhash\_get\_hash\_name**([int](language.types.integer.md) `$algo`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome da hash especificada em `algo`.

### Parâmetros

`algo`
:   O ID da hash. Uma das constantes **`MHASH_hashname`**.

### Valor Retornado

Retorna o nome da hash ou **`false`**, se a hash não existir.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use as [funções `hash_*()`](ref.hash.md) em seu lugar. |

### Examples

**Exemplo #1 Exemplo de **mhash\_get\_hash\_name()****

```
<?php

echo mhash_get_hash_name(MHASH_MD5); // MD5

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

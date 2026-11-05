# Obtém o ID de hash mais alto disponível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mhash-count.php

---

# mhash\_count

(PHP 4, PHP 5, PHP 7, PHP 8)

mhash\_count — Obtém o ID de hash mais alto disponível

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **mhash\_count**(): [int](language.types.integer.md)

Obtém o ID de hash mais alto disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o ID de hash mais alto disponível. Hashes são numeradas de 0 até este
ID de hash.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use as [funções `hash_*()`](ref.hash.md) em seu lugar. |

### Examples

**Exemplo #1 Listando todas as hashes**

```
<?php

$nr = mhash_count();

for ($i = 0; $i <= $nr; $i++) {
    echo sprintf("O tamanho de bloco de %s é %d\n",
        mhash_get_hash_name($i),
        mhash_get_block_size($i));
}
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

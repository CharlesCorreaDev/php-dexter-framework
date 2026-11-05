# Executa um autoteste no módulo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-self-test.php

---

# mcrypt\_module\_self\_test

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_self\_test — Executa um autoteste no módulo especificado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_self\_test**([string](language.types.string.md) `$algorithm`, [string](language.types.string.md) `$lib_dir` = ?): [bool](language.types.boolean.md)

Esta função executa o autoteste no algoritmo especificado.

### Parâmetros

`algorithm`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`lib_dir`
:   O parâmetro opcional `lib_dir` pode conter o
    local onde o módulo de algoritmo está no sistema.

### Valor Retornado

A função retorna **`true`** se o autoteste for bem-sucedido ou **`false`** quando ele
falhar.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_module\_self\_test()****

```
<?php
var_dump(mcrypt_module_self_test(MCRYPT_RIJNDAEL_128)) . "\n";
var_dump(mcrypt_module_self_test(MCRYPT_BOGUS_CYPHER));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
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

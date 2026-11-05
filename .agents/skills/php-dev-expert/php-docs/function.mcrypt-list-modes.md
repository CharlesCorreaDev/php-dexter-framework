# Obtém um array de todos os modos suportados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-list-modes.php

---

# mcrypt\_list\_modes

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_list\_modes — Obtém um array de todos os modos suportados

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_list\_modes**([string](language.types.string.md) `$lib_dir` = ini\_get("mcrypt.modes\_dir")): [array](language.types.array.md)

Obtém a lista de todos os modos suportados no
parâmetro `lib_dir`.

### Parâmetros

`lib_dir`
:   Especifica o diretório onde todos os modos estão localizados. Se não
    especificado, o valor da diretiva `mcrypt.modes_dir`
    do php.ini é usado.

### Valor Retornado

Retorna um array com todos os modos suportados.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_list\_modes()****

```
<?php
    $modes = mcrypt_list_modes();

    foreach ($modes as $mode) {
        echo "$mode <br />\n";
    }
?>
```

O exemplo acima produzirá uma lista com todos os algoritmos suportados
no diretório padrão dos modos. Se não estiver definido
com a diretiva `mcrypt.modes_dir` do php.ini,
o diretório padrão do mcrypt é usado (que
é /usr/local/lib/libmcrypt).

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

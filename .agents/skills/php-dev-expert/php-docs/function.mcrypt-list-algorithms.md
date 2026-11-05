# Obtém um array de todas as cifras suportadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-list-algorithms.php

---

# mcrypt\_list\_algorithms

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_list\_algorithms — Obtém um array de todas as cifras suportadas

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_list\_algorithms**([string](language.types.string.md) `$lib_dir` = ini\_get("mcrypt.algorithms\_dir")): [array](language.types.array.md)

Obtém a lista de todos os algoritmos suportados no
parâmetro `lib_dir`.

### Parâmetros

`lib_dir`
:   Especifica o diretório onde todos os algoritmos estão localizados. Se não
    especificado, o valor da diretiva `mcrypt.algorithms_dir`
    do php.ini é usado.

### Valor Retornado

Retorna um array com todos os algoritmos suportados.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_list\_algorithms()****

```
<?php
$algorithms = mcrypt_list_algorithms();
print_r($algorithms);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => cast-128
    [1] => gost
    [2] => rijndael-128
    [3] => twofish
    [4] => arcfour
    [5] => cast-256
    [6] => loki97
    [7] => rijndael-192
    [8] => saferplus
    [9] => wake
    [10] => blowfish-compat
    [11] => des
    [12] => rijndael-256
    [13] => serpent
    [14] => xtea
    [15] => blowfish
    [16] => enigma
    [17] => rc2
    [18] => tripledes
)
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

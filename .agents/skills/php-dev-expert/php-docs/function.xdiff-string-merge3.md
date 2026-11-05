# Mesclar 3 strings em uma

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xdiff-string-merge3.php

---

# xdiff\_string\_merge3

(PECL xdiff >= 0.2.0)

xdiff\_string\_merge3 — Mesclar 3 strings em uma

### Descrição

function **xdiff\_string\_merge3**(  
    [string](language.types.string.md) `$old_data`,  
    [string](language.types.string.md) `$new_data1`,  
    [string](language.types.string.md) `$new_data2`,  
    [string](language.types.string.md) `&$error` = ?  
): [mixed](language.types.mixed.md)

Mescla três strings em uma e retorna o resultado.
O `old_data` é uma versão original dos dados,
enquanto `new_data1` e `new_data2` são versões modificadas
de um original. Um erro opcional no parâmetro `error` opcional é usado para passar quaisquer
partes rejeitadas durante o processo de mesclagem.

### Parâmetros

`old_data`
:   Primeira sequência com dados. Atua como dados "antigos".

`new_data1`
:   Segunda string com dados. Atua como uma versão modificada de `old_data`.

`new_data2`
:   Terceira string com dados. Atua como uma versão modificada de `old_data`.

`error`
:   Se fornecido, as peças rejeitadas serão armazenadas dentro desta variável.

### Valor Retornado

Retorna a string mesclada, **`false`** se ocorrer um erro interno, ou **`true`**
se a string mesclada estiver vazia.

### Veja também

- [xdiff\_file\_merge3()](function.xdiff-file-merge3.md) - Mescla 3 arquivos em um

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

# Executa a transformação rot13 em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-rot13.php

---

# str\_rot13

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

str\_rot13 — Executa a transformação rot13 em uma string

### Descrição

function **str\_rot13**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Executa a codificação ROT13 no argumento `string`
e retorna a string resultante.

A codificação ROT13 simplesmente troca cada letra por 13 lugares no alfabeto,
enquanto não muda os caracteres não alfabéticos. Codificação e decodificação são
feitos pela mesma função, passando uma string codificada como argumento
retornará a string com a versão original.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a versão ROT13 de uma dada string.

### Examples

**Exemplo #1 Exemplo de **str\_rot13()****

```
<?php

echo str_rot13('PHP 8.3.0'); // CUC 8.3.0

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

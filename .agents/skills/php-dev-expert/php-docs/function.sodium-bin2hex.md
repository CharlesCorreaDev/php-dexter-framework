# Codifica para hexadecimal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-bin2hex.php

---

# sodium\_bin2hex

(PHP 7 >= 7.2.0, PHP 8)

sodium\_bin2hex — Codifica para hexadecimal

### Descrição

function **sodium\_bin2hex**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`): [string](language.types.string.md)

Converte uma string binária bruta em uma string codificada em hexadecimal. Ao contrário da função de codificação hexadecimal padrão,
**sodium\_bin2hex()** é de tempo constante (uma propriedade importante para qualquer código que
toca entradas criptográficas, como textos simples ou chaves).

### Parâmetros

`string`
:   String binária bruta.

### Valor Retornado

String codificada em hexadecimal.

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

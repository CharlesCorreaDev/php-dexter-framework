# Codifica uma string binária bruta com base64.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-bin2base64.php

---

# sodium\_bin2base64

(PHP 7 >= 7.2.0, PHP 8)

sodium\_bin2base64 — Codifica uma string binária bruta com base64.

### Descrição

function **sodium\_bin2base64**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$id`): [string](language.types.string.md)

Converte uma string binária bruta em uma string codificada em base64. Ao contrário de [base64\_encode()](function.base64-encode.md),
**sodium\_bin2base64()** é de tempo constante (uma propriedade que é importante para qualquer código que
toca entradas criptográficas, como textos simples ou chaves) e suporta vários conjuntos de caracteres.

### Parâmetros

`string`
:   String binária bruta.

`id`
:   - **`SODIUM_BASE64_VARIANT_ORIGINAL`** para codificação
      Base64 padrão (`A-Za-z0-9/\+`).
    - **`SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING`** para codificação
      Base64 padrão (`A-Za-z0-9/\+`), sem os caracteres de preenchimento `=`.
    - **`SODIUM_BASE64_VARIANT_URLSAFE`** para codificação Base64 segura para URL (`A-Za-z0-9\-_`).
    - **`SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING`** para codificação
      Base64 segura para URL (`A-Za-z0-9\-_`), sem os caracteres de preenchimento `=`.

### Valor Retornado

String codificada em Base64.

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

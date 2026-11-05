# Decodifica uma string codificada em base64 para binário bruto.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-base642bin.php

---

# sodium\_base642bin

(PHP 7 >= 7.2.0, PHP 8)

sodium\_base642bin — Decodifica uma string codificada em base64 para binário bruto.

### Descrição

function **sodium\_base642bin**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string`, [int](language.types.integer.md) `$id`, [string](language.types.string.md) `$ignore` = ""): [string](language.types.string.md)

Converte uma string codificada em base64 para binário bruto. Ao contrário de [base64\_decode()](function.base64-decode.md),
**sodium\_base642bin()** é de tempo constante (uma propriedade que é importante para qualquer código que
toca entradas criptográficas, como textos simples ou chaves) e suporta vários conjuntos de caracteres.

### Parâmetros

`string`
:   [string](language.types.string.md); String codificada.

`id`
:   - **`SODIUM_BASE64_VARIANT_ORIGINAL`** para codificação
      Base64 padrão (`A-Za-z0-9/\+`).
    - **`SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING`** para codificação
      Base64 padrão (`A-Za-z0-9/\+`), sem os caracteres de preenchimento `=`.
    - **`SODIUM_BASE64_VARIANT_URLSAFE`** para codificação Base64 segura para URL (`A-Za-z0-9\-_`).
    - **`SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING`** para codificação
      Base64 segura para URL (`A-Za-z0-9\-_`), sem os caracteres de preenchimento `=`.

`ignore`
:   Caracteres a serem ignorados ao decodificar (por exemplo, caracteres de espaço em branco).

### Valor Retornado

String decodificada.

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

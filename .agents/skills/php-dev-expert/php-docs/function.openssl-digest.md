# Computa um resumo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-digest.php

---

# openssl\_digest

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

openssl\_digest — Computa um resumo

### Descrição

function **openssl\_digest**([string](language.types.string.md) `$data`, [string](language.types.string.md) `$digest_algo`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Calcula um valor de hash de resumo para os dados fornecidos usando um determinado método
e retorna uma string bruta ou codificada em binário hexadecimal.

### Parâmetros

`data`
:   Os dados.

`digest_algo`
:   O método de resumo a ser utilizado, por exemplo, "sha256", consulte [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md) para uma lista de métodos de resumo disponíveis.

`binary`
:   Se este parâmetro for igual a **`true`**, os dados serão retornados brutos, caso contrário o valor
    de retorno será codificado em binário hexadecimal.

### Valor Retornado

Retorna o valor de hash em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um algoritmo de assinatura desconhecido
for passado no parâmetro `digest_algo`.

### Veja também

- [openssl\_get\_md\_methods()](function.openssl-get-md-methods.md) - Obtém métodos de resumo disponíveis

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

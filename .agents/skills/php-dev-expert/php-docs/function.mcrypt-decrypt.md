# Descriptografa texto criptografado com parâmetros fornecidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-decrypt.php

---

# mcrypt\_decrypt

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_decrypt — Descriptografa texto criptografado com parâmetros fornecidos

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_decrypt**(  
    [string](language.types.string.md) `$cipher`,  
    [string](language.types.string.md) `$key`,  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$mode`,  
    [string](language.types.string.md) `$iv` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa os dados em `data` e retorna os dados não criptografados.

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`key`
:   A chave com a qual os dados foram criptografados. Se o tamanho da chave fornecida não for
    suportado pela cifra, a função emitirá um aviso e retornará **`false`**

`data`
:   Os dados que serão descriptografados com `cipher`
    e `mode` fornecidos. Se o tamanho dos dados não for n \* tamanho\_do\_bloco,
    os dados serão preenchidos com '`\0`'.

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

`iv`
:   Usado para a inicialização nos modos CBC, CFB, OFB e em alguns algoritmos no modo STREAM. Se o tamanho do IV fornecido não for suportado pelo modo de encadeamento ou nenhum IV for fornecido, mas o modo de encadeamento exigir um, a função emitirá um aviso e retornará **`false`**.

### Valor Retornado

Retorna os dados descriptografados como uma string ou **`false`** em caso de falha.

### Veja também

- [mcrypt\_encrypt()](function.mcrypt-encrypt.md) - Criptografa texto simples com parâmetros fornecidos

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

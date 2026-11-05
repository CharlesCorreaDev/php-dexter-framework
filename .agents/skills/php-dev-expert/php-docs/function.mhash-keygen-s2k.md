# Gera uma chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mhash-keygen-s2k.php

---

# mhash\_keygen\_s2k

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

mhash\_keygen\_s2k — Gera uma chave

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.1.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **mhash\_keygen\_s2k**(  
    [int](language.types.integer.md) `$algo`,  
    [string](language.types.string.md) `$password`,  
    [string](language.types.string.md) `$salt`,  
    [int](language.types.integer.md) `$length`  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Gera um chave de acordo com o parâmetro `algo` a partir de uma
senha de usuário informada em `password`.

Este é o algoritmo Salted S2K como especificado no documento OpenPGP
([» RFC 2440](https://datatracker.ietf.org/doc/html/rfc2440)).

Tenha em mente que senhas fornecidas pelos usuários não são
adequadas para uso como chaves em algoritmos criptográficos, pois os usuários normalmente
escolhem chaves que podem ser escritas no teclado. Estas senhas usam
somente 6 a 7 bits por caractere (ou menos). É altamente recomendado
usar algum tipo de transformação (como esta função) na chave informada
pelo usuário.

### Parâmetros

`algo`
:   O ID da hash usada para criar a chave.
    Um das constantes **`MHASH_hashname`**.

`password`
:   Uma senha fornecida pelo usuário.

`salt`
:   Deve ser diferente e aleatório o suficiente para cada chave gerada de forma
    que sejam criadas chaves diferentes. Como `salt`
    precisa ser conhecido quando se verifica as chaves, é uma boa prática concatenar
    a chave a ele. Salt tem um comprimento fixo de 8 bytes e será completado com zeros
    forem fornecidos menos bytes.

`length`
:   O tamanho da chave, em bytes.

### Valor Retornado

Retorna a chave gerada como uma string, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada. Use as [funções `hash_*()`](ref.hash.md) em seu lugar. |

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

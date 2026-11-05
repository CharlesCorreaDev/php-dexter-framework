# Calcula o hash md5 de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.md5.php

---

# md5

(PHP 4, PHP 5, PHP 7, PHP 8)

md5 — Calcula o hash md5 de uma string

**Aviso**

Não é recomendado usar esta função para proteger senhas,
devido à natureza rápida deste algoritmo de hash. Consulte as
[Perguntas Frequentes sobre Hashing de Senha](faq.passwords.md#faq.passwords.fasthash)
para obter detalhes e melhores práticas.

### Descrição

function **md5**([string](language.types.string.md) `$string`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)

Calcula o hash MD5 hash da `string` usando o
[» Algoritmo de Sintetização de Mensagem MD5 da
RSA Data Security, Inc.](https://datatracker.ietf.org/doc/html/rfc1321), e retorna esse hash.

### Parâmetros

`string`
:   A string.

`binary`
:   Se o parâmetro opcional `binary` for definido para **`true`**,
    a sintetização MD5 é retornada em formato bruto binário com um comprimento
    de 16 bytes.

### Valor Retornado

Retorna o hash como um número hexadecimal de 32 caracteres.

### Examples

**Exemplo #1 Um exemplo de **md5()****

```
<?php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
?>
```

### Veja também

- [hash()](function.hash.md) - Gera um valor hash (resumo da mensagem)
- [password\_hash()](function.password-hash.md) - Cria um hash de senha

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

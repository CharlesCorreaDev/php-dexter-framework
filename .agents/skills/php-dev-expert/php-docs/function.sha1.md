# Calcula o hash SHA1 de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sha1.php

---

# sha1

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

sha1 — Calcula o hash SHA1 de uma string

**Aviso**

Não é recomendado usar esta função para proteger senhas,
devido à natureza rápida deste algoritmo de hash. Consulte as
[Perguntas Frequentes sobre Hashing de Senha](faq.passwords.md#faq.passwords.fasthash)
para obter detalhes e melhores práticas.

### Descrição

function **sha1**([string](language.types.string.md) `$string`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)

Calcula o hash SHA1 da `string` usando o algoritmo
[» US Secure Hash Algorithm 1](https://datatracker.ietf.org/doc/html/rfc3174).

### Parâmetros

`string`
:   A string de entrada.

`binary`
:   Se o parâmetro opcional `binary` for definido para **`true`**,
    o hash SHA1 é retornado em formato binário bruto com um
    comprimento de 20 bytes, caso contrário o valor retornado é um número
    hexadecimal de 40 caracteres.

### Valor Retornado

Retorna o hash SHA1 como uma string.

### Examples

**Exemplo #1 Um exemplo de **sha1()****

```
<?php
$str = 'banana';

if (sha1($str) === '250e77f12a5ab6972a0895d290c4792f0a326ea8') {
    echo "Gostaria de uma banana prata ou uma banana da terra?";
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

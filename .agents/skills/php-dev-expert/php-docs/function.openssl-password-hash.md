# Cria um hash de senha usando a implementação Argon2 do OpenSSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-password-hash.php

---

# openssl\_password\_hash

(PHP 8 >= 8.4.0)

openssl\_password\_hash — Cria um hash de senha usando a implementação Argon2 do OpenSSL

### Descrição

function **openssl\_password\_hash**([string](language.types.string.md) `$algo`, [string](language.types.string.md) `$password`, [array](language.types.array.md) `$options` = []): [string](language.types.string.md)

Cria um hash de senha usando a implementação Argon2 do OpenSSL. Esta é uma
alternativa à função [password\_hash()](function.password-hash.md) que usa o OpenSSL como
backend, que pode oferecer aceleração de hardware em algumas plataformas.

Esta função só está disponível quando o PHP é compilado com suporte a
OpenSSL que inclui Argon2 (`HAVE_OPENSSL_ARGON2`).

### Parâmetros

`algo`
:   O algoritmo de hash de senha. Valores suportados:
    `"argon2id"` e `"argon2i"`.

`password`
:   A senha do usuário.

`options`
:   Um [array](language.types.array.md) associativo de opções. Chaves suportadas:

    - `memory_cost` - Memória máxima (em KiB) que pode ser
      usada para computar o hash
    - `time_cost` - Tempo máximo que pode ser
      usado para computar o hash
    - `threads` - Número de threads a ser
      usado para computar o hash

### Valor Retornado

Retorna o hash de senha como uma [string](language.types.string.md).

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `algo`
não for um dos valores suportados
(`"argon2i"` ou `"argon2id"`).

Lança um [Error](class.error.md) se a operação de hash falhar
por um motivo desconhecido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Função adicionada. |

### Examples

**Exemplo #1 Exemplo de **openssl\_password\_hash()****

```
<?php
$hash = openssl_password_hash('argon2id', 'my-secret-password');
echo $hash;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
$argon2id$v=19$m=65536,t=4,p=1$c29tZXNhbHR2YWx1ZQ$valordehash...
```

**Exemplo #2 **openssl\_password\_hash()** com opções personalizadas**

```
<?php
$hash = openssl_password_hash('argon2id', 'my-secret-password', [
    'memory_cost' => 65536,
    'time_cost'   => 4,
    'threads'     => 1,
]);
?>
```

### Veja também

- [openssl\_password\_verify()](function.openssl-password-verify.md) - Verifica uma senha em relação a um hash usando a implementação Argon2 do OpenSSL
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

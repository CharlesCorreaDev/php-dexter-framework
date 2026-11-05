# Verifica uma senha em relação a um hash usando a implementação Argon2 do OpenSSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-password-verify.php

---

# openssl\_password\_verify

(PHP 8 >= 8.4.0)

openssl\_password\_verify — Verifica uma senha em relação a um hash usando a implementação Argon2 do OpenSSL

### Descrição

function **openssl\_password\_verify**([string](language.types.string.md) `$algo`, [string](language.types.string.md) `$password`, [string](language.types.string.md) `$hash`): [bool](language.types.boolean.md)

Verifica que uma senha corresponde a um hash criado por
[openssl\_password\_hash()](function.openssl-password-hash.md).

Esta função só está disponível quando o PHP é compilado com suporte a
OpenSSL que inclui Argon2 (`HAVE_OPENSSL_ARGON2`).

### Parâmetros

`algo`
:   O algoritmo de hash de senha. Valores suportados:
    `"argon2id"` e `"argon2i"`.

`password`
:   A senha do usuário.

`hash`
:   Um hash criado por [openssl\_password\_hash()](function.openssl-password-hash.md).

### Valor Retornado

Retorna **`true`** se houver correspondência entre o hash e a senha ou **`false`** caso contrário.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `algo`
não for um dos valores suportados
(`"argon2i"` ou `"argon2id"`).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Função adicionada. |

### Examples

**Exemplo #1 Exemplo de **openssl\_password\_verify()****

```
<?php
$hash = openssl_password_hash('argon2id', 'my-secret-password');

if (openssl_password_verify('argon2id', 'my-secret-password', $hash)) {
    echo 'Senha corresponde.';
} else {
    echo 'Senha não corresponde.';
}
?>
```

### Veja também

- [openssl\_password\_hash()](function.openssl-password-hash.md) - Cria um hash de senha usando a implementação Argon2 do OpenSSL
- [password\_verify()](function.password-verify.md) - Verifica se uma senha corresponde a um hash

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

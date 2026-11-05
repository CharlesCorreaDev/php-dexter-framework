# Definir função de retorno do provedor de senha

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-ffi-set-pass-provider.php

---

# rnp\_ffi\_set\_pass\_provider

(PECL rnp >= 0.1.1)

rnp\_ffi\_set\_pass\_provider — Definir função de retorno do provedor de senha

### Descrição

function **rnp\_ffi\_set\_pass\_provider**([RnpFFI](class.rnpffi.md) `$ffi`, [callable](language.types.callable.md) `$password_callback`): [bool](language.types.boolean.md)

Define a função do provedor de senha. Esta função pode solicitar a senha em uma entrada padrão
(se o script PHP for executado em um ambiente de linha de comando), exibir a caixa de diálogo da interface gráfica ou fornecer
a senha de qualquer outra maneira possível. As senhas solicitadas são usadas para criptografar ou descriptografar
chaves secretas ou realizar operações simétricas de criptografia/descriptografia.

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`password_callback`
:   A função que deve ser chamada para cada solicitação de senha. Possui a seguinte assinatura:

    function password\_callback([string](language.types.string.md) `$key_fp`, [string](language.types.string.md) `$pgp_context`, [string](language.types.string.md) `&$password`): [bool](language.types.boolean.md)

    - `$key_fp` - A impressão digital da chave, se houver. Pode ser vazio.
    - `$pgp_context` - String que descreve por que a chave está sendo solicitada.
    - `$password` - Variável de referência onde a senha fornecida deve ser armazenada como string.

    A função de retorno deve retornar **`true`** se a senha foi definida com sucesso ou **`false`** em caso de falha.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 exemplo de função de retorno simples**

```
<?php
function password_callback(string $key_fp, string $pgp_context, string &$password)
{
    $password = "password";

    return true;
}

$ffi = rnp_ffi_create('GPG', 'GPG');

rnp_ffi_set_pass_provider($ffi, 'password_callback');
```

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

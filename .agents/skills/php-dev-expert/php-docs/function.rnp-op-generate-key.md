# Gera chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-op-generate-key.php

---

# rnp\_op\_generate\_key

(PECL rnp >= 0.1.1)

rnp\_op\_generate\_key — Gera chave

### Descrição

function **rnp\_op\_generate\_key**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$userid`,  
    [string](language.types.string.md) `$key_alg`,  
    [string](language.types.string.md) `$sub_alg` = ?,  
    [array](language.types.array.md) `$options` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`userid`
:   ID de usuário PGP - texto cuja intenção é representar
    o nome e endereço de e-mail do titular da chave.

`key_alg`
:   Algoritmo de chave primária (ou seja, 'RSA', 'DSA', etc).

`sub_alg`
:   Algoritmo de subchave. Se não for definido, a subchave não será gerada.

`options`
:   Um array associativo com opções.

    | Chave | Tipo de dado | Descrição |
    | --- | --- | --- |
    | `"bits"` | inteiro | Tamanho da chave primária em bits. Aplicável apenas às chaves RSA, DSA e El-Gamal. |
    | `"hash"` | string | Algoritmo hash usado em autoassinatura ou assinatura de ligação de subchave. |
    | `"dsa_qbits"` | inteiro | Define o tamanho de um parâmetro `q` para a chave DSA. Nota: o valor padrão apropriado será definido, dependendo dos bits da chave. No entanto, ele pode ser substituído, se necessário. |
    | `"curve"` | string | Define a curva usada para a chave ECC. Nota: isto só é aplicável para chaves ECDSA, ECDH e SM2. |
    | `"request_password"` | booleano | Habilita a solicitação de senha por meio do provedor de senha. Esta senha será usada para criptografia de chave. A função de retorno do provedor de senha deve ser definida antecipadamente chamando [rnp\_ffi\_set\_pass\_provider()](function.rnp-ffi-set-pass-provider.md). Nota: esta configuração será ignorada se a senha for definida via`"password"` |
    | `"password"` | string | Define a senha usada para criptografar os dados da chave secreta. |
    | `"expiration"` | inteiro | Define o tempo de expiração da chave e da subchave em segundos. |
    | `"sub_bits"` | inteiro | Tamanho da subchave em bits. Aplicável apenas às chaves RSA, DSA e El-Gamal. |
    | `"sub_hash"` | string | Algoritmo hash usado na autoassinatura de subchave ou assinatura de ligação de subchave. |
    | `"sub_curve"` | string | Define a curva usada para a subchave ECC. Nota: isto só é aplicável para chaves ECDSA, ECDH e SM2. |

### Valor Retornado

Impressão digital da chave primária gerada ou **`false`** em caso de falha. Esta impressão digital pode ser usada
posteriormente para fazer referência à chave em operações de assinatura e criptografia. Os dados da chave são armazenados no
contexto da memória FFI e podem ser salvos usando
[rnp\_save\_keys()](function.rnp-save-keys.md) ou [rnp\_save\_keys\_to\_path()](function.rnp-save-keys-to-path.md).

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

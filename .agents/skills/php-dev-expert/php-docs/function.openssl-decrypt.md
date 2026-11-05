# Descritografa dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-decrypt.php

---

# openssl\_decrypt

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

openssl\_decrypt — Descritografa dados

### Descrição

function **openssl\_decrypt**(  
    [string](language.types.string.md) `$data`,  
    [string](language.types.string.md) `$cipher_algo`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$passphrase`,  
    [int](language.types.integer.md) `$options` = 0,  
    [string](language.types.string.md) `$iv` = "",  
    [?](language.types.null.md)[string](language.types.string.md) `$tag` = **`null`**,  
    [string](language.types.string.md) `$aad` = ""  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa uma string bruta ou codificada em base64 usando um determinado método e senha.

### Parâmetros

`data`
:   A mensagem criptografada a ser descriptografada.

`cipher_algo`
:   O método de criptografia. Para obter uma lista de métodos de criptografia disponíveis, use
    [openssl\_get\_cipher\_methods()](function.openssl-get-cipher-methods.md).

`passphrase`
:   A senha. Se a senha for menor que o esperado, ela será preenchida silenciosamente com
    caracteres `NUL`; se a senha for maior que o esperado, ela será
    truncada silenciosamente.

    **Cuidado**

    Não há função de derivação de chave usada para `passphrase` como o próprio nome
    pode sugerir. A única operação utilizada é o preenchimento com caracteres `NUL`
    ou truncamento se o comprimento for diferente do esperado.

`options`
:   `options` é uma disjunção binária das constantes
    **`OPENSSL_RAW_DATA`**,
    **`OPENSSL_ZERO_PADDING`**
    e **`OPENSSL_DONT_ZERO_PAD_KEY`**.

    Quando **`OPENSSL_RAW_DATA`** estiver definido,
    `data` deve estar em formato binário bruto.
    Quando não estiver definido, `data`
    deve estar codificado em Base64.

`iv`
:   Um Vetor de Inicialização (IV) não-**`null`**. Se o IV for menor que o esperado, ele será preenchido com
    caracteres `NUL` e um alerta será emitido; se a senha for maior
    que o esperado, ela será truncada e um alerta será emitido.

`tag`
:   A etiqueta de autenticação no modo de criptografia AEAD. Se estiver incorreto, a autenticação falha e a função retorna **`false`**.

    **Cuidado**

    O comprimento da etiqueta `tag` não é verificado pela função.
    É responsabilidade do chamador garantir que o comprimento da etiqueta
    corresponda ao comprimento da etiqueta recuperada quando [openssl\_encrypt()](function.openssl-encrypt.md)
    for chamada. Caso contrário, a descriptografia poderá ser bem-sucedida se a etiqueta fornecida
    corresponder apenas ao início da etiqueta adequada.

`aad`
:   Dados autenticados adicionais.

### Valor Retornado

A string descriptografada em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se um algoritmo de criptografia
desconhecido for passado através do parâmetro `cipher_algo`.

Emite um erro de nível **`E_WARNING`** se um valor vazio for passado
através do parâmetro `iv`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | `tag` agora pode ser nulo. |
| 7.1.0 | Os parâmetros `tag` e `aad` foram adicionados. |

### Veja também

- [openssl\_encrypt()](function.openssl-encrypt.md) - Criptografa dados

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

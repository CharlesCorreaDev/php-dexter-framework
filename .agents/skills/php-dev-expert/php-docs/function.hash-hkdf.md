# Gera uma derivação de chave HKDF de uma entrada de chave fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-hkdf.php

---

# hash\_hkdf

(PHP 7 >= 7.1.2, PHP 8)

hash\_hkdf — Gera uma derivação de chave HKDF de uma entrada de chave fornecida

### Descrição

function **hash\_hkdf**(  
    [string](language.types.string.md) `$algo`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`,  
    [int](language.types.integer.md) `$length` = 0,  
    [string](language.types.string.md) `$info` = "",  
    [string](language.types.string.md) `$salt` = ""  
): [string](language.types.string.md)

### Parâmetros

`algo`
:   Nome do algoritmo de hash selecionado (por exemplo, `"sha256"`).
    Para uma lista de algoritmos suportados, veja [hash\_hmac\_algos()](function.hash-hmac-algos.md).
    > **Nota**:
    >
    > Funções de hash não criptográficas não são permitidas.

`key`
:   Material de chaveamento de entrada (binário bruto). Não pode estar vazio.

`length`
:   Comprimento de saída desejado em bytes.
    Não pode ser maior que 255 vezes o tamanho da função hash escolhida.

    Se `length` for `0`, o comprimento de saída
    será definido como padrão para o tamanho da função hash escolhida.

`info`
:   String de informação específica da aplicação/contexto.

`salt`
:   Salt a ser usado na derivação.

    Embora opcional, adicionar salt aleatório melhora significativamente a força do HKDF.

### Valor Retornado

Retorna uma string contendo uma representação binária bruta da chave derivada
(também conhecida como material de chaveamento de saída - OKM).

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se `key`
estiver vazio, `algo` for desconhecido ou não criptográfico,
`length` for menor que `0` ou muito grande
(maior que 255 vezes o tamanho da função hash).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) em caso de erro. Anteriormente, **`false`** era retornado e uma mensagem **`E_WARNING`** era emitida. |

### Examples

O exemplo abaixo produz um par de chaves separadas, adequadas para a criação de uma
construção de criptografia seguida de HMAC, usando AES-256 e SHA-256 para criptografia e
autenticação, respectivamente.

**Exemplo #1 Exemplo de **hash\_hkdf()****

```
<?php
// Gera uma chave aleatória e adiciona um salt para fortalecê-la durante a derivação.
$inputKey = random_bytes(32);
$salt = random_bytes(16);

// Deriva um par de chaves separadas, usando a mesma entrada criada acima.
$encryptionKey = hash_hkdf('sha256', $inputKey, 32, 'aes-256-encryption', $salt);
$authenticationKey = hash_hkdf('sha256', $inputKey, 32, 'sha-256-authentication', $salt);

var_dump($encryptionKey !== $authenticationKey); // bool(true)
?>
```

### Veja também

- [hash\_pbkdf2()](function.hash-pbkdf2.md) - Gera uma derivação de chave PBKDF2 de uma senha fornecida
- [» RFC 5869](https://datatracker.ietf.org/doc/html/rfc5869)
- [» implementação do usuário](https://github.com/narfbg/hash_hkdf_compat)

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

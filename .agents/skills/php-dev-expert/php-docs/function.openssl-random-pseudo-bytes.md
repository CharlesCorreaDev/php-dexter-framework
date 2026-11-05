# Gera uma sequência pseudo-aleatória de bytes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-random-pseudo-bytes.php

---

# openssl\_random\_pseudo\_bytes

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

openssl\_random\_pseudo\_bytes — Gera uma sequência pseudo-aleatória de bytes

### Descrição

function **openssl\_random\_pseudo\_bytes**([int](language.types.integer.md) `$length`, [bool](language.types.boolean.md) `&$strong_result` = **`null`**): [string](language.types.string.md)

Gera uma [string](language.types.string.md) de bytes pseudo-aleatórios, com o número de bytes
determinado pelo parâmetro `length`.

Também indica se um algoritmo criptograficamente forte foi usado para produzir os
bytes pseudo-aleatórios, e faz isso através do parâmetro opcional `strong_result`.
É raro que isso seja **`false`**, mas alguns sistemas podem estar quebrados ou antigos.

### Parâmetros

`length`
:   O comprimento da sequência de bytes desejada. Deve ser um número inteiro positivo menor ou igual a `2147483647`.
    O PHP tentará converter este parâmetro em um número inteiro não nulo para usá-lo.

`strong_result`
:   Se passado para a função, conterá um valor [bool](language.types.boolean.md) que determina
    se o algoritmo usado era "criptograficamente forte", por exemplo, seguro para uso com GPG,
    senhas, etc. **`true`** se sim, caso contrário **`false`**.

### Valor Retornado

Retorna a [string](language.types.string.md) de bytes gerada.

### Erros/Exceções

**openssl\_random\_pseudo\_bytes()** lança uma [Exception](class.exception.md)
em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `strong_result` agora pode ser nulo. |
| 7.4.0 | A função não retorna mais **`false`** em caso de falha, mas em vez disso lança uma [Exception](class.exception.md). |

### Examples

**Exemplo #1 Exemplo de **openssl\_random\_pseudo\_bytes()****

```
<?php
for ($i = 1; $i <= 4; $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex   = bin2hex($bytes);

    echo "Comprimentos: Bytes: $i e Hex: " . strlen($hex) . PHP_EOL;
    var_dump($hex);
    var_dump($cstrong);
    echo PHP_EOL;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Comprimentos: Bytes: 1 e Hex: 2
string(2) "42"
bool(true)

Comprimentos: Bytes: 2 e Hex: 4
string(4) "dc6e"
bool(true)

Comprimentos: Bytes: 3 e Hex: 6
string(6) "288591"
bool(true)

Comprimentos: Bytes: 4 e Hex: 8
string(8) "ab86d144"
bool(true)
```

### Veja também

- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros
- [bin2hex()](function.bin2hex.md) - Converte um dado binário em representação hexadecimal
- [crypt()](function.crypt.md) - Hash unidirecional de string
- [random\_int()](function.random-int.md) - Obtém um número inteiro selecionado uniformemente e criptograficamente seguro

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

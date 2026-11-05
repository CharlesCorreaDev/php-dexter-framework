# Compila uma string para uso como argumento salt para crypt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.crypt-gensalt.php

---

# crypt\_gensalt

(PECL xpass >= 1.1.0)

crypt\_gensalt — Compila uma string para uso como argumento salt para crypt

### Descrição

function **crypt\_gensalt**([string](language.types.string.md) `$prefix` = **`null`**, [int](language.types.integer.md) `$count` = 0): [?](language.types.null.md)[string](language.types.string.md)

Compila uma string para uso como argumento salt para [crypt()](function.crypt.md).

### Parâmetros

`prefix`
:   Método de hash.
    Uma das constantes **`CRYPT_PREFIX_*`**.
    Se **`null`**, o melhor método de hash disponível será selecionado.

`count`
:   Controla o custo de processamento do hash;
    o intervalo válido e o significado exato da contagem dependem do método de hash,
    mas números maiores correspondem a hashes mais custosos em
    termos de tempo de CPU e possivelmente uso de memória.
    Se a contagem for `0`, um custo padrão baixo será selecionado.

### Valor Retornado

Retorna uma string com a configuração, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **crypt\_gensalt()****

```
<?php
// Gera o salt
$salt = crypt_gensalt(CRYPT_PREFIX_BLOWFISH);
// Faz hash da senha
$hash = crypt("secret", $salt);
// Verifica o hash
$test = hash_equals(crypt("secret", $hash), $hash);
var_dump($salt, $hash, $test);
?>
```

O exemplo acima produzirá:

```
string(29) "$2y$05$GcPykP.Am8C1.dGamdpwW."
string(60) "$2y$05$GcPykP.Am8C1.dGamdpwW.1RR.7uicWvJPZfJfCEizZHqVWwuaJLm"
bool(true)
```

### Veja também

- [crypt\_preferred\_method()](function.crypt-preferred-method.md) - Obtém o prefixo do método de hash preferido
- [crypt()](function.crypt.md) - Hash unidirecional de string
- [hash\_equals()](function.hash-equals.md) - Comparação de strings segura para ataque de temporização

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

# Inicializa um hash para fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-generichash-init.php

---

# sodium\_crypto\_generichash\_init

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_generichash\_init — Inicializa um hash para fluxo

### Descrição

function **sodium\_crypto\_generichash\_init**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key` = "", [int](language.types.integer.md) `$length` = **`SODIUM_CRYPTO_GENERICHASH_BYTES`**): [string](language.types.string.md)

O método de inicialização para a API generichash de fluxo.

### Parâmetros

`key`
:   A chave generichash.

`length`
:   O comprimento de saída esperado da função hash.

### Valor Retornado

Retorna um estado de hash, serializado como uma string binária bruta.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_generichash\_init()****

```
<?php
$messages = [random_bytes(32), random_bytes(32), random_bytes(16)];
$state = sodium_crypto_generichash_init('', 32);
foreach ($messages as $message) {
    sodium_crypto_generichash_update($state, $message);
}
$final = sodium_crypto_generichash_final($state, 32);
var_dump(sodium_bin2hex($final));
$allAtOnce = sodium_crypto_generichash(implode('', $messages));
var_dump(sodium_bin2hex($allAtOnce));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(64) "a2939a9163cb7c796ec28e01028489e72475c136b2697ea59e3e760ab4a8ab20"
string(64) "a2939a9163cb7c796ec28e01028489e72475c136b2697ea59e3e760ab4a8ab20"
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

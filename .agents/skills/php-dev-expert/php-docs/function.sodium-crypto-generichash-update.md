# Adiciona mensagem a um hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-generichash-update.php

---

# sodium\_crypto\_generichash\_update

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_generichash\_update — Adiciona mensagem a um hash

### Descrição

function **sodium\_crypto\_generichash\_update**([string](language.types.string.md) `&$state`, [string](language.types.string.md) `$message`): [true](language.types.singleton.md)

Adiciona uma mensagem ao estado do hash interno.

### Parâmetros

`state`
:   O valor de retorno de [sodium\_crypto\_generichash\_init()](function.sodium-crypto-generichash-init.md).

`message`
:   Dados a serem anexados ao estado de hash.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de **sodium\_crypto\_generichash\_update()****

```
<?php
$messages = [random_bytes(32), random_bytes(32), random_bytes(16)];
$state = sodium_crypto_generichash_init();
foreach ($messages as $message) {
    sodium_crypto_generichash_update($state, $message);
}
$final = sodium_crypto_generichash_final($state);
var_dump(sodium_bin2hex($final));

$allAtOnce = sodium_crypto_generichash(implode('', $messages));
var_dump(sodium_bin2hex($allAtOnce));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(64) "e16e28bbbbcc39d9f5b1cbc33c41f1d217808640103e57a41f24870f79831e04"
string(64) "e16e28bbbbcc39d9f5b1cbc33c41f1d217808640103e57a41f24870f79831e04"
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

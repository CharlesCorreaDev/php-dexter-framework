# Recupera a impressão digital do servidor remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-fingerprint.php

---

# ssh2\_fingerprint

(PECL ssh2 >= 0.9.0)

ssh2\_fingerprint — Recupera a impressão digital do servidor remoto

### Descrição

function **ssh2\_fingerprint**([resource](language.types.resource.md) `$session`, [int](language.types.integer.md) `$flags` = SSH2\_FINGERPRINT\_MD5 | SSH2\_FINGERPRINT\_HEX): [string](language.types.string.md)

Retorna um hash de chave de host do servidor de uma sessão ativa.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

`flags`
:   `flags` podem ser
    **`SSH2_FINGERPRINT_MD5`** ou
    **`SSH2_FINGERPRINT_SHA1`** com operação lógica OR com
    **`SSH2_FINGERPRINT_HEX`** ou
    **`SSH2_FINGERPRINT_RAW`**.

### Valor Retornado

Retorna o hash da chave do host como uma string.

### Examples

**Exemplo #1 Verificando a impressão digital em relação a um valor conhecido**

```
<?php
$known_host = '6F89C2F0A719B30CC38ABDF90755F2E4';

$connection = ssh2_connect('shell.example.com', 22);

$fingerprint = ssh2_fingerprint($connection,
               SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX);

if ($fingerprint != $known_host) {
  die("CHAVE DO HOST NÃO CORRESPONDE!\n" .
      "Possível ataque Man-In-The-Middle?");
}
?>
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

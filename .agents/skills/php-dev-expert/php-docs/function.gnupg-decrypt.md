# Descriptografa um texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-decrypt.php

---

# gnupg\_decrypt

(PECL gnupg >= 0.1)

gnupg\_decrypt — Descriptografa um texto fornecido

### Descrição

function **gnupg\_decrypt**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$text`): [string](language.types.string.md)|[false](language.types.singleton.md)

Descriptografa o texto fornecido com as chaves que foram definidas com [gnupg\_adddecryptkey](function.gnupg-adddecryptkey.md) anteriormente.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`text`
:   O texto sendo descriptografado.

### Valor Retornado

Em caso de sucesso, esta função retorna o texto descriptografado.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_decrypt()****

```
<?php
$res = gnupg_init();
gnupg_adddecryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
$plain = gnupg_decrypt($res,$encrypted_text);
echo $plain;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_decrypt()****

```
<?php
$gpg = new gnupg();
$gpg->adddecryptkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
$plain = $gpg->decrypt($encrypted_text);
echo $plain;
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

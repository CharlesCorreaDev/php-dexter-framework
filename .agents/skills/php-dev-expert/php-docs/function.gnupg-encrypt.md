# Criptografa um texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-encrypt.php

---

# gnupg\_encrypt

(PECL gnupg >= 0.1)

gnupg\_encrypt — Criptografa um texto fornecido

### Descrição

function **gnupg\_encrypt**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$plaintext`): [string](language.types.string.md)|[false](language.types.singleton.md)

Criptografa o `plaintext` fornecido com as chaves, que
foram definidas com [gnupg\_addencryptkey](function.gnupg-addencryptkey.md) anteriormente e
retorna o texto criptografado.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`plaintext`
:   O texto a ser sendo criptografado.

### Valor Retornado

Em caso de sucesso, esta função retorna o texto criptografado.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_encrypt()****

```
<?php
$res = gnupg_init();
gnupg_addencryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC");
$enc = gnupg_encrypt($res, "somente um teste");
echo $enc;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_encrypt()****

```
<?php
$gpg = new gnupg();
$gpg->addencryptkey("8660281B6051D071D94B5B230549F9DC851566DC");
$enc = $gpg->encrypt("somente um teste");
echo $enc;
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

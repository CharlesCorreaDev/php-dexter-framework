# Criptografa e assina um texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-encryptsign.php

---

# gnupg\_encryptsign

(PECL gnupg >= 0.2)

gnupg\_encryptsign — Criptografa e assina um texto fornecido

### Descrição

function **gnupg\_encryptsign**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$plaintext`): [string](language.types.string.md)|[false](language.types.singleton.md)

Criptografa e assina o `plaintext` fornecido com as
chaves, que foram definidas com
[gnupg\_addsignkey](function.gnupg-addsignkey.md) e [gnupg\_addencryptkey](function.gnupg-addencryptkey.md) anteriormente e
retorna o texto criptografado e assinado.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`plaintext`
:   O texto a ser criptografado.

### Valor Retornado

Em caso de sucesso, esta função retorna o texto criptografado e assinado.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_encryptsign()****

```
<?php
$res = gnupg_init();
gnupg_addencryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC");
gnupg_addsignkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
$enc = gnupg_encryptsign($res, "just a test");
echo $enc;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_encryptsign()****

```
<?php
$gpg = new gnupg();
$gpg->addencryptkey("8660281B6051D071D94B5B230549F9DC851566DC");
$gpg->addsignkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
$enc = $gpg->encryptsign("just a test");
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

# Assina um texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-sign.php

---

# gnupg\_sign

(PECL gnupg >= 0.1)

gnupg\_sign — Assina um texto fornecido

### Descrição

function **gnupg\_sign**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$plaintext`): [string](language.types.string.md)|[false](language.types.singleton.md)

Assina o `plaintext` fornecido com as chaves que foram
definidas com [gnupg\_addsignkey](function.gnupg-addsignkey.md) anteriormente e
retorna o texto assinado ou a assinatura, dependendo do que foi definido com
[gnupg\_setsignmode](function.gnupg-setsignmode.md).

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`plaintext`
:   O texto simples sendo assinado.

### Valor Retornado

Em caso de sucesso, esta função retorna o texto assinado ou a assinatura.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_sign()****

```
<?php
$res = gnupg_init();
gnupg_addsignkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","teste");
$signed = gnupg_sign($res, "somente um teste");
echo $signed;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_sign()****

```
<?php
$gpg = new gnupg();
$gpg->addsignkey("8660281B6051D071D94B5B230549F9DC851566DC","teste");
$signed = $gpg->sign("somente um teste");
echo $signed;
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

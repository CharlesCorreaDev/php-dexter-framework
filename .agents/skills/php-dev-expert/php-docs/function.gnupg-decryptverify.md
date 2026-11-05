# Descriptografa e verifica um texto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-decryptverify.php

---

# gnupg\_decryptverify

(PECL gnupg >= 0.2)

gnupg\_decryptverify — Descriptografa e verifica um texto fornecido

### Descrição

function **gnupg\_decryptverify**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$text`, [string](language.types.string.md) `&$plaintext`): [array](language.types.array.md)|[false](language.types.singleton.md)

Descriptografa e verifica um texto fornecido e retorna informações sobre a
assinatura.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`text`
:   O texto sendo descriptografado.

`plaintext`
:   O parâmetro `plaintext` é preenchido com o texto
    descriptografado.

### Valor Retornado

Em caso de sucesso, esta função retorna informações sobre a assinatura e
preenche o parâmetro `plaintext` com o texto descriptografado.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_decryptverify()****

```
<?php
$plaintext = "";
$res = gnupg_init();
gnupg_adddecryptkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
$info = gnupg_decryptverify($res,$text,$plaintext);
print_r($info);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_decryptverify()****

```
<?php
$plaintext = "";
$gpg = new gnupg();
$gpg->adddecryptkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
$info = $gpg->decryptverify($text,$plaintext);
print_r($info);
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

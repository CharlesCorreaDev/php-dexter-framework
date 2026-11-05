# Verifica um texto assinado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-verify.php

---

# gnupg\_verify

(PECL gnupg >= 0.1)

gnupg\_verify — Verifica um texto assinado

### Descrição

function **gnupg\_verify**(  
    [resource](language.types.resource.md) `$identifier`,  
    [string](language.types.string.md) `$signed_text`,  
    [string](language.types.string.md) `$signature`,  
    [string](language.types.string.md) `&$plaintext` = ?  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Verifica o texto fornecido em `signed_text` e retorna informações sobre a
assinatura.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`signed_text`
:   O texto assinado.

`signature`
:   A assinatura.
    Para verificar um texto assinado sem criptografia, defina a assinatura como **`false`**.

`plaintext`
:   O texto simples.
    Se este parâmetro opcional for passado, ele é
    preenchido com o texto simples.

### Valor Retornado

Em caso de sucesso, esta função retorna informações sobre a assinatura.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_verify()****

```
<?php
$plaintext = "";
$res = gnupg_init();
// assinatura nítida
$info = gnupg_verify($res,$signed_text,false,$plaintext);
print_r($info);
// assinatura separada
$info = gnupg_verify($res,$signed_text,$signature);
print_r($info);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_verify()****

```
<?php
$plaintext = "";
$gpg = new gnupg();
// assinatura nítida
$info = $gpg->verify($signed_text,false,$plaintext);
print_r($info);
// assinatura separada
$info = $gpg->verify($signed_text,$signature);
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

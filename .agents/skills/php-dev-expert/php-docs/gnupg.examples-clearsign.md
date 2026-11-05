# Assinatura com texto claro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gnupg.examples-clearsign.php

---

## Assinatura com texto claro

Este exemplo irá assinar de forma clara um texto fornecido.

**Exemplo #1 Exemplo de assinatura clara com gnupg (procedural)**

```
<?php
// inicia gnupg
$res = gnupg_init();
// não é realmente necessário. Assinatura de forma clara é o padrão
gnupg_setsignmode($res,GNUPG_SIG_MODE_CLEAR);
// adiciona chave com senha 'test' para assinatura
gnupg_addsignkey($res,"8660281B6051D071D94B5B230549F9DC851566DC","test");
// assina
$signed = gnupg_sign($res,"just a test");
echo $signed;
?>
```

**Exemplo #2 Exemplo de assinatura clara com gnupg (OO)**

```
<?php
// nova classe
$gnupg = new gnupg();
// não é realmente necessário. Assinatura de forma clara é o padrão
$gnupg->setsignmode(gnupg::SIG_MODE_CLEAR);
// adiciona chave com senha 'test' para assinatura
$gnupg->addsignkey("8660281B6051D071D94B5B230549F9DC851566DC","test");
// assina
$signed = $gnupg->sign("just a test");
echo $signed;
?>
```

**Exemplo #3 keylistiterator**

Esta extensão também vem com um iterador para um chaveiro.

```
<?php
// cria um novo iterador para listar todas as chaves públicas que correspondem a 'exemplo'
$iterator = new gnupg_keylistiterator("exemplo");
foreach($iterator as $fingerprint => $userid){
    echo $fingerprint." -> ".$userid."\n";
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

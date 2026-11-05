# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mhash.examples.php

---

# Examples

**Exemplo #1 Calcula o hash e hmac MD5 e exibe como hexadecimal**

```
<?php
$input = "what do ya want for nothing?";
$hash = mhash(MHASH_MD5, $input);
echo "O hash é " . bin2hex($hash) . "<br />\n";
$hash = mhash(MHASH_MD5, $input, "Jefe");
echo "O hmac é " . bin2hex($hash) . "<br />\n";
?>
```

O exemplo acima produzirá:

```
O hash é d03cb659cbf9192dcd066272249f8412
O hmac é 750c783e6ab0b503eaa86e310a5db738
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

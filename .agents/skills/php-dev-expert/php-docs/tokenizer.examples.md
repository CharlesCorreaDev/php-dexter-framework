# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tokenizer.examples.php

---

# Examples

Aqui está um exemplo simples de script PHP usando o tokenizer que
lerá um arquivo PHP, retirará todos os comentários do fonte e
imprimirá apenas o código puro.

**Exemplo #1 Retirando os comentários com o tokenizer**

```
<?php
$source = file_get_contents('example.php');
$tokens = token_get_all($source);

foreach ($tokens as $token) {
   if (is_string($token)) {
       // simple 1-character token
       echo $token;
   } else {
       // token array
       list($id, $text) = $token;

       switch ($id) {
           case T_COMMENT:
           case T_DOC_COMMENT:
               // no action on comments
               break;

           default:
               // anything else -> output "as is"
               echo $text;
               break;
       }
   }
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

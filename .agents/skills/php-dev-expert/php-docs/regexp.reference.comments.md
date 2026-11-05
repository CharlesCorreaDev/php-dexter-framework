# Comentários

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.comments.php

---

## Comentários

A sequência (?# marca o início de um comentário que
continua até o próximo parêntese de fechamento. Parênteses
aninhados não são permitidos. Os caracteres que compõem um
comentário não desempenham nenhum papel na correspondência de expressões.

Se a opção [PCRE\_EXTENDED](reference.pcre.pattern.modifiers.md)
estiver definida, um caractere # sem escape fora de uma classe de caracteres
introduz um comentário que continua até o próximo caractere de nova linha
na expressão.

**Exemplo #1 Uso de comentários em expressões PCRE**

```
<?php

$subject = 'test';

/* (?# pode ser usado para adicionar comentários sem habilitar PCRE_EXTENDED */
$match = preg_match('/te(?# isto é um comentário)st/', $subject);
var_dump($match);

/* Espaço em branco e # são tratados como parte da expressão a menos que PCRE_EXTENDED esteja habilitada */
$match = preg_match('/te   #~~~~
st/', $subject);
var_dump($match);

/* Quando PCRE_EXTENDED está habilitada, todos os espaços em branco e qualquer coisa que
   esteja na sequência de um # sem escape na mesma linha são ignorados */
$match = preg_match('/te    #~~~~
st/x', $subject);
var_dump($match);
```

O exemplo acima produzirá:

```
int(1)
int(0)
int(1)
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

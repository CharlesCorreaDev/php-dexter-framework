# Operadores de String

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.string.php

---

## Operadores de String

Há dois operadores de [string](language.types.string.md). O primeiro é o operador de concatenação
('.'), que retorna a concatenação dos seus argumentos direito e
esquerdo. O segundo é o operador de atribuição de concatenação
('`.=`'), que acrescenta o argumento do lado direito no
argumento do lado esquerdo. Veja em [Operadores
de Atribuição](language.operators.assignment.md)  para mais informações.

**Exemplo #1 Concatenação de strings**

```
<?php
$a = "Olá ";
$b = $a . "mundo!"; // agora $b contém "Olá mundo!"
var_dump($b);

$a = "Olá ";
$a .= "mundo!";     // agora $a contém "Olá mundo!"
var_dump($a);
?>
```

### Veja também

- [Tipo string](language.types.string.md)
- [Funções string](ref.strings.md)

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

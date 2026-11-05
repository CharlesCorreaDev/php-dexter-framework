# Delimitadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/regexp.reference.delimiters.php

---

## Delimitadores

Ao usar as funções PCRE, é necessário que a expressão esteja entre
*delimitadores*. Um delimitador pode ser qualquer caractere
não alfanumérico que não seja uma barra invertida e que não corresponda a um espaço em branco.
Espaços em branco antes de um delimitador válido são silenciosamente ignorados.

Delimitadores comumente usados são barras (`/`), cerquilhas
(`#`) e til (`~`). Os exemplos
a seguir são padrões com delimitadores válidos.

```
/foo bar/
#^[^0-9]$#
+php+
%[a-zA-Z0-9_-]%
```

Também é possível usar delimitadores
no estilo parênteses, onde os delimitadores inicial e final são
os caracteres de abertura e fechamento, respectivamente. `()`,
`{}`, `[]` e `<>`
são todos pares válidos de delimitadores nesse estilo.

```
(esta [é] uma (expressão))
{esta [é] uma (expressão)}
[esta [é] uma (expressão)]
<esta [é] uma (expressão)>
```

Delimitadores no estilo parênteses não precisam ser escapados quando são usados como
metacaracteres dentro da expressão, mas como acontece com outros delimitadores, eles precisam
ser escapados quando são usados como caracteres literais.

Se o delimitador precisa ser correspondido dentro da expressão, ele precisa ser
escapado usando uma barra invertida. Se o delimitador aparece com muita frequência dentro da
expressão, é uma boa ideia escolher um delimitador diferente para melhorar
a legibilidade.

```
/http:\/\//
#http://#
```

A função [preg\_quote()](function.preg-quote.md) pode ser usada para escapar uma string
a ser injetada em uma expressão e seu segundo parâmetro opcional pode ser usado
para especificar o delimitador a ser escapado.

Pode-se adicionar [modificadores
de expressão](reference.pcre.pattern.modifiers.md) após o delimitador final. Este é um exemplo
de correspondência insensível a maiúsculas/minúsculas usando o modificador "i":

```
#[a-z]#i
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

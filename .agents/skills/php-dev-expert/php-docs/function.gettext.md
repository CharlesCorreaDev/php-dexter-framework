# Pesquisa uma mensagem no domínio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gettext.php

---

# gettext

(PHP 4, PHP 5, PHP 7, PHP 8)

gettext — Pesquisa uma mensagem no domínio atual

### Descrição

function **gettext**([string](language.types.string.md) `$message`): [string](language.types.string.md)

Procura uma mensagem no domínio atual.

### Parâmetros

`message`
:   A mensagem que está sendo traduzida.

### Valor Retornado

Retorna uma [string](language.types.string.md) traduzida se for encontrada na
tabela de tradução, ou a mensagem enviada se não for encontrada.

### Examples

**Exemplo #1 **gettext()**-check**

```
<?php
// Defina o idioma para alemão
putenv('LC_ALL=de_DE');
setlocale(LC_ALL, 'de_DE');

// Especifique a localização das tabelas de tradução
bindtextdomain("myPHPApp", "./locale");

// Escolha o domínio
textdomain("myPHPApp");

// A tradução está sendo procurada em ./locale/de_DE/LC_MESSAGES/myPHPApp.mo atualmente

// Imprima uma mensagem de teste
echo gettext("Welcome to My PHP Application");

// Ou utilize o apelido _() para gettext()
echo _("Have a nice day");
?>
```

### Notas

> **Nota**:
>
> Você pode usar o caractere sublinhado '\_' como um apelido para esta função.

> **Nota**:
>
> Definir um idioma não é suficiente para alguns sistemas e o
> [putenv()](function.putenv.md) deve ser usado para definir o
> código do idioma atual.

### Veja também

- [\_()](function.-.md) - Sinônimo de gettext
- [setlocale()](function.setlocale.md) - Define informação de localidade

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

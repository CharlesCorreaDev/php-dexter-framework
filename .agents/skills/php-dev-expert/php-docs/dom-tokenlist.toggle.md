# Alterna a presença de um token na lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.toggle.php

---

# Dom\TokenList::toggle

(PHP 8 >= 8.4.0)

Dom\TokenList::toggle — Alterna a presença de um token na lista

### Descrição

public function **Dom\TokenList::toggle**([string](language.types.string.md) `$token`, [?](language.types.null.md)[bool](language.types.boolean.md) `$force` = **`null`**): [bool](language.types.boolean.md)

Alterna a presença de `token` na lista.

### Parâmetros

`token`
:   O token a alternar.

`force`
:   Se `force` for informado, defini-lo para **`true`**
    adicionará o token, e para **`false`** removerá o token.

### Valor Retornado

Retorna **`true`** se o token estiver na lista após a chamada,
**`false`** caso contrário.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um token contiver algum byte nulo.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\SYNTAX_ERR`** se um token for uma string vazia.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\INVALID_CHARACTER_ERR`** se um token contiver algum
  espaço em branco ASCII.

### Examples

**Exemplo #1 Exemplo de **Dom\TokenList::toggle()****

Alterna três classes, duas sem incluir `force` e uma incluindo.

```
<?php
$dom = Dom\HTMLDocument::createFromString('<p class="font-bold important"></p>', LIBXML_NOERROR);
$p = $dom->body->firstChild;

$classList = $p->classList;
$classList->toggle('font-bold', 'font-small');
$classList->toggle('important', force: true);

echo $dom->saveHtml($p);
?>
```

O exemplo acima produzirá:

```
<p class="font-bold important"></p>
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

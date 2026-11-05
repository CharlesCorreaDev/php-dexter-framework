# Remove da lista os tokens informados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.remove.php

---

# Dom\TokenList::remove

(PHP 8 >= 8.4.0)

Dom\TokenList::remove — Remove da lista os tokens informados

### Descrição

public function **Dom\TokenList::remove**([string](language.types.string.md) `...$tokens`): [void](language.types.void.md)

Remove da lista os `tokens` informados, ignorando
os que não estiverem presentes.

### Parâmetros

`tokens`
:   Os tokens a serem removidos.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um token contiver algum byte nulo.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\SYNTAX_ERR`** se um token for uma string vazia.
- Lança uma exceção **Dom\DOMException** com código
  **`Dom\INVALID_CHARACTER_ERR`** se um token contiver algum
  espaço em branco ASCII.

### Examples

**Exemplo #1 Exemplo de **Dom\TokenList::remove()****

Remove duas classes do parágrafo.

```
<?php
$dom = Dom\HTMLDocument::createFromString('<p class="font-bold important"></p>', LIBXML_NOERROR);
$p = $dom->body->firstChild;

$p->classList->remove('font-bold', 'important');

echo $dom->saveHtml($p);
?>
```

O exemplo acima produzirá:

```
<p class=""></p>
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

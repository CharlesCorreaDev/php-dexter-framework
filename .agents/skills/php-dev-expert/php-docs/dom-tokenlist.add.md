# Adiciona os tokens informados à lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-tokenlist.add.php

---

# Dom\TokenList::add

(PHP 8 >= 8.4.0)

Dom\TokenList::add — Adiciona os tokens informados à lista

### Descrição

public function **Dom\TokenList::add**([string](language.types.string.md) `...$tokens`): [void](language.types.void.md)

Adiciona os `tokens` informados à lista, exceto os que já
estavam presentes.

### Parâmetros

`tokens`
:   Os tokens a serem adicionados.

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

**Exemplo #1 Exemplo de **Dom\TokenList::add()****

Adiciona duas classes a um novo elemento de parágrafo criado.

```
<?php
$dom = Dom\HTMLDocument::createEmpty();
$p = $dom->createElement('p');

$classList = $p->classList;
$classList->add('font-bold', 'important');

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

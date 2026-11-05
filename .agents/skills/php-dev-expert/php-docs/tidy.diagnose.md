# Executa diagnósticos configurados em marcações analisadas e reparadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.diagnose.php

---

# tidy::diagnose

# tidy\_diagnose

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::diagnose -- tidy\_diagnose — Executa diagnósticos configurados em marcações analisadas e reparadas

### Descrição

Estilo orientado a objetos

public function **tidy::diagnose**(): [bool](language.types.boolean.md)

Estilo procedural

function **tidy\_diagnose**([tidy](class.tidy.md) `$tidy`): [bool](language.types.boolean.md)

Executa testes de diagnóstico no `tidy` fornecido,
adicionando mais algumas informações sobre o documento no buffer de erro.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **tidy::diagnose()****

```
<?php

$html = <<< HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<p>paragraph</p>
HTML;

$tidy = tidy_parse_string($html);
$tidy->cleanRepair();

// observe a diferença entre as duas saídas
echo $tidy->errorBuffer . "\n";

$tidy->diagnose();
echo $tidy->errorBuffer;

?>
```

O exemplo acima produzirá:

```
line 4 column 1 - Warning: <p> isn't allowed in <head> elements
line 4 column 1 - Warning: inserting missing 'title' element
line 4 column 1 - Warning: <p> isn't allowed in <head> elements
line 4 column 1 - Warning: inserting missing 'title' element
Info: Doctype given is "-//W3C//DTD XHTML 1.0 Strict//EN"
Info: Document content looks like XHTML 1.0 Strict
2 warnings, 0 errors were found!
```

### Veja também

- **tidy::errorBuffer()**

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

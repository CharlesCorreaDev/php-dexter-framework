# Retorna o valor da opção de configuração especificada para o documento tidy

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.getopt.php

---

# tidy::getOpt

# tidy\_getopt

(PHP 5, PHP 7, PHP 8, PECL tidy >= 0.5.2)

tidy::getOpt -- tidy\_getopt — Retorna o valor da opção de configuração especificada para o documento tidy

### Descrição

Estilo orientado a objetos

public function **tidy::getOpt**([string](language.types.string.md) `$option`): [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md)

Estilo procedural

function **tidy\_getopt**([tidy](class.tidy.md) `$tidy`, [string](language.types.string.md) `$option`): [string](language.types.string.md)|[int](language.types.integer.md)|[bool](language.types.boolean.md)

Retorna o valor da opção informada em `option` para o
`tidy` especificado.

### Parâmetros

`tidy`
:   Um objeto [Tidy](class.tidy.md).

`option`
:   Uma lista com cada opção de configuração e seus tipos pode ser encontrada
    em: [» https://api.html-tidy.org/#quick-reference](https://api.html-tidy.org/#quick-reference).

### Valor Retornado

Retorna o valor da opção especificada em `option`.
O tipo de retorno depende do tipo da opção especificada.

### Examples

**Exemplo #1 Exemplo de **tidy\_getopt()****

```
<?php

$html ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html><head><title>Título</title></head>
<body>

<p><img src="img.png"></p>

</body></html>';

$config = array('accessibility-check' => 3,
                'alt-text' => 'algum texto');

$tidy = new tidy();
$tidy->parseString($html, $config);

var_dump($tidy->getOpt('accessibility-check')); // inteiro
var_dump($tidy->getOpt('lower-literals')); // booleano
var_dump($tidy->getOpt('alt-text')); // string

?>
```

O exemplo acima produzirá:

```
int(3)
bool(true)
string(9) "algum texto"
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

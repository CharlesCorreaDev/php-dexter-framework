# Cria um novo objeto DOMProcessingInstruction

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domprocessinginstruction.construct.php

---

# DOMProcessingInstruction::\_\_construct

(PHP 5, PHP 7, PHP 8)

DOMProcessingInstruction::\_\_construct — 
Cria um novo objeto [DOMProcessingInstruction](class.domprocessinginstruction.md)

### Descrição

public function **DOMProcessingInstruction::\_\_construct**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = "")

Cria um novo objeto [DOMProcessingInstruction](class.domprocessinginstruction.md).
Este objeto é somente leitura. Pode ser anexado a um documento, mas
nós adicionais não podem ser anexados a este nó até que
o nó esteja associado a um documento. Para criar um nó gravável, use
[DOMDocument::createProcessingInstruction](domdocument.createprocessinginstruction.md).

### Parâmetros

`name`
:   O nome da tag da instrução de processamento.

`value`
:   O valor da instrução de processamento.

### Examples

**Exemplo #1 Criando um novo objeto [DOMProcessingInstruction](class.domprocessinginstruction.md)**

```
<?php

$dom = new DOMDocument('1.0', 'UTF-8');
$html = $dom->appendChild(new DOMElement('html'));
$body = $html->appendChild(new DOMElement('body'));
$pinode = new DOMProcessingInstruction('php', 'echo "Hello World"; ');
$body->appendChild($pinode);
echo $dom->saveXML();

?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" encoding="UTF-8"?>
<html><body><?php echo "Hello World"; ?></body></html>
```

### Veja também

- [DOMDocument::createProcessingInstruction()](domdocument.createprocessinginstruction.md) - Cria novo nó PI (Processing Instruction)

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

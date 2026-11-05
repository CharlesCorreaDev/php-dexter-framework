# Carrega XML a partir de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.loadxml.php

---

# DOMDocument::loadXML

(PHP 5, PHP 7, PHP 8)

DOMDocument::loadXML — 
Carrega XML a partir de uma string

### Descrição

public function **DOMDocument::loadXML**([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

Carrega um documento XML a partir de uma string.

### Parâmetros

`source`
:   A string contendo o XML.

`options`
:   [Operação binária `OR`](language.operators.bitwise.md)
    das [constantes de opção libxml](libxml.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se uma string vazia for passada como o `source`,
um aviso será gerado. Este aviso não é gerado pelo libxml
e não pode ser tratado usando as funções de manipulação de erros do libxml.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Esta função agora tem um tipo de retorno [bool](language.types.boolean.md) tentativo. |
| 8.0.0 | Chamando esta função estaticamente agora irá gerar um [Error](class.error.md). Anteriormente, era gerado um **`E_DEPRECATED`**. |

### Examples

**Exemplo #1 Criando um Documento**

```
<?php
$doc = new DOMDocument();
$doc->loadXML('<root><node/></root>');
echo $doc->saveXML();
?>
```

### Veja também

- [DOMDocument::load()](domdocument.load.md) - Carrega XML de um arquivo
- [DOMDocument::save()](domdocument.save.md) - Grava a árvore XML interna de volta em um arquivo
- [DOMDocument::saveXML()](domdocument.savexml.md) - Despeja a árvore XML interna de volta em uma string

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

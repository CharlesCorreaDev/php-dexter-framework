# Carrega HTML de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.loadhtmlfile.php

---

# DOMDocument::loadHTMLFile

(PHP 5, PHP 7, PHP 8)

DOMDocument::loadHTMLFile — 
Carrega HTML de um arquivo

### Descrição

public function **DOMDocument::loadHTMLFile**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$options` = 0): [bool](language.types.boolean.md)

A função analisa o documento HTML no arquivo com o nome
`filename`. Ao contrário do carregamento de XML, o HTML não precisa
ser bem formado para ser carregado.

**Aviso**

Use [Dom\HTMLDocument](class.dom-htmldocument.md) para analisar e processar HTML moderno
ao invés de [DOMDocument](class.domdocument.md).

Esta função interpreta a entrada usando um analisador de HTML 4. As regras de análise
de HTML 5, que são as que os navegadores modernos usam, são diferentes. Dependendo
da entrada isso pode resultar em uma estrutura DOM diferente. Portanto,
esta função não pode ser usada para sanitizar HTML de forma segura.

O comportamento ao interpretar HTML pode depender da versão da
`libxml` que está sendo usada, particularmente em relação a
condições de contorno e manipulação de erros.
Para interpretação que se conforma à especificação HTML5,
use [Dom\HTMLDocument::createFromString()](dom-htmldocument.createfromstring.md) ou
[Dom\HTMLDocument::createFromFile()](dom-htmldocument.createfromfile.md), adicionado no PHP 8.4.

Como um exemplo, alguns elementos HTML irão fechar implicitamente um elemento pai
quando encontrados. As regras para fechamento automático de elementos pai
diferem entre HTML 4 e HTML 5 e por isso a estrutura DOM resultante que
[DOMDocument](class.domdocument.md) enxerga pode ser diferente da estrutura
DOM que um navegador enxerga, possivelmente permitindo a um intruso quebrar
o HTML resultante.

### Parâmetros

`filename`
:   O caminho para o arquivo HTML.

`options`
:   [Bit a bit `OR`](language.operators.bitwise.md)
    das [constantes de opções da libxml](libxml.constants.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se uma string vazia for passada como o `filename`
ou um arquivo vazio for nomeado, um aviso será gerado. Este aviso
não é gerado pelo libxml e não pode ser tratado usando
[as funções de manipulação de erros do libxml](function.libxml-use-internal-errors.md).

Embora o HTML malformado deva ser carregado com sucesso, esta função pode gerar erros **`E_WARNING`** quando encontrar marcação incorreta. As [funções de tratamento de erros da biblioteca libxml](function.libxml-use-internal-errors.md) podem ser usadas para lidar com esses erros.

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
$doc->loadHTMLFile("filename.html");
echo $doc->saveHTML();
?>
```

### Veja também

- [DOMDocument::loadHTML()](domdocument.loadhtml.md) - Carrega HTML a partir de uma string
- [DOMDocument::saveHTML()](domdocument.savehtml.md) - Despeja o documento interno em uma string usando formatação HTML
- [DOMDocument::saveHTMLFile()](domdocument.savehtmlfile.md) - Despeja o documento interno em um arquivo usando formatação HTML

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

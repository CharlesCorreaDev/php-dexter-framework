# Define o arquivo de saída de perfil

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.setprofiling.php

---

# XSLTProcessor::setProfiling

(PHP >= 5.3.0, PHP 7, PHP 8)

XSLTProcessor::setProfiling — Define o arquivo de saída de perfil

### Descrição

public function **XSLTProcessor::setProfiling**([?](language.types.null.md)[string](language.types.string.md) `$filename`): [true](language.types.singleton.md)

Define o arquivo para o qual serão gravadas informações de perfil ao processar
uma folha de estilos.

### Parâmetros

`filename`
:   Caminho para o arquivo onde serão gravadas as informações de perfil.

### Valor Retornado

Sempre retorna **`true`**.

### Examples

**Exemplo #1 Exemplo de saída de perfil**

```
<?php
// Carrega a fonte XML
$xml = new DOMDocument;
$xml->load('collection.xml');

$xsl = new DOMDocument;
$xsl->load('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->setProfiling('profiling.txt');
$proc->importStyleSheet($xsl); // anexa as regras xsl

echo trim($proc->transformToDoc($xml)->firstChild->wholeText);
?>
```

O código acima produzirá as seguintes informações
no arquivo de perfil:

```
number               match                name      mode  Calls Tot 100us Avg

    0                   cd                                    2      3      1
    1           collection                                    1      1      1

                         Total                                3      4
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

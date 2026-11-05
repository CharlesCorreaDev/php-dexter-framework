# Define um valor para um parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.setparameter.php

---

# XSLTProcessor::setParameter

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::setParameter — Define um valor para um parâmetro

### Descrição

public function **XSLTProcessor::setParameter**([string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

public function **XSLTProcessor::setParameter**([string](language.types.string.md) `$namespace`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Define o valor para um ou mais parâmetros para ser usados em transformações
subsequentes com [XSLTProcessor](class.xsltprocessor.md). Se o
parâmetro não existir na folha de estilos, ele será ignorado.

### Parâmetros

`namespace`
:   A URI de espaço de nomes do parâmetro XSLT.

`name`
:   O nome local do parâmetro XSLT.

`value`
:   O novo valor do parâmetro XSLT.

`options`
:   Um array de pares `name => value`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se qualquer argumento
contiver bytes nulos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma exceção [ValueError](class.valueerror.md) se qualquer argumento contiver bytes nulos ao invés de truncar silenciosamente. |
| 8.4.0 | Agora é possível definir um valor de parâmetro contendo tanto aspas simples quanto aspas duplas. Antes do PHP 8.4.0, isto resultava em um alerta. |

### Examples

**Exemplo #1 Modificando o parâmetro 'owner' antes da transformação**

```
<?php

$collections = array(
    'Marc Rutkowski' => 'marc',
    'Olivier Parmentier' => 'olivier'
);

$xsl = new DOMDocument;
$xsl->load('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // anexa as regras xsl

foreach ($collections as $name => $file) {
    // Carrega a fonte XML
    $xml = new DOMDocument;
    $xml->load('collection_' . $file . '.xml');

    $proc->setParameter('', 'owner', $name);
    $proc->transformToURI($xml, 'file:///tmp/' . $file . '.html');
}

?>
```

### Veja também

- [XSLTProcessor::getParameter()](xsltprocessor.getparameter.md) - Obtém o valor de um parâmetro
- [XSLTProcessor::removeParameter()](xsltprocessor.removeparameter.md) - Remove parâmetro

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

# Cria tag de documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startdocument.php

---

# XMLWriter::startDocument

# xmlwriter\_start\_document

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startDocument -- xmlwriter\_start\_document — Cria tag de documento

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startDocument**([?](language.types.null.md)[string](language.types.string.md) `$version` = "1.0", [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$standalone` = **`null`**): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_document**(  
    [XMLWriter](class.xmlwriter.md) `$writer`,  
    [?](language.types.null.md)[string](language.types.string.md) `$version` = "1.0",  
    [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$standalone` = **`null`**  
): [bool](language.types.boolean.md)

Inicia um documento.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`version`
:   O número da versão do documento como parte da declaração XML.

`encoding`
:   A codificação do documento como parte da declaração XML.

`standalone`
:   `yes` ou `no`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Passar um `encoding` contendo bytes nulos irá
gerar um [ValueError](class.valueerror.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Passar um `encoding` contendo bytes nulos agora lançará um [ValueError](class.valueerror.md). |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endDocument()](xmlwriter.enddocument.md) - Termina o documento atual

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

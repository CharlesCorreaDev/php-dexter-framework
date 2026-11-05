# Cria tag PI inicial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.startpi.php

---

# XMLWriter::startPi

# xmlwriter\_start\_pi

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::startPi -- xmlwriter\_start\_pi — Cria tag PI inicial

### Descrição

Estilo orientado a objetos

public function **XMLWriter::startPi**([string](language.types.string.md) `$target`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_start\_pi**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$target`): [bool](language.types.boolean.md)

Inicia uma tag de instrução de processamento.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`target`
:   O alvo da instrução de processamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::endPi()](xmlwriter.endpi.md) - Encerra a instrução de processamento atual
- [XMLWriter::writePi()](xmlwriter.writepi.md) - Escreve uma instrução de processamento

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

# Escreve uma instrução de processamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.writepi.php

---

# XMLWriter::writePi

# xmlwriter\_write\_pi

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::writePi -- xmlwriter\_write\_pi — Escreve uma instrução de processamento

### Descrição

Estilo orientado a objetos

public function **XMLWriter::writePi**([string](language.types.string.md) `$target`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_write\_pi**([XMLWriter](class.xmlwriter.md) `$writer`, [string](language.types.string.md) `$target`, [string](language.types.string.md) `$content`): [bool](language.types.boolean.md)

Escreve uma instrução de processamento.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

`target`
:   O alvo da instrução de processamento.

`content`
:   O conteúdo da instrução de processamento.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startPi()](xmlwriter.startpi.md) - Cria tag PI inicial
- [XMLWriter::endPi()](xmlwriter.endpi.md) - Encerra a instrução de processamento atual

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

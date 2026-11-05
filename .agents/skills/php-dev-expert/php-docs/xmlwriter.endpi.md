# Encerra a instrução de processamento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlwriter.endpi.php

---

# XMLWriter::endPi

# xmlwriter\_end\_pi

(PHP 5 >= 5.1.2, PHP 7, PHP 8, PECL xmlwriter >= 0.1.0)

XMLWriter::endPi -- xmlwriter\_end\_pi — Encerra a instrução de processamento atual

### Descrição

Estilo orientado a objetos

public function **XMLWriter::endPi**(): [bool](language.types.boolean.md)

Estilo procedural

function **xmlwriter\_end\_pi**([XMLWriter](class.xmlwriter.md) `$writer`): [bool](language.types.boolean.md)

Encerra a instrução de processamento atual.

### Parâmetros

`writer`
:   Apenas para chamadas procedurais.
    A instância de [XMLWriter](class.xmlwriter.md) que está sendo modificada. Este objeto é retornado de uma chamada a [xmlwriter\_open\_uri()](xmlwriter.openuri.md) ou [xmlwriter\_open\_memory()](xmlwriter.openmemory.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `writer` agora espera uma instância de [XMLWriter](class.xmlwriter.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [XMLWriter::startPi()](xmlwriter.startpi.md) - Cria tag PI inicial
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

# Libera memória do resultado armazenado para o manipulador de instrução informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.free-result.php

---

# mysqli\_stmt::free\_result

# mysqli\_stmt\_free\_result

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::free\_result -- mysqli\_stmt\_free\_result — Libera memória do resultado armazenado para o manipulador de instrução informado

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::free\_result**(): [void](language.types.void.md)

Estilo procedural

function **mysqli\_stmt\_free\_result**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [void](language.types.void.md)

Libera a memória do resultado associado à instrução, que foi alocada por
[mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [mysqli\_stmt\_store\_result()](mysqli-stmt.store-result.md) - Armazena um conjunto de resultados em um buffer interno

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

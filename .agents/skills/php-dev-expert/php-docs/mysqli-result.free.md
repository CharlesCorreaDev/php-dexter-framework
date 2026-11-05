# Libera memória associada a um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-result.free.php

---

# mysqli\_result::free

# mysqli\_result::close

# mysqli\_result::free\_result

# mysqli\_free\_result

(PHP 5, PHP 7, PHP 8)

mysqli\_result::free -- mysqli\_result::close -- mysqli\_result::free\_result -- mysqli\_free\_result — Libera memória associada a um resultado

### Descrição

Estilo orientado a objetos

public function **mysqli\_result::free**(): [void](language.types.void.md)

public function **mysqli\_result::close**(): [void](language.types.void.md)

public function **mysqli\_result::free\_result**(): [void](language.types.void.md)

Estilo procedural

function **mysqli\_free\_result**([mysqli\_result](class.mysqli-result.md) `$result`): [void](language.types.void.md)

Libera a memória associada ao resultado.

### Parâmetros

`result`
:   Somente no estilo procedural: Um objeto [mysqli\_result](class.mysqli-result.md)
    retornado por [mysqli\_query()](mysqli.query.md), [mysqli\_store\_result()](mysqli.store-result.md),
    [mysqli\_use\_result()](mysqli.use-result.md) ou [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md).

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [mysqli\_query()](mysqli.query.md) - Executa uma consulta no banco de dados
- [mysqli\_stmt\_get\_result()](mysqli-stmt.get-result.md) - Obtém um resultado de uma instrução preparada como um objeto mysqli\_result
- [mysqli\_store\_result()](mysqli.store-result.md) - Transfere um conjunto de resultados da última consulta
- [mysqli\_use\_result()](mysqli.use-result.md) - Inicia uma recuperação de conjunto de resultados

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

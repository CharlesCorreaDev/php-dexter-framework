# Inicializa uma instrução e retorna um objeto para uso com mysqli_stmt_prepare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.stmt-init.php

---

# mysqli::stmt\_init

# mysqli\_stmt\_init

(PHP 5, PHP 7, PHP 8)

mysqli::stmt\_init -- mysqli\_stmt\_init — Inicializa uma instrução e retorna um objeto para uso com mysqli\_stmt\_prepare

### Descrição

Estilo orientado a objetos

public function **mysqli::stmt\_init**(): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

Estilo procedural

function **mysqli\_stmt\_init**([mysqli](class.mysqli.md) `$mysql`): [mysqli\_stmt](class.mysqli-stmt.md)|[false](language.types.singleton.md)

Aloca e inicializa um objeto de instrução adequado para
[mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md).

> **Nota**:
>
> Qualquer chamada subseqüente para qualquer método [mysqli\_stmt](class.mysqli-stmt.md)
> falhará até que [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md) seja chamado.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

### Valor Retornado

Retorna um objeto [mysqli\_stmt](class.mysqli-stmt.md).

### Veja também

- [mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md) - Prepara uma declaração SQL para execução

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

# Comprime dados incrementalmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.deflate-add.php

---

# deflate\_add

(PHP 7, PHP 8)

deflate\_add — Comprime dados incrementalmente

### Descrição

function **deflate\_add**([DeflateContext](class.deflatecontext.md) `$context`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$flush_mode` = **`ZLIB_SYNC_FLUSH`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Comprime dados incrementalmente no contexto especificado.

### Parâmetros

`context`
:   Um contexto criado com [deflate\_init()](function.deflate-init.md).

`data`
:   Um pedaço de dados para comprimir.

`flush_mode`
:   Uma das constantes **`ZLIB_BLOCK`**,
    **`ZLIB_NO_FLUSH`**,
    **`ZLIB_PARTIAL_FLUSH`**,
    **`ZLIB_SYNC_FLUSH`** (padrão),
    **`ZLIB_FULL_FLUSH`**, **`ZLIB_FINISH`**.
    Normalmente, você vai querer definir **`ZLIB_NO_FLUSH`** para
    maximizar a compressão, e **`ZLIB_FINISH`** para terminar
    com o último pedaço de dados. Veja o [» manual do zlib](https://www.zlib.net/manual.html) para uma
    descrição detalhada dessas constantes.

### Valor Retornado

Retorna um pedaço de dados comprimidos, ou **`false`** em caso de falha.

### Erros/Exceções

Se argumentos inválidos forem fornecidos, um erro de nível
**`E_WARNING`** é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` espera agora uma instância de [DeflateContext](class.deflatecontext.md); anteriormente, era esperado um [resource](language.types.resource.md). |

### Veja também

- [deflate\_init()](function.deflate-init.md) - Inicializa um contexto de compressão incremental

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

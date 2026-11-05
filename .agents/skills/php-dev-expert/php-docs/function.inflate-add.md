# Descomprime incrementalmente dados codificados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inflate-add.php

---

# inflate\_add

(PHP 7, PHP 8)

inflate\_add — Descomprime incrementalmente dados codificados

### Descrição

function **inflate\_add**([InflateContext](class.inflatecontext.md) `$context`, [string](language.types.string.md) `$data`, [int](language.types.integer.md) `$flush_mode` = **`ZLIB_SYNC_FLUSH`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Descomprime incrementalmente dados codificados no contexto expecificado em `context`.

Limitação: informações de cabeçalho de dados comprimidos GZIP não estão
disponíveis.

### Parâmetros

`context`
:   Um contexto criado com [inflate\_init()](function.inflate-init.md).

`data`
:   Um pedaço de dados comprimidos.

`flush_mode`
:   Uma das constantes **`ZLIB_BLOCK`**,
    **`ZLIB_NO_FLUSH`**,
    **`ZLIB_PARTIAL_FLUSH`**,
    **`ZLIB_SYNC_FLUSH`** (padrão),
    **`ZLIB_FULL_FLUSH`**, **`ZLIB_FINISH`**.
    Normalmente, você desejará definir **`ZLIB_NO_FLUSH`** para
    maximizar a compressão e **`ZLIB_FINISH`** para terminar
    com o último pedaço de dados. Consulte o [» manual do zlib](https://www.zlib.net/manual.html) para obter uma
    descrição detalhada dessas constantes.

### Valor Retornado

Retorna um pedaço de dados descomprimidos, ou **`false`** em caso de falha.

### Erros/Exceções

Se parâmetros inválidos forem fornecidos, ou se a descompressão dos dados requerer um
dicionário predefinido e nenhum for especificado, o se o fluxo comprimido estiver corrompido ou tiver uma
soma de verificação inválida, um erro de nível **`E_WARNING`** é
gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `context` espera uma instância de [InflateContext](class.inflatecontext.md) agora; anteriormente, era esperado um [resource](language.types.resource.md). |

### Veja também

- [inflate\_init()](function.inflate-init.md) - Inicializa um contexto de descompressão incremental

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

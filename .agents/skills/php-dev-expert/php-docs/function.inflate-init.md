# Inicializa um contexto de descompressão incremental

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.inflate-init.php

---

# inflate\_init

(PHP 7, PHP 8)

inflate\_init — Inicializa um contexto de descompressão incremental

### Descrição

function **inflate\_init**([int](language.types.integer.md) `$encoding`, [array](language.types.array.md)|[object](language.types.object.md) `$options` = []): [InflateContext](class.inflatecontext.md)|[false](language.types.singleton.md)

Inicializa um contexto de descompressão incremental com o `encoding`
especificado.

### Parâmetros

`encoding`
:   Uma das constantes **`ZLIB_ENCODING_*`**.

`options`
:   Um array associativo que pode conter os seguintes elementos:

    level
    :   O nível de compressão no intervalo -1..9; padrão é -1.

    memory
    :   O nível de memória de compressão no intervalo 1..9; padrão é 8.

    window
    :   O tamanho da janela zlib (logarítmico) no intervalo 8..15; padrão é 15.

    strategy
    :   Uma das constantes **`ZLIB_FILTERED`**,
        **`ZLIB_HUFFMAN_ONLY`**, **`ZLIB_RLE`**,
        **`ZLIB_FIXED`** ou
        **`ZLIB_DEFAULT_STRATEGY`** (o padrão).

    dictionary
    :   Uma [string](language.types.string.md) ou um [array](language.types.array.md) de strings
        do dicionário predefinido (padrão: nenhum dicionário predefinido).

### Valor Retornado

Retorna um recurso de contexto de descompressão (`zlib.inflate`) em
caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Se uma codificação ou opção inválida for passada para `options`,
ou o contexto não puder ser criado, um erro de nível
**`E_WARNING`** é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [InflateContext](class.inflatecontext.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Notas

**Cuidado**

Ao contrário de [gzinflate()](function.gzinflate.md), contextos de descompressão incremental não
restringem o comprimento dos dados decodificados, portanto, não oferecem proteção automática
contra bombas Zip.

### Veja também

- [inflate\_add()](function.inflate-add.md) - Descomprime incrementalmente dados codificados
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

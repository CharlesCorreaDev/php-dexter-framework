# Inicializa um contexto de compressão incremental

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.deflate-init.php

---

# deflate\_init

(PHP 7, PHP 8)

deflate\_init — Inicializa um contexto de compressão incremental

### Descrição

function **deflate\_init**([int](language.types.integer.md) `$encoding`, [array](language.types.array.md)|[object](language.types.object.md) `$options` = []): [DeflateContext](class.deflatecontext.md)|[false](language.types.singleton.md)

Inicializa um contexto de compressão incremental usando o
`encoding` especificado.

Note que a opção `window` aqui apenas define o tamanho da janela
do algoritmo, de forma diferente dos filtros zlib onde o mesmo parâmetro
também define a codificação a ser usada; a codificação deve ser definida com o
parâmetro `encoding`.

Limitação: atualmente não há maneira de definir as informações de cabeçalho em um fluxo comprimido GZIP,
que são definidas da seguinte forma: assinatura GZIP
(`\x1f\x8B`); método de compressão (`\x08`
== DEFLATE); 6 bytes zero; o sistema operacional definido para o sistema atual
(`\x00` = Windows, `\x03` = Unix, etc.)

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
    :   O tamanho da janela zlib (logarítmico) no intervalo `8`..`15`;
        padrão é `15`.
        zlib muda um tamanho de janela de `8` para `9`,
        e a partir do zlib 1.2.8 falha com um aviso, se um tamanho de janela de `8`
        for solicitado para **`ZLIB_ENCODING_RAW`** ou **`ZLIB_ENCODING_GZIP`**.

    strategy
    :   Uma das constantes **`ZLIB_FILTERED`**,
        **`ZLIB_HUFFMAN_ONLY`**, **`ZLIB_RLE`**,
        **`ZLIB_FIXED`** ou
        **`ZLIB_DEFAULT_STRATEGY`** (o padrão).

    dictionary
    :   Uma [string](language.types.string.md) ou um [array](language.types.array.md) de strings
        do dicionário predefinido (padrão: nenhum dicionário predefinido).

### Valor Retornado

Retorna um recurso de contexto de compressão (`zlib.deflate`) em
caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Se uma opção inválida for passada para `options` ou o
contexto não puder ser criado, um erro de nível **`E_WARNING`**
é gerado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna agora uma instância de [DeflateContext](class.deflatecontext.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Veja também

- [deflate\_add()](function.deflate-add.md) - Comprime dados incrementalmente
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

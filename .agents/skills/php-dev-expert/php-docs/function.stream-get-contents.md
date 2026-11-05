# Lê o restante de um fluxo em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-get-contents.php

---

# stream\_get\_contents

(PHP 5, PHP 7, PHP 8)

stream\_get\_contents — Lê o restante de um fluxo em uma string

### Descrição

function **stream\_get\_contents**([resource](language.types.resource.md) `$stream`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**, [int](language.types.integer.md) `$offset` = -1): [string](language.types.string.md)|[false](language.types.singleton.md)

Idêntico a [file\_get\_contents()](function.file-get-contents.md), exceto que
**stream\_get\_contents()** opera em um recurso de fluxo
já aberto e retorna o conteúdo remanescente em uma string, até o
número de bytes definido em `length` e iniciando na posição
`offset` especificada.

### Parâmetros

`stream` ([resource](language.types.resource.md))
:   Um recurso de fluxo (ex.: retornado de [fopen()](function.fopen.md))

`length` ([int](language.types.integer.md))
:   O máximo de bytes para leitura. O padrão é **`null`** (ler todo o buffer
    remanescente).

`offset` ([int](language.types.integer.md))
:   Posiciona o ponteiro até o deslocamento especificado antes da leitura. Se o número for negativo,
    não irá ocorrer deslocamento e a leitura irá iniciar na posição atual.

### Valor Retornado

Retorna uma string ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **stream\_get\_contents()****

```
<?php

if ($stream = fopen('http://www.example.com', 'r')) {
    // mostra toda a página iniciando na posição 10
    echo stream_get_contents($stream, -1, 10);

    fclose($stream);
}

if ($stream = fopen('http://www.example.net', 'r')) {
    // mostra os 5 primeiros bytes
    echo stream_get_contents($stream, 5);

    fclose($stream);
}

?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

> **Nota**:
>
> Ao especificar um valor de `length` diferente de **`null`**, esta função irá
> imediatamente alocar um buffer interno deste tamanho, mesmo que
> o conteúdo real seja significativamente menor.

### Veja também

- [fgets()](function.fgets.md) - Lê uma linha de um ponteiro de arquivo
- [fread()](function.fread.md) - Leitura de arquivo segura para binário
- [fpassthru()](function.fpassthru.md) - Imprime todos os dados restantes de um ponteiro de arquivo

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

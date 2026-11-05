# Abre um arquivo para leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-open.php

---

# zip\_entry\_open

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_open — Abre um arquivo para leitura

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_open**([resource](language.types.resource.md) `$zip_dp`, [resource](language.types.resource.md) `$zip_entry`, [string](language.types.string.md) `$mode` = "rb"): [bool](language.types.boolean.md)

Abre um arquivo para leitura.

### Parâmetros

`zip_dp`
:   Um recurso válido retornado por [zip\_open()](function.zip-open.md).

`zip_entry`
:   Uma entrada de diretório retornada por [zip\_read()](function.zip-read.md).

`mode`
:   Algum dos modos especificados na documentação da
    [fopen()](function.fopen.md).

    > **Nota**:
    >
    > Atualmente, o parâmetro `mode` é ignorado e o modo padrão suportado é
    > `"rb"`. Isto é devido ao fato que o suporte a zip
    > no PHP é apenas de leitura.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

> **Nota**:
>
> Diferentemente de [fopen()](function.fopen.md) e outras funções similares,
> o valor retornado de **zip\_entry\_open()** somente
> indica o resultado da operação, e não o valor em si não é necessário para
> a leitura ou fechamento recurso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função está desencorajada em relação a API orientada a objeto. |

### Veja também

- [zip\_entry\_close()](function.zip-entry-close.md) - Fecha o arquivo que está aberto
- [zip\_entry\_read()](function.zip-entry-read.md) - Obtém dados de um arquivo

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

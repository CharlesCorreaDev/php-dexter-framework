# Pesquisa uma localização específica em um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-seek.php

---

# streamWrapper::stream\_seek

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_seek — Pesquisa uma localização específica em um fluxo

### Descrição

public function **streamWrapper::stream\_seek**([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [fseek()](function.fseek.md).

A posição de leitura/escrita do fluxo deve ser atualizada de acordo com os parâmetros
`offset` e `whence`.

### Parâmetros

`offset`
:   O deslocamento no fluxo a pesquisar.

`whence`
:   Valores possíveis:

    - **`SEEK_SET`** - Definir a posição igual ao número de bytes em `offset`.
    - **`SEEK_CUR`** - Definir a poisção igual à localização atual mais `offset`.
    - **`SEEK_END`** - Definir a poisção do fim do arquivo mais `offset`.

    > **Nota**:
    >
    > A implementação atual nunca define o parâmetro `whence` para
    > **`SEEK_CUR`**; em vez disso, tais pesquisas são internamente convertidas
    > para pesquisas **`SEEK_SET`**.

### Valor Retornado

Retorna **`true`** se a posição foi atualizada, **`false`** caso contrário.

### Notas

> **Nota**:
>
> Se não implementado, **`false`** é assumido como o valor de retorno.

> **Nota**:
>
> Em caso de sucesso,
> [streamWrapper::stream\_tell()](streamwrapper.stream-tell.md) é chamado diretamente após
> a chamada a **streamWrapper::stream\_seek()**. Se
> [streamWrapper::stream\_tell()](streamwrapper.stream-tell.md) falhar, o valor de
> retorno à função chamadora será definida para **`false`**.

> **Nota**:
>
> Nem todas as operações de pesquisa no fluxo irão resultar na chamada a
> esta função. Fluxos PHP tem buffer de leitura habilitado por padrão (veja também
> [stream\_set\_read\_buffer()](function.stream-set-read-buffer.md)) e a pesquisa pode ser feita simplesmente
> movendo-se o ponteiro do buffer.

### Veja também

- [fseek()](function.fseek.md) - Aponta para uma posição no arquivo

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

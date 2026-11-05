# Escreve no fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-write.php

---

# streamWrapper::stream\_write

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_write — Escreve no fluxo

### Descrição

public function **streamWrapper::stream\_write**([string](language.types.string.md) `$data`): [int](language.types.integer.md)

Este método é chamado em resposta a [fwrite()](function.fwrite.md).

> **Nota**:
>
> Lembre-se de atualizar a posição atual do fluxo com o número de bytes
> que foram escritos com sucesso.

### Parâmetros

`data`
:   Deve ser armazenado no fluxo subjacente.

    > **Nota**:
    >
    > Se não houver espaço suficiente no fluxo subjacente, armazena o quanto
    > for possível.

### Valor Retornado

Deve retornar o número de bytes que foram armazenados com sucesso, ou 0 se
nenhum pôde ser armazenado.

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

> **Nota**:
>
> Se o valor de retorno for maior que o comprimento de
> `data`, um aviso **`E_WARNING`** será
> emitido e o valor de retorno será truncado para o seu comprimento.

### Veja também

- [fwrite()](function.fwrite.md) - Escrita binary-safe em arquivos

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

# Definir modo de bloqueio/não-bloqueio em um fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-set-blocking.php

---

# stream\_set\_blocking

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_set\_blocking — Definir modo de bloqueio/não-bloqueio em um fluxo

### Descrição

function **stream\_set\_blocking**([resource](language.types.resource.md) `$stream`, [bool](language.types.boolean.md) `$enable`): [bool](language.types.boolean.md)

Definir modo de bloqueio ou não-bloqueio em um fluxo informado em `stream`.

Esta função funciona para qualquer fluxo que suporte modo de não-bloqueio
(atualmente, arquivos comuns e fluxos de socket).

### Parâmetros

`stream`
:   O fluxo.

`enable`
:   Se `enable` for **`false`**, o fluxo informado
    será trocado para o modo de não-bloqueio, e se for **`true`**, será
    trocado para o modo de bloqueio. Isto afeta chamadas como
    [fgets()](function.fgets.md) e [fread()](function.fread.md)
    que lêem do fluxo. Em modo de não-bloqueio, uma chamada a
    [fgets()](function.fgets.md) irá sempre retornar imediatamente,
    enquanto que em modo de bloqueio, ela irá esperar que dados fiquem disponíveis
    no fluxo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Notas

> **Nota**:
>
> No Windows, isto não tem efeito em arquivos locais. E/S de não-bloqueio em arquivos locais não é suportado no Windows.

### Veja também

- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos

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

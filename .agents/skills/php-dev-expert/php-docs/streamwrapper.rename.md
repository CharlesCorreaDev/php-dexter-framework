# Renomeia um arquivo ou diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.rename.php

---

# streamWrapper::rename

(PHP 5, PHP 7, PHP 8)

streamWrapper::rename — Renomeia um arquivo ou diretório

### Descrição

public function **streamWrapper::rename**([string](language.types.string.md) `$path_from`, [string](language.types.string.md) `$path_to`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [rename()](function.rename.md).

Tenta renomear `path_from` para
`path_to`

> **Nota**:
>
> Para que sejam retornadas mensagens de erro apropriadas, este método
> *não* deve ser definido se o empacotador não suporta
> renomear arquivos.

### Parâmetros

`path_from`
:   A URL do arquivo atual.

`path_to`
:   A URL para a qual `path_from` deve ser renomeada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Emite
um **`E_WARNING`** se a chamada a este método falhar
(ou seja, não implementado).

### Notas

> **Nota**:
>
> A
> propriedade streamWrapper::$context
> será atualizada se um contexto válido for passado para a função invocadora.

### Veja também

- [rename()](function.rename.md) - Renomeia um arquivo ou diretório

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

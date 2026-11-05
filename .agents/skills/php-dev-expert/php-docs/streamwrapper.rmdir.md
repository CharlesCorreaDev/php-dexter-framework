# Remove um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.rmdir.php

---

# streamWrapper::rmdir

(PHP 5, PHP 7, PHP 8)

streamWrapper::rmdir — Remove um diretório

### Descrição

public function **streamWrapper::rmdir**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [rmdir()](function.rmdir.md).

> **Nota**:
>
> Para que sejam retornadas mensagens de erro apropriadas, este método
> *não* deve ser definido se o empacotador não suporta
> remoção de diretórios.

### Parâmetros

`path`
:   URL do diretório a ser removido.

`options`
:   Uma máscara de bits convertida em valores, como **`STREAM_MKDIR_RECURSIVE`**.

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

- [rmdir()](function.rmdir.md) - Remove um diretório
- [streamwrapper::mkdir()](streamwrapper.mkdir.md) - Cria um diretório
- [streamwrapper::unlink()](streamwrapper.unlink.md) - Remove um arquivo

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

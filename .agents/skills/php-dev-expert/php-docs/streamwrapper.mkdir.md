# Cria um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.mkdir.php

---

# streamWrapper::mkdir

(PHP 5, PHP 7, PHP 8)

streamWrapper::mkdir — Cria um diretório

### Descrição

public function **streamWrapper::mkdir**([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$mode`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [mkdir()](function.mkdir.md).

> **Nota**:
>
> Para que sejam retornadas mensagens de erro apropriadas, este método
> *não* deve ser definido se o empacotador não suporta
> criação de diretórios.

### Parâmetros

`path`
:   Diretório a ser criado.

`mode`
:   O valor passado à função [mkdir()](function.mkdir.md).

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

- [mkdir()](function.mkdir.md) - Cria um diretório
- [streamwrapper::rmdir()](streamwrapper.rmdir.md) - Remove um diretório

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

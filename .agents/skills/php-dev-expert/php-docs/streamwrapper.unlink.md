# Remove um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.unlink.php

---

# streamWrapper::unlink

(PHP 5, PHP 7, PHP 8)

streamWrapper::unlink — Remove um arquivo

### Descrição

public function **streamWrapper::unlink**([string](language.types.string.md) `$path`): [bool](language.types.boolean.md)

Este método é chamado em resposta a [unlink()](function.unlink.md).

> **Nota**:
>
> Para que a mensagem de erro apropriada seja retornada, este método
> *não* deve ser definido se o empacotador não suportar
> remoção de arquivos.

### Parâmetros

`path`
:   A URL do arquivo que deve ser removido.

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

- [unlink()](function.unlink.md) - Apaga um arquivo
- [streamWrapper::rmdir()](streamwrapper.rmdir.md) - Remove um diretório

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

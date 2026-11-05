# Abre arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-open.php

---

# streamWrapper::stream\_open

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_open — Abre arquivo ou URL

### Descrição

public function **streamWrapper::stream\_open**(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$mode`,  
    [int](language.types.integer.md) `$options`,  
    [?](language.types.null.md)[string](language.types.string.md) `&$opened_path`  
): [bool](language.types.boolean.md)

Este método é chamado imediatamente após o empacotador ser inicializado (por exemplo por
[fopen()](function.fopen.md) e [file\_get\_contents()](function.file-get-contents.md)).

### Parâmetros

`path`
:   Especifica a URL que foi passada à função original.

    > **Nota**:
    >
    > A URL pode ser quebrada em partes com [parse\_url()](function.parse-url.md). Note que apenas URLs
    > delimitadas por :// são suportadas. : e :/ são delimitadores tecnicamente válidos, porém não suportados.

`mode`
:   O modo usado para abrir o arquivo, como detalhado para [fopen()](function.fopen.md).

    > **Nota**:
    >
    > Importante lembrar de verificar se o parâmetro `mode` é válido para
    > o caminho (`path`) requisitado.

`options`
:   Contém opções adicionais definidas pela API de fluxos. Pode conter uma ou mais
    das opcções a seguir somadas (com a operação OR).

    | Opção | Descrição |
    | --- | --- |
    | **`STREAM_USE_PATH`** | Se o caminho `path` for relativo, a pesquisa pelo recurso utilizará include\_path. |
    | **`STREAM_REPORT_ERRORS`** | Se esta opção estiver definida, o programador é responsável por emitir erros usando [trigger\_error()](function.trigger-error.md) durante abertura do fluxo. Se não estiver definida, o programador não deve emitir erros. |

`opened_path`
:   Se o caminho `path` for aberto com sucesso,
    e **`STREAM_USE_PATH`** estiver definida em `options`,
    `opened_path` deve ser definida para o caminho
    completo do arquivo/recurso que foi realmente aberto.

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

- [fopen()](function.fopen.md) - Abre um arquivo ou URL
- [parse\_url()](function.parse-url.md) - Analisa uma URL e retorna seus componentes

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

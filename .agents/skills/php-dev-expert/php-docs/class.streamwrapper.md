# A classe streamWrapper

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.streamwrapper.php

---

# A classe streamWrapper

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

## Introdução

Permite que o usuário implemente seus próprios fluxos e manipuladores de protocolo para
uso com todas as outras funções de sistema de arquivos (como [fopen()](function.fopen.md),
[fread()](function.fread.md) etc.).

> **Nota**:
>
> Esta *NÃO É* uma classe verdadeira, apenas um protótipo de como
> uma classe que define seu próprio protocolo deve ser.

> **Nota**:
>
> Implementar os métodos de forma diferente da descrita aqui pode levar a
> comportamentos indefinidos.

Uma instância desta classe é inicializada assim que uma função de fluxo
tenta acessar o protocolo ao qual está associada.

## Resumo da classe

class streamWrapper
{

/\* Propriedades \*/

public
[resource](language.types.resource.md)
[$context](class.streamwrapper.md#streamwrapper.props.context);

/\* Métodos \*/

public function [\_\_construct](streamwrapper.construct.md)()

public function [dir\_closedir](streamwrapper.dir-closedir.md)(): [bool](language.types.boolean.md)

public function [dir\_opendir](streamwrapper.dir-opendir.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

public function [dir\_readdir](streamwrapper.dir-readdir.md)(): [string](language.types.string.md)|[bool](language.types.boolean.md)

public function [dir\_rewinddir](streamwrapper.dir-rewinddir.md)(): [bool](language.types.boolean.md)

public function [mkdir](streamwrapper.mkdir.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$mode`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

public function [rename](streamwrapper.rename.md)([string](language.types.string.md) `$path_from`, [string](language.types.string.md) `$path_to`): [bool](language.types.boolean.md)

public function [rmdir](streamwrapper.rmdir.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$options`): [bool](language.types.boolean.md)

public function [stream\_cast](streamwrapper.stream-cast.md)([int](language.types.integer.md) `$cast_as`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

public function [stream\_close](streamwrapper.stream-close.md)(): [void](language.types.void.md)

public function [stream\_eof](streamwrapper.stream-eof.md)(): [bool](language.types.boolean.md)

public function [stream\_flush](streamwrapper.stream-flush.md)(): [bool](language.types.boolean.md)

public function [stream\_lock](streamwrapper.stream-lock.md)([int](language.types.integer.md) `$operation`): [bool](language.types.boolean.md)

public function [stream\_metadata](streamwrapper.stream-metadata.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$option`, [mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

public function [stream\_open](streamwrapper.stream-open.md)(  
    [string](language.types.string.md) `$path`,  
    [string](language.types.string.md) `$mode`,  
    [int](language.types.integer.md) `$options`,  
    [?](language.types.null.md)[string](language.types.string.md) `&$opened_path`  
): [bool](language.types.boolean.md)

public function [stream\_read](streamwrapper.stream-read.md)([int](language.types.integer.md) `$count`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [stream\_seek](streamwrapper.stream-seek.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence`): [bool](language.types.boolean.md)

public function [stream\_set\_option](streamwrapper.stream-set-option.md)([int](language.types.integer.md) `$option`, [int](language.types.integer.md) `$arg1`, [int](language.types.integer.md) `$arg2`): [bool](language.types.boolean.md)

public function [stream\_stat](streamwrapper.stream-stat.md)(): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [stream\_tell](streamwrapper.stream-tell.md)(): [int](language.types.integer.md)

public function [stream\_truncate](streamwrapper.stream-truncate.md)([int](language.types.integer.md) `$new_size`): [bool](language.types.boolean.md)

public function [stream\_write](streamwrapper.stream-write.md)([string](language.types.string.md) `$data`): [int](language.types.integer.md)

public function [unlink](streamwrapper.unlink.md)([string](language.types.string.md) `$path`): [bool](language.types.boolean.md)

public function [url\_stat](streamwrapper.url-stat.md)([string](language.types.string.md) `$path`, [int](language.types.integer.md) `$flags`): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [\_\_destruct](streamwrapper.destruct.md)()

}

## Propriedades

resource context
:   O [contexto](context.md) atual, ou **`null`** se nenhum
    contexto foi passado à função chamadora.

    Use a função [stream\_context\_get\_options()](function.stream-context-get-options.md) para analisar o
    contexto.

    > **Nota**:
    >
    > Esta propriedade *deve* ser pública para que o PHP possa
    > preenchê-la com o recurso de contexto real.

## Veja também

- [Exemplo de classe registrada como empacotador de fluxo](stream.streamwrapper.example-1.md)
- [stream\_wrapper\_register()](function.stream-wrapper-register.md)
- [stream\_wrapper\_unregister()](function.stream-wrapper-unregister.md)
- [stream\_wrapper\_restore()](function.stream-wrapper-restore.md)

## Índice

- [streamWrapper::\_\_construct](streamwrapper.construct.md) — Constrói um novo empacotador de fluxo
- [streamWrapper::\_\_destruct](streamwrapper.destruct.md) — Destrói um empacotador de fluxo existente
- [streamWrapper::dir\_closedir](streamwrapper.dir-closedir.md) — Fecha o manipulador de diretório
- [streamWrapper::dir\_opendir](streamwrapper.dir-opendir.md) — Abre um manipulador de diretório
- [streamWrapper::dir\_readdir](streamwrapper.dir-readdir.md) — Lê entrada do manipulador de diretório
- [streamWrapper::dir\_rewinddir](streamwrapper.dir-rewinddir.md) — Retrocede um manipulador de diretório
- [streamWrapper::mkdir](streamwrapper.mkdir.md) — Cria um diretório
- [streamWrapper::rename](streamwrapper.rename.md) — Renomeia um arquivo ou diretório
- [streamWrapper::rmdir](streamwrapper.rmdir.md) — Remove um diretório
- [streamWrapper::stream\_cast](streamwrapper.stream-cast.md) — Obtém o recurso subjacente
- [streamWrapper::stream\_close](streamwrapper.stream-close.md) — Fecha um recurso
- [streamWrapper::stream\_eof](streamwrapper.stream-eof.md) — Teste para fim de arquivo em ponteiros
- [streamWrapper::stream\_flush](streamwrapper.stream-flush.md) — Descarrega a saída
- [streamWrapper::stream\_lock](streamwrapper.stream-lock.md) — Travamento de aviso para arquivos
- [streamWrapper::stream\_metadata](streamwrapper.stream-metadata.md) — Alterar metadados de fluxo
- [streamWrapper::stream\_open](streamwrapper.stream-open.md) — Abre arquivo ou URL
- [streamWrapper::stream\_read](streamwrapper.stream-read.md) — Lê dados do fluxo
- [streamWrapper::stream\_seek](streamwrapper.stream-seek.md) — Pesquisa uma localização específica em um fluxo
- [streamWrapper::stream\_set\_option](streamwrapper.stream-set-option.md) — Altera as opções do fluxo
- [streamWrapper::stream\_stat](streamwrapper.stream-stat.md) — Obtém informação sobre um recurso de arquivo
- [streamWrapper::stream\_tell](streamwrapper.stream-tell.md) — Obtém a posição atual de um fluxo
- [streamWrapper::stream\_truncate](streamwrapper.stream-truncate.md) — Trunca o fluxo
- [streamWrapper::stream\_write](streamwrapper.stream-write.md) — Escreve no fluxo
- [streamWrapper::unlink](streamwrapper.unlink.md) — Remove um arquivo
- [streamWrapper::url\_stat](streamwrapper.url-stat.md) — Obtém informação sobre um arquivo

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

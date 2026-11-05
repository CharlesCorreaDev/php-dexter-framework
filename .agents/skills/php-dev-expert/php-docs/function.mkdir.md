# Cria um diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mkdir.php

---

# mkdir

(PHP 4, PHP 5, PHP 7, PHP 8)

mkdir — Cria um diretório

### Descrição

function **mkdir**(  
    [string](language.types.string.md) `$directory`,  
    [int](language.types.integer.md) `$permissions` = 0777,  
    [bool](language.types.boolean.md) `$recursive` = **`false`**,  
    [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**  
): [bool](language.types.boolean.md)

Tenta criar o diretório especificado pelo parâmetro `directory`.

### Parâmetros

`directory`
:   O caminho do diretório.

    **Dica**

    Uma URL pode ser usada como um
    nome de arquivo com esta função se os [empacotadores fopen](filesystem.configuration.md#ini.allow-url-fopen) estiverem habilitados.
    Consulte a função [fopen()](function.fopen.md) para mais detalhes sobre como especificar
    o nome do arquivo. Consulte os [Protocolos e empacotadores suportados](wrappers.md) para obter links para informações
    sobre as capacidades de cada empacotador, notas de uso
    e informações sobre quaisquer variáveis predefinidas que eles possam
    fornecer.

`permissions`
:   A permissão padrão é o octal 0777, que significa o acesso mais abrangente
    possível. Para mais informações sobre permissões, leia os detalhes
    na página da função [chmod()](function.chmod.md).

    > **Nota**:
    >
    > O parâmetro `permissions` é ignorado no Windows.

    Note que provavelmente será desejado especificar `permissions` como um número octal,
    o que significa que ele deve ser precedido por zero. `permissions` também é modificado inicial. O mode é também modificado pela umaks atual,
    pela umask atual, que pode ser modificada usando
    [umask()](function.umask.md).

`recursive`
:   Se for **`true`**, quaisquer diretórios acima do especificado em `directory`
    serão criados, com as mesmas permissões.

`context`
:   Um [resource](language.types.resource.md) de
    [contexto de fluxo](stream.contexts.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

> **Nota**:
>
> Se o diretório a ser criado já existir, será considerado um erro
> e **`false`** será retornado. Use [is\_dir()](function.is-dir.md) ou
> [file\_exists()](function.file-exists.md) para verificar se o diretório já existe
> antes de tentar criá-lo.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** se o diretório
já existir.

Emite um erro de nível **`E_WARNING`** se as permissões
relevantes impedem a criação do diretório.

### Examples

**Exemplo #1 Exemplo de **mkdir()****

```
<?php
mkdir("/caminho/para/meu/diretorio", 0700);
?>
```

**Exemplo #2 **mkdir()** usando o parâmetro `recursive`**

```
<?php
// Estrutura de diretório desejada
$structure = './profundidade1/profundidade2/profundidade3/';

// Para criar a estrutura aninhada, o parâmetro $recursive
// para mkdir() deve ser especificado.

if (!mkdir($structure, 0777, true)) {
    die('Falha ao criar os diretórios...');
}

// ...
?>
```

### Veja também

- [is\_dir()](function.is-dir.md) - Diz se o caminho é um diretório
- [rmdir()](function.rmdir.md) - Remove um diretório
- [umask()](function.umask.md) - Modificar a umask atual

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

# Envia a representação YAML de um valor para um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaml-emit-file.php

---

# yaml\_emit\_file

(PECL yaml >= 0.5.0)

yaml\_emit\_file — Envia a representação YAML de um valor para um arquivo

### Descrição

function **yaml\_emit\_file**(  
    [string](language.types.string.md) `$filename`,  
    [mixed](language.types.mixed.md) `$data`,  
    [int](language.types.integer.md) `$encoding` = YAML\_ANY\_ENCODING,  
    [int](language.types.integer.md) `$linebreak` = YAML\_ANY\_BREAK,  
    [array](language.types.array.md) `$callbacks` = **`null`**  
): [bool](language.types.boolean.md)

Gera uma representação YAML dos dados fornecidos em `data`
no arquivo especificado em `filename`.

### Parâmetros

`filename`
:   Caminho para o arquivo.

`data`
:   O parâmetro `data` deve conter os dados a serem codificados. Pode ser de qualquer tipo exceto
    [resource](language.types.resource.md).

`encoding`
:   Codificação dos caracteres para saída, uma das constantes
    **`YAML_ANY_ENCODING`**,
    **`YAML_UTF8_ENCODING`**,
    **`YAML_UTF16LE_ENCODING`** ou
    **`YAML_UTF16BE_ENCODING`**.

`linebreak`
:   Estilo de quebra de linha, pode ser uma das constantes
    **`YAML_ANY_BREAK`**,
    **`YAML_CR_BREAK`**,
    **`YAML_LN_BREAK`** ou
    **`YAML_CRLN_BREAK`**.

`callbacks`
:   Manipuladores de conteúdo para emissão dos nós YAML. Um [array](language.types.array.md) associativo
    para mapeamento de classe => [callable](language.types.callable.md). Consulte
    [funções de emissão](yaml.callbacks.emit.md) para mais
    detalhes.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL yaml 1.1.0 | O parâmetro `callbacks` foi adicionado. |

### Veja também

- [yaml\_emit()](function.yaml-emit.md) - Retorna a representação YAML de um valor
- [yaml\_parse()](function.yaml-parse.md) - Analisa um fluxo YAML

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

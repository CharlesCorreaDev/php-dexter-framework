# Extrai todos os atributos de conteúdo de metatags de um arquivo e retorna um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-meta-tags.php

---

# get\_meta\_tags

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_meta\_tags — Extrai todos os atributos de conteúdo de metatags de um arquivo e retorna um array

### Descrição

function **get\_meta\_tags**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$use_include_path` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Abre o arquivo informado em `filename` e analisa-o linha a linha procurando por
<meta>-tags. A análise termina em
`</head>`.

### Parâmetros

`filename`
:   O caminho para o arquivo HTML, como uma string. Pode ser um arquivo local ou uma
    URL.

    **Exemplo #1 O que **get\_meta\_tags()** analisa**

    ```
    <meta name="author" content="name">
    <meta name="keywords" content="php documentation">
    <meta name="DESCRIPTION" content="a php manual">
    <meta name="geo.position" content="49.33;-86.59">
    </head> <!-- análise termina aqui -->
    ```

`use_include_path`
:   Definir `use_include_path` para **`true`** fará com que
    o PHP tente abrir o arquivo ao longo do caminho de inclusão padrão de acordo com
    a diretiva [include\_path](ini.core.md#ini.include-path).
    Isto é útil para arquivos locais, mas não para URLs.

### Valor Retornado

Retorna um array com todas as metatags analisadas.

O valor da propriedade "name" torna-se a chave, o valor da propriedade "content"
torna-se o valor do array retornada, para que se possa usar facilmente
funções padrão de arrays para percorrê-lo ou acessar valores únicos.
Caracteres especiais no valor da propriedade "name" são substituídos por
'\_', o restante é convertido para minúsculas. Se duas metatags tiverem o mesmo
nome, apenas a última será retornada.

Retorna **`false`** em caso de falha.

### Examples

**Exemplo #2 O que **get\_meta\_tags()** retorna**

```
<?php
// Assumindo que as tags acima estão em www.example.com
$tags = get_meta_tags('http://www.example.com/');

// Note como as chaves estão todas em minúsculas agora, e
// como o ponto (.) foi substituído pelo sublinhado (_) na chave.
echo $tags['author'];       // name
echo $tags['keywords'];     // php documentation
echo $tags['description'];  // a php manual
echo $tags['geo_position']; // 49.33;-86.59
?>
```

### Notas

> **Nota**:
>
> Somente metatags com atributos "name" serão analisadas. As aspas não são obrigatórias.

### Veja também

- [htmlentities()](function.htmlentities.md) - Converte todos os caracteres aplicáveis em entidades HTML
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL

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

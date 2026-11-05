# Analisa um fluxo Yaml de um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaml-parse-url.php

---

# yaml\_parse\_url

(PECL yaml >= 0.4.0)

yaml\_parse\_url — Analisa um fluxo Yaml de um URL

### Descrição

function **yaml\_parse\_url**(  
    [string](language.types.string.md) `$url`,  
    [int](language.types.integer.md) `$pos` = 0,  
    [int](language.types.integer.md) `&$ndocs` = ?,  
    [array](language.types.array.md) `$callbacks` = **`null`**  
): [mixed](language.types.mixed.md)

Converte todo ou parte de um fluxo de documentos YAML lido de uma URL em uma variável PHP.

### Parâmetros

`url`
:   `url` deve estar no formato "esquema://...". O PHP
    irá procurar por um manipulador de protocolo (também conhecido como empacotador) para esse
    esquema. Se nenhum empacotador para esse protocolo estiver registrado, o PHP emitirá
    um aviso para ajudar a rastrear possíveis problemas no script e então
    continuará como se tivesse sido especificado um arquivo normal.

`pos`
:   Documento a ser extraído do fluxo (`-1` para todos
    os documentos, `0` para o primeiro documento, ...).

`ndocs`
:   Se `ndocs` for fornecido, será preenchido com o
    número de documentos encontrados no fluxo.

`callbacks`
:   Manipuladores de conteúdo para nós YAML. Um [array](language.types.array.md) associativo
    para mapeamento de etiqueta => [callable](language.types.callable.md). Consulte
    [funções de análise](yaml.callbacks.parse.md) para mais detalhes.

### Valor Retornado

Retorna o valor codificado em `url` no tipo PHP
apropriado ou **`false`** em caso de falha. Se `pos` for
`-1`, um [array](language.types.array.md) será retornado com uma entrada
para cada documento encontrado no fluxo.

### Notas

**Aviso**

Processar entradas não confiáveis de usuários ​​com **yaml\_parse\_url()**
é perigoso se o uso de [unserialize()](function.unserialize.md) estiver habilitado para
nós que usam a etiqueta `!php/object`. Este comportamento pode ser
desativado usando a configuração INI `yaml.decode_php`.

### Veja também

- [yaml\_parse()](function.yaml-parse.md) - Analisa um fluxo YAML
- [yaml\_parse\_file()](function.yaml-parse-file.md) - Analisa um fluxo YAML de um arquivo
- [yaml\_emit()](function.yaml-emit.md) - Retorna a representação YAML de um valor

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

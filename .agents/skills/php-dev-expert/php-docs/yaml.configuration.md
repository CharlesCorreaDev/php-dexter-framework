# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Yaml**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [yaml.decode\_binary](yaml.configuration.md#ini.yaml.decode-binary) | 0 | **`INI_ALL`** |  |
| [yaml.decode\_php](yaml.configuration.md#ini.yaml.decode-php) | 0 | **`INI_ALL`** | Adicionado na versão 1.2.0, antes da 2.0.0 o padrão era 1 |
| [yaml.decode\_timestamp](yaml.configuration.md#ini.yaml.decode-timestamp) | 0 | **`INI_ALL`** |  |
| [yaml.output\_canonical](yaml.configuration.md#ini.yaml.output-canonical) | 0 | **`INI_ALL`** |  |
| [yaml.output\_indent](yaml.configuration.md#ini.yaml.output-indent) | 2 | **`INI_ALL`** |  |
| [yaml.output\_width](yaml.configuration.md#ini.yaml.output-width) | 80 | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`yaml.decode_binary` [bool](language.types.boolean.md)
:   Desativado por padrão, mas pode ser ativado para fazer com que entidades codificadas em binário base64 que possuem a etiqueta explícita "tag:yaml.org,2002:binary" sejam decodificadas.

`yaml.decode_php` [bool](language.types.boolean.md)
:   Desativado por padrão, mas pode ser ativado para fazer com que objetos PHP serializados que possuem a etiqueta explícita "!php/object" sejam desserializados.

`yaml.decode_timestamp` [int](language.types.integer.md)
:   Controla a decodificação de escalares "tag:yaml.org,2002:timestamp" implícitos e explícitos no fluxo de documentos YAML. A configuração padrão `0` não aplicará nenhuma decodificação. Uma configuração `1` usará [strtotime()](function.strtotime.md) para interpretar o valor do timestamp como um timestamp Unix. Uma configuração `2` usará [date\_create()](function.date-create.md) para interpretar o valor do timestamp como objeto [DateTime](class.datetime.md).

`yaml.output_canonical` [bool](language.types.boolean.md)
:   Desativado por padrão, mas pode ser ativado para causar saída de formulário canônico.

`yaml.output_indent` [int](language.types.integer.md)
:   Número de espaços para identar seções. O valor deve estar entre
    `1` e `10`.

`yaml.output_width` [int](language.types.integer.md)
:   Define a largura de linha preferida. `-1` significa ilimitado.

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

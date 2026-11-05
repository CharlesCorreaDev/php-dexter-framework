# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mbstring.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do mbstring**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mbstring.language](mbstring.configuration.md#ini.mbstring.language) | "neutral" | **`INI_ALL`** |  |
| [mbstring.detect\_order](mbstring.configuration.md#ini.mbstring.detect-order) | NULL | **`INI_ALL`** |  |
| [mbstring.http\_input](mbstring.configuration.md#ini.mbstring.http-input) | "pass" | **`INI_ALL`** | Descontinuado |
| [mbstring.http\_output](mbstring.configuration.md#ini.mbstring.http-output) | "pass" | **`INI_ALL`** | Descontinuado |
| [mbstring.internal\_encoding](mbstring.configuration.md#ini.mbstring.internal-encoding) | NULL | **`INI_ALL`** | Descontinuado |
| [mbstring.substitute\_character](mbstring.configuration.md#ini.mbstring.substitute-character) | NULL | **`INI_ALL`** |  |
| [mbstring.func\_overload](mbstring.configuration.md#ini.mbstring.func-overload) | "0" | **`INI_SYSTEM`** | Descontinuado a partir do PHP 7.2.0; removido a partir do PHP 8.0.0. |
| [mbstring.encoding\_translation](mbstring.configuration.md#ini.mbstring.encoding-translation) | "0" | **`INI_PERDIR`** |  |
| [mbstring.http\_output\_conv\_mimetypes](mbstring.configuration.md#ini.mbstring.http-output-conv-mimetypes) | "^(text/|application/xhtml\+xml)" | **`INI_ALL`** |  |
| [mbstring.strict\_detection](mbstring.configuration.md#ini.mbstring.strict-detection) | "0" | **`INI_ALL`** |  |
| [mbstring.regex\_retry\_limit](mbstring.configuration.md#ini.mbstring.regex-retry-limit) | "1000000" | **`INI_ALL`** | Disponível a partir do PHP 7.4.0. |
| [mbstring.regex\_stack\_limit](mbstring.configuration.md#ini.mbstring.regex-stack-limit) | "100000" | **`INI_ALL`** | Disponível a partir do PHP 7.3.5. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mbstring.language` [string](language.types.string.md)
:   A configuração padrão do idioma nacional (NLS) usada no mbstring. Note que esta opção
    define automaticamente `mbstring.internal_encoding` e
    `mbstring.internal_encoding` deve ser colocada
    após `mbstring.language` no php.ini

`mbstring.encoding_translation` [bool](language.types.boolean.md)
:   Ativa o filtro de codificação de caracteres transparente para as consultas HTTP de entrada,
    que realiza a detecção e conversão da codificação de entrada para a
    codificação de caracteres interna.

`mbstring.internal_encoding` [string](language.types.string.md)
:   **Aviso**

    Este recurso descontinuado *será*
    certamente *removido* no futuro.

    Define a codificação de caracteres interna padrão.

    Os usuários devem deixar isso vazio e definir
    [`default_charset`](ini.core.md#ini.default-charset)
    em vez disso.

`mbstring.http_input` [string](language.types.string.md)
:   **Aviso**

    Este recurso descontinuado *será*
    certamente *removido* no futuro.

    Define a codificação de caracteres de entrada HTTP padrão.

    Os usuários devem deixar isso vazio e definir
    [`default_charset`](ini.core.md#ini.default-charset)
    em vez disso.

`mbstring.http_output` [string](language.types.string.md)
:   **Aviso**

    Este recurso descontinuado *será*
    certamente *removido* no futuro.

    Define a codificação de caracteres de saída HTTP padrão (a saída será convertida da codificação interna para a codificação de saída HTTP na saída).

    Os usuários devem deixar isso vazio e definir
    [`default_charset`](ini.core.md#ini.default-charset)
    em vez disso.

`mbstring.detect_order` [string](language.types.string.md)
:   Define a ordem padrão de detecção de código de caracteres. Veja também
    [mb\_detect\_order()](function.mb-detect-order.md).

`mbstring.substitute_character` [string](language.types.string.md)
:   Define o caractere a ser substituído por codificação de caracteres inválida.
    Veja [mb\_substitute\_character()](function.mb-substitute-character.md) para os valores suportados.

`mbstring.func_overload` [string](language.types.string.md)
:   **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 7.2.0 e foi *REMOVIDO* a partir do PHP 8.0.0. O uso deste recurso
    é fortemente desencorajado.

    Sobrecarrega um conjunto de funções de byte único pelas contrapartes do mbstring. Veja
    [Sobrecarga de Funções](mbstring.overload.md) para mais
    informações.

    Esta configuração só pode ser alterada no arquivo php.ini.

`mbstring.http_output_conv_mimetypes` [string](language.types.string.md)

`mbstring.strict_detection` [bool](language.types.boolean.md)
:   Ativa a detecção estrita de codificação. Veja [mb\_detect\_encoding()](function.mb-detect-encoding.md)
    para uma descrição e exemplos.

`mbstring.regex_retry_limit` [int](language.types.integer.md)
:   Limita a quantidade de retrocesso que pode ser executada durante uma
    correspondência de mbregex.

    Esta configuração só tem efeito ao vincular contra oniguruma >= 6.8.0.

`mbstring.regex_stack_limit` [int](language.types.integer.md)
:   Limita a profundidade da pilha de expressões regulares mbstring.

De acordo com a [» especificação HTML 4.01](https://www.w3.org/TR/REC-html40/interact/forms.html#adef-accept-charset),
os navegadores podem codificar um formulário sendo enviado com uma
codificação de caracteres diferente da usada para a página.
Veja [mb\_http\_input()](function.mb-http-input.md) para detectar a codificação de caracteres
usada pelos navegadores.

Embora os navegadores populares sejam capazes de fazer uma suposição razoavelmente precisa
sobre a codificação de caracteres de um documento HTML específico, seria melhor
definir o parâmetro `charset` no cabeçalho HTTP
`Content-Type` para o valor apropriado usando a função
[header()](function.header.md) ou
a configuração ini [default\_charset](ini.core.md#ini.sect.data-handling).

**Exemplo #1 Exemplos de configuração do php.ini**

```
; Define idioma padrão
mbstring.language        = Neutral; Define o idioma padrão como neutro (UTF-8) (padrão)
mbstring.language        = English; Define o idioma padrão para inglês
mbstring.language        = Japanese; Define o idioma padrão para japonês

;; Define a codificação interna padrão
;; Nota: Certifique-se de usar a codificação de caracteres que funciona com PHP
mbstring.internal_encoding    = UTF-8  ; Define a codificação interna para UTF-8

;; A tradução da codificação de entrada HTTP está habilitada.
mbstring.encoding_translation = On

;; Define a codificação de caracteres de entrada HTTP padrão
;; Nota: O script não pode alterar a configuração http_input.
mbstring.http_input           = pass    ; Sem conversão.
mbstring.http_input           = auto    ; Define a entrada HTTP como automática
                                ; "auto" é expandido de acordo com mbstring.language
mbstring.http_input           = SJIS    ; Define a entrada HTTP para SJIS
mbstring.http_input           = UTF-8,SJIS,EUC-JP ; Especifica a ordenação

;; Define a codificação de caracteres de saída HTTP padrão
mbstring.http_output          = pass    ; Sem conversão
mbstring.http_output          = UTF-8   ; Define a codificação de saída HTTP para UTF-8

;; Define a ordem de detecção de codificação de caracteres padrão
mbstring.detect_order         = auto    ; Define a ordem de detecção como automática
mbstring.detect_order         = ASCII,JIS,UTF-8,SJIS,EUC-JP ; Especifica o pedido

;; Define o caractere substituto padrão
mbstring.substitute_character = 12307   ; Especifica o valor Unicode
mbstring.substitute_character = none    ; Não imprime caractere
mbstring.substitute_character = long    ; Exemplo longo: U+3000,JIS+7E7E
```

**Exemplo #2 php.ini configuração para usuários `EUC-JP`**

```
;; Desativa buffer de saída
output_buffering      = Off

;; Define conjunto de caracteres do cabeçalho HTTP
default_charset       = EUC-JP

;; Define o idioma padrão para japonês
mbstring.language = Japanese

;; A tradução da codificação de entrada HTTP está habilitada
mbstring.encoding_translation = On

;; Define a conversão de codificação de entrada HTTP como automática
mbstring.http_input   = auto

;; Converte saída HTTP para EUC-JP
mbstring.http_output  = EUC-JP

;; Define a codificação interna para EUC-JP
mbstring.internal_encoding = EUC-JP

;; Não imprime caracteres inválidos
mbstring.substitute_character = none
```

**Exemplo #3 php.ini configuração para usuários `SJIS`**

```
;; Habilita buffer de saída
output_buffering     = On

;; Define mb_output_handler para ativar a conversão de saída
output_handler       = mb_output_handler

;; Define o conjunto de caracteres do cabeçalho HTTP
default_charset      = Shift_JIS

;; Define o idioma padrão para japonês
mbstring.language = Japanese

;; Define a conversão de codificação de entrada http como automática
mbstring.http_input  = auto

;; Converte para SJIS
mbstring.http_output = SJIS

;; Define a codificação interna para EUC-JP
mbstring.internal_encoding = EUC-JP

;; Não imprime caracteres inválidos
mbstring.substitute_character = none
```

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

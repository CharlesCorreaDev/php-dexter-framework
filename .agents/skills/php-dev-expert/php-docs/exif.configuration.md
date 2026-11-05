# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/exif.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

Exif suporta conversão automática para codificações de caracteres
Unicode e JIS de comentários de usuários quando o módulo
[mbstring](ref.mbstring.md)
está disponível. Isto é feito primeiro decodificando-se o comentário
usando o conjunto de caracteres especificado. o resultado é então codificado
com outro conjunto de caracteres que deve corresponder à
saída `HTTP`.

**Opções de configuração de Exif**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [exif.encode\_unicode](exif.configuration.md#ini.exif.encode-unicode) | "ISO-8859-15" | **`INI_ALL`** |  |
| [exif.decode\_unicode\_motorola](exif.configuration.md#ini.exif.decode-unicode-motorola) | "UCS-2BE" | **`INI_ALL`** |  |
| [exif.decode\_unicode\_intel](exif.configuration.md#ini.exif.decode-unicode-intel) | "UCS-2LE" | **`INI_ALL`** |  |
| [exif.encode\_jis](exif.configuration.md#ini.exif.encode-jis) | "" | **`INI_ALL`** |  |
| [exif.decode\_jis\_motorola](exif.configuration.md#ini.exif.decode-jis-motorola) | "JIS" | **`INI_ALL`** |  |
| [exif.decode\_jis\_intel](exif.configuration.md#ini.exif.decode-jis-intel) | "JIS" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`exif.encode_unicode` [string](language.types.string.md)
:   `exif.encode_unicode` define o conjunto
    de caracteres UNICODE para lidar com os comentários de usuário.
    O padrão é ISO-8859-15 que deve funcionar para a maioria dos
    países não asiáticos. A configuração pode ser vazia
    ou deve ser uma codificação suportada por mbstring. Se for
    vazia,a codificação interna atual de mbstring é
    usada.

`exif.decode_unicode_motorola` [string](language.types.string.md)
:   `exif.decode_unicode_motorola` define
    o conjunto de caracteres internos da imagem para os comentários
    de usuário codificados em Unicode se a imagem está na ordem de bytes Motorola (Big Endian).
    Esta configuração não pode ser vazia mas pode-se especificar uma lista
    de codificações suportadas por. O padrão é UCS-2BE.

`exif.decode_unicode_intel` [string](language.types.string.md)
:   `exif.decode_unicode_intel` define
    o conjunto de caracteres internos da imagem para os comentários
    de usuário se a imagem está na ordem de bytes Intel (Little Endian).
    Esta configuração não pode ser vazia mas pode-se especificar uma lista
    de codificações suportadas por. O padrão é UCS-2LE.

`exif.encode_jis` [string](language.types.string.md)
:   `exif.encode_jis` define o conjunto
    de caracteres JIS com o qual os comentários são lidos.
    O padrão é um valor vazio que força
    as funções a usarem a codificação interna atual
    de mbstring.

`exif.decode_jis_motorola` [string](language.types.string.md)
:   `exif.decode_jis_motorola` define o conjunto
    de caracteres internos da imagem para comentários codificados com
    JIS se a imagem está na ordem de bytes Motorola (Big Endian).
    Esta configuração não pode ser vazia mas pode-se especificar uma lista
    de codificações suportadas por. O padrão é JIS.

`exif.decode_jis_intel` [string](language.types.string.md)
:   `exif.decode_jis_intel` define o conjunto
    de caracteres internos da imagem para comentários codificados com
    JIS se a imagem está na ordem de bytes Intel (Little Endian).
    Esta configuração não pode ser vazia mas pode-se especificar uma lista
    de codificações suportadas por. O padrão é JIS.

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

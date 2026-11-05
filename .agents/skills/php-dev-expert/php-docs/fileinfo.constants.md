# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fileinfo.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`FILEINFO_NONE`** ([int](language.types.integer.md))
:   Nenhum tratamento especial.

**`FILEINFO_SYMLINK`** ([int](language.types.integer.md))
:   Segue links simbólicos.

**`FILEINFO_MIME_TYPE`** ([int](language.types.integer.md))
:   Retorna o tipo MIME.

**`FILEINFO_MIME_ENCODING`** ([int](language.types.integer.md))
:   Retorna a codificação MIME do arquivo.

**`FILEINFO_MIME`** ([int](language.types.integer.md))
:   Retorna o tipo e a codificação MIME conforme definido pela RFC 2045.

**`FILEINFO_COMPRESS`** ([int](language.types.integer.md))
:   Descompacta arquivos compactados.

    Desabilitada devido a problemas com thread safety.

**`FILEINFO_DEVICES`** ([int](language.types.integer.md))
:   Verifica o conteúdo dos dispositivos especiais de blocos ou caracteres.

**`FILEINFO_CONTINUE`** ([int](language.types.integer.md))
:   Retorne todas as correspondências, não apenas a primeira.

**`FILEINFO_PRESERVE_ATIME`** ([int](language.types.integer.md))
:   Se possível, preserva o tempo de acesso original.

**`FILEINFO_RAW`** ([int](language.types.integer.md))
:   Não traduz caracteres não imprimíveis para uma representação octal
    `\ooo`.

**`FILEINFO_EXTENSION`** ([int](language.types.integer.md))
:   Retorna a extensão de arquivo apropriada para o tipo MIME detectado no
    arquivo.

    Para tipos que normalmente possuem múltiplas extensões de arquivo, como imagens
    `JPEG`, o valor retornado é composto por múltiplas extensões separadas por uma barra, por exemplo:
    `"jpeg/jpg/jpe/jfif"`. Para tipos desconhecidos indisponíveis no
    banco de dados magic.mime, o valor de retorno é `"???"`.

    Disponível desde o PHP 7.2.0.

**`FILEINFO_APPLE`** ([int](language.types.integer.md))
:   Retorna o autor e o tipo Apple.

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

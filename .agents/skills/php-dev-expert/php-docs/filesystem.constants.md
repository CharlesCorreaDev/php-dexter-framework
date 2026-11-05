# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystem.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SEEK_SET`** ([int](language.types.integer.md))

**`SEEK_CUR`** ([int](language.types.integer.md))

**`SEEK_END`** ([int](language.types.integer.md))

**`LOCK_SH`** ([int](language.types.integer.md))

**`LOCK_EX`** ([int](language.types.integer.md))

**`LOCK_UN`** ([int](language.types.integer.md))

**`LOCK_NB`** ([int](language.types.integer.md))

**Valores para o parâmetro `flags` da função
[file()](function.file.md)**

**`FILE_USE_INCLUDE_PATH`** ([int](language.types.integer.md))
:   Procura por `filename` no
    [include\_path](ini.core.md#ini.include-path).

**`FILE_NO_DEFAULT_CONTEXT`** ([int](language.types.integer.md))

**`FILE_APPEND`** ([int](language.types.integer.md))
:   Adiciona conteúdo ao arquivo existente.

**`FILE_IGNORE_NEW_LINES`** ([int](language.types.integer.md))
:   Remove caracteres de fim de linha.

**`FILE_SKIP_EMPTY_LINES`** ([int](language.types.integer.md))
:   Pula linhas em branco.

**`FILE_BINARY`** ([int](language.types.integer.md))
:   Modo binário.

    **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.1.0.

**`FILE_TEXT`** ([int](language.types.integer.md))
:   Modo texto.

    **Aviso**

    Esta constante não tem efeito e foi descontinuada a partir do PHP 8.1.0.

**Valores para o parâmetro `flags` da função
[glob()](function.glob.md)**

**`GLOB_AVAILABLE_FLAGS`** ([int](language.types.integer.md))
:   Todas as constantes **`GLOB_*`** combinadas.
    Equivalente a `0` | **`GLOB_BRACE`** |
    **`GLOB_MARK`** | **`GLOB_NOSORT`** |
    **`GLOB_NOCHECK`** | **`GLOB_NOESCAPE`** |
    **`GLOB_ERR`** | **`GLOB_ONLYDIR`**

**`GLOB_BRACE`** ([int](language.types.integer.md))
:   Expande {a,b,c} para corresponder a 'a', 'b', ou 'c'

    > **Nota**:
    >
    > **`GLOB_BRACE`** não está disponível em alguns sistemas não-GNU,
    > como Solaris ou Alpine Linux.

**`GLOB_ERR`** ([int](language.types.integer.md))
:   Para em erros de leitura (como diretórios não legíveis),
    por padrão erros são ignorados.

**`GLOB_MARK`** ([int](language.types.integer.md))
:   Adiciona uma barra (ou barra invertida no Windows) para cada diretório retornado

**`GLOB_NOCHECK`** ([int](language.types.integer.md))
:   Retorna a expressão de pesquisa se nenhum arquivo correspondente a ela for encontrado.

**`GLOB_NOESCAPE`** ([int](language.types.integer.md))
:   Barras invertidas não escapam meta-caracteres.

**`GLOB_NOSORT`** ([int](language.types.integer.md))
:   Retorna os arquivos conforme aparecem no diretório (sem ordenação).
    Quando esta opção não é usada, os nomes são ordenados alfabeticamente.

**`GLOB_ONLYDIR`** ([int](language.types.integer.md))
:   Retorna somente as entradas de diretório que corresponderem à expressão.

**Valores para o parâmetro `flags` da função
[pathinfo()](function.pathinfo.md)**

**`PATHINFO_ALL`** ([int](language.types.integer.md))
:   Todas as partes da informação do caminho
    retornadas como um array associativo.

**`PATHINFO_DIRNAME`** ([int](language.types.integer.md))
:   O caminho do diretório ou arquivo.

**`PATHINFO_BASENAME`** ([int](language.types.integer.md))
:   O nome do diretório ou
    o nome e extensão do arquivo.

**`PATHINFO_EXTENSION`** ([int](language.types.integer.md))
:   A extensão do arquivo.

**`PATHINFO_FILENAME`** ([int](language.types.integer.md))
:   O nome do arquivo (sem a extensão)
    ou diretório.

**Valores para o parâmetro `scanner_mode` das funções
[parse\_ini\_file()](function.parse-ini-file.md) e
[parse\_ini\_string()](function.parse-ini-string.md)**

**`INI_SCANNER_NORMAL`** ([int](language.types.integer.md))
:   Modo de scanner INI normal.

**`INI_SCANNER_RAW`** ([int](language.types.integer.md))
:   Modo de scanner INI original.

**`INI_SCANNER_TYPED`** ([int](language.types.integer.md))
:   Modo de scanner INI tipado.

**Valores para o parâmetro `flags` da função
[fnmatch()](function.fnmatch.md)**

**`FNM_NOESCAPE`** ([int](language.types.integer.md))
:   Desativa o escape de barra invertida.

**`FNM_PATHNAME`** ([int](language.types.integer.md))
:   A barra na string corresponde apenas à barra no padrão fornecido.

**`FNM_PERIOD`** ([int](language.types.integer.md))
:   O ponto inicial na string deve corresponder exatamente ao ponto no padrão fornecido.

**`FNM_CASEFOLD`** ([int](language.types.integer.md))
:   Corresponde sem diferenciar maiúsculas e minúsculas. Parte da extensão GNU.

**Constantes de Envio de Arquivo do PHP**

**`UPLOAD_ERR_CANT_WRITE`** ([int](language.types.integer.md))
:   Falha ao gravar o arquivo no disco.
    O valor da constante é `7`.

**`UPLOAD_ERR_EXTENSION`** ([int](language.types.integer.md))
:   Uma extesão PHP parou o envio do arquivo. O PHP não
    fornece um meio de certificar que extensão causou a parada do
    envio; examinar a lista de extensões carregadas com [phpinfo()](function.phpinfo.md) pode ajudar.
    O valor da constante é `8`.

**`UPLOAD_ERR_FORM_SIZE`** ([int](language.types.integer.md))
:   O arquivo enviado excede o tamanho da diretiva *MAX\_FILE\_SIZE*
    que foi especificada no formulário HTML.
    O valor da constante é `2`.

**`UPLOAD_ERR_INI_SIZE`** ([int](language.types.integer.md))
:   O arquivo enviado excede o tamanho especificado na diretiva
    [upload\_max\_filesize](ini.core.md#ini.upload-max-filesize)
    do php.ini.
    O valor da constante é `1`.

**`UPLOAD_ERR_NO_FILE`** ([int](language.types.integer.md))
:   Nenhum arquivo foi enviado.
    O valor da constante é `4`.

**`UPLOAD_ERR_NO_TMP_DIR`** ([int](language.types.integer.md))
:   Falta um diretório temporário.
    O valor da constante é `6`.

**`UPLOAD_ERR_OK`** ([int](language.types.integer.md))
:   Não houve erro, o arquivo foi enviado com sucesso.
    O valor da constante é `0`.

**`UPLOAD_ERR_PARTIAL`** ([int](language.types.integer.md))
:   O arquivo foi enviado apenas parcialmente.
    O valor da constante é `3`.

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

# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zip.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

[ZipArchive](class.ziparchive.md) utiliza constantes de classe.
Existem vários tipos de constantes, os principais são:
Opções (prefixadas com `FL_`),
Opções globais (prefixadas com `AFL_`),
erros (prefixadas com `ER_`) e
modo (sem prefixo).

**Modos de abertura do arquivo**

**`ZipArchive::CREATE`** ([int](language.types.integer.md))
:   Cria o arquivo se ele não existir.

**`ZipArchive::OVERWRITE`** ([int](language.types.integer.md))
:   Se o arquivo existir, ignora seu conteúdo atual.
    Em outras palavras, manipule-o da mesma maneira que um arquivo vazio.

**`ZipArchive::EXCL`** ([int](language.types.integer.md))
:   Erro se o arquivo já existir.

**`ZipArchive::RDONLY`** ([int](language.types.integer.md))
:   Abre o arquivo apenas para leitura.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.17.1, respectivamente,
    se compilado com libzip ≥ 1.0.0.

**`ZipArchive::CHECKCONS`** ([int](language.types.integer.md))
:   Realiza verificações de consistência adicionais no arquivo e gera erro se falhar.

**Opções globais do arquivo**

**`ZipArchive::AFL_RDONLY`** ([int](language.types.integer.md))
:   O arquivo é somente leitura, não pode ser limpo.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**`ZipArchive::AFL_IS_TORRENTZIP`** ([int](language.types.integer.md))
:   O arquivo atual está zipado como torrent.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**`ZipArchive::AFL_WANT_TORRENTZIP`** ([int](language.types.integer.md))
:   Escreve o arquivo no formato torrentzip.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**`ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE`** ([int](language.types.integer.md))
:   Não remover o arquivo se o arquivo estiver vazio.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**Opções do arquivo**

**`ZipArchive::FL_NOCASE`** ([int](language.types.integer.md))
:   Ignora a diferenciação entre maiúsculas e minúsculas na busca por nomes.

**`ZipArchive::FL_NODIR`** ([int](language.types.integer.md))
:   Ignora o componente de diretório.

**`ZipArchive::FL_COMPRESSED`** ([int](language.types.integer.md))
:   Lê dados compactados.

**`ZipArchive::FL_UNCHANGED`** ([int](language.types.integer.md))
:   Usa os dados originais, ignorando alterações.

**`ZipArchive::FL_RECOMPRESS`** ([int](language.types.integer.md))
:   Força a recompressão dos dados.
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.
    Descontinuado a partir do PHP 8.3.0 e PECL zip 1.22.1,
    será removido em uma versão futura do libzip.

**`ZipArchive::FL_ENCRYPTED`** ([int](language.types.integer.md))
:   Lê dados criptografados (implica FL\_COMPRESSED).
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.

**`ZipArchive::FL_OVERWRITE`** ([int](language.types.integer.md))
:   Se o arquivo com o nome existir, substitua-o.
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.

**`ZipArchive::FL_LOCAL`** ([int](language.types.integer.md))
:   No cabeçalho local.
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.

**`ZipArchive::FL_CENTRAL`** ([int](language.types.integer.md))
:   No diretório central.
    Disponível a partir do PHP 8.0.0 e PECL zip 1.18.0.

**`ZipArchive::FL_ENC_GUESS`** ([int](language.types.integer.md))
:   Suposição de codificação de string (é o padrão). Disponível a partir do PHP 7.0.8.

**`ZipArchive::FL_ENC_RAW`** ([int](language.types.integer.md))
:   Obter a string não modificada. Disponível a partir do PHP 7.0.8.

**`ZipArchive::FL_ENC_STRICT`** ([int](language.types.integer.md))
:   Seguir estritamente a especificação. Disponível a partir do PHP 7.0.8.

**`ZipArchive::FL_ENC_UTF_8`** ([int](language.types.integer.md))
:   A string é codificada em UTF-8. Disponível a partir do PHP 7.0.8.

**`ZipArchive::FL_ENC_CP437`** ([int](language.types.integer.md))
:   A string é codificada em CP437. Disponível a partir do PHP 7.0.8.

**`ZipArchive::FL_OPEN_FILE_NOW`** ([int](language.types.integer.md))
:   Abre o arquivo quando adicionado em vez de esperar o arquivo zip ser fechado.
    Esteja ciente do consumo de descritores de arquivo.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.1.

**Modos de compressão**

**`ZipArchive::CM_DEFAULT`** ([int](language.types.integer.md))
:   melhor de deflate ou store.

**`ZipArchive::CM_STORE`** ([int](language.types.integer.md))
:   armazenado (não comprimido).

**`ZipArchive::CM_SHRINK`** ([int](language.types.integer.md))
:   reduzido

**`ZipArchive::CM_REDUCE_1`** ([int](language.types.integer.md))
:   reduzido com fator 1

**`ZipArchive::CM_REDUCE_2`** ([int](language.types.integer.md))
:   reduzido com fator 2

**`ZipArchive::CM_REDUCE_3`** ([int](language.types.integer.md))
:   reduzido com fator 3

**`ZipArchive::CM_REDUCE_4`** ([int](language.types.integer.md))
:   reduzido com fator 4

**`ZipArchive::CM_IMPLODE`** ([int](language.types.integer.md))
:   implode

**`ZipArchive::CM_DEFLATE`** ([int](language.types.integer.md))
:   desinflado

**`ZipArchive::CM_DEFLATE64`** ([int](language.types.integer.md))
:   deflate64

**`ZipArchive::CM_PKWARE_IMPLODE`** ([int](language.types.integer.md))
:   implode PKWARE

**`ZipArchive::CM_BZIP2`** ([int](language.types.integer.md))
:   algoritmo BZIP2

**`ZipArchive::CM_LZMA`** ([int](language.types.integer.md))
:   algoritmo LZMA

**`ZipArchive::CM_LZMA2`** ([int](language.types.integer.md))
:   algoritmo LZMA2.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.0, respectivamente,
    se compilado com libzip ≥ 1.6.0.

**`ZipArchive::CM_ZSTD`** ([int](language.types.integer.md))
:   algoritmo Zstandard.
    Disponível a partir do PHP 8.0.0 e PECL zip 1.19.1, respectivamente,
    se compilado com libzip ≥ 1.8.0.

**`ZipArchive::CM_XZ`** ([int](language.types.integer.md))
:   algoritmo XZ.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.6.0.

**`ZipArchive::CM_TERSE`** ([int](language.types.integer.md))

**`ZipArchive::CM_LZ77`** ([int](language.types.integer.md))

**`ZipArchive::CM_WAVPACK`** ([int](language.types.integer.md))

**`ZipArchive::CM_PPMD`** ([int](language.types.integer.md))

**Erros**

**`ZipArchive::ER_OK`** ([int](language.types.integer.md))
:   Sem erro.

**`ZipArchive::ER_MULTIDISK`** ([int](language.types.integer.md))
:   Arquivos zip multi-disco não suportados.

**`ZipArchive::ER_RENAME`** ([int](language.types.integer.md))
:   Falha ao renomear arquivo temporário.

**`ZipArchive::ER_CLOSE`** ([int](language.types.integer.md))
:   Falha ao fechar o arquivo zip.

**`ZipArchive::ER_SEEK`** ([int](language.types.integer.md))
:   Erro de busca.

**`ZipArchive::ER_READ`** ([int](language.types.integer.md))
:   Erro de leitura.

**`ZipArchive::ER_WRITE`** ([int](language.types.integer.md))
:   Erro de escrita.

**`ZipArchive::ER_CRC`** ([int](language.types.integer.md))
:   Erro CRC.

**`ZipArchive::ER_ZIPCLOSED`** ([int](language.types.integer.md))
:   O arquivo zip contido foi fechado.

**`ZipArchive::ER_NOENT`** ([int](language.types.integer.md))
:   Arquivo não encontrado.

**`ZipArchive::ER_EXISTS`** ([int](language.types.integer.md))
:   Arquivo já existe.

**`ZipArchive::ER_OPEN`** ([int](language.types.integer.md))
:   Não é possível abrir o arquivo.

**`ZipArchive::ER_TMPOPEN`** ([int](language.types.integer.md))
:   Falha ao criar arquivo temporário.

**`ZipArchive::ER_ZLIB`** ([int](language.types.integer.md))
:   Erro do Zlib.

**`ZipArchive::ER_MEMORY`** ([int](language.types.integer.md))
:   Falha na alocação de memória.

**`ZipArchive::ER_CHANGED`** ([int](language.types.integer.md))
:   Entrada foi alterada.

**`ZipArchive::ER_COMPNOTSUPP`** ([int](language.types.integer.md))
:   Método de compressão não suportado.

**`ZipArchive::ER_EOF`** ([int](language.types.integer.md))
:   EOF prematuro.

**`ZipArchive::ER_INVAL`** ([int](language.types.integer.md))
:   Argumento inválido.

**`ZipArchive::ER_NOZIP`** ([int](language.types.integer.md))
:   Não é um arquivo zip.

**`ZipArchive::ER_INTERNAL`** ([int](language.types.integer.md))
:   Erro interno.

**`ZipArchive::ER_INCONS`** ([int](language.types.integer.md))
:   Arquivo zip inconsistente.

**`ZipArchive::ER_REMOVE`** ([int](language.types.integer.md))
:   Não é possível remover o arquivo.

**`ZipArchive::ER_DELETED`** ([int](language.types.integer.md))
:   Entrada foi deletada.

**`ZipArchive::ER_ENCRNOTSUPP`** ([int](language.types.integer.md))
:   Método de criptografia não suportado.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente.

**`ZipArchive::ER_RDONLY`** ([int](language.types.integer.md))
:   Arquivo só de leitura.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente.

**`ZipArchive::ER_NOPASSWD`** ([int](language.types.integer.md))
:   Nenhuma senha fornecida.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente.

**`ZipArchive::ER_WRONGPASSWD`** ([int](language.types.integer.md))
:   Senha incorreta fornecida.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente.

**`ZipArchive::ER_OPNOTSUPP`** ([int](language.types.integer.md))
:   Operação não suportada.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.0.0.

**`ZipArchive::ER_INUSE`** ([int](language.types.integer.md))
:   Recurso ainda em uso.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.0.0.

**`ZipArchive::ER_TELL`** ([int](language.types.integer.md))
:   Erro ao comunicar.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.0.0.

**`ZipArchive::ER_COMPRESSED_DATA`** ([int](language.types.integer.md))
:   Dados comprimidos inválidos.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.6.0.

**`ZipArchive::ER_CANCELLED`** ([int](language.types.integer.md))
:   Operação cancelada.
    Disponível a partir do PHP 7.4.3 e PECL zip 1.16.1, respectivamente,
    se compilado com libzip ≥ 1.6.0.

**`ZipArchive::ER_DATA_LENGTH`** ([int](language.types.integer.md))
:   Comprimento de dados inesperado.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**`ZipArchive::ER_NOT_ALLOWED`** ([int](language.types.integer.md))
:   Não permitido no torrentzip.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.0, respectivamente,
    se compilado com libzip ≥ 1.10.0.

**`ZipArchive::ER_TRUNCATED_ZIP`** ([int](language.types.integer.md))
:   Arquivo zip possivelmente truncado ou corrompido.
    Disponível a partir do PHP 8.4.0 e PECL zip 1.22.4, respectivamente,
    se construído com libzip ≥ 1.11.1.

**Modos de criptografia**

**`ZipArchive::EM_NONE`** ([int](language.types.integer.md))
:   Sem criptografia. Disponível a partir do PHP 7.2.0 e PECL zip 1.14.0, respectivamente.

**`ZipArchive::EM_TRAD_PKWARE`** ([int](language.types.integer.md))
:   Criptografia PKWARE tradicional. Disponível a partir do PHP 8.0.0 e PECL zip 1.19.0, respectivamente.

**`ZipArchive::EM_AES_128`** ([int](language.types.integer.md))
:   Criptografia AES 128. Disponível a partir do PHP 7.2.0 e PECL zip 1.14.0, respectivamente,
    se compilado com libzip ≥ 1.2.0.

**`ZipArchive::EM_AES_192`** ([int](language.types.integer.md))
:   Criptografia AES 192. Disponível a partir do PHP 7.2.0 e PECL zip 1.14.0, respectivamente,
    se compilado com libzip ≥ 1.2.0.

**`ZipArchive::EM_AES_256`** ([int](language.types.integer.md))
:   Criptografia AES 256. Disponível a partir do PHP 7.2.0 e PECL zip 1.14.0, respectivamente,
    se compilado com libzip ≥ 1.2.0.

**`ZipArchive::EM_UNKNOWN`** ([int](language.types.integer.md))
:   Algoritmo de criptografia desconhecido. Disponível a partir do PHP 8.0.0 e PECL zip 1.19.0, respectivamente.

**Constantes de parâmetros de comprimento**

**`ZipArchive::LENGTH_TO_END`** ([int](language.types.integer.md))
:   Utilize o tamanho do arquivo; se o arquivo crescer, dados adicionais serão ignorados; se o arquivo encolher, um erro será gerado (**`ZipArchive::ER_DATA_LENGTH`**).
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.2.

**`ZipArchive::LENGTH_UNCHECKED`** ([int](language.types.integer.md))
:   Utilize todos os dados disponíveis.
    Disponível a partir do PHP 8.3.0 e PECL zip 1.22.2, se compilado com libzip ≥ 1.10.1.

**Outras constantes**

**`ZipArchive::LIBZIP_VERSION`** ([string](language.types.string.md))
:   Versão da biblioteca Zip. Disponível a partir do PHP 7.4.3 e PECL zip 1.16.0.

**Constantes do sistema operacional para atributos externos**

**`ZipArchive::OPSYS_DOS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_AMIGA`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_OPENVMS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_UNIX`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_VM_CMS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_ATARI_ST`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_OS_2`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_MACINTOSH`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_Z_SYSTEM`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_CPM`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_WINDOWS_NTFS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_MVS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_VSE`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_ACORN_RISC`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_VFAT`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_ALTERNATE_MVS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_BEOS`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_TANDEM`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_OS_400`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_OS_X`** ([int](language.types.integer.md))

**`ZipArchive::OPSYS_DEFAULT`** ([int](language.types.integer.md))
:   Desde PECL zip 1.12.4

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

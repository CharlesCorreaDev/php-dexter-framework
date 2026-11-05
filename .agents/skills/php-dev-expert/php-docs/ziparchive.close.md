# Fecha o arquivo de arquivo ativo (aberto ou recém-criado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.close.php

---

# ZipArchive::close

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::close — Fecha o arquivo de arquivo ativo (aberto ou recém-criado)

### Descrição

public function **ZipArchive::close**(): [bool](language.types.boolean.md)

Fecha o arquivo aberto ou criado e salva as alterações. Este método é
chamado automaticamente no final do script.

> **Nota**:
>
> Todas as modificações no arquivo (adição, remoção ou renomeação
> de entradas) são realizadas na memória e somente gravadas no disco quando
> este método é chamado. Como resultado, erros relacionados ao sistema de
> arquivos (como permissão negada ou diretórios ausentes) só
> aparecerão no momento do fechamento, em vez de quando os métodos de
> modificação são chamados.

Se o arquivo não contiver arquivos, o arquivo é completamente removido por padrão
(nenhum arquivo vazio é gravado) de acordo com o valor do
**`ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE`**
global flag.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ZipArchive::setArchiveFlag()](ziparchive.setarchiveflag.md) - Define uma opção global de um arquivo ZIP

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

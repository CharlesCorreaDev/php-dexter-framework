# A classe OCILob

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ocilob.php

---

# A classe OCILob

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

## Introdução

Funcionalidade OCI8 LOB para objetos binários (BLOB) e caracteres (CLOB) grandes.

> **Nota**:
>
> A classe **OCI-Lob** foi renomeada para **OCILob** no PHP 8 e PECL OCI8 3.0.0 para adequação ao padrão de nomes do PHP.

## Resumo da classe

class ****OCILob****
{

/\* Métodos \*/

public function [append](ocilob.append.md)([OCILob](class.ocilob.md) `$from`): [bool](language.types.boolean.md)

public function [close](ocilob.close.md)(): [bool](language.types.boolean.md)

public function [eof](ocilob.eof.md)(): [bool](language.types.boolean.md)

public function [erase](ocilob.erase.md)([?](language.types.null.md)[int](language.types.integer.md) `$offset` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [export](ocilob.export.md)([string](language.types.string.md) `$filename`, [?](language.types.null.md)[int](language.types.integer.md) `$offset` = **`null`**, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [bool](language.types.boolean.md)

public function [flush](ocilob.flush.md)([int](language.types.integer.md) `$flag` = 0): [bool](language.types.boolean.md)

public function [free](ocilob.free.md)(): [bool](language.types.boolean.md)

public function [getBuffering](ocilob.getbuffering.md)(): [bool](language.types.boolean.md)

public function [import](ocilob.import.md)([string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

public function [load](ocilob.load.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [read](ocilob.read.md)([int](language.types.integer.md) `$length`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [rewind](ocilob.rewind.md)(): [bool](language.types.boolean.md)

public function [save](ocilob.save.md)([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$offset` = 0): [bool](language.types.boolean.md)

public function [seek](ocilob.seek.md)([int](language.types.integer.md) `$offset`, [int](language.types.integer.md) `$whence` = **`OCI_SEEK_SET`**): [bool](language.types.boolean.md)

public function [setBuffering](ocilob.setbuffering.md)([bool](language.types.boolean.md) `$mode`): [bool](language.types.boolean.md)

public function [size](ocilob.size.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [tell](ocilob.tell.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [truncate](ocilob.truncate.md)([int](language.types.integer.md) `$length` = 0): [bool](language.types.boolean.md)

public function [write](ocilob.write.md)([string](language.types.string.md) `$data`, [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [writeTemporary](ocilob.writetemporary.md)([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$type` = **`OCI_TEMP_CLOB`**): [bool](language.types.boolean.md)

}

## Índice

- [OCILob::append](ocilob.append.md) — Acrescenta dados do objeto grande a outro objeto grande
- [OCILob::close](ocilob.close.md) — Fecha o descritor LOB
- [OCILob::eof](ocilob.eof.md) — Testa o fim de arquivo no descritor de um objeto grande
- [OCILob::erase](ocilob.erase.md) — Apaga uma parte especificada dos dados internos do LOB
- [OCILob::export](ocilob.export.md) — Exporta o conteúdo do LOB para um arquivo
- [OCILob::flush](ocilob.flush.md) — Libera/grava o buffer do LOB no servidor
- [OCILob::free](ocilob.free.md) — Libera recursos associados ao descritor do LOB
- [OCILob::getBuffering](ocilob.getbuffering.md) — Retorna o estado atual de buffer para o objeto grande
- [OCILob::import](ocilob.import.md) — Importa dados de arquivo para o LOB
- [OCILob::load](ocilob.load.md) — Retorna o conteúdo de um objeto grande
- [OCILob::read](ocilob.read.md) — Lê parte do objeto grande
- [OCILob::rewind](ocilob.rewind.md) — Move o ponteiro interno para o início do objeto grande
- [OCILob::save](ocilob.save.md) — Salva dados no objeto grande
- [OCILob::saveFile](ocilob.savefile.md) — Sinônimo de OCILob::import
- [OCILob::seek](ocilob.seek.md) — Define o ponteiro interno do objeto grande
- [OCILob::setBuffering](ocilob.setbuffering.md) — Altera o estado atual do buffer para o objeto grande
- [OCILob::size](ocilob.size.md) — Retorna o tamanho do objeto grande
- [OCILob::tell](ocilob.tell.md) — Retorna a posição atual do ponteiro interno do objeto grande
- [OCILob::truncate](ocilob.truncate.md) — Trunca objeto grande
- [OCILob::write](ocilob.write.md) — Grava dados no objeto grande
- [OCILob::writeTemporary](ocilob.writetemporary.md) — Grava um objeto grande temporário
- [OCILob::writeToFile](ocilob.writetofile.md) — Sinônimo de OCILob::export

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

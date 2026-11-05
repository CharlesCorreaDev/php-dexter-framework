# Funções Zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.zip.php

---

# Funções Zip

**Aviso**

A API procedural foi descontinuada desde o PHP 8.0.0.
A classe [ZipArchive](class.ziparchive.md) deve ser usada em seu lugar.

## Índice

- [zip\_close](function.zip-close.md) — Fecha um arquivo ZIP
- [zip\_entry\_close](function.zip-entry-close.md) — Fecha o arquivo que está aberto
- [zip\_entry\_compressedsize](function.zip-entry-compressedsize.md) — Obtém o tamanho comprimido do item
- [zip\_entry\_compressionmethod](function.zip-entry-compressionmethod.md) — Recupera qual o método de compressão foi utilizado no arquivo
- [zip\_entry\_filesize](function.zip-entry-filesize.md) — Retorna o tamanho de um item de diretório
- [zip\_entry\_name](function.zip-entry-name.md) — Retorna o nome do arquivo
- [zip\_entry\_open](function.zip-entry-open.md) — Abre um arquivo para leitura
- [zip\_entry\_read](function.zip-entry-read.md) — Obtém dados de um arquivo
- [zip\_open](function.zip-open.md) — Abre um arquivo ZIP
- [zip\_read](function.zip-read.md) — Lê o próximo item em um arquivo ZIP

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
